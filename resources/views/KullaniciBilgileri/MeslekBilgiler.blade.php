@extends('layouts.panel_layout', ['pageName' => 'Kullanıcı Meslek Bilgileri'])

@section('content')

<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <div id="kt_header" class="header">
        <div class="container d-flex flex-stack flex-wrap gap-2" id="kt_header_container">
            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0">
                <h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Öğrenim Bilgileri</h1>
            </div>
        </div>
    </div>
<div class="container mt-5">
    <h1>Kullanıcı Meslek Bilgileri</h1>

    <!-- Meslek Ekleme Formu -->
    <form action="{{ route('profile.profession.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="profession">Meslek Adı</label>
            <input type="text" name="profession" id="profession" class="form-control" placeholder="Meslek adı girin" required>
        </div>
        <div class="form-group mt-3">
            <label for="start_date">Başlangıç Tarihi</label>
            <input type="date" name="start_date" id="start_date" class="form-control" required>
        </div>
        <div class="form-group mt-3">
            <label for="end_date">Bitiş Tarihi</label>
            <input type="date" name="end_date" id="end_date" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Ekle</button>
    </form>

    <!-- Kullanıcı Meslek Listesi -->
    <div class="mt-5">
        <h2>Eklenen Meslekler</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <ul class="list-group">
            @forelse($professions as $profession)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $profession->pivot->name }} ({{ \Carbon\Carbon::parse($profession->pivot->start_date)->format('d.m.Y') }} - 
                    {{ $profession->pivot->end_date ? \Carbon\Carbon::parse($profession->pivot->end_date)->format('d.m.Y') : 'Devam ediyor' }})
                    <div>
                        <form action="{{ route('profile.profession.update', $profession->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('PUT')
                            <input type="date" name="start_date" value="{{ $profession->pivot->start_date }}" required>
                            <input type="date" name="end_date" value="{{ $profession->pivot->end_date }}">
                            <button type="submit" class="btn btn-warning btn-sm">Güncelle</button>
                        </form>
                        <form action="{{ route('profile.profession.delete', $profession->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Bu mesleği silmek istediğinize emin misiniz?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Sil</button>
                        </form>
                    </div>
                </li>
            @empty
                <li class="list-group-item">Henüz meslek bilgisi eklenmedi.</li>
            @endforelse
        </ul>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const professionInput = document.getElementById('profession');
        const suggestionsList = document.createElement('ul');
        suggestionsList.classList.add('list-group', 'position-absolute', 'w-100');
        suggestionsList.style.zIndex = '1000';
        suggestionsList.style.display = 'none';
        professionInput.parentNode.appendChild(suggestionsList);

        professionInput.addEventListener('input', function () {
            const query = professionInput.value;

            if (query.length >= 3) {
                fetch(`{{ route('professions.search') }}?q=${query}`)
                    .then(response => response.json())
                    .then(data => {
                        suggestionsList.innerHTML = '';
                        suggestionsList.style.display = 'block';

                        data.forEach(profession => {
                            const li = document.createElement('li');
                            li.textContent = profession.name;
                            li.classList.add('list-group-item');
                            li.addEventListener('click', function () {
                                professionInput.value = profession.name;
                                suggestionsList.style.display = 'none';
                            });
                            suggestionsList.appendChild(li);
                        });
                    });
            } else {
                suggestionsList.style.display = 'none';
            }
        });

        document.addEventListener('click', function (e) {
            if (!professionInput.contains(e.target) && !suggestionsList.contains(e.target)) {
                suggestionsList.style.display = 'none';
            }
        });

        const startDateInput = document.getElementById('start_date');
        const endDateInput = document.getElementById('end_date');

        function validateDate(input) {
            const today = new Date();
            const inputDate = new Date(input.value);
            const year = input.value.split('-')[0];

            if (year.length > 4 || isNaN(year)) {
                alert('Yıl kısmı 4 rakamdan oluşmalıdır.');
                input.value = '';
                return false;
            }

            if (inputDate > today) {
                alert('Tarih bugünden ileri olamaz.');
                input.value = '';
                return false;
            }

            return true;
        }

        startDateInput.addEventListener('input', function () {
            validateDate(startDateInput);
        });

        endDateInput.addEventListener('input', function () {
            validateDate(endDateInput);
        });
    });
</script>

@endsection



