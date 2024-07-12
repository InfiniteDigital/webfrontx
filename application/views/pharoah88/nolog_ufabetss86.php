<body class="home page-template-default page page-id-216 custom-background wp-custom-logo ehf-template-harem789 ehf-stylesheet-harem789 elementor-default elementor-kit-124 elementor-page elementor-page-216">


	<div class="overlay"></div>

	<div class="wrapper">

		<button class="wrapper-menu  sidebarCollapse" aria-label="Main Menu">
			<svg width="40" height="40" viewBox="0 0 100 100">
				<path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
				<path class="line line2" d="M 20,50 H 80" />
				<path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
			</svg>
		</button>

		<div class="w-100">
			<div class="stars"></div>
			<div class="stars2"></div>
			<div class="stars3"></div>
		</div>


		<div class="navbarmain">
			<div class="lightning">
				<img width="432" height="212" src="<?= $theme_asset ?>/wp-content/uploads/2022/06/ln01.png" class="image wp-image-2031  attachment-full size-full" alt="" decoding="async" loading="lazy" style="max-width: 100%; height: auto;" sizes="(max-width: 432px) 100vw, 432px" />
			</div>
			<div class="logo">
				<a href="<?= $baseurl ?>" class="custom-logo-link" rel="home" aria-current="page">
					<img width="1000" height="446" src="<?= $theme_asset ?>/img/logo.png" class="custom-logo" alt="HAREM789" decoding="async" srcset="<?= $theme_asset ?>/img/logo.png 1000w" sizes="(max-width: 1000px) 100vw, 1000px" /></a>
			</div>
			<div class="menuicon ">
				<div class="menu-menu-right-container">
					<ul id="menu-menu-right" class="menu">
						<li id="menu-item-1471" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1471">
							<a href="#" class="menu-image-title-after menu-image-not-hovered">
								<img width="100" height="100" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/download-1.png" class="menu-image menu-image-title-after" alt="" decoding="async" loading="lazy" /><span class="menu-image-title-after menu-image-title">โปรโมชั่น</span></a>
						</li>
						<li id="menu-item-1535" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1535">
							<a href="#" class="menu-image-title-after menu-image-not-hovered"><img width="471" height="471" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/menu-hot-ic.png" class="menu-image menu-image-title-after" alt="" decoding="async" loading="lazy" /><span class="menu-image-title-after menu-image-title">บทความ</span></a>
						</li>
						<li id="menu-item-2118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2118">
							<a href="#" class="menu-image-title-after menu-image-not-hovered"><img width="403" height="403" src="<?= $theme_asset ?>/wp-content/uploads/2022/06/calender02.png" class="menu-image menu-image-title-after" alt="" decoding="async" loading="lazy" /><span class="menu-image-title-after menu-image-title">กิจกรรม</span></a>
						</li>
						<li id="menu-item-1472" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1472">
							<a href="https://line.me/R/ti/p/<?= $line ?>" class="menu-image-title-after menu-image-not-hovered"><img width="512" height="512" src="<?= $theme_asset ?>/wp-content/uploads/2021/07/line.png" class="menu-image menu-image-title-after" alt="" decoding="async" loading="lazy" /><span class="menu-image-title-after menu-image-title">Line</span></a>
						</li>
					</ul>
				</div>
				<div class="overlaymenu"></div>
			</div>
			<div class="loginregishead">
				<button class="btn btn-primary mt-lg-3 mr-lg-3">
					<div class="-text-container">
						<div class="textwidget"><a href="#loginmodal">เข้าสู่ระบบ</a></div>
					</div>
				</button><button class="btn btn-primary mt-lg-3 mr-lg-3">
					<div class="-text-container">
						<div class="textwidget"><a href="register">สมัครสมาชิก</a></div>
					</div>
				</button>
			</div>

		</div>





		<div class="fixedtopmobile">
			<div class="newsboxhead" data-animatable="fadeInUp" data-delat="200">
				<div class="-icon-container">
					<i class="fas fa-volume-up"></i>
				</div>
				<span><?= $webname ?> คาสิโนออนไลน์ สล็อตออนไลน์ ที่ให้คุณสนุกได้ทุกรูปแบบ<span>
						<div class="textwidget"></div>
			</div>


			<div class="swiper-container-2">
				<div class="swiper-wrapper">
					<?php if (!empty($banner)) : ?>
						<?php foreach ($banner as $k => $v) : ?>
							<?php if ($v->checkhome == 1) : ?>
								<div class="swiper-slide">
									<img width="1280" height="462" src="<?= $v->img_name ?>" class="image wp-image-2106  attachment-full size-full" alt="" decoding="async" loading="lazy" style="max-width: 100%; height: auto;" />
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
				<div class="swiper-button-prev swiper-button-white"></div>
				<div class="swiper-button-next swiper-button-white"></div>
			</div>
		</div>




		<div class="x-button-actions" id="account-actions-mobile">
			<div class="-outer-wrapper">
				<div class="-left-wrapper">


					<span class="-item-wrapper"><span class="-ic-img"><span class="-textfooter d-block"><a href="#">เข้าสู่ระบบ</a></span>
							<a href="#loginmodal"><img width="150" height="150" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/ic-menu-login-animate-1.png" class="image wp-image-1492  attachment-full size-full" alt="" decoding="async" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-menu-login-animate-1.png 150w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-menu-login-animate-1-24x24.png 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-menu-login-animate-1-36x36.png 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-menu-login-animate-1-48x48.png 48w" sizes="(max-width: 150px) 100vw, 150px" /></a>
						</span>
					</span><span class="-item-wrapper"><span class="-ic-img"><span class="-textfooter d-block"><a href="#">สมัคร</a></span>
							<a href="register"><img width="50" height="50" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/ic-menu-register.png" class="image wp-image-1493  attachment-full size-full" alt="" decoding="async" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-menu-register.png 50w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-menu-register-24x24.png 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-menu-register-36x36.png 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-menu-register-48x48.png 48w" sizes="(max-width: 50px) 100vw, 50px" /></a>
						</span>
					</span>
				</div>
				<span class="-center-wrapper js-footer-lobby-selector js-menu-mobile-container">

					<div class="-selected">
						<h2 class="widgettitle"><a href="#">กิจกรรม</a></h2>
						<a href="#"><img width="121" height="121" src="<?= $theme_asset ?>/wp-content/uploads/2022/04/menu.png" class="image wp-image-1605  attachment-full size-full" alt="" decoding="async" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/04/menu.png 121w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/04/menu-24x24.png 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/04/menu-36x36.png 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/04/menu-48x48.png 48w" sizes="(max-width: 121px) 100vw, 121px" /></a>
					</div>
				</span>
				<div class="-fake-center-bg-wrapper">
					<svg viewBox="-10 -1 30 12">
						<defs>
							<linearGradient id="rectangleGradient" x1="0%" y1="0%" x2="0%" y2="100%">
								<stop offset="0%" stop-color="#7b39ce"></stop>
								<stop offset="100%" stop-color="#22164e"></stop>
							</linearGradient>
						</defs>
						<path d="M-10 -1 H30 V12 H-10z M 5 5 m -5, 0 a 5,5 0 1,0 10,0 a 5,5 0 1,0 -10,0z"></path>
					</svg>
				</div>
				<div class="-right-wrapper">

					<span class="-item-wrapper"><span class="-ic-img"><span class="-textfooter d-block"><a href="#">โปรโมชั่น</a></span>
							<a href="#"><img width="258" height="257" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/tab_promotion-1.png" class="image wp-image-1495  attachment-full size-full" alt="" decoding="async" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/tab_promotion-1.png 258w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/tab_promotion-1-150x150.png 150w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/tab_promotion-1-24x24.png 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/tab_promotion-1-36x36.png 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/tab_promotion-1-48x48.png 48w" sizes="(max-width: 258px) 100vw, 258px" /></a>
						</span>
					</span><span class="-item-wrapper"><span class="-ic-img"><span class="-textfooter d-block"><a href="#">ติดต่อเรา</a></span>
							<a href="https://line.me/R/ti/p/<?= $line ?>"><img width="123" height="122" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/support.png" class="image wp-image-1494  attachment-full size-full" alt="" decoding="async" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/support.png 123w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/support-24x24.png 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/support-36x36.png 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/support-48x48.png 48w" sizes="(max-width: 123px) 100vw, 123px" /></a>
						</span>
					</span>

				</div>
				<div class="-fully-overlay js-footer-lobby-overlay"></div>
			</div>
		</div>


		<div class="loginmodaldiv modaldiv">
			<div class="contentmodal animate__animated animate__bounceInDown">
				<button><i class="fas fa-times"></i></button>
				<div class="login">

					<img width="1000" height="446" src="<?= $theme_asset ?>/img/logo.png" class="custom-logo" alt="<?= strtoupper($webname) ?>" decoding="async" />
					<h5>เข้าสู่ระบบ</h5>

					<input class="text_login mb-4 mt-3" id="phone" name="phone" pattern="[0-9]*" value="" type="text" placeholder="เบอร์โทรศัพท์">
					<input class="text_login" id="password_m" type="password" name="password_m" pattern="[a-zA-Z0-9.+#_,$-]+" placeholder="รหัสผ่าน">
					<a class="btnLogin" id="btnLogin" onclick="login_new()" href="javascript:void(0)">เข้าสู่ระบบ</a>


					<div class="footer-form py-3">
						<div class="row ">
							<div class="col-7"><span class="text-white">ท่านยังไม่มีบัญชี?</span> <a href="register" class="text-white"><u>สมัครสมาชิก</u></a></div>
							<div class="col-5 text-right"><a href="#" target="_blank" class="text-decoration-none text-white">ลืมรหัสผ่าน ?</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="overlaymodal"></div>
		</div>




		<div class="facebook-mobile">
			<a href="https://line.me/R/ti/p/<?= $line ?>"><img width="239" height="300" src="<?= $theme_asset ?>/wp-content/uploads/2022/06/lineright2.png" class="image wp-image-2085  attachment-full size-full" alt="" decoding="async" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/lineright2.png 239w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/lineright2-19x24.png 19w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/lineright2-29x36.png 29w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/lineright2-38x48.png 38w" sizes="(max-width: 239px) 100vw, 239px" /></a>
		</div>
		<div class="containmain">

			<div class="fixedcontain">
				<div class="fixedleft ">
					<div class="sidegamebar ">
						<div class="tabgamemenu">
							<div class="menu-menu-left-container">
								<ul id="menu-menu-left" class="menu">
									<li id="menu-item-402" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-216 current_page_item menu-item-402">
										<a href="<?= $baseurl ?>" aria-current="page" class="menu-image-title-after menu-image-not-hovered"><img width="100" height="100" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/ic-nav-menu-hot-game.png" class="menu-image menu-image-title-after" alt="" decoding="async" loading="lazy" /><span class="menu-image-title-after menu-image-title">ยอดนิยม</span></a>
									</li>
									<li id="menu-item-1102" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1102">
										<a href="#" class="menu-image-title-after menu-image-not-hovered"><img width="100" height="100" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/EZ-Casino-%e0%b8%9a%e0%b8%a3%e0%b8%b4%e0%b8%81%e0%b8%b2%e0%b8%a3%e0%b8%aa%e0%b8%a5%e0%b9%87%e0%b8%ad%e0%b8%95%e0%b8%ad%e0%b8%ad%e0%b8%99%e0%b9%84%e0%b8%a5%e0%b8%99%e0%b9%8c-%e0%b8%9d%e0%b8%b2%e0%b8%81-100-%e0%b8%a3%e0%b8%b1%e0%b8%9a%e0%b9%80%e0%b8%84%e0%b8%a3%e0%b8%94%e0%b8%b4%e0%b8%95%e0%b8%9f%e0%b8%a3%e0%b8%b5-100.png" class="menu-image menu-image-title-after" alt="" decoding="async" loading="lazy" /><span class="menu-image-title-after menu-image-title">สล็อตเกม</span></a>
									</li>
									<li id="menu-item-1108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1108">
										<a href="#" class="menu-image-title-after menu-image-not-hovered"><img width="100" height="100" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/EZ-Casino-%e0%b8%84%e0%b8%b2%e0%b8%aa%e0%b8%b4%e0%b9%82%e0%b8%99%e0%b8%ad%e0%b8%ad%e0%b8%99%e0%b9%84%e0%b8%a5%e0%b8%99%e0%b9%8c-%e0%b8%9a%e0%b8%b2%e0%b8%84%e0%b8%b2%e0%b8%a3%e0%b9%88%e0%b8%b2%e0%b8%aa%e0%b8%94-%e0%b8%a3%e0%b8%b9%e0%b9%80%e0%b8%a5%e0%b9%87%e0%b8%95-%e0%b8%8b%e0%b8%b4%e0%b8%84%e0%b9%82%e0%b8%9a-%e0%b9%84%e0%b8%ae%e0%b9%82%e0%b8%a5-%e0%b9%80%e0%b8%aa%e0%b8%b7%e0%b8%ad-%e0%b8%a1%e0%b8%b1%e0%b8%87%e0%b8%81%e0%b8%a3.png" class="menu-image menu-image-title-after" alt="" decoding="async" loading="lazy" /><span class="menu-image-title-after menu-image-title">คาสิโนสด</span></a>
									</li>
									<li id="menu-item-1111" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1111">
										<a href="#" class="menu-image-title-after menu-image-not-hovered"><img width="100" height="100" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/EZ-Casino-%e0%b9%81%e0%b8%97%e0%b8%87%e0%b8%9f%e0%b8%b8%e0%b8%95%e0%b8%9a%e0%b8%ad%e0%b8%a5%e0%b8%9e%e0%b8%99%e0%b8%b1%e0%b8%99%e0%b8%ad%e0%b8%ad%e0%b8%99%e0%b9%84%e0%b8%a5%e0%b8%99%e0%b9%8c-%e0%b8%9a%e0%b8%b2%e0%b8%aa%e0%b9%80%e0%b8%81%e0%b9%87%e0%b8%95%e0%b8%9a%e0%b8%ad%e0%b8%a5-E-Sport.png" class="menu-image menu-image-title-after" alt="" decoding="async" loading="lazy" /><span class="menu-image-title-after menu-image-title">กีฬา</span></a>
									</li>
									<li id="menu-item-1698" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1698">
										<a href="#" class="menu-image-title-after menu-image-not-hovered"><img width="300" height="275" src="<?= $theme_asset ?>/wp-content/uploads/2022/04/04-1.png" class="menu-image menu-image-title-after" alt="" decoding="async" loading="lazy" /><span class="menu-image-title-after menu-image-title">หวย</span></a>
									</li>
								</ul>
							</div>

						</div>
						<div class="linechatfixed">
							<a href="https://line.me/R/ti/p/<?= $line ?>"><img width="202" height="64" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/linetext.png" class="image wp-image-1135  attachment-full size-full" alt="" decoding="async" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/linetext.png 202w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/linetext-24x8.png 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/linetext-36x11.png 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/linetext-48x15.png 48w" sizes="(max-width: 202px) 100vw, 202px" /></a>
						</div>
					</div>
				</div>
				<div class="fixedright">

					<div class="sectiongame">





						<div class="dicecontainer">
							<div class="dicespin">
								<canvas width="200" height="200"></canvas>
							</div>
						</div>

						<div class="containmain">

							<div class="-bg-container">
								<img width="850" height="877" src="<?= $theme_asset ?>/wp-content/uploads/2022/06/lightning001.png" class="image wp-image-2101  attachment-full size-full" alt="" decoding="async" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/lightning001.png 850w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/lightning001-291x300.png 291w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/lightning001-768x792.png 768w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/lightning001-24x24.png 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/lightning001-36x36.png 36w" sizes="(max-width: 850px) 100vw, 850px" /><img width="500" height="412" src="<?= $theme_asset ?>/wp-content/uploads/2022/06/tab-index-roulette.png" class="image wp-image-2080  attachment-full size-full" alt="" decoding="async" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/tab-index-roulette.png 500w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/tab-index-roulette-300x247.png 300w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/tab-index-roulette-24x20.png 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/tab-index-roulette-36x30.png 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/tab-index-roulette-48x40.png 48w" sizes="(max-width: 500px) 100vw, 500px" /><img width="1392" height="771" src="<?= $theme_asset ?>/wp-content/uploads/2022/06/bg_index_element_03.png" class="image wp-image-2077  attachment-full size-full" alt="" decoding="async" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/bg_index_element_03.png 1392w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/bg_index_element_03-300x166.png 300w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/bg_index_element_03-1024x567.png 1024w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/bg_index_element_03-768x425.png 768w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/bg_index_element_03-24x13.png 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/bg_index_element_03-36x20.png 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/bg_index_element_03-48x27.png 48w" sizes="(max-width: 1392px) 100vw, 1392px" /><img width="1505" height="812" src="<?= $theme_asset ?>/wp-content/uploads/2022/06/bg_index_element_04.png" class="image wp-image-2078  attachment-full size-full" alt="" decoding="async" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/bg_index_element_04.png 1505w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/bg_index_element_04-300x162.png 300w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/bg_index_element_04-1024x552.png 1024w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/bg_index_element_04-768x414.png 768w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/bg_index_element_04-24x13.png 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/bg_index_element_04-36x19.png 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/bg_index_element_04-48x26.png 48w" sizes="(max-width: 1505px) 100vw, 1505px" />
							</div>


							<div data-elementor-type="wp-page" data-elementor-id="216" class="elementor elementor-216">
								<section class="elementor-section elementor-top-section elementor-element elementor-element-342f784 linesection01 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="342f784" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-966f2fd" data-id="966f2fd" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-033915c elementor-widget elementor-widget-heading" data-id="033915c" data-element_type="widget" data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<img width="1000" height="446" src="<?= $theme_asset ?>/img/logo.png" class="custom-logo" alt="HAREM789" decoding="async" srcset="<?= $theme_asset ?>/img/logo.png 1000w" sizes="(max-width: 1000px) 100vw, 1000px" />
													</div>
												</div>
												<section class="elementor-section elementor-inner-section elementor-element elementor-element-cebbd37 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cebbd37" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-fd8ee51" data-id="fd8ee51" data-element_type="column">
															<div class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-6192246 elementor-widget elementor-widget-image" data-id="6192246" data-element_type="widget" data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" width="330" height="330" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1.png 330w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-300x300.png 300w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-150x150.png 150w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-24x24.png 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-36x36.png 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-48x48.png 48w" sizes="(max-width: 330px) 100vw, 330px" />
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6baf78e" data-id="6baf78e" data-element_type="column">
															<div class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-3f5d773 elementor-widget elementor-widget-heading" data-id="3f5d773" data-element_type="widget" data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2 class="elementor-heading-title elementor-size-default">คาสิโนออนไลน์ ยอดนิยม</h2>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</section>
												<section class="elementor-section elementor-inner-section elementor-element elementor-element-6bc8415 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6bc8415" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-637552d" data-id="637552d" data-element_type="column">
															<div class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-f18b71f elementor-widget elementor-widget-image" data-id="f18b71f" data-element_type="widget" data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" width="500" height="316" src="<?= $theme_asset ?>/wp-content/uploads/2022/06/ezc-wt-bbin-live-animation.gif" class="attachment-large size-large" alt="" loading="lazy" />
																	</div>
																</div>
																<div class="elementor-element elementor-element-17698f0 elementor-widget elementor-widget-heading" data-id="17698f0" data-element_type="widget" data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2 class="elementor-heading-title elementor-size-default">BBIN Casino
																		</h2>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-c3631c4" data-id="c3631c4" data-element_type="column">
															<div class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-4a03f33 elementor-widget elementor-widget-image" data-id="4a03f33" data-element_type="widget" data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" width="500" height="318" src="<?= $theme_asset ?>/wp-content/uploads/2022/06/download-1.webp" class="attachment-large size-large" alt="" loading="lazy" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/download-1.webp 500w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/download-1-300x191.webp 300w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/download-1-24x15.webp 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/download-1-36x23.webp 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/download-1-48x31.webp 48w" sizes="(max-width: 500px) 100vw, 500px" />
																	</div>
																</div>
																<div class="elementor-element elementor-element-2f64bb4 elementor-widget elementor-widget-heading" data-id="2f64bb4" data-element_type="widget" data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2 class="elementor-heading-title elementor-size-default">ATOM GAMING</h2>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-d27c456" data-id="d27c456" data-element_type="column">
															<div class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-256901b elementor-widget elementor-widget-image" data-id="256901b" data-element_type="widget" data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" width="498" height="316" src="<?= $theme_asset ?>/wp-content/uploads/2022/06/ezc-wt-sa-gaming-animation.gif" class="attachment-large size-large" alt="" loading="lazy" />
																	</div>
																</div>
																<div class="elementor-element elementor-element-a6a436a elementor-widget elementor-widget-heading" data-id="a6a436a" data-element_type="widget" data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2 class="elementor-heading-title elementor-size-default">SA Gaming</h2>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7fe4cff" data-id="7fe4cff" data-element_type="column">
															<div class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-298985e elementor-widget elementor-widget-image" data-id="298985e" data-element_type="widget" data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" width="500" height="318" src="<?= $theme_asset ?>/wp-content/uploads/2022/06/download.webp" class="attachment-large size-large" alt="" loading="lazy" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/download.webp 500w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/download-300x191.webp 300w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/download-24x15.webp 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/download-36x23.webp 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/download-48x31.webp 48w" sizes="(max-width: 500px) 100vw, 500px" />
																	</div>
																</div>
																<div class="elementor-element elementor-element-a861f1f elementor-widget elementor-widget-heading" data-id="a861f1f" data-element_type="widget" data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2 class="elementor-heading-title elementor-size-default">Sexy Gaming</h2>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</section>
												<section class="elementor-section elementor-inner-section elementor-element elementor-element-634df19 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="634df19" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2df3fab" data-id="2df3fab" data-element_type="column">
															<div class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-e0a9e35 elementor-widget elementor-widget-image" data-id="e0a9e35" data-element_type="widget" data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" width="500" height="316" src="<?= $theme_asset ?>/wp-content/uploads/2022/06/ezc-wt-wm-animation.gif" class="attachment-large size-large" alt="" loading="lazy" />
																	</div>
																</div>
																<div class="elementor-element elementor-element-013bef9 elementor-widget elementor-widget-heading" data-id="013bef9" data-element_type="widget" data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2 class="elementor-heading-title elementor-size-default">WM CASINO</h2>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4e159d5" data-id="4e159d5" data-element_type="column">
															<div class="elementor-widget-wrap">
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-a68174c" data-id="a68174c" data-element_type="column">
															<div class="elementor-widget-wrap">
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-8f78c6b" data-id="8f78c6b" data-element_type="column">
															<div class="elementor-widget-wrap">
															</div>
														</div>
													</div>
												</section>
												<section class="elementor-section elementor-inner-section elementor-element elementor-element-2bb8496 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2bb8496" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ae0f9a0" data-id="ae0f9a0" data-element_type="column">
															<div class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-444bfb8 elementor-widget elementor-widget-image" data-id="444bfb8" data-element_type="widget" data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" width="330" height="330" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1.png 330w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-300x300.png 300w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-150x150.png 150w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-24x24.png 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-36x36.png 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-48x48.png 48w" sizes="(max-width: 330px) 100vw, 330px" />
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f3c6383" data-id="f3c6383" data-element_type="column">
															<div class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-00b88b6 elementor-widget elementor-widget-heading" data-id="00b88b6" data-element_type="widget" data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2 class="elementor-heading-title elementor-size-default">สล็อตยอดนิยม</h2>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</section>
												<section class="elementor-section elementor-inner-section elementor-element elementor-element-5b725a9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5b725a9" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-fb3595c" data-id="fb3595c" data-element_type="column">
															<div class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-fd21a17 elementor-widget elementor-widget-gallery" data-id="fd21a17" data-element_type="widget" data-settings="{&quot;columns&quot;:7,&quot;columns_tablet&quot;:4,&quot;columns_mobile&quot;:2,&quot;aspect_ratio&quot;:&quot;1:1&quot;,&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;gallery_layout&quot;:&quot;grid&quot;,&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;content_hover_animation&quot;:&quot;fade-in&quot;}" data-widget_type="gallery.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-gallery__container">
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/1-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/3-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/4GODB-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/5-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/27-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/35-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/51-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/58-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/66-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/82-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/83-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/90-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/92-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/96-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/336-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/682-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/695-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/1202-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/1203-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/1205-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/ALCHE-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/bup-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/gtsflzt-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/jqw-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/longlong-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/PANDA-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/pp4fortune-square2.png" data-width="200" data-height="200" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/ririshc-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/SEAPA-square2.png" data-width="360" data-height="360" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/SONGK-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/SULTA-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																			<div class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/TKOFF-square2.png" data-width="350" data-height="350" alt=""></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</section>
											</div>
										</div>
									</div>
								</section>
							</div>





						</div>







					</div>

				</div>
			</div>





			<footer>
				<div data-elementor-type="wp-page" data-elementor-id="1198" class="elementor elementor-1198">
					<section class="elementor-section elementor-inner-section elementor-element elementor-element-02c5561 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="02c5561" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-710fcd5" data-id="710fcd5" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-ccafdf7 elementor-widget elementor-widget-image" data-id="ccafdf7" data-element_type="widget" data-widget_type="image.default">
										<div class="elementor-widget-container">
											<img decoding="async" width="806" height="806" src="<?= $theme_asset ?>/wp-content/uploads/2022/06/Calendar_corner_red.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/Calendar_corner_red.png 806w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/Calendar_corner_red-300x300.png 300w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/Calendar_corner_red-150x150.png 150w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/Calendar_corner_red-768x768.png 768w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/Calendar_corner_red-24x24.png 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/Calendar_corner_red-36x36.png 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/Calendar_corner_red-48x48.png 48w" sizes="(max-width: 806px) 100vw, 806px" />
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f130389" data-id="f130389" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-5ad0a04 elementor-widget elementor-widget-site-logo" data-id="5ad0a04" data-element_type="widget" data-settings="{&quot;width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:334,&quot;sizes&quot;:[]},&quot;width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;align&quot;:&quot;center&quot;,&quot;space&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;caption_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;caption_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="site-logo.default">
										<div class="elementor-widget-container">
											<div class="hfe-site-logo">
												<a data-elementor-open-lightbox="" class='elementor-clickable' href="<?= $baseurl ?>">
													<div class="hfe-site-logo-set">
														<div class="hfe-site-logo-container">
															<img decoding="async" class="hfe-site-logo-img elementor-animation-" src="<?= $theme_asset ?>/img/logo.png" alt="" />
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-7cac728 elementor-widget elementor-widget-heading" data-id="7cac728" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">สนุก และ คว้าชัยชนะได้ทุกที่ทุกเวลา</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-6c6b4fc elementor-widget elementor-widget-text-editor" data-id="6c6b4fc" data-element_type="widget" data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											<p>ให้บริการความสนุกไม่รู้จบ 24 ชม. ไปกับดีลเลอร์ “DEALER” สาวสวย สุดเซ็กซี่ คอยแจกไพ่ ให้คุณได้ลุ้นทุกเกมส์เดิมพัน สบายตา สบายใจ ด้วย สาวๆ น่ารัก สุดเซ็กซี่ มาใส่บิกินี่ แต่ละสีแต่ละวันสีสด มาแจกไพ่ ท่านจะได้รับประสบการณ์ใหม่ในการเดิมพัน</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="elementor-section elementor-top-section elementor-element elementor-element-97f8a74 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="97f8a74" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4992347" data-id="4992347" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-8b4c08e elementor-widget elementor-widget-image" data-id="8b4c08e" data-element_type="widget" data-widget_type="image.default">
										<div class="elementor-widget-container">
											<img decoding="async" width="752" height="95" src="<?= $theme_asset ?>/wp-content/uploads/2022/06/imgtext-image-home-min.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/imgtext-image-home-min.png 752w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/imgtext-image-home-min-300x38.png 300w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/imgtext-image-home-min-24x3.png 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/imgtext-image-home-min-36x5.png 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/imgtext-image-home-min-48x6.png 48w" sizes="(max-width: 752px) 100vw, 752px" />
										</div>
									</div>
									<div class="elementor-element elementor-element-def9de3 elementor-widget elementor-widget-image" data-id="def9de3" data-element_type="widget" data-widget_type="image.default">
										<div class="elementor-widget-container">
											<img decoding="async" width="768" height="315" src="<?= $theme_asset ?>/wp-content/uploads/2022/06/%e0%b8%aa%e0%b8%a5%e0%b9%87%e0%b8%ad%e0%b8%95-PG-slot-all-666sx-1024x420-1-768x315.png" class="attachment-medium_large size-medium_large" alt="" loading="lazy" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/สล็อต-PG-slot-all-666sx-1024x420-1-768x315.png 768w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/สล็อต-PG-slot-all-666sx-1024x420-1-300x123.png 300w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/สล็อต-PG-slot-all-666sx-1024x420-1-24x10.png 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/สล็อต-PG-slot-all-666sx-1024x420-1-36x15.png 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/สล็อต-PG-slot-all-666sx-1024x420-1-48x20.png 48w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/สล็อต-PG-slot-all-666sx-1024x420-1.png 1024w" sizes="(max-width: 768px) 100vw, 768px" />
										</div>
									</div>
									<div class="elementor-element elementor-element-fb42a19 elementor-widget elementor-widget-heading" data-id="fb42a19" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">เว็บอันดับหนึ่ง <?= strtoupper($webname) ?> ที่รวมสาวสวยมากมายให้ท่านได้ตื่นตาตื่นใจ บาคาร่าออนไลน์ที่ เย้ายวนใจที่สุดในตอนนี้ หรือ ที่รู้จักกันว่า Sexy Baccarat, Sexy Gaming, เอ็มจีเอ็มห้าจี เซ็กซี่ หรือ เซ็กซี่เกมส์ เอ็มจีเอ็มห้าจี</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="elementor-section elementor-top-section elementor-element elementor-element-908289f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="908289f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-01e41b9" data-id="01e41b9" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-82bf8e2 elementor-widget elementor-widget-image-carousel" data-id="82bf8e2" data-element_type="widget" data-settings="{&quot;slides_to_show&quot;:&quot;8&quot;,&quot;slides_to_show_tablet&quot;:&quot;5&quot;,&quot;slides_to_show_mobile&quot;:&quot;4&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;autoplay_speed&quot;:1000,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:25,&quot;sizes&quot;:[]},&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}" data-widget_type="image-carousel.default">
										<div class="elementor-widget-container">
											<div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
												<div class="elementor-image-carousel swiper-wrapper">
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/ag-gaming.2eb0369.png" alt="ag-gaming.2eb0369" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/ambbet.1d53780.png" alt="ambbet.1d53780" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/ameba.dea3fdf.png" alt="ameba.dea3fdf" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/dragoonsoft.a39781a.png" alt="dragoonsoft.a39781a" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/dream-gaming.d993e67.png" alt="dream-gaming.d993e67" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/gamatron.96cdfab.png" alt="gamatron.96cdfab" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/joker-gaming.417d073.png" alt="joker-gaming.417d073" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/live-22.dfd4972.png" alt="live-22.dfd4972" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/pretty-gaming.f27ce57.png" alt="pretty-gaming.f27ce57" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/sa-gaming.52e386a.png" alt="sa-gaming.52e386a" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/sexy-gaming.09728c1.png" alt="sexy-gaming.09728c1" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async" class="swiper-slide-image" src="<?= $theme_asset ?>/wp-content/uploads/2022/03/spade-gaming.d835b4d.png" alt="spade-gaming.d835b4d" /></figure>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="elementor-section elementor-top-section elementor-element elementor-element-7177db0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7177db0" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3d4a575" data-id="3d4a575" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-cca7ed2 elementor-widget elementor-widget-heading" data-id="cca7ed2" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default"><?= strtoupper($webname) ?> เว็บคาสิโนออนไลน์
											</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-7ab7c41 elementor-widget elementor-widget-heading" data-id="7ab7c41" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">ครองอันดับในใจคนไทย 10 ปีซ้อน
											</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-2855b43 elementor-widget elementor-widget-heading" data-id="2855b43" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default"><?= strtoupper($webname) ?> บาคาร่า คาสิโนออนไลน์ ที่ดีที่สุด เพื่อประสบการณ์ที่ดีของผู้เล่นอย่างแท้จริง แบบ <?= strtoupper($webname) ?></h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-c6f62f7 elementor-widget elementor-widget-heading" data-id="c6f62f7" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">Created website by</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-78b4f26 elementor-widget elementor-widget-site-logo" data-id="78b4f26" data-element_type="widget" data-settings="{&quot;width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:256,&quot;sizes&quot;:[]},&quot;width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;align&quot;:&quot;center&quot;,&quot;space&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;caption_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;caption_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="site-logo.default">
										<div class="elementor-widget-container">
											<div class="hfe-site-logo">
												<a data-elementor-open-lightbox="" class='elementor-clickable' href="https://ideabet.bet/theme/harem789">
													<div class="hfe-site-logo-set">
														<div class="hfe-site-logo-container">
															<img decoding="async" class="hfe-site-logo-img elementor-animation-" src="<?= $theme_asset ?>/img/logo.png" alt="" />
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-f84090e elementor-widget elementor-widget-heading" data-id="f84090e" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">Terms and Conditions
											</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-20f83cd elementor-widget elementor-widget-heading" data-id="20f83cd" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">Copyright © 2021 <?= strtoupper($webname) ?> All Rights Reserved.</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-4018346 elementor-widget elementor-widget-image" data-id="4018346" data-element_type="widget" data-widget_type="image.default">
										<div class="elementor-widget-container">
											<img decoding="async" width="1024" height="91" src="<?= $theme_asset ?>/wp-content/uploads/2022/06/mfooter-1024x91.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/mfooter-1024x91.png 1024w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/mfooter-300x27.png 300w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/mfooter-768x68.png 768w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/mfooter-24x2.png 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/mfooter-36x3.png 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/mfooter-48x4.png 48w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/mfooter.png 1495w" sizes="(max-width: 1024px) 100vw, 1024px" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</footer>



		</div>



		<div class="loadercontain">
			<div class="spincontain">
				<div class="boxload"></div>
			</div>
			<a href="<?= $baseurl ?>" class="custom-logo-link" rel="home">
				<img width="1000" height="446" src="<?= $theme_asset ?>/img/logo.png" class="custom-logo" alt="HAREM789" decoding="async" srcset="<?= $theme_asset ?>/img/logo.png 1000w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/logo-300x134.png 300w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/logo-768x343.png 768w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/logo-24x11.png 24w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/logo-36x16.png 36w, https://ideabet.bet/theme/harem789/wp-content/uploads/2022/06/logo-48x21.png 48w" sizes="(max-width: 1000px) 100vw, 1000px" /></a>
			<div id="loadmeta">

			</div>
		</div>

		<!-- Popper.JS -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<!-- Bootstrap JS -->
		<script src="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
		<!-- jQuery Custom Scroller CDN -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- AOSJS -->
		<script src="//unpkg.com/aos@2.3.1/dist/aos.js"></script>

		<!-- Swiper -->

		<script src='//unpkg.com/zdog@1.1.3/dist/zdog.dist.min.js'></script>
		<script src="//unpkg.com/swiper@9.4.1/swiper-bundle.min.js"></script>
		<script>
			AOS.init({
				once: true
			});
		</script>
		<script src="<?= $theme_asset ?>/wp-content/themes/harem789/js/jsa655.js?1687256961"></script>
		<link rel='stylesheet' id='elementor-gallery-css' href='<?= $theme_asset ?>/wp-content/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min7359.css?ver=1.2.0' type='text/css' media='all' />
		<link rel='stylesheet' id='elementor-post-1198-css' href='<?= $theme_asset ?>/wp-content/uploads/elementor/css/post-11983edc.css?ver=1682617244' type='text/css' media='all' />
		<script type='text/javascript' id='kk-star-ratings-js-extra'>
			/* <![CDATA[ */
			var kk_star_ratings = {
				"action": "kk-star-ratings",
				"endpoint": "https:\/\/ideabet.bet\/theme\/harem789\/wp-admin\/admin-ajax.php",
				"nonce": "07cd689387"
			};
			/* ]]> */
		</script>
		<script type='text/javascript' src='<?= $theme_asset ?>/wp-content/plugins/kk-star-ratings/src/core/public/js/kk-star-ratings.min7923.js?ver=5.3.1' id='kk-star-ratings-js'></script>
		<script type='text/javascript' id='eael-general-js-extra'>
			/* <![CDATA[ */
			var localize = {
				"ajaxurl": "https:\/\/ideabet.bet\/theme\/harem789\/wp-admin\/admin-ajax.php",
				"nonce": "00de5da015",
				"i18n": {
					"added": "Added ",
					"compare": "Compare",
					"loading": "Loading..."
				},
				"eael_translate_text": {
					"required_text": "is a required field",
					"invalid_text": "Invalid",
					"billing_text": "Billing",
					"shipping_text": "Shipping",
					"fg_mfp_counter_text": "of"
				},
				"page_permalink": "https:\/\/ideabet.bet\/theme\/harem789\/",
				"cart_redirectition": "",
				"cart_page_url": "",
				"el_breakpoints": {
					"mobile": {
						"label": "Mobile",
						"value": 767,
						"default_value": 767,
						"direction": "max",
						"is_enabled": true
					},
					"mobile_extra": {
						"label": "Mobile Extra",
						"value": 880,
						"default_value": 880,
						"direction": "max",
						"is_enabled": false
					},
					"tablet": {
						"label": "Tablet",
						"value": 1024,
						"default_value": 1024,
						"direction": "max",
						"is_enabled": true
					},
					"tablet_extra": {
						"label": "Tablet Extra",
						"value": 1200,
						"default_value": 1200,
						"direction": "max",
						"is_enabled": false
					},
					"laptop": {
						"label": "Laptop",
						"value": 1366,
						"default_value": 1366,
						"direction": "max",
						"is_enabled": false
					},
					"widescreen": {
						"label": "Widescreen",
						"value": 2400,
						"default_value": 2400,
						"direction": "min",
						"is_enabled": false
					}
				}
			};
			/* ]]> */
		</script>
		<script type='text/javascript' src='<?= $theme_asset ?>/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min9f31.js?ver=5.7.2' id='eael-general-js'></script>
		<script type='text/javascript' src='<?= $theme_asset ?>/wp-content/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min7359.js?ver=1.2.0' id='elementor-gallery-js'></script>
		<script type='text/javascript' src='<?= $theme_asset ?>/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min5aed.js?ver=3.6.4' id='elementor-pro-webpack-runtime-js'></script>
		<script type='text/javascript' src='<?= $theme_asset ?>/wp-content/plugins/elementor/assets/js/webpack.runtime.mina4f3.js?ver=3.6.8' id='elementor-webpack-runtime-js'></script>
		<script type='text/javascript' src='<?= $theme_asset ?>/wp-content/plugins/elementor/assets/js/frontend-modules.mina4f3.js?ver=3.6.8' id='elementor-frontend-modules-js'></script>
		<script type='text/javascript' src='<?= $theme_asset ?>/wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2' id='wp-polyfill-inert-js'></script>
		<script type='text/javascript' src='<?= $theme_asset ?>/wp-includes/js/dist/vendor/regenerator-runtime.min8fa4.js?ver=0.13.11' id='regenerator-runtime-js'></script>
		<script type='text/javascript' src='<?= $theme_asset ?>/wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' id='wp-polyfill-js'></script>
		<script type='text/javascript' src='<?= $theme_asset ?>/wp-includes/js/dist/hooks.min6c65.js?ver=4169d3cf8e8d95a3d6d5' id='wp-hooks-js'></script>
		<script type='text/javascript' src='<?= $theme_asset ?>/wp-includes/js/dist/i18n.mine57b.js?ver=9e794f35a71bb98672ae' id='wp-i18n-js'></script>
		<script type='text/javascript' id='wp-i18n-js-after'>
			wp.i18n.setLocaleData({
				'text direction\u0004ltr': ['ltr']
			});
		</script>
		<script type='text/javascript' id='elementor-pro-frontend-js-before'>
			var ElementorProFrontendConfig = {
				"ajaxurl": "https:\/\/ideabet.bet\/theme\/harem789\/wp-admin\/admin-ajax.php",
				"nonce": "49d5f63d6e",
				"urls": {
					"assets": "https:\/\/ideabet.bet\/theme\/harem789\/wp-content\/plugins\/elementor-pro\/assets\/",
					"rest": "https:\/\/ideabet.bet\/theme\/harem789\/wp-json\/"
				},
				"shareButtonsNetworks": {
					"facebook": {
						"title": "Facebook",
						"has_counter": true
					},
					"twitter": {
						"title": "Twitter"
					},
					"linkedin": {
						"title": "LinkedIn",
						"has_counter": true
					},
					"pinterest": {
						"title": "Pinterest",
						"has_counter": true
					},
					"reddit": {
						"title": "Reddit",
						"has_counter": true
					},
					"vk": {
						"title": "VK",
						"has_counter": true
					},
					"odnoklassniki": {
						"title": "OK",
						"has_counter": true
					},
					"tumblr": {
						"title": "Tumblr"
					},
					"digg": {
						"title": "Digg"
					},
					"skype": {
						"title": "Skype"
					},
					"stumbleupon": {
						"title": "StumbleUpon",
						"has_counter": true
					},
					"mix": {
						"title": "Mix"
					},
					"telegram": {
						"title": "Telegram"
					},
					"pocket": {
						"title": "Pocket",
						"has_counter": true
					},
					"xing": {
						"title": "XING",
						"has_counter": true
					},
					"whatsapp": {
						"title": "WhatsApp"
					},
					"email": {
						"title": "Email"
					},
					"print": {
						"title": "Print"
					}
				},
				"facebook_sdk": {
					"lang": "en_US",
					"app_id": ""
				},
				"lottie": {
					"defaultAnimationUrl": "https:\/\/ideabet.bet\/theme\/harem789\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
				}
			};
		</script>
		<script type='text/javascript' src='<?= $theme_asset ?>/wp-content/plugins/elementor-pro/assets/js/frontend.min5aed.js?ver=3.6.4' id='elementor-pro-frontend-js'></script>
		<script type='text/javascript' src='<?= $theme_asset ?>/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
		<script type='text/javascript' src='<?= $theme_asset ?>/wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2' id='jquery-ui-core-js'></script>
		<script type='text/javascript' id='elementor-frontend-js-extra'>
			/* <![CDATA[ */
			var uael_particles_script = {
				"uael_particles_url": "https:\/\/ideabet.bet\/theme\/harem789\/wp-content\/plugins\/ultimate-elementor\/assets\/min-js\/uael-particles.min.js",
				"particles_url": "https:\/\/ideabet.bet\/theme\/harem789\/wp-content\/plugins\/ultimate-elementor\/assets\/lib\/particles\/particles.min.js",
				"snowflakes_image": "https:\/\/ideabet.bet\/theme\/harem789\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/snowflake.svg",
				"gift": "https:\/\/ideabet.bet\/theme\/harem789\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/gift.png",
				"tree": "https:\/\/ideabet.bet\/theme\/harem789\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/tree.png",
				"skull": "https:\/\/ideabet.bet\/theme\/harem789\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/skull.png",
				"ghost": "https:\/\/ideabet.bet\/theme\/harem789\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/ghost.png",
				"moon": "https:\/\/ideabet.bet\/theme\/harem789\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/moon.png",
				"bat": "https:\/\/ideabet.bet\/theme\/harem789\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/bat.png",
				"pumpkin": "https:\/\/ideabet.bet\/theme\/harem789\/wp-content\/plugins\/ultimate-elementor\/assets\/img\/pumpkin.png"
			};
			/* ]]> */
		</script>
		<script type='text/javascript' id='elementor-frontend-js-before'>
			var elementorFrontendConfig = {
				"environmentMode": {
					"edit": false,
					"wpPreview": false,
					"isScriptDebug": false
				},
				"i18n": {
					"shareOnFacebook": "Share on Facebook",
					"shareOnTwitter": "Share on Twitter",
					"pinIt": "Pin it",
					"download": "Download",
					"downloadImage": "Download image",
					"fullscreen": "Fullscreen",
					"zoom": "Zoom",
					"share": "Share",
					"playVideo": "Play Video",
					"previous": "Previous",
					"next": "Next",
					"close": "Close"
				},
				"is_rtl": false,
				"breakpoints": {
					"xs": 0,
					"sm": 480,
					"md": 768,
					"lg": 1025,
					"xl": 1440,
					"xxl": 1600
				},
				"responsive": {
					"breakpoints": {
						"mobile": {
							"label": "Mobile",
							"value": 767,
							"default_value": 767,
							"direction": "max",
							"is_enabled": true
						},
						"mobile_extra": {
							"label": "Mobile Extra",
							"value": 880,
							"default_value": 880,
							"direction": "max",
							"is_enabled": false
						},
						"tablet": {
							"label": "Tablet",
							"value": 1024,
							"default_value": 1024,
							"direction": "max",
							"is_enabled": true
						},
						"tablet_extra": {
							"label": "Tablet Extra",
							"value": 1200,
							"default_value": 1200,
							"direction": "max",
							"is_enabled": false
						},
						"laptop": {
							"label": "Laptop",
							"value": 1366,
							"default_value": 1366,
							"direction": "max",
							"is_enabled": false
						},
						"widescreen": {
							"label": "Widescreen",
							"value": 2400,
							"default_value": 2400,
							"direction": "min",
							"is_enabled": false
						}
					}
				},
				"version": "3.6.8",
				"is_static": false,
				"experimentalFeatures": {
					"e_dom_optimization": true,
					"e_optimized_assets_loading": true,
					"a11y_improvements": true,
					"e_import_export": true,
					"e_hidden_wordpress_widgets": true,
					"theme_builder_v2": true,
					"landing-pages": true,
					"elements-color-picker": true,
					"favorite-widgets": true,
					"admin-top-bar": true,
					"page-transitions": true,
					"form-submissions": true,
					"e_scroll_snap": true
				},
				"urls": {
					"assets": "https:\/\/ideabet.bet\/theme\/harem789\/wp-content\/plugins\/elementor\/assets\/"
				},
				"settings": {
					"page": [],
					"editorPreferences": []
				},
				"kit": {
					"body_background_background": "classic",
					"active_breakpoints": ["viewport_mobile", "viewport_tablet"],
					"global_image_lightbox": "yes",
					"lightbox_enable_counter": "yes",
					"lightbox_enable_fullscreen": "yes",
					"lightbox_enable_zoom": "yes",
					"lightbox_enable_share": "yes",
					"lightbox_title_src": "title",
					"lightbox_description_src": "description"
				},
				"post": {
					"id": 1198,
					"title": "Footer%20%E2%80%93%20<?= strtoupper($webname) ?>",
					"excerpt": "",
					"featuredImage": false
				}
			};
		</script>
		<script type='text/javascript' src='<?= $theme_asset ?>/wp-content/plugins/elementor/assets/js/frontend.mina4f3.js?ver=3.6.8' id='elementor-frontend-js'></script>
		<script type='text/javascript' id='elementor-frontend-js-after'>
			window.scope_array = [];
			window.backend = 0;
			jQuery.cachedScript = function(url, options) {
				// Allow user to set any option except for dataType, cache, and url.
				options = jQuery.extend(options || {}, {
					dataType: "script",
					cache: true,
					url: url
				});
				// Return the jqXHR object so we can chain callbacks.
				return jQuery.ajax(options);
			};
			jQuery(window).on("elementor/frontend/init", function() {
				elementorFrontend.hooks.addAction("frontend/element_ready/global", function($scope, $) {
					if ("undefined" == typeof $scope) {
						return;
					}
					if ($scope.hasClass("uael-particle-yes")) {
						window.scope_array.push($scope);
						$scope.find(".uael-particle-wrapper").addClass("js-is-enabled");
					} else {
						return;
					}
					if (elementorFrontend.isEditMode() && $scope.find(".uael-particle-wrapper").hasClass("js-is-enabled") && window.backend == 0) {
						var uael_url = uael_particles_script.uael_particles_url;

						jQuery.cachedScript(uael_url);
						window.backend = 1;
					} else if (elementorFrontend.isEditMode()) {
						var uael_url = uael_particles_script.uael_particles_url;
						jQuery.cachedScript(uael_url).done(function() {
							var flag = true;
						});
					}
				});
			});
			jQuery(document).on("ready elementor/popup/show", () => {
				if (jQuery.find(".uael-particle-yes").length < 1) {
					return;
				}
				var uael_url = uael_particles_script.uael_particles_url;
				jQuery.cachedScript = function(url, options) {
					// Allow user to set any option except for dataType, cache, and url.
					options = jQuery.extend(options || {}, {
						dataType: "script",
						cache: true,
						url: url
					});
					// Return the jqXHR object so we can chain callbacks.
					return jQuery.ajax(options);
				};
				jQuery.cachedScript(uael_url);
			});
		</script>
		<script type='text/javascript' src='<?= $theme_asset ?>/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min5aed.js?ver=3.6.4' id='pro-elements-handlers-js'></script>
