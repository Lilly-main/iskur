<!DOCTYPE html>
<html lang="en">
	
<head><base href="../"/>
		<title>Türkiye İş Kurumu</title>
		<meta charset="utf-8" />
		<meta name="description" content="Bootstrap" />
		<meta name="keywords" content="iskur" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="assets/media/logos/favicon_io/favicon.ico" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        @yield('styles')
</head>
	
<body id="kt_body">
	
	<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
	<div class="d-flex flex-column flex-root">
			
		<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
					
			<!--begin::Aside-->
			<div id="kt_aside" class="aside py-9" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">


						<!--begin::Kullanıcı-->
						<div class="aside-footer flex-column-auto px-9" id="kt_aside_footer">
							<!--begin::User panel-->
							<div class="d-flex flex-stack">
								<!--begin::Wrapper-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-circle symbol-40px">
										<img src="{{ Auth::user() && Auth::user()->profile_photo ? asset('storage/' . Auth::user()->profile_photo) : asset('assets/media/avatars/person-dummy.jpg') }}" alt="photo" />
									</div>
									<!--end::Avatar-->
									<!--begin::User info-->
									<div class="ms-2">
										<a href="{{ route('dashboard') }}" class="text-gray-800 text-hover-primary fs-6 fw-bold lh-1">
											{{ Auth::user()->name ?? 'Kullanıcı' }}
										</a>
										<span class="text-muted fw-semibold d-block fs-7 lh-1">
											{{ Auth::user()->professions->first()->name ?? 'Meslek Bilgisi Yok' }}
										</span>
									</div>
									<!--end::User info-->
								</div>
								<!--end::Wrapper-->
								
								<!--begin::User menu-->
								<div class="ms-1">
									
								

									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="assets/media/avatars/300-1.jpg" />
												</div>
												<!--end::Avatar-->
												
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="../../demo3/dist/account/overview.html" class="menu-link px-5">My Profile</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="../../demo3/dist/apps/projects/list.html" class="menu-link px-5">
												<span class="menu-text">My Projects</span>
												<span class="menu-badge">
													<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
												</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-end">
											<a href="#" class="menu-link px-5">
												<span class="menu-title">My Subscription</span>
												<span class="menu-arrow"></span>
											</a>
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo3/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo3/dist/account/billing.html" class="menu-link px-5">Billing</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo3/dist/account/statements.html" class="menu-link px-5">Payments</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo3/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator my-2"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content px-3">
														<label class="form-check form-switch form-check-custom form-check-solid">
															<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
															<span class="form-check-label text-muted fs-7">Notifications</span>
														</label>
													</div>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="../../demo3/dist/account/statements.html" class="menu-link px-5">My Statements</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end" data-kt-menu-offset="-15px, 0">
											<a href="#" class="menu-link px-5">
												<span class="menu-title position-relative">Language
												<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
												<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
											</a>
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo3/dist/account/settings.html" class="menu-link d-flex px-5 active">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
													</span>English</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo3/dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
													</span>Spanish</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo3/dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
													</span>German</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo3/dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
													</span>Japanese</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo3/dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
													</span>French</a>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5 my-1">
											<a href="../../demo3/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="../../demo3/dist/authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::User account menu-->
								</div>
								<!--end::User menu-->


							</div>
							<!--end::User panel-->
						</div>
						<!--end::Kullanıcı-->


						<!--begin::Aside menu-->
						<div class="aside-menu flex-column-fluid ps-5 pe-3 mb-9" id="kt_aside_menu">
							<!--begin::Aside Menu-->
							<div class="w-100 hover-scroll-overlay-y d-flex pe-2" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper" data-kt-scroll-offset="100">
								<!--begin::Menu-->
								<div class="menu menu-column menu-rounded menu-sub-indention menu-active-bg fw-semibold my-auto" id="#kt_aside_menu" data-kt-menu="true">
								
									<!--begin:Menu item Özgeçmiş  -->
									<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
												<span class="svg-icon svg-icon-5">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
														<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Özgeçmiş</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										
										<!--begin:Menu sub-->

										<div class="menu-sub menu-sub-accordion">
											
											<!--begin:Menu item Kişisel Bilgiler-->
											<div class="menu-item">
												<!--begin:Menu link -->
												<a class="menu-link" href="{{ route('user.personalInfo') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Kişisel Bilgiler</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item Kişisel Bilgiler-->

											<!--begin:Menu item İletişim Bilgileri-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="{{ route('user.contactInfo') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">İletişim Bilgileri</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item İletişim Bilgileri-->

											<!--begin:Menu item Öğrenim Bilgileri-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="{{ route('user.educationInfo') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Öğrenim Bilgileri</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item Öğrenim Bilgileri-->

											

											<!--begin:Menu item Meslek Bilgileri-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="{{ route('profile.profession') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Meslek Bilgileri</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item Meslek Bilgileri-->

											<!--begin:Menu item Belgeler-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="{{ route('user.documents') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													
													<span class="menu-title">Belgeler</span>
												</a>
												<!--end:Menu link -->
											</div>
											<!--end:Menu item Belgeler->
											
																					

											<div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_dashboards_collapse"></div>

											<div class="menu-item">

												<div class="menu-content">
													
												</div>
											</div> 


										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item Özgeçmiş -->

									<!--begin:Menu item İş İlanlari-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link active" href="{{ route('isilanlari') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">İş İlanları</span>
												</a>
												<!--end:Menu link-->
											</div>
									<!--end:Menu item İş İlanlari -->

									<!--begin:Menu item İş Başvurularim-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link @if(Route::currentRouteName() == 'is_basvurularim') active @endif" href="{{ route('is_basvurularim') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">İş Başvurularım</span>
												</a>
												<!--end:Menu link-->
											</div>
									<!--end:Menu item İş Başvurularim-->

									<!--begin:Menu item işsizlik Ödeneği Başvuru -->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link active" href="{{ route('issizlik_odenegi') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">İşsizlik Ödeneği Başvuru</span>
												</a>
												<!--end:Menu link-->
											</div>
									<!--end:Menu item işsizlik Ödeneği Başvuru-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Aside Menu-->
						</div>
						<!--end::Aside menu-->

						</div>
					<!--end::Aside-->
					</div>
				<!--end::Aside-->
				</div>
			<!--end::Aside-->
					
			@yield('content')

			

			<!--begin::Footer-->
				<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
							<!--begin::Container-->
							<div class="container d-flex flex-column flex-md-row flex-stack">
								<!--begin::Copyright-->
								<div class="text-dark order-2 order-md-1">
									<span class="text-gray-400 fw-semibold me-1">Türkiye İş Kurumu © 2025</span>
								</div>
								<!--end::Copyright-->

								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
													<li class="menu-item">
														<span href="#" target="_blank" class="menu-link px-2">İşveren ya da iş arayan olarak </a>
													</li>
													<li class="menu-item">
														<a href="#" target="_blank" class="menu-link px-2">kayıt olun / </a>
													</li>
													<li class="menu-item">
														<a href="#" target="_blank" class="menu-link px-2">giriş yapın</a>
													</li>
								</ul>
								<!--end::Menu-->

							</div>
							<!--end::Container-->
				</div>
			<!--end::Footer-->
						
		<!--end::Page-->

	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
	</div>
	<!--end::Scrolltop-->

	<!--begin::Javascript-->
	<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used by this page)-->
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
	<!--end::Javascript-->
   
	@yield('scripts')

	

	@yield('footer')

</body>
</html>

