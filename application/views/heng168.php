<?php
$bank_info = $this->admin_model->bank();
$seting    = $this->admin_model->result_setting();

$webname   = $seting['name_web'];
$line      = $seting['line'];
$d_limit   = $seting['d_limit'];
$w_limit   = $seting['w_limit'];
$baseurl   = base_url();
$urlBase = 'https://huaydet789.com/';
$theme_asset = 'heng168';
$theme_asset2 = 'heng168_new';
//Setting php
$user =  $this->session->userdata('user');
$info = $this->user_model->getdata_user($user);
if ($info['bank'] == 'truewallet') {
	$bank_info = $this->admin_model->bankTruewallet();
	$img_bank = $urlBase . "images/bank2/truewallet.jpg";
} else {
	$img_bank = $urlBase . "image/scb2.png";
}
$islogin = 'hidden=""';
if ($user) {
	$islogin = '';
	$ufa = $this->user_model->user_ufa($user);
	$user_ufa =  $ufa['username'];
	$pass_ufa =  $ufa['password'];
	$color = $this->user_model->get_bank_color($user);
	$ufa   = $this->user_model->user_ufa($user);
	$setting_w = $this->admin_model->setting_w();
	$setting_w_type = $this->admin_model->setting_w_type();
	$setting_pow = $this->admin_model->setting_powyingshup();
	if ($ufa['username'] != '') {
		$user_ufa = $ufa['username'];
		$pass_ufa = $ufa['password'];
	}
	$u_pro = $this->user_model->user_pro($user);
	$start_date = date('Y-m-d') . ' 00:00:00';
	$end_date   = date('Y-m-d H:i:s');
	$u_pro_newDate = $this->user_model->user_pro_newDate($user, $start_date, $end_date);
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
	<base href="/">
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<?php if (!$user) : ?>
		<link rel="preconnect" href="//fonts.gstatic.com/" crossorigin="">
		<link rel="preconnect" href="//fonts.googleapis.com">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?= $theme_asset2 ?>/css/new_style.css">
		<meta name="description" content="แทงหวยกับ ETLOS 365 โปรแรง รวมเลขเด็ด หวยออนไลน์ ทุกสำนักมากที่สุดในประเทศ หวยรัฐบาล, หวยฮานอย, หวยลาว, หวยมาเลย์ หวยออมสิน และหวยยี่กี">
		<link rel="canonical" href="//etlots.com/">
		<meta property="og:locale" content="th_TH">
		<meta property="og:type" content="website">
		<meta property="og:title" content="ETLOS หวยออนไลน์ เว็บแทงหวย No.1 โปรแรงที่สุดในตอนนี้">
		<meta property="og:description" content="แทงหวยกับ ETLOS 365 โปรแรง รวมเลขเด็ด หวยออนไลน์ ทุกสำนักมากที่สุดในประเทศ หวยรัฐบาล, หวยฮานอย, หวยลาว, หวยมาเลย์ หวยออมสิน และหวยยี่กี">
		<meta property="og:url" content="//etlots.com/">
		<meta property="og:site_name" content="ETLOS">
		<meta property="article:modified_time" content="2022-03-10T04:00:59+00:00">
		<meta property="og:image" content="<?= $theme_asset2 ?>/img/new_page/stock-price-table-1.png">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:label1" content="Est. reading time">
		<meta name="twitter:data1" content="20 นาที">
		<script type="text/javascript" async="" src="//www.googletagmanager.com/gtag/js?id=G-E2WPW0EHT9&amp;l=dataLayer&amp;cx=c"></script>
		<script type="text/javascript" async="" src="//www.google-analytics.com/analytics.js"></script>
		<script type="text/javascript" async="" src="//www.google-analytics.com/analytics.js"></script>
		<script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-W6HLK5D"></script>

		<link rel="dns-prefetch" href="//stackpath.bootstrapcdn.com">
		<link rel="dns-prefetch" href="//fonts.googleapis.com">
		<link href="//fonts.gstatic.com" crossorigin="" rel="preconnect">
		<link rel="alternate" type="application/rss+xml" title="ETLOS » ฟีด" href="//etlots.com/feed/">
		<link rel="alternate" type="application/rss+xml" title="ETLOS » ฟีดความเห็น" href="//etlots.com/comments/feed/">
		<link rel="stylesheet" id="bootstrap-style-css" href="//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css?ver=cbe793387a0c1f6ebe4728ab2c293ec8" media="all">
		<link rel="stylesheet" id="pa-frontend-css" href="<?= $theme_asset2 ?>/css/new_page/pa-frontend-fe1479cea.min.css?ver=1664557913" media="all">
		<link rel="stylesheet" id="wp-block-library-css" href="<?= $theme_asset2 ?>/css/new_page/style.min.css?ver=cbe793387a0c1f6ebe4728ab2c293ec8" media="all">

		<link rel="stylesheet" id="dev-seo-utility-plugin-css" href="<?= $theme_asset2 ?>/css/new_page/dev-seo-utility-plugin.min.css?ver=1.0.0" media="all">
		<link rel="stylesheet" id="dashicons-css" href="<?= $theme_asset2 ?>/css/new_page/dashicons.min.css?ver=cbe793387a0c1f6ebe4728ab2c293ec8" media="all">
		<link rel="stylesheet" id="post-views-counter-frontend-css" href="<?= $theme_asset2 ?>/css/new_page/frontend.css?ver=1.3.11" media="all">
		<link rel="stylesheet" id="seo-auto-content-css" href="<?= $theme_asset2 ?>/css/new_page/seo-auto-content.min.css?ver=1.0.0" media="all">
		<link rel="stylesheet" id="toc-screen-css" href="<?= $theme_asset2 ?>/css/new_page/screen.min.css?ver=2106" media="all">
		<link rel="stylesheet" id="generate-style-grid-css" href="<?= $theme_asset2 ?>/css/new_page/unsemantic-grid.min.css?ver=3.1.3" media="all">
		<link rel="stylesheet" id="generate-style-css" href="<?= $theme_asset2 ?>/css/new_page/style.min.css?ver=3.1.3" media="all">
		<style id="generate-style-inline-css">

		</style>
		<link rel="stylesheet" id="generate-mobile-style-css" href="<?= $theme_asset2 ?>/css/new_page/mobile.min.css?ver=3.1.3" media="all">
		<link rel="stylesheet" id="generate-font-icons-css" href="<?= $theme_asset2 ?>/css/new_page/font-icons.min.css?ver=3.1.3" media="all">

		<link rel="dns-prefetch" href="//stackpath.bootstrapcdn.com">
		<link rel="dns-prefetch" href="//fonts.googleapis.com">
		<link href="//fonts.gstatic.com" crossorigin="" rel="preconnect">
		<link rel="alternate" type="application/rss+xml" title="ETLOS » ฟีด" href="//etlots.com/feed/">
		<link rel="alternate" type="application/rss+xml" title="ETLOS » ฟีดความเห็น" href="//etlots.com/comments/feed/">
		<link rel="stylesheet" id="bootstrap-style-css" href="//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css?ver=cbe793387a0c1f6ebe4728ab2c293ec8" media="all">
		<link rel="stylesheet" id="pa-frontend-css" href="<?= $theme_asset2 ?>/css/new_page/pa-frontend-fe1479cea.min.css?ver=1664557913" media="all">
		<link rel="stylesheet" id="wp-block-library-css" href="<?= $theme_asset2 ?>/css/new_page/style.min.css?ver=cbe793387a0c1f6ebe4728ab2c293ec8" media="all">

		<link rel="stylesheet" id="dev-seo-utility-plugin-css" href="<?= $theme_asset2 ?>/css/new_page/dev-seo-utility-plugin.min.css?ver=1.0.0" media="all">
		<link rel="stylesheet" id="dashicons-css" href="<?= $theme_asset2 ?>/css/new_page/dashicons.min.css?ver=cbe793387a0c1f6ebe4728ab2c293ec8" media="all">
		<link rel="stylesheet" id="post-views-counter-frontend-css" href="<?= $theme_asset2 ?>/css/new_page/frontend.css?ver=1.3.11" media="all">
		<link rel="stylesheet" id="seo-auto-content-css" href="<?= $theme_asset2 ?>/css/new_page/seo-auto-content.min.css?ver=1.0.0" media="all">
		<link rel="stylesheet" id="toc-screen-css" href="<?= $theme_asset2 ?>/css/new_page/screen.min.css?ver=2106" media="all">
		<link rel="stylesheet" id="generate-style-grid-css" href="<?= $theme_asset2 ?>/css/new_page/unsemantic-grid.min.css?ver=3.1.3" media="all">
		<link rel="stylesheet" id="generate-style-css" href="<?= $theme_asset2 ?>/css/new_page/style.min.css?ver=3.1.3" media="all">
		<style id="generate-style-inline-css">

		</style>
		<link rel="stylesheet" id="generate-mobile-style-css" href="<?= $theme_asset2 ?>/css/new_page/mobile.min.css?ver=3.1.3" media="all">
		<link rel="stylesheet" id="generate-font-icons-css" href="<?= $theme_asset2 ?>/css/new_page/font-icons.min.css?ver=3.1.3" media="all">

		<link rel="stylesheet" id="generate-child-css" href="<?= $theme_asset2 ?>/css/new_page/style.css?ver=1598952312" media="all">
		<link rel="stylesheet" id="elementor-icons-css" href="<?= $theme_asset2 ?>/css/new_page/elementor-icons.min.css?ver=5.16.0" media="all">
		<link rel="stylesheet" id="elementor-frontend-legacy-css" href="<?= $theme_asset2 ?>/css/new_page/frontend-legacy.min.css?ver=3.7.3" media="all">
		<link rel="stylesheet" id="elementor-frontend-css" href="<?= $theme_asset2 ?>/css/new_page/frontend.min.css?ver=3.7.3" media="all">
		<link rel="stylesheet" id="elementor-post-1232-css" href="<?= $theme_asset2 ?>/css/new_page/post-1232.css?ver=1663587501" media="all">
		<link rel="stylesheet" id="elementor-pro-css" href="<?= $theme_asset2 ?>/css/new_page/frontend.min.css?ver=3.3.5" media="all">
		<link rel="stylesheet" id="elementor-post-7343-css" href="<?= $theme_asset2 ?>/css/new_page/post-7343.css?ver=1663587502" media="all">
		<link rel="stylesheet" id="popup-maker-site-css" href="<?= $theme_asset2 ?>/css/new_page/pum-site.min.css?ver=1.16.7" media="all">
		<style id="popup-maker-site-inline-css">

		</style>
		<link rel="stylesheet" id="generate-sticky-css" href="<?= $theme_asset2 ?>/css/new_page/sticky.min.css?ver=2.1.1" media="all">
		<link rel="stylesheet" id="generate-offside-css" href="<?= $theme_asset2 ?>/css/new_page/offside.min.css?ver=2.1.1" media="all">
		<style id="generate-offside-inline-css">

		</style>
		<link rel="stylesheet" id="gp-premium-icons-css" href="<?= $theme_asset2 ?>/css/new_page/icons.min.css?ver=2.1.1" media="all">
		<link rel="stylesheet" id="generate-navigation-branding-css" href="<?= $theme_asset2 ?>/css/new_page/navigation-branding.min.css?ver=2.1.1" media="all">
		<style id="generate-navigation-branding-inline-css">

		</style>
		<link rel="stylesheet" id="ruay-style-css" href="<?= $theme_asset2 ?>/css/new_page/ruay-style.min.css?ver=2022SepFri171153" media="all">
		<link rel="stylesheet" id="elementor-icons-shared-0-css" href="<?= $theme_asset2 ?>/css/new_page/fontawesome.min.css?ver=5.15.3" media="all">
		<link rel="stylesheet" id="elementor-icons-fa-solid-css" href="<?= $theme_asset2 ?>/css/new_page/solid.min.css?ver=5.15.3" media="all">
		<script src="<?= $theme_asset2 ?>/js/new_page/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
		<script src="<?= $theme_asset2 ?>/js/new_page/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
		<script src="<?= $theme_asset2 ?>/js/new_page/dev-seo-utility-plugin-public.js?ver=1.0.0" id="dev-seo-utility-plugin-js"></script>
		<script src="<?= $theme_asset2 ?>/js/new_page/seo-auto-content-public.js?ver=1.0.0" id="seo-auto-content-js"></script>
		<link rel="stylesheet" id="generate-child-css" href="<?= $theme_asset2 ?>/css/new_page/style.css?ver=1598952312" media="all">
		<link rel="stylesheet" id="elementor-icons-css" href="<?= $theme_asset2 ?>/css/new_page/elementor-icons.min.css?ver=5.16.0" media="all">
		<link rel="stylesheet" id="elementor-frontend-legacy-css" href="<?= $theme_asset2 ?>/css/new_page/frontend-legacy.min.css?ver=3.7.3" media="all">
		<link rel="stylesheet" id="elementor-frontend-css" href="<?= $theme_asset2 ?>/css/new_page/frontend.min.css?ver=3.7.3" media="all">
		<link rel="stylesheet" id="elementor-post-1232-css" href="<?= $theme_asset2 ?>/css/new_page/post-1232.css?ver=1663587501" media="all">
		<link rel="stylesheet" id="elementor-pro-css" href="<?= $theme_asset2 ?>/css/new_page/frontend.min.css?ver=3.3.5" media="all">
		<link rel="stylesheet" id="premium-pro-css" href="<?= $theme_asset2 ?>/css/new_page/premium-addons.min.css?ver=2.5.3" media="all">
		<link rel="stylesheet" id="elementor-post-7343-css" href="<?= $theme_asset2 ?>/css/new_page/post-7343.css?ver=1663587502" media="all">
		<link rel="stylesheet" id="popup-maker-site-css" href="<?= $theme_asset2 ?>/css/new_page/pum-site.min.css?ver=1.16.7" media="all">
		<style id="popup-maker-site-inline-css">

		</style>
		<link rel="stylesheet" id="generate-sticky-css" href="<?= $theme_asset2 ?>/css/new_page/sticky.min.css?ver=2.1.1" media="all">
		<link rel="stylesheet" id="generate-offside-css" href="<?= $theme_asset2 ?>/css/new_page/offside.min.css?ver=2.1.1" media="all">
		<style id="generate-offside-inline-css">

		</style>
		<link rel="stylesheet" id="gp-premium-icons-css" href="<?= $theme_asset2 ?>/css/new_page/icons.min.css?ver=2.1.1" media="all">
		<link rel="stylesheet" id="generate-navigation-branding-css" href="<?= $theme_asset2 ?>/css/new_page/navigation-branding.min.css?ver=2.1.1" media="all">
		<style id="generate-navigation-branding-inline-css">

		</style>
		<link rel="stylesheet" id="elementor-icons-shared-0-css" href="<?= $theme_asset2 ?>/css/new_page/fontawesome.min.css?ver=5.15.3" media="all">
		<link rel="stylesheet" id="elementor-icons-fa-solid-css" href="<?= $theme_asset2 ?>/css/new_page/solid.min.css?ver=5.15.3" media="all">
		<script src="<?= $theme_asset2 ?>/js/new_page/jquery.min.js?ver=3.6.0" id="jquery-core-js"></script>
		<script src="<?= $theme_asset2 ?>/js/new_page/jquery-migrate.min.js?ver=3.3.2" id="jquery-migrate-js"></script>
		<script src="<?= $theme_asset2 ?>/js/new_page/dev-seo-utility-plugin-public.js?ver=1.0.0" id="dev-seo-utility-plugin-js"></script>
		<script src="<?= $theme_asset2 ?>/js/new_page/seo-auto-content-public.js?ver=1.0.0" id="seo-auto-content-js"></script>
		<script>
			document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
		</script>
		<style>

		</style>
		<meta name="google-site-verification" content="RII5CYaYo30lKgLkuYDNJMW0-wj4PgxKMRaadZZH_mk">
		<link rel="preload" href="<?= $theme_asset2 ?>/webfonts/new_page/fa-solid-900.woff2" as="font" crossorigin="">
		<link rel="preload" href="<?= $theme_asset2 ?>/webfonts/new_page/generatepress.woff2" as="font" crossorigin="">
		<link rel="preload" href="<?= $theme_asset2 ?>/webfonts/new_page/fa-brands-400.woff2" as="font" crossorigin="">
		<link rel="preload" href="<?= $theme_asset2 ?>/webfonts/new_page/gp-premium.ttf">
		<link rel="icon" href="<?= $theme_asset2 ?>/img/new_page/logo.png" sizes="32x32">
		<link rel="icon" href="<?= $theme_asset2 ?>/img/new_page/logo.png" sizes="192x192">
		<link rel="apple-touch-icon" href="<?= $theme_asset2 ?>/img/new_page/logo.png">
		<meta name="msapplication-TileImage" content="<?= $theme_asset2 ?>/img/new_page/logo.png">
		<style id="wp-custom-css">

		</style>
		<style data-cursor="cursor"></style>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<?php else : ?>
		<meta property="og:title" content="HENGLOTTO">
		<meta property="og:image" content="<?= $theme_asset ?>/img/icon-384x384.png">
		<link rel="icon" href="<?= $theme_asset ?>/img/icon64_64.png" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="128x128" href="<?= $theme_asset ?>/img/icon-128x128.png">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/toastr.css" as="style" onload="this.rel='stylesheet'">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/bootstrap.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/all.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/bs-stepper.css">

		<link rel="stylesheet" href="<?= $theme_asset ?>/css/odometer-theme-default.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/flag-icon.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/sn-icon.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/stepper.css">

		<link rel="stylesheet" href="<?= $theme_asset ?>/css/jquery.mCustomScrollbar.min.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/style.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/pageup.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/jquery.marquee.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/sweetalert2.min.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/style2.css">

		<link rel="stylesheet" href="<?= $theme_asset ?>/css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/tempusdominus-bootstrap-4.css">
		<link rel="preconnect" href="//fonts.googleapis.com">
		<link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
		<link href="//fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<link rel="stylesheet" href="assets/css/superwheeladmin.css"> <!-- superWheel -->
<script type="text/javascript">
eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('(3(){(3 a(){8{(3 b(2){7((\'\'+(2/2)).6!==1||2%5===0){(3(){}).9(\'4\')()}c{4}b(++2)})(0)}d(e){g(a,f)}})()})();',17,17,'||i|function|debugger|20|length|if|try|constructor|||else|catch||5000|setTimeout'.split('|'),0,{}))
</script>	<?php endif; ?>


</head>

<body class="disable-dbl-tap-zoom">
	<!-- No login -->
	<?php if (!$user) : ?>

		<?php include viewPath('nolog_newheng'); ?>
	<?php else : ?>
		<?php include viewPath('login_heng'); ?>
	<?php endif; ?>


</body>

</html>