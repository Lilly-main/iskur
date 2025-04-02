@extends('layouts.panel_layout',['pageName' => 'Dashboard', 'active' => ''])

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
								<!--begin::Heading-->
								<h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">İş İlanları</h1>
								<!--end::Heading-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-dot fw-semibold fs-base my-1">
									<li class="breadcrumb-item text-muted">
										<a href="../../demo3/dist/index.html" class="text-muted">Anasayfa</a>
									</li>
									<li class="breadcrumb-item text-muted">Sayfalar</li>
									<li class="breadcrumb-item text-muted">Hesap</li>
									<li class="breadcrumb-item text-dark">İş İlanları</li>
								</ul>
								<!--end::Breadcrumb-->
							</div>
							<!--end::Page title=-->

							<div class="d-flex align-items-center flex-shrink-0">
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
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen004.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-700 position-absolute top-50 translate-middle-y ms-4">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="currentColor" />
												<path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Input-->
										<input type="text" class="form-control bg-transparent ps-13 fs-7 h-40px" name="search" value="" placeholder="Quick Search" data-kt-search-element="input" />
										<!--end::Input-->
										<!--begin::Spinner-->
										<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
											<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
										</span>
										<!--end::Spinner-->
										<!--begin::Reset-->
										<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
													<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<!--end::Reset-->
									</form>
									<!--end::Form-->
									<!--begin::Menu-->
									<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-350px py-7 px-7 overflow-hidden">
										<!--begin::Wrapper-->
										<div data-kt-search-element="wrapper">
											<!--begin::Recently viewed-->
											<div data-kt-search-element="results" class="d-none">
												<!--begin::Items-->
												<div class="scroll-y mh-200px mh-lg-350px">
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="assets/media/avatars/300-6.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Karina Clark</span>
															<span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="assets/media/avatars/300-2.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Olivia Bold</span>
															<span class="fs-7 fw-semibold text-muted">Software Engineer</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="assets/media/avatars/300-9.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Ana Clark</span>
															<span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="assets/media/avatars/300-14.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Nick Pitola</span>
															<span class="fs-7 fw-semibold text-muted">Art Director</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="assets/media/avatars/300-11.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Edward Kulnic</span>
															<span class="fs-7 fw-semibold text-muted">System Administrator</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Company Rbranding</span>
															<span class="fs-7 fw-semibold text-muted">UI Design</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Company Re-branding</span>
															<span class="fs-7 fw-semibold text-muted">Web Development</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Business Analytics App</span>
															<span class="fs-7 fw-semibold text-muted">Administration</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
															<span class="fs-7 fw-semibold text-muted">Marketing</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Tower Group Website</span>
															<span class="fs-7 fw-semibold text-muted">Google Adwords</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor" />
																		<rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
																		<rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
																		<rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
																		<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
															<span class="fs-7 fw-semibold text-muted">#45670</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
																		<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
																		<rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
																		<rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
															<span class="fs-7 fw-semibold text-muted">#45690</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
																		<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
																		<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
															<span class="fs-7 fw-semibold text-muted">#21090</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
																		<path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
																		<rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
															<span class="fs-7 fw-semibold text-muted">#34560</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end::Recently viewed-->
											<!--begin::Recently viewed-->
											<div class="" data-kt-search-element="main">
												<!--begin::Heading-->
												<div class="d-flex flex-stack fw-semibold mb-4">
													<!--begin::Label-->
													<span class="text-muted fs-6 me-2">Recently Searched:</span>
													<!--end::Label-->
													<!--begin::Toolbar-->
													<div class="d-flex" data-kt-search-element="toolbar">
														<!--begin::Preferences toggle-->
														<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
															<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
															<span class="svg-icon svg-icon-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="currentColor" />
																	<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Preferences toggle-->
														<!--begin::Advanced search toggle-->
														<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-2">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Advanced search toggle-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Heading-->
												<!--begin::Items-->
												<div class="scroll-y mh-200px mh-lg-325px">
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/electronics/elc004.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M2 16C2 16.6 2.4 17 3 17H21C21.6 17 22 16.6 22 16V15H2V16Z" fill="currentColor" />
																		<path opacity="0.3" d="M21 3H3C2.4 3 2 3.4 2 4V15H22V4C22 3.4 21.6 3 21 3Z" fill="currentColor" />
																		<path opacity="0.3" d="M15 17H9V20H15V17Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
															<span class="fs-7 text-muted fw-semibold">#45789</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z" fill="currentColor" />
																		<path d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
															<span class="fs-7 text-muted fw-semibold">#84050</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="currentColor" />
																		<path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
															<span class="fs-7 text-muted fw-semibold">#84250</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z" fill="currentColor" />
																		<path d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
															<span class="fs-7 text-muted fw-semibold">#67945</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
																		<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
															<span class="fs-7 text-muted fw-semibold">#84250</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor" />
																		<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
															<span class="fs-7 text-muted fw-semibold">#45690</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z" fill="currentColor" />
																		<path d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
															<span class="fs-7 text-muted fw-semibold">#24005</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end::Recently viewed-->
											<!--begin::Empty-->
											<div data-kt-search-element="empty" class="text-center d-none">
												<!--begin::Icon-->
												<div class="pt-10 pb-10">
													<!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
													<span class="svg-icon svg-icon-4x opacity-50">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="currentColor" />
															<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="currentColor" />
															<rect x="13.6993" y="13.6656" width="4.42828" height="1.73089" rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="currentColor" />
															<path d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Icon-->
												<!--begin::Message-->
												<div class="pb-15 fw-semibold">
													<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
													<div class="text-muted fs-7">Please try again with a different query</div>
												</div>
												<!--end::Message-->
											</div>
											<!--end::Empty-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Preferences-->
										<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
											<!--begin::Heading-->
											<h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<!--begin::Radio group-->
												<div class="nav-group nav-group-fluid">
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="users" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="orders" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="projects" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Radio group-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<!--begin::Radio group-->
												<div class="nav-group nav-group-fluid">
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="attachment" value="any" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Radio group-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
													<option value="next">Within the next</option>
													<option value="last">Within the last</option>
													<option value="between">Between</option>
													<option value="on">On</option>
												</select>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-8">
												<!--begin::Col-->
												<div class="col-6">
													<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
														<option value="days">Days</option>
														<option value="weeks">Weeks</option>
														<option value="months">Months</option>
														<option value="years">Years</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end">
												<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
												<a href="../../demo3/dist/pages/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Preferences-->
										<!--begin::Preferences-->
										<form data-kt-search-element="preferences" class="pt-1 d-none">
											<!--begin::Heading-->
											<h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="pb-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
													<input class="form-check-input" type="checkbox" value="1" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
													<input class="form-check-input" type="checkbox" value="1" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end pt-7">
												<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
												<button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Preferences-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Search-->
								<!--begin::Activities-->
								<div class="d-flex align-items-center ms-3 ms-lg-4">
									<!--begin::Drawer toggle-->
									<div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px" id="kt_activities_toggle">
										<!--begin::Svg Icon | path: icons/duotune/general/gen007.svg-->
										<span class="svg-icon svg-icon-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="currentColor" />
												<path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Drawer toggle-->
								</div>
								<!--end::Activities-->
								<!--begin::Chat-->
								<div class="d-flex align-items-center ms-3 ms-lg-4">
									<!--begin::Drawer wrapper-->
									<div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px position-relative" id="kt_drawer_chat_toggle">
										<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
										<span class="svg-icon svg-icon-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor" />
												<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Bullet-->
										<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
										<!--end::Bullet-->
									</div>
									<!--end::Drawer wrapper-->
								</div>
								<!--end::Chat-->
								<!--begin::Theme mode-->
								<div class="d-flex align-items-center ms-3 ms-lg-4">
									<!--begin::Menu toggle-->
									<a href="#" class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
										<span class="svg-icon theme-light-show svg-icon-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor" />
												<path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor" />
												<path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor" />
												<path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor" />
												<path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor" />
												<path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor" />
												<path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor" />
												<path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor" />
												<path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
										<span class="svg-icon theme-dark-show svg-icon-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor" />
												<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor" />
												<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor" />
												<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</a>
									<!--begin::Menu toggle-->
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-color fw-semibold py-4 fs-base w-175px" data-kt-menu="true" data-kt-element="theme-mode-menu">
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor" />
															<path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor" />
															<path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor" />
															<path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor" />
															<path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor" />
															<path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor" />
															<path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor" />
															<path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor" />
															<path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<span class="menu-title">Light</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor" />
															<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor" />
															<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor" />
															<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<span class="menu-title">Dark</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<!--begin::Svg Icon | path: icons/duotune/general/gen062.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<span class="menu-title">System</span>
											</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Theme mode-->
								<!--begin::Sidebar Toggler-->
								<!--end::Sidebar Toggler-->
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
							<!--begin::Navbar-->
							<div class="card mb-5 mb-xl-10">
								<div class="card-body pt-9 pb-0">

									<!--begin::Navs-->
									<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo3/dist/account/overview.html">Overview</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="../../demo3/dist/account/settings.html">Settings</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo3/dist/account/security.html">Security</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo3/dist/account/billing.html">Billing</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo3/dist/account/statements.html">Statements</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo3/dist/account/referrals.html">Referrals</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo3/dist/account/api-keys.html">API Keys</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item mt-2">
											<a class="nav-link text-active-primary ms-0 me-10 py-5" href="../../demo3/dist/account/logs.html">Logs</a>
										</li>
										<!--end::Nav item-->
									</ul>
									<!--begin::Navs-->
								</div>
							</div>
							<!--end::Navbar-->
							<!--begin::Basic info-->
							<div class="card mb-5 mb-xl-10">
								<!--begin::Card header-->
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
									<!--begin::Card title-->
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Profile Details</h3>
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
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Image input-->
													<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
														<!--begin::Preview existing avatar-->
														<div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
														<!--end::Preview existing avatar-->
														<!--begin::Label-->
														<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
															<i class="bi bi-pencil-fill fs-7"></i>
															<!--begin::Inputs-->
															<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
															<input type="hidden" name="avatar_remove" />
															<!--end::Inputs-->
														</label>
														<!--end::Label-->
														<!--begin::Cancel-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Cancel-->
														<!--begin::Remove-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Remove-->
													</div>
													<!--end::Image input-->
													<!--begin::Hint-->
													<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
													<!--end::Hint-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Row-->
													<div class="row">
														<!--begin::Col-->
														<div class="col-lg-6 fv-row">
															<input type="text" name="fname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="Max" />
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-lg-6 fv-row">
															<input type="text" name="lname" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="Smith" />
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Company</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="Keenthemes" />
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">
													<span class="required">Contact Phone</span>
													<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
												</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="044 3276 454 935" />
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Company Site</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<input type="text" name="website" class="form-control form-control-lg form-control-solid" placeholder="Company website" value="keenthemes.com" />
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">
													<span class="required">Country</span>
													<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
												</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a country..." class="form-select form-select-solid form-select-lg fw-semibold">
														<option value="">Select a Country...</option>
														<option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
														<option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
														<option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
														<option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
														<option data-kt-flag="flags/american-samoa.svg" value="AS">American Samoa</option>
														<option data-kt-flag="flags/andorra.svg" value="AD">Andorra</option>
														<option data-kt-flag="flags/angola.svg" value="AO">Angola</option>
														<option data-kt-flag="flags/anguilla.svg" value="AI">Anguilla</option>
														<option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG">Antigua and Barbuda</option>
														<option data-kt-flag="flags/argentina.svg" value="AR">Argentina</option>
														<option data-kt-flag="flags/armenia.svg" value="AM">Armenia</option>
														<option data-kt-flag="flags/aruba.svg" value="AW">Aruba</option>
														<option data-kt-flag="flags/australia.svg" value="AU">Australia</option>
														<option data-kt-flag="flags/austria.svg" value="AT">Austria</option>
														<option data-kt-flag="flags/azerbaijan.svg" value="AZ">Azerbaijan</option>
														<option data-kt-flag="flags/bahamas.svg" value="BS">Bahamas</option>
														<option data-kt-flag="flags/bahrain.svg" value="BH">Bahrain</option>
														<option data-kt-flag="flags/bangladesh.svg" value="BD">Bangladesh</option>
														<option data-kt-flag="flags/barbados.svg" value="BB">Barbados</option>
														<option data-kt-flag="flags/belarus.svg" value="BY">Belarus</option>
														<option data-kt-flag="flags/belgium.svg" value="BE">Belgium</option>
														<option data-kt-flag="flags/belize.svg" value="BZ">Belize</option>
														<option data-kt-flag="flags/benin.svg" value="BJ">Benin</option>
														<option data-kt-flag="flags/bermuda.svg" value="BM">Bermuda</option>
														<option data-kt-flag="flags/bhutan.svg" value="BT">Bhutan</option>
														<option data-kt-flag="flags/bolivia.svg" value="BO">Bolivia, Plurinational State of</option>
														<option data-kt-flag="flags/bonaire.svg" value="BQ">Bonaire, Sint Eustatius and Saba</option>
														<option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA">Bosnia and Herzegovina</option>
														<option data-kt-flag="flags/botswana.svg" value="BW">Botswana</option>
														<option data-kt-flag="flags/brazil.svg" value="BR">Brazil</option>
														<option data-kt-flag="flags/british-indian-ocean-territory.svg" value="IO">British Indian Ocean Territory</option>
														<option data-kt-flag="flags/brunei.svg" value="BN">Brunei Darussalam</option>
														<option data-kt-flag="flags/bulgaria.svg" value="BG">Bulgaria</option>
														<option data-kt-flag="flags/burkina-faso.svg" value="BF">Burkina Faso</option>
														<option data-kt-flag="flags/burundi.svg" value="BI">Burundi</option>
														<option data-kt-flag="flags/cambodia.svg" value="KH">Cambodia</option>
														<option data-kt-flag="flags/cameroon.svg" value="CM">Cameroon</option>
														<option data-kt-flag="flags/canada.svg" value="CA">Canada</option>
														<option data-kt-flag="flags/cape-verde.svg" value="CV">Cape Verde</option>
														<option data-kt-flag="flags/cayman-islands.svg" value="KY">Cayman Islands</option>
														<option data-kt-flag="flags/central-african-republic.svg" value="CF">Central African Republic</option>
														<option data-kt-flag="flags/chad.svg" value="TD">Chad</option>
														<option data-kt-flag="flags/chile.svg" value="CL">Chile</option>
														<option data-kt-flag="flags/china.svg" value="CN">China</option>
														<option data-kt-flag="flags/christmas-island.svg" value="CX">Christmas Island</option>
														<option data-kt-flag="flags/cocos-island.svg" value="CC">Cocos (Keeling) Islands</option>
														<option data-kt-flag="flags/colombia.svg" value="CO">Colombia</option>
														<option data-kt-flag="flags/comoros.svg" value="KM">Comoros</option>
														<option data-kt-flag="flags/cook-islands.svg" value="CK">Cook Islands</option>
														<option data-kt-flag="flags/costa-rica.svg" value="CR">Costa Rica</option>
														<option data-kt-flag="flags/ivory-coast.svg" value="CI">Côte d'Ivoire</option>
														<option data-kt-flag="flags/croatia.svg" value="HR">Croatia</option>
														<option data-kt-flag="flags/cuba.svg" value="CU">Cuba</option>
														<option data-kt-flag="flags/curacao.svg" value="CW">Curaçao</option>
														<option data-kt-flag="flags/czech-republic.svg" value="CZ">Czech Republic</option>
														<option data-kt-flag="flags/denmark.svg" value="DK">Denmark</option>
														<option data-kt-flag="flags/djibouti.svg" value="DJ">Djibouti</option>
														<option data-kt-flag="flags/dominica.svg" value="DM">Dominica</option>
														<option data-kt-flag="flags/dominican-republic.svg" value="DO">Dominican Republic</option>
														<option data-kt-flag="flags/ecuador.svg" value="EC">Ecuador</option>
														<option data-kt-flag="flags/egypt.svg" value="EG">Egypt</option>
														<option data-kt-flag="flags/el-salvador.svg" value="SV">El Salvador</option>
														<option data-kt-flag="flags/equatorial-guinea.svg" value="GQ">Equatorial Guinea</option>
														<option data-kt-flag="flags/eritrea.svg" value="ER">Eritrea</option>
														<option data-kt-flag="flags/estonia.svg" value="EE">Estonia</option>
														<option data-kt-flag="flags/ethiopia.svg" value="ET">Ethiopia</option>
														<option data-kt-flag="flags/falkland-islands.svg" value="FK">Falkland Islands (Malvinas)</option>
														<option data-kt-flag="flags/fiji.svg" value="FJ">Fiji</option>
														<option data-kt-flag="flags/finland.svg" value="FI">Finland</option>
														<option data-kt-flag="flags/france.svg" value="FR">France</option>
														<option data-kt-flag="flags/french-polynesia.svg" value="PF">French Polynesia</option>
														<option data-kt-flag="flags/gabon.svg" value="GA">Gabon</option>
														<option data-kt-flag="flags/gambia.svg" value="GM">Gambia</option>
														<option data-kt-flag="flags/georgia.svg" value="GE">Georgia</option>
														<option data-kt-flag="flags/germany.svg" value="DE">Germany</option>
														<option data-kt-flag="flags/ghana.svg" value="GH">Ghana</option>
														<option data-kt-flag="flags/gibraltar.svg" value="GI">Gibraltar</option>
														<option data-kt-flag="flags/greece.svg" value="GR">Greece</option>
														<option data-kt-flag="flags/greenland.svg" value="GL">Greenland</option>
														<option data-kt-flag="flags/grenada.svg" value="GD">Grenada</option>
														<option data-kt-flag="flags/guam.svg" value="GU">Guam</option>
														<option data-kt-flag="flags/guatemala.svg" value="GT">Guatemala</option>
														<option data-kt-flag="flags/guernsey.svg" value="GG">Guernsey</option>
														<option data-kt-flag="flags/guinea.svg" value="GN">Guinea</option>
														<option data-kt-flag="flags/guinea-bissau.svg" value="GW">Guinea-Bissau</option>
														<option data-kt-flag="flags/haiti.svg" value="HT">Haiti</option>
														<option data-kt-flag="flags/vatican-city.svg" value="VA">Holy See (Vatican City State)</option>
														<option data-kt-flag="flags/honduras.svg" value="HN">Honduras</option>
														<option data-kt-flag="flags/hong-kong.svg" value="HK">Hong Kong</option>
														<option data-kt-flag="flags/hungary.svg" value="HU">Hungary</option>
														<option data-kt-flag="flags/iceland.svg" value="IS">Iceland</option>
														<option data-kt-flag="flags/india.svg" value="IN">India</option>
														<option data-kt-flag="flags/indonesia.svg" value="ID">Indonesia</option>
														<option data-kt-flag="flags/iran.svg" value="IR">Iran, Islamic Republic of</option>
														<option data-kt-flag="flags/iraq.svg" value="IQ">Iraq</option>
														<option data-kt-flag="flags/ireland.svg" value="IE">Ireland</option>
														<option data-kt-flag="flags/isle-of-man.svg" value="IM">Isle of Man</option>
														<option data-kt-flag="flags/israel.svg" value="IL">Israel</option>
														<option data-kt-flag="flags/italy.svg" value="IT">Italy</option>
														<option data-kt-flag="flags/jamaica.svg" value="JM">Jamaica</option>
														<option data-kt-flag="flags/japan.svg" value="JP">Japan</option>
														<option data-kt-flag="flags/jersey.svg" value="JE">Jersey</option>
														<option data-kt-flag="flags/jordan.svg" value="JO">Jordan</option>
														<option data-kt-flag="flags/kazakhstan.svg" value="KZ">Kazakhstan</option>
														<option data-kt-flag="flags/kenya.svg" value="KE">Kenya</option>
														<option data-kt-flag="flags/kiribati.svg" value="KI">Kiribati</option>
														<option data-kt-flag="flags/north-korea.svg" value="KP">Korea, Democratic People's Republic of</option>
														<option data-kt-flag="flags/kuwait.svg" value="KW">Kuwait</option>
														<option data-kt-flag="flags/kyrgyzstan.svg" value="KG">Kyrgyzstan</option>
														<option data-kt-flag="flags/laos.svg" value="LA">Lao People's Democratic Republic</option>
														<option data-kt-flag="flags/latvia.svg" value="LV">Latvia</option>
														<option data-kt-flag="flags/lebanon.svg" value="LB">Lebanon</option>
														<option data-kt-flag="flags/lesotho.svg" value="LS">Lesotho</option>
														<option data-kt-flag="flags/liberia.svg" value="LR">Liberia</option>
														<option data-kt-flag="flags/libya.svg" value="LY">Libya</option>
														<option data-kt-flag="flags/liechtenstein.svg" value="LI">Liechtenstein</option>
														<option data-kt-flag="flags/lithuania.svg" value="LT">Lithuania</option>
														<option data-kt-flag="flags/luxembourg.svg" value="LU">Luxembourg</option>
														<option data-kt-flag="flags/macao.svg" value="MO">Macao</option>
														<option data-kt-flag="flags/madagascar.svg" value="MG">Madagascar</option>
														<option data-kt-flag="flags/malawi.svg" value="MW">Malawi</option>
														<option data-kt-flag="flags/malaysia.svg" value="MY">Malaysia</option>
														<option data-kt-flag="flags/maldives.svg" value="MV">Maldives</option>
														<option data-kt-flag="flags/mali.svg" value="ML">Mali</option>
														<option data-kt-flag="flags/malta.svg" value="MT">Malta</option>
														<option data-kt-flag="flags/marshall-island.svg" value="MH">Marshall Islands</option>
														<option data-kt-flag="flags/martinique.svg" value="MQ">Martinique</option>
														<option data-kt-flag="flags/mauritania.svg" value="MR">Mauritania</option>
														<option data-kt-flag="flags/mauritius.svg" value="MU">Mauritius</option>
														<option data-kt-flag="flags/mexico.svg" value="MX">Mexico</option>
														<option data-kt-flag="flags/micronesia.svg" value="FM">Micronesia, Federated States of</option>
														<option data-kt-flag="flags/moldova.svg" value="MD">Moldova, Republic of</option>
														<option data-kt-flag="flags/monaco.svg" value="MC">Monaco</option>
														<option data-kt-flag="flags/mongolia.svg" value="MN">Mongolia</option>
														<option data-kt-flag="flags/montenegro.svg" value="ME">Montenegro</option>
														<option data-kt-flag="flags/montserrat.svg" value="MS">Montserrat</option>
														<option data-kt-flag="flags/morocco.svg" value="MA">Morocco</option>
														<option data-kt-flag="flags/mozambique.svg" value="MZ">Mozambique</option>
														<option data-kt-flag="flags/myanmar.svg" value="MM">Myanmar</option>
														<option data-kt-flag="flags/namibia.svg" value="NA">Namibia</option>
														<option data-kt-flag="flags/nauru.svg" value="NR">Nauru</option>
														<option data-kt-flag="flags/nepal.svg" value="NP">Nepal</option>
														<option data-kt-flag="flags/netherlands.svg" value="NL">Netherlands</option>
														<option data-kt-flag="flags/new-zealand.svg" value="NZ">New Zealand</option>
														<option data-kt-flag="flags/nicaragua.svg" value="NI">Nicaragua</option>
														<option data-kt-flag="flags/niger.svg" value="NE">Niger</option>
														<option data-kt-flag="flags/nigeria.svg" value="NG">Nigeria</option>
														<option data-kt-flag="flags/niue.svg" value="NU">Niue</option>
														<option data-kt-flag="flags/norfolk-island.svg" value="NF">Norfolk Island</option>
														<option data-kt-flag="flags/northern-mariana-islands.svg" value="MP">Northern Mariana Islands</option>
														<option data-kt-flag="flags/norway.svg" value="NO">Norway</option>
														<option data-kt-flag="flags/oman.svg" value="OM">Oman</option>
														<option data-kt-flag="flags/pakistan.svg" value="PK">Pakistan</option>
														<option data-kt-flag="flags/palau.svg" value="PW">Palau</option>
														<option data-kt-flag="flags/palestine.svg" value="PS">Palestinian Territory, Occupied</option>
														<option data-kt-flag="flags/panama.svg" value="PA">Panama</option>
														<option data-kt-flag="flags/papua-new-guinea.svg" value="PG">Papua New Guinea</option>
														<option data-kt-flag="flags/paraguay.svg" value="PY">Paraguay</option>
														<option data-kt-flag="flags/peru.svg" value="PE">Peru</option>
														<option data-kt-flag="flags/philippines.svg" value="PH">Philippines</option>
														<option data-kt-flag="flags/poland.svg" value="PL">Poland</option>
														<option data-kt-flag="flags/portugal.svg" value="PT">Portugal</option>
														<option data-kt-flag="flags/puerto-rico.svg" value="PR">Puerto Rico</option>
														<option data-kt-flag="flags/qatar.svg" value="QA">Qatar</option>
														<option data-kt-flag="flags/romania.svg" value="RO">Romania</option>
														<option data-kt-flag="flags/russia.svg" value="RU">Russian Federation</option>
														<option data-kt-flag="flags/rwanda.svg" value="RW">Rwanda</option>
														<option data-kt-flag="flags/st-barts.svg" value="BL">Saint Barthélemy</option>
														<option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN">Saint Kitts and Nevis</option>
														<option data-kt-flag="flags/st-lucia.svg" value="LC">Saint Lucia</option>
														<option data-kt-flag="flags/sint-maarten.svg" value="MF">Saint Martin (French part)</option>
														<option data-kt-flag="flags/st-vincent-and-the-grenadines.svg" value="VC">Saint Vincent and the Grenadines</option>
														<option data-kt-flag="flags/samoa.svg" value="WS">Samoa</option>
														<option data-kt-flag="flags/san-marino.svg" value="SM">San Marino</option>
														<option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao Tome and Principe</option>
														<option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi Arabia</option>
														<option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
														<option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
														<option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles</option>
														<option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra Leone</option>
														<option data-kt-flag="flags/singapore.svg" value="SG">Singapore</option>
														<option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint Maarten (Dutch part)</option>
														<option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia</option>
														<option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia</option>
														<option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon Islands</option>
														<option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
														<option data-kt-flag="flags/south-africa.svg" value="ZA">South Africa</option>
														<option data-kt-flag="flags/south-korea.svg" value="KR">South Korea</option>
														<option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan</option>
														<option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
														<option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka</option>
														<option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
														<option data-kt-flag="flags/suriname.svg" value="SR">Suriname</option>
														<option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland</option>
														<option data-kt-flag="flags/sweden.svg" value="SE">Sweden</option>
														<option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland</option>
														<option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab Republic</option>
														<option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, Province of China</option>
														<option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan</option>
														<option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania, United Republic of</option>
														<option data-kt-flag="flags/thailand.svg" value="TH">Thailand</option>
														<option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
														<option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
														<option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
														<option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">Trinidad and Tobago</option>
														<option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
														<option data-kt-flag="flags/turkey.svg" value="TR">Turkey</option>
														<option data-kt-flag="flags/turkmenistan.svg" value="TM">Turkmenistan</option>
														<option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks and Caicos Islands</option>
														<option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
														<option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
														<option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
														<option data-kt-flag="flags/united-arab-emirates.svg" value="AE">United Arab Emirates</option>
														<option data-kt-flag="flags/united-kingdom.svg" value="GB">United Kingdom</option>
														<option data-kt-flag="flags/united-states.svg" value="US">United States</option>
														<option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
														<option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan</option>
														<option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
														<option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela, Bolivarian Republic of</option>
														<option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
														<option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin Islands</option>
														<option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
														<option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
														<option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Language</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<!--begin::Input-->
													<select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a language..." class="form-select form-select-solid form-select-lg">
														<option value="">Select a Language...</option>
														<option data-kt-flag="flags/indonesia.svg" value="id">Bahasa Indonesia - Indonesian</option>
														<option data-kt-flag="flags/malaysia.svg" value="msa">Bahasa Melayu - Malay</option>
														<option data-kt-flag="flags/canada.svg" value="ca">Català - Catalan</option>
														<option data-kt-flag="flags/czech-republic.svg" value="cs">Čeština - Czech</option>
														<option data-kt-flag="flags/netherlands.svg" value="da">Dansk - Danish</option>
														<option data-kt-flag="flags/germany.svg" value="de">Deutsch - German</option>
														<option data-kt-flag="flags/united-kingdom.svg" value="en">English</option>
														<option data-kt-flag="flags/united-kingdom.svg" value="en-gb">English UK - British English</option>
														<option data-kt-flag="flags/spain.svg" value="es">Español - Spanish</option>
														<option data-kt-flag="flags/philippines.svg" value="fil">Filipino</option>
														<option data-kt-flag="flags/france.svg" value="fr">Français - French</option>
														<option data-kt-flag="flags/gabon.svg" value="ga">Gaeilge - Irish (beta)</option>
														<option data-kt-flag="flags/greenland.svg" value="gl">Galego - Galician (beta)</option>
														<option data-kt-flag="flags/croatia.svg" value="hr">Hrvatski - Croatian</option>
														<option data-kt-flag="flags/italy.svg" value="it">Italiano - Italian</option>
														<option data-kt-flag="flags/hungary.svg" value="hu">Magyar - Hungarian</option>
														<option data-kt-flag="flags/netherlands.svg" value="nl">Nederlands - Dutch</option>
														<option data-kt-flag="flags/norway.svg" value="no">Norsk - Norwegian</option>
														<option data-kt-flag="flags/poland.svg" value="pl">Polski - Polish</option>
														<option data-kt-flag="flags/portugal.svg" value="pt">Português - Portuguese</option>
														<option data-kt-flag="flags/romania.svg" value="ro">Română - Romanian</option>
														<option data-kt-flag="flags/slovakia.svg" value="sk">Slovenčina - Slovak</option>
														<option data-kt-flag="flags/finland.svg" value="fi">Suomi - Finnish</option>
														<option data-kt-flag="flags/el-salvador.svg" value="sv">Svenska - Swedish</option>
														<option data-kt-flag="flags/virgin-islands.svg" value="vi">Tiếng Việt - Vietnamese</option>
														<option data-kt-flag="flags/turkey.svg" value="tr">Türkçe - Turkish</option>
														<option data-kt-flag="flags/greece.svg" value="el">Ελληνικά - Greek</option>
														<option data-kt-flag="flags/bulgaria.svg" value="bg">Български език - Bulgarian</option>
														<option data-kt-flag="flags/russia.svg" value="ru">Русский - Russian</option>
														<option data-kt-flag="flags/suriname.svg" value="sr">Српски - Serbian</option>
														<option data-kt-flag="flags/ukraine.svg" value="uk">Українська мова - Ukrainian</option>
														<option data-kt-flag="flags/israel.svg" value="he">עִבְרִית - Hebrew</option>
														<option data-kt-flag="flags/pakistan.svg" value="ur">اردو - Urdu (beta)</option>
														<option data-kt-flag="flags/argentina.svg" value="ar">العربية - Arabic</option>
														<option data-kt-flag="flags/argentina.svg" value="fa">فارسی - Persian</option>
														<option data-kt-flag="flags/mauritania.svg" value="mr">मराठी - Marathi</option>
														<option data-kt-flag="flags/india.svg" value="hi">हिन्दी - Hindi</option>
														<option data-kt-flag="flags/bangladesh.svg" value="bn">বাংলা - Bangla</option>
														<option data-kt-flag="flags/guam.svg" value="gu">ગુજરાતી - Gujarati</option>
														<option data-kt-flag="flags/india.svg" value="ta">தமிழ் - Tamil</option>
														<option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="kn">ಕನ್ನಡ - Kannada</option>
														<option data-kt-flag="flags/thailand.svg" value="th">ภาษาไทย - Thai</option>
														<option data-kt-flag="flags/south-korea.svg" value="ko">한국어 - Korean</option>
														<option data-kt-flag="flags/japan.svg" value="ja">日本語 - Japanese</option>
														<option data-kt-flag="flags/china.svg" value="zh-cn">简体中文 - Simplified Chinese</option>
														<option data-kt-flag="flags/taiwan.svg" value="zh-tw">繁體中文 - Traditional Chinese</option>
													</select>
													<!--end::Input-->
													<!--begin::Hint-->
													<div class="form-text">Please select a preferred language, including date, time, and number formatting.</div>
													<!--end::Hint-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Time Zone</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="Select a timezone.." class="form-select form-select-solid form-select-lg">
														<option value="">Select a Timezone..</option>
														<option data-bs-offset="-39600" value="International Date Line West">(GMT-11:00) International Date Line West</option>
														<option data-bs-offset="-39600" value="Midway Island">(GMT-11:00) Midway Island</option>
														<option data-bs-offset="-39600" value="Samoa">(GMT-11:00) Samoa</option>
														<option data-bs-offset="-36000" value="Hawaii">(GMT-10:00) Hawaii</option>
														<option data-bs-offset="-28800" value="Alaska">(GMT-08:00) Alaska</option>
														<option data-bs-offset="-25200" value="Pacific Time (US & Canada)">(GMT-07:00) Pacific Time (US & Canada)</option>
														<option data-bs-offset="-25200" value="Tijuana">(GMT-07:00) Tijuana</option>
														<option data-bs-offset="-25200" value="Arizona">(GMT-07:00) Arizona</option>
														<option data-bs-offset="-21600" value="Mountain Time (US & Canada)">(GMT-06:00) Mountain Time (US & Canada)</option>
														<option data-bs-offset="-21600" value="Chihuahua">(GMT-06:00) Chihuahua</option>
														<option data-bs-offset="-21600" value="Mazatlan">(GMT-06:00) Mazatlan</option>
														<option data-bs-offset="-21600" value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
														<option data-bs-offset="-21600" value="Central America">(GMT-06:00) Central America</option>
														<option data-bs-offset="-18000" value="Central Time (US & Canada)">(GMT-05:00) Central Time (US & Canada)</option>
														<option data-bs-offset="-18000" value="Guadalajara">(GMT-05:00) Guadalajara</option>
														<option data-bs-offset="-18000" value="Mexico City">(GMT-05:00) Mexico City</option>
														<option data-bs-offset="-18000" value="Monterrey">(GMT-05:00) Monterrey</option>
														<option data-bs-offset="-18000" value="Bogota">(GMT-05:00) Bogota</option>
														<option data-bs-offset="-18000" value="Lima">(GMT-05:00) Lima</option>
														<option data-bs-offset="-18000" value="Quito">(GMT-05:00) Quito</option>
														<option data-bs-offset="-14400" value="Eastern Time (US & Canada)">(GMT-04:00) Eastern Time (US & Canada)</option>
														<option data-bs-offset="-14400" value="Indiana (East)">(GMT-04:00) Indiana (East)</option>
														<option data-bs-offset="-14400" value="Caracas">(GMT-04:00) Caracas</option>
														<option data-bs-offset="-14400" value="La Paz">(GMT-04:00) La Paz</option>
														<option data-bs-offset="-14400" value="Georgetown">(GMT-04:00) Georgetown</option>
														<option data-bs-offset="-10800" value="Atlantic Time (Canada)">(GMT-03:00) Atlantic Time (Canada)</option>
														<option data-bs-offset="-10800" value="Santiago">(GMT-03:00) Santiago</option>
														<option data-bs-offset="-10800" value="Brasilia">(GMT-03:00) Brasilia</option>
														<option data-bs-offset="-10800" value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
														<option data-bs-offset="-9000" value="Newfoundland">(GMT-02:30) Newfoundland</option>
														<option data-bs-offset="-7200" value="Greenland">(GMT-02:00) Greenland</option>
														<option data-bs-offset="-7200" value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
														<option data-bs-offset="-3600" value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
														<option data-bs-offset="0" value="Azores">(GMT) Azores</option>
														<option data-bs-offset="0" value="Monrovia">(GMT) Monrovia</option>
														<option data-bs-offset="0" value="UTC">(GMT) UTC</option>
														<option data-bs-offset="3600" value="Dublin">(GMT+01:00) Dublin</option>
														<option data-bs-offset="3600" value="Edinburgh">(GMT+01:00) Edinburgh</option>
														<option data-bs-offset="3600" value="Lisbon">(GMT+01:00) Lisbon</option>
														<option data-bs-offset="3600" value="London">(GMT+01:00) London</option>
														<option data-bs-offset="3600" value="Casablanca">(GMT+01:00) Casablanca</option>
														<option data-bs-offset="3600" value="West Central Africa">(GMT+01:00) West Central Africa</option>
														<option data-bs-offset="7200" value="Belgrade">(GMT+02:00) Belgrade</option>
														<option data-bs-offset="7200" value="Bratislava">(GMT+02:00) Bratislava</option>
														<option data-bs-offset="7200" value="Budapest">(GMT+02:00) Budapest</option>
														<option data-bs-offset="7200" value="Ljubljana">(GMT+02:00) Ljubljana</option>
														<option data-bs-offset="7200" value="Prague">(GMT+02:00) Prague</option>
														<option data-bs-offset="7200" value="Sarajevo">(GMT+02:00) Sarajevo</option>
														<option data-bs-offset="7200" value="Skopje">(GMT+02:00) Skopje</option>
														<option data-bs-offset="7200" value="Warsaw">(GMT+02:00) Warsaw</option>
														<option data-bs-offset="7200" value="Zagreb">(GMT+02:00) Zagreb</option>
														<option data-bs-offset="7200" value="Brussels">(GMT+02:00) Brussels</option>
														<option data-bs-offset="7200" value="Copenhagen">(GMT+02:00) Copenhagen</option>
														<option data-bs-offset="7200" value="Madrid">(GMT+02:00) Madrid</option>
														<option data-bs-offset="7200" value="Paris">(GMT+02:00) Paris</option>
														<option data-bs-offset="7200" value="Amsterdam">(GMT+02:00) Amsterdam</option>
														<option data-bs-offset="7200" value="Berlin">(GMT+02:00) Berlin</option>
														<option data-bs-offset="7200" value="Bern">(GMT+02:00) Bern</option>
														<option data-bs-offset="7200" value="Rome">(GMT+02:00) Rome</option>
														<option data-bs-offset="7200" value="Stockholm">(GMT+02:00) Stockholm</option>
														<option data-bs-offset="7200" value="Vienna">(GMT+02:00) Vienna</option>
														<option data-bs-offset="7200" value="Cairo">(GMT+02:00) Cairo</option>
														<option data-bs-offset="7200" value="Harare">(GMT+02:00) Harare</option>
														<option data-bs-offset="7200" value="Pretoria">(GMT+02:00) Pretoria</option>
														<option data-bs-offset="10800" value="Bucharest">(GMT+03:00) Bucharest</option>
														<option data-bs-offset="10800" value="Helsinki">(GMT+03:00) Helsinki</option>
														<option data-bs-offset="10800" value="Kiev">(GMT+03:00) Kiev</option>
														<option data-bs-offset="10800" value="Kyiv">(GMT+03:00) Kyiv</option>
														<option data-bs-offset="10800" value="Riga">(GMT+03:00) Riga</option>
														<option data-bs-offset="10800" value="Sofia">(GMT+03:00) Sofia</option>
														<option data-bs-offset="10800" value="Tallinn">(GMT+03:00) Tallinn</option>
														<option data-bs-offset="10800" value="Vilnius">(GMT+03:00) Vilnius</option>
														<option data-bs-offset="10800" value="Athens">(GMT+03:00) Athens</option>
														<option data-bs-offset="10800" value="Istanbul">(GMT+03:00) Istanbul</option>
														<option data-bs-offset="10800" value="Minsk">(GMT+03:00) Minsk</option>
														<option data-bs-offset="10800" value="Jerusalem">(GMT+03:00) Jerusalem</option>
														<option data-bs-offset="10800" value="Moscow">(GMT+03:00) Moscow</option>
														<option data-bs-offset="10800" value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
														<option data-bs-offset="10800" value="Volgograd">(GMT+03:00) Volgograd</option>
														<option data-bs-offset="10800" value="Kuwait">(GMT+03:00) Kuwait</option>
														<option data-bs-offset="10800" value="Riyadh">(GMT+03:00) Riyadh</option>
														<option data-bs-offset="10800" value="Nairobi">(GMT+03:00) Nairobi</option>
														<option data-bs-offset="10800" value="Baghdad">(GMT+03:00) Baghdad</option>
														<option data-bs-offset="14400" value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
														<option data-bs-offset="14400" value="Muscat">(GMT+04:00) Muscat</option>
														<option data-bs-offset="14400" value="Baku">(GMT+04:00) Baku</option>
														<option data-bs-offset="14400" value="Tbilisi">(GMT+04:00) Tbilisi</option>
														<option data-bs-offset="14400" value="Yerevan">(GMT+04:00) Yerevan</option>
														<option data-bs-offset="16200" value="Tehran">(GMT+04:30) Tehran</option>
														<option data-bs-offset="16200" value="Kabul">(GMT+04:30) Kabul</option>
														<option data-bs-offset="18000" value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
														<option data-bs-offset="18000" value="Islamabad">(GMT+05:00) Islamabad</option>
														<option data-bs-offset="18000" value="Karachi">(GMT+05:00) Karachi</option>
														<option data-bs-offset="18000" value="Tashkent">(GMT+05:00) Tashkent</option>
														<option data-bs-offset="19800" value="Chennai">(GMT+05:30) Chennai</option>
														<option data-bs-offset="19800" value="Kolkata">(GMT+05:30) Kolkata</option>
														<option data-bs-offset="19800" value="Mumbai">(GMT+05:30) Mumbai</option>
														<option data-bs-offset="19800" value="New Delhi">(GMT+05:30) New Delhi</option>
														<option data-bs-offset="19800" value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
														<option data-bs-offset="20700" value="Kathmandu">(GMT+05:45) Kathmandu</option>
														<option data-bs-offset="21600" value="Astana">(GMT+06:00) Astana</option>
														<option data-bs-offset="21600" value="Dhaka">(GMT+06:00) Dhaka</option>
														<option data-bs-offset="21600" value="Almaty">(GMT+06:00) Almaty</option>
														<option data-bs-offset="21600" value="Urumqi">(GMT+06:00) Urumqi</option>
														<option data-bs-offset="23400" value="Rangoon">(GMT+06:30) Rangoon</option>
														<option data-bs-offset="25200" value="Novosibirsk">(GMT+07:00) Novosibirsk</option>
														<option data-bs-offset="25200" value="Bangkok">(GMT+07:00) Bangkok</option>
														<option data-bs-offset="25200" value="Hanoi">(GMT+07:00) Hanoi</option>
														<option data-bs-offset="25200" value="Jakarta">(GMT+07:00) Jakarta</option>
														<option data-bs-offset="25200" value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
														<option data-bs-offset="28800" value="Beijing">(GMT+08:00) Beijing</option>
														<option data-bs-offset="28800" value="Chongqing">(GMT+08:00) Chongqing</option>
														<option data-bs-offset="28800" value="Hong Kong">(GMT+08:00) Hong Kong</option>
														<option data-bs-offset="28800" value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
														<option data-bs-offset="28800" value="Singapore">(GMT+08:00) Singapore</option>
														<option data-bs-offset="28800" value="Taipei">(GMT+08:00) Taipei</option>
														<option data-bs-offset="28800" value="Perth">(GMT+08:00) Perth</option>
														<option data-bs-offset="28800" value="Irkutsk">(GMT+08:00) Irkutsk</option>
														<option data-bs-offset="28800" value="Ulaan Bataar">(GMT+08:00) Ulaan Bataar</option>
														<option data-bs-offset="32400" value="Seoul">(GMT+09:00) Seoul</option>
														<option data-bs-offset="32400" value="Osaka">(GMT+09:00) Osaka</option>
														<option data-bs-offset="32400" value="Sapporo">(GMT+09:00) Sapporo</option>
														<option data-bs-offset="32400" value="Tokyo">(GMT+09:00) Tokyo</option>
														<option data-bs-offset="32400" value="Yakutsk">(GMT+09:00) Yakutsk</option>
														<option data-bs-offset="34200" value="Darwin">(GMT+09:30) Darwin</option>
														<option data-bs-offset="34200" value="Adelaide">(GMT+09:30) Adelaide</option>
														<option data-bs-offset="36000" value="Canberra">(GMT+10:00) Canberra</option>
														<option data-bs-offset="36000" value="Melbourne">(GMT+10:00) Melbourne</option>
														<option data-bs-offset="36000" value="Sydney">(GMT+10:00) Sydney</option>
														<option data-bs-offset="36000" value="Brisbane">(GMT+10:00) Brisbane</option>
														<option data-bs-offset="36000" value="Hobart">(GMT+10:00) Hobart</option>
														<option data-bs-offset="36000" value="Vladivostok">(GMT+10:00) Vladivostok</option>
														<option data-bs-offset="36000" value="Guam">(GMT+10:00) Guam</option>
														<option data-bs-offset="36000" value="Port Moresby">(GMT+10:00) Port Moresby</option>
														<option data-bs-offset="36000" value="Solomon Is.">(GMT+10:00) Solomon Is.</option>
														<option data-bs-offset="39600" value="Magadan">(GMT+11:00) Magadan</option>
														<option data-bs-offset="39600" value="New Caledonia">(GMT+11:00) New Caledonia</option>
														<option data-bs-offset="43200" value="Fiji">(GMT+12:00) Fiji</option>
														<option data-bs-offset="43200" value="Kamchatka">(GMT+12:00) Kamchatka</option>
														<option data-bs-offset="43200" value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
														<option data-bs-offset="43200" value="Auckland">(GMT+12:00) Auckland</option>
														<option data-bs-offset="43200" value="Wellington">(GMT+12:00) Wellington</option>
														<option data-bs-offset="46800" value="Nuku'alofa">(GMT+13:00) Nuku'alofa</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Currency</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<select name="currnecy" aria-label="Select a Currency" data-control="select2" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
														<option value="">Select a currency..</option>
														<option data-kt-flag="flags/united-states.svg" value="USD">
														<b>USD</b>&nbsp;-&nbsp;USA dollar</option>
														<option data-kt-flag="flags/united-kingdom.svg" value="GBP">
														<b>GBP</b>&nbsp;-&nbsp;British pound</option>
														<option data-kt-flag="flags/australia.svg" value="AUD">
														<b>AUD</b>&nbsp;-&nbsp;Australian dollar</option>
														<option data-kt-flag="flags/japan.svg" value="JPY">
														<b>JPY</b>&nbsp;-&nbsp;Japanese yen</option>
														<option data-kt-flag="flags/sweden.svg" value="SEK">
														<b>SEK</b>&nbsp;-&nbsp;Swedish krona</option>
														<option data-kt-flag="flags/canada.svg" value="CAD">
														<b>CAD</b>&nbsp;-&nbsp;Canadian dollar</option>
														<option data-kt-flag="flags/switzerland.svg" value="CHF">
														<b>CHF</b>&nbsp;-&nbsp;Swiss franc</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Communication</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8 fv-row">
													<!--begin::Options-->
													<div class="d-flex align-items-center mt-3">
														<!--begin::Option-->
														<label class="form-check form-check-custom form-check-inline form-check-solid me-5">
															<input class="form-check-input" name="communication[]" type="checkbox" value="1" />
															<span class="fw-semibold ps-2 fs-6">Email</span>
														</label>
														<!--end::Option-->
														<!--begin::Option-->
														<label class="form-check form-check-custom form-check-inline form-check-solid">
															<input class="form-check-input" name="communication[]" type="checkbox" value="2" />
															<span class="fw-semibold ps-2 fs-6">Phone</span>
														</label>
														<!--end::Option-->
													</div>
													<!--end::Options-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-0">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Allow Marketing</label>
												<!--begin::Label-->
												<!--begin::Label-->
												<div class="col-lg-8 d-flex align-items-center">
													<div class="form-check form-check-solid form-switch form-check-custom fv-row">
														<input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked" />
														<label class="form-check-label" for="allowmarketing"></label>
													</div>
												</div>
												<!--begin::Label-->
											</div>
											<!--end::Input group-->
										</div>
										<!--end::Card body-->
										<!--begin::Actions-->
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
											<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
										</div>
										<!--end::Actions-->
									</form>
									<!--end::Form-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Basic info-->
							<!--begin::Sign-in Method-->
							<div class="card mb-5 mb-xl-10">
								<!--begin::Card header-->
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Sign-in Method</h3>
									</div>
								</div>
								<!--end::Card header-->
								<!--begin::Content-->
								<div id="kt_account_settings_signin_method" class="collapse show">
									<!--begin::Card body-->
									<div class="card-body border-top p-9">
										<!--begin::Email Address-->
										<div class="d-flex flex-wrap align-items-center">
											<!--begin::Label-->
											<div id="kt_signin_email">
												<div class="fs-6 fw-bold mb-1">Email Address</div>
												<div class="fw-semibold text-gray-600">support@keenthemes.com</div>
											</div>
											<!--end::Label-->
											<!--begin::Edit-->
											<div id="kt_signin_email_edit" class="flex-row-fluid d-none">
												<!--begin::Form-->
												<form id="kt_signin_change_email" class="form" novalidate="novalidate">
													<div class="row mb-6">
														<div class="col-lg-6 mb-4 mb-lg-0">
															<div class="fv-row mb-0">
																<label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
																<input type="email" class="form-control form-control-lg form-control-solid" id="emailaddress" placeholder="Email Address" name="emailaddress" value="support@keenthemes.com" />
															</div>
														</div>
														<div class="col-lg-6">
															<div class="fv-row mb-0">
																<label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm Password</label>
																<input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
															</div>
														</div>
													</div>
													<div class="d-flex">
														<button id="kt_signin_submit" type="button" class="btn btn-primary me-2 px-6">Update Email</button>
														<button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
													</div>
												</form>
												<!--end::Form-->
											</div>
											<!--end::Edit-->
											<!--begin::Action-->
											<div id="kt_signin_email_button" class="ms-auto">
												<button class="btn btn-light btn-active-light-primary">Change Email</button>
											</div>
											<!--end::Action-->
										</div>
										<!--end::Email Address-->
										<!--begin::Separator-->
										<div class="separator separator-dashed my-6"></div>
										<!--end::Separator-->
										<!--begin::Password-->
										<div class="d-flex flex-wrap align-items-center mb-10">
											<!--begin::Label-->
											<div id="kt_signin_password">
												<div class="fs-6 fw-bold mb-1">Password</div>
												<div class="fw-semibold text-gray-600">************</div>
											</div>
											<!--end::Label-->
											<!--begin::Edit-->
											<div id="kt_signin_password_edit" class="flex-row-fluid d-none">
												<!--begin::Form-->
												<form id="kt_signin_change_password" class="form" novalidate="novalidate">
													<div class="row mb-1">
														<div class="col-lg-4">
															<div class="fv-row mb-0">
																<label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
																<input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />
															</div>
														</div>
														<div class="col-lg-4">
															<div class="fv-row mb-0">
																<label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
																<input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
															</div>
														</div>
														<div class="col-lg-4">
															<div class="fv-row mb-0">
																<label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
																<input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />
															</div>
														</div>
													</div>
													<div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
													<div class="d-flex">
														<button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update Password</button>
														<button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
													</div>
												</form>
												<!--end::Form-->
											</div>
											<!--end::Edit-->
											<!--begin::Action-->
											<div id="kt_signin_password_button" class="ms-auto">
												<button class="btn btn-light btn-active-light-primary">Reset Password</button>
											</div>
											<!--end::Action-->
										</div>
										<!--end::Password-->
										<!--begin::Notice-->
										<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
											<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor" />
													<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
												<!--begin::Content-->
												<div class="mb-3 mb-md-0 fw-semibold">
													<h4 class="text-gray-900 fw-bold">Secure Your Account</h4>
													<div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra layer of security to your account. To log in, in addition you'll need to provide a 6 digit code</div>
												</div>
												<!--end::Content-->
												<!--begin::Action-->
												<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication">Enable</a>
												<!--end::Action-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Notice-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Sign-in Method-->
							<!--begin::Connected Accounts-->
							<div class="card mb-5 mb-xl-10">
								<!--begin::Card header-->
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_connected_accounts" aria-expanded="true" aria-controls="kt_account_connected_accounts">
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Connected Accounts</h3>
									</div>
								</div>
								<!--end::Card header-->
								<!--begin::Content-->
								<div id="kt_account_settings_connected_accounts" class="collapse show">
									<!--begin::Card body-->
									<div class="card-body border-top p-9">
										<!--begin::Notice-->
										<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
											<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z" fill="currentColor" />
													<path d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack flex-grow-1">
												<!--begin::Content-->
												<div class="fw-semibold">
													<div class="fs-6 text-gray-700">Two-factor authentication adds an extra layer of security to your account. To log in, in you'll need to provide a 4 digit amazing code.
													<a href="#" class="fw-bold">Learn More</a></div>
												</div>
												<!--end::Content-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Notice-->
										<!--begin::Items-->
										<div class="py-2">
											<!--begin::Item-->
											<div class="d-flex flex-stack">
												<div class="d-flex">
													<img src="assets/media/svg/brand-logos/google-icon.svg" class="w-30px me-6" alt="" />
													<div class="d-flex flex-column">
														<a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Google</a>
														<div class="fs-6 fw-semibold text-gray-400">Plan properly your workflow</div>
													</div>
												</div>
												<div class="d-flex justify-content-end">
													<div class="form-check form-check-solid form-check-custom form-switch">
														<input class="form-check-input w-45px h-30px" type="checkbox" id="googleswitch" checked="checked" />
														<label class="form-check-label" for="googleswitch"></label>
													</div>
												</div>
											</div>
											<!--end::Item-->
											<div class="separator separator-dashed my-5"></div>
											<!--begin::Item-->
											<div class="d-flex flex-stack">
												<div class="d-flex">
													<img src="assets/media/svg/brand-logos/github.svg" class="w-30px me-6" alt="" />
													<div class="d-flex flex-column">
														<a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Github</a>
														<div class="fs-6 fw-semibold text-gray-400">Keep eye on on your Repositories</div>
													</div>
												</div>
												<div class="d-flex justify-content-end">
													<div class="form-check form-check-solid form-check-custom form-switch">
														<input class="form-check-input w-45px h-30px" type="checkbox" id="githubswitch" checked="checked" />
														<label class="form-check-label" for="githubswitch"></label>
													</div>
												</div>
											</div>
											<!--end::Item-->
											<div class="separator separator-dashed my-5"></div>
											<!--begin::Item-->
											<div class="d-flex flex-stack">
												<div class="d-flex">
													<img src="assets/media/svg/brand-logos/slack-icon.svg" class="w-30px me-6" alt="" />
													<div class="d-flex flex-column">
														<a href="#" class="fs-5 text-dark text-hover-primary fw-bold">Slack</a>
														<div class="fs-6 fw-semibold text-gray-400">Integrate Projects Discussions</div>
													</div>
												</div>
												<div class="d-flex justify-content-end">
													<div class="form-check form-check-solid form-check-custom form-switch">
														<input class="form-check-input w-45px h-30px" type="checkbox" id="slackswitch" />
														<label class="form-check-label" for="slackswitch"></label>
													</div>
												</div>
											</div>
											<!--end::Item-->
										</div>
										<!--end::Items-->
									</div>
									<!--end::Card body-->
									<!--begin::Card footer-->
									<div class="card-footer d-flex justify-content-end py-6 px-9">
										<button class="btn btn-light btn-active-light-primary me-2">Discard</button>
										<button class="btn btn-primary">Save Changes</button>
									</div>
									<!--end::Card footer-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Connected Accounts-->
							<!--begin::Notifications-->
							<div class="card mb-5 mb-xl-10">
								<!--begin::Card header-->
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_email_preferences" aria-expanded="true" aria-controls="kt_account_email_preferences">
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Email Preferences</h3>
									</div>
								</div>
								<!--begin::Card header-->
								<!--begin::Content-->
								<div id="kt_account_settings_email_preferences" class="collapse show">
									<!--begin::Form-->
									<form class="form">
										<!--begin::Card body-->
										<div class="card-body border-top px-9 py-9">
											<!--begin::Option-->
											<label class="form-check form-check-custom form-check-solid align-items-start">
												<!--begin::Input-->
												<input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
												<!--end::Input-->
												<!--begin::Label-->
												<span class="form-check-label d-flex flex-column align-items-start">
													<span class="fw-bold fs-5 mb-0">Successful Payments</span>
													<span class="text-muted fs-6">Receive a notification for every successful payment.</span>
												</span>
												<!--end::Label-->
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<div class="separator separator-dashed my-6"></div>
											<!--end::Option-->
											<!--begin::Option-->
											<label class="form-check form-check-custom form-check-solid align-items-start">
												<!--begin::Input-->
												<input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />
												<!--end::Input-->
												<!--begin::Label-->
												<span class="form-check-label d-flex flex-column align-items-start">
													<span class="fw-bold fs-5 mb-0">Payouts</span>
													<span class="text-muted fs-6">Receive a notification for every initiated payout.</span>
												</span>
												<!--end::Label-->
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<div class="separator separator-dashed my-6"></div>
											<!--end::Option-->
											<!--begin::Option-->
											<label class="form-check form-check-custom form-check-solid align-items-start">
												<!--begin::Input-->
												<input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
												<!--end::Input-->
												<!--begin::Label-->
												<span class="form-check-label d-flex flex-column align-items-start">
													<span class="fw-bold fs-5 mb-0">Fee Collection</span>
													<span class="text-muted fs-6">Receive a notification each time you collect a fee from sales</span>
												</span>
												<!--end::Label-->
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<div class="separator separator-dashed my-6"></div>
											<!--end::Option-->
											<!--begin::Option-->
											<label class="form-check form-check-custom form-check-solid align-items-start">
												<!--begin::Input-->
												<input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />
												<!--end::Input-->
												<!--begin::Label-->
												<span class="form-check-label d-flex flex-column align-items-start">
													<span class="fw-bold fs-5 mb-0">Customer Payment Dispute</span>
													<span class="text-muted fs-6">Receive a notification if a payment is disputed by a customer and for dispute purposes.</span>
												</span>
												<!--end::Label-->
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<div class="separator separator-dashed my-6"></div>
											<!--end::Option-->
											<!--begin::Option-->
											<label class="form-check form-check-custom form-check-solid align-items-start">
												<!--begin::Input-->
												<input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
												<!--end::Input-->
												<!--begin::Label-->
												<span class="form-check-label d-flex flex-column align-items-start">
													<span class="fw-bold fs-5 mb-0">Refund Alerts</span>
													<span class="text-muted fs-6">Receive a notification if a payment is stated as risk by the Finance Department.</span>
												</span>
												<!--end::Label-->
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<div class="separator separator-dashed my-6"></div>
											<!--end::Option-->
											<!--begin::Option-->
											<label class="form-check form-check-custom form-check-solid align-items-start">
												<!--begin::Input-->
												<input class="form-check-input me-3" type="checkbox" name="email-preferences[]" checked="checked" value="1" />
												<!--end::Input-->
												<!--begin::Label-->
												<span class="form-check-label d-flex flex-column align-items-start">
													<span class="fw-bold fs-5 mb-0">Invoice Payments</span>
													<span class="text-muted fs-6">Receive a notification if a customer sends an incorrect amount to pay their invoice.</span>
												</span>
												<!--end::Label-->
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<div class="separator separator-dashed my-6"></div>
											<!--end::Option-->
											<!--begin::Option-->
											<label class="form-check form-check-custom form-check-solid align-items-start">
												<!--begin::Input-->
												<input class="form-check-input me-3" type="checkbox" name="email-preferences[]" value="1" />
												<!--end::Input-->
												<!--begin::Label-->
												<span class="form-check-label d-flex flex-column align-items-start">
													<span class="fw-bold fs-5 mb-0">Webhook API Endpoints</span>
													<span class="text-muted fs-6">Receive notifications for consistently failing webhook API endpoints.</span>
												</span>
												<!--end::Label-->
											</label>
											<!--end::Option-->
										</div>
										<!--end::Card body-->
										<!--begin::Card footer-->
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<button class="btn btn-light btn-active-light-primary me-2">Discard</button>
											<button class="btn btn-primary px-6">Save Changes</button>
										</div>
										<!--end::Card footer-->
									</form>
									<!--end::Form-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Notifications-->
							<!--begin::Notifications-->
							<div class="card mb-5 mb-xl-10">
								<!--begin::Card header-->
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_notifications" aria-expanded="true" aria-controls="kt_account_notifications">
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Notifications</h3>
									</div>
								</div>
								<!--begin::Card header-->
								<!--begin::Content-->
								<div id="kt_account_settings_notifications" class="collapse show">
									<!--begin::Form-->
									<form class="form">
										<!--begin::Card body-->
										<div class="card-body border-top px-9 pt-3 pb-4">
											<!--begin::Table-->
											<div class="table-responsive">
												<table class="table table-row-dashed border-gray-300 align-middle gy-6">
													<tbody class="fs-6 fw-semibold">
														<!--begin::Table row-->
														<tr>
															<td class="min-w-250px fs-4 fw-bold">Notifications</td>
															<td class="w-125px">
																<div class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_email" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=email]" />
																	<label class="form-check-label ps-2" for="kt_settings_notification_email">Email</label>
																</div>
															</td>
															<td class="w-125px">
																<div class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" id="kt_settings_notification_phone" checked="checked" data-kt-check="true" data-kt-check-target="[data-kt-settings-notification=phone]" />
																	<label class="form-check-label ps-2" for="kt_settings_notification_phone">Phone</label>
																</div>
															</td>
														</tr>
														<!--begin::Table row-->
														<!--begin::Table row-->
														<tr>
															<td>Billing Updates</td>
															<td>
																<div class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="1" id="billing1" checked="checked" data-kt-settings-notification="email" />
																	<label class="form-check-label ps-2" for="billing1"></label>
																</div>
															</td>
															<td>
																<div class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" id="billing2" checked="checked" data-kt-settings-notification="phone" />
																	<label class="form-check-label ps-2" for="billing2"></label>
																</div>
															</td>
														</tr>
														<!--begin::Table row-->
														<!--begin::Table row-->
														<tr>
															<td>New Team Members</td>
															<td>
																<div class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" id="team1" checked="checked" data-kt-settings-notification="email" />
																	<label class="form-check-label ps-2" for="team1"></label>
																</div>
															</td>
															<td>
																<div class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" id="team2" data-kt-settings-notification="phone" />
																	<label class="form-check-label ps-2" for="team2"></label>
																</div>
															</td>
														</tr>
														<!--begin::Table row-->
														<!--begin::Table row-->
														<tr>
															<td>Completed Projects</td>
															<td>
																<div class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" id="project1" data-kt-settings-notification="email" />
																	<label class="form-check-label ps-2" for="project1"></label>
																</div>
															</td>
															<td>
																<div class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" id="project2" checked="checked" data-kt-settings-notification="phone" />
																	<label class="form-check-label ps-2" for="project2"></label>
																</div>
															</td>
														</tr>
														<!--begin::Table row-->
														<!--begin::Table row-->
														<tr>
															<td class="border-bottom-0">Newsletters</td>
															<td class="border-bottom-0">
																<div class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" id="newsletter1" data-kt-settings-notification="email" />
																	<label class="form-check-label ps-2" for="newsletter1"></label>
																</div>
															</td>
															<td class="border-bottom-0">
																<div class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" id="newsletter2" data-kt-settings-notification="phone" />
																	<label class="form-check-label ps-2" for="newsletter2"></label>
																</div>
															</td>
														</tr>
														<!--begin::Table row-->
													</tbody>
												</table>
											</div>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
										<!--begin::Card footer-->
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<button class="btn btn-light btn-active-light-primary me-2">Discard</button>
											<button class="btn btn-primary px-6">Save Changes</button>
										</div>
										<!--end::Card footer-->
									</form>
									<!--end::Form-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Notifications-->
							<!--begin::Deactivate Account-->
							<div class="card">
								<!--begin::Card header-->
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="kt_account_deactivate">
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Deactivate Account</h3>
									</div>
								</div>
								<!--end::Card header-->
								<!--begin::Content-->
								<div id="kt_account_settings_deactivate" class="collapse show">
									<!--begin::Form-->
									<form id="kt_account_deactivate_form" class="form">
										<!--begin::Card body-->
										<div class="card-body border-top p-9">
											<!--begin::Notice-->
											<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
												<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
														<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
														<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Wrapper-->
												<div class="d-flex flex-stack flex-grow-1">
													<!--begin::Content-->
													<div class="fw-semibold">
														<h4 class="text-gray-900 fw-bold">You Are Deactivating Your Account</h4>
														<div class="fs-6 text-gray-700">For extra security, this requires you to confirm your email or phone number when you reset yousignr password.
														<br />
														<a class="fw-bold" href="#">Learn more</a></div>
													</div>
													<!--end::Content-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Notice-->
											<!--begin::Form input row-->
											<div class="form-check form-check-solid fv-row">
												<input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate" />
												<label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">I confirm my account deactivation</label>
											</div>
											<!--end::Form input row-->
										</div>
										<!--end::Card body-->
										<!--begin::Card footer-->
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<button id="kt_account_deactivate_account_submit" type="submit" class="btn btn-danger fw-semibold">Deactivate Account</button>
										</div>
										<!--end::Card footer-->
									</form>
									<!--end::Form-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Deactivate Account-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->

				
@endsection