</body>


<script src="<?= $theme_asset ?>/login/jslogin/jquery.min.js"></script>
<script src="<?= $theme_asset ?>/login/jslogin/popper.js"></script>
<script src="<?= $theme_asset ?>/login/jslogin/bootstrap.min.js"></script>
<script src="<?= $theme_asset ?>/login/jslogin/main.js"></script>
<script src="<?= $theme_asset ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?= $theme_asset ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= $theme_asset ?>/js/popper.min.js"></script>
<script src="<?= $theme_asset ?>/js/bootstrap.min.js"></script>
<script src="<?= $theme_asset ?>/js/bootstrap-select.min.js"></script>
<script src="<?= $theme_asset ?>/js/loadingoverlay.min.js"></script>
<script src="<?= $theme_asset ?>/js/loadingoverlay_progress.min.js"></script>
<script src="<?= $theme_asset ?>/js/odometer.min.js"></script>
<script src="<?= $theme_asset ?>/js/bs-stepper.min.js"></script>

<script src="<?= $theme_asset ?>/js/jquery.marquee.js"></script>
<script src="<?= $theme_asset ?>/js/signalr.min.js"></script>
<script src="<?= $theme_asset ?>/js/pusher.min.js"></script>
<script src="<?= $theme_asset ?>/js/sweetalert2.min.js"></script>
<script src="<?= $theme_asset ?>/js/cleave.js"></script>

<script src="<?= $theme_asset ?>/js/moment.min.js"></script>
<script src="<?= $theme_asset ?>/js/moment-timezone.min.js"></script>
<script src="<?= $theme_asset ?>/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?= $theme_asset ?>/js/tempusdominus-bootstrap-4.js"></script>
<script src="js/ufa.js?id=<?php echo time(); ?>"></script>
<script>
	// $(document).on('submit', function(e) {
	// 	e.preventDefault();
	// 	var username = $("#phone").val();
	// 	var password = $("#password_m").val();
	// 	login(username, password);
	// })

	function login_new() {
		var username = $("#phone").val();
		var password = $("#password_m").val();
		login(username, password);
	}

	function login_neww() {
		var username = $("#phone_m").val();
		var password = $("#password_mm").val();
		login(username, password);
	}
</script>