@extends('layouts.panel_layout',['pageName' => 'is_ilanlari.isilanlari', 'active' => ''])

@section('style')

@endsection

@section('content')
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header">
						<!--begin::Container-->
						<div class="container d-flex flex-stack flex-wrap gap-2" id="kt_header_container">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
								<h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">İş İlanları</h1>
								<ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
									<li class="breadcrumb-item text-muted">
										<a href="../../demo3/dist/index.html" class="text-muted">Anasayfa</a>
									</li>
									<li class="breadcrumb-item text-muted">Sayfalar</li>
									<li class="breadcrumb-item text-muted">Hesap</li>
									<li class="breadcrumb-item text-dark">İş İlanları</li>
								</ul>
							</div>
							<!--end::Page title=-->

							<div class="d-flex align-items-center flex-shrink-0">								

							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->

					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
					

						
							<div class="card mb-5 mb-xl-10">
								
								
								
								<!--begin::Content-->
								<div id="kt_account_settings_profile_details" class="collapse show">
								
								<!--begin::Search-->
								<div id="kt_header_search" class="header-search d-flex align-items-center w-lg-250px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
									<!--begin::Tablet and mobile search toggle-->
									<div data-kt-search-element="toggle" class="d-flex d-lg-none align-items-center">
										<div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
											<span class="svg-icon svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
													<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Tablet and mobile search toggle-->
									<!--begin::Form(use d-none d-lg-flex classes for responsive search)-->
									<form data-kt-search-element="form" class="d-none align-items-center d-lg-flex w-100 mb-5 mb-lg-0 position-relative" autocomplete="off">
										<!--begin::Hidden input(Added to disable form autocomplete)-->
										<input type="hidden" />
										<!--end::Hidden input-->										
									
										<!--begin::Actions-->
											
											<!--end::Actions-->
										</form>
										<!--end::Preferences-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Search-->
								
									<!--begin::Form-->
									<form id="job_search_form" class="form" method="GET" action="{{ route('is_ilanlari.index') }}">
										<!--begin::Card body-->
										<div class="card-body border-top p-9">
											<!-- MESLEK (AJAX ile autocomplete) -->
											<div class="row mb-6">
											    <label class="col-lg-4 col-form-label fw-semibold fs-6">Meslek</label>
											    <div class="col-lg-8 fv-row position-relative">
											        <input type="text" name="profession" id="profession" class="form-control" placeholder="Meslek adı girin" autocomplete="off">
											        <ul id="profession-suggestions" class="list-group position-absolute w-100" style="z-index:1000; display:none;"></ul>
											    </div>
											</div>
											<script>
											document.addEventListener('DOMContentLoaded', function () {
											    const professionInput = document.getElementById('profession');
											    const suggestionsList = document.getElementById('profession-suggestions');
											
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
											                    if (data.length === 0) {
											                        const li = document.createElement('li');
											                        li.textContent = 'Sonuç bulunamadı';
											                        li.classList.add('list-group-item');
											                        suggestionsList.appendChild(li);
											                    }
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
											});
											</script>
											<!-- İL (AJAX ile autocomplete) -->
											<div class="row mb-6">
											    <label class="col-lg-4 col-form-label fw-semibold fs-6">İl</label>
											    <div class="col-lg-8 fv-row position-relative">
											        <input type="text" name="city" id="city" class="form-control" placeholder="İl adı girin" autocomplete="off">
											        <ul id="city-suggestions" class="list-group position-absolute w-100" style="z-index:1000; display:none;"></ul>
											    </div>
											</div>
											<script>
											document.addEventListener('DOMContentLoaded', function () {
											    const cityInput = document.getElementById('city');
											    const citySuggestions = document.getElementById('city-suggestions');
											
											    cityInput.addEventListener('input', function () {
											        const query = cityInput.value;
											        if (query.length >= 2) {
											            fetch(`{{ url('api/cities/search') }}?q=${query}`)
											                .then(response => response.json())
											                .then(data => {
											                    citySuggestions.innerHTML = '';
											                    citySuggestions.style.display = 'block';
											                    data.forEach(city => {
											                        const li = document.createElement('li');
											                        li.textContent = city.name;
											                        li.classList.add('list-group-item');
											                        li.addEventListener('click', function () {
											                            cityInput.value = city.name;
											                            citySuggestions.style.display = 'none';
											                        });
											                        citySuggestions.appendChild(li);
											                    });
											                    if (data.length === 0) {
											                        const li = document.createElement('li');
											                        li.textContent = 'Sonuç bulunamadı';
											                        li.classList.add('list-group-item');
											                        citySuggestions.appendChild(li);
											                    }
											                });
											        } else {
											            citySuggestions.style.display = 'none';
											        }
											    });
											
											    document.addEventListener('click', function (e) {
											        if (!cityInput.contains(e.target) && !citySuggestions.contains(e.target)) {
											            citySuggestions.style.display = 'none';
											        }
											    });
											});
											</script>
											<!-- MAAŞ ARALIĞI -->
											<div class="row mb-6">
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Maaş Aralığı</label>
												<div class="col-lg-8 fv-row">
													<select name="maas_araligi" aria-label="Maaş Aralığı Seçiniz" data-control="select2" data-placeholder="Maaş Aralığı Seçiniz.." class="form-select form-select-solid form-select-lg">
														<option value="">Maaş Aralığı Seçiniz..</option>
														<option value="25000-50000">25000-50000 TL</option>
														<option value="50000-100000">50000-100000 TL</option>
														<option value="100000+">100000+ TL</option>
													</select>
												</div>
											</div>
											<!-- BAŞLANGIÇ TARİHİ -->
											<div class="row mb-6">
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">İş İlanı Başlangıç Tarihi</label>
												<div class="col-lg-8 fv-row">
													<input type="date" name="baslangic_tarihi" class="form-control form-control-lg form-control-solid" placeholder="İş İlanı Başlangıç Tarihi" />
												</div>
											</div>
											<!-- ÇALIŞMA ŞEKLİ -->
											<div class="row mb-6">
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Çalışma Şekli</label>
												<div class="col-lg-8 fv-row">
													<select name="calisma_sekli" aria-label="Çalışma Şekli Seçiniz" data-control="select2" data-placeholder="Çalışma Şekli Seçiniz.." class="form-select form-select-solid form-select-lg">
														<option value="">Çalışma Şekli Seçiniz..</option>
														<option value="Özel">Özel</option>
														<option value="Kamu">Kamu</option>
													</select>
												</div>
											</div>
											<!-- CİNSİYET -->
											<div class="row mb-6">
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Cinsiyet</label>
												<div class="col-lg-8 fv-row">
													<div class="d-flex align-items-center mt-3">
														<label class="form-check form-check-custom form-check-inline form-check-solid me-5">
															<input class="form-check-input" name="cinsiyet[]" type="checkbox" value="Kadın" />
															<span class="fw-semibold ps-2 fs-6">Kadın</span>
														</label>
														<label class="form-check form-check-custom form-check-inline form-check-solid me-5">
															<input class="form-check-input" name="cinsiyet[]" type="checkbox" value="Erkek" />
															<span class="fw-semibold ps-2 fs-6">Erkek</span>
														</label>
														<label class="form-check form-check-custom form-check-inline form-check-solid">
															<input class="form-check-input" name="cinsiyet[]" type="checkbox" value="Farketmez" />
															<span class="fw-semibold ps-2 fs-6">Farketmez</span>
														</label>
													</div>
												</div>
											</div>
											<!-- YAŞ ARALIĞI -->
											<div class="row mb-6">
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Yaş Aralığı</label>
												<div class="col-lg-4 fv-row">
													<input type="number" name="yas_min" class="form-control form-control-lg form-control-solid" placeholder="Min Yaş" min="0" />
												</div>
												<div class="col-lg-4 fv-row">
													<input type="number" name="yas_max" class="form-control form-control-lg form-control-solid" placeholder="Max Yaş" min="0" />
												</div>
											</div>
										</div>
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<button type="submit" class="btn btn-primary">Ara</button>
										</div>
									</form>
									<!--end::Form-->
								</div>
								<!--end::Content-->

							</div>
							
							@if(isset($ilanlar) && $ilanlar->count())
    <div class="mt-8">
        <h3 class="fw-bold mb-4">İş İlanları Sonuçları</h3>
        <div class="row g-4">
            @foreach($ilanlar as $ilan)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm border-primary mb-4 h-100">
                        <div class="card-header bg-primary text-white">
                            <h5 class="card-title mb-0">{{ $ilan->ilan_basligi }}</h5>
                        </div>
                        <div class="card-body">
                            <p><strong>Şirket:</strong> {{ $ilan->sirket_adi }}</p>
                            <p><strong>Şehir:</strong> {{ $ilan->sehir }}</p>
                            <p><strong>Meslek:</strong> {{ $ilan->meslek }}</p>
                            <p><strong>Maaş:</strong> {{ $ilan->maas_araligi }}</p>
                            <p><strong>Çalışma Şekli:</strong> {{ $ilan->calisma_sekli }}</p>
                            <p><strong>Başlangıç Tarihi:</strong> {{ $ilan->baslangic_tarihi }}</p>
                            <p><strong>Cinsiyet:</strong> {{ $ilan->cinsiyet }}</p>
                            <p><strong>Yaş:</strong> {{ $ilan->yas_min }} - {{ $ilan->yas_max }}</p>
                        </div>
                        <div class="card-footer bg-light d-flex justify-content-end">
                            @auth
                                <form action="{{ route('job.apply', $ilan->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Başvur</button>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-outline-primary">Giriş Yap & Başvur</a>
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $ilanlar->onEachSide(1)->links('vendor.pagination.custom') }}
        </div>
    </div>
							@elseif(request()->all())
								<div class="alert alert-warning mt-8">
									@php
										$params = collect(request()->except(['page','_token']))->filter();
									@endphp
									@if($params->count())
										<strong>Arama kriterleriniz:</strong>
										<ul>
											@foreach($params as $key => $value)
												<li><b>{{ ucfirst($key) }}:</b> {{ is_array($value) ? implode(', ', $value) : $value }}</li>
											@endforeach
										</ul>
									@endif
									<span>Uygun iş ilanı bulunamadı.</span>
								</div>
							@endif
							
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->

				
@endsection