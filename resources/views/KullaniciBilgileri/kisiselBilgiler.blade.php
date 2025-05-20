@extends('layouts.panel_layout', ['pageName' => 'Kişisel Bilgiler'])

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <div id="kt_header" class="header">
        <div class="container d-flex flex-stack flex-wrap gap-2" id="kt_header_container">
            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0">
                <h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">ÖZGEÇMİŞ</h1>
            </div>
        </div>
    </div>

    <div class="container-xxl">
        <div class="card mb-5">
            <div class="card-header">
                <h3 class="fw-bold">Kişisel Bilgiler</h3>
            </div>
            <div class="card-body">
                <!-- Başarı Mesajı -->
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('user.updatePersonalInfo') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Profil Resmi -->
                    <div class="mb-3 text-center">
                        <label for="profile_image" class="form-label">Profil Resmi</label>
                        <div class="mb-3">
                            <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('assets/default-profile.png') }}" 
                                 alt="Profil Resmi" 
                                 class="img-thumbnail" 
                                 style="width: 150px; height: 150px; object-fit: cover;">
                        </div>
                        <input type="file" name="profile_image" id="profile_image" class="form-control">
                    </div>

                    <!-- Ad Soyad -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Ad Soyad</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                    </div>
                    

                    <!-- Kimlik Numarası -->
                    <div class="mb-3">
                        <label for="id_number" class="form-label">T.C. Kimlik Numarası</label>
                        <input type="text" name="id_number" id="id_number" class="form-control" value="{{ old('id_number', $user->id_number) }}" required>
                    </div>

                    <!-- Doğum Tarihi -->
                    <div class="mb-3">
                        <label for="birth_date" class="form-label">Doğum Tarihi</label>
                        <input type="date" name="birth_date" id="birth_date" class="form-control" value="{{ old('birth_date', $user->birth_date) }}"required>
                    </div>

                    <!-- Cinsiyet -->
                    <div class="mb-3">
                        <label for="gender" class="form-label">Cinsiyet</label>
                        <select name="gender" id="gender" class="form-select">
                            <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>Erkek</option>
                            <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>Kadın</option>
                            <option value="other" {{ old('gender', $user->gender) == 'other' ? 'selected' : '' }}>Diğer</option>
                           "required>
                        </select>
                       
                    </div>

                    <!-- Kaydet Butonu -->
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</div>
@yield('footer')
@endsection