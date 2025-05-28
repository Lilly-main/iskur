@extends('layouts.panel_layout',['pageName' => 'Dashboard', 'active' => ''])

@section('style')

@endsection

@section('script')
<script></script>
@endsection

@section('content')
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper" style="background-image: url('/assets/media/işkur.jpg'); background-size: cover; background-position: center;">
					<!--begin::Header-->
					<div id="kt_header" class="header">
						<!--begin::Container-->
						<div class="container d-flex flex-stack flex-wrap gap-2" id="kt_header_container">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
								<!--begin::Heading-->
								<h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">İSKUR Profil</h1>
								<!--end::Heading-->
							</div>
							<!--end::Page title=-->
							<!--begin::Wrapper-->
							<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
								
								<!--begin::Logo-->
								<a href="../../demo3/dist/index.html" class="d-flex align-items-center">
									
								</a>
								<!--end::Logo-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Topbar-->
							<div class="d-flex align-items-center flex-shrink-0">
								<!--begin::Search-->
								<div id="kt_header_search" class="header-search d-flex align-items-center w-lg-250px"></div>
								<!--end::Search-->
								<div class="d-flex align-items-center ms-3 ms-lg-4"></div>
								<div class="d-flex align-items-center ms-3 ms-lg-4"></div>
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
							<!--begin::Row-->
							<div class="row g-5 g-xl-10 mb-xl-10">
								<!--begin::Col-->
								<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
									<!--begin::Card widget 4-->
								</div>
								<!--end::Col-->															
							</div>
							
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row gy-5 g-xl-10">
								<!--begin::Col-->
								<div class="col-xl-6 mb-xl-10">
									<!--begin::Tables widget 2-->
									<div class="card h-md-100">
										<!--begin::Header-->
										<div class="card-header align-items-center border-0">
											<!--begin::Title-->
											<h3 class="fw-bold text-gray-900 m-0">ÖZGEÇMİŞ</h3>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-2">
											<!--begin::Nav-->
											<ul class="nav nav-pills nav-pills-custom mb-3 flex-row justify-content-start align-items-center" style="gap: 16px; flex-wrap: nowrap;">
												<li class="nav-item mb-0">
													<a class="nav-link d-flex flex-column flex-center overflow-hidden w-80px h-85px py-4" href="{{ route('user.personalInfo') }}" style="background:#e6f2ff; border-radius:12px;">
														<div class="nav-icon mb-2">
															<img alt="" src="assets/media/icons/duotune/communication/com006.svg" />
														</div>
														<span class="nav-text text-gray-700 fw-bold fs-6 lh-1">Kişisel Bilgiler</span>
													</a>
												</li>
												<li class="nav-item mb-0">
													<a class="nav-link d-flex flex-column flex-center overflow-hidden w-80px h-85px py-4" href="{{ route('user.contactInfo') }}" style="background:#e6f2ff; border-radius:12px;">
														<div class="nav-icon mb-2">
															<img alt="" src="assets/media/icons/duotune/communication/com007.svg" />
														</div>
														<span class="nav-text text-gray-700 fw-bold fs-6 lh-1">İletişim Bilgileri</span>
													</a>
												</li>
												<li class="nav-item mb-0">
													<a class="nav-link d-flex flex-column flex-center overflow-hidden w-80px h-85px py-4" href="{{ route('user.educationInfo') }}" style="background:#e6f2ff; border-radius:12px;">
														<div class="nav-icon mb-2">
															<img alt="" src="assets/media/icons/duotune/general/gen023.svg" />
														</div>
														<span class="nav-text text-gray-700 fw-bold fs-6 lh-1">Öğrenim Bilgileri</span>
													</a>
												</li>
												<li class="nav-item mb-0">
													<a class="nav-link d-flex flex-column flex-center overflow-hidden w-80px h-85px py-4" href="{{ route('profile.profession') }}" style="background:#e6f2ff; border-radius:12px;">
														<div class="nav-icon mb-2">
															<img alt="" src="assets/media/icons/meslekbilgileri.png" />
														</div>
														<span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Meslek Bilgileri</span>
													</a>
												</li>
												<li class="nav-item mb-0">
													<a class="nav-link d-flex flex-column flex-center overflow-hidden w-80px h-85px py-4" href="{{ route('user.documents') }}" style="background:#e6f2ff; border-radius:12px;">
														<div class="nav-icon mb-2">
															<img alt="" src="assets/media/icons/duotune/files/fil025.svg" />
														</div>
														<span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Belgeler</span>
													</a>
												</li>
											</ul>
											<!--end::Nav-->
											<!--begin::Tab Content-->
											<div class="tab-content">
												<!--begin::Tap pane-->
												<div class="tab-pane fade show active" id="kt_stats_widget_2_tab_1">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
													<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
															<!--begin::Table head-->
															<thead>
																
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Table container-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_stats_widget_2_tab_3">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																	<>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>				
																	
											
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Table container-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_stats_widget_2_tab_4">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																	
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Table container-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_stats_widget_2_tab_5">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">																	
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Table container-->
												</div>
												<!--end::Tap pane-->
											</div>
											<!--end::Tab Content-->
										</div>
										<!--end: Card Body-->
									</div>
									<!--end::Tables widget 2-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-6 mb-5 mb-xl-10">
									<!--begin::Chart widget 4-->
									<div class="card card-flush overflow-hidden h-md-100">
										<!--begin::Header-->
										<div class="card-header py-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-dark">İŞ İLANLARI</span>
												<a href="{{ route('is_ilanlari.index') }}" class="btn btn-link ms-auto">Tüm İş İlanları</a>
											</h3>
											<!--end::Title-->
											
										</div>
										<!--end::Header-->
										<!--begin::Card body-->
										<div class="card-body">
											@php
												$userProfessions = auth()->user()->professions()->pluck('professions.id')->toArray();
												// Önce eşleşen ilanlar, sonra diğer ilanlar çekilir
												$matched = \App\Models\JobPosting::whereHas('professions', function($q) use ($userProfessions) {
													$q->whereIn('professions.id', $userProfessions);
												})->with('professions')->latest()->take(10)->get();
												$unmatched = \App\Models\JobPosting::whereDoesntHave('professions', function($q) use ($userProfessions) {
													$q->whereIn('professions.id', $userProfessions);
												})->with('professions')->latest()->take(10)->get();
												$jobPostings = $matched->merge($unmatched)->take(10);
											@endphp
											@if($jobPostings->count())
												<div id="job-listings">
													@include('partials.job_listings', ['jobPostings' => $jobPostings])
												</div>
											@else
												<div class="alert alert-info">İş ilanı bulunamadı.</div>
											@endif
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Chart widget 4-->
								</div>
								<!--end::Col-->
								
							</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row gy-5 g-xl-10">
								<!--begin::Col-->
								<div class="col-xl-6 mb-xl-10">
									<!--begin::Tables widget 2-->
									<div class="card h-md-100">
										<!--begin::Header-->
										<div class="card-header align-items-center border-0">
											<!--begin::Title-->
											<h3 class="fw-bold text-gray-900 m-0">İŞ BAŞVURULARIM</h3>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-2">
											<!--begin::Nav-->
											<ul class="nav nav-pills nav-pills-custom mb-3">
												<!--begin::Item-->
												<li class="nav-item mb-3 me-3 me-lg-6">
													
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="nav-item mb-3 me-3 me-lg-6">
													
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="nav-item mb-3 me-3 me-lg-6">
													
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="nav-item mb-3 me-3 me-lg-6">
													
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="nav-item mb-3">
													
													
												</li>
												<!--end::Item-->
											</ul>
											<!--end::Nav-->
											<!--begin::Tab Content-->
											<div class="tab-content">
												<!--begin::Tap pane-->
												<div class="tab-pane fade show active" id="kt_stats_widget_2_tab_1">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														@php
															$jobApplications = \App\Models\JobApplication::with('jobPosting')
																->where('user_id', auth()->id())
																->latest()
																->get();
														@endphp
														@if($jobApplications->count())
															<div class="table-responsive">
																<table class="table table-bordered align-middle">
																	<thead>
																		<tr>
																			<th></th>
																			<th>İlan Başlığı</th>
																			<th>Firma</th>
																			<th>Başvuru Tarihi</th>
																			<th>Durum</th>
																		</tr>
																	</thead>
																	<tbody>
																		@foreach($jobApplications as $i => $app)
																			<tr @if($i % 2 == 0) style="background-color: #e6f2ff;" @endif>
																				<td>{{ $i+1 }}</td>
																				<td>{{ $app->jobPosting ? $app->jobPosting->ilan_basligi : '-' }}</td>
																				<td>{{ $app->jobPosting ? $app->jobPosting->sirket_adi : '-' }}</td>
																				<td>{{ $app->created_at ? $app->created_at->format('d.m.Y H:i') : '-' }}</td>
																				<td>{{ $app->status ?? 'Başvuru Yapıldı' }}</td>
																			</tr>
																		@endforeach
																	</tbody>
																</table>
															</div>
														@else
															<div class="alert alert-info">Henüz bir iş ilanına başvuru yapmadınız.</div>
														@endif
													</div>
													<!--end::Table container-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_stats_widget_2_tab_3">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
															<!--begin::Table head-->
															<thead>
																
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>															
																
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Table container-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_stats_widget_2_tab_4">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
															<!--begin::Table head-->
															<thead>
																
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Table container-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_stats_widget_2_tab_5">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
															<!--begin::Table head-->
															<thead>
																
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Table container-->
												</div>
												<!--end::Tap pane-->
											</div>
											<!--end::Tab Content-->
										</div>
										<!--end: Card Body-->
									</div>
									<!--end::Tables widget 2-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-6 mb-5 mb-xl-10">
									<!--begin::Chart widget 4-->
									<div class="card card-flush overflow-hidden h-md-100">
										<!--begin::Header-->
										<div class="card-header py-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-dark">İŞSİZLİK ÖDENEĞİ BAŞVURULRIM</span>
												<span class="text-gray-400 mt-1 fw-semibold fs-6"></span>
											</h3>
											<!--end::Title-->
											
										</div>
										<!--end::Header-->
										<!--begin::Card body-->
										<div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
											
											
											@php
												$unemploymentApplications = \App\Models\UnemploymentApplication::with(['city', 'district'])
													->where('user_id', auth()->id())
													->latest()
													->get();
											@endphp
											@if($unemploymentApplications->count())
												<div class="table-responsive">
													<table class="table table-bordered align-middle">
														<thead>
															<tr>
																<th></th>																
																<th>T.C. No</th>
																<th>Fesih Tarihi</th>
																<th>Başvuru Tarihi</th>
																<th>Şehir</th>
																<th>İlçe</th>
															</tr>
														</thead>
														<tbody>
															@foreach($unemploymentApplications as $i => $app)
																<tr @if($i % 2 == 0) style="background-color: #e6f2ff;" @endif>
																	<td>{{ $i+1 }}</td>																	
																	<td>{{ $app->id_number }}</td>
																	<td>{{ $app->fesih_tarihi ? \Carbon\Carbon::parse($app->fesih_tarihi)->format('d.m.Y') : '-' }}</td>
																	<td>{{ $app->basvuru_tarihi ? \Carbon\Carbon::parse($app->basvuru_tarihi)->format('d.m.Y') : '-' }}</td>
																	<td>{{ $app->city ? $app->city->name : '-' }}</td>
																	<td>{{ $app->district ? $app->district->name : '-' }}</td>
																</tr>
															@endforeach
														</tbody>
													</table>
												</div>
											@else
												<div class="alert alert-info">Henüz işsizlik ödeneği başvurunuz bulunmamaktadır.</div>
											@endif
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Chart widget 4-->
								</div>
								<!--end::Col-->
								
							</div>
							<!--end::Row-->							
				
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
@endsection
