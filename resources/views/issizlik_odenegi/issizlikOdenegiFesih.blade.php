@extends('layouts.panel_layout',['pageName' => 'issizlik_odenegi.issizlik_odenegi/Fesih', 'active' => ''])

@section('content')
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header">
						<!--begin::Container-->
						<div class="container d-flex flex-stack flex-wrap gap-2" id="kt_header_container">
						<!--begin::Page title-->
							<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
								<!--begin::Heading-->
								<h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">İşsizlik Ödeneği Başvuru</h1>
								<!--end::Heading-->
							</div>
						<!--end::Page title=-->
						
									<!--begin::Wrapper-->
									<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
										<!--begin::Aside mobile toggle-->
										<div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
											<span class="svg-icon svg-icon-1 mt-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
													<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Aside mobile toggle-->
										<!--begin::Logo-->
										<a href="../../demo3/dist/index.html" class="d-flex align-items-center">
											<img alt="Logo" src="assets/media/logos/demo3.svg" class="theme-light-show h-20px" />
											<img alt="Logo" src="assets/media/logos/demo3-dark.svg" class="theme-dark-show h-20px" />
										</a>
										<!--end::Logo-->
									</div>
									<!--end::Wrapper-->
									
								</div>
								<!--end::Container-->
							</div>
							<!--end::Header-->
							<!--begin::Content-->
							<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
								<!--begin::Container-->
								<div class="container-xxl" id="kt_content_container">
								
									<!--begin::Basic info-->
									<div class="card mb-5 mb-xl-10">
										<!--begin::Card header-->
										<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
											<!--begin::Card title-->
											<div class="card-title m-0">
												<h3 class="fw-bold m-0">Kişi ve Talep Bilgileri</h3>
											</div>
											<!--end::Card title-->
										</div>
										<!--begin::Card header-->
										<!--begin::Content-->
										<div id="kt_account_settings_profile_details" class="collapse show">
											<!--begin::Form-->
											<form id="kt_account_profile_details_form" class="form">
												<!--begin::Card body-->
												<div class="card-body border-top p-9">
													<!--begin::Input group-->
													<div class="row mb-6">

														
														
														<div class="container">
															<h1>İşsizlik Ödeneği Fesih</h1>
															<p>İşsizlik ödeneği talebinizi iptal etmek için lütfen aşağıdaki bilgileri doldurun.</p>
														</div>
													
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-semibold fs-6">
															<span class="required">Ad Soyad</span>
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="text" name="fullname" class="form-control form-control-lg form-control-solid" placeholder="Ad Soyad" value="{{ $user->name . ' ' . $user->surname }}" />
														</div>
														<!--end::Col-->
													</div>
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-semibold fs-6">
															<span class="required">T.C Numarası</span>
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="T.C Numarası" value={{ $user->id_number }} />
														</div>
														<!--end::Col-->
													</div>
													<!--begin::Col-->
													<div class="col-md-6 fv-row">
														<!--end::Label-->
														<label class="required fs-5 fw-semibold mb-2">Fesih Tarihi</label>
														<!--end::Label-->
														<!--end::Input-->
														<!-- Güncel Takvim İçin HTML5 Date Input -->
                                                        <input type="date" class="form-control form-control-solid" name="start_date" />
														<!--end::Input-->
													</div>
													<!--end::Col-->	
														
													
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-md-6 fv-row">
														<!--end::Label-->
														<label class="required fs-5 fw-semibold mb-2">Başvuru Tarihi</label>
														<!--end::Label-->
														<!--end::Input-->
                                                        <!-- Güncel Takvim İçin HTML5 Date Input -->
                                                        <input type="date" id="start_date" class="form-control form-control-solid" readonly />
                                                            <script>
                                                               document.addEventListener('DOMContentLoaded', function () {
                                                               const today = new Date().toISOString().split('T')[0]; // Günün tarihini Y-m-d formatında al
                                                                 document.getElementById('start_date').value = today; // Input alanına ata
                                                                  });
                                                             </script>
														<!--end::Input-->
													</div>
													
                                                        <!--begin::Input group-->
													<div class="d-flex flex-column mb-5 fv-row">
													<!--begin::Label-->
													<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
														<span class="required">İl Seçiniz</span>
														
													</label>
													<!-- İl Dropdown -->
   													 <div class="col-lg-8 fv-row">
      												  	<select id="il-dropdown" name="Cities" class="form-select form-select-solid"style="color: blue; background-color: white;">
           													 <option value="">İl Seçiniz</option>
          											 		 @foreach($Cities as $city)
		  											     		 <option value="{{ $city->id }}">{{ $city->ad }}</option>          										     			 
      											     		 @endforeach
     												   </select>
   													 </div>


													

													 <!--begin::Input group-->
													 <div class="d-flex flex-column mb-5 fv-row">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-semibold fs-6">
														<span class="required">İlçeyi Seçiniz</span>
													</label>
													<!-- İlçe Dropdown -->
    												<div class="col-lg-8 fv-row">
														<select id="ilce-dropdown" name="district" class="form-select form-select-solid">
															<option value="">İlçe Seçiniz</option>
															@foreach($Cities as $city)
																<optgroup label="{{ $city->ad }}">
																	@foreach($city->districts as $district)
																		<option value="{{ $district->id }}">{{ $district->ad }}</option>
																	@endforeach
																</optgroup>
															@endforeach
														</select>
   													 </div>
													<!--end::Select-->
												</div>
												<!--end::Input group-->
													
													<!--begin::Actions-->
													<div class="card-footer d-flex justify-content-center py-6 px-9">													
														<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Kaydet</button>
													</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Basic info-->
								
								<!--end::Container-->
							</div>
							<!--end::Content-->
						</div>
				<!--end::Wrapper-->
								
						<!--begin::Wrapper-->
							<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
								<!--begin::Aside mobile toggle-->
								<div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1 mt-1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
										
								<!--end::Aside mobile toggle-->
								<!--begin::Logo-->
								<a href="../../demo3/dist/index.html" class="d-flex align-items-center">
									<img alt="Logo" src="assets/media/logos/demo3.svg" class="theme-light-show h-20px" />
									<img alt="Logo" src="assets/media/logos/demo3-dark.svg" class="theme-dark-show h-20px" />
								</a>
								<!--end::Logo-->
							</div>
						<!--end::Wrapper-->
						
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
							
							
								</div>
								<!--end::Col-->
								
							</div>
							<!--end::Row-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->

					<script>
						document.addEventListener('DOMContentLoaded', function () {
							const ilDropdown = document.getElementById('il-dropdown');
							const ilceDropdown = document.getElementById('ilce-dropdown');
					
							ilDropdown.addEventListener('change', function () {
								const cityId = this.value;
					
								// İlçe dropdown'ını temizle
								ilceDropdown.innerHTML = '<option value="">İlçe Seçiniz</option>';
					
								if (cityId) {
									// AJAX ile ilçeleri al
									fetch(`/get-districts/${cityId}`)
										.then(response => response.json())
										.then(data => {
											data.forEach(district => {
												const option = document.createElement('option');
												option.value = district.id;
												option.textContent = district.ad;
												ilceDropdown.appendChild(option);
											});
										})
										.catch(error => console.error('Hata:', error));
								}
							});
						});
					</script>
@endsection