<?php
$user = $this->session->userdata('user');
$setting = $this->admin_model->result_setting_game();
$seting    = $this->admin_model->result_setting();
$info = $this->user_model->getdata_user($user);
$domain_api = $seting['domain_api'];

if ($user) {
	$ufa = $this->user_model->user_ufa($user);
	if ($ufa['username'] != '') {

		$user_ufa =  $ufa['username'];
		$pass_ufa =  $ufa['password'];
	}
}

$url = explode('?',$game_url);
$rr = explode("&",$url[1]);
$ter = explode("/Public",$url[0]);
$ter2 = explode("//",$ter[0]);

$arrr = ['www.ufa7777.com','www.star5566.com','www.777beer.com','www.u7now.com','www.ufabet.com'];
$url2 = $arrr[array_rand($arrr)];
$last = str_replace($ter2[1],$url2,$url[0]);
// echo '<pre>';
// print_r($last);die;
?>

<form action="<?=$last?>" method="get" id="form1">
<?php foreach ($rr as $key => $value):?>
<input type="hidden" name="<?=explode("=",$value)[0]?>" value="<?=explode("=",$value)[1]?>">
<?php endforeach; ?>
</form>


<?php 
// echo '<pre>';
// print_r($url);die;
?>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
	$(document).ready(function() {
		let url_backend = '<?=$domain_api?>';
		$.ajax({
			url: url_backend + '/ApiExchangeWalletToGame',
			method: 'post',
			data: {
				id: <?= $info["id"] ?>,
				userUFA: '<?= $user_ufa ?>'
			},
			success: function(data) {}
		})
		setInterval(function() {
			$("#form1").submit();
		}, 700);
	});
</script>
