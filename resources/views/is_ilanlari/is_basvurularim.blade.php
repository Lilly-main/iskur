@extends('layouts.panel_layout', ['pageName' => 'is_basvurularim', 'active' => 'is_basvurularim'])

@section('content')

<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
    <div id="kt_header" class="header">
        <div class="container d-flex flex-stack flex-wrap gap-2" id="kt_header_container">
            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0">
                <h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">İş Başvurularım</h1>
            </div>
        </div>
    </div>
<div class="container-xxl mt-8">
    <h3 class="fw-bold mb-4"> </h3>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    @if($basvurular->count())
        <div class="row g-4">
            @foreach($basvurular as $basvuru)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm border-primary mb-4 h-100">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">{{ $basvuru->jobPosting->ilan_basligi }}</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Şirket:</strong> {{ $basvuru->jobPosting->sirket_adi }}</p>
                            <p><strong>Şehir:</strong> {{ $basvuru->jobPosting->sehir }}</p>
                            <p><strong>Meslek:</strong> {{ $basvuru->jobPosting->meslek }}</p>
                            <p><strong>Maaş:</strong> {{ $basvuru->jobPosting->maas_araligi }}</p>
                            <p><strong>Çalışma Şekli:</strong> {{ $basvuru->jobPosting->calisma_sekli }}</p>
                            <p><strong>Başlangıç Tarihi:</strong> {{ $basvuru->jobPosting->baslangic_tarihi }}</p>
                            <p><strong>Cinsiyet:</strong> {{ $basvuru->jobPosting->cinsiyet }}</p>
                            <p><strong>Yaş:</strong> {{ $basvuru->jobPosting->yas_min }} - {{ $basvuru->jobPosting->yas_max }}</p>
                            @if($basvuru->cover_letter)
                                <p><strong>Ön Yazı:</strong> {{ $basvuru->cover_letter }}</p>
                            @endif
                            <p class="text-muted small mb-0">Başvuru Tarihi: {{ $basvuru->created_at->format('d.m.Y H:i') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $basvurular->links('vendor.pagination.custom') }}
        </div>
    @else
        <div class="alert alert-warning">Henüz herhangi bir iş ilanına başvurmadınız.</div>
    @endif
</div>
@yield('footer')
@endsection


