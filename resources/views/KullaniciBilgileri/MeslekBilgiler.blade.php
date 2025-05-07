@extends('layouts.panel_layout' , ['pageName' => 'Meslek Bilgileri'])

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <div id="kt_header" class="header">
        <div class="container d-flex flex-stack flex-wrap gap-2" id="kt_header_container">
            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0">
                <h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">MESLEK BİLGİLERİ</h1>
            </div>
        </div>
    </div>
<div class="d-flex justify-content-start align-items-start" style="min-height: 100vh;">
    <div class="container text-start">
        <h1 class="mb-4">Meslek Bilgileri</h1>

        <!-- Meslek Seçimi Arama Kutusu -->
        <form action="{{ route('professions.store') }}" method="POST">
            @csrf
            <div class="form-group position-relative" style="max-width: 300px;">
                <label for="profession">Meslek Seçin</label>
                <input type="text" id="profession-search" class="form-control" placeholder="Meslek arayın..." autocomplete="off">
                <ul id="profession-suggestions" class="list-group position-absolute w-100" style="z-index: 1000; display: none;"></ul>
            </div>
            <div class="form-group mt-3" style="max-width: 300px;">
                <label for="start_date">Başlangıç Tarihi</label>
                <input type="date" name="start_date" class="form-control" required>
            </div>
            <div class="form-group mt-3" style="max-width: 300px;">
                <label for="end_date">Bitiş Tarihi</label>
                <input type="date" name="end_date" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Kaydet</button>
        </form>

        <!-- Eklenen Meslekler Listesi -->
        <div class="mt-5">
            <h2>Eklenen Meslekler</h2>
            <ul id="added-professions" class="list-group">
                <!-- Dinamik olarak eklenecek -->
            </ul>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('profession-search');
        const suggestionsList = document.getElementById('profession-suggestions');
        const addedProfessionsList = document.getElementById('added-professions');
        const form = document.querySelector('form');

        // Kullanıcının eklediği meslekleri yükle
        fetch(`{{ route('professions.getUserProfessions') }}`)
            .then(response => response.json())
            .then(data => {
                data.forEach(profession => {
                    const li = document.createElement('li');
                    li.textContent = `${profession.name} (${profession.pivot.start_date} - ${profession.pivot.end_date || 'Devam ediyor'})`;
                    li.classList.add('list-group-item');
                    addedProfessionsList.appendChild(li);
                });
            });

        // Tarih alanları için yıl kontrolü
        const dateInputs = document.querySelectorAll('input[type="date"]');
        dateInputs.forEach(input => {
            input.addEventListener('input', function () {
                const year = this.value.split('-')[0];
                if (year && (year.length !== 4 || isNaN(year))) {
                    alert('Yıl kısmı 4 rakamdan oluşmalıdır.');
                    this.value = '';
                }
            });
        });

        searchInput.addEventListener('input', function () {
            const query = searchInput.value;

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
                                searchInput.value = profession.name;
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
            if (!searchInput.contains(e.target) && !suggestionsList.contains(e.target)) {
                suggestionsList.style.display = 'none';
            }
        });

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const li = document.createElement('li');
                        li.textContent = `${data.profession.name} (${formData.get('start_date')} - ${formData.get('end_date') || 'Devam ediyor'})`;
                        li.classList.add('list-group-item');
                        addedProfessionsList.appendChild(li);

                        form.reset();
                        searchInput.value = '';
                    } else {
                        alert('Meslek eklenirken bir hata oluştu.');
                    }
                })
                .catch(error => {
                    console.error('Hata:', error);
                    alert('Meslek eklenirken bir hata oluştu.');
                });
        });
    });
</script>
@endsection

