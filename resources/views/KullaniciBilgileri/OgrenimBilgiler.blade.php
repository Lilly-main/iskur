@extends('layouts.panel_layout', ['pageName' => 'Öğrenim Bilgileri'])

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <div id="kt_header" class="header">
        <div class="container d-flex flex-stack flex-wrap gap-2" id="kt_header_container">
            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0">
                <h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">Öğrenim Bilgileri</h1>
            </div>
        </div>
    </div>

    <div class="container-xxl">
        <div class="card mb-5">
            <div class="card-header">
                <h3 class="fw-bold">Öğrenim Bilgilerinizi Giriniz</h3>
            </div>
            <div class="card-body">
                <!-- Başarı Mesajı -->
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('user.updateEducationInfo') }}" method="POST">
                    @csrf
                    <!-- Eğitim Seviyesi -->
                    <div class="mb-3">
                        <label for="education_level" class="form-label">Eğitim Seviyesi</label>
                        <select name="education_level" id="education_level" class="form-select" required>
                            <option value="" disabled selected>Eğitim Seviyesi Seçiniz</option>
                            <option value="ilkogretim">İlköğretim</option>
                            <option value="lise">Lise</option>
                            <option value="universite">Üniversite</option>
                            <option value="yuksek_lisans">Yüksek Lisans</option>
                        </select>
                    </div>

                    <!-- Okul Adı -->
                    <div class="mb-3">
                        <label for="school_name" class="form-label">Okul Adı</label>
                        <input type="text" name="school_name" id="school_name" class="form-control" value="{{ old('school_name', $user->school_name ?? '') }}" required>
                    </div>

                    <!-- Bölüm -->
                    <div class="mb-3">
                        <label for="department" class="form-label">Bölüm</label>
                        <input type="text" name="department" id="department" class="form-control" value="{{ old('department', $user->department ?? '') }}" required>
                    </div>

                    <!-- Mezuniyet Tarihi -->
                    <div class="mb-3">
                        <label for="graduation_date" class="form-label">Mezuniyet Tarihi</label>
                        <input type="date" name="graduation_date" id="graduation_date" class="form-control" value="{{ old('graduation_date', $user->graduation_date ?? '') }}">
                    </div>

                    <!-- Kaydet ve Güncelle Butonları -->
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                        <form action="{{ route('user.updateEducationInfo') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-warning">Güncelle</button>
                        </form>
                    </div>
                </form>

                <!-- Kayıtlı Öğrenim Bilgileri -->
                <div class="mt-5">
                    <h5>Kayıtlı Öğrenim Bilgileriniz</h5>
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>Eğitim Seviyesi:</strong> {{ $user->education_level ?? '-' }}</li>
                        <li class="list-group-item"><strong>Okul Adı:</strong> {{ $user->school_name ?? '-' }}</li>
                        <li class="list-group-item"><strong>Bölüm:</strong> {{ $user->department ?? '-' }}</li>
                        <li class="list-group-item"><strong>Mezuniyet Tarihi:</strong> {{ $user->graduation_date ?? '-' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('footer')
@endsection