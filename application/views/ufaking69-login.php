<?php
$bank_info = $this->admin_model->bank();
$bank_scb = $this->admin_model->bankSCB();
$bank_truewallet = $this->admin_model->bankTruewallet();
$seting = $this->admin_model->result_setting();
$banner = $this->admin_model->getBanner();
$popupbanner = $this->admin_model->getPopup();
$vipgroup = $this->admin_model->getVipgroup();

$webname = $seting['name_web'];
$line = $seting['line'];
$line_admin = $seting['line_admin'];
$d_limit = $seting['d_limit'];
$w_limit = $seting['w_limit'];
$w_limit_twl = $seting['w_limit_twl'];
$baseurl = base_url();
$urlBase = $seting['domain_f'];
$asset_backend = $seting['domain_b'];
$domain_api = $seting['domain_api'];
$domain_lotto = $seting['domain_lotto'];

$template_name = $seting['template_name'];
$theme_asset = '//s3auto.sgp1.digitaloceanspaces.com/' . $template_name . "/login";
$theme_asset2 = '//s3auto.sgp1.digitaloceanspaces.com/' . $template_name . "/login" ;
//Setting php
$user = $this->session->userdata('user');
$info = $this->user_model->getdata_user($user);
// if ($info['bank'] == 'truewallet') {
//     $bank_info = $this->admin_model->bankTruewallet();
$img_twl = $urlBase . "images/bank2/truewallet.jpg";
// } else {
$img_bank = $urlBase . "image/scb2.png";
// }
$islogin = 'hidden=""';
if ($user) {
	redirect(base_url('/'));
    // $islogin = '';
    // $ufa = $this->user_model->user_ufa($user);
    // $user_ufa = $ufa['username'];
    // $pass_ufa = $ufa['password'];
    // $color = $this->user_model->get_bank_color($user);
    // $ufa = $this->user_model->user_ufa($user);
    // $setting_w = $this->admin_model->setting_w();
    // $setting_w_type = $this->admin_model->setting_w_type();
    // $setting_pow = $this->admin_model->setting_powyingshup();
    // if ($ufa['username'] != '') {
    //     $user_ufa = $ufa['username'];
    //     $pass_ufa = $ufa['password'];
    // }
    // $u_pro = $this->user_model->user_pro($user);
    // $start_date = date('Y-m-d') . ' 00:00:00';
    // $end_date = date('Y-m-d H:i:s');
    // $u_pro_newDate = $this->user_model->user_pro_newDate($user, $start_date, $end_date);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php
if (!empty($tokenApiLotto) && $tokenApiLotto['status_login']) {

    echo " <script> window.location.href = '" . $urlKeylotto . "/login-keylotto?token=" . $tokenApiLotto . "' </script>";
}
?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
	<title><?=$webname?> | Auto</title>

		<link rel='stylesheet' id='wp-block-library-css' href='<?=$theme_asset?>/wp-includes/css/dist/block-library/style.min3781.css?ver=6.2.2' type='text/css' media='all' />
		<link rel='stylesheet' id='classic-theme-styles-css' href='<?=$theme_asset?>/wp-includes/css/classic-themes.min3781.css?ver=6.2.2' type='text/css' media='all' />
		<style id='global-styles-inline-css' type='text/css'>
			body {
				--wp--preset--color--black: #000000;
				--wp--preset--color--cyan-bluish-gray: #abb8c3;
				--wp--preset--color--white: #ffffff;
				--wp--preset--color--pale-pink: #f78da7;
				--wp--preset--color--vivid-red: #cf2e2e;
				--wp--preset--color--luminous-vivid-orange: #ff6900;
				--wp--preset--color--luminous-vivid-amber: #fcb900;
				--wp--preset--color--light-green-cyan: #7bdcb5;
				--wp--preset--color--vivid-green-cyan: #00d084;
				--wp--preset--color--pale-cyan-blue: #8ed1fc;
				--wp--preset--color--vivid-cyan-blue: #0693e3;
				--wp--preset--color--vivid-purple: #9b51e0;
				--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
				--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
				--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
				--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
				--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
				--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
				--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
				--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
				--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
				--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
				--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
				--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
				--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
				--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
				--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
				--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
				--wp--preset--duotone--midnight: url('#wp-duotone-midnight');
				--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
				--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
				--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
				--wp--preset--font-size--small: 13px;
				--wp--preset--font-size--medium: 20px;
				--wp--preset--font-size--large: 36px;
				--wp--preset--font-size--x-large: 42px;
				--wp--preset--spacing--20: 0.44rem;
				--wp--preset--spacing--30: 0.67rem;
				--wp--preset--spacing--40: 1rem;
				--wp--preset--spacing--50: 1.5rem;
				--wp--preset--spacing--60: 2.25rem;
				--wp--preset--spacing--70: 3.38rem;
				--wp--preset--spacing--80: 5.06rem;
				--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
				--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
				--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
				--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
				--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
			}

			:where(.is-layout-flex) {
				gap: 0.5em;
			}

			body .is-layout-flow>.alignleft {
				float: left;
				margin-inline-start: 0;
				margin-inline-end: 2em;
			}

			body .is-layout-flow>.alignright {
				float: right;
				margin-inline-start: 2em;
				margin-inline-end: 0;
			}

			body .is-layout-flow>.aligncenter {
				margin-left: auto !important;
				margin-right: auto !important;
			}

			body .is-layout-constrained>.alignleft {
				float: left;
				margin-inline-start: 0;
				margin-inline-end: 2em;
			}

			body .is-layout-constrained>.alignright {
				float: right;
				margin-inline-start: 2em;
				margin-inline-end: 0;
			}

			body .is-layout-constrained>.aligncenter {
				margin-left: auto !important;
				margin-right: auto !important;
			}

			body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
				max-width: var(--wp--style--global--content-size);
				margin-left: auto !important;
				margin-right: auto !important;
			}

			body .is-layout-constrained>.alignwide {
				max-width: var(--wp--style--global--wide-size);
			}

			body .is-layout-flex {
				display: flex;
			}

			body .is-layout-flex {
				flex-wrap: wrap;
				align-items: center;
			}

			body .is-layout-flex>* {
				margin: 0;
			}

			:where(.wp-block-columns.is-layout-flex) {
				gap: 2em;
			}

			.has-black-color {
				color: var(--wp--preset--color--black) !important;
			}

			.has-cyan-bluish-gray-color {
				color: var(--wp--preset--color--cyan-bluish-gray) !important;
			}

			.has-white-color {
				color: var(--wp--preset--color--white) !important;
			}

			.has-pale-pink-color {
				color: var(--wp--preset--color--pale-pink) !important;
			}

			.has-vivid-red-color {
				color: var(--wp--preset--color--vivid-red) !important;
			}

			.has-luminous-vivid-orange-color {
				color: var(--wp--preset--color--luminous-vivid-orange) !important;
			}

			.has-luminous-vivid-amber-color {
				color: var(--wp--preset--color--luminous-vivid-amber) !important;
			}

			.has-light-green-cyan-color {
				color: var(--wp--preset--color--light-green-cyan) !important;
			}

			.has-vivid-green-cyan-color {
				color: var(--wp--preset--color--vivid-green-cyan) !important;
			}

			.has-pale-cyan-blue-color {
				color: var(--wp--preset--color--pale-cyan-blue) !important;
			}

			.has-vivid-cyan-blue-color {
				color: var(--wp--preset--color--vivid-cyan-blue) !important;
			}

			.has-vivid-purple-color {
				color: var(--wp--preset--color--vivid-purple) !important;
			}

			.has-black-background-color {
				background-color: var(--wp--preset--color--black) !important;
			}

			.has-cyan-bluish-gray-background-color {
				background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
			}

			.has-white-background-color {
				background-color: var(--wp--preset--color--white) !important;
			}

			.has-pale-pink-background-color {
				background-color: var(--wp--preset--color--pale-pink) !important;
			}

			.has-vivid-red-background-color {
				background-color: var(--wp--preset--color--vivid-red) !important;
			}

			.has-luminous-vivid-orange-background-color {
				background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
			}

			.has-luminous-vivid-amber-background-color {
				background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
			}

			.has-light-green-cyan-background-color {
				background-color: var(--wp--preset--color--light-green-cyan) !important;
			}

			.has-vivid-green-cyan-background-color {
				background-color: var(--wp--preset--color--vivid-green-cyan) !important;
			}

			.has-pale-cyan-blue-background-color {
				background-color: var(--wp--preset--color--pale-cyan-blue) !important;
			}

			.has-vivid-cyan-blue-background-color {
				background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
			}

			.has-vivid-purple-background-color {
				background-color: var(--wp--preset--color--vivid-purple) !important;
			}

			.has-black-border-color {
				border-color: var(--wp--preset--color--black) !important;
			}

			.has-cyan-bluish-gray-border-color {
				border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
			}

			.has-white-border-color {
				border-color: var(--wp--preset--color--white) !important;
			}

			.has-pale-pink-border-color {
				border-color: var(--wp--preset--color--pale-pink) !important;
			}

			.has-vivid-red-border-color {
				border-color: var(--wp--preset--color--vivid-red) !important;
			}

			.has-luminous-vivid-orange-border-color {
				border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
			}

			.has-luminous-vivid-amber-border-color {
				border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
			}

			.has-light-green-cyan-border-color {
				border-color: var(--wp--preset--color--light-green-cyan) !important;
			}

			.has-vivid-green-cyan-border-color {
				border-color: var(--wp--preset--color--vivid-green-cyan) !important;
			}

			.has-pale-cyan-blue-border-color {
				border-color: var(--wp--preset--color--pale-cyan-blue) !important;
			}

			.has-vivid-cyan-blue-border-color {
				border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
			}

			.has-vivid-purple-border-color {
				border-color: var(--wp--preset--color--vivid-purple) !important;
			}

			.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
				background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
			}

			.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
				background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
			}

			.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
				background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
			}

			.has-luminous-vivid-orange-to-vivid-red-gradient-background {
				background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
			}

			.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
				background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
			}

			.has-cool-to-warm-spectrum-gradient-background {
				background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
			}

			.has-blush-light-purple-gradient-background {
				background: var(--wp--preset--gradient--blush-light-purple) !important;
			}

			.has-blush-bordeaux-gradient-background {
				background: var(--wp--preset--gradient--blush-bordeaux) !important;
			}

			.has-luminous-dusk-gradient-background {
				background: var(--wp--preset--gradient--luminous-dusk) !important;
			}

			.has-pale-ocean-gradient-background {
				background: var(--wp--preset--gradient--pale-ocean) !important;
			}

			.has-electric-grass-gradient-background {
				background: var(--wp--preset--gradient--electric-grass) !important;
			}

			.has-midnight-gradient-background {
				background: var(--wp--preset--gradient--midnight) !important;
			}

			.has-small-font-size {
				font-size: var(--wp--preset--font-size--small) !important;
			}

			.has-medium-font-size {
				font-size: var(--wp--preset--font-size--medium) !important;
			}

			.has-large-font-size {
				font-size: var(--wp--preset--font-size--large) !important;
			}

			.has-x-large-font-size {
				font-size: var(--wp--preset--font-size--x-large) !important;
			}

			.wp-block-navigation a:where(:not(.wp-element-button)) {
				color: inherit;
			}

			:where(.wp-block-columns.is-layout-flex) {
				gap: 2em;
			}

			.wp-block-pullquote {
				font-size: 1.5em;
				line-height: 1.6;
			}
		</style>
		<link rel='stylesheet' id='kk-star-ratings-css' href='<?=$theme_asset?>/wp-content/plugins/kk-star-ratings/src/core/public/css/kk-star-ratings.min7923.css?ver=5.3.1' type='text/css' media='all' />
		<link rel='stylesheet' id='link-widget-title-css' href='<?=$theme_asset?>/wp-content/plugins/link-widget-title/public/css/link-widget-title-publicf269.css?ver=1.0.1' type='text/css' media='all' />
		<link rel='stylesheet' id='menu-image-css' href='<?=$theme_asset?>/wp-content/plugins/menu-image/includes/css/menu-image6173.css?ver=3.0.8' type='text/css' media='all' />
		<link rel='stylesheet' id='dashicons-css' href='<?=$theme_asset?>/wp-includes/css/dashicons.min3781.css?ver=6.2.2' type='text/css' media='all' />
		<link rel='stylesheet' id='hfe-style-css' href='<?=$theme_asset?>/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementord203.css?ver=1.6.12' type='text/css' media='all' />
		<link rel='stylesheet' id='elementor-icons-css' href='<?=$theme_asset?>/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min7816.css?ver=5.15.0' type='text/css' media='all' />
		<link rel='stylesheet' id='elementor-frontend-css' href='<?=$theme_asset?>/wp-content/plugins/elementor/assets/css/frontend.mina4f3.css?ver=3.6.8' type='text/css' media='all' />
		<link rel='stylesheet' id='elementor-post-124-css' href='<?=$theme_asset?>/wp-content/uploads/elementor/css/post-1240b93.css?ver=1682617242' type='text/css' media='all' />
		<link rel='stylesheet' id='elementor-pro-css' href='<?=$theme_asset?>/wp-content/plugins/elementor-pro/assets/css/frontend.min5aed.css?ver=3.6.4' type='text/css' media='all' />
		<link rel='stylesheet' id='uael-frontend-css' href='<?=$theme_asset?>/wp-content/plugins/ultimate-elementor/assets/min-css/uael-frontend.min2cd3.css?ver=1.36.4' type='text/css' media='all' />
		<link rel='stylesheet' id='elementor-global-css' href='<?=$theme_asset?>/wp-content/uploads/elementor/css/global9ec5.css?ver=1682617243' type='text/css' media='all' />
		<link rel='stylesheet' id='elementor-post-216-css' href='<?=$theme_asset?>/wp-content/uploads/elementor/css/post-2169ec5.css?ver=1682617243' type='text/css' media='all' />
		<link rel='stylesheet' id='hfe-widgets-style-css' href='<?=$theme_asset?>/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontendd203.css?ver=1.6.12' type='text/css' media='all' />
		<link rel='stylesheet' id='eael-general-css' href='<?=$theme_asset?>/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min9f31.css?ver=5.7.2' type='text/css' media='all' />
		<link rel='stylesheet' id='google-fonts-1-css' href='//fonts.googleapis.com/css?family=Kanit%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.2.2' type='text/css' media='all' />
		<script type='text/javascript' src='<?=$theme_asset?>/wp-includes/js/jquery/jquery.min5aed.js?ver=3.6.4' id='jquery-core-js'></script>
		<script type='text/javascript' src='<?=$theme_asset?>/wp-includes/js/jquery/jquery-migrate.min6b00.js?ver=3.4.0' id='jquery-migrate-js'></script>
		<script type='text/javascript' src='<?=$theme_asset?>/wp-content/plugins/link-widget-title/public/js/link-widget-title-publicf269.js?ver=1.0.1' id='link-widget-title-js'></script>
		<link rel="alternate" type="application/json+oembed" href="<?=$theme_asset?>/wp-json/oembed/1.0/embed5a4c.json" />

		<style type="text/css" id="custom-background-css">
			body.custom-background {
				background-image: url("<?=$theme_asset?>/wp-content/uploads/2022/06/rm380-03-scaled.jpg");
				background-position: left center;
				background-size: cover;
				background-repeat: no-repeat;
				background-attachment: fixed;
			}
		</style>
		<link rel="icon" href="<?=$theme_asset?>/img/logo.png" sizes="32x32" />
		<link rel="icon" href="<?=$theme_asset?>/img/logo.png" sizes="192x192" />
		<link rel="apple-touch-icon" href="<?=$theme_asset?>/img/logo.png" />

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

		<!-- Jquery -->
		<script src="//code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>



		<!-- Scrollbar Custom CSS -->
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

		<!-- Font Awesome JS -->
		<link href="//kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">

		<!-- AOS JS -->
		<link href="//unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

		<!-- Swiper -->
		<link rel="stylesheet" href="//unpkg.com/swiper@9.4.1/swiper-bundle.min.css" />

		<!-- AOS JS -->
		<link href="//unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

		<!-- Our Custom CSS -->
		<link rel="stylesheet" href="<?=$theme_asset?>/wp-content/themes/harem789/styleaa34.css?1687256960">

		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


	<script src="//cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" href="assets/css/superwheeladmin.css"> <!-- superWheel -->
</head>

<body class="home page-template-default page page-id-216 custom-background wp-custom-logo ehf-template-harem789 ehf-stylesheet-harem789 elementor-default elementor-kit-124 elementor-page elementor-page-216">



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

</html>