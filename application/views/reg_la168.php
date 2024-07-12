<?php
$theme_asset = 'heng168';
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<base href="/">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="icon" href="<?= $theme_asset ?>/img/icon64_64.png" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="128x128" href="assets/icons/icon-128x128.png">
	<link rel="stylesheet" href="<?= $theme_asset ?>/css/toastr.css" as="style" onload="this.rel='stylesheet'">

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

	<link rel="stylesheet" href="<?= $theme_asset ?>/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="<?= $theme_asset ?>/css/tempusdominus-bootstrap-4.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" href="css/jquery.loadingModal.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-MV14S1YJ89"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		// gtag('config', 'G-MV14S1YJ89');
	</script>

	<style type="text/css">
		@keyframes tawkMaxOpen {
			0% {
				opacity: 0;
				transform: translate(0, 30px);
				;
			}

			to {
				opacity: 1;
				transform: translate(0, 0px);
			}
		}

		@-moz-keyframes tawkMaxOpen {
			0% {
				opacity: 0;
				transform: translate(0, 30px);
				;
			}

			to {
				opacity: 1;
				transform: translate(0, 0px);
			}
		}

		@-webkit-keyframes tawkMaxOpen {
			0% {
				opacity: 0;
				transform: translate(0, 30px);
				;
			}

			to {
				opacity: 1;
				transform: translate(0, 0px);
			}
		}

		#m8ffohfaupp1660036306239.open {
			animation: tawkMaxOpen .25s ease !important;
		}
	</style>
</head>

