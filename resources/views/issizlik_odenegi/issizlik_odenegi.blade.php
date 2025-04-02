@extends('layouts.panel_layout',['pageName' => 'issizlik_odenegi.issizlik_odenegi', 'active' => ''])



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
														
													
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label required fw-semibold fs-6">Ad-Soyad</label>
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
														<label class="col-lg-4 col-form-label fw-semibold fs-6">
															<span class="required">T.C Numarası</span>
															
														</label>
														<!--end::Label-->
														<!--begin::Col-->
														<div class="col-lg-8 fv-row">
															<input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="T.C Numarası" value="044 3276 454 935" />
														</div>
														<!--end::Col-->
													</div>
														
														
														<!--begin::Label-->
														<label class="col-lg-4 col-form-label fw-semibold fs-6">BİLGİLENDİRME, HAKLAR VE YÜKÜMLÜLÜKLER</label>
														<!--end::Label-->
														<!--begin::Col--><!--begin::Col-->
														<div class="container mt-4">
															<div class="card">
																												
															</div>
														</div>
																<div class="card-body">
																	<p> 1.Kendi istek ve kusuru dışında işini kaybedenler; hizmet akdinin feshinden önceki son 120 gün içinde hizmet akdine bağlı çalışmış olmak kaydıyla son üç yıl içinde en az 600 gün süre ile işsizlik sigortası primi ödemiş olmak ve hizmet akdinin feshinden sonraki 30 gün içinde İŞKUR birimine doğrudan veya elektronik ortamda başvurarak iş almaya hazır olduğunu bildirmek koşulu ile işsizlik sigortası hizmetlerinden yararlandırılmaktadır. Mücbir sebepler dışında 30 gün içerisinde başvurulmaması halinde, başvuruda gecikilen süre, toplam hak sahipliği süresinden düşülmektedir. </p>
																	<p> 2.Hizmet akdinin feshinden önceki son üç yıl içinde; 600 gün sigortalı olarak çalışıp işsizlik sigortası primi ödemiş olanlara 180 gün, 900 gün sigortalı olarak çalışıp işsizlik sigortası primi ödemiş olanlara 240 gün ve 1080 gün sigortalı olarak çalışıp işsizlik sigortası primi ödemiş olanlara 300 gün süre ile işsizlik ödeneği verilmektedir. Günlük işsizlik ödeneği miktarı, günlük brüt asgari ücretin yüzde seksenini geçmemek üzere sigortalının son dört aylık prime esas kazançları dikkate alınarak hesaplanan günlük ortalama brüt kazancının yüzde kırkıdır. Ödenek miktarı ve süresine yapılan itirazlar SGK kayıtları esas alınarak sonuçlandırılır. </p>
																	<p> 3.Fesih nedenine yapılan itirazlar için, feshin Kanun kapsamında yapıldığını kanıtlayan somut bir belge (İhbar ve/veya kıdem tazminatı alındığını gösterir belge, işverence işçiye yapılmış olan fesih bildirimi yazısı, arabuluculuk tutanağı ya da kesinleşmiş mahkeme kararı vs.) ibraz edilmesi gerekmektedir. </p>
																	<p> 4.İşsizlik ödeneğine hak kazananlar, her ayın 5’inde kimlikleri ile birlikte herhangi bir PTT şubesine başvurarak veya Kuruma IBAN numarası kaydedilmesi durumunda banka hesaplarından işsizlik ödeneklerini alabilirler. </p>
																	<p> 5.İŞKUR, sigortalı işsizlerin PTT hesabı üzerinde her türlü işlemi yapabilir. PTTBank’ta üç ay süreyle işlem görmeyen ve Kuruma kayıtlı IBAN numarasının hatalı olması sebebiyle aktarılamayan ödemeler İşsizlik Sigortası Fonu emanet hesabına iade edilir. Sigortalı işsizler zaman aşımı süresi içinde İŞKUR birimlerine başvurarak ödeneklerini alabilir. </p>
																	<p> 6.5510 sayılı Kanun gereğince, işsizlik ödeneği alanlar ile bakmakla yükümlü olduğu kişiler genel sağlık sigortalısı kapsamında sağlık hizmetlerinden yararlanabilir. Provizyon sorunu yaşanması halinde en yakın İŞKUR birimine başvurulması gerekmektedir. </p>
																	<p> 7.İşsizlik ödeneği alırken gelir getirici bir işte çalışmaya başlayanların (bir gün dahi olsa) işe girdiği tarihi takip eden günden başlayarak 15 gün içinde en yakın İŞKUR birimine bilgi vermeleri gerekmektedir. Hizmet akdine tabi olarak işçi statüsünde yapılan çalışma, kendi nam ve hesabına yapılan çalışma (tarım sigortalısı dâhil) ve devlet memuru olarak yapılan çalışma (5510/4 a-b-c) bu kapsamda değerlendirilir. İsteğe bağlı sigortalı olanların ödeneği kesilmez (isteğe bağlı işsizlik sigortalısı ile muafiyet belgesi olan isteğe bağlı sigortalılar hariç). </p>
																	<p>8. İşsizlik ödeneği almakta iken; </p>
																	<p class="ms-4">a. İŞKUR tarafından teklif edilen mesleklerine uygun ve son çalıştıkları işin ücret ve çalışma koşullarına yakın ve ikamet edilen yerin belediye mücavir alanı sınırları içinde bir işi haklı bir nedene dayanmaksızın reddeden sigortalı işsizlerin ödenekleri tekrar başlatılmamak üzere kesilir. </p>
																	<p class="ms-4">b. Gelir getirici bir işte çalıştığı veya herhangi bir sosyal güvenlik kuruluşundan yaşlılık aylığı aldığı denetim sonucu tespit edilen sigortalı işsizlerin ödenekleri tekrar başlatılmamak üzere kesilir. </p>
																	<p class="ms-4">c.İŞKUR tarafından; önerilen meslek geliştirme, edindirme ve yetiştirme eğitimini haklı bir neden göstermeden reddeden veya kabul etmesine karşın devam etmeyen ve haklı bir nedene dayanmaksızın yapılan çağrıları zamanında cevaplamayan, istenilen bilgi ve belgeleri öngörülen süre içinde vermeyenlerin ödenekleri kesilir. Bu hallerin sona ermesi durumunda, ödemelere yeniden başlanır. Bu suretle yapılacak ödemenin süresi başlangıçta belirlenmiş olan toplam hak sahipliği süresinin sona erdiği tarihi geçemez. </p>
																	<p> 9.Herhangi bir sebeple (ödenek ödenen dönemde işe giriş, emeklilik vs.) sigortalı işsizlere yapılan fazla ödemeler ilgililerin kusurundan kaynaklanıyorsa yasal faizi ile birlikte tahsil edilir. PTT hesabından ödeneği almayanlara yasal faiz uygulanmaz, borcuna karşılık tahsil edilir. Borcun taksitlendirilmesi mümkündür. Ancak, taksit miktarı brüt asgari ücretin 1/10 undan az olamaz. Ödeme yapılmaması halinde yasal yollardan takip işlemi başlatılır. </p>
																	<p>10. 5510 sayılı Kanunun 4. maddesinin b bendi kapsamında sigortalı olanların; herhangi bir neden ile durdurulan sigortalılıklarının tekrar başlatılması ve/veya tekrar ihya ettirilmesi durumlarında, bu sigortalılık döneminin işsizlik ödeneği ödenen dönemle çakışması halinde ödemeler yasal faizi ile tahsil edilir. </p>
																	<p>11 İkamet adresinin değişmesi, sosyal güvenlik kuruluşundan yaşlılık aylığı alınması, askere gitme, silâhaltına alınma, çalışmaya başlama (işçi, memur veya kendi nam ve hesabına çalışan), mahkeme kararıyla işe iade edilme, yetkili sağlık kuruluşunca istirahatli kılınma, yurtdışına çıkma, tutuklanma, hüküm giyme hallerinde durumun İŞKUR’a 15 gün içinde bildirilmesi gerekmektedir. PTT üzerinden ödeme alınan durumlarda işe girilen aya ilişkin ödenek hesaptan çekilmeden önce İŞKUR birimi ile irtibat kurulması uygun olacaktır. </p>
																	<p>12 İşsizlik sigortasına ilişkin bildirimler İŞKUR bilgi edinme sayfası veya ALO 170 iletişim merkezi yoluyla da yapılabilir. </p>
																	<p>13 Askere gitme nedeniyle yapılan fesihlerde terhis tarihini izleyen 30 gün içinde başvurulması gerekmektedir. İhtiyaç halinde Kurum tarafından terhis belgesi talep edilebilir. </p>
																	<p>14 Sigortalı işsiz tarafından verilen bilgilerdeki eksiklik veya yanlışlık nedeniyle yapılan fazla ödemeler yasal faizi ile birlikte tahsil edilecektir. </p>
																	<p>15 Ödeneğe hak kazanılmaması halinde daha önce başlatılabilecek şekilde kesilen/durdurulan ödenek (varsa) başvuru tarihi ile yeniden başlatılacaktır. </p>
																	<p>16 İŞKUR’a olan borçlar yine İŞKUR tarafından yapılacak ödemelerden mahsup edilebilir. </p>
																	<p> Yukarıda yer alan “Bilgilendirme, Haklar ve Yükümlülükler” konusunda bilgi aldığımı, bu formun bir nüshasını teslim aldığımı beyan, kabul ve taahhüt ederim. İşsizlik ödeneği/iş kaybı tazminatı ödenmesi hususunda gerekli işlemin yapılmasını arz ederim. </p>
																	
																</div>
															</div>
														</div>
														</div>
														
													
															<!--begin::Label-->													
															<div class="col-lg-8 d-flex align-items-center">
																<div class="form-check form-check-solid form-switch form-check-custom fv-row">
																<input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked" />
																<label class="col-form-label fw-semibold fs-6">		Yukarıdaki metni okudum kabul ve/veya taahhüt ederim</label>
																<label class="form-check-label" for="allowmarketing"></label>
															</div>
														
														<!--begin::Label-->
													</div>
													
													<!--end::Card body-->
													<!--begin::Actions-->
													<div class="card-footer d-flex justify-content-center py-6 px-9">
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
@endsection