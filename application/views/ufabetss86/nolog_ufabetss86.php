


<div class="overlay"></div>

<div class="wrapper pt-5">



	<div class="contentmodal mt-5 pt-5  animate__animated animate__bounceInDown">
		<button><i class="fas fa-times"></i></button>
		<div class="login">

			<img width="1000" height="446" src="<?= $theme_asset ?>/img/logo.png" class="custom-logo" alt="<?= strtoupper($webname) ?>" decoding="async" style="max-width: 500px;" />
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