<body class="disable-dbl-tap-zoom">
	<app-root _nghost-qbu-c187="" ng-version="9.1.13">
		<div _ngcontent-qbu-c187="" id="app" style="min-height: calc(100% - 60px); overflow: hidden;">
			<div _ngcontent-qbu-c187="" class="fixed-bg"></div>
			<nav _ngcontent-qbu-c187="" id="sidebar" hidden="">
				<div _ngcontent-qbu-c187="" id="dismiss"><i _ngcontent-qbu-c187="" class="fas fa-backspace fa-flip-horizontal"></i></div>
				<div _ngcontent-qbu-c187="" class="sidebar-header">
					<div _ngcontent-qbu-c187="" class="align-center text-center"><img _ngcontent-qbu-c187="" src="<?= $theme_asset ?>/img/user-128.png" alt="หวยฮานอย" width="110" height="100" onerror="this.src='../../img/user-128.png'" class="rounded-circle"><br _ngcontent-qbu-c187=""><span _ngcontent-qbu-c187="" class="username"></span><br _ngcontent-qbu-c187=""><i _ngcontent-qbu-c187="" class="fas fa-coins"></i><span _ngcontent-qbu-c187="" data-id="credit_balance" class="badge badge-pill badge-danger thb" style="margin-left: 5px;"> ฿</span></div>
				</div>
				<ul _ngcontent-qbu-c187="" class="list-unstyled components">
					<li _ngcontent-qbu-c187=""><a _ngcontent-qbu-c187="" href="#/setting-profile" routerlink="/setting-profile"><i _ngcontent-qbu-c187="" class="fas fa-user-cog"></i>
							ตั้งค่าบัญชีผู้ใช้</a></li>
					<li _ngcontent-qbu-c187=""><a _ngcontent-qbu-c187="" href="#/setting-bank" routerlink="/setting-bank"><i _ngcontent-qbu-c187="" class="fas fa-money-check"></i>
							บัญชีธนาคาร</a></li>
					<li _ngcontent-qbu-c187=""><a _ngcontent-qbu-c187="" href="#/howto" routerlink="/howto"><i _ngcontent-qbu-c187="" class="fas fa-info-circle"></i> วิธีใช้งาน</a></li>
					<li _ngcontent-qbu-c187=""><a _ngcontent-qbu-c187="" href="#" data-toggle="modal" data-target="#Contactbox"><i _ngcontent-qbu-c187="" class="fas fa-handshake"></i>
							ศูนย์ช่วยเหลือ</a></li>
				</ul>
				<ul _ngcontent-qbu-c187="" class="list-unstyled CTAs">
					<li _ngcontent-qbu-c187=""><a _ngcontent-qbu-c187="" href="javascript:void(0);" class="logout"><i _ngcontent-qbu-c187="" class="fas fa-sign-out-alt"></i> ออกจากระบบ </a></li>
				</ul>
			</nav>
			<div _ngcontent-qbu-c187="" class="sticky-top" hidden="">
				<div _ngcontent-qbu-c187="" class="topnavbar">
					<div _ngcontent-qbu-c187="" class="container">
						<div _ngcontent-qbu-c187="" class="d-flex justify-content-between align-items-center">
							<div _ngcontent-qbu-c187="" class="d-flex align-items-center"><a _ngcontent-qbu-c187="" href="/" routerlink="/main" title="HENG168">
									<div _ngcontent-qbu-c187="" class="memberlogo">
									</div>
								</a></div>
							<div _ngcontent-qbu-c187="" class="d-flex flex-row justify-content-between align-items-center">
								<div _ngcontent-qbu-c187="" id="menu-pc" class="d-flex justify-content-between align-items-center pc-view"><a _ngcontent-qbu-c187="" href="#/main" routerlink="/main" data-toggle="tooltip" data-placement="bottom" title="" data-id="lotto" data-original-title="หน้าแรก"><i _ngcontent-qbu-c187="" class="sn-icon sn-icon--home2"></i></a><a _ngcontent-qbu-c187="" href="#/lottery" routerlink="/lottery" data-toggle="tooltip" data-placement="bottom" title="" data-id="lottery" data-original-title="แทงหวย"><i _ngcontent-qbu-c187="" class="fas fa-star"></i></a><a _ngcontent-qbu-c187="" href="#/result-all" routerlink="/result-all" data-toggle="tooltip" data-placement="bottom" title="" data-id="award" data-original-title="ผลรางวัล"><i _ngcontent-qbu-c187="" class="fas fa-award"></i></a><a _ngcontent-qbu-c187="" href="#/deposit" routerlink="/deposit" data-toggle="tooltip" data-placement="bottom" title="" data-id="refill" data-original-title="ฝากเงิน"><i _ngcontent-qbu-c187="" class="fas fa-donate"></i></a>
									<div _ngcontent-qbu-c187="" class="linemenu-x"></div>
								</div>
								<div _ngcontent-qbu-c187="" id="re-credit"><span _ngcontent-qbu-c187="" data-id="credit_balance" class="badge badge-pill badge-light thb"> ฿</span>
								</div><a _ngcontent-qbu-c187="" href="#" data-toggle="modal" data-target="#Contactbox">
									<div _ngcontent-qbu-c187="" class="btn-line"></div>
								</a>
								<div _ngcontent-qbu-c187="" id="sidebarCollapse" class="mobile-view"><img _ngcontent-qbu-c187="" src="<?= $theme_asset ?>/img/user-128.png" alt="หวยฮานอย วันนี้ ออกอะไร" onerror="this.src='../../img/user-128.png'" width="28" height="28" title="บัญชีผู้ใช้" class="rounded-circle ml-1"><i _ngcontent-qbu-c187="" class="fas fa-ellipsis-v" style="margin-left: 5px;"></i>
								</div>
								<div _ngcontent-qbu-c187="" class="dropdown pc-view ml-1">
									<div _ngcontent-qbu-c187="" id="menu-profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle"><img _ngcontent-qbu-c187="" src="<?= $theme_asset ?>/img/user-128.png" alt="หวยฮานอย วันนี้ ออกอะไร" onerror="this.src='../../img/user-128.png'" width="40" height="35" class="rounded-circle"><span _ngcontent-qbu-c187="" id="username" class="ml-1"></span></div>
									<div _ngcontent-qbu-c187="" aria-labelledby="menu-profile" id="menu-profile-dropdown" class="dropdown-menu"><a _ngcontent-qbu-c187="" href="#/setting-profile" routerlink="/setting-profile" class="dropdown-item"><i _ngcontent-qbu-c187="" class="fas fa-user-cog"></i>
											ตั้งค่าบัญชีผู้ใช้ </a><a _ngcontent-qbu-c187="" href="#/setting-bank" routerlink="/setting-bank" class="dropdown-item"><i _ngcontent-qbu-c187="" class="fas fa-money-check"></i> บัญชีธนาคาร </a><a _ngcontent-qbu-c187="" href="#/howto" routerlink="/howto" class="dropdown-item"><i _ngcontent-qbu-c187="" class="fas fa-info-circle"></i> วิธีใช้งาน </a><a _ngcontent-qbu-c187="" href="#" data-toggle="modal" data-target="#Contactbox" class="dropdown-item"><i _ngcontent-qbu-c187="" class="fas fa-handshake"></i> ศูนย์ช่วยเหลือ </a>
										<div _ngcontent-qbu-c187="" class="dropdown-divider"></div><a _ngcontent-qbu-c187="" href="javascript:void(0);" class="dropdown-item"><i _ngcontent-qbu-c187="" class="fas fa-sign-out-alt"></i> ออกจากระบบ </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div _ngcontent-qbu-c187="" class="">
				<div _ngcontent-qbu-c187="" class="container">
					<div _ngcontent-qbu-c187="" style="height: 150px;" class="ng-star-inserted">
						<div _ngcontent-qbu-c187="" class="row v-toolbar--rule">
							<div _ngcontent-qbu-c187="" class="text-left p-2 col pc-view"><strong _ngcontent-qbu-c187="" data-toggle="modal" data-target="#ModalRate" class="d-none d-sm-inline-block" style="cursor: pointer;">อัตราจ่าย</strong><span _ngcontent-qbu-c187="" class="d-none d-sm-inline-block" style="padding: 0px 0.5rem;">|</span><strong _ngcontent-qbu-c187="" data-toggle="modal" data-target="#ModalRule" class="d-none d-sm-inline-block" style="cursor: pointer;">กฏกติกา</strong></div>
							<div _ngcontent-qbu-c187="" class="text-right p-2 col">
								<!---->
							</div>
						</div>

					</div>
					<!---->
					<!---->
				</div>
				<!---->
			</div>
			<div _ngcontent-qbu-c187="" class="footer-slogan mb-2" hidden="">
				<div _ngcontent-qbu-c187="" class="container text-center pa-1 container--fluid">
					<div _ngcontent-qbu-c187="">
						<h1>หวยออนไลน์ HENG-168</h1>
					</div>
					<div _ngcontent-qbu-c187="">
						<p class="mb-0"> แทงหวยออนไลน์ บริการรับแทงหวย หวยรัฐบาล หวยฮานอย หวยหุ้น หวยยี่กี หวยลาว
							หวยมาเลเซีย รวมหวย เว็บใหญ่ เชื่อถือได้ อัตราจ่ายสูง โอนเงินไว ระบบดีที่สุด การันตี
							การเงินมั่นคง พร้อมผลหวย แนวทางหวย สถิติย้อนหลัง อัพเดทรวดเร็ว เจ้าหน้าที่บริการ 24 ชั่วโมง
						</p>
					</div>
				</div>
			</div>
			<div _ngcontent-qbu-c187="" class="container">
				<div _ngcontent-qbu-c187="" id="ModalRule" tabindex="-1" role="dialog" aria-labelledby="ModalRule" aria-hidden="true" class="modal fade">
					<div _ngcontent-qbu-c187="" role="document" class="modal-dialog modal-lg">
						<div _ngcontent-qbu-c187="" class="modal-content" style="border-radius: 10px;">
							<div _ngcontent-qbu-c187="" class="modal-header bg-theme-primary">
								<h5 _ngcontent-qbu-c187="" class="modal-title">กฏและกติกา</h5><button _ngcontent-qbu-c187="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-qbu-c187="" aria-hidden="true">×</span></button>
							</div>
							<div _ngcontent-qbu-c187="" class="modal-body">
								<p _ngcontent-qbu-c187=""><span _ngcontent-qbu-c187="" class="pl-3">ยินดีต้อนรับสู่หวยออนไลน์</span>
									เพื่อให้ท่านทราบถึงสิทธิประโยชน์ของสมาชิกกรุณาอ่านข้อตกลงอย่างละเอียดก่อนที่จะลงทะเบียนสมัครเป็นสมาชิกและใช้บริการ
									<a _ngcontent-qbu-c187="" href="https:">HENG168</a>
									เมื่อสมัครสมาชิกแล้วทางเว็บจะถือว่า สมาชิกได้อ่านและยอมรับ <span _ngcontent-qbu-c187="" class="text-primary">"นโยบายและเงื่อนไขการให้บริการของเว็บไซต์์"</span>
								</p>
								<p _ngcontent-qbu-c187=""><strong _ngcontent-qbu-c187=""><u _ngcontent-qbu-c187="" style="color: #3b5898;">การรักษาและช่วยเหลือการเดิมพันออนไลน์์</u></strong><br _ngcontent-qbu-c187=""></p>
								<ul _ngcontent-qbu-c187="" class="pl-3">
									<li _ngcontent-qbu-c187="">ถ้าสมาชิกหลุดออกจากเว็บไซต์ระหว่างการเดิมพัน
										บัญชีของท่านจะไม่มีผลกระทบต่อผลลัพธ์ของการเดิมพัน </li>
									<li _ngcontent-qbu-c187="">ไม่ต้องวิตกกังวล ถ้าสมาชิกออกจากเว็บไซด์ระหว่างการเดิมพัน
										สมาชิกจะถูกออกจากระบบช่วงเวลาหนึ่ง จากนั้นสมาชิกสามารถเข้าสู่ระบบ <a _ngcontent-qbu-c187="" href="https:">HENG168</a> ได้อีกครั้งตามปกติ</li>
								</ul>
								<p _ngcontent-qbu-c187=""></p>
								<p _ngcontent-qbu-c187=""><strong _ngcontent-qbu-c187=""><u _ngcontent-qbu-c187="" style="color: #3b5898;">การให้ความคุ้มครอง</u></strong><br _ngcontent-qbu-c187=""><a _ngcontent-qbu-c187="" href="https:">HENG168</a>
									ได้มีการจัดเตรียม ระบบที่มีประสิทธิภาพ ความรวดเร็วและการบริการลูกค้าที่เป็นมิตร
									ถ้าหากท่านมีคำถามหรือคำแนะนำใดๆ กรุณาอย่าลังเลใจที่จะโทรศัพท์มาทางฝ่ายบริการลูกค้า
									ซึ่งจะมีให้บริการตลอด 24 ชั่วโมง ทุกวันไม่มีวันหยุด
									และทางเราจะตอบกลับอย่างรวดเร็วที่สุด <a _ngcontent-qbu-c187="" href="https:">HENG168</a>
									ขอรับรองว่าจะรักษาข้อมูลส่วนตัวของท่านไว้เป็นความลับอย่างปลอดภัย </p>
								<p _ngcontent-qbu-c187=""><strong _ngcontent-qbu-c187=""><u _ngcontent-qbu-c187="" style="color: #3b5898;">ข้อตกลงในการเดิมพัน</u></strong><br _ngcontent-qbu-c187=""></p>
								<ul _ngcontent-qbu-c187="" class="pl-3">
									<li _ngcontent-qbu-c187="">เพื่อหลีกเลี่ยงปัญหาต่างๆในขณะที่ใช้งานเว็บไซต์
										สมาชิกกรุณาอ่านกฎกติกาของบริษัทอย่างละเอียดและระมัดระวัง
										เมื่อสมาชิกเข้าสู่หน้าเดิมพันทางบริษัทจะถือว่าท่านได้ยอมรับข้อตกลงของทาง <a _ngcontent-qbu-c187="" href="https:">HENG168</a></li>
									<li _ngcontent-qbu-c187="">การเดิมพันจะต้องอยู่ใน <span _ngcontent-qbu-c187="" class="text-success">"ระยะเวลาที่กำหนด"</span>
										มิฉะนั้นจะถือว่าการเดิมครั้งนั้นเป็น <span _ngcontent-qbu-c187="" class="text-danger">"โมฆะ"</span>
										ถ้าการเดิมพันได้มีการยกเลิกหรือหยุดพักชั่วคราว
										เนื่องจากเหตุผลใดๆก็ตามก่อนการเล่น การเดิมพันครั้งนั้นจะถือว่าเป็น<span _ngcontent-qbu-c187="" class="text-danger">"โมฆะ"</span>และทางบริษัทจะคืนเครดิตให้กับสมาชิก </li>
									<li _ngcontent-qbu-c187="">เป็นความรับผิดชอบของสมาชิกที่จะคอยดูผลลัพธ์
										จากช่องหน้าต่างที่แสดงให้เห็นถึงผลการเดิมพันแพ้หรือชนะ ทางบริษัทจะยึดถือข้อมูล
										<span _ngcontent-qbu-c187="" class="text-primary">"รายละเอียดการวางเดิมพัน"</span> ของสมาชิก
										ในกรณีที่สมาชิกมีความสงสัย และต้องการตรวจสอบข้อมูลในการคำนวณของการเดิมพันนั้นๆ
									</li>
									<li _ngcontent-qbu-c187="">
										ถ้าหากเกิดความผิดพลาดของระบบระหว่างการเดิมพันหรือความผิดพลาดโดยไม่ได้เจตนาของพนักงาน
										ทางบริษัทขอสงวนสิทธ์ที่จะแก้ไขผลลัพธ์ให้ถูกต้อง
										และจะมีการพิมพ์ข้อความที่ได้มีการแก้ไขเผยแพร่ไว้ที่แถบตัววิ่งในหน้าเว็บไซต์
										บริษัทจะไม่มีการแจ้งสมาชิกเป็นการส่วนตัว</li>
									<li _ngcontent-qbu-c187="">
										เป็นความรับชอบของสมาชิกที่จะทำให้แน่ใจว่าชื่อผู้ใช้และรหัสผ่านสำหรับเข้าเว็บไซต์นั้นถูกต้อง
										และกรุณาเปลี่ยนรหัสผ่านของสมาชิกอย่างน้อยเดือนละครั้ง เพื่อความปลอดภัย
										ถ้าหากท่านพบหรือสงสัยว่ามีผู้อื่นได้เข้าไปเล่นในบัญชีของท่านโดยไม่ได้รับอนุญาต
										กรุณาแจ้งตัวแทนของท่านทันทีเพื่อเปลี่ยนรหัสส่วนตัว
										(หากมีการเดิมพันก่อนที่จะเปลี่ยนรหัสเดิมจะถือว่าการเดิมพันนั้นเป็นผล)</li>
									<li _ngcontent-qbu-c187="">ก่อนเริ่มการเดิมพันแต่ละครั้ง
										ท่านสมาชิกควรจะตรวจสอบวงเงินของท่านเสียก่อน ถ้าหากท่านมีข้อสงสัยใดๆ
										เกี่ยวกับวงเงิน กรุณาแจ้งตัวแทนของท่านสมาชิกทันที</li>
									<li _ngcontent-qbu-c187="">ในกรณีที่เหตุการณ์ไม่คาดคิดเกิดขึ้น อย่างเช่น
										ข้อมูลสูญหายเนื่องจากระบบอินเตอร์เน็ตข้อง ทางบริษัทจะมีการประกาศให้รู้ถึงสาเหตุ
										และวิธีการแก้ปัญหา</li>
									<li _ngcontent-qbu-c187="">ชั่วโมงการให้บริการ 24 ชั่วโมง/วัน และไม่มีวันหยุด</li>
								</ul>
								<p _ngcontent-qbu-c187=""></p>
								<p _ngcontent-qbu-c187=""><strong _ngcontent-qbu-c187=""><u _ngcontent-qbu-c187="" style="color: #3b5898;">ระบบการรักษาความปลอดภัย</u></strong><br _ngcontent-qbu-c187=""></p>
								<ul _ngcontent-qbu-c187="" class="pl-3">
									<li _ngcontent-qbu-c187="">ข้อมูลทางด้านบัญชีเพื่อวัตถุประสงค์เฉพาะบุคคล
										ข้อมูลที่ทางสมาชิกให้มาในการเปิดบัญชีจะถูกเก็บเป็นความลับขั้นสูงสุด
										ทางบริษัทจะไม่เผยแพร่ข้อมูลนี้ให้กับบุคคลที่สามหรือองค์กรอื่นๆ ล่วงรู้
										ไม่ว่าจะเป็นบัญชีอีเมล์ หรือข้อมูลอื่นๆ ที่ทางสมาชิกกรอกในใบสมัคร
										ข้อมูลเหล่านี้จะใช้ในจุดมุ่งหมายที่ตั้งใจเอาไว้ให้เท่านั้น เช่น
										การส่งเช็คเงินสดสำหรับผู้ชนะหรือข้อมูลอื่นๆ ตามที่สมาชิกร้องขอ</li>
									<li _ngcontent-qbu-c187=""> ความปลอดภัย
										ทางบริษัทได้ใช้วิธีที่มีประสิทธิภาพมากที่สุดเพื่อทำให้ท่านแน่ใจในความปลอดภัยของข้อมูลของท่าน
										ทางเราจะพยายามให้ดีที่สุดที่จะรักษาความถูกต้องแน่นอน และความลับเฉพาะของข้อมูล
										เพื่อป้องกันไม่ให้ข้อมูลรั่วไหลหรือนำไปใช้อย่างไม่ถูกต้อง ถ้าท่านมีข้อสงสัยใดๆ
										ที่เกี่ยวข้องกับการรักษาความลับ ความปลอดภัยของข้อมูล กรุณาติดต่อฝ่ายบริการลูกค้า
										พวกเรายินดีให้บริการ 24 ชั่วโมง/วัน ทุกวันไม่มีวันหยุด</li>
								</ul>
								<p _ngcontent-qbu-c187=""></p>
								<p _ngcontent-qbu-c187="">บริษัทมีความยินดีเป็นอย่างยิ่งที่ได้รับใช้ท่าน</p>
							</div>
							<div _ngcontent-qbu-c187="" class="modal-footer"><button _ngcontent-qbu-c187="" type="button" data-dismiss="modal" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">ฉันเข้าใจและยอมรับ</button>
							</div>
						</div>
					</div>
				</div>
				<div _ngcontent-qbu-c187="" id="ModalRate" tabindex="-1" role="dialog" aria-labelledby="ModalRate" aria-hidden="true" class="modal fade">
					<div _ngcontent-qbu-c187="" role="document" class="modal-dialog modal-lg">
						<div _ngcontent-qbu-c187="" class="modal-content" style="border-radius: 10px;">
							<div _ngcontent-qbu-c187="" class="modal-header bg-theme-primary">
								<h5 _ngcontent-qbu-c187="" class="modal-title">อัตราการจ่าย</h5><button _ngcontent-qbu-c187="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-qbu-c187="" aria-hidden="true">×</span></button>
							</div>
							<div _ngcontent-qbu-c187="" class="modal-body text-center ng-star-inserted"><img _ngcontent-qbu-c187="" style="max-width: 100%; max-height: 100%; height: inherit !important;" src="#"><br _ngcontent-qbu-c187=""></div>
							<!---->
							<!---->
							<div _ngcontent-qbu-c187="" class="modal-footer"><button _ngcontent-qbu-c187="" type="button" data-dismiss="modal" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">ปิด</button>
							</div>
						</div>
					</div>
				</div>
				<div _ngcontent-qbu-c187="" id="Contactbox" tabindex="-1" role="dialog" aria-labelledby="Contactbox" aria-hidden="true" class="modal fade">
					<div _ngcontent-qbu-c187="" role="document" class="modal-dialog modal-lg">
						<div _ngcontent-qbu-c187="" class="modal-content" style="border-radius: 10px;">
							<div _ngcontent-qbu-c187="" class="modal-header bg-theme-primary">
								<h5 _ngcontent-qbu-c187="" class="modal-title">เลือกช่องทางการติดต่อเรา</h5><button _ngcontent-qbu-c187="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-qbu-c187="" aria-hidden="true">×</span></button>
							</div>
							<div _ngcontent-qbu-c187="" class="modal-body">
								<div _ngcontent-qbu-c187="" class="row ng-star-inserted">
									<div _ngcontent-qbu-c187="" class="col-6 col-sm-6 col-md-6 ng-star-inserted" data-index="0"><a _ngcontent-qbu-c187="" class="btn btn-outline-success btn-block btn-contactbox mb-3" style="margin-bottom: 0;" href="line://ti/p/@168h3"><span _ngcontent-qbu-c187=""><small _ngcontent-qbu-c187="" class="d-flex justify-content-center">ติดต่อผ่านไลน์ &nbsp;
													<!---->
												</small></span><i _ngcontent-qbu-c187="" class="fab fa-line"></i></a>
									</div>
									<!---->
									<div _ngcontent-qbu-c187="" class="col-6 col-sm-6 col-md-6"><a _ngcontent-qbu-c187="" href="#" onclick="Tawk_API.toggle();return false" data-dismiss="modal" class="btn btn-outline-danger btn-block btn-contactbox mb-0"><span _ngcontent-qbu-c187=""><small _ngcontent-qbu-c187="">แชทสดกับพนักงาน</small></span><i _ngcontent-qbu-c187="" class="fa fa-user"></i></a></div>
									<!---->
								</div>
								<!---->
								<!---->
							</div>
							<div _ngcontent-qbu-c187="" class="modal-footer"><button _ngcontent-qbu-c187="" type="button" data-dismiss="modal" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">ปิด</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<app-register _nghost-qbu-c180="" class="ng-star-inserted">
				<div _ngcontent-qbu-c180="" class="container">
					<section _ngcontent-qbu-c180="" id="contentbox" class="h-100 mb-5">
						<div _ngcontent-qbu-c180="" class="bg-theme-dark border border-secondary rounded px-3 py-2 mt-2">
							<div _ngcontent-qbu-c180="" class="row">
								<div _ngcontent-qbu-c180="" class="col-12 col-sm-12 col-md-6"></div>
								<div _ngcontent-qbu-c180="" class="col-12 col-sm-12 col-md-6 text-center text-sm-center text-md-right">
									<h3 _ngcontent-qbu-c180="" class="mt-1 font-weight-light">สมัครสมาชิก</h3>
								</div>
							</div>
						</div>
						<div _ngcontent-qbu-c180="" class="main-banner-top my-2 pc-view"><img _ngcontent-qbu-c180="" src="<?= $theme_asset ?>/img/main-banner-02.jpg" style="max-width: 100%; border-radius: 5px;">
						</div>
						<div _ngcontent-qbu-c180="" class="mobile-view d-flex flex-column my-2"><img _ngcontent-qbu-c180="" src="<?= $theme_asset ?>/img/main-banner-mobile-02.jpg" style="max-width: 100%;"></div>
						<div _ngcontent-qbu-c180="" id="form_phone" class="bg-white border-secondary shadow-sm rounded p-3  mt-2 mb-5">

							<div _ngcontent-qbu-c180="" class="row mb-3">
								<div _ngcontent-qbu-c180="" class="col-12">
									<span _ngcontent-qbu-c180="" class="pc-view d-inline text-danger">*กรุณาใช้เบอร์โทรจริงของท่านในการสมัครเท่านั้น
										เบอร์นี้จะถูกยึดถือเป็นหลักในการทำธุรกรรมและไม่สามารถเปลี่ยนแปลงได้ภายหลัง</span>
								</div>

							</div>
							<div _ngcontent-qbu-c180="" class="row mb-3 mobile-view">
								<div _ngcontent-qbu-c180="" class="col-12"><span _ngcontent-qbu-c180="" class="text-danger">*กรุณาใช้เบอร์โทรจริงของท่านในการสมัครเท่านั้น
										เบอร์นี้จะถูกยึดถือเป็นหลักในการทำธุรกรรมและไม่สามารถเปลี่ยนแปลงได้ภายหลัง</span>
								</div>
							</div>
							<div _ngcontent-qbu-c180="" class="row">
								<div _ngcontent-qbu-c180="" class="col-12 col-sm-12">
									<h6 _ngcontent-qbu-c180="" class="text-dark"><i _ngcontent-qbu-c180="" class="fas fa-mobile-alt"></i> ลงทะเบียนเบอร์โทรศัพท์</h6>
								</div>
								<div _ngcontent-qbu-c180="" class="col-8 col-sm-8 col-md-4"><input _ngcontent-qbu-c180="" type="tel" name="tel" id="phone" pattern="^0[6,8,9][0-9]{8}$" maxlength="10" required="" placeholder="ใส่เบอร์โทรศัพท์" class="form-control telinput ng-pristine ng-invalid ng-touched"></div>

								<div _ngcontent-qbu-c180="" class="col-12 border-bottom my-3"></div>

								<div _ngcontent-gre-c180="" class="col-12 col-sm-12 col-md-2 mb-2 d-flex align-items-center"><b _ngcontent-gre-c180="">รหัสผ่าน</b></div>
								<div _ngcontent-gre-c180="" id="password" class="col-12 col-sm-12 col-md-9 mb-2"><input _ngcontent-gre-c180="" type="password" name="password" id="password_val" placeholder="password" required="" minlength="4" class="form-control ng-pristine ng-invalid ng-touched">
									<!---->
								</div>
								<div _ngcontent-gre-c180="" class="col-12 col-sm-12 col-md-2 mb-2 d-flex align-items-center"><b _ngcontent-gre-c180="">ยืนยันรหัสผ่าน</b></div>
								<div _ngcontent-gre-c180="" id="repassword" class="col-12 col-sm-12 col-md-9 mb-2"><input _ngcontent-gre-c180="" type="password" name="repassword" id="repassword_val" placeholder="กรอก password อีกครั้ง" required="" minlength="4" class="form-control ng-untouched ng-pristine ng-invalid">
									<!---->
								</div>
							</div>

							<div _ngcontent-qbu-c180="" class="col-12 border-bottom my-3"></div>
							<div class="row col-sm-12">
								<div class="col">
									<a class="btn btn-danger btn-block" style="color: white;" href="/"><span>ยกเลิก</span></a>
								</div>

								<div class="col">
									<button class="btn btn-success btn-block" style="color: white;" onclick="next_bank()"><span>ถัดไป</span></button>
								</div>
							</div>
						</div>
						<div _ngcontent-hbb-c133="" id="form_bank" style="display: none;" class="p-2 w-100 bg-light main-content align-self-stretch">
							<div _ngcontent-hbb-c133="" class="bgwhitealpha text-theme-primary shadow-sm rounded p-2 px-2 xtarget col-lotto d-flex flex-row mb-1 pb-0">
								<div _ngcontent-hbb-c133="" class="lotto-title w-100 d-flex justify-content-between">
									<div _ngcontent-hbb-c133="" class="d-inline">
										<h4 _ngcontent-hbb-c133="" class="mr-1 d-inline"><i _ngcontent-hbb-c133="" class="fas fa-folder-plus"></i> เพิ่มบัญชีธนาคาร</h4>
									</div>
									<div _ngcontent-hbb-c133="" class="d-inline">
										<button _ngcontent-hbb-c133="" onclick="checkBankNew()" class="btn btn-theme-primary btn-sm d-flex justify-content-around align-items-center">
											<i _ngcontent-hbb-c133="" class="fas fa-search"></i><span _ngcontent-hbb-c133="">เช็คสถานะบัญชี</span></button>
									</div>
								</div>
							</div>
							<div _ngcontent-hbb-c133="" class="bgwhitealpha text-theme-secondary shadow-sm rounded p-2 px-2 xtarget  d-flex flex-row mb-5 pb-0">
								<div _ngcontent-hbb-c133="" style="display: block;">
									<div _ngcontent-hbb-c133="" class="form-row" style="padding-right: 33px !important;
                                            padding-left: 22px !important;">
										<div _ngcontent-hbb-c133="" class="col-12 col-sm-12 col-md-6" style="padding-right: 33px !important;
                                                padding-left: 22px !important;"><label _ngcontent-hbb-c133=""><i _ngcontent-hbb-c133="" class="fas fa-university"></i> เลือกธนาคาร</label>
											<div _ngcontent-hbb-c133="" class="border rounded mb-2">
												<select _ngcontent-hbb-c133="" id="bank_name" class="form-select form-select-sm mat-select selectpicker form-control ng-tns-c132-1 mat-select-empty" aria-label=".form-select-sm example">
													<option selected value="">โปรดเลือกธนาคาร</option>
													<option value="truewallet">True Wallet</option>
													<option value="scb">ไทยพาณิชย์</option>
													<option value="bbl">กรุงเทพ</option>
													<option value="kbank">กสิกรไทย</option>
													<option value="ktb">กรุงไทย</option>
													<option value="tmb">ทหารไทย</option>
													<option value="bay">กรุงศรีฯ</option>
													<option value="gsb">ออมสิน</option>
													<option value="tbank">ธนชาติ</option>
													<option value="tisco">ทิสโก้</option>
													<option value="uob">ยูโอบี</option>
													<option value="citi">ซิตี้แบงก์</option>
													<option value="deut">ดอยช์แบงก์</option>
													<option value="tcd">ไทยเครดิต</option>
													<option value="lhb">แลนด์แอนด์เฮ้าส์</option>
													<option value="baac">เพื่อการเกษตรและสหกรณ์การเกษตร</option>
												</select>


											</div>
										</div>
										<div _ngcontent-hbb-c133="" class="col-12 col-sm-12 col-md-6 mb-1" style="padding-right: 33px !important;
                                                padding-left: 22px !important;">
											<label _ngcontent-hbb-c133=""><i _ngcontent-hbb-c133="" class="fas fa-clipboard-check"></i>
												เลขที่บัญชี</label><input _ngcontent-hbb-c133="" type="text" id="acc" name="acc" placeholder="ระบุเฉพาะตัวเลข" maxlength="15" class="form-control bankinput ng-untouched ng-pristine ng-valid"><small _ngcontent-hbb-c133="" id="checkacc1"></small>
										</div>
										<div _ngcontent-hbb-c133="" class="col-12 col-sm-12 col-md-6" style="padding-right: 33px !important;
                                                padding-left: 22px !important;">
											<label _ngcontent-hbb-c133=""><i _ngcontent-hbb-c133="" class="fas fa-id-card"></i> ชื่อบัญชี</label>
											<input _ngcontent-hbb-c133="" type="text" id="name" name="name" placeholder="เช็คสถานะบัญชีก่อน" class="form-control ng-untouched ng-pristine ng-valid" disabled>
										</div>
										<div _ngcontent-hbb-c133="" class="col-12 col-sm-12 col-md-6 mb-1" style="padding-right: 33px !important;
                                                padding-left: 22px !important;">
											<label _ngcontent-hbb-c133=""><i _ngcontent-hbb-c133="" class="fas fa-id-card"></i> ไอดีไลน์</label>
											<input _ngcontent-hbb-c133="" type="text" id="idline" name="idline" placeholder="เช็คสถานะบัญชีก่อน" class="form-control ng-untouched ng-pristine ng-valid" disabled>
										</div>
									</div>
								</div>
							</div>
							<div class="row col-sm-12">
								<div class="col">
									<a class="btn btn-danger btn-block" style="color: white;" href="register"><span>กลับหน้าก่อน</span></a>
								</div>

								<div class="col">
									<button class="btn btn-success btn-block" id="btn_register" onclick="register()" style="color: white;" disabled><span>เช็คสถานะบัญชีก่อน</span></ิ>
								</div>
							</div>
						</div>
					</section>
				</div>

			</app-register>

		</div>
		<!---->
		<div _ngcontent-qbu-c187="" class="overlay"></div>
		</div>
		<footer _ngcontent-qbu-c187="" class="page-footer font-small">
			<div _ngcontent-qbu-c187="" class="footer-copyright text-center">
				<div _ngcontent-qbu-c187="" class="rule-footer"><span _ngcontent-qbu-c187="" data-toggle="modal" data-target="#ModalRate" style="cursor: pointer;">อัตราจ่าย</span> | <span _ngcontent-qbu-c187="" data-toggle="modal" data-target="#ModalRule" style="cursor: pointer;">กฏกติกา</span> | <span _ngcontent-qbu-c187="" style="cursor: pointer;" hidden="">สมัครสมาชิก</span><span _ngcontent-qbu-c187="" hidden=""> | </span><span _ngcontent-qbu-c187="" data-toggle="modal" data-target="#Contactbox" style="cursor: pointer;">ศูนย์ช่วยเหลือ</span></div>
				<hr _ngcontent-qbu-c187="" role="separator" aria-orientation="horizontal" class="v-divider theme--dark">
				<div _ngcontent-qbu-c187="" class="lotto-footer" style="font-size: 0.85rem;"><strong _ngcontent-qbu-c187="">SECURE WEBSITE GUARANTEE 100%</strong><br _ngcontent-qbu-c187=""> ©
					COPYRIGHT 2021 HENG168 ALL RIGHTS RESERVED </div>
			</div>
			<div _ngcontent-qbu-c187="" class="mobile-view">
				<div _ngcontent-qbu-c187="" style="height: 50px;" hidden=""></div>
			</div>
		</footer>
	</app-root>
	



	<script src="<?= $theme_asset ?>/js/jquery-3.3.1.min.js"></script>
	<script src="<?= $theme_asset ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?= $theme_asset ?>/js/popper.min.js"></script>
	<script src="<?= $theme_asset ?>/js/bootstrap.min.js"></script>
	<script src="<?= $theme_asset ?>/js/bootstrap-select.min.js"></script>
	<script src="<?= $theme_asset ?>/js/loadingoverlay.min.js"></script>
	<script src="<?= $theme_asset ?>/js/loadingoverlay_progress.min.js"></script>
	<script src="<?= $theme_asset ?>/js/odometer.min.js"></script>
	<script src="<?= $theme_asset ?>/js/bs-stepper.min.js"></script>
	<script src="<?= $theme_asset ?>/js/clipboard.min.js"></script>

	<script src="<?= $theme_asset ?>/js/numeral.min.js"></script>
	<script src="<?= $theme_asset ?>/js/jquery.countdown.min.js"></script>
	<script src="<?= $theme_asset ?>/js/countdown.js"></script>
	<script src="<?= $theme_asset ?>/js/html2canvas-1.0.0-alpha.12.min.js"></script>
	<script src="<?= $theme_asset ?>/js/download2.js"></script>
	<script src="<?= $theme_asset ?>/js/bs-breakpoints.min.js"></script>
	<script src="<?= $theme_asset ?>/js/jquery.marquee.js"></script>
	<script src="<?= $theme_asset ?>/js/signalr.min.js"></script>
	<script src="<?= $theme_asset ?>/js/pusher.min.js"></script>
	<script src="<?= $theme_asset ?>/js/sweetalert2.min.js"></script>
	<script src="<?= $theme_asset ?>/js/cleave.js"></script>

	<script src="<?= $theme_asset ?>/js/moment.min.js"></script>
	<script src="<?= $theme_asset ?>/js/moment-timezone.min.js"></script>
	<script src="<?= $theme_asset ?>/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?= $theme_asset ?>/js/tempusdominus-bootstrap-4.js"></script>
	<script src="js/jquery.loadingModal.js"></script>


	<script>
		$(document).ready(function() {
			// $('#form_bank').hide();
		});

		function showModal() {
			$('body').loadingModal({
				text: 'กำลังทำรายการ...'
			});
			var delay = function(ms) {
				return new Promise(function(r) {
					setTimeout(r, ms)
				})
			};
			var time = 2000;
			delay(time)
		}

		function next_bank() {
			var phone = $("#phone").val();
			var password = $("#password_val").val();
			var repassword = $("#repassword_val").val();
			var regExp = /^0[0-9]{9}$/i;
			if (phone.length == 10) {
				if (regExp.test(phone)) {
					// $("#RegisterModal").modal('hide');
					// $("#get_bank").modal('show');
				} else {
					Swal.fire({
						icon: 'error',
						title: 'เกิดข้อผิดพลาด',
						text: 'เบอร์ไม่ถูกต้อง'
					})
					return;
				}
			} else {
				Swal.fire({
					icon: 'error',
					title: 'เกิดข้อผิดพลาด',
					text: 'กรุณากรอก เบอร์มือถือ 10 หลัก'
				})
				return;
			}

			if (password.length < 6) {
				Swal.fire({
					icon: 'error',
					title: 'เกิดข้อผิดพลาด',
					text: 'รหัสผ่านน้อยเกินไป'
				})
				return;
			}

			if (password != repassword) {
				Swal.fire({
					icon: 'error',
					title: 'เกิดข้อผิดพลาด',
					text: 'รหัสไม่ตรงกัน'
				})
				return;
			}

			$('#form_phone').hide();
			$('#form_bank').show();
		}

		function checkBankNew() {
			var bank_name = $("#bank_name").val();
			var acc = $("#acc").val();

			if (bank_name == '') {
				Swal.fire({
					icon: 'error',
					title: 'เกิดข้อผิดพลาด',
					text: 'กรุณาเลือกธนาคาร'
				});
				return;
			}

			if (acc == '' || acc.length < 10) {
				Swal.fire({
					icon: 'error',
					title: 'เกิดข้อผิดพลาด',
					text: 'กรุณาใส่เลขบัญชีให้ครบถ้วน'
				});
				return;
			}

			if (bank_name != 'truewallet') {
				let cc = false;
				$.ajax({
					url: 'api/check_bank',
					type: 'POST',
					data: {
						bank_name: bank_name,
						bank_number: acc
					},
					success: function(obj) {
						if (obj != "") {
							var msg = obj.msg
							var status = obj.status
							if (status == 200) {
								console.log(status)
								$("#name").val(obj.name);
								localStorage.setItem("bank_name", bank_name);
								document.getElementById("idline").disabled = false;
								document.getElementById("idline").placeholder = 'ใส่ไอดีไลน์';
								// btn_register
								document.getElementById("btn_register").innerHTML = 'สมัครสมาชิก';
								document.getElementById("btn_register").disabled = false;
								cc = true;
							} else {
								Swal.fire({
									icon: 'error',
									title: 'เกิดข้อผิดพลาด',
									text: msg
								});
								cc = false;
							}
						} else {
							cc = false;
						}
					}
				});
			} else {
				var phone = $("#phone").val();
				$("#name").val(phone);
				document.getElementById("name").placeholder = 'บัญชี True wallet';
				localStorage.setItem("bank_name", bank_name);
				document.getElementById("idline").disabled = false;
				document.getElementById("idline").placeholder = 'ใส่ไอดีไลน์';
				// btn_register
				document.getElementById("btn_register").innerHTML = 'สมัครสมาชิก';
				document.getElementById("btn_register").disabled = false;
			}
		}

		function register() {
			var phone = $("#phone").val();
			var fname = $("#name").val();
			var password = $("#password_val").val();
			var bank_number = $("#acc").val();
			var line = $("#idline").val();
			var ref = localStorage.getItem("ref");
			var bank_name = localStorage.getItem("bank_name");

			// var e = document.getElementById("select_promotion");
			var promotion = 0
			// if (e) {
			// 	promotion = e.options[e.selectedIndex].value //ธนาคาร
			// }
			showModal();
			$.ajax({
				url: 'api/register',
				type: 'POST',
				data: {
					fname: fname,
					password: password,
					password2: password,
					bank_number: bank_number,
					bank_name: bank_name,
					promotion: promotion,
					username: phone,
					line: line,
					ref: ref
				},

				success: function(obj) {

					if (obj != "") {

						var msg = obj.msg
						var status = obj.status
						if (status) {
							Swal.fire({
								title: 'แจ้งเตือน',
								text: 'สมัครสมาชิกสำเร็จ',
								icon: 'success',
								showCancelButton: false,
								confirmButtonColor: '#3085d6',
								cancelButtonColor: '#d33',
								confirmButtonText: 'OK'
							}).then((result) => {
								if (result.value) {
									window.location.href = "/";
								}
							});

						} else {
							Swal.fire({
								icon: 'error',
								title: 'เกิดข้อผิดพลาด',
								text: msg

							})

							return;
						}

					}
					$('body').loadingModal('hide');
					$('body').loadingModal('destroy');

				}


			});


		}
	</script>



</body>

</html>