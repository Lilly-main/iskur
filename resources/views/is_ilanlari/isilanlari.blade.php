@extends('layouts.panel_layout',['pageName' => 'is_ilanlari.isilanlari', 'active' => ''])

@section('style')

@endsection

@section('script')
<script></script>
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
								<!--
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Profile Details</h3>
									</div>
								</div>
								-->
								
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
									
																				</div>
										
											
											
										
										<!--begin::Actions-->
											
											<!--end::Actions-->
										</form>
										<!--end::Preferences-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Search-->
								
									<!--begin::Form-->
									<form id="kt_account_profile_details_form" class="form">
										<!--begin::Card body-->
										<div class="card-body border-top p-9">
											
											
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">
													<span class="required">Ülke</span>
													
												</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-semibold">
														
														<option data-kt-flag="flags/turkey.svg" value="TR">Türkiye</option>							
														
													</select>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Meslek</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<!--begin::Input-->
													<select name="language" aria-label="Bir Meslek Seçiniz" data-control="select2" data-placeholder="Bir Meslek Seçiniz..." class="form-select form-select-solid form-select-lg">
														<option value="">Bir Meslek Seçiniz...</option>										
													</select>					

													<!--end::Input-->
													
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Maaş Aralığı</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<select name="salary_range" aria-label="Maaş Aralığı Seçiniz" data-control="select2" data-placeholder="Maaş Aralığı Seçiniz.." class="form-select form-select-solid form-select-lg">
														<option value="">Maaş Aralığı Seçiniz..</option>
														<option value="low">25000-50000 TL</option>
														<option value="medium">50000-100000 TL</option>
														<option value="high">100000+ TL</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">İş İlanı Başlangıç Tarihi</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<input type="date" name="start_date" class="form-control form-control-lg form-control-solid" placeholder="İş İlanı Başlangıç Tarihi" value="" />
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->

											<!-- Boşluk eklemek için bir div -->
											<div class="mb-6"></div>

											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Çalışma Şekli</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<select name="work_type" aria-label="Çalışma Şekli Seçiniz" data-control="select2" data-placeholder="Çalışma Şekli Seçiniz.." class="form-select form-select-solid form-select-lg">
														<option value="">Çalışma Şekli Seçiniz..</option>
														<option value="remote">Uzaktan</option>
														<option value="onsite">Ofis</option>
														<option value="hybrid">Hibrit</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-semibold fs-6">İş Detay</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<input type="text" name="job_detail" class="form-control form-control-lg form-control-solid" placeholder="İş Detay" value="" />
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-semibold fs-6">Cinsiyet</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row">
														<div class="d-flex align-items-center mt-3">
															<label class="form-check form-check-custom form-check-inline form-check-solid me-5">
																<input class="form-check-input" name="gender[]" type="checkbox" value="female" />
																<span class="fw-semibold ps-2 fs-6">Kadın</span>
															</label>
															<label class="form-check form-check-custom form-check-inline form-check-solid me-5">
																<input class="form-check-input" name="gender[]" type="checkbox" value="male" />
																<span class="fw-semibold ps-2 fs-6">Erkek</span>
															</label>
															<label class="form-check form-check-custom form-check-inline form-check-solid">
																<input class="form-check-input" name="gender[]" type="checkbox" value="any" />
																<span class="fw-semibold ps-2 fs-6">Farketmez</span>
															</label>
														</div>
													</div>
												</div>
												<!--end::Input group-->

												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-semibold fs-6">Yaş Aralığı</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-4 fv-row">
														<input type="number" name="age_min" class="form-control form-control-lg form-control-solid" placeholder="Min Yaş" min="0" />
													</div>
													<div class="col-lg-4 fv-row">
														<input type="number" name="age_max" class="form-control form-control-lg form-control-solid" placeholder="Max Yaş" min="0" />
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->

											
										</div>
										<!--end::Card body-->
										<!--begin::Actions-->
										<div class="card-footer d-flex justify-content-end py-6 px-9">								
											<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Ara</button>
										</div>
										<!--end::Actions-->
									</form>
									<!--end::Form-->
								</div>
								<!--end::Content-->

							</div>
						

							
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->

				
@endsection