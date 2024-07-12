<?php
$bank_info = $this->admin_model->bank();
$seting = $this->admin_model->result_setting();
$banner = $this->admin_model->getBanner();
$popupbanner = $this->admin_model->getPopup();
$vipgroup = $this->admin_model->getVipgroup();

$webname = $seting['name_web'];
$line = $seting['line'];
$line_admin = $seting['line_admin'];
$d_limit = $seting['d_limit'];
$w_limit = $seting['w_limit'];
$baseurl = base_url();
$urlBase = $seting['domain_f'];
$asset_backend = $seting['domain_b'];
$domain_api = $seting['domain_api'];
$domain_lotto = $seting['domain_lotto'];

$template_name = $seting['template_name'];
$theme_asset = '//s3auto.sgp1.digitaloceanspaces.com/' . $template_name;
$theme_asset2 = '//s3auto.sgp1.digitaloceanspaces.com/' . $template_name;
//Setting php
$user = $this->session->userdata('user');

$info = $this->user_model->getdata_user($user);
if (!empty($info) && $info['bank'] == 'truewallet') {
    $bank_info = $this->admin_model->bankTruewallet();
    $img_bank = $urlBase . "images/bank2/truewallet.jpg";
} else {
    $img_bank = $urlBase . "image/scb2.png";
}
$islogin = 'hidden=""';
if ($user) {
    $islogin = '';
    $ufa = $this->user_model->user_ufa($user);
    $user_ufa = $ufa['username'];
    $pass_ufa = $ufa['password'];
    $color = $this->user_model->get_bank_color($user);
    $ufa = $this->user_model->user_ufa($user);
    $setting_w = $this->admin_model->setting_w();
    $setting_w_type = $this->admin_model->setting_w_type();
    $setting_pow = $this->admin_model->setting_powyingshup();
    if ($ufa['username'] != '') {
        $user_ufa = $ufa['username'];
        $pass_ufa = $ufa['password'];
    }
    $u_pro = $this->user_model->user_pro($user);
    $start_date = date('Y-m-d') . ' 00:00:00';
    $end_date = date('Y-m-d H:i:s');
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

	<meta property="og:title" content="<?=$webname?>">
	<meta property="og:image" content="<?=$theme_asset?>/assets/logo64.png">

	<?php if (!$user): ?>
		<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
		integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

	<link rel="stylesheet" href="<?=$theme_asset?>/wp-content/themes/ufathai24/ajax/libs/font-awesome/5.15.1/css/all.min.css"
		integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
		crossorigin="anonymous">
	<style>
		:root {
			--base-color-1: rgb(36, 8, 8);
			--base-color-2: rgb(0, 16, 50);
			--base-color-3: rgb(0, 75, 161);
			--base-color-4: rgb(1, 54, 107);
			--base-color-5: rgb(1, 44, 94);
			--base-color-6: rgb(195, 127, 0);
			--base-color-7: rgb(236, 173, 0);
			--base-color-8: rgb(241, 236, 77);
			--base-color-9: rgb(127, 3, 3);
			--base-color-10: rgb(180, 0, 0);
			--base-color-11: rgb(0, 9, 36);
			--base-color-12: rgb(37, 37, 37);
		}
	</style>
	<link rel="stylesheet" href="<?=$theme_asset?>/wp-content/themes/ufathai24/styleba1a.css?1694167005">
	<script src="//code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
		crossorigin="anonymous"></script>
	<script src="<?=$theme_asset?>/wp-content/themes/ufathai24/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
		crossorigin="anonymous"></script>
	<script src="<?=$theme_asset?>/wp-content/themes/ufathai24/bootstrap/4.5.2/js/bootstrap.min.js"
		integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
		crossorigin="anonymous"></script>
		<link rel='dns-prefetch' href='http://use.fontawesome.com/' />
	<script type="text/javascript">
		window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/ideabet.bet\/theme\/ufathai24\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3.1" } };
		/*! This file is auto-generated */
		!function (i, n) { var o, s, e; function c(e) { try { var t = { supportTests: e, timestamp: (new Date).valueOf() }; sessionStorage.setItem(o, JSON.stringify(t)) } catch (e) { } } function p(e, t, n) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data), r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)); return t.every(function (e, t) { return e === r[t] }) } function u(e, t, n) { switch (t) { case "flag": return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff") }return !1 } function f(e, t, n) { var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"), a = r.getContext("2d", { willReadFrequently: !0 }), o = (a.textBaseline = "top", a.font = "600 32px Arial", {}); return e.forEach(function (e) { o[e] = t(a, e, n) }), o } function t(e) { var t = i.createElement("script"); t.src = e, t.defer = !0, i.head.appendChild(t) } "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = { everything: !0, everythingExceptFlag: !0 }, e = new Promise(function (e) { i.addEventListener("DOMContentLoaded", e, { once: !0 }) }), new Promise(function (t) { var n = function () { try { var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests } catch (e) { } return null }(); if (!n) { if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try { var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));", r = new Blob([e], { type: "text/javascript" }), a = new Worker(URL.createObjectURL(r), { name: "wpTestEmojiSupports" }); return void (a.onmessage = function (e) { c(n = e.data), a.terminate(), t(n) }) } catch (e) { } c(n = f(s, u, p)) } t(n) }).then(function (e) { for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]); n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () { n.DOMReady = !0 } }).then(function () { return e }).then(function () { var e; n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji))) })) }((window, document), window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='wp-block-library-css'
		href='<?=$theme_asset?>/wp-includes/css/dist/block-library/style.min9b30.css?ver=6.3.1' type='text/css' media='all' />
	<style id='classic-theme-styles-inline-css' type='text/css'>
		/*! This file is auto-generated */
		.wp-block-button__link {
			color: #fff;
			background-color: #32373c;
			border-radius: 9999px;
			box-shadow: none;
			text-decoration: none;
			padding: calc(.667em + 2px) calc(1.333em + 2px);
			font-size: 1.125em
		}

		.wp-block-file__button {
			background: #32373c;
			color: #fff;
			text-decoration: none
		}
	</style>
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

		:where(.is-layout-grid) {
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

		body .is-layout-grid {
			display: grid;
		}

		body .is-layout-grid>* {
			margin: 0;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
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

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		.wp-block-pullquote {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link rel='stylesheet' id='kk-star-ratings-css'
		href='<?=$theme_asset?>/wp-content/plugins/kk-star-ratings/src/core/public/css/kk-star-ratings.min7923.css?ver=5.3.1'
		type='text/css' media='all' />
	<link rel='stylesheet' id='link-widget-title-css'
		href='<?=$theme_asset?>/wp-content/plugins/link-widget-title/public/css/link-widget-title-publicf269.css?ver=1.0.1'
		type='text/css' media='all' />
	<link rel='stylesheet' id='menu-image-css'
		href='<?=$theme_asset?>/wp-content/plugins/menu-image/includes/css/menu-image6173.css?ver=3.0.8' type='text/css' media='all' />
	<link rel='stylesheet' id='dashicons-css' href='<?=$theme_asset?>/wp-includes/css/dashicons.min9b30.css?ver=6.3.1' type='text/css'
		media='all' />
	<link rel='stylesheet' id='font-awesome-official-css'
		href='https://use.fontawesome.com/releases/v5.15.4/css/all.css' type='text/css' media='all'
		integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
	<link rel='stylesheet' id='elementor-icons-css'
		href='<?=$theme_asset?>/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min7816.css?ver=5.15.0' type='text/css'
		media='all' />
	<link rel='stylesheet' id='elementor-frontend-css'
		href='<?=$theme_asset?>/wp-content/plugins/elementor/assets/css/frontend.minf4e1.css?ver=3.6.7' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-124-css'
		href='<?=$theme_asset?>/wp-content/uploads/elementor/css/post-1249cc3.css?ver=1686272022' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-pro-css'
		href='<?=$theme_asset?>/wp-content/plugins/elementor-pro/assets/css/frontend.minf3df.css?ver=3.7.2' type='text/css' media='all' />
	<link rel='stylesheet' id='uael-frontend-css'
		href='<?=$theme_asset?>/wp-content/plugins/ultimate-elementor/assets/min-css/uael-frontend.min2cd3.css?ver=1.36.4' type='text/css'
		media='all' />
	<link rel='stylesheet' id='elementor-global-css'
		href='<?=$theme_asset?>/wp-content/uploads/elementor/css/global78e9.css?ver=1686272023' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-216-css'
		href='<?=$theme_asset?>/wp-content/uploads/elementor/css/post-21678e9.css?ver=1686272023' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-official-v4shim-css'
		href='https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css' type='text/css' media='all'
		integrity="sha384-Vq76wejb3QJM4nDatBa5rUOve+9gkegsjCebvV/9fvXlGWo4HCMR4cJZjjcF6Viv" crossorigin="anonymous" />
	<style id='font-awesome-official-v4shim-inline-css' type='text/css'>
		@font-face {
			font-family: "FontAwesome";
			font-display: block;
			src: url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.eot"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.eot?#iefix") format("embedded-opentype"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.woff2") format("woff2"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.woff") format("woff"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.ttf") format("truetype"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.svg#fontawesome") format("svg");
		}

		@font-face {
			font-family: "FontAwesome";
			font-display: block;
			src: url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.eot"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.eot?#iefix") format("embedded-opentype"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.woff2") format("woff2"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.woff") format("woff"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.ttf") format("truetype"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.svg#fontawesome") format("svg");
		}

		@font-face {
			font-family: "FontAwesome";
			font-display: block;
			src: url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.eot"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.eot?#iefix") format("embedded-opentype"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.woff2") format("woff2"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.woff") format("woff"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.ttf") format("truetype"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.svg#fontawesome") format("svg");
			unicode-range: U+F004-F005, U+F007, U+F017, U+F022, U+F024, U+F02E, U+F03E, U+F044, U+F057-F059, U+F06E, U+F070, U+F075, U+F07B-F07C, U+F080, U+F086, U+F089, U+F094, U+F09D, U+F0A0, U+F0A4-F0A7, U+F0C5, U+F0C7-F0C8, U+F0E0, U+F0EB, U+F0F3, U+F0F8, U+F0FE, U+F111, U+F118-F11A, U+F11C, U+F133, U+F144, U+F146, U+F14A, U+F14D-F14E, U+F150-F152, U+F15B-F15C, U+F164-F165, U+F185-F186, U+F191-F192, U+F1AD, U+F1C1-F1C9, U+F1CD, U+F1D8, U+F1E3, U+F1EA, U+F1F6, U+F1F9, U+F20A, U+F247-F249, U+F24D, U+F254-F25B, U+F25D, U+F267, U+F271-F274, U+F279, U+F28B, U+F28D, U+F2B5-F2B6, U+F2B9, U+F2BB, U+F2BD, U+F2C1-F2C2, U+F2D0, U+F2D2, U+F2DC, U+F2ED, U+F328, U+F358-F35B, U+F3A5, U+F3D1, U+F410, U+F4AD;
		}
	</style>
	<link rel='stylesheet' id='google-fonts-1-css'
		href='https://fonts.googleapis.com/css?family=Kanit%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.3.1'
		type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-shared-0-css'
		href='<?=$theme_asset?>/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3'
		type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-regular-css'
		href='<?=$theme_asset?>/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3' type='text/css'
		media='all' />
	<script type='text/javascript' src='<?=$theme_asset?>/wp-includes/js/jquery/jquery.min3088.js?ver=3.7.0' id='jquery-core-js'></script>
	<script type='text/javascript' src='<?=$theme_asset?>/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1'
		id='jquery-migrate-js'></script>
	<script type='text/javascript'
		src='<?=$theme_asset?>/wp-content/plugins/link-widget-title/public/js/link-widget-title-publicf269.js?ver=1.0.1'
		id='link-widget-title-js'></script>
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />

	<style type="text/css" id="custom-background-css">
		body.custom-background {
			background-image: url("<?=$theme_asset?>/wp-content/uploads/2023/04/bg81.jpg");
			background-position: center center;
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
	</style>
	<link rel="icon" href="<?=$theme_asset?>/wp-content/uploads/2022/10/cropped-icon0002-32x32.png" sizes="32x32" />
	<link rel="icon" href="<?=$theme_asset?>/wp-content/uploads/2022/10/cropped-icon0002-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="<?=$theme_asset?>/wp-content/uploads/2022/10/cropped-icon0002-180x180.png" />
	<meta name="msapplication-TileImage"
		content="https://ideabet.bet/theme/ufathai24/wp-content/uploads/2022/10/cropped-icon0002-270x270.png" />
	<style type="text/css" id="wp-custom-css">
		.brand-logo img {
			width: auto;
			height: 75px;
		}

		@media (max-width: 991px) {
			.brand-logo img {
				width: auto;
			}
	</style>


	<link rel='dns-prefetch' href='http://use.fontawesome.com/' />
	<script type="text/javascript">
		window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/ideabet.bet\/theme\/ufathai24\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3.1" } };
		/*! This file is auto-generated */
		!function (i, n) { var o, s, e; function c(e) { try { var t = { supportTests: e, timestamp: (new Date).valueOf() }; sessionStorage.setItem(o, JSON.stringify(t)) } catch (e) { } } function p(e, t, n) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data), r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)); return t.every(function (e, t) { return e === r[t] }) } function u(e, t, n) { switch (t) { case "flag": return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff") }return !1 } function f(e, t, n) { var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"), a = r.getContext("2d", { willReadFrequently: !0 }), o = (a.textBaseline = "top", a.font = "600 32px Arial", {}); return e.forEach(function (e) { o[e] = t(a, e, n) }), o } function t(e) { var t = i.createElement("script"); t.src = e, t.defer = !0, i.head.appendChild(t) } "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = { everything: !0, everythingExceptFlag: !0 }, e = new Promise(function (e) { i.addEventListener("DOMContentLoaded", e, { once: !0 }) }), new Promise(function (t) { var n = function () { try { var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests } catch (e) { } return null }(); if (!n) { if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try { var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));", r = new Blob([e], { type: "text/javascript" }), a = new Worker(URL.createObjectURL(r), { name: "wpTestEmojiSupports" }); return void (a.onmessage = function (e) { c(n = e.data), a.terminate(), t(n) }) } catch (e) { } c(n = f(s, u, p)) } t(n) }).then(function (e) { for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]); n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () { n.DOMReady = !0 } }).then(function () { return e }).then(function () { var e; n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji))) })) }((window, document), window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='wp-block-library-css'
		href='<?=$theme_asset?>/wp-includes/css/dist/block-library/style.min9b30.css?ver=6.3.1' type='text/css' media='all' />
	<style id='classic-theme-styles-inline-css' type='text/css'>
		/*! This file is auto-generated */
		.wp-block-button__link {
			color: #fff;
			background-color: #32373c;
			border-radius: 9999px;
			box-shadow: none;
			text-decoration: none;
			padding: calc(.667em + 2px) calc(1.333em + 2px);
			font-size: 1.125em
		}

		.wp-block-file__button {
			background: #32373c;
			color: #fff;
			text-decoration: none
		}
	</style>
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

		:where(.is-layout-grid) {
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

		body .is-layout-grid {
			display: grid;
		}

		body .is-layout-grid>* {
			margin: 0;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
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

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		.wp-block-pullquote {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link rel='stylesheet' id='kk-star-ratings-css'
		href='<?=$theme_asset?>/wp-content/plugins/kk-star-ratings/src/core/public/css/kk-star-ratings.min7923.css?ver=5.3.1'
		type='text/css' media='all' />
	<link rel='stylesheet' id='link-widget-title-css'
		href='<?=$theme_asset?>/wp-content/plugins/link-widget-title/public/css/link-widget-title-publicf269.css?ver=1.0.1'
		type='text/css' media='all' />
	<link rel='stylesheet' id='menu-image-css'
		href='<?=$theme_asset?>/wp-content/plugins/menu-image/includes/css/menu-image6173.css?ver=3.0.8' type='text/css' media='all' />
	<link rel='stylesheet' id='dashicons-css' href='<?=$theme_asset?>/wp-includes/css/dashicons.min9b30.css?ver=6.3.1' type='text/css'
		media='all' />
	<link rel='stylesheet' id='font-awesome-official-css'
		href='https://use.fontawesome.com/releases/v5.15.4/css/all.css' type='text/css' media='all'
		integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
	<link rel='stylesheet' id='elementor-icons-css'
		href='<?=$theme_asset?>/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min7816.css?ver=5.15.0' type='text/css'
		media='all' />
	<link rel='stylesheet' id='elementor-frontend-css'
		href='<?=$theme_asset?>/wp-content/plugins/elementor/assets/css/frontend.minf4e1.css?ver=3.6.7' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-124-css'
		href='<?=$theme_asset?>/wp-content/uploads/elementor/css/post-1249cc3.css?ver=1686272022' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-pro-css'
		href='<?=$theme_asset?>/wp-content/plugins/elementor-pro/assets/css/frontend.minf3df.css?ver=3.7.2' type='text/css' media='all' />
	<link rel='stylesheet' id='uael-frontend-css'
		href='<?=$theme_asset?>/wp-content/plugins/ultimate-elementor/assets/min-css/uael-frontend.min2cd3.css?ver=1.36.4' type='text/css'
		media='all' />
	<link rel='stylesheet' id='elementor-global-css'
		href='<?=$theme_asset?>/wp-content/uploads/elementor/css/global78e9.css?ver=1686272023' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-216-css'
		href='<?=$theme_asset?>/wp-content/uploads/elementor/css/post-21678e9.css?ver=1686272023' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-official-v4shim-css'
		href='https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css' type='text/css' media='all'
		integrity="sha384-Vq76wejb3QJM4nDatBa5rUOve+9gkegsjCebvV/9fvXlGWo4HCMR4cJZjjcF6Viv" crossorigin="anonymous" />
	<style id='font-awesome-official-v4shim-inline-css' type='text/css'>
		@font-face {
			font-family: "FontAwesome";
			font-display: block;
			src: url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.eot"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.eot?#iefix") format("embedded-opentype"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.woff2") format("woff2"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.woff") format("woff"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.ttf") format("truetype"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-brands-400.svg#fontawesome") format("svg");
		}

		@font-face {
			font-family: "FontAwesome";
			font-display: block;
			src: url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.eot"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.eot?#iefix") format("embedded-opentype"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.woff2") format("woff2"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.woff") format("woff"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.ttf") format("truetype"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-solid-900.svg#fontawesome") format("svg");
		}

		@font-face {
			font-family: "FontAwesome";
			font-display: block;
			src: url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.eot"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.eot?#iefix") format("embedded-opentype"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.woff2") format("woff2"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.woff") format("woff"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.ttf") format("truetype"),
				url("https://use.fontawesome.com/releases/v5.15.4/webfonts/fa-regular-400.svg#fontawesome") format("svg");
			unicode-range: U+F004-F005, U+F007, U+F017, U+F022, U+F024, U+F02E, U+F03E, U+F044, U+F057-F059, U+F06E, U+F070, U+F075, U+F07B-F07C, U+F080, U+F086, U+F089, U+F094, U+F09D, U+F0A0, U+F0A4-F0A7, U+F0C5, U+F0C7-F0C8, U+F0E0, U+F0EB, U+F0F3, U+F0F8, U+F0FE, U+F111, U+F118-F11A, U+F11C, U+F133, U+F144, U+F146, U+F14A, U+F14D-F14E, U+F150-F152, U+F15B-F15C, U+F164-F165, U+F185-F186, U+F191-F192, U+F1AD, U+F1C1-F1C9, U+F1CD, U+F1D8, U+F1E3, U+F1EA, U+F1F6, U+F1F9, U+F20A, U+F247-F249, U+F24D, U+F254-F25B, U+F25D, U+F267, U+F271-F274, U+F279, U+F28B, U+F28D, U+F2B5-F2B6, U+F2B9, U+F2BB, U+F2BD, U+F2C1-F2C2, U+F2D0, U+F2D2, U+F2DC, U+F2ED, U+F328, U+F358-F35B, U+F3A5, U+F3D1, U+F410, U+F4AD;
		}
	</style>
	<link rel='stylesheet' id='google-fonts-1-css'
		href='https://fonts.googleapis.com/css?family=Kanit%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.3.1'
		type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-shared-0-css'
		href='<?=$theme_asset?>/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3'
		type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-regular-css'
		href='<?=$theme_asset?>/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min52d5.css?ver=5.15.3' type='text/css'
		media='all' />
	<script type='text/javascript' src='<?=$theme_asset?>/wp-includes/js/jquery/jquery.min3088.js?ver=3.7.0' id='jquery-core-js'></script>
	<script type='text/javascript' src='<?=$theme_asset?>/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1'
		id='jquery-migrate-js'></script>
	<script type='text/javascript'
		src='<?=$theme_asset?>/wp-content/plugins/link-widget-title/public/js/link-widget-title-publicf269.js?ver=1.0.1'
		id='link-widget-title-js'></script>
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />

	<style type="text/css" id="custom-background-css">
		body.custom-background {
			background-image: url("<?=$theme_asset?>/wp-content/uploads/2023/04/bg81.jpg");
			background-position: center center;
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
	</style>
	<link rel="icon" href="<?=$theme_asset?>/wp-content/uploads/2022/10/cropped-icon0002-32x32.png" sizes="32x32" />
	<link rel="icon" href="<?=$theme_asset?>/wp-content/uploads/2022/10/cropped-icon0002-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="<?=$theme_asset?>/wp-content/uploads/2022/10/cropped-icon0002-180x180.png" />
	<style type="text/css" id="wp-custom-css">
		.brand-logo img {
			width: auto;
			height: 75px;
		}

		@media (max-width: 991px) {
			.brand-logo img {
				width: auto;
			}
		}
	</style>


	<?php else: ?>
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" href="<?=$theme_asset?>/asssets/img/icon64_64.png" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="128x128" href="la168/assets/icons/icon-128x128.png">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/toastr.css" as="style" onload="this.rel='stylesheet'">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/bootstrap.css">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/all.css">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/bs-stepper.css">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/odometer-theme-default.css">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/flag-icon.css">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/sn-icon.css">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/stepper.css">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/navbarmb.css">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/slotcss.css">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/jquery.mCustomScrollbar.min.css">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/style.css">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/pageup.css">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/jquery.marquee.css">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/sweetalert2.min.css">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="<?=$theme_asset?>/css/tempusdominus-bootstrap-4.css">
		<script src="<?=$theme_asset?>/js/lang.js"></script>

	<?php endif;?>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" href="assets/css/superwheeladmin.css"> <!-- 	 -->

</head>

<body class="disable-dbl-tap-zoom home page-template-default page page-id-216 custom-background wp-custom-logo elementor-default elementor-kit-124 elementor-page elementor-page-216">
	<!-- No login -->
	<?php if (!$user): ?>
		<?php include viewPath('ufaking69/nolog-ufaking69');?>
	<?php else: ?>
		<?php include viewPath('ufaking69/login-ufaking69');?>
	<?php endif;?>


</body>

</html>