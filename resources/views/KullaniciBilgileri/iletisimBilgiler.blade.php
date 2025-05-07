@extends('layouts.panel_layout', ['pageName' => 'İletişim Bilgileri'])

@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <div id="kt_header" class="header">
        <div class="container d-flex flex-stack flex-wrap gap-2" id="kt_header_container">
            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0">
                <h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">İletişim Bilgileri</h1>
            </div>
        </div>
    </div>

    <div class="container-xxl">
        <div class="card mb-5">
            <div class="card-header">
                <h3 class="fw-bold">İletişim Bilgileri</h3>
            </div>
            <div class="card-body">
                <!-- Başarı Mesajı -->
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('user.updateContactInfo') }}" method="POST">
                    @csrf
                    <!-- Telefon Numarası -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefon Numarası</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="{{ $user->phone }}" required>
                    </div>

                    <!-- Adres -->
                    <div class="mb-3">
                        <label for="address" class="form-label">Adres</label>
                        <textarea name="address" id="address" class="form-control" rows="3" required>{{ $user->address }}</textarea>
                    </div>

                    <!-- Posta Adresi -->
                    <div class="mb-3">
                        <label for="email" class="form-label">E-posta Adresi</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" readonly>
                    </div>

                    <!-- Kaydet Butonu -->
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection