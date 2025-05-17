@extends('layouts.panel_layout' , ['pageName' => 'Belgeler'])


@section('content')
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <div id="kt_header" class="header">
        <div class="container d-flex flex-stack flex-wrap gap-2" id="kt_header_container">
            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0">
                <h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">KİŞİSEL BELGELER</h1>
            </div>
        </div>
    </div>
<div class="container">
    <h1>Kişisel Belgeler</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('user.documents.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="document_name" class="form-label">Belge Adı</label>
            <input type="text" class="form-control" id="document_name" name="document_name" required>
        </div>
        <div class="mb-3">
            <label for="document_type" class="form-label">Belge Türü</label>
            <input type="text" class="form-control" id="document_type" name="document_type" required>
        </div>
        <div class="mb-3">
            <label for="issue_date" class="form-label">Veriliş Tarihi</label>
            <input type="date" class="form-control" id="issue_date" name="issue_date" required>
        </div>
        <button type="submit" class="btn btn-primary">Belge Ekle</button>
    </form>

    <h2 class="mt-5">Mevcut Belgeler</h2>
    <ul class="list-group">
        @foreach($documents as $document)
            <li class="list-group-item">
                {{ $document->document_name }} - {{ $document->document_type }} ({{ $document->issue_date }})
            </li>
        @endforeach
    </ul>
</div>
@endsection