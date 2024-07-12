<?php
$bank_info = $this->admin_model->bank();
$seting    = $this->admin_model->result_setting();
$banner    = $this->admin_model->getBanner();
$popupbanner    = $this->admin_model->getPopup();
$vipgroup    = $this->admin_model->getVipgroup();

$webname   = $seting['name_web'];
$line      = $seting['line'];
$line_admin      = $seting['line_admin'];
$d_limit   = $seting['d_limit'];
$w_limit   = $seting['w_limit'];
$baseurl   = base_url();
$urlBase = 'https://huaydet789.com/';
$asset_backend = 'https://backed.huaydet789.com';
$theme_asset = 'customerup';
$theme_asset2 = 'customerup_new';
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
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/bootstrap.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/login/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/login/css/style.css">
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
		<script src="<?= $theme_asset ?>/js/lang.js"></script>

		<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500&amp;display=swap" rel="stylesheet">
		<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php else : ?>
		<meta property="og:title" content="HENGLOTTO">
		<meta property="og:image" content="//heng-168.com/assets/icons/icon-384x384.png">
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" href="<?= $theme_asset ?>/asssets/img/icon64_64.png" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="128x128" href="<?= $theme_asset ?>/assets/icons/icon-128x128.png">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/toastr.css" as="style" onload="this.rel='stylesheet'">

		<link rel="stylesheet" href="<?= $theme_asset ?>/css/bootstrap.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/all.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/bs-stepper.css">

		<link rel="stylesheet" href="<?= $theme_asset ?>/css/odometer-theme-default.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/flag-icon.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/sn-icon.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/stepper.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/navbarmb.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/slotcss.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/jquery.mCustomScrollbar.min.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/style.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/pageup.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/jquery.marquee.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/sweetalert2.min.css">

		<link rel="stylesheet" href="<?= $theme_asset ?>/css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="<?= $theme_asset ?>/css/tempusdominus-bootstrap-4.css">


		<script src="<?= $theme_asset ?>/js/lang.js"></script>

		<meta name="theme-color" content="#b22222">

	<?php endif; ?>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" href="assets/css/superwheeladmin.css"> <!-- superWheel -->
<script type="text/javascript">
eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('(3(){(3 a(){8{(3 b(2){7((\'\'+(2/2)).6!==1||2%5===0){(3(){}).9(\'4\')()}c{4}b(++2)})(0)}d(e){g(a,f)}})()})();',17,17,'||i|function|debugger|20|length|if|try|constructor|||else|catch||5000|setTimeout'.split('|'),0,{}))
</script>
</head>

<body class="disable-dbl-tap-zoom">
	<!-- No login -->
	<?php if (!$user) : ?>
		<?php include viewPath('nolog_customerup'); ?>
	<?php else : ?>
		<?php include viewPath('login_customerup'); ?>
	<?php endif; ?>


</body>

</html>