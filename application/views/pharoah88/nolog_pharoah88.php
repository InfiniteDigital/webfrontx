<div class="overlay"></div>

	<div class="wrapper">

		<button class="wrapper-menu  sidebarCollapse" aria-label="Main Menu">
			<svg width="40" height="40" viewBox="0 0 100 100">
				<path class="line line1"
					d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
				<path class="line line2" d="M 20,50 H 80" />
				<path class="line line3"
					d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
			</svg>
		</button>



		<div class="navbarmain">
			<div class="logo">
				<a href="/" class="custom-logo-link" rel="home" aria-current="page"><img src="<?=$theme_asset?>/wp-content/uploads/2022/05/cropped-ufabet-logo-1.png" class="custom-logo"
						alt="GoldenUFA" decoding="async" fetchpriority="high" style="width: auto;height: 130px;" /></a>
			</div>
			<div class="menuicon ">
				<div class="menu-menu-right-container">
					<ul id="menu-menu-right" class="menu">
						<li id="menu-item-2042"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-216 current_page_item menu-item-2042">
							<a href="/" aria-current="page"
								class="menu-image-title-after menu-image-not-hovered"><img width="300" height="300"
									src="<?=$theme_asset?>/wp-content/uploads/2022/05/5235.png" class="menu-image menu-image-title-after"
									alt="" decoding="async" /><span
									class="menu-image-title-after menu-image-title">หน้าหลัก</span></a>
						</li>
						<li id="menu-item-1471"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1471"><a
								href="#" class="menu-image-title-after menu-image-not-hovered"><img
									width="100" height="100" src="<?=$theme_asset?>/wp-content/uploads/2022/05/tab_promotion.png"
									class="menu-image menu-image-title-after" alt="" decoding="async" /><span
									class="menu-image-title-after menu-image-title">โปรโมชั่น</span></a></li>
						<li id="menu-item-1535"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1535"><a
								href="#"
								class="menu-image-title-after menu-image-not-hovered"><img width="471" height="471"
									src="<?=$theme_asset?>/wp-content/uploads/2022/03/menu-hot-ic.png"
									class="menu-image menu-image-title-after" alt="" decoding="async" /><span
									class="menu-image-title-after menu-image-title">บทความ</span></a></li>
						<li id="menu-item-1472"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1472"><a
								href="<?=$line?>" class="menu-image-title-after menu-image-not-hovered"><img
									width="512" height="512" src="<?=$theme_asset?>/wp-content/uploads/2021/07/line.png"
									class="menu-image menu-image-title-after" alt="" decoding="async" /><span
									class="menu-image-title-after menu-image-title">Line</span></a></li>
						<li id="menu-item-1891"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1891"><a
								href="#"
								class="menu-image-title-after menu-image-not-hovered"><img width="1024" height="1024"
									src="<?=$theme_asset?>/wp-content/uploads/2022/04/1024px-Facebook_Logo_2019.png"
									class="menu-image menu-image-title-after" alt="" decoding="async" /><span
									class="menu-image-title-after menu-image-title">Facebook</span></a></li>
						<li id="menu-item-2036"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2036"><a
								href="#" class="menu-image-title-after menu-image-not-hovered"><img
									width="100" height="100" src="<?=$theme_asset?>/wp-content/uploads/2022/05/download-1.png"
									class="menu-image menu-image-title-after" alt="" decoding="async" /><span
									class="menu-image-title-after menu-image-title">รีวิว</span></a></li>
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
				<span><?=$webname?> คาสิโนออนไลน์ สล็อตออนไลน์ ที่ให้คุณสนุกได้ทุกรูปแบบ<span>
						<div class="textwidget"></div>
			</div>

			<?php if (!empty($banner)): ?>
			<div class="swiper-container-2">
				<div class="swiper-wrapper">
				<?php foreach ($banner as $k => $v): ?>
					<div class="swiper-slide">
                                    <?php if ($v->checkhome == 1): ?>
                                        <img width="1024" height="370" src="<?=$v->img_name?>"
							class="image wp-image-2051  attachment-full size-full" alt="" decoding="async"
							style="max-width: 100%; height: auto;"/>
                                    <?php endif;?>
					</div>
                <?php endforeach;?>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
				<div class="swiper-button-prev swiper-button-white"></div>
				<div class="swiper-button-next swiper-button-white"></div>
			</div>
			<?php endif;?>
		</div>




		<div class="x-button-actions" id="account-actions-mobile">
			<div class="-outer-wrapper">
				<div class="-left-wrapper">


					<span class="-item-wrapper"><span class="-ic-img"><span class="-textfooter d-block"><a
									href="#loginmodal">เข้าสู่ระบบ</a></span><a
								href="#loginmodal"><img width="150" height="150"
									src="<?=$theme_asset?>/wp-content/uploads/2022/03/ic-menu-login-animate-1.png"
									class="image wp-image-1492  attachment-full size-full" alt="" decoding="async"
									style="max-width: 100%; height: auto;"
									srcset="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-menu-login-animate-1.png 150w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-menu-login-animate-1-24x24.png 24w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-menu-login-animate-1-36x36.png 36w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-menu-login-animate-1-48x48.png 48w"
									sizes="(max-width: 150px) 100vw, 150px" /></a></span></span><span
						class="-item-wrapper"><span class="-ic-img"><span class="-textfooter d-block"><a
									href="register">สมัคร</a></span><a
								href="register"><img width="50" height="50"
									src="<?=$theme_asset?>/wp-content/uploads/2022/03/ic-menu-register.png"
									class="image wp-image-1493  attachment-full size-full" alt="" decoding="async"
									style="max-width: 100%; height: auto;"
									srcset="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-menu-register.png 50w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-menu-register-24x24.png 24w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-menu-register-36x36.png 36w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-menu-register-48x48.png 48w"
									sizes="(max-width: 50px) 100vw, 50px" /></a></span></span>
				</div>
				<span class="-center-wrapper js-footer-lobby-selector js-menu-mobile-container">

					<div class="-selected">
						<h2 class="widgettitle"><a href="#">ยอดนิยม</a></h2>
						<a href="#"><img width="121" height="121"
								src="<?=$theme_asset?>/wp-content/uploads/2022/05/menu.png"
								class="image wp-image-2027  attachment-full size-full" alt="" decoding="async"
								style="max-width: 100%; height: auto;"
								srcset="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/menu.png 121w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/menu-24x24.png 24w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/menu-36x36.png 36w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/menu-48x48.png 48w"
								sizes="(max-width: 121px) 100vw, 121px" /></a>
					</div>
				</span>
				<div class="-fake-center-bg-wrapper">
					<svg viewBox="-10 -1 30 12">
						<defs>
							<linearGradient id="rectangleGradient" x1="0%" y1="0%" x2="0%" y2="100%">
								<stop offset="0%" stop-color="#252525"></stop>
								<stop offset="100%" stop-color="#0b0b0b"></stop>
							</linearGradient>
						</defs>
						<path d="M-10 -1 H30 V12 H-10z M 5 5 m -5, 0 a 5,5 0 1,0 10,0 a 5,5 0 1,0 -10,0z"></path>
					</svg>
				</div>
				<div class="-right-wrapper">

					<span class="-item-wrapper"><span class="-ic-img"><span class="-textfooter d-block"><a
									href="#">โปรโมชั่น</a></span><a
								href="#"><img width="258" height="257"
									src="<?=$theme_asset?>/wp-content/uploads/2022/03/tab_promotion-1.png"
									class="image wp-image-1495  attachment-full size-full" alt="" decoding="async"
									style="max-width: 100%; height: auto;"
									srcset="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/tab_promotion-1.png 258w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/tab_promotion-1-150x150.png 150w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/tab_promotion-1-24x24.png 24w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/tab_promotion-1-36x36.png 36w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/tab_promotion-1-48x48.png 48w"
									sizes="(max-width: 258px) 100vw, 258px" /></a></span></span><span
						class="-item-wrapper"><span class="-ic-img"><span class="-textfooter d-block"><a
									href="<?=$line?>">ติดต่อเรา</a></span><a
								href="<?=$line?>"><img width="123" height="122"
									src="<?=$theme_asset?>/wp-content/uploads/2022/03/support.png"
									class="image wp-image-1494  attachment-full size-full" alt="" decoding="async"
									style="max-width: 100%; height: auto;"
									srcset="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/support.png 123w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/support-24x24.png 24w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/support-36x36.png 36w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/support-48x48.png 48w"
									sizes="(max-width: 123px) 100vw, 123px" /></a></span></span>

				</div>
				<div class="-fully-overlay js-footer-lobby-overlay"></div>
			</div>
		</div>


		<div class="facebook-mobile">
		<a href="<?=$line?>"><img width="150" height="231" src="<?=$theme_asset?>/wp-content/uploads/2022/05/contact-us.png"
				class="image wp-image-2031  attachment-full size-full" alt="" decoding="async"
				style="max-width: 100%; height: auto;"
				srcset="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/contact-us.png 150w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/contact-us-16x24.png 16w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/contact-us-23x36.png 23w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/contact-us-31x48.png 31w"
				sizes="(max-width: 150px) 100vw, 150px" /></a></div>
		<div class="containmain">

			<div class="fixedcontain">
				<div class="fixedleft ">
					<div class="sidegamebar ">
						<div class="tabgamemenu">
							<div class="menu-menu-left-container">
								<ul id="menu-menu-left" class="menu">
									<li id="menu-item-1111"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1111">
										<a href="#"
											class="menu-image-title-after menu-image-not-hovered"><img width="100"
												height="100"
												src="<?=$theme_asset?>/wp-content/uploads/2022/03/EZ-Casino-%e0%b9%81%e0%b8%97%e0%b8%87%e0%b8%9f%e0%b8%b8%e0%b8%95%e0%b8%9a%e0%b8%ad%e0%b8%a5%e0%b8%9e%e0%b8%99%e0%b8%b1%e0%b8%99%e0%b8%ad%e0%b8%ad%e0%b8%99%e0%b9%84%e0%b8%a5%e0%b8%99%e0%b9%8c-%e0%b8%9a%e0%b8%b2%e0%b8%aa%e0%b9%80%e0%b8%81%e0%b9%87%e0%b8%95%e0%b8%9a%e0%b8%ad%e0%b8%a5-E-Sport.png"
												class="menu-image menu-image-title-after" alt=""
												decoding="async" /><span
												class="menu-image-title-after menu-image-title">กีฬา</span></a>
									</li>
									<li id="menu-item-1108"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1108">
										<a href="#"
											class="menu-image-title-after menu-image-not-hovered"><img width="100"
												height="100"
												src="<?=$theme_asset?>/wp-content/uploads/2022/03/EZ-Casino-%e0%b8%84%e0%b8%b2%e0%b8%aa%e0%b8%b4%e0%b9%82%e0%b8%99%e0%b8%ad%e0%b8%ad%e0%b8%99%e0%b9%84%e0%b8%a5%e0%b8%99%e0%b9%8c-%e0%b8%9a%e0%b8%b2%e0%b8%84%e0%b8%b2%e0%b8%a3%e0%b9%88%e0%b8%b2%e0%b8%aa%e0%b8%94-%e0%b8%a3%e0%b8%b9%e0%b9%80%e0%b8%a5%e0%b9%87%e0%b8%95-%e0%b8%8b%e0%b8%b4%e0%b8%84%e0%b9%82%e0%b8%9a-%e0%b9%84%e0%b8%ae%e0%b9%82%e0%b8%a5-%e0%b9%80%e0%b8%aa%e0%b8%b7%e0%b8%ad-%e0%b8%a1%e0%b8%b1%e0%b8%87%e0%b8%81%e0%b8%a3.png"
												class="menu-image menu-image-title-after" alt=""
												decoding="async" /><span
												class="menu-image-title-after menu-image-title">คาสิโนสด</span></a>
									</li>
									<li id="menu-item-1102"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1102">
										<a href="#"
											class="menu-image-title-after menu-image-not-hovered"><img width="100"
												height="100"
												src="<?=$theme_asset?>/wp-content/uploads/2022/03/EZ-Casino-%e0%b8%9a%e0%b8%a3%e0%b8%b4%e0%b8%81%e0%b8%b2%e0%b8%a3%e0%b8%aa%e0%b8%a5%e0%b9%87%e0%b8%ad%e0%b8%95%e0%b8%ad%e0%b8%ad%e0%b8%99%e0%b9%84%e0%b8%a5%e0%b8%99%e0%b9%8c-%e0%b8%9d%e0%b8%b2%e0%b8%81-100-%e0%b8%a3%e0%b8%b1%e0%b8%9a%e0%b9%80%e0%b8%84%e0%b8%a3%e0%b8%94%e0%b8%b4%e0%b8%95%e0%b8%9f%e0%b8%a3%e0%b8%b5-100.png"
												class="menu-image menu-image-title-after" alt=""
												decoding="async" /><span
												class="menu-image-title-after menu-image-title">สล็อตเกม</span></a>
									</li>
									<li id="menu-item-402"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-216 current_page_item menu-item-402">
										<a href="/" aria-current="page"
											class="menu-image-title-after menu-image-not-hovered"><img width="100"
												height="100" src="<?=$theme_asset?>/wp-content/uploads/2022/03/ic-nav-menu-hot-game.png"
												class="menu-image menu-image-title-after" alt=""
												decoding="async" /><span
												class="menu-image-title-after menu-image-title">ยอดนิยม</span></a>
									</li>
									<li id="menu-item-1698"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1698">
										<a href="#"
											class="menu-image-title-after menu-image-not-hovered"><img width="300"
												height="275" src="<?=$theme_asset?>/wp-content/uploads/2022/04/04-1.png"
												class="menu-image menu-image-title-after" alt=""
												decoding="async" /><span
												class="menu-image-title-after menu-image-title">หวย</span></a>
									</li>
									<li id="menu-item-1702"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1702">
										<a href="#"
											class="menu-image-title-after menu-image-not-hovered"><img width="300"
												height="275" src="<?=$theme_asset?>/wp-content/uploads/2022/04/03-1.png"
												class="menu-image menu-image-title-after" alt=""
												decoding="async" /><span
												class="menu-image-title-after menu-image-title">คีโน</span></a>
									</li>
									<li id="menu-item-1696"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1696">
										<a href="#"
											class="menu-image-title-after menu-image-not-hovered"><img width="300"
												height="275" src="<?=$theme_asset?>/wp-content/uploads/2022/04/02-1.png"
												class="menu-image menu-image-title-after" alt=""
												decoding="async" /><span
												class="menu-image-title-after menu-image-title">เกมกราฟ</span></a>
									</li>
									<li id="menu-item-1719"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1719">
										<a href="#"
											class="menu-image-title-after menu-image-not-hovered"><img width="300"
												height="275" src="<?=$theme_asset?>/wp-content/uploads/2022/04/01-1.png"
												class="menu-image menu-image-title-after" alt=""
												decoding="async" /><span
												class="menu-image-title-after menu-image-title">เกมไพ่</span></a>
									</li>
									<li id="menu-item-1849"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1849">
										<a href="#"
											class="menu-image-title-after menu-image-not-hovered"><img width="63"
												height="63" src="<?=$theme_asset?>/wp-content/uploads/2022/04/ic-nav-menu-e-sport.png"
												class="menu-image menu-image-title-after" alt=""
												decoding="async" /><span
												class="menu-image-title-after menu-image-title">ทดลองเล่น</span></a>
									</li>
								</ul>
							</div>

						</div>
						<div class="linechatfixed"><a href="<?=$line?>"><img width="202" height="64"
									src="<?=$theme_asset?>/wp-content/uploads/2022/03/linetext.png"
									class="image wp-image-1135  attachment-full size-full" alt="" decoding="async"
									style="max-width: 100%; height: auto;"
									srcset="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/linetext.png 202w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/linetext-24x8.png 24w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/linetext-36x11.png 36w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/linetext-48x15.png 48w"
									sizes="(max-width: 202px) 100vw, 202px" /></a></div>
					</div>
				</div>
				<div class="fixedright">

					<div class="sectiongame">








						<div class="containmain">




							<div data-elementor-type="wp-page" data-elementor-id="216" class="elementor elementor-216">
								<section
									class="elementor-section elementor-top-section elementor-element elementor-element-342f784 linesection01 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
									data-id="342f784" data-element_type="section"
									data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
									<div class="elementor-container elementor-column-gap-default">
										<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-966f2fd"
											data-id="966f2fd" data-element_type="column">
											<div class="elementor-widget-wrap elementor-element-populated">
												<div class="elementor-element elementor-element-033915c elementor-widget elementor-widget-heading"
													data-id="033915c" data-element_type="widget"
													data-widget_type="heading.default">
													<div class="elementor-widget-container">
														<h2 class="elementor-heading-title elementor-size-default">แนะนำ
															เกมคาสิโนสด คาสิโนออนไลน์เว็บตรง <?=$webname?></h2>
													</div>
												</div>
												<section
													class="elementor-section elementor-inner-section elementor-element elementor-element-cebbd37 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
													data-id="cebbd37" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-fd8ee51"
															data-id="fd8ee51" data-element_type="column">
															<div
																class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-6192246 elementor-widget elementor-widget-image"
																	data-id="6192246" data-element_type="widget"
																	data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" loading="lazy" width="330"
																			height="330"
																			src="<?=$theme_asset?>/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1.png"
																			class="attachment-large size-large" alt=""
																			srcset="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1.png 330w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-300x300.png 300w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-150x150.png 150w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-24x24.png 24w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-36x36.png 36w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-48x48.png 48w"
																			sizes="(max-width: 330px) 100vw, 330px" />
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6baf78e"
															data-id="6baf78e" data-element_type="column">
															<div
																class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-3f5d773 elementor-widget elementor-widget-heading"
																	data-id="3f5d773" data-element_type="widget"
																	data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2
																			class="elementor-heading-title elementor-size-default">
																			คาสิโนออนไลน์ ยอดนิยม</h2>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</section>
												<section
													class="elementor-section elementor-inner-section elementor-element elementor-element-4f4d334 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
													data-id="4f4d334" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-289d74f"
															data-id="289d74f" data-element_type="column">
															<div
																class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-a55b98c elementor-widget elementor-widget-image"
																	data-id="a55b98c" data-element_type="widget"
																	data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" loading="lazy" width="380"
																			height="241"
																			src="<?=$theme_asset?>/wp-content/uploads/2022/03/ezc-pretty-gaming-animation2.png"
																			class="attachment-large size-large" alt=""
																			srcset="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ezc-pretty-gaming-animation2.png 380w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ezc-pretty-gaming-animation2-300x190.png 300w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ezc-pretty-gaming-animation2-24x15.png 24w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ezc-pretty-gaming-animation2-36x23.png 36w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ezc-pretty-gaming-animation2-48x30.png 48w"
																			sizes="(max-width: 380px) 100vw, 380px" />
																	</div>
																</div>
																<div class="elementor-element elementor-element-a1dd11a elementor-widget elementor-widget-heading"
																	data-id="a1dd11a" data-element_type="widget"
																	data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2
																			class="elementor-heading-title elementor-size-default">
																			Pretty Gaming</h2>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-73c4031"
															data-id="73c4031" data-element_type="column">
															<div
																class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-0ad4a01 elementor-widget elementor-widget-image"
																	data-id="0ad4a01" data-element_type="widget"
																	data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" loading="lazy" width="254"
																			height="161"
																			src="<?=$theme_asset?>/wp-content/uploads/2022/04/dream.webp"
																			class="attachment-large size-large"
																			alt="" />
																	</div>
																</div>
																<div class="elementor-element elementor-element-3fc9a28 elementor-widget elementor-widget-heading"
																	data-id="3fc9a28" data-element_type="widget"
																	data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2
																			class="elementor-heading-title elementor-size-default">
																			Dream Gaming</h2>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-99cdb1a"
															data-id="99cdb1a" data-element_type="column">
															<div
																class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-f864dc2 elementor-widget elementor-widget-image"
																	data-id="f864dc2" data-element_type="widget"
																	data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" loading="lazy" width="254"
																			height="161"
																			src="<?=$theme_asset?>/wp-content/uploads/2022/04/ppcasino.webp"
																			class="attachment-large size-large"
																			alt="" />
																	</div>
																</div>
																<div class="elementor-element elementor-element-667c720 elementor-widget elementor-widget-heading"
																	data-id="667c720" data-element_type="widget"
																	data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2
																			class="elementor-heading-title elementor-size-default">
																			PRAGMATIC PLAY</h2>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4cf942f"
															data-id="4cf942f" data-element_type="column">
															<div
																class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-e0bf55f elementor-widget elementor-widget-image"
																	data-id="e0bf55f" data-element_type="widget"
																	data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" loading="lazy" width="254"
																			height="161"
																			src="<?=$theme_asset?>/wp-content/uploads/2022/04/agasia.webp"
																			class="attachment-large size-large"
																			alt="" />
																	</div>
																</div>
																<div class="elementor-element elementor-element-f7a71cb elementor-widget elementor-widget-heading"
																	data-id="f7a71cb" data-element_type="widget"
																	data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2
																			class="elementor-heading-title elementor-size-default">
																			ASIA Gaming</h2>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</section>
												<section
													class="elementor-section elementor-inner-section elementor-element elementor-element-6bc8415 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
													data-id="6bc8415" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-637552d"
															data-id="637552d" data-element_type="column">
															<div
																class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-f18b71f elementor-widget elementor-widget-image"
																	data-id="f18b71f" data-element_type="widget"
																	data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" loading="lazy" width="254"
																			height="161"
																			src="<?=$theme_asset?>/wp-content/uploads/2022/04/allbet.webp"
																			class="attachment-large size-large"
																			alt="" />
																	</div>
																</div>
																<div class="elementor-element elementor-element-17698f0 elementor-widget elementor-widget-heading"
																	data-id="17698f0" data-element_type="widget"
																	data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2
																			class="elementor-heading-title elementor-size-default">
																			ALLBET</h2>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-c3631c4"
															data-id="c3631c4" data-element_type="column">
															<div
																class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-4a03f33 elementor-widget elementor-widget-image"
																	data-id="4a03f33" data-element_type="widget"
																	data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" loading="lazy" width="254"
																			height="161"
																			src="<?=$theme_asset?>/wp-content/uploads/2022/04/atom.webp"
																			class="attachment-large size-large"
																			alt="" />
																	</div>
																</div>
																<div class="elementor-element elementor-element-2f64bb4 elementor-widget elementor-widget-heading"
																	data-id="2f64bb4" data-element_type="widget"
																	data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2
																			class="elementor-heading-title elementor-size-default">
																			ATOM GAMING</h2>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-d27c456"
															data-id="d27c456" data-element_type="column">
															<div
																class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-256901b elementor-widget elementor-widget-image"
																	data-id="256901b" data-element_type="widget"
																	data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" loading="lazy" width="254"
																			height="161"
																			src="<?=$theme_asset?>/wp-content/uploads/2022/04/sa.webp"
																			class="attachment-large size-large"
																			alt="" />
																	</div>
																</div>
																<div class="elementor-element elementor-element-a6a436a elementor-widget elementor-widget-heading"
																	data-id="a6a436a" data-element_type="widget"
																	data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2
																			class="elementor-heading-title elementor-size-default">
																			SA Gaming</h2>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7fe4cff"
															data-id="7fe4cff" data-element_type="column">
															<div
																class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-298985e elementor-widget elementor-widget-image"
																	data-id="298985e" data-element_type="widget"
																	data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" loading="lazy" width="254"
																			height="161"
																			src="<?=$theme_asset?>/wp-content/uploads/2022/04/sexy.webp"
																			class="attachment-large size-large"
																			alt="" />
																	</div>
																</div>
																<div class="elementor-element elementor-element-a861f1f elementor-widget elementor-widget-heading"
																	data-id="a861f1f" data-element_type="widget"
																	data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2
																			class="elementor-heading-title elementor-size-default">
																			Sexy Gaming</h2>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</section>
												<section
													class="elementor-section elementor-inner-section elementor-element elementor-element-634df19 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
													data-id="634df19" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2df3fab"
															data-id="2df3fab" data-element_type="column">
															<div
																class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-e0a9e35 elementor-widget elementor-widget-image"
																	data-id="e0a9e35" data-element_type="widget"
																	data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" loading="lazy" width="254"
																			height="161"
																			src="<?=$theme_asset?>/wp-content/uploads/2022/04/BetGame.webp"
																			class="attachment-large size-large"
																			alt="" />
																	</div>
																</div>
																<div class="elementor-element elementor-element-013bef9 elementor-widget elementor-widget-heading"
																	data-id="013bef9" data-element_type="widget"
																	data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2
																			class="elementor-heading-title elementor-size-default">
																			bet games.tv</h2>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4e159d5"
															data-id="4e159d5" data-element_type="column">
															<div
																class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-8ace478 elementor-widget elementor-widget-image"
																	data-id="8ace478" data-element_type="widget"
																	data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" loading="lazy" width="254"
																			height="161"
																			src="<?=$theme_asset?>/wp-content/uploads/2022/04/GreenDragon.webp"
																			class="attachment-large size-large"
																			alt="" />
																	</div>
																</div>
																<div class="elementor-element elementor-element-48a8a51 elementor-widget elementor-widget-heading"
																	data-id="48a8a51" data-element_type="widget"
																	data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2
																			class="elementor-heading-title elementor-size-default">
																			D88 Green Dragon</h2>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-a68174c"
															data-id="a68174c" data-element_type="column">
															<div
																class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-23a5d99 elementor-widget elementor-widget-image"
																	data-id="23a5d99" data-element_type="widget"
																	data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" loading="lazy" width="254"
																			height="161"
																			src="<?=$theme_asset?>/wp-content/uploads/2022/04/ebet.webp"
																			class="attachment-large size-large"
																			alt="" />
																	</div>
																</div>
																<div class="elementor-element elementor-element-f7e1eee elementor-widget elementor-widget-heading"
																	data-id="f7e1eee" data-element_type="widget"
																	data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2
																			class="elementor-heading-title elementor-size-default">
																			EBET</h2>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-8f78c6b"
															data-id="8f78c6b" data-element_type="column">
															<div
																class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-e431193 elementor-widget elementor-widget-image"
																	data-id="e431193" data-element_type="widget"
																	data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" loading="lazy" width="254"
																			height="161"
																			src="<?=$theme_asset?>/wp-content/uploads/2022/04/biggaming.webp"
																			class="attachment-large size-large"
																			alt="" />
																	</div>
																</div>
																<div class="elementor-element elementor-element-c2dd9b5 elementor-widget elementor-widget-heading"
																	data-id="c2dd9b5" data-element_type="widget"
																	data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2
																			class="elementor-heading-title elementor-size-default">
																			BG GAMING</h2>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</section>
												<section
													class="elementor-section elementor-inner-section elementor-element elementor-element-2bb8496 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
													data-id="2bb8496" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ae0f9a0"
															data-id="ae0f9a0" data-element_type="column">
															<div
																class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-444bfb8 elementor-widget elementor-widget-image"
																	data-id="444bfb8" data-element_type="widget"
																	data-widget_type="image.default">
																	<div class="elementor-widget-container">
																		<img decoding="async" loading="lazy" width="330"
																			height="330"
																			src="<?=$theme_asset?>/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1.png"
																			class="attachment-large size-large" alt=""
																			srcset="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1.png 330w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-300x300.png 300w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-150x150.png 150w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-24x24.png 24w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-36x36.png 36w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/ic-nav-menu-popular-casino-1-48x48.png 48w"
																			sizes="(max-width: 330px) 100vw, 330px" />
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f3c6383"
															data-id="f3c6383" data-element_type="column">
															<div
																class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-00b88b6 elementor-widget elementor-widget-heading"
																	data-id="00b88b6" data-element_type="widget"
																	data-widget_type="heading.default">
																	<div class="elementor-widget-container">
																		<h2
																			class="elementor-heading-title elementor-size-default">
																			สล็อตยอดนิยม</h2>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</section>
												<section
													class="elementor-section elementor-inner-section elementor-element elementor-element-5b725a9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
													data-id="5b725a9" data-element_type="section">
													<div class="elementor-container elementor-column-gap-default">
														<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-fb3595c"
															data-id="fb3595c" data-element_type="column">
															<div
																class="elementor-widget-wrap elementor-element-populated">
																<div class="elementor-element elementor-element-fd21a17 elementor-widget elementor-widget-gallery"
																	data-id="fd21a17" data-element_type="widget"
																	data-settings="{&quot;columns&quot;:6,&quot;columns_tablet&quot;:4,&quot;columns_mobile&quot;:3,&quot;aspect_ratio&quot;:&quot;1:1&quot;,&quot;gallery_layout&quot;:&quot;grid&quot;,&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;content_hover_animation&quot;:&quot;fade-in&quot;}"
																	data-widget_type="gallery.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-gallery__container">
																			<div
																				class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image"
																					data-thumbnail="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/slot_202108091110151515.png"
																					data-width="156" data-height="156"
																					alt=""></div>
																			</div>
																			<div
																				class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image"
																					data-thumbnail="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/slot_202109131254363636-768x768.png"
																					data-width="768" data-height="768"
																					alt=""></div>
																			</div>
																			<div
																				class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image"
																					data-thumbnail="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/slot_202108241045515151.png"
																					data-width="156" data-height="156"
																					alt=""></div>
																			</div>
																			<div
																				class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image"
																					data-thumbnail="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/slot_202105241037545454.png"
																					data-width="156" data-height="156"
																					alt=""></div>
																			</div>
																			<div
																				class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image"
																					data-thumbnail="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/slot_202105101125131313.png"
																					data-width="156" data-height="156"
																					alt=""></div>
																			</div>
																			<div
																				class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image"
																					data-thumbnail="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/slot_202102081241505050.png"
																					data-width="156" data-height="156"
																					alt=""></div>
																			</div>
																			<div
																				class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image"
																					data-thumbnail="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/slot_202012041604484848.png"
																					data-width="156" data-height="156"
																					alt=""></div>
																			</div>
																			<div
																				class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image"
																					data-thumbnail="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/slot_202011021401545454.png"
																					data-width="156" data-height="156"
																					alt=""></div>
																			</div>
																			<div
																				class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image"
																					data-thumbnail="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/slot_202010261925151515.png"
																					data-width="156" data-height="156"
																					alt=""></div>
																			</div>
																			<div
																				class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image"
																					data-thumbnail="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/slot_202010071917434343.png"
																					data-width="156" data-height="156"
																					alt=""></div>
																			</div>
																			<div
																				class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image"
																					data-thumbnail="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/slot_202009291154242424.png"
																					data-width="156" data-height="156"
																					alt=""></div>
																			</div>
																			<div
																				class="e-gallery-item elementor-gallery-item elementor-animated-content">
																				<div class="e-gallery-image elementor-gallery-item__image"
																					data-thumbnail="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/03/slot_20210726134509099.png"
																					data-width="156" data-height="156"
																					alt=""></div>
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
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-1d3ac25 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="1d3ac25" data-element_type="section"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-57d1091"
								data-id="57d1091" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-578e986 elementor-widget elementor-widget-site-logo"
										data-id="578e986" data-element_type="widget"
										data-settings="{&quot;width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:391,&quot;sizes&quot;:[]},&quot;width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;align&quot;:&quot;center&quot;,&quot;space&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;caption_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;caption_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
										data-widget_type="site-logo.default">
										<div class="elementor-widget-container">
											<div class="hfe-site-logo">
												<a data-elementor-open-lightbox="" class='elementor-clickable'
													href="#">
													<div class="hfe-site-logo-set">
														<div class="hfe-site-logo-container">
															<img decoding="async"
																class="hfe-site-logo-img elementor-animation-"
																src="<?=$theme_asset?>/wp-content/uploads/2022/05/cropped-ufabet-logo-1-2.png"
																alt="" />
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-e7d289c elementor-widget elementor-widget-heading"
										data-id="e7d289c" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default"><?=$webname?>
												เว็บที่ให้บริการคาสิโนออนไลน์เต็มรูปแบบ ทั้งสล็อตออนไลน์ คาสิโนสด
												บาคาร่าสด เกมแทงปลา เกมกีฬา ฯลฯ</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-7daf6c7 elementor-widget elementor-widget-text-editor"
										data-id="7daf6c7" data-element_type="widget"
										data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											<p>โดยผู้เล่นสามารถสนุกกับเกมของเราได้ด้วยเงินเดิมพันขั้นต่ำเพียง 10
												บาทเท่านั้น และสามารถทำการฝาก-ถอนได้ตลอด 24 ชั่วโมง ด้วยระบบออโต้
												ทั้งสะดวก
												รวดเร็วทันใจเป็นอย่างมากเหมาะสำหรับผู้ที่ชื่นชอบการเดิมพันในรูปแบบของเกมการพนันออนไลน์อันดับ
												1 ในปี 2021</p>
										</div>
									</div>
									<div class="elementor-element elementor-element-7064211 elementor-widget elementor-widget-heading"
										data-id="7064211" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default"><?=$webname?>
												บริการประทับใจ ก็ไม่เป็นสองรองใคร ใส่ใจทุกคำตอบ ตลอด 24 ชั่วโมง 7
												วันต่อสัปดาห์ไม่มีหยุด</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-2c2a369 elementor-widget elementor-widget-text-editor"
										data-id="2c2a369" data-element_type="widget"
										data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											<p>เพราะผู้เล่นทุกท่าน คือ คนสำคัญของเรา
												และเรายังมีทีมลูกค้าสัมพันธ์ที่คอยให้ความช่วยเหลือ ตอบทุกคำถาม
												ให้บริการทุกเรื่องที่คุณสงสัยตลอด 24 ชั่วโมง
												เพื่อให้คนสำคัญของเราไม่ต้องกังวลกับปัญหาที่พบตั้งแต่ต้นจนจบ นอกจากนี้
												เรายังมีเว็บคาสิโน
												และสล็อตพันธมิตรชั้นนำที่พร้อมมาเสิร์ฟความหลากหลายของเกม และความสนุกสนาน
												ให้คุณได้เพลิดเพลิน เช่น SA Gaming, <?=$webname?> Gaming, WM Casino, Dream
												Gaming, Pretty Gaming, ALLBET, Joker, PG Slot และอื่นๆ
												อีกมากมายจนผู้เล่นจะติดใจอย่างแน่นอน</p>
										</div>
									</div>
									<section
										class="elementor-section elementor-inner-section elementor-element elementor-element-42c4e83 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="42c4e83" data-element_type="section">
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-8b59d05"
												data-id="8b59d05" data-element_type="column"
												data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-11208f4 elementor-widget elementor-widget-image"
														data-id="11208f4" data-element_type="widget"
														data-widget_type="image.default">
														<div class="elementor-widget-container">
															<img decoding="async" loading="lazy" width="500"
																height="500" src="<?=$theme_asset?>/wp-content/uploads/2022/05/04.png"
																class="attachment-large size-large" alt=""
																srcset="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/04.png 500w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/04-300x300.png 300w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/04-150x150.png 150w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/04-24x24.png 24w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/04-36x36.png 36w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/04-48x48.png 48w"
																sizes="(max-width: 500px) 100vw, 500px" />
														</div>
													</div>
													<div class="elementor-element elementor-element-36f3a55 elementor-widget elementor-widget-text-editor"
														data-id="36f3a55" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<p><span
																	style="background-color: transparent;"><?=$webname?></span><strong> ไฮโล
																	Hi-Low</strong><br /><b>วางสูงต่ำที่
																</b><?=$webname?><b> casino</b></p>
															<p>ซึ่งนอกจากบาคาร่าออนไลน์แล้วนั้นเว็บไซต์ MGM5G casino
																ของเรายังมีเกมการพนันอย่าง ไฮโลออนไลน์
																ที่เป็นเกมการพนันพื้นบ้านที่ได้รับความนิยมจนต้องนำมาเพิ่มในคาสิโนออนไลน์
																ซึ่ง ไฮโลออนไลน์ ของเราเล่นง่าย ได้เงินจริง
																คุณอาจจะรวยภายในข้ามคืนหากเดิมพันกับเว็บของเรา</p>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-f725a10"
												data-id="f725a10" data-element_type="column"
												data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-145a469 elementor-widget elementor-widget-image"
														data-id="145a469" data-element_type="widget"
														data-widget_type="image.default">
														<div class="elementor-widget-container">
															<img decoding="async" loading="lazy" width="500"
																height="500" src="<?=$theme_asset?>/wp-content/uploads/2022/05/01.png"
																class="attachment-large size-large" alt=""
																srcset="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/01.png 500w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/01-300x300.png 300w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/01-150x150.png 150w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/01-24x24.png 24w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/01-36x36.png 36w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/01-48x48.png 48w"
																sizes="(max-width: 500px) 100vw, 500px" />
														</div>
													</div>
													<div class="elementor-element elementor-element-9f98eaf elementor-widget elementor-widget-text-editor"
														data-id="9f98eaf" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<p><span
																	style="background-color: transparent;"><?=$webname?></span><strong> ไฮโล
																	Hi-Low</strong><br /><b>วางสูงต่ำที่
																</b><?=$webname?><b> casino</b></p>
															<p>ซึ่งนอกจากบาคาร่าออนไลน์แล้วนั้นเว็บไซต์ MGM5G casino
																ของเรายังมีเกมการพนันอย่าง ไฮโลออนไลน์
																ที่เป็นเกมการพนันพื้นบ้านที่ได้รับความนิยมจนต้องนำมาเพิ่มในคาสิโนออนไลน์
																ซึ่ง ไฮโลออนไลน์ ของเราเล่นง่าย ได้เงินจริง
																คุณอาจจะรวยภายในข้ามคืนหากเดิมพันกับเว็บของเรา</p>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-44ebe2a"
												data-id="44ebe2a" data-element_type="column"
												data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-05834f0 elementor-widget elementor-widget-image"
														data-id="05834f0" data-element_type="widget"
														data-widget_type="image.default">
														<div class="elementor-widget-container">
															<img decoding="async" loading="lazy" width="500"
																height="500" src="<?=$theme_asset?>/wp-content/uploads/2022/05/02.png"
																class="attachment-large size-large" alt=""
																srcset="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/02.png 500w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/02-300x300.png 300w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/02-150x150.png 150w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/02-24x24.png 24w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/02-36x36.png 36w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/02-48x48.png 48w"
																sizes="(max-width: 500px) 100vw, 500px" />
														</div>
													</div>
													<div class="elementor-element elementor-element-5a1f240 elementor-widget elementor-widget-text-editor"
														data-id="5a1f240" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<p><span
																	style="background-color: transparent;"><?=$webname?></span><strong> ไฮโล
																	Hi-Low</strong><br /><b>วางสูงต่ำที่
																</b><?=$webname?><b> casino</b></p>
															<p>ซึ่งนอกจากบาคาร่าออนไลน์แล้วนั้นเว็บไซต์ MGM5G casino
																ของเรายังมีเกมการพนันอย่าง ไฮโลออนไลน์
																ที่เป็นเกมการพนันพื้นบ้านที่ได้รับความนิยมจนต้องนำมาเพิ่มในคาสิโนออนไลน์
																ซึ่ง ไฮโลออนไลน์ ของเราเล่นง่าย ได้เงินจริง
																คุณอาจจะรวยภายในข้ามคืนหากเดิมพันกับเว็บของเรา</p>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-e6c76b7"
												data-id="e6c76b7" data-element_type="column"
												data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-fa3ae23 elementor-widget elementor-widget-image"
														data-id="fa3ae23" data-element_type="widget"
														data-widget_type="image.default">
														<div class="elementor-widget-container">
															<img decoding="async" loading="lazy" width="500"
																height="500" src="<?=$theme_asset?>/wp-content/uploads/2022/05/03.png"
																class="attachment-large size-large" alt=""
																srcset="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/03.png 500w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/03-300x300.png 300w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/03-150x150.png 150w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/03-24x24.png 24w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/03-36x36.png 36w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/03-48x48.png 48w"
																sizes="(max-width: 500px) 100vw, 500px" />
														</div>
													</div>
													<div class="elementor-element elementor-element-dc522d8 elementor-widget elementor-widget-text-editor"
														data-id="dc522d8" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<p><span
																	style="background-color: transparent;"><?=$webname?></span><strong> ไฮโล
																	Hi-Low</strong><br /><b>วางสูงต่ำที่
																</b><?=$webname?><b> casino</b></p>
															<p>ซึ่งนอกจากบาคาร่าออนไลน์แล้วนั้นเว็บไซต์ MGM5G casino
																ของเรายังมีเกมการพนันอย่าง ไฮโลออนไลน์
																ที่เป็นเกมการพนันพื้นบ้านที่ได้รับความนิยมจนต้องนำมาเพิ่มในคาสิโนออนไลน์
																ซึ่ง ไฮโลออนไลน์ ของเราเล่นง่าย ได้เงินจริง
																คุณอาจจะรวยภายในข้ามคืนหากเดิมพันกับเว็บของเรา</p>
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
					<section
						class="elementor-section elementor-inner-section elementor-element elementor-element-02c5561 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="02c5561" data-element_type="section"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-710fcd5"
								data-id="710fcd5" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-ccafdf7 elementor-widget elementor-widget-image"
										data-id="ccafdf7" data-element_type="widget" data-widget_type="image.default">
										<div class="elementor-widget-container">
											<img decoding="async" loading="lazy" width="1000" height="1000"
												src="<?=$theme_asset?>/wp-content/uploads/2022/05/tab-index-promotion-landing.png"
												class="attachment-large size-large" alt=""
												srcset="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/tab-index-promotion-landing.png 1000w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/tab-index-promotion-landing-300x300.png 300w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/tab-index-promotion-landing-150x150.png 150w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/tab-index-promotion-landing-768x768.png 768w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/tab-index-promotion-landing-24x24.png 24w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/tab-index-promotion-landing-36x36.png 36w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/tab-index-promotion-landing-48x48.png 48w"
												sizes="(max-width: 1000px) 100vw, 1000px" />
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f130389"
								data-id="f130389" data-element_type="column"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-9661676 elementor-widget elementor-widget-site-logo"
										data-id="9661676" data-element_type="widget"
										data-settings="{&quot;align&quot;:&quot;left&quot;,&quot;width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:308,&quot;sizes&quot;:[]},&quot;width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;caption_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;caption_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
										data-widget_type="site-logo.default">
										<div class="elementor-widget-container">
											<div class="hfe-site-logo">
												<a data-elementor-open-lightbox="" class='elementor-clickable'
													href="#">
													<div class="hfe-site-logo-set">
														<div class="hfe-site-logo-container">
															<img decoding="async"
																class="hfe-site-logo-img elementor-animation-"
																src="<?=$theme_asset?>/wp-content/uploads/2022/05/cropped-ufabet-logo-1.png"
																alt="" />
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-7cac728 elementor-widget elementor-widget-heading"
										data-id="7cac728" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">สนุก และ
												คว้าชัยชนะได้ทุกที่ทุกเวลา</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-6c6b4fc elementor-widget elementor-widget-text-editor"
										data-id="6c6b4fc" data-element_type="widget"
										data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											<p>ให้บริการความสนุกไม่รู้จบ 24 ชม. ไปกับดีลเลอร์ “DEALER” สาวสวย สุดเซ็กซี่
												คอยแจกไพ่ ให้คุณได้ลุ้นทุกเกมส์เดิมพัน สบายตา สบายใจ ด้วย สาวๆ น่ารัก
												สุดเซ็กซี่ มาใส่บิกินี่ แต่ละสีแต่ละวันสีสด มาแจกไพ่
												ท่านจะได้รับประสบการณ์ใหม่ในการเดิมพัน</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-97f8a74 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="97f8a74" data-element_type="section"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4992347"
								data-id="4992347" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-def9de3 elementor-widget elementor-widget-image"
										data-id="def9de3" data-element_type="widget" data-widget_type="image.default">
										<div class="elementor-widget-container">
											<img decoding="async" loading="lazy" width="768" height="297"
												src="<?=$theme_asset?>/wp-content/uploads/2022/05/girl7-768x297.png"
												class="attachment-medium_large size-medium_large" alt=""
												srcset="https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/girl7-768x297.png 768w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/girl7-300x116.png 300w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/girl7-1024x396.png 1024w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/girl7-24x9.png 24w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/girl7-36x14.png 36w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/girl7-48x19.png 48w, https://ideabet.bet/theme/goldenufa/wp-content/uploads/2022/05/girl7.png 1170w"
												sizes="(max-width: 768px) 100vw, 768px" />
										</div>
									</div>
									<div class="elementor-element elementor-element-fb42a19 elementor-widget elementor-widget-heading"
										data-id="fb42a19" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">เว็บอันดับหนึ่ง
												<?=$webname?> ที่รวมสาวสวยมากมายให้ท่านได้ตื่นตาตื่นใจ บาคาร่าออนไลน์ที่
												เย้ายวนใจที่สุดในตอนนี้ หรือ ที่รู้จักกันว่า Sexy Baccarat, Sexy Gaming,
												เอ็มจีเอ็มห้าจี เซ็กซี่ หรือ เซ็กซี่เกมส์ เอ็มจีเอ็มห้าจี</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-908289f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="908289f" data-element_type="section"
						data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-01e41b9"
								data-id="01e41b9" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-82bf8e2 elementor-widget elementor-widget-image-carousel"
										data-id="82bf8e2" data-element_type="widget"
										data-settings="{&quot;slides_to_show&quot;:&quot;8&quot;,&quot;slides_to_show_tablet&quot;:&quot;5&quot;,&quot;slides_to_show_mobile&quot;:&quot;4&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;autoplay_speed&quot;:1000,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:25,&quot;sizes&quot;:[]},&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}"
										data-widget_type="image-carousel.default">
										<div class="elementor-widget-container">
											<div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
												<div class="elementor-image-carousel swiper-wrapper">
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async"
																class="swiper-slide-image"
																src="<?=$theme_asset?>/wp-content/uploads/2022/03/ag-gaming.2eb0369.png"
																alt="ag-gaming.2eb0369" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async"
																class="swiper-slide-image"
																src="<?=$theme_asset?>/wp-content/uploads/2022/03/ambbet.1d53780.png"
																alt="ambbet.1d53780" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async"
																class="swiper-slide-image"
																src="<?=$theme_asset?>/wp-content/uploads/2022/03/ameba.dea3fdf.png"
																alt="ameba.dea3fdf" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async"
																class="swiper-slide-image"
																src="<?=$theme_asset?>/wp-content/uploads/2022/03/dragoonsoft.a39781a.png"
																alt="dragoonsoft.a39781a" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async"
																class="swiper-slide-image"
																src="<?=$theme_asset?>/wp-content/uploads/2022/03/dream-gaming.d993e67.png"
																alt="dream-gaming.d993e67" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async"
																class="swiper-slide-image"
																src="<?=$theme_asset?>/wp-content/uploads/2022/03/gamatron.96cdfab.png"
																alt="gamatron.96cdfab" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async"
																class="swiper-slide-image"
																src="<?=$theme_asset?>/wp-content/uploads/2022/03/joker-gaming.417d073.png"
																alt="joker-gaming.417d073" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async"
																class="swiper-slide-image"
																src="<?=$theme_asset?>/wp-content/uploads/2022/03/live-22.dfd4972.png"
																alt="live-22.dfd4972" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async"
																class="swiper-slide-image"
																src="<?=$theme_asset?>/wp-content/uploads/2022/03/pretty-gaming.f27ce57.png"
																alt="pretty-gaming.f27ce57" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async"
																class="swiper-slide-image"
																src="<?=$theme_asset?>/wp-content/uploads/2022/03/sa-gaming.52e386a.png"
																alt="sa-gaming.52e386a" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async"
																class="swiper-slide-image"
																src="<?=$theme_asset?>/wp-content/uploads/2022/03/sexy-gaming.09728c1.png"
																alt="sexy-gaming.09728c1" /></figure>
													</div>
													<div class="swiper-slide">
														<figure class="swiper-slide-inner"><img decoding="async"
																class="swiper-slide-image"
																src="<?=$theme_asset?>/wp-content/uploads/2022/03/spade-gaming.d835b4d.png"
																alt="spade-gaming.d835b4d" /></figure>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-7177db0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="7177db0" data-element_type="section"
						data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3d4a575"
								data-id="3d4a575" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-cca7ed2 elementor-widget elementor-widget-heading"
										data-id="cca7ed2" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default"><?=$webname?>
												เว็บคาสิโนออนไลน์
											</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-7ab7c41 elementor-widget elementor-widget-heading"
										data-id="7ab7c41" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">
												ครองอันดับในใจคนไทย 10 ปีซ้อน
											</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-2855b43 elementor-widget elementor-widget-heading"
										data-id="2855b43" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default"><?=$webname?> บาคาร่า
												คาสิโนออนไลน์ ที่ดีที่สุด เพื่อประสบการณ์ที่ดีของผู้เล่นอย่างแท้จริง แบบ
												<?=$webname?></h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-c6f62f7 elementor-widget elementor-widget-heading"
										data-id="c6f62f7" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">Created website
												by</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-b5c9a00 elementor-widget elementor-widget-site-logo"
										data-id="b5c9a00" data-element_type="widget"
										data-settings="{&quot;width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:261,&quot;sizes&quot;:[]},&quot;width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;align&quot;:&quot;center&quot;,&quot;space&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;caption_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;caption_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
										data-widget_type="site-logo.default">
										<div class="elementor-widget-container">
											<div class="hfe-site-logo">
												<a data-elementor-open-lightbox="" class='elementor-clickable'
													href="#">
													<div class="hfe-site-logo-set">
														<div class="hfe-site-logo-container">
															<img decoding="async"
																class="hfe-site-logo-img elementor-animation-"
																src="<?=$theme_asset?>/wp-content/uploads/2022/05/cropped-ufabet-logo-1.png"
																alt="" />
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-f84090e elementor-widget elementor-widget-heading"
										data-id="f84090e" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">Terms and
												Conditions
											</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-20f83cd elementor-widget elementor-widget-heading"
										data-id="20f83cd" data-element_type="widget" data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">Copyright © 2021
												<?=$webname?> All Rights Reserved.</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</footer>



		</div>

		<div class="loginmodaldiv modaldiv">
			<div class="contentmodal animate__animated animate__bounceInDown">
				<button><i class="fas fa-times"></i></button>
				<div class="login">
					<a href="/" class="custom-logo-link" rel="home"><img width="1601" height="499"
							src="<?=$theme_asset?>/wp-content/uploads/2022/05/cropped-ufabet-logo-1.png" class="custom-logo"
							alt="GoldenUFA" decoding="async" sizes="(max-width: 1601px) 100vw, 1601px" /></a>
					<h1>เข้าสู่ระบบ</h1>
						<input class="text_login mb-4 mt-3" id="phone" name="phone" type="text"
							placeholder="ชื่อผู้ใช้">
						<input class="text_login" id="password_m" name="password_m" type="password" placeholder="รหัสผ่าน">
						<a href="#" onclick="login_new()" class="btn btnLogin">เข้าสู่ระบบ</a>


				</div>
			</div>
			<div class="overlaymodal"></div>
		</div>
	</div>




	<!-- Popper.JS -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
		integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
		crossorigin="anonymous"></script>
	<!-- Bootstrap JS -->
	<script src="//cdn.jsdelivr.net/npm/bootstrap%404.6.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
		crossorigin="anonymous"></script>
	<!-- jQuery Custom Scroller CDN -->
	<script
		src="//cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

	<!-- AOSJS -->
	<script src="//unpkg.com/aos%402.3.1/dist/aos.js"></script>

	<!-- Swiper -->
	<script src="//unpkg.com/swiper%4010.2.0/swiper-bundle.min.js"></script>
	<script>
		AOS.init({ once: true });
	</script>
	<script src="<?=$theme_asset?>/wp-content/themes/dafabets/js/jse346.js?1694166529"></script>
	<link rel='stylesheet' id='elementor-gallery-css'
		href='wp-content/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min7359.css?ver=1.2.0' type='text/css'
		media='all' />
	<link rel='stylesheet' id='elementor-post-1198-css'
		href='wp-content/uploads/elementor/css/post-1198a95d.css?ver=1682782510' type='text/css' media='all' />
	<script type='text/javascript'
		src='<?=$theme_asset?>/wp-content/plugins/kk-star-ratings/src/core/public/js/kk-star-ratings.min0606.js?ver=5.2.9'
		id='kk-star-ratings-js'></script>
	<script type='text/javascript'
		src='<?=$theme_asset?>/wp-content/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min7359.js?ver=1.2.0'
		id='elementor-gallery-js'></script>
	<script type='text/javascript'
		src='<?=$theme_asset?>/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min5aed.js?ver=3.6.4'
		id='elementor-pro-webpack-runtime-js'></script>
	<script type='text/javascript' src='<?=$theme_asset?>/wp-content/plugins/elementor/assets/js/webpack.runtime.min5aed.js?ver=3.6.4'
		id='elementor-webpack-runtime-js'></script>
	<script type='text/javascript' src='<?=$theme_asset?>/wp-content/plugins/elementor/assets/js/frontend-modules.min5aed.js?ver=3.6.4'
		id='elementor-frontend-modules-js'></script>
	<script type='text/javascript' src='<?=$theme_asset?>/wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2'
		id='wp-polyfill-inert-js'></script>
	<script type='text/javascript' src='<?=$theme_asset?>/wp-includes/js/dist/vendor/regenerator-runtime.min8fa4.js?ver=0.13.11'
		id='regenerator-runtime-js'></script>
	<script type='text/javascript' src='<?=$theme_asset?>/wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0'
		id='wp-polyfill-js'></script>
	<script type='text/javascript' src='<?=$theme_asset?>/wp-includes/js/dist/hooks.min2ebd.js?ver=c6aec9a8d4e5a5d543a1'
		id='wp-hooks-js'></script>
	<script type='text/javascript' src='<?=$theme_asset?>/wp-includes/js/dist/i18n.minf92f.js?ver=7701b0c3857f914212ef'
		id='wp-i18n-js'></script>
	<script id="wp-i18n-js-after" type="text/javascript">
		wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
	</script>
	<script type='text/javascript' src='<?=$theme_asset?>/wp-content/plugins/elementor-pro/assets/js/frontend.min5aed.js?ver=3.6.4'
		id='elementor-pro-frontend-js'></script>
	<script type='text/javascript'
		src='<?=$theme_asset?>/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2'
		id='elementor-waypoints-js'></script>
	<script type='text/javascript' src='<?=$theme_asset?>/wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2'
		id='jquery-ui-core-js'></script>

	<script id="elementor-frontend-js-before" type="text/javascript">
		var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Extra", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Extra", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.6.4", "is_static": false, "experimentalFeatures": { "e_dom_optimization": true, "e_optimized_assets_loading": true, "a11y_improvements": true, "e_import_export": true, "e_hidden_wordpress_widgets": true, "theme_builder_v2": true, "landing-pages": true, "elements-color-picker": true, "favorite-widgets": true, "admin-top-bar": true, "page-transitions": true, "form-submissions": true, "e_scroll_snap": true }, "urls": { "assets": "https:\/\/ideabet.bet\/theme\/goldenufa\/wp-content\/plugins\/elementor\/assets\/" }, "settings": { "page": [], "editorPreferences": [] }, "kit": { "body_background_background": "classic", "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 1198, "title": "Footer%20%E2%80%93%20GoldenUFA", "excerpt": "", "featuredImage": false } };
	</script>
	<script type='text/javascript' src='<?=$theme_asset?>/wp-content/plugins/elementor/assets/js/frontend.min5aed.js?ver=3.6.4'
		id='elementor-frontend-js'></script>
	<script id="elementor-frontend-js-after" type="text/javascript">
		window.scope_array = [];
		window.backend = 0;
		jQuery.cachedScript = function (url, options) {
			// Allow user to set any option except for dataType, cache, and url.
			options = jQuery.extend(options || {}, {
				dataType: "script",
				cache: true,
				url: url
			});
			// Return the jqXHR object so we can chain callbacks.
			return jQuery.ajax(options);
		};
		jQuery(window).on("elementor/frontend/init", function () {
			elementorFrontend.hooks.addAction("frontend/element_ready/global", function ($scope, $) {
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
					jQuery.cachedScript(uael_url).done(function () {
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
			jQuery.cachedScript = function (url, options) {
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
	<script type='text/javascript'
		src='<?=$theme_asset?>/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min5aed.js?ver=3.6.4'
		id='pro-elements-handlers-js'></script>

<script src="<?=$theme_asset?>/login/jslogin/jquery.min.js"></script>
<script src="<?=$theme_asset?>/login/jslogin/popper.js"></script>
<script src="<?=$theme_asset?>/login/jslogin/bootstrap.min.js"></script>
<script src="<?=$theme_asset?>/login/jslogin/main.js"></script>
<script src="<?=$theme_asset?>/js/jquery-3.3.1.min.js"></script>
<script src="<?=$theme_asset?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?=$theme_asset?>/js/popper.min.js"></script>
<script src="<?=$theme_asset?>/js/bootstrap.min.js"></script>
<script src="<?=$theme_asset?>/js/bootstrap-select.min.js"></script>
<script src="<?=$theme_asset?>/js/loadingoverlay.min.js"></script>
<script src="<?=$theme_asset?>/js/loadingoverlay_progress.min.js"></script>
<script src="<?=$theme_asset?>/js/odometer.min.js"></script>
<script src="<?=$theme_asset?>/js/bs-stepper.min.js"></script>

<script src="<?=$theme_asset?>/js/jquery.marquee.js"></script>
<script src="<?=$theme_asset?>/js/signalr.min.js"></script>
<script src="<?=$theme_asset?>/js/pusher.min.js"></script>
<script src="<?=$theme_asset?>/js/sweetalert2.min.js"></script>
<script src="<?=$theme_asset?>/js/cleave.js"></script>

<script src="<?=$theme_asset?>/js/moment.min.js"></script>
<script src="<?=$theme_asset?>/js/moment-timezone.min.js"></script>
<script src="<?=$theme_asset?>/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?=$theme_asset?>/js/tempusdominus-bootstrap-4.js"></script>
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