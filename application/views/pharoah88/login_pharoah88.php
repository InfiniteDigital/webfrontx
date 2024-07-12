<link rel="stylesheet" href="//s3auto.sgp1.digitaloceanspaces.com/js_wauto/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="//s3auto.sgp1.digitaloceanspaces.com/js_wauto/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<style>
	.close {
		color: red;
		font-size: 3rem;
	}

	.table-profit {
		font-weight: 300;
	}

	.table-profit1 {
		font-weight: 100;
		font-family: none;
		font-size: 14px;
	}

	.lightning,
	.logo {
		width: 100%;
		max-width: 187px;
		height: auto;
		position: absolute;
		left: 27px;
		top: 50%;
		transition: all .3s;
		transform: translateY(-50%);
	}
</style>
<app-root _nghost-asb-c187="" ng-version="9.1.13">
	<div _ngcontent-asb-c187="" id="app" style="min-height: calc(100% - 60px); overflow: hidden;">
		<div _ngcontent-asb-c187="" class="fixed-bg"></div>
		<div _ngcontent-asb-c187="" class="sticky-top" style="background: linear-gradient(182deg, #6831ab, #1f0e41),url(images/bg/007.jpg)center center;">
			<div _ngcontent-asb-c187="" class="topnavbar" style="color: #fff;">
				<div _ngcontent-asb-c187="" class="container py-3">
					<div _ngcontent-asb-c187="" class="d-flex justify-content-between align-items-center">
						<div _ngcontent-asb-c187="" class="d-flex align-items-center">
							<a _ngcontent-asb-c187="" href="<?=$baseurl?>" title="">
								<div class="lightning">
									<img src="<?=$theme_asset?>/wp-content/uploads/2022/06/ln01.png" class="image wp-image-2031  attachment-full size-full" alt="" decoding="async" loading="lazy" style="max-width: 100%; height: auto;">
								</div>
								<div class="logo">
									<img style="width: auto;height: 130px;" src="<?=$theme_asset?>/img/logo.png" class="custom-logo" alt="<?=strtoupper($webname)?>" decoding="async">
								</div>

							</a>
						</div>
						<div _ngcontent-asb-c187="" class="d-flex flex-row justify-content-between align-items-center">
							<div _ngcontent-asb-c187="" id="menu-pc" class="d-flex justify-content-between align-items-center pc-view">
								<div _ngcontent-tdf-c192="" id="re-credit">
									<span _ngcontent-tdf-c192="" data-id="credit_balance" class="badge badge-pill mr-2 thb ufabet-credit" cursorshover="true">0.00 ฿</span>
								</div>
								<div _ngcontent-asb-c187="" class="linemenu-x"></div>

							</div>
							<!-- navbar-mobile-->
							<div _ngcontent-tdf-c192="" class="container mobile-view">
								<div _ngcontent-tdf-c192="" class="d-flex justify-content-between align-items-center">
									<div _ngcontent-tdf-c192="" class="d-flex align-items-center">
										<a _ngcontent-tdf-c192="" href="/" title="">
											<div _ngcontent-tdf-c192="" class="memberlogo">

											</div>
										</a>
									</div>
									<div _ngcontent-tdf-c192="" class="d-flex flex-row justify-content-between align-items-center">
										<div _ngcontent-tdf-c192="" id="menu-pc" class="d-flex justify-content-between align-items-center pc-view">
											<a _ngcontent-tdf-c192="" href="#/main" routerlink="/main" data-toggle="tooltip" data-placement="bottom" title="" data-id="lotto" data-original-title="หน้าแรก">
												<i _ngcontent-tdf-c192="" class="sn-icon sn-icon--home2"></i>
											</a>
											<a _ngcontent-tdf-c192="" href="#/lottery" routerlink="/lottery" data-toggle="tooltip" data-placement="bottom" title="" data-id="lottery" data-original-title="แทงหวย">
												<i _ngcontent-tdf-c192="" class="fas fa-star" cursorshover="true"></i>
											</a>
											<a _ngcontent-tdf-c192="" href="#/result-all" routerlink="/result-all" data-toggle="tooltip" data-placement="bottom" title="" data-id="award" data-original-title="ผลรางวัล">
												<i _ngcontent-tdf-c192="" class="fas fa-award"></i>
											</a>
											<a _ngcontent-tdf-c192="" href="javascript:void(0)" data-toggle="modal" data-target="#Deposit" data-placement="bottom" title="" data-id="refill" data-original-title="ฝากเงิน" cursorshover="true">
												<i _ngcontent-tdf-c192="" class="fas fa-donate"></i>
											</a>
											<div _ngcontent-tdf-c192="" class="linemenu-x"></div>
										</div>
										<div _ngcontent-tdf-c192="" id="re-credit"><span _ngcontent-tdf-c192="" data-id="credit_balance" class="badge badge-pill badge-light thb ufabet-credit" cursorshover="true"></span></div>
										<a _ngcontent-tdf-c192="" href="#" data-toggle="modal" data-target="#Contactbox" cursorshover="true">
										</a>
										<div _ngcontent-tdf-c192="" id="sidebarCollapse" class="mobile-view" onclick="sidebarOpen()">
											<img _ngcontent-tdf-c192="" src="<?=$theme_asset?>/asssets/img/user-128.png" alt="หวยฮานอย วันนี้ ออกอะไร" onerror="this.src='<?=$theme_asset?>/asssets/img/user-128.png'" width="28" height="28" title="บัญชีผู้ใช้" class="rounded-circle ml-1">
											<i _ngcontent-tdf-c192="" class="fas fa-ellipsis-v" style="margin-left: 5px;"></i>
										</div>
										<nav _ngcontent-tso-c195="" id="sidebar" style="display: none;" class="active">
											<div _ngcontent-tso-c195="" id="dismiss" onclick="sidebarClose()"><i _ngcontent-tso-c195="" class="fas fa-backspace fa-flip-horizontal" cursorshover="true"></i></div>
											<div _ngcontent-tso-c195="" class="sidebar-header">
												<div _ngcontent-tso-c195="" class="align-center text-center"><img _ngcontent-tso-c195="" src="<?=$theme_asset?>/asssets/img/user-128.png" alt="หวยฮานอย" width="110" height="100" onerror="this.src='<?=$theme_asset?>/asssets/img/user-128.png'" class="rounded-circle"><br _ngcontent-tso-c195="">
													<span _ngcontent-tso-c195="" class="username"><?=$user?></span><br _ngcontent-tso-c195=""><span _ngcontent-tso-c195="" data-id="credit_balance" class="badge badge-pill badge-light ufabet-credit" style="margin-left: 5px;">0.00 ฿</span>
												</div>
											</div>
											<ul _ngcontent-tso-c195="" class="list-unstyled components">
												<li _ngcontent-tso-c195=""><a _ngcontent-tso-c195="" href="#" data-toggle="modal" data-target="#modal-userinfo"><i _ngcontent-tso-c195="" class="fas fa-user-cog"></i>
														ตั้งค่าบัญชีผู้ใช้</a></li>
												<li _ngcontent-tso-c195=""><a _ngcontent-tso-c195="" href="#" data-toggle="modal" data-target="#modal-coupon">
														<i _ngcontent-tso-c195="" class="far fa-clipboard"></i>
														กรอกโค๊ด Promotion</a></li>
												<li _ngcontent-tso-c195=""><a _ngcontent-tso-c195="" href="#/setting-bank" routerlink="/setting-bank"><i _ngcontent-tso-c195="" class="fas fa-money-check"></i>
														บัญชีธนาคาร</a></li>
												<li _ngcontent-tso-c195=""><a _ngcontent-tso-c195="" href="#" data-toggle="modal" data-target="#partnerProfit" onclick="partnerProfit()"><i _ngcontent-tso-c195="" class="fas fa-info-circle"></i> ผลประโยชน์หุ้นส่วน</a></li>
												<li _ngcontent-tso-c195=""><a _ngcontent-tso-c195="" href="#" data-toggle="modal" data-target="#Contactbox"><i _ngcontent-tso-c195="" class="fas fa-handshake"></i>
														ศูนย์ช่วยเหลือ</a></li>
											</ul>
											<ul _ngcontent-tso-c195="" class="list-unstyled CTAs">
												<li _ngcontent-tso-c195=""><a _ngcontent-tso-c195="" href="javascript:void(0);" onclick="logout_new()" class="logout"><i _ngcontent-tso-c195="" class="fas fa-sign-out-alt"></i>
														ออกจากระบบ
													</a></li>
											</ul>
										</nav>
										<!-- dropdown pc-->
										<div _ngcontent-tdf-c192="" class="dropdown pc-view ml-1">
											<div _ngcontent-tdf-c192="" id="menu-profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle" cursorshover="true"><img _ngcontent-tdf-c192="" src="<?=$theme_asset?>/asssets/img/user-128.png" alt="หวยฮานอย วันนี้ ออกอะไร" onerror="this.src='<?=$theme_asset?>/asssets/img/user-128.png'" width="40" height="35" class="rounded-circle" cursorshover="true"><span _ngcontent-tdf-c192="" id="username" class="ml-1"><?=$user?></span></div>
											<div _ngcontent-tdf-c192="" aria-labelledby="menu-profile" id="menu-profile-dropdown" class="dropdown-menu">
												<a _ngcontent-tdf-c192="" href="#" data-toggle="modal" data-target="#modal-userinfo" class="dropdown-item"><i _ngcontent-tdf-c192="" class="fas fa-user-cog"></i>
													ตั้งค่าบัญชีผู้ใช้ </a>
												<a _ngcontent-tdf-c192="" href="#" data-toggle="modal" data-target="#modal-coupon" class="dropdown-item">
													<i _ngcontent-tdf-c192="" class="far fa-clipboard"></i>
													กรอกโค๊ด Promotion </a>
												<a _ngcontent-tdf-c192="" href="#" data-toggle="modal" data-target="#modal-userinfo" class="dropdown-item"><i _ngcontent-tdf-c192="" class="fas fa-money-check"></i> บัญชีธนาคาร </a><a _ngcontent-tdf-c192="" href="#" data-toggle="modal" data-target="#partnerProfit" class="dropdown-item" onclick="partnerProfit()"><i _ngcontent-tdf-c192="" class="fas fa-info-circle"></i> ผลประโยชน์หุ้นส่วน </a><a _ngcontent-tdf-c192="" href="#" data-toggle="modal" data-target="#Contactbox" class="dropdown-item"><i _ngcontent-tdf-c192="" class="fas fa-handshake"></i>
													ศูนย์ช่วยเหลือ </a>

												<div _ngcontent-tdf-c192="" class="dropdown-divider"></div><button _ngcontent-tdf-c192="" onclick="logout_new()" class="dropdown-item"><i _ngcontent-tdf-c192="" class="fas fa-sign-out-alt"></i> ออกจากระบบ
													<!--ิ-->
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!---->
							<!---->
							<div _ngcontent-asb-c187="" class="dropdown pc-view ml-1">
								<div _ngcontent-asb-c187="" id="menu-profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle"><img _ngcontent-asb-c187="" src="<?=$theme_asset?>/asssets/img/user-128.png" alt="หวยฮานอย วันนี้ ออกอะไร" onerror="this.src='<?=$theme_asset?>/asssets/img/user-128.png'" width="40" height="35" class="rounded-circle"><span _ngcontent-asb-c187="" id="username" class="ml-1"><?=$user?></span></div>
								<div _ngcontent-asb-c187="" aria-labelledby="menu-profile" id="menu-profile-dropdown" class="dropdown-menu">
									<a _ngcontent-asb-c187="" href="#" data-toggle="modal" data-target="#modal-userinfo" class="dropdown-item"><i _ngcontent-asb-c187="" class="fas fa-user-cog"></i>
										ตั้งค่าบัญชีผู้ใช้ </a>
									<a _ngcontent-asb-c187="" href="#" data-toggle="modal" data-target="#modal-coupon" class="dropdown-item"><i _ngcontent-asb-c187="" class="far fa-clipboard"></i>
										กรอกโค๊ด Promotion </a>
									<a _ngcontent-asb-c187="" href="#" data-toggle="modal" data-target="#modal-userinfo" class="dropdown-item"><i _ngcontent-asb-c187="" class="fas fa-money-check"></i> บัญชีธนาคาร </a><a _ngcontent-asb-c187="" href="#" data-toggle="modal" data-target="#partnerProfit" class="dropdown-item" onclick="partnerProfit()"><i _ngcontent-asb-c187="" class="fas fa-info-circle"></i> ผลประโยชน์หุ้นส่วน </a><a _ngcontent-asb-c187="" href="#" data-toggle="modal" data-target="#Contactbox" class="dropdown-item"><i _ngcontent-asb-c187="" class="fas fa-handshake"></i> ศูนย์ช่วยเหลือ </a>
									<div _ngcontent-asb-c187="" class="dropdown-divider"></div><button _ngcontent-asb-c187="" onclick="logout_new()" class="dropdown-item"><i _ngcontent-asb-c187="" class="fas fa-sign-out-alt"></i> ออกจากระบบ </button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div _ngcontent-asb-c187="" class="container">

			<div _ngcontent-asb-c187="" class="mb-3"></div>
			<div _ngcontent-asb-c187="" id="ModalRule" tabindex="-1" role="dialog" aria-labelledby="ModalRule" aria-hidden="true" class="modal fade">
				<div _ngcontent-asb-c187="" role="document" class="modal-dialog modal-lg">
					<div _ngcontent-asb-c187="" class="modal-content" style="border-radius: 10px;">
						<div _ngcontent-asb-c187="" class="modal-header bg-theme-primary">
							<h5 _ngcontent-asb-c187="" class="modal-title">กฏและกติกา</h5><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-asb-c187="" aria-hidden="true">×</span></button>
						</div>
						<div _ngcontent-asb-c187="" class="modal-body">
							<p _ngcontent-asb-c187=""><span _ngcontent-asb-c187="" class="pl-3">ยินดีต้อนรับสู่หวยออนไลน์</span>
								เพื่อให้ท่านทราบถึงสิทธิประโยชน์ของสมาชิกกรุณาอ่านข้อตกลงอย่างละเอียดก่อนที่จะลงทะเบียนสมัครเป็นสมาชิกและใช้บริการ
								<a _ngcontent-asb-c187="" href="https:"></a>
								เมื่อสมัครสมาชิกแล้วทางเว็บจะถือว่า สมาชิกได้อ่านและยอมรับ <span _ngcontent-asb-c187="" class="text-primary">"นโยบายและเงื่อนไขการให้บริการของเว็บไซต์์"</span>
							</p>
							<p _ngcontent-asb-c187=""><strong _ngcontent-asb-c187=""><u _ngcontent-asb-c187="" style="color: #3b5898;">การรักษาและช่วยเหลือการเดิมพันออนไลน์์</u></strong><br _ngcontent-asb-c187=""></p>
							<ul _ngcontent-asb-c187="" class="pl-3">
								<li _ngcontent-asb-c187="">ถ้าสมาชิกหลุดออกจากเว็บไซต์ระหว่างการเดิมพัน
									บัญชีของท่านจะไม่มีผลกระทบต่อผลลัพธ์ของการเดิมพัน </li>
								<li _ngcontent-asb-c187="">ไม่ต้องวิตกกังวล ถ้าสมาชิกออกจากเว็บไซด์ระหว่างการเดิมพัน
									สมาชิกจะถูกออกจากระบบช่วงเวลาหนึ่ง จากนั้นสมาชิกสามารถเข้าสู่ระบบ <a _ngcontent-asb-c187="" href="https:"></a> ได้อีกครั้งตามปกติ</li>
							</ul>
							<p _ngcontent-asb-c187=""></p>
							<p _ngcontent-asb-c187=""><strong _ngcontent-asb-c187=""><u _ngcontent-asb-c187="" style="color: #3b5898;">การให้ความคุ้มครอง</u></strong><br _ngcontent-asb-c187=""><a _ngcontent-asb-c187="" href="https:"></a>
								ได้มีการจัดเตรียม ระบบที่มีประสิทธิภาพ ความรวดเร็วและการบริการลูกค้าที่เป็นมิตร
								ถ้าหากท่านมีคำถามหรือคำแนะนำใดๆ กรุณาอย่าลังเลใจที่จะโทรศัพท์มาทางฝ่ายบริการลูกค้า
								ซึ่งจะมีให้บริการตลอด 24 ชั่วโมง ทุกวันไม่มีวันหยุด
								และทางเราจะตอบกลับอย่างรวดเร็วที่สุด <a _ngcontent-asb-c187="" href="https:"></a>
								ขอรับรองว่าจะรักษาข้อมูลส่วนตัวของท่านไว้เป็นความลับอย่างปลอดภัย </p>
							<p _ngcontent-asb-c187=""><strong _ngcontent-asb-c187=""><u _ngcontent-asb-c187="" style="color: #3b5898;">ข้อตกลงในการเดิมพัน</u></strong><br _ngcontent-asb-c187=""></p>
							<ul _ngcontent-asb-c187="" class="pl-3">
								<li _ngcontent-asb-c187="">เพื่อหลีกเลี่ยงปัญหาต่างๆในขณะที่ใช้งานเว็บไซต์
									สมาชิกกรุณาอ่านกฎกติกาของบริษัทอย่างละเอียดและระมัดระวัง
									เมื่อสมาชิกเข้าสู่หน้าเดิมพันทางบริษัทจะถือว่าท่านได้ยอมรับข้อตกลงของทาง <a _ngcontent-asb-c187="" href="https:"></a></li>
								<li _ngcontent-asb-c187="">การเดิมพันจะต้องอยู่ใน <span _ngcontent-asb-c187="" class="text-success">"ระยะเวลาที่กำหนด"</span>
									มิฉะนั้นจะถือว่าการเดิมครั้งนั้นเป็น <span _ngcontent-asb-c187="" class="text-danger">"โมฆะ"</span>
									ถ้าการเดิมพันได้มีการยกเลิกหรือหยุดพักชั่วคราว
									เนื่องจากเหตุผลใดๆก็ตามก่อนการเล่น การเดิมพันครั้งนั้นจะถือว่าเป็น<span _ngcontent-asb-c187="" class="text-danger">"โมฆะ"</span>และทางบริษัทจะคืนเครดิตให้กับสมาชิก </li>
								<li _ngcontent-asb-c187="">เป็นความรับผิดชอบของสมาชิกที่จะคอยดูผลลัพธ์
									จากช่องหน้าต่างที่แสดงให้เห็นถึงผลการเดิมพันแพ้หรือชนะ ทางบริษัทจะยึดถือข้อมูล
									<span _ngcontent-asb-c187="" class="text-primary">"รายละเอียดการวางเดิมพัน"</span> ของสมาชิก
									ในกรณีที่สมาชิกมีความสงสัย และต้องการตรวจสอบข้อมูลในการคำนวณของการเดิมพันนั้นๆ
								</li>
								<li _ngcontent-asb-c187="">
									ถ้าหากเกิดความผิดพลาดของระบบระหว่างการเดิมพันหรือความผิดพลาดโดยไม่ได้เจตนาของพนักงาน
									ทางบริษัทขอสงวนสิทธ์ที่จะแก้ไขผลลัพธ์ให้ถูกต้อง
									และจะมีการพิมพ์ข้อความที่ได้มีการแก้ไขเผยแพร่ไว้ที่แถบตัววิ่งในหน้าเว็บไซต์
									บริษัทจะไม่มีการแจ้งสมาชิกเป็นการส่วนตัว</li>
								<li _ngcontent-asb-c187="">
									เป็นความรับชอบของสมาชิกที่จะทำให้แน่ใจว่าชื่อผู้ใช้และรหัสผ่านสำหรับเข้าเว็บไซต์นั้นถูกต้อง
									และกรุณาเปลี่ยนรหัสผ่านของสมาชิกอย่างน้อยเดือนละครั้ง เพื่อความปลอดภัย
									ถ้าหากท่านพบหรือสงสัยว่ามีผู้อื่นได้เข้าไปเล่นในบัญชีของท่านโดยไม่ได้รับอนุญาต
									กรุณาแจ้งตัวแทนของท่านทันทีเพื่อเปลี่ยนรหัสส่วนตัว
									(หากมีการเดิมพันก่อนที่จะเปลี่ยนรหัสเดิมจะถือว่าการเดิมพันนั้นเป็นผล)</li>
								<li _ngcontent-asb-c187="">ก่อนเริ่มการเดิมพันแต่ละครั้ง
									ท่านสมาชิกควรจะตรวจสอบวงเงินของท่านเสียก่อน ถ้าหากท่านมีข้อสงสัยใดๆ
									เกี่ยวกับวงเงิน กรุณาแจ้งตัวแทนของท่านสมาชิกทันที</li>
								<li _ngcontent-asb-c187="">ในกรณีที่เหตุการณ์ไม่คาดคิดเกิดขึ้น อย่างเช่น
									ข้อมูลสูญหายเนื่องจากระบบอินเตอร์เน็ตข้อง ทางบริษัทจะมีการประกาศให้รู้ถึงสาเหตุ
									และวิธีการแก้ปัญหา</li>
								<li _ngcontent-asb-c187="">ชั่วโมงการให้บริการ 24 ชั่วโมง/วัน และไม่มีวันหยุด</li>
							</ul>
							<p _ngcontent-asb-c187=""></p>
							<p _ngcontent-asb-c187=""><strong _ngcontent-asb-c187=""><u _ngcontent-asb-c187="" style="color: #3b5898;">ระบบการรักษาความปลอดภัย</u></strong><br _ngcontent-asb-c187=""></p>
							<ul _ngcontent-asb-c187="" class="pl-3">
								<li _ngcontent-asb-c187="">ข้อมูลทางด้านบัญชีเพื่อวัตถุประสงค์เฉพาะบุคคล
									ข้อมูลที่ทางสมาชิกให้มาในการเปิดบัญชีจะถูกเก็บเป็นความลับขั้นสูงสุด
									ทางบริษัทจะไม่เผยแพร่ข้อมูลนี้ให้กับบุคคลที่สามหรือองค์กรอื่นๆ ล่วงรู้
									ไม่ว่าจะเป็นบัญชีอีเมล์ หรือข้อมูลอื่นๆที่ทางสมาชิกกรอกในใบสมัคร
									ข้อมูลเหล่านี้จะถูกใช้ในจุดมุ่งหมายที่ตั้งใจเอาไว้ให้เท่านั้น เช่น
									การส่งเช็คเงินสดสำหรับผู้ชนะหรือข้อมูลอื่นๆ ตามที่สมาชิกร้องขอ</li>
								<li _ngcontent-asb-c187="">
									ความปลอดภัยทางบริษัทได้ใช้วิธีที่มีประสิทธิภาพมากที่สุดเพื่อทำให้ท่านแน่ใจในความปลอดภัยของข้อมูลของท่าน
									ทางเราจะพยายามให้ดีที่สุดที่จะรักษาความถูกต้องแน่นอน และความลับเฉพาะของข้อมูล
									เพื่อป้องกันไม่ให้ข้อมูลรั่วไหลหรือนำไปใช้อย่างไม่ถูกต้อง ถ้าท่านมีข้อสงสัยใดๆ
									ที่เกี่ยวข้องกับการรักษาความลับ ความปลอดภัยของข้อมูล กรุณาติดต่อฝ่ายบริการลูกค้า
									พวกเรายินดีให้บริการ 24 ชั่วโมง/วัน ทุกวันไม่มีวันหยุด</li>
							</ul>
							<p _ngcontent-asb-c187=""></p>
							<p _ngcontent-asb-c187="">บริษัทมีความยินดีเป็นอย่างยิ่งที่ได้รับใช้ท่าน</p>
						</div>
						<div _ngcontent-asb-c187="" class="modal-footer"><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">ฉันเข้าใจและยอมรับ</button>
						</div>
					</div>
				</div>
			</div>
			<div _ngcontent-asb-c187="" id="ModalRate" tabindex="-1" role="dialog" aria-labelledby="ModalRate" aria-hidden="true" class="modal fade">
				<div _ngcontent-asb-c187="" role="document" class="modal-dialog modal-lg">
					<div _ngcontent-asb-c187="" class="modal-content" style="border-radius: 10px;">
						<div _ngcontent-asb-c187="" class="modal-header bg-theme-primary">
							<h5 _ngcontent-asb-c187="" class="modal-title">อัตราการจ่าย</h5><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-asb-c187="" aria-hidden="true">×</span></button>
						</div>
						<div _ngcontent-asb-c187="" class="modal-body text-center ng-star-inserted"><img _ngcontent-asb-c187="" style="max-width: 100%; max-height: 100%; height: inherit !important;" src="#"><br _ngcontent-asb-c187=""></div>
						<!---->
						<!---->
						<div _ngcontent-asb-c187="" class="modal-footer"><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">ปิด</button>
						</div>
					</div>
				</div>
			</div>
			<div _ngcontent-asb-c187="" id="Contactbox" tabindex="-1" role="dialog" aria-labelledby="Contactbox" aria-hidden="true" class="modal fade">
				<div _ngcontent-asb-c187="" role="document" class="modal-dialog modal-lg">
					<div _ngcontent-asb-c187="" class="modal-content" style="border-radius: 10px;">
						<div _ngcontent-asb-c187="" class="modal-header bg-theme-primary">
							<h5 _ngcontent-asb-c187="" class="modal-title">เลือกช่องทางการติดต่อเรา</h5>
							<button _ngcontent-asb-c187="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close">
								<span _ngcontent-asb-c187="" aria-hidden="true">×</span></button>
						</div>
						<div _ngcontent-asb-c187="" class="modal-body">
							<div _ngcontent-asb-c187="" class="row ng-star-inserted">
								<div _ngcontent-asb-c187="" class="col-6 col-sm-6 col-md-6 ng-star-inserted" data-index="0">
									<a _ngcontent-asb-c187="" class="btn btn-outline-success btn-block btn-contactbox mb-3" style="margin-bottom: 0;" href="<?=$line?>">
										<span _ngcontent-asb-c187="">
											<small _ngcontent-asb-c187="" class="d-flex justify-content-center">ติดต่อผ่านไลน์ &nbsp;
													<!---->
												</small>
											</span>
										<i _ngcontent-asb-c187="" class="fab fa-line"></i>
									</a>
								</div>
								<!---->
								<div _ngcontent-asb-c187="" class="col-6 col-sm-6 col-md-6"><a _ngcontent-asb-c187="" href="#" onclick="Tawk_API.toggle();return false" data-dismiss="modal" class="btn btn-outline-danger btn-block btn-contactbox mb-0"><span _ngcontent-asb-c187=""><small _ngcontent-asb-c187="">แชทสดกับพนักงาน</small></span><i _ngcontent-asb-c187="" class="fa fa-user"></i></a></div>
								<!---->
							</div>
							<!---->
							<!---->
						</div>
						<div _ngcontent-asb-c187="" class="modal-footer"><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">ปิด</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<router-outlet _ngcontent-asb-c187=""></router-outlet>
		<app-main _nghost-asb-c14="" class="ng-star-inserted">
			<div id="section-content" class="container">
				<div class="row justify-content-center pc-view">
					<div class="col-5 mb-2">
						<div class="d-flex flex-column justify-content-between shadow px-3 py-3 my-3 mx-0" style="background: url('<?=$theme_asset?>/asssets/bg-money.png') center center / cover no-repeat;">
							<div class="d-flex justify-content-center">

								<div class="d-flex justify-content-center" style="background: -webkit-linear-gradient(#d3a653, #ffffff);-webkit-background-clip: text;background-clip: text;-webkit-text-fill-color: transparent;">
									<h3 class="text-center">ยอดเงินคงเหลือ</h3>
								</div>
							</div>

							<div class="d-flex flex-row justify-content-center">
								<div class="d-flex flex-column">
									<div class="d-flex justify-content-center">
										<h3 data-id="credit_balance" class="d-block text-center text-money-main ufabet-credit" style="font-size: 52px;">0.00 ฿</h3>
									</div>
								</div>

							</div>
							<div class="d-flex justify-content-start" style="background: -webkit-linear-gradient(#d3a653, #ffffff);-webkit-background-clip: text;background-clip: text;-webkit-text-fill-color: transparent;">
								<h5 class="mx-2 px-2">USER ID : <?=$user?></h5>
							</div>
						</div>

					</div>


				</div>
				<div class="row justify-content-center pc-view">
					<!--ฝากเงิน คอม-->
					<div class="col-7">
						<div class="d-flex justify-content-center ">
							<div class="col-4">
								<a href="javascript:void(0)" data-toggle="modal" data-target="#Deposit">
									<div class="btn btn-block bg-galaxy rounded" style="background: linear-gradient(180deg, rgba(255,217,60,1) 0%, rgba(211,177,53,1) 46%, rgba(164,151,45,1) 100%);border: #f1c100 4px solid;box-shadow: 0px 0px 5px 5px #ffc05469;">
										<div>
											<i class="fas fa-building" style="font-size: 4rem;"></i>
											<h3>ฝากเงิน</h3>

										</div>
									</div>
								</a>
							</div>
							<!--ถอนเงิน คอม-->
							<div class="col-4">
								<a href="javascript:void(0)" data-toggle="modal" data-target="#Withdraw">
									<div class="btn btn-block rounded bg-galaxy" style="background: linear-gradient(180deg, rgba(210,210,210,1) 0%, rgba(138,138,138,1) 46%, rgba(161,161,161,1) 100%);border: #a5a5a5d4 4px solid;color: #000000d1;box-shadow: 0px 0px 5px 5px #ffffff5e;">
										<div>
											<i class="fas fa-dollar-sign" style="font-size: 4rem;"></i>
											<h3>ถอนเงิน</h3>
										</div>
									</div>
								</a>
							</div>
							<!--แจ้งปัฐหา คอม-->
							<div class="col-4">
								<a href="<?=$line?>">
									<div class="btn btn-block rounded bg-galaxy" style="background: linear-gradient(180deg, rgba(191,27,219,1) 0%, rgba(222,0,250,1) 46%, rgba(125,0,213,1) 100%);border: #8f03ab 4px solid;box-shadow: 0px 0px 5px 5px #e200ff7d;">
										<div style="background: -webkit-linear-gradient(#f5c265, #f7f3de);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
											<i class="fas fa-headset" style="font-size: 4rem;"></i>
											<h3>แจ้งปัญหา</h3>

										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center pc-view">
					<div class="col-4">
						<div class="d-flex justify-content-center ">
							<div class="col-12 my-2">
								<a href="javascript:void(0)" class="btn btn-block btn-move-main rounded game-to-wallet" style="color:#6f4900;border: #a67c00 3px solid;font-size: 1.2rem;">
									<i class="fas fa-donatefloat-left mt-1"></i>
									<span class="btn-move-sub">โยกเงินเข้าเครดิต</span>
								</a>
							</div>
						</div>
					</div>
				</div>

				<!--mobile mode edit-->
				<!--โมบาย-->
				<div _ngcontent-vsx-c14="" class="mobile-view mb-5" style="margin-top: -25px;">
					<div class="col-4" style="margin-top: 11px !important; margin-right: 10px !important;">
						<!--ฝากเงิน โมบาย-->
						<div>
							<div class="col-lg-4 col-6">
								<a href="javascript:void(0)" data-toggle="modal" data-target="#Deposit" class="btn btn-block rounded btn-deposit-main bg-galaxy" style="background: linear-gradient(180deg, rgba(255,217,60,1) 0%, rgba(211,177,53,1) 46%, rgba(164,151,45,1) 100%);border: #f1c100 4px solid;box-shadow: 0px 0px 5px 5px #ffc05469;width: 7rem; height: 80px; margin-left: -15px; margin-bottom: 8px">
									<div>
										<i class="fas fa-building" style="font-size: 2.4rem;"></i>
										<h6 class="">ฝากเงิน</h6>

									</div>
								</a>
							</div>
							<!--ถอนเงิน โมบาย-->
							<div class="col-lg-4 col-6">
								<a href="javascript:void(0)" data-toggle="modal" data-target="#Withdraw" class="btn btn-block rounded btn-withdraw-main bg-galaxy" style="background: linear-gradient(180deg, rgba(210,210,210,1) 0%, rgba(138,138,138,1) 46%, rgba(161,161,161,1) 100%);border: #a5a5a5d4 4px solid;color: #000000d1;box-shadow: 0px 0px 5px 5px #ffffff5e;width: 7rem; height: 80px; margin-left: -15px; margin-bottom: 8px">
									<div>
										<i class="fas fa-dollar-sign" style="font-size: 2.4rem;"></i>
										<h6 class="">ถอนเงิน</h6>

									</div>
								</a>
							</div>
							<!--แจ้งเครดิต-->
							<div class="col-lg-4 col-6">
								<a href="<?=$line?>" class="btn btn-block rounded btn-contact-main bg-galaxy" style="    background: linear-gradient(180deg, rgba(191,27,219,1) 0%, rgba(222,0,250,1) 46%, rgba(125,0,213,1) 100%);border: #8f03ab 4px solid;box-shadow: 0px 0px 5px 5px #e200ff7d;width: 7rem; height: 80px; margin-left: -15px; margin-bottom: 8px">
									<div>
										<i class="fas fa-headset" style="font-size: 2.4rem;"></i>
										<h6 class="">แจ้งปัญหา</h6>
									</div>
								</a>
							</div>
							<!------>
						</div>
					</div>
					<div class="col-8">
						<div class="d-flex flex-column justify-content-between shadow px-3 py-3 my-3 mx-0 bg-galaxy" style="background: none;border: #d70000 4px solid;background-color: #00000087;">
							<div class="d-flex justify-content-between"><span class="remain-credit-title" style="background: -webkit-linear-gradient(#d3a653, #ffffff);-webkit-background-clip: text;background-clip: text;-webkit-text-fill-color: transparent;">ยอดเงินคงเหลือ</span>
							</div>
							<div class="d-flex flex-row justify-content-between mt-1">
								<div class="d-flex flex-column pt-0 pb-1">
									<h3 data-id="credit_balance" class="d-block text-left text-money-main ufabet-credit">0.00 ฿
									</h3>
									<div class="d-flex" style="background: -webkit-linear-gradient(#d3a653, #ffffff);-webkit-background-clip: text;background-clip: text;-webkit-text-fill-color: transparent;">
										<span _ngcontent-tdf-c14=""></span>
										USER ID : <?=$user?>
									</div>
								</div>
							</div>
						</div>
						<div style="margin-top: 125px !important;">
							<div class="d-flex flex-column justify-content-between shadow px-2 py-2 my-2 mx-0 btn btn-block btn-move-main" style="border: #a67c00 3px solid;margin-top: -115px !important;">
								<div class="d-flex flex-row justify-content-between mt-1 ">
									<div class="d-flex flex-column pt-0 pb-1 ">
										<a href="javascript:void(0)" class="game-to-wallet" style="margin-left: 2px;"><i class="fas fa-donate" style="font-size: 1.4rem;"></i>
											โยกเงินเข้าเครดิต</a>
									</div>
								</div>

							</div>


						</div>
					</div>
					<br>
				</div>
				<!--end mobile mode edit-->


				<!-- banner -->
				<div _ngcontent-nbo-c179="" class="banner-colosal ng-star-inserted mt-5 mb-3">
					<mdb-carousel _ngcontent-nbo-c179="" class="carousel slide">
						<div tabindex="0" class="carousel slide">
							<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
								<ol class="carousel-indicators ng-star-inserted">
									<?php foreach ($banner as $k => $v): ?>
										<?php if ($v->checkuser == 1): ?>
											<?php if ($k == 0): ?>
												<li class="ng-star-inserted active"></li>
											<?php else: ?>
												<li class="ng-star-inserted"></li>
											<?php endif;?>
										<?php endif;?>
									<?php endforeach;?>
								</ol>
								<div class="carousel-inner" style="margin-top:-20px !important;">
									<?php foreach ($banner as $k => $v): ?>
										<?php if ($v->checkuser == 1): ?>
											<?php if ($k == 0): ?>
												<div class="carousel-item active">
													<div _ngcontent-nbo-c179="" class="view w-100 ais-hero">
														<img _ngcontent-nbo-c179="" alt="หวยฮานอย vip วันนี้" class="d-block w-100" src="<?=$v->img_name?>">
														<div _ngcontent-nbo-c179="" mdbwaveseffect="" class="mask rgba-black-slight waves-light"></div>
													</div>
												</div>
											<?php else: ?>
												<div class="carousel-item">

													<div _ngcontent-nbo-c179="" class="view w-100 ais-hero">
														<img _ngcontent-nbo-c179="" alt="หวยฮานอย vip วันนี้" class="d-block w-100" src="<?=$v->img_name?>">
														<div _ngcontent-nbo-c179="" mdbwaveseffect="" class="mask rgba-black-slight waves-light"></div>
													</div>
												</div>
											<?php endif;?>
										<?php endif;?>
									<?php endforeach;?>
								</div>

								<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>

				</div>
				<!-- banner -->

				<!--เมนูหลักโมบาย-->
				<div _ngcontent-asb-c14="" class="row p-0 m-1  mobile-view" style="
                    padding: 10px 5px 10px 5px !important;">
					<div _ngcontent-gca-c154="" class="d-flex justify-content-center">
						<div class="col-10">
							<img _ngcontent-gca-c154="" src="<?=$theme_asset?>/asssets/mainmenu.png" style="width: 100%;">
						</div>
					</div>
					<div _ngcontent-gca-c154="" class="row">
						<div _ngcontent-gca-c154="" class="col-6 col-md-4 col-lg-4 col-xl-4 p-2 ng-star-inserted">
							<div _ngcontent-gca-c154="" class="rounded">
								<a _ngcontent-gca-c154="" class="goto-game" target="_blank" href="javascript:void(0)">
									<img _ngcontent-gca-c154="" class="img-game" src="<?=$theme_asset?>/asssets/sports.png" cursorshover="true">
								</a>
							</div>
						</div>
						<div _ngcontent-gca-c154="" class="col-6 col-md-4 col-lg-4 col-xl-4 p-2 ng-star-inserted">
							<div _ngcontent-gca-c154="" class="rounded"><a class="goto-game" _ngcontent-gca-c154="" href="javascript:void(0)"><img _ngcontent-gca-c154="" class="img-game" src="<?=$theme_asset?>/asssets/minigame.png" cursorshover="true"></a></div>
						</div>
						<div _ngcontent-gca-c154="" class="col-6 col-md-4 col-lg-4 col-xl-4 p-2 ng-star-inserted">
							<div _ngcontent-gca-c154="" class="rounded"><a _ngcontent-gca-c154="" class="goto-game" target="_blank" href="javascript:void(0)"><img _ngcontent-gca-c154="" class="img-game" src="<?=$theme_asset?>/asssets/casino.png" cursorshover="true"></a></div>
						</div>
						<div _ngcontent-gca-c154="" class="col-6 col-md-4 col-lg-4 col-xl-4 p-2 ng-star-inserted">
							<div _ngcontent-gca-c154="" class="rounded">
								<a _ngcontent-gca-c154="" href="#" data-toggle="modal" data-target="#modal-promotion_register"><img _ngcontent-gca-c154="" class="img-game" src="<?=$theme_asset?>/asssets/promotion.png" cursorshover="true"></a>
							</div>
						</div>

					</div>
				</div>
				<!---->




				<!--เมนูหลักคอม-->
				<div _ngcontent-gca-c154="" class="text-theme-primary rounded p-2 px-3 xtarget col-lotto ng-star-inserted pc-view ">
					<div _ngcontent-gca-c154="" class="d-flex justify-content-center">
						<div class="col-6">
						<a _ngcontent-gca-c154="" class="goto-game" target="_blank" href="javascript:void(0)">
									<img _ngcontent-gca-c154="" src="<?=$theme_asset?>/asssets/mainmenu.png" style="width: 100%;">
								</a>
						</div>
					</div>
					<div _ngcontent-gca-c154="" class="row">
						<div _ngcontent-gca-c154="" class="col-6 col-md-4 col-lg-4 col-xl-4">
							<div _ngcontent-gca-c154="" class="rounded">
								<a _ngcontent-gca-c154="" class="goto-game" target="_blank" href="javascript:void(0)" style="border: none;background: none;">
									<img _ngcontent-gca-c154="" class="img-game" src="<?=$theme_asset?>/asssets/sports.png" cursorshover="true">
								</a>
							</div>
						</div>
						<div _ngcontent-gca-c154="" class="col-6 col-md-4 col-lg-4 col-xl-4">
							<div _ngcontent-gca-c154="" class="rounded">
							<a class="goto-game" _ngcontent-gca-c154="" href="javascript:void(0)">
									<img _ngcontent-gca-c154="" class="img-game" src="<?=$theme_asset?>/asssets/minigame.png" cursorshover="true">
								</a>
							</div>
						</div>
						<div _ngcontent-gca-c154="" class="col-6 col-md-4 col-lg-4 col-xl-4">
							<div _ngcontent-gca-c154="" class="rounded">
								<a _ngcontent-gca-c154="" href="#" onclick="openModalPromotion()">
									<img _ngcontent-gca-c154="" class="img-game" src="<?=$theme_asset?>/asssets/promotion.png" cursorshover="true">
								</a>
							</div>

						</div>

					</div>
				</div>
				<!---->
				<div _ngcontent-gca-c154="" class="text-theme-primary rounded p-2 px-3 xtarget col-lotto ng-star-inserted pc-view ">
					<div _ngcontent-gca-c154="" class="d-flex justify-content-center">
						<div class="col-6">
						<a _ngcontent-gca-c154="" class="goto-game" target="_blank" href="javascript:void(0)">
									<img _ngcontent-gca-c154="" src="<?=$theme_asset?>/asssets/mainmenu.png" style="width: 100%;">
								</a>
						</div>
					</div>
					<div _ngcontent-gca-c154="" class="" style="padding: 10px;">
						<div _ngcontent-gca-c154="" class="row" style="padding: 10px; color: white !important; font-size: 20px;">
							<div class="col-4 col-sm-4 col-md-3 col-lg-2">
								<div class="text-center px-2 mb-2" style="position: relative;"><a href="#" data-toggle="modal" data-target="#refFriendModal" class=""><img src="<?=$theme_asset?>/asssets/icon/icon6.png" style="width: 100%; height: auto;">
										<span class="text-menu">แนะนำเพื่อน</span> </a></div>
							</div>
							<div class="col-4 col-sm-4 col-md-3 col-lg-2">
								<div class="text-center px-2 mb-2" style="position: relative;"><a href="/doc" class=""><img src="<?=$theme_asset?>/asssets/icon/icon8.png" style="width: 100%; height: auto;">
										<span class="text-menu">วิดีโอการใช้งาน</span> </a></div>
							</div>
							<div class="col-4 col-sm-4 col-md-3 col-lg-2">
								<div class="text-center px-2 mb-2" style="position: relative;">
									<a href="#" data-toggle="modal" data-target="#modal-userinfo" class="">
										<img src="<?=$theme_asset?>/asssets/icon/icon9.png" style="width: 100%; height: auto;">
										<span class="text-menu">ข้อมูลผู้ใช้งาน</span> </a>
								</div>
							</div>
							<div class="col-4 col-sm-4 col-md-3 col-lg-2">
								<div class="text-center px-2 mb-2" style="position: relative;"><a href="#" id="wheelspinufa" class=""><img src="<?=$theme_asset?>/asssets/icon/icon10.png" style="width: 100%; height: auto;">
										<span class="text-menu">วงล้อนำโชค</span> </a></div>
							</div>
							<div class="col-4 col-sm-4 col-md-3 col-lg-2">
								<div class="text-center px-2 mb-2" style="position: relative;"><a href="#" onclick="openModalWinloss();" class=""><img src="<?=$theme_asset?>/asssets/icon/icon11.png" style="width: 100%; height: auto;">
										<span class="text-menu">คืนยอดเสีย</span> </a></div>
							</div>
							<div class="col-4 col-sm-4 col-md-3 col-lg-2">
								<div class="text-center px-2 mb-2" style="position: relative;">
									<a href="#" onclick="openModalPromotion();"><img src="<?=$theme_asset?>/asssets/icon/icon12.png" style="width: 100%; height: auto;">
										<span class="text-menu">โปรโมชั่น</span> </a>
								</div>
							</div>
						</div>
						<div _ngcontent-gca-c154="" class="d-flex justify-content-center">
							<div class="col-4">
								<div class="d-flex justify-content-betaween">
									<a href="#" data-toggle="modal" data-target="#modal-transection">
										<div _ngcontent-gca-c154="" class="text-center px-2 " style="position: relative;">
											<img src="<?=$theme_asset?>/asssets/แจ้งรายงสย.png" style="width: 100%; height: auto; ">
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- เมนูอื่นๆ-->
				<div _ngcontent-asb-c14="" class="row py-3 px-2 mx-1  mobile-view" style="
                    padding: 10px 5px 10px 5px !important;">
					<div _ngcontent-gca-c154="" class="d-flex justify-content-center">
						<div class="col-10">
							<img _ngcontent-gca-c154="" src="<?=$theme_asset?>/asssets/mainmenu.png" style="width: 100%;">
						</div>
					</div>
					<div _ngcontent-gca-c154="" class="boxgame boxgame-slot" style="padding: 10px;background: none;">
						<div _ngcontent-gca-c154="" class="row " style="padding: 10px;">
							<div _ngcontent-ont-c14="" class="col-4 mx-0 px-1">
								<div _ngcontent-ont-c14="" class="text-center px-2" style="position: relative;margin-bottom: 15px;"><a _ngcontent-ont-c14="" href="#" data-toggle="modal" data-target="#refFriendModal" class="btn-main-menu-mobile"><img _ngcontent-ont-c14="" src="<?=$theme_asset?>/asssets/icon/icon6.png" แจ้งรายการ style="width: 100%; height: auto;">
										แนะนำเพื่อน
									</a></div>
							</div>
							<div _ngcontent-ont-c14="" class="col-4 mx-0 px-1">
								<div _ngcontent-ont-c14="" class="text-center px-2" style="position: relative;margin-bottom: 15px;">
									<a _ngcontent-ont-c14="" href="/doc" class="btn-main-menu-mobile">
										<img _ngcontent-ont-c14="" src="<?=$theme_asset?>/asssets/icon/icon8.png" style="width: 100%; height: auto;">
										วิดีโอใช้งาน </a>
								</div>
							</div>
							<div _ngcontent-ont-c14="" class="col-4 mx-0 px-1">
								<div _ngcontent-ont-c14="" class="text-center px-2" style="position: relative;margin-bottom: 15px;">
									<a _ngcontent-ont-c14="" href="javascript:void(0);" onclick="openModalPromotion();" class="btn-main-menu-mobile"><img _ngcontent-ont-c14="" src="<?=$theme_asset?>/asssets/icon/icon12.png" style="width: 100%; height: auto;">
										โปรโมชั่น </a>
								</div>
							</div>
							<div _ngcontent-ont-c14="" class="col-4 mx-0 px-1">
								<div _ngcontent-ont-c14="" class="text-center px-2" style="position: relative;margin-bottom: 15px;">
									<a _ngcontent-ont-c14="" href="javascript:void(0);" data-toggle="modal" data-target="#modal-userinfo" class="btn-main-menu-mobile">
										<img _ngcontent-ont-c14="" src="<?=$theme_asset?>/asssets/icon/icon9.png" style="width: 100%; height: auto;">
										ข้อมูลผู้ใช้</a>
								</div>
							</div>
							<div _ngcontent-ont-c14="" class="col-4 mx-0 px-1">
								<div _ngcontent-ont-c14="" class="text-center px-2" style="position: relative;margin-bottom: 15px;"><a _ngcontent-ont-c14="" href="#" id="wheelspinufa_1" class="btn-main-menu-mobile"><img _ngcontent-ont-c14="" src="<?=$theme_asset?>/asssets/icon/icon10.png" style="width: 100%; height: auto;">
										วงล้อนำโชค </a></div>
							</div>
							<div _ngcontent-ont-c14="" class="col-4 mx-0 px-1">
								<div _ngcontent-ont-c14="" class="text-center px-2" style="position: relative;margin-bottom: 15px;"><a _ngcontent-ont-c14="" href="javascript:void(0);" onclick="openModalWinloss();" class="btn-main-menu-mobile"><img _ngcontent-ont-c14="" src="<?=$theme_asset?>/asssets/icon/icon11.png" style="width: 100%; height: auto;">
										คืนยอดเสีย </a></div>
							</div>
						</div>
						<div _ngcontent-gca-c154="" class="d-flex justify-content-center">
							<div class="col-10">
								<div class="d-flex justify-content-betaween d-md-none d-lg-block">
									<a href="#" data-toggle="modal" data-target="#modal-transection">
										<div _ngcontent-gca-c154="" class="text-center px-2 " style="position: relative;">
											<img src="<?=$theme_asset?>/asssets/แจ้งรายงสย.png" style="width: 100%; height: auto; ">
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- ส่วนนี้คือ Modal เรียกใช้ผ่าน ID อันนี้คือ id="test_modal" -->
				<!-- #################################### Modal #################################### -->
				<div class="modal fade" id="test_modal" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header bg-secondary" style="background: linear-gradient(90deg, rgba(188,142,47,1) 0%, rgba(244,225,133,1) 50%, rgba(183,135,46,1) 100%);">
								<!-- ชื่อบนหัวข้อ Modal -->
								<h4 class="modal-title" style="color: white;"></h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="card-body">

								<!-- ส่วนตรงกลางจะใส่ข้อมูลไรก็ได้ -->
								<div class="modal-body text-center">
									<div _ngcontent-nbo-c179="" class="banner-colosal ng-star-inserted">
										<mdb-carousel _ngcontent-nbo-c179="" class="carousel slide">
											<div tabindex="0" class="carousel slide">
												<div id="carouselExampleIndicatorsPopup" class="carousel slide" data-bs-ride="carousel">
													<ol class="carousel-indicators ng-star-inserted">
														<?php foreach ($popupbanner as $k => $v): ?>
															<?php if ($k == 0): ?>
																<li class="ng-star-inserted active"></li>
															<?php else: ?>
																<li class="ng-star-inserted"></li>
															<?php endif;?>
														<?php endforeach;?>
													</ol>
													<div class="carousel-inner" style="margin-top:-20px !important;">
														<?php foreach ($popupbanner as $k => $v): ?>
															<?php if ($k == 0): ?>
																<div class="carousel-item active">
																	<div _ngcontent-nbo-c179="" class="view w-100 ais-hero">
																		<h4><?=$v->bname?></h4>
																		<img _ngcontent-nbo-c179="" alt="หวยฮานอย vip วันนี้" class="d-block w-100" src="<?=$v->img_name?>">
																		<div _ngcontent-nbo-c179="" mdbwaveseffect="" class="mask rgba-black-slight waves-light"></div>
																		<span><?=$v->description?></span>
																	</div>
																</div>
															<?php else: ?>
																<div class="carousel-item">
																	<div _ngcontent-nbo-c179="" class="view w-100 ais-hero">
																		<h4><?=$v->bname?></h4>
																		<img _ngcontent-nbo-c179="" alt="หวยฮานอย vip วันนี้" class="d-block w-100" src="<?=$v->img_name?>">
																		<div _ngcontent-nbo-c179="" mdbwaveseffect="" class="mask rgba-black-slight waves-light"></div>
																		<span><?=$v->description?></span>
																	</div>
																</div>
															<?php endif;?>
														<?php endforeach;?>
													</div>

													<a class="carousel-control-prev" href="#carouselExampleIndicatorsPopup" role="button" data-slide="prev">
														<span class="carousel-control-prev-icon" aria-hidden="true"></span>
														<span class="sr-only">Previous</span>
													</a>
													<a class="carousel-control-next" href="#carouselExampleIndicatorsPopup" role="button" data-slide="next">
														<span class="carousel-control-next-icon" aria-hidden="true"></span>
														<span class="sr-only">Next</span>
													</a>
												</div>
											</div>

									</div>

								</div>
								<!-- ส่วนตรงกลางจะใส่ข้อมูลไรก็ได้ -->


							</div>
							<div class="modal-footer ">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!-- #################################### Modal #################################### -->

				<!-- ส่วนนี้คือ Modal เรียกใช้ผ่าน ID อันนี้คือ id="test_modal" -->
				<!-- #################################### Modal #################################### -->
				<div class="modal fade" id="vip_group" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header bg-secondary" style="background: linear-gradient(90deg, rgba(188,142,47,1) 0%, rgba(244,225,133,1) 50%, rgba(183,135,46,1) 100%);">
								<!-- ชื่อบนหัวข้อ Modal -->
								<h4 class="modal-title" style="color: white;"></h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="card-body">

								<!-- ส่วนตรงกลางจะใส่ข้อมูลไรก็ได้ -->
								<div class="modal-body text-center">
									<h4><?=$vipgroup->line?></h4>
									<span><?=$vipgroup->description?></span>

								</div>
								<!-- ส่วนตรงกลางจะใส่ข้อมูลไรก็ได้ -->


							</div>
							<div class="modal-footer ">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<!-- #################################### Modal #################################### -->








			</div>
	</div>
	<ngx-spinner bdcolor="rgba(0, 0, 0, 0.8)" size="default" color="#fff" type="timer" _nghost-asb-c12="" class="ng-tns-c12-1">
		<!---->
	</ngx-spinner>

	</app-main>
	<!---->
	<div _ngcontent-asb-c187="" class="overlay"></div>
	<div _ngcontent-asb-c187="" style="background-color: rgb(38, 37, 37);" hidden="">
		<div _ngcontent-asb-c187="" class="gradient-ads p-3">
			<div _ngcontent-asb-c187="" class="container container--fluid" style="padding-bottom: 0px;">
				<div _ngcontent-asb-c187="" class="row">
					<div _ngcontent-asb-c187="" class="col">
						<div _ngcontent-asb-c187="" class="text-light">
							<h2>ซื้อหวยออนไลน์ แทงหวยผ่านเว็บ อัตราจ่ายสูง โอนเงินเร็ว บริการดีที่สุด</h2>
						</div>
						<div _ngcontent-asb-c187="" class="text-light">
							<p></p>
						</div><br _ngcontent-asb-c187=""><span _ngcontent-asb-c187=""><button _ngcontent-asb-c187="" type="button" class="btn btn-theme-primary"><i _ngcontent-asb-c187="" class="fas fa-sign-in-alt"></i>
								เข้าสู่ระบบ</button></span><span _ngcontent-asb-c187="" class="ml-2"><button _ngcontent-asb-c187="" type="submit" class="btn btn-warning"><i _ngcontent-asb-c187="" class="fas fa-user-plus"></i>
								สมัครสมาชิก</button></span>
					</div>
					<div _ngcontent-asb-c187="" class="text-right d-none d-sm-flex col col-3" style="padding: 0px;">
						<img _ngcontent-asb-c187="" src="<?=$theme_asset?>/asssets/img/promote-side.webp" alt="หวยออนไลน์" style="height: 300px; width: auto; margin-top: auto; margin-left: auto;">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contactbox -->
	<!-- Deposit -->
	<div _ngcontent-asb-c187="" id="Deposit" tabindex="-1" role="dialog" aria-labelledby="Contactbox" aria-hidden="true" class="modal fade">
		<div _ngcontent-asb-c187="" role="document" class="modal-dialog modal-lg">
			<div _ngcontent-asb-c187="" class="modal-content" style="border-radius: 10px;">
				<div _ngcontent-asb-c187="" class="modal-header bg-theme-primary">
					<h5 _ngcontent-asb-c187="" class="modal-title">ฝากเงิน</h5><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-asb-c187="" aria-hidden="true">×</span></button>
				</div>
				<div _ngcontent-asb-c187="" class="modal-body">
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">SCB</button>
						</li>
						<?php if ($bank_truewallet['status'] == 1) {?>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">True Wallet</button>
						</li>
						<?php }?>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<!-- SCB -->
						<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<div class="x-pending ">
								<div class="d-lg-block d-none">
									<div class="row">
										<div class="col d-flex flex-column js-slide-left-content x-slide-left-content">
											<div class="js-content mx-auto text-center animated fadeInModal" data-animatable="fadeInModal" data-delay="1500">
												<h3 class="x-title-modal mx-auto text-center d-inline-block mt-3">
													ข้อมูลการโอน
													<hr class="x-hr-border-glow">
												</h3>
												<div class="text-center d-flex flex-column">
													<?php
if ($bank_scb['status'] == 1) {
    ?>
														<div class="mb-3">
															<div class="media m-auto d-inline-flex">
																<img src="<?=$img_bank;?>" alt="bank-bay" width="50px" class="rounded-circle mr-3">
																<div class="media-body text-left d-flex flex-column">
																	<div class="d-flex flex-lg-column flex-row">
																		<h1 class="text-primary"><?=$bank_scb['accnum']?></h1>
																		<div class="f-5 d-lg-block d-none text-white"><span>
																				<?=$bank_scb['name']?> </span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													<?php }?>
													<br>
													<div class="-danger-zone">
														<div class="-icon-wrapper">
															<img src="build/web/ufacoder/img/ic-alert.png" alt="Alert icon png" class="-img">
														</div>
														<span>กรุณาใช้บัญชี <?=$info['bank']?>
															<br>เลขบัญชี <?=$info['accnum']?>
															<br>ชื่อ <?=$info['name']?>
															<br>โอนเข้ามาเท่านั้นนะคะ
														</span><br>
													</div>
												</div>
											</div>
										</div>
										<div class="col d-flex flex-column animated fadeInModal" data-animatable="fadeInModal">
											<h3 class="x-title-modal mx-auto text-center d-inline-block mt-3">
												ฝากเงิน
												<hr class="x-hr-border-glow">
											</h3>
											<div class="-deposit-preview text-center">
												<img src="build/web/ufacoder/img/ic_chip_deposit.png" class="img-fluid mb-3" alt="deposit" width="100">
												<hr class="border-dark w-85">
												<div class="my-3">
													<div class="-fake-input w-90 m-auto">
														<i class="fas fa-arrow-left" aria-hidden="true"></i>
														<b><span id="font_pop">ขั้นต่ำ <?=$d_limit?> บาท</span><span class=""></span></b>
													</div>
												</div>
												<br>
												<br>
												<br>
												<br>
												<br>
												<div class="d-flex col-10 px-0 m-auto flex-column">
													<div class="f-5 text-gray-lighter">เมื่อโอนเงินแล้ว กรุณารอ 10-30 วินาที</div>
												</div>
												<div class="my-3">
													<button type="button" id="copyaccnum1" class="btn btn-primary -submit text-center copy-account-number" onclick="Swal.fire({ icon: 'success',title: 'สำเร็จ',text: 'คัดลอกเลขบัญชีแล้ว ' + bank_number21})">
														คัดลอกเลขบัญชี
													</button>
												</div>
												<div class="x-admin-contact ">
													<span class="x-text-with-link-component">
														<label class="-text-message ">พบปัญหา</label>
														<a href="https://line.me/R/ti/p/<?=$line?>" id="contact-line" target="_blank">
															<span id="contact-line">ติดต่อฝ่ายบริการลูกค้า</span>
														</a>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="d-lg-none d-block h-100">
									<div class="col d-flex flex-column h-100 px-0">
										<div class="js-content -animatable-container m-auto text-center animated fadeInModal" data-animatable="fadeInModal" data-delay="0">
											<h3 class="x-title-modal mx-auto text-center d-inline-block mt-3">
												ฝากเงิน
												<hr class="x-hr-border-glow">
											</h3>
											<div class="text-center">
												<?php
if ($bank_scb['status'] == 1) {
    ?>
													<div class="mb-3">
														<div class="media m-auto d-inline-flex">
															<img src="<?=$img_bank;?>" alt="bank-bay" width="50px" class="rounded-circle mr-3">
															<div class="media-body text-left d-flex flex-column">
																<div class="d-flex flex-lg-column flex-row">
																	<b class="f-lg-4 f-5 mr-lg-0 mr-2 text-primary"> <?=$bank_scb['accnum']?></b>
																</div>
																<div class="f-5 d-lg-none d-block"><?=$bank_scb['name']?></div>
															</div>
														</div>
													</div>
												<?php }?>
												<br>
												<?php
if ($bank_scb['status_ktb'] == 1) {
    ?>
													<div class="mb-3">
														<div class="media m-auto d-inline-flex">
															<img src="<?=$img_bank;?>" alt="bank-bay" width="50px" class="rounded-circle mr-3">
															<div class="media-body text-left d-flex flex-column">
																<div class="d-flex flex-lg-column flex-row">
																	<b class="f-lg-4 f-5 mr-lg-0 mr-2 text-primary"> <?=$bank_scb['accnum_ktb']?></b>
																</div>
																<div class="f-5 d-lg-none d-block "><?=$bank_scb['name_ktb']?></div>
															</div>
														</div>
													</div>
												<?php }?>
											</div>
											<br>
											<br>
											<div class="col-12 m-auto d-flex">
												<div class="m-auto d-flex flex-row">
													<div class="f-5 mt-3 text-gray-lighter">เมื่อโอนเงินแล้ว กรุณารอ 10-30 วินาที</div>
												</div>
											</div>
											<div class="my-3">
												<div class="-fake-input w-90 m-auto">
													<span>ขั้นต่ำ <?=$d_limit?> บาท</span><span class=""></span>
												</div>
											</div>
											<div class="-danger-zone">
												<div class="-icon-wrapper">
													<img src="build/web/ufacoder/img/ic-alert.png" alt="Alert icon png" class="-img">
												</div>
												<span>กรุณาใช้เลขบัญชีที่สมัคร<br>โอนเข้ามาเท่านั้นนะคะ</span>
											</div>
										</div>
										<div>
											<button type="button" id="copyaccnum2" class="btn btn-block -submit btn-primary text-center m-auto js-user-confirm-deposit f-5 copy-account-number" onclick="Swal.fire({ icon: 'success',title: 'สำเร็จ',text: 'คัดลอกเลขบัญชีแล้ว ' + bank_number21})">
												คัดลอกเลขบัญชี
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- TRUE WALLET -->
						<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							<div class="x-pending ">
								<div class="d-lg-block d-none">
									<div class="row">
										<div class="col d-flex flex-column js-slide-left-content x-slide-left-content">
											<div class="js-content mx-auto text-center animated fadeInModal" data-animatable="fadeInModal" data-delay="1500">
												<h3 class="x-title-modal mx-auto text-center d-inline-block mt-3">
													ข้อมูลการโอน
													<hr class="x-hr-border-glow">
												</h3>
												<div class="text-center d-flex flex-column">
													<?php
if ($bank_truewallet['status'] == 1) {
    ?>
														<div class="mb-3">
															<div class="media m-auto d-inline-flex">
																<img src="<?=$img_twl;?>" alt="bank-bay" width="50px" class="rounded-circle mr-3">
																<div class="media-body text-left d-flex flex-column">
																	<div class="d-flex flex-lg-column flex-row">
																		<h1 class="text-primary"><?=$bank_truewallet['accnum']?></h1>
																		<div class="f-5 d-lg-block d-none text-white"><span>
																				<?=$bank_truewallet['name']?> </span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													<?php }?>
													<br>
													<div class="-danger-zone">
														<div class="-icon-wrapper">
															<img src="build/web/ufacoder/img/ic-alert.png" alt="Alert icon png" class="-img">
														</div>
														<span>กรุณาใช้บัญชี <?=$info['username']?>
															<br>โอนเข้ามาเท่านั้นนะคะ
														</span><br>
													</div>
												</div>
											</div>
										</div>
										<div class="col d-flex flex-column animated fadeInModal" data-animatable="fadeInModal">
											<h3 class="x-title-modal mx-auto text-center d-inline-block mt-3">
												ฝากเงิน
												<hr class="x-hr-border-glow">
											</h3>
											<div class="-deposit-preview text-center">
												<img src="build/web/ufacoder/img/ic_chip_deposit.png" class="img-fluid mb-3" alt="deposit" width="100">
												<hr class="border-dark w-85">
												<div class="my-3">
													<div class="-fake-input w-90 m-auto">
														<i class="fas fa-arrow-left" aria-hidden="true"></i>
														<b><span id="font_pop">ขั้นต่ำ <?=$d_limit?> บาท</span><span class=""></span></b>
													</div>
												</div>
												<br>
												<br>
												<br>
												<br>
												<br>
												<div class="d-flex col-10 px-0 m-auto flex-column">
													<div class="f-5 text-gray-lighter">เมื่อโอนเงินแล้ว กรุณารอ 10-30 วินาที</div>
												</div>
												<div class="my-3">
													<button type="button" class="btn btn-primary -submit text-center copy-account-number-twl" onclick="Swal.fire({ icon: 'success',title: 'สำเร็จ',text: 'คัดลอกเลขบัญชีแล้ว ' + bank_number22})">
														คัดลอกเลขบัญชี
													</button>
												</div>
												<div class="x-admin-contact ">
													<span class="x-text-with-link-component">
														<label class="-text-message ">พบปัญหา</label>
														<a href="https://line.me/R/ti/p/<?=$line?>" id="contact-line" target="_blank">
															<span id="contact-line">ติดต่อฝ่ายบริการลูกค้า</span>
														</a>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="d-lg-none d-block h-100">
									<div class="col d-flex flex-column h-100 px-0">
										<div class="js-content -animatable-container m-auto text-center animated fadeInModal" data-animatable="fadeInModal" data-delay="0">
											<h3 class="x-title-modal mx-auto text-center d-inline-block mt-3">
												ฝากเงิน
												<hr class="x-hr-border-glow">
											</h3>
											<div class="text-center">
												<?php
if ($bank_truewallet['status'] == 1) {
    ?>
													<div class="mb-3">
														<div class="media m-auto d-inline-flex">
															<img src="<?=$img_twl;?>" alt="bank-bay" width="50px" class="rounded-circle mr-3">
															<div class="media-body text-left d-flex flex-column">
																<div class="d-flex flex-lg-column flex-row">
																	<b class="f-lg-4 f-5 mr-lg-0 mr-2 text-primary"> <?=$bank_truewallet['accnum']?></b>
																</div>
																<div class="f-5 d-lg-none d-block"><?=$bank_truewallet['name']?></div>
															</div>
														</div>
													</div>
												<?php }?>
												<br>
											</div>
											<br>
											<br>
											<div class="col-12 m-auto d-flex">
												<div class="m-auto d-flex flex-row">
													<div class="f-5 mt-3 text-gray-lighter">เมื่อโอนเงินแล้ว กรุณารอ 10-30 วินาที</div>
												</div>
											</div>
											<div class="my-3">
												<div class="-fake-input w-90 m-auto">
													<span>ขั้นต่ำ <?=$d_limit?> บาท</span><span class=""></span>
												</div>
											</div>
											<div class="-danger-zone">
												<div class="-icon-wrapper">
													<img src="build/web/ufacoder/img/ic-alert.png" alt="Alert icon png" class="-img">
												</div>
												<span>กรุณาใช้เลขบัญชีที่สมัคร<br>โอนเข้ามาเท่านั้นนะคะ</span>
											</div>
										</div>
										<div>
											<button type="button" class="btn btn-block -submit btn-primary text-center m-auto js-user-confirm-deposit f-5 copy-account-number-twl" onclick="Swal.fire({ icon: 'success',title: 'สำเร็จ',text: 'คัดลอกเลขบัญชีแล้ว ' + bank_number22})">
												คัดลอกเลขบัญชี
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div _ngcontent-asb-c187="" class="modal-footer"><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">ปิด</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Deposit -->
	<!-- Withdraw -->
	<div _ngcontent-asb-c187="" id="Withdraw" tabindex="-1" role="dialog" aria-labelledby="Contactbox" aria-hidden="true" class="modal fade">
		<div _ngcontent-asb-c187="" role="document" class="modal-dialog modal-lg">
			<div _ngcontent-asb-c187="" class="modal-content" style="border-radius: 10px;">
				<div _ngcontent-asb-c187="" class="modal-header bg-theme-primary">
					<h5 _ngcontent-asb-c187="" class="modal-title">ถอนเงิน</h5><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-asb-c187="" aria-hidden="true">×</span></button>
				</div>
				<div _ngcontent-asb-c187="" class="modal-body">
					<div data-animatable="fadeInModal" data-offset="0" class="-animatable-container animated fadeInModal">
						<div class="d-flex justify-content-center">
							<div class="media p-2">
								<div class="bank-box">
									<img src="images/bank2/<?=$info['bank']?>.jpg" width="50px" height="50px">
								</div>
								<div class="media-body ml-2">
									<div><strong><?=$info['name']?></strong></div>
									<div><?=$info['accnum']?></div>
								</div>
							</div>
						</div>
						<div>
							<p class="text-center mt-2" id='turnover'>
							</p>
						</div>
						<div class="m-auto ">
						</div>
						<?php
if ($info['bank'] == 'truewallet') {
    ?>
						<p class="text-center mt-2">
							จำนวนเงินที่ต้องการถอน (ถอนขั้นต่ำ <?=$w_limit_twl?> บาท)
						</p>
						<?php
} else {
    ?>
						<p class="text-center mt-2">
							จำนวนเงินที่ต้องการถอน (ถอนขั้นต่ำ <?=$w_limit?> บาท)
						</p>
						<?php
}
?>
						<p class="text-center mt-2">
							** เมื่อกดปุ่มยืนยันแล้วกรุณารอ 30 วินาที **
						</p>
						<div class="form-group mt-1 ml-2 mr-2 mb-2">
							<input class="form-control" id='money_w' placeholder="ยอดเงินถอน" pattern="[0-9]+" max="" autofocus name="amount" type="text">
						</div>
						<div class="d-flex justify-content-center mt-3 ml-2 mr-2">
							<button id="withdrawbtn" type="button" class="btn btn-primary" data-disable-on-click>ยืนยัน</button>
						</div>
					</div>
				</div>
				<div _ngcontent-asb-c187="" class="modal-footer"><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">ปิด</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Withdraw -->
	<!-- Tranfer Credit -->
	<div _ngcontent-asb-c187="" id="Withdraw" tabindex="-1" role="dialog" aria-labelledby="Contactbox" aria-hidden="true" class="modal fade">
		<div _ngcontent-asb-c187="" role="document" class="modal-dialog modal-lg">
			<div _ngcontent-asb-c187="" class="modal-content" style="border-radius: 10px;">
				<div _ngcontent-asb-c187="" class="modal-header bg-theme-primary">
					<h5 _ngcontent-asb-c187="" class="modal-title">ถอนเงิน</h5><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-asb-c187="" aria-hidden="true">×</span></button>
				</div>
				<div _ngcontent-asb-c187="" class="modal-body">
					<div data-animatable="fadeInModal" data-offset="0" class="-animatable-container animated fadeInModal">
						<div class="d-flex justify-content-center">
							<div class="media p-2">
								<div class="bank-box">
									<img src="images/bank2/<?=$info['bank']?>.jpg" width="50px" height="50px">
								</div>
								<div class="media-body ml-2">
									<div><strong><?=$info['name']?></strong></div>
									<div><?=$info['accnum']?></div>
								</div>
							</div>
						</div>
						<div>
							<p class="text-center mt-2" id='turnover'>
							</p>
						</div>
						<div class="m-auto ">
						</div>
						<?php
if ($info['bank'] == 'truewallet') {
    ?>
						<p class="text-center mt-2">
							จำนวนเงินที่ต้องการถอน (ถอนขั้นต่ำ <?=$w_limit_twl?> บาท)
						</p>
						<?php
} else {
    ?>
						<p class="text-center mt-2">
							จำนวนเงินที่ต้องการถอน (ถอนขั้นต่ำ <?=$w_limit?> บาท)
						</p>
						<?php
}
?>
						<p class="text-center mt-2">
							** เมื่อกดปุ่มยืนยันแล้วกรุณารอ 30 วินาที **
						</p>
						<div class="form-group mt-1 ml-2 mr-2 mb-2">
							<input class="form-control" id='money_w' placeholder="ยอดเงินถอน" pattern="[0-9]+" autofocus name="amount" type="text">
						</div>
						<div class="d-flex justify-content-center mt-3 ml-2 mr-2">
							<button id="withdrawbtn" type="button" class="btn btn-primary" data-disable-on-click>ยืนยัน</button>
						</div>
					</div>
				</div>
				<div _ngcontent-asb-c187="" class="modal-footer"><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">ปิด</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Tranfer Credit -->

	<div class="x-modal modal" id="modal_winloss" tabindex="-1" role="dialog" aria-hidden="true" data-loading-container=".js-modal-content" data-ajax-modal-always-reload="true">
		<div class="modal-dialog modal-dialog modal-lg" role="document">
			<div class="modal-content -modal-content" style="background-color: #1a283c;">
				<img src="build/web/ufacoder/img/border-modal.png" class="img-fluid d-lg-block d-none -border-top-modal" alt="">
				<button type="button" class="close f-1" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<div data-animatable="fadeInModal" data-offset="0" class="-animatable-container animated fadeInModal">
					<div class="modal-header border-bottom-0 mt-3 pb-0 d-flex flex-column-reverse">
						<h3 class="m-auto text-white d-inline-block" id="exampleModalCenterTitle">
							คืนยอดเสีย
						</h3>
					</div>
					<div class="modal-body">
						<div class="form-group text-center mt-1 ml-2 mr-2 mb-2">
							<h4>รายละเอียดโปรโมชั่น</h4>
							<img src="" class="img-fluid" alt="" id="wl_img">
							<textarea rows="15" class="form-control d-none" id="wl_desc"></textarea>
							<br>
							<h2 class="text-center" style="color:white;display:none" id="wl_already"></h2>
							<button id="wl_receive" class="btn btn-primary btn-lg btn-block mt-5" style="display:none;" onclick="ReceiveBonusWinloss()">รับโบนัส คืนยอดเสีย</button>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="x-modal modal" id="modal-promotion_register" tabindex="-1" role="dialog" aria-hidden="true" data-loading-container=".js-modal-content" data-ajax-modal-always-reload="true">
		<div class="modal-dialog modal-dialog modal-lg" role="document">
			<div class="modal-content -modal-content" style="background-color: #1a283c;">
				<img src="build/web/ufacoder/img/border-modal.png" class="img-fluid d-lg-block d-none -border-top-modal" alt="">
				<button type="button" class="close f-1" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<div data-animatable="fadeInModal" data-offset="0" class="-animatable-container animated fadeInModal">
					<div class="modal-body">
						<?php $data_pro = $this->admin_model->get_promotions();?>
						<?php foreach ($data_pro as $row): ?>
							<?php if (!empty($row['text'])): ?>
								<div class="card text-white bg-dark mb-3">
									<div class="card-header"><?=$row['name']?></div>
									<div class="card-body">
										<div class="form-group mt-1 ml-2 mr-2 mb-2">
											<h4>รายละเอียดโปรโมชั่น</h4>
											<img src="<?php echo $row['img_name'] ?>" class="img-fluid" alt="">
											<textarea id="editor" rows="10" class="form-control" name="text_1"><?php echo $row['text'] ?></textarea>
											<br>
											<?php
if ($u_pro['pro_id'] == 15) {
    ?>
												<h2 class="text-center" style="color:red;">คุณรับโปรโมชั่นนี้ไปแล้ว จำนวน <span> <?php echo $u_pro['money'] ?></span> บาท </h2>
											<?php
} else {
    ?>
												<button id="pro_register" type="submit" class="btn btn-primary btn-lg btn-block mt-5" data-disable-on-click="">รับเงิน</button>
											<?php
}
?>
										</div>
									</div>
								</div>
							<?php endif;?>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="x-modal modal" id="modal-promotion_test" tabindex="-1" role="dialog" aria-hidden="true" data-loading-container=".js-modal-content" data-ajax-modal-always-reload="true">
		<div class="modal-dialog modal-dialog modal-lg" role="document">
			<div class="modal-content -modal-content" style="background-color: #1a283c;">
				<img src="build/web/ufacoder/img/border-modal.png" class="img-fluid d-lg-block d-none -border-top-modal" alt="">
				<button type="button" class="close f-1" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<div data-animatable="fadeInModal" data-offset="0" class="-animatable-container animated fadeInModal">
					<div class="modal-body">
						<div class="x-pending ">
							<div class="d-lg-block d-none">
								<div class="row">
									<div class="js-content mx-auto text-center animated fadeInModal" data-animatable="fadeInModal" data-delay="1500">
										<h3 class="x-title-modal mx-auto text-center d-inline-block text-white mt-3">
											เลือกโปรโมชั่น
											<hr class="x-hr-border-glow">
										</h3>
										<select id="select_promotion" class="form-control" onchange="onChangeSelectPromotion()">
										</select>

										<div class="form-group mt-1 ml-2 mr-2 mb-2" id="promotion_detail_div" style="display:none;">

										</div>
									</div>
								</div>
							</div>

							<div class="d-lg-none d-block h-100">
								<div class="col d-flex flex-column h-100 px-0">
									<div class="js-content -animatable-container m-auto text-center animated fadeInModal" data-animatable="fadeInModal" data-delay="0">
										<h3 class="x-title-modal mx-auto text-center d-inline-block text-white mt-3">
											เลือกโปรโมชั่น
											<hr class="x-hr-border-glow">
										</h3>
										<select id="select_promotion1" class="form-control" onchange="onChangeSelectPromotion1()">
										</select>

										<div class="form-group mt-1 ml-2 mr-2 mb-2" id="promotion_detail_div1" style="display:none;">

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- ############################## ข้อมูลฝากถอน  ################################# -->
	<div class="x-modal modal" id="modal-transection" tabindex="-1" role="dialog" aria-hidden="true" data-ajax-modal-always-reload="true">
		<div class="modal-dialog modal-dialog-centered -modal-size modal-lg" role="document">
			<div class="modal-content -modal-content" style="background-color: #1a283c;color:#cbd4ff;">
				<img src="build/web/ufacoder/img/border-modal.png" class="img-fluid d-lg-block d-none -border-top-modal" alt="">
				<button type="button" class="close f-1" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<div class="modal-header border-bottom-0 mt-3 pb-0 d-flex flex-column-reverse">
					<h3 class="m-auto text-white d-inline-block" id="exampleModalCenterTitle">
						แจ้งรายการต่างๆ
						<hr class="x-hr-border-glow">
					</h3>
				</div>
				<div class="modal-body">
					<div class="table-responsive">
						<table id="member_transection" class="table table-hover" width="100%">
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ############################## ข้อมูลฝากถอน  ################################# -->
	<!-- ############################## ข้อมูลส่วนตัว  ################################# -->
	<div class="x-modal modal" id="modal-userinfo" tabindex="-1" role="dialog" aria-hidden="true" data-ajax-modal-always-reload="true">
		<div class="modal-dialog modal-dialog-centered -modal-size " role="document">
			<div class="modal-content -modal-content" style="background-color: #1a283c;color:#cbd4ff;">
				<img src="build/web/ufacoder/img/border-modal.png" class="img-fluid d-lg-block d-none -border-top-modal" alt="">
				<button type="button" class="close f-1" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<div class="modal-header border-bottom-0 mt-3 pb-0 d-flex flex-column-reverse">
					<h3 class="m-auto text-white d-inline-block" id="exampleModalCenterTitle">
						ข้อมูลส่วนตัว
						<hr class="x-hr-border-glow">
					</h3>
				</div>
				<div class="modal-body">
					<div data-animatable="fadeInModal" data-offset="0" class="-animatable-container animated fadeInModal">
						<div>
							<img src="images/profile-icon-lerge.png" class="mx-auto d-block mb-2 mt-2" alt="giftbox-icon" width="50">
							<p class="text-center">
								Username : <strong><span class="text-danger"><?=$user?></span></strong><br>
								เครดิต : <strong><span class="ufabet-credit">0.00</span></strong> บาท
							</p>
							<p class="text-center">
								<a href="#" id="changpasshola" class="link-support js-btn-change-pass" title="เปลี่ยนรหัสผ่าน">เปลี่ยนรหัสผ่าน</a> |
								<a href="#" id="logouthola" class="link-support" onclick="logout_new()" title="Logout" title="ออกจากระบบ">ออกจากระบบ</a>
							</p>
							<div class="form-password">
							</div>
							<div id="panel" data-animatable="fadeInModal" data-offset="0" class="-animatable-container animated fadeInModal">
								<div class="d-flex justify-content-center">
									<div class="mt-3 media p-2">
										<div class="bank-box">
											<img src="images/bank2/<?=$info['bank']?>.jpg" width="70px" height="70px">
										</div><br>
										<div class="media-body ml-2">
											<div><strong><b>ข้อมูลบัญชี</b></strong></div>
											<div><strong><?=$info['name']?></strong></div>
											<div><?=$info['accnum']?></div>
										</div>
									</div>
								</div>
								<hr style="background: rgb(101, 101, 101);">
								<center>
									<?php
$pro = $this->user_model->Promotions($user);
if ($pro['promotion_id'] == 0) {
    echo 'คุณไม่ได้รับโปรโมชั่น';
} else {
    echo 'เติมเงินรับ ' . $pro['percen'] . "% <br>";
    echo 'ทำเทิร์น ' . $pro['x'] . " เท่า";
}
?>
								</center>
								</p>
							</div>
						</div>

						<p class="text-center">*ต้องการเปลี่ยนบัญชี กรุณาติดต่อ <a id="contact-line" class="link-support" href="https://line.me/R/ti/p/<?=$line?>" title="ฝ่ายบริการลูกค้า" target="_blank">ฝ่ายบริการลูกค้า</a></p>
						<div class="d-flex justify-content-center mt-3 ml-2 mr-2">
							<button type="submit" class="btn btn-danger btn-lg btn-block btn-cancel" onclick="logout_new()" title="ออกจากระบบ">ออกจากระบบ</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ############################## ข้อมูลส่วนตัว  ################################# -->

	<!-- ############################## ลิ้งรับทรัพย์  ################################# -->
	<div class="x-modal modal" id="refFriendModal" tabindex="-1" role="dialog" data-loading-container=".js-modal-content" data-ajax-modal-always-reload="true" style="display: none;" aria-hidden="true">
		<div class="modal-dialog modal-dialog modal-lg" role="document" style="margin-top: 131px;">
			<div class="modal-content -modal-content" style="background-color: #1a283c;">
				<img src="" id="deposit" class="img-fluid d-lg-block d-none -border-top-modal" alt="">
				<button type="button" class="close f-1" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<div class="modal-body">
					<div class="x-login-form">
						<div data-animatable="fadeInModal" data-offset="0" class="-animatable-container animated fadeInModal">
							<?php
$dataaff_d = $seting['aff_m'];
// if (substr($dataaff_d, 0, 1) == '0') {
//     $dataaff_d = substr($dataaff_d, 1);
// }
// if (stripos($dataaff_d, '.00') !== FALSE) {
//     $dataaff_d = str_replace('.00', '.0', $dataaff_d);
// } else if (stripos($dataaff_d, '.0') !== FALSE) {
//     $dataaff_d = str_replace('.0', '.', $dataaff_d);
// } else if (substr($dataaff_d, 0, 1) == '.') {
//     $dataaff_d = substr($dataaff_d, 1);
// }
?>
							<div class="text-center d-flex flex-column">
								<div class="m-auto ">
									<h3 class="m-auto d-inline-block" style="color:#fff">
										แนะนำเพื่อน รับโบนัส <?=$dataaff_d ? $dataaff_d : '0';?>% ของยอดเดิมพัน
										<hr class="x-hr-border-glow">
									</h3>
									<div class="container">
									</div>
									<div class="form-group mt-1 ml-2 mr-2 mb-2">
										<input id="refURL22s" type="text" class="form-control x-form-control text-center" placeholder="Link" value="<?=$baseurl?>ref/<?=$info['id']?>" autocomplete="off" readonly>
									</div>
									<button class="btn btn-success" id="cp_btn" onclick="copyLinkaffs()"> คัดลอก </button>
									<p class='text-danger'> เพียงเพื่อนมีการเล่น สามารถกดรับ <?=$dataaff_d;?>% ของยอดเทิร์น ได้ทุกวัน </p>
									<?php $ref = $this->user_model->ref($info['id']);?>

									<?php
date_default_timezone_set('asia/bangkok');
$date = date('Y-m-d');
$dateend = date('Y-m-d', strtotime("+1 days"));
$dateaff = date('Y-m-d', strtotime("-1 days"));
$chk = $this->user_model->check_ref($user,$date, $dateend);

// echo '<pre>';
// echo '<pre>';
// print_r($chk);
foreach ($ref as $v) {
    date_default_timezone_set('asia/bangkok');
    $result = $this->user_model->history_ref($v['username'], $dateaff);
	
// print_r($result);
    $bonus += floatval($result[0]['turnover']);
}
?>
									<br>
									<div style="color:#fff"> วันที่ <span class='text-info'><?=$dateaff?> </span> ยอดโบนัส :<span> <?=($bonus * $dataaff_d) / 100?> บาท</span></div>
									<div id="fff">
										<?php if (!$chk) {?>
											<button class="btn btn-info" style="padding: 5px;" onclick="receiveBonus(<?=($bonus * $dataaff_d) / 100?>)"> รับโบนัส </button>
										<?php } else {?>
											<button class="btn btn-light" style="padding: 2px;" disabled> รับโบนัสวันนี้ไปแล้ว </button>
										<?php }?>
									</div>
									<br>
									<table class="table text-white">
										<thead>
											<tr>
												<th scope="col" class="text-center" style="color:#fff">จำนวน</th>
												<th scope="col" class="text-center" style="color:#fff">ได้รับ</th>
												<th scope="col" class="text-center" style="color:#fff">วันที่ทำรายการ</th>
											</tr>
										</thead>
										<?php $ref = $this->user_model->check_ref_all($user);
foreach ($ref as $v) {
    ?>
											<tbody>
												<tr>
													<th class="text-center" style="color:#000"><?=$v['bonus']?></th>
													<th class="text-center" style="color:#000"><?=$v['member_username']?></th>
													<th class="text-center" style="color:#000"><?=$v['date']?></th>
												</tr>
											</tbody>
										<?php
}
?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<img src="" class="img-fluid d-lg-block d-none -border-bottom-modal" alt="">
			</div>
		</div>
	</div>
	<!-- ############################## ลิ้งรับทรัพย์  ################################# -->

	<!-- สุ่มวงล้อ -->
	<!--###################################### สุ่มวงล้อ ######################################-->
	<div _ngcontent-asb-c187="" id="wheelspin" tabindex="-1" role="dialog" aria-labelledby="Contactbox" aria-hidden="true" class="modal fade">
		<div _ngcontent-asb-c187="" role="document" class="modal-dialog modal-lg">
			<div _ngcontent-asb-c187="" class="modal-content" style="border-radius: 10px;">
				<div _ngcontent-asb-c187="" class="modal-header bg-theme-primary">
					<h5 _ngcontent-asb-c187="" class="modal-title">วงล้อเสี่ยงโชค</h5><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-asb-c187="" aria-hidden="true">×</span></button>
				</div>
				<div _ngcontent-asb-c187="" class="modal-body" style="top: 15px;">
					<div class="wheel-horizontal superWheel _0" style="font-size: 16px; width: 300px; height: 300px;margin-top: 0px;">
					</div>
					<p id="btn_wheelspin"></p>
					<br>
					<table class="table text-white">
						<thead>
							<tr>
								<th scope="col" class="text-center" style="color:#b22222;">จำนวนเครดิต</th>
								<th scope="col" class="text-center" style="color:#b22222;">วันที่ทำรายการ</th>
							</tr>
						</thead>
						<tbody id="transaction_wheel">
						</tbody>

					</table>
				</div>
				<div _ngcontent-asb-c187="" class="modal-footer"><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">ปิด</button>
				</div>
			</div>
		</div>
	</div>
	<!--###################################### สุ่มวงล้อ ######################################-->
	<!-- สุ่มวงล้อ -->


	<!-- เลขชุด -->
	<!--###################################### เลขชุด ######################################-->
	<div _ngcontent-asb-c187="" id="number_lotto" tabindex="-1" role="dialog" aria-labelledby="Contactbox" aria-hidden="true" class="modal fade">
		<div _ngcontent-asb-c187="" role="document" class="modal-dialog modal-lg">
			<div _ngcontent-asb-c187="" class="modal-content" style="border-radius: 10px;">
				<div _ngcontent-asb-c187="" class="modal-header bg-theme-primary">
					<h5 _ngcontent-asb-c187="" class="modal-title">สร้างเลขชุด</h5>
					<button _ngcontent-asb-c187="" type="button" class="text-white close" data-dismiss="modal" aria-label="Close"><span _ngcontent-asb-c187="" aria-hidden="true">×</span></button>
				</div>
				<div _ngcontent-asb-c187="" class="modal-body" style="top: 15px;">
					<a _ngcontent-asb-c187="" onclick="lottoNumberModal()" class="btn btn-warning" style="">เพิ่มเลขชุด</a>
					<br>
					<br>
					<br>
					<table class="table text-white">
						<thead>
							<tr>
								<th scope="col" class="text-center" style="color:#b22222;">ลำดับ</th>
								<th scope="col" class="text-center" style="color:#b22222;">ชื่อชุด</th>
								<th scope="col" class="text-center" style="color:#b22222;">Action</th>
							</tr>
						</thead>
						<tbody id="tb_lotto_number">
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>

	<!--###################################### เลขชุด ######################################-->
	<!-- เลขชุด -->

	<!-- รายละเอียดเลขชุด -->
	<!--###################################### รายละเอียดเลขชุด ######################################-->
	<div _ngcontent-asb-c187="" id="number_lotto_detail" tabindex="-1" role="dialog" aria-labelledby="Contactbox" aria-hidden="true" class="modal fade">
		<div _ngcontent-asb-c187="" role="document" class="modal-dialog modal-lg">
			<div _ngcontent-asb-c187="" class="modal-content" style="border-radius: 10px;">
				<div _ngcontent-asb-c187="" class="modal-header bg-theme-primary">
					<h5 _ngcontent-asb-c187="" class="modal-title">เลขชุด</h5>
					<button _ngcontent-asb-c187="" type="button" class="text-white close" data-dismiss="modal" aria-label="Close"><span _ngcontent-asb-c187="" aria-hidden="true">×</span></button>
				</div>
				<div _ngcontent-asb-c187="" class="modal-body" style="top: 15px;">
					<br>
					<table class="table text-white">
						<thead>
							<tr>
								<th scope="col" class="text-center" style="color:#b22222;">ประเภท</th>
								<th scope="col" class="text-center" style="color:#b22222;">เลข</th>
							</tr>
						</thead>
						<tbody id="tb_lotto_number_detail">
						</tbody>

					</table>
				</div>
			</div>
		</div>
	</div>

	<!--###################################### รายละเอียดเลขชุด ######################################-->
	<!-- รายละเอียดเลขชุด -->

	<!-- เพิ่มเลขชุด -->
	<!--###################################### เพิ่มเลขชุด ######################################-->
	<div _ngcontent-asb-c187="" id="add_number_lotto" tabindex="-1" role="dialog" aria-labelledby="Contactbox" aria-hidden="true" class="modal fade">
		<div _ngcontent-asb-c187="" role="document" class="modal-dialog modal-lg">
			<div _ngcontent-asb-c187="" class="modal-content" style="border-radius: 10px;">
				<div _ngcontent-asb-c187="" class="modal-header bg-theme-primary">
					<h5 _ngcontent-asb-c187="" class="modal-title">เพิ่มเลขชุด</h5><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-asb-c187="" aria-hidden="true">×</span></button>
				</div>
				<div _ngcontent-asb-c187="" class="modal-body" style="top: 15px;">
					<div class="row">
						<div class="col-2"></div>
						<div class="col-3" style="text-align:right">
							<span>ชื่อชุด : </span>
						</div>
						<div class="col-5">
							<input type="text" id="lotto_number_name" class="form-control" style="text-align:center">
						</div>
						<div class="col-1">

						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-1"></div>
						<div class="col-4">
							<select id="lotto_reward_type" class="form-select form-control">
							</select>

						</div>
						<div class="col-3">
							<input type="number" class="form-control" style="text-align:center" id="lotto_number_input" placeholder="ตัวเลข">
						</div>
						<div class="col-3">
							<button class="btn btn-success" onclick="add_array_lotto()">เพิ่ม</button>
						</div>
					</div>
					<br><br>
					<table class="table text-white">
						<thead>
							<tr>
								<th scope="col" class="text-center" style="color:#b22222;">ประเภท</th>
								<th scope="col" class="text-center" style="color:#b22222;">เลข</th>
							</tr>
						</thead>
						<tbody id="lotto_number_array">
						</tbody>

					</table>

					<br><br>
					<div _ngcontent-asb-c187="" class="modal-footer"><button _ngcontent-asb-c187="" type="button" onclick="add_lotto_number()" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">เพิ่มเลขชุด</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--###################################### เพิ่มเลขชุด ######################################-->
	<!-- เพิ่มเลขชุด -->


	<!-- ############################## ผลประโยชน์หุ้นส่วน  ################################# -->
	<div class="x-modal modal" id="partnerProfit" tabindex="-1" role="dialog" data-loading-container=".js-modal-content" data-ajax-modal-always-reload="true" style="display: none;" aria-hidden="true">
		<div class="modal-dialog modal-dialog modal-lg" role="document" style="margin-top: 131px;">
			<div class="modal-content -modal-content" style="background-color: #1a283c;">
				<img src="" id="deposit" class="img-fluid d-lg-block d-none -border-top-modal" alt="">
				<button type="button" class="close f-1" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<div class="modal-body">
					<div class="x-login-form">
						<div data-animatable="fadeInModal" data-offset="0" class="-animatable-container animated fadeInModal">
							<div class="text-center">
								<h3 class="m-auto d-inline-block" style="color:#fff">
									รายงานผลประโยชน์หุ้นส่วน
								</h3>
							</div>
							<div class="text-center">
								<button class="btn btn-success" onclick="partnerProfit(true)">สัปดาห์ที่แล้ว</button>
								<button class="btn btn-success" onclick="partnerProfit()">สัปดาห์นี้</button>
							</div>
							<div class="text-center d-flex flex-column" style="overflow-x: auto;">
								<div class="m-auto ">
									<br>
									<div style="overflow-x:auto;">
										<table class="table table-sm table-bordered text-white">
											<thead>
												<tr class="text-center">
													<th class="table-profit" rowspan="2">ชื่อผู้ใช้</th>
													<th class="table-profit" colspan="5">หวย</th>
													<th class="table-profit" colspan="5">Slot&amp;Game</th>
												</tr>
												<tr>
													<th class="table-profit">หุ้น</th>
													<th class="table-profit">ยอดทั้งหมด</th>
													<th class="table-profit">ยอด Aff.</th>
													<th class="table-profit">ยอดได้เสีย</th>
													<th class="table-profit">ยอดรวม</th>
													<th class="table-profit">หุ้น</th>
													<th class="table-profit">ยอดทั้งหมด</th>
													<th class="table-profit">ยอด Aff.</th>
													<th class="table-profit">ยอดได้เสีย</th>
													<th class="table-profit">ยอดรวม</th>
												</tr>
											</thead>
											<tbody id="partner-profit">
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<img src="" class="img-fluid d-lg-block d-none -border-bottom-modal" alt="">
			</div>
		</div>
	</div>
	<!-- ############################## ผลประโยชน์หุ้นส่วน  ################################# -->
	<!-- Coupon Voucher -->
	<!--######################################  Coupon Voucher ######################################-->
	<div _ngcontent-asb-c187="" id="modal-coupon" tabindex="-1" role="dialog" aria-labelledby="Contactbox" aria-hidden="true" class="modal fade">
		<div _ngcontent-asb-c187="" role="document" class="modal-dialog modal-lg">
			<div _ngcontent-asb-c187="" class="modal-content" style="border-radius: 10px;">
				<div _ngcontent-asb-c187="" class="modal-header bg-theme-primary">
					<h5 _ngcontent-asb-c187="" class="modal-title">กรอกโค๊ด Promotion</h5><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-asb-c187="" aria-hidden="true">×</span></button>
				</div>
				<div _ngcontent-asb-c187="" class="modal-body" style="top: 15px;">
					<div class="row">
						<div class="col-1"></div>
						<div class="col-3" style="text-align:right">
							<span>Code : </span>
						</div>
						<div class="col-5">
							<input type="text" id="coupon_ipt" class="form-control" style="text-align:center">
						</div>
						<div class="col-1">
						</div>
					</div>
					<br>
					<div _ngcontent-asb-c187="" class="modal-footer">
						<button _ngcontent-asb-c187="" type="button" onclick="coupon_voucher()" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">ยืนยัน</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--######################################  Coupon Voucher ######################################-->
	<!--  Coupon Voucher -->







	<footer _ngcontent-asb-c187="" class="page-footer font-small">
		<div _ngcontent-dhq-c187="" class="footer-copyright py-2 text-center pc-view">
			<span>&copy; 2021 - <?=date("Y");?> | <a href="<?=$urlBase?>"><?=$webname?></a></span>
		</div>
		<div _ngcontent-dhq-c187="" class="footer-copyright mt-3 py-2 text-center mobile-view">
			<span>&copy; 2021 - <?=date("Y");?> | <a href="<?=$urlBase?>"><?=$webname?></a></span>
		</div>
	</footer>
	<!-- <div _ngcontent-asb-c187="" id="myNavbar" class="bt-navbar"><a _ngcontent-asb-c187="" routerlink="/main"
                class="col-3" href="#/main"><i _ngcontent-asb-c187="" class="sn-icon sn-icon--home2"></i>
                <div _ngcontent-asb-c187="" class="bt-menu-label">หน้าหลัก</div>
            </a><a _ngcontent-asb-c187="" routerlink="/lottery" class="col-3" href="#/lottery"><i _ngcontent-asb-c187=""
                    class="fas fa-star rotate"></i>
                <div _ngcontent-asb-c187="" class="bt-menu-label">แทงหวย</div>
            </a><a _ngcontent-asb-c187="" routerlink="/game-sl" class="col-3" href="#/game-sl"><i _ngcontent-asb-c187=""
                    class="fas fa-donate"></i>
                <div _ngcontent-asb-c187="" class="bt-menu-label">คาสิโน</div>
            </a><a _ngcontent-asb-c187="" routerlink="/deposit" class="col-3" href="#/deposit"><i _ngcontent-asb-c187=""
                    class="fas fa-donate"></i>
                <div _ngcontent-asb-c187="" class="bt-menu-label">ฝากเงิน</div>
            </a></div> -->
	<ngx-spinner _ngcontent-asb-c187="" bdcolor="rgba(0, 0, 0, 0.8)" size="default" color="#fff" type="timer" _nghost-asb-c12="" class="ng-tns-c12-0">
		<!---->
	</ngx-spinner>
</app-root>




<script src="<?=$theme_asset?>/js/jquery-3.3.1.min.js"></script>
<script src="<?=$theme_asset?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?=$theme_asset?>/js/popper.min.js"></script>
<script src="<?=$theme_asset?>/js/bootstrap.min.js"></script>
<script src="<?=$theme_asset?>/js/bootstrap-select.min.js"></script>
<script src="<?=$theme_asset?>/js/loadingoverlay.min.js"></script>
<script src="<?=$theme_asset?>/js/loadingoverlay_progress.min.js"></script>
<script src="<?=$theme_asset?>/js/odometer.min.js"></script>
<script src="<?=$theme_asset?>/js/bs-stepper.min.js"></script>
<script src="<?=$theme_asset?>/js/clipboard.min.js"></script>

<script src="<?=$theme_asset?>/js/numeral.min.js"></script>
<script src="<?=$theme_asset?>/js/jquery.countdown.min.js"></script>
<script src="<?=$theme_asset?>/js/countdown.js"></script>
<script src="<?=$theme_asset?>/js/html2canvas-1.0.0-alpha.12.min.js"></script>
<script src="<?=$theme_asset?>/js/download2.js"></script>
<script src="<?=$theme_asset?>/js/bs-breakpoints.min.js"></script>
<script src="<?=$theme_asset?>/js/jquery.marquee.js"></script>
<script src="<?=$theme_asset?>/js/signalr.min.js"></script>
<script src="<?=$theme_asset?>/js/pusher.min.js"></script>
<script src="<?=$theme_asset?>/js/sweetalert2.min.js"></script>
<script src="<?=$theme_asset?>/js/cleave.js"></script>
<script src="//s3auto.sgp1.digitaloceanspaces.com/js_wauto/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="//s3auto.sgp1.digitaloceanspaces.com/js_wauto/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="//s3auto.sgp1.digitaloceanspaces.com/js_wauto/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="//s3auto.sgp1.digitaloceanspaces.com/js_wauto/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="<?=$theme_asset?>/js/moment.min.js"></script>
<script src="<?=$theme_asset?>/js/moment-timezone.min.js"></script>
<script src="<?=$theme_asset?>/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?=$theme_asset?>/js/tempusdominus-bootstrap-4.js"></script>
<script src="<?=$theme_asset?>/js/superwheel.js"></script>
<script src="js/ufa.js?id=<?php echo time(); ?>"></script>
<script src="js/cip.js"></script>
<script>
	$(document).ready(async function() {
		<?php if (!empty($popupbanner)): ?>
			$('#test_modal').modal('show');
		<?php endif;?>
		// let encodedStringBtoA = btoa(await getIP());
		let encodedStringBtoA = btoa('1.1.1.1');
		$('.goto-game').attr('href', `game?c=${encodedStringBtoA}`);
	});
</script>

<script>
	let column_transection = [{
		title: "ประเภทธุรกรรม",
		className: "text-center",
		render(data, type, row) {
			if (data === 'ฝาก') {
				return `<span class="mo-bb badge rounded-pill bg-success">${data}</span>`;
			} else if (data === 'ถอน') {
				return `<span class="mo-bb badge rounded-pill bg-danger">${data}</span>`;
			} else if (data === 'ปรับยอด') {
				return `<span class="mo-bb badge rounded-pill bg-info">${data}</span>`;
			} else {
				return `<span class="mo-bb badge rounded-pill bg-light">${data}</span>`;
			}
		}
	}, {
		title: "วันที่",
		className: "text-center"
	}, {
		title: "จำนวนเงิน",
		className: "text-right"
	}, {
		title: "สถานะ",
		className: "text-center"
	}];

	function numberFormat(x) {
		var parts = parseFloat(x).toFixed(2).split(".");
		return parts[0].replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") + (parts[1] ? "." + parts[1] : "");
	}

	function getcolorNumber(val) {
		if (val < 0) {
			return `<span class="text-red">${numberFormat(val)}</span>`;
		} else if (val > 0) {
			return `<span class="text-green">${numberFormat(val)}</span>`;
		} else {
			return val;
		}
	}

	function getColorString(val) {
		if (val === 'ฝาก') {
			return `<span class="mo-bb badge rounded-pill bg-success">${val}</span>`;
		} else if (val === 'ถอน' || val === 'ยกเลิก') {
			return `<span class="mo-bb badge rounded-pill bg-danger">${val}</span>`;
		} else if (val === 'ปรับยอด') {
			return `<span class="mo-bb badge rounded-pill bg-info">${val}</span>`;
		} else if (val === 'สำเร็จ') {
			return `<span class="text-success">${val}</span>`;
		} else if (val === 'กำลังรอ') {
			return `<span class="text-warning">${val}</span>`;
		} else if (val === 'ยกเลิก') {
			return `<span class="text-danger">${val}</span>`;
		} else {
			return val;
		}
	}


	function tableTransec(tableData, id, column) {
		$('#' + id).DataTable({
			destroy: true,
			data: tableData,
			columns: column,
			responsive: {
				details: {
					display: $.fn.dataTable.Responsive.display.modal({
						header: function(row) {
							var data = row.data()
							return 'สมาชิก: ' + data[2]
						}
					}),
					renderer: $.fn.dataTable.Responsive.renderer.tableAll({
						tableClass: 'table'
					})
				}
			},
			language: {
				"lengthMenu": "แสดงข้อมูล _MENU_ แถว",
				"zeroRecords": "ไม่พบข้อมูลที่ต้องการ",
				"info": "แสดงหน้า _PAGE_ จาก _PAGES_",
				"infoEmpty": "ไม่พบข้อมูลที่ต้องการ",
				"infoFiltered": "(filtered from _MAX_ total records)",
				"search": 'ค้นหา',
				"paginate": {
					"previous": "ก่อนหน้านี้",
					"next": "หน้าต่อไป"
				}
			}
		})
	}

	function formatMoney(n, c, d, t) {
		var c = isNaN(c = Math.abs(c)) ? 2 : c,
			d = d == undefined ? "." : d,
			t = t == undefined ? "," : t,
			s = n < 0 ? "-" : "",
			i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
			j = (j = i.length) > 3 ? j % 3 : 0;

		return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
	}


	function logout_new() {
		Swal.fire({
			text: `คุณต้องการออกจากระบบ\nใช่หรือไม่?`,
			showCancelButton: true,
			confirmButtonText: 'Confirm',
		}).then((result) => {

			if (result.isConfirmed) {

				$.ajax({
					url: `api/logout`,
					method: 'get',
					success: function(data) {
						Swal.fire({
							icon: 'success',
							title: 'Success',
							text: 'ออกจากระบบเรียบร้อย',
						}).then((ss) => {
							window.location.reload();
						})
					}
				})
			}
		})
	}

	<?php if ($user): ?>
		let url_backend = `<?=$domain_api?>`;

		function formatDate(d) {
			let date = new Date(d);
			let dd = date.getDate();
			let mmm = date.getMonth() + 1;
			let yy = date.getFullYear();
			if (dd < 10) {
				dd = '0' + dd;
			}
			if (mmm < 10) {
				mmm = '0' + mmm;
			}
			let result = yy + "-" + mmm + "-" + dd;
			return result;
		}

		function numberFormat(x) {
			var parts = parseFloat(x).toFixed(2).split(".");
			return parts[0].replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,") + (parts[1] ? "." + parts[1] : "");
		}

		function partnerProfit(lastweek = false) {
			document.getElementById('partner-profit').innerHTML = '<tr><td colspan="12">กำลังโหลดข้อมูล.....</td></tr>';
			let endDate = moment().endOf('isoWeek').format('YYYY-MM-DD');
			let startDate = moment().startOf('isoWeek').format('YYYY-MM-DD');
			if (lastweek) {
				endDate = moment().subtract(1, 'weeks').endOf('isoWeek').format('YYYY-MM-DD');
				startDate = moment().subtract(1, 'weeks').startOf('isoWeek').format('YYYY-MM-DD');
			}

			$.ajax({
				url: url_backend + "/ApiPartnerList",
				method: 'post',
				data: {
					partner_front: <?=$info["id"]?>,
					app_type: "frontend",
					startDate: startDate,
					endDate: endDate

				},
				success: function(data) {
					let htm = '';
					if (data.data.length > 0) {
						for (let i = 0; i < data.data.length; i++) {
							let item = data.data[i]
							htm += `<tr>`;
							htm += `<th class="text-center table-profit1" style="color:#fff">${item.username}</th>`;
							htm += `<th class="text-center table-profit1" style="color:#fff">${item.percent_lotto}%</th>`;
							htm += `<th class="text-right table-profit1" style="color:#fff">${numberFormat(item.bet_lotto)}</th>`;
							htm += `<th class="text-right table-profit1" style="color:#fff">${numberFormat(item.aff_lotto)}</th>`;
							htm += `<th class="text-right table-profit1" style="color:#fff">${numberFormat(item.wl_lotto)}</th>`;
							htm += `<th class="text-right table-profit1" style="color:#fff">${numberFormat(item.sum_lotto)}</th>`;
							htm += `<th class="text-center table-profit1" style="color:#fff">${item.percent_game}%</th>`;
							htm += `<th class="text-right table-profit1" style="color:#fff">${numberFormat(item.bet)}</th>`;
							htm += `<th class="text-right table-profit1" style="color:#fff">${numberFormat(item.aff)}</th>`;
							htm += `<th class="text-right table-profit1" style="color:#fff">${numberFormat(item.wl)}</th>`;
							htm += `<th class="text-right table-profit1" style="color:#fff">${numberFormat(item.sum)}</th>`;
							htm += `</tr>`;
						}
					} else {
						htm = '<tr><td colspan="12">ไม่มีข้อมูล.....</td></tr>'
						$('#partnerProfit').modal('hide');
						Swal.fire(
							'แจ้งเตือน !',
							'ไม่มีข้อมูลผลประโยชน์หุ้นส่วน',
							'error'
						)
					}

					document.getElementById('partner-profit').innerHTML = htm;
				}
			})
		}

		async function Loading() {
			let timerInterval
			Swal.fire({
				title: 'Loading...',
				html: '',
				timer: 2000,
				allowOutsideClick: false,
				timerProgressBar: true,
				showConfirmButton: false,
				async didOpen() {
					await Swal.showLoading();
					const b = Swal.getHtmlContainer().querySelector('b')
					timerInterval = setInterval(() => {}, 100)
				},
				willClose() {
					clearInterval(timerInterval)
				}
			}).then((result) => {
				/* Read more about handling dismissals below */
				if (result.dismiss === Swal.DismissReason.timer) {
					Swal.fire(
						'แจ้งเตือน !',
						`โยกเงินเรียบร้อยแล้ว`,
						'success'
					);
					$.ajax({
						url: url_backend + '/ApiGetBalanceWallet',
						method: 'post',
						data: {
							id: <?=$info["id"]?>,
						},
						success: function(data) {
							if (data.statusCodeText == "200") {
								var rr = data.data[0];
								$('.ufabet-credit').html(`${formatMoney(rr.balance)} ฿`);
								$('.check-credit-status2').removeClass('fa-spin')
							} else {
								$('.ufabet-credit').html("0.00 ฿");
								$('.check-credit-status2').removeClass('fa-spin')
							}
						}
					})
				}
			});
		}


		function LoginLottoNew() {
			LoadingLotto()
			$.ajax({
				url: "/api/genAuthJwtUser/<?=$info["id"];?>",
				method: 'get',
				success: function(data) {
					// console.log('/api/genAuthJwtUser', data)
					let tokenUser = data.token;
					$.ajax({
						url: url_backend + '/ApiCreditLotto',
						method: 'post',
						headers: {
							"Authorization": "Bearer " + tokenUser
						},
						data: {
							member_id: '<?=$user?>',
							app_type: "lotto"
						},
						success: function(data) {
							// console.log('ApiCreditLotto1', data)
							$.ajax({
								url: "/api/genAuthJwt/<?=$info["id"];?>",
								method: 'get',
								success: function(data) {
									// console.log('/api/genAuthJwt', data)
									let token = data.token;
									$.ajax({
										url: url_backend + '/ApiLoginLotto',
										method: 'post',
										data: {
											memberID: <?=$info["id"]?>,
											username: '<?=$user?>',
											token: token
										},
										success: function(data) {
											// console.log('/ApiLoginLotto', data)
											if (data.result.statusCodeText == '200') {
												window.location.href = '<?=$domain_lotto?>/pages/main/index.html?token=' + data.result.token;
											}
										}
									})
								}
							})
						}
					})

				}
			})
		}

		function coupon_voucher() {
			let coupon = document.getElementById('coupon_ipt').value;
			if (!coupon) {
				Swal.fire(
					'แจ้งเตือน !',
					'กรุณาใส่ Code ก่อน',
					'error'
				)
			} else {
				$.ajax({
					url: url_backend + '/ApiCoupon',
					method: 'post',
					data: {
						id: '<?=$info["id"]?>',
						coupon: coupon,
						path: 'frontend'
					},
					success: function(data) {
						if (data.statusCodeText == '200') {
							Swal.fire(
								'แจ้งเตือน !',
								'ยินดีด้วย คุณได้รับ ' + data.amount + ' เครดิต',
								'success'
							)
							document.getElementById('coupon_ipt').value = '';
							$('#modal-coupon').modal('hide');
							checkCreditData();
						} else {
							Swal.fire(
								'แจ้งเตือน !',
								data.description,
								'error'
							)
						}
					}
				})

			}
		}

		async function LoadingLotto() {
			let timerInterval
			Swal.fire({
				title: 'Loading...',
				html: '',
				timer: 2000,
				allowOutsideClick: false,
				timerProgressBar: true,
				showConfirmButton: false,
				didOpen: async () => {
					await Swal.showLoading();
					const b = Swal.getHtmlContainer().querySelector('b')
					timerInterval = setInterval(() => {}, 100)
				},
				willClose: () => {
					clearInterval(timerInterval)
				}
			}).then((result) => {
				/* Read more about handling dismissals below */
				if (result.dismiss === Swal.DismissReason.timer) {}
			});
		}

		function LoginLottoAwards() {
			LoadingLotto()
			$.ajax({
				url: "/api/genAuthJwtUser/<?=$info["id"];?>",
				method: 'get',
				success: function(data) {
					let tokenUser = data.token;
					$.ajax({
						url: url_backend + '/ApiCreditLotto',
						method: 'post',
						headers: {
							"Authorization": "Bearer " + tokenUser
						},
						data: {
							member_id: '<?=$user?>',
							app_type: "lotto"
						},
						success: function(data) {
							$.ajax({
								url: "/api/genAuthJwt/<?=$info["id"];?>",
								method: 'get',
								success: function(data) {
									let token = data.token;
									$.ajax({
										url: url_backend + '/ApiLoginLotto',
										method: 'post',
										data: {
											memberID: <?=$info["id"]?>,
											username: '<?=$user?>',
											token: token
										},
										success: function(data) {
											if (data.result.statusCodeText == '200') {
												window.location.href = '<?=$domain_lotto?>/pages/awards/index.html?token=' + data.result.token;
											}
										}
									})
								}
							})
						}
					})

				}
			})
		}

		function LoginLottoHistory() {
			LoadingLotto()
			$.ajax({
				url: "/api/genAuthJwtUser/<?=$info["id"];?>",
				method: 'get',
				success: function(data) {
					let tokenUser = data.token;
					$.ajax({
						url: url_backend + '/ApiCreditLotto',
						method: 'post',
						headers: {
							"Authorization": "Bearer " + tokenUser
						},
						data: {
							member_id: '<?=$user?>',
							app_type: "lotto"
						},
						success: function(data) {
							$.ajax({
								url: "/api/genAuthJwt/<?=$info["id"];?>",
								method: 'get',
								success: function(data) {
									let token = data.token;
									$.ajax({
										url: url_backend + '/ApiLoginLotto',
										method: 'post',
										data: {
											memberID: <?=$info["id"]?>,
											username: '<?=$user?>',
											token: token
										},
										success: function(data) {
											if (data.result.statusCodeText == '200') {
												window.location.href = '<?=$domain_lotto?>/pages/history/index.html?token=' + data.result.token;
											}
										}
									})
								}
							})
						}
					})

				}
			})
		}
		//Check credit
		$.ajax({
			url: url_backend + '/ApiGetBalanceWallet',
			method: 'post',
			data: {
				id: <?=$info["id"]?>,
			},
			success: function(data) {
				if (data.statusCodeText == "200") {
					var rr = data.data[0];
					$('.ufabet-credit').html(`${formatMoney(rr.balance)} ฿`);
					$('.check-credit-status2').removeClass('fa-spin')
				} else {
					$('.ufabet-credit').html("0.00 ฿");
					$('.check-credit-status2').removeClass('fa-spin')
				}
			}
		});

		async function checkCreditData() {
			$.ajax({
				url: url_backend + '/ApiGetBalanceWallet',
				method: 'post',
				data: {
					id: <?=$info["id"]?>,
				},
				success: function(data) {
					if (data.statusCodeText == "200") {
						var rr = data.data[0];
						$('.ufabet-credit').html(`${formatMoney(rr.balance)} ฿`);
						$('.check-credit-status2').removeClass('fa-spin')
					} else {
						$('.ufabet-credit').html("0.00 ฿");
						$('.check-credit-status2').removeClass('fa-spin')
					}
				}
			});
		}

		async function Loading() {
			let timerInterval
			Swal.fire({
				title: 'Loading...',
				html: '',
				timer: 2000,
				allowOutsideClick: false,
				timerProgressBar: true,
				showConfirmButton: false,
				async didOpen() {
					await Swal.showLoading();
					const b = Swal.getHtmlContainer().querySelector('b')
					timerInterval = setInterval(() => {}, 100)
				},
				willClose() {
					clearInterval(timerInterval)
				}
			}).then((result) => {
				/* Read more about handling dismissals below */
				if (result.dismiss === Swal.DismissReason.timer) {
					Swal.fire(
						'แจ้งเตือน !',
						`โยกเงินเรียบร้อยแล้ว`,
						'success'
					);
					$.ajax({
						url: url_backend + '/ApiGetBalanceWallet',
						method: 'post',
						data: {
							id: <?=$info["id"]?>,
						},
						success: function(data) {
							if (data.statusCodeText == "200") {
								var rr = data.data[0];
								$('.ufabet-credit').html(`${formatMoney(rr.balance)} ฿`);
								$('.check-credit-status2').removeClass('fa-spin')
							} else {
								$('.ufabet-credit').html("0.00 ฿");
								$('.check-credit-status2').removeClass('fa-spin')
							}
						}
					})
				}
			});
		}

		///Withdraw
		$('#withdrawbtn').click(() => {
			$('#withdrawbtn').prop('disabled', true);
			var money = $('#money_w').val();
			if (money == '' || money < 1) {
				Swal.fire({
					icon: 'error',
					title: 'เกิดข้อผิดพลาด',
					text: 'กรุณากรอกจำนวนเงิน'
				}).then((result) => {
					$('#withdrawbtn').prop('disabled', false);
				});
			} else {
				$.ajax({
					url: url_backend + '/ApiGetBalanceWallet',
					method: 'post',
					data: {
						id: <?=$info["id"]?>,
					},
					success: function(data) {
						if (data.statusCodeText == "200") {
							var rr = data.data[0];
							if (money > rr.balance) {
								Swal.fire({
									title: 'เกิดข้อผิดพลาด',
									text: 'กรุณากรอกจำนวนเงินให้ถูกต้อง',
									icon: 'error',
									showCancelButton: false,
									confirmButtonColor: '#3085d6',
									cancelButtonColor: '#d33',
									confirmButtonText: 'OK'
								}).then((result) => {
									$('#withdrawbtn').prop('disabled', false);
								});
							} else {
								$.ajax({
									url: url_backend + '/checkWithdraw',
									method: 'post',
									data: {
										money: money,
										id: <?=$info["id"]?>,
										username: '<?=$user?>'
									},
									success: function(result) {
										if (result.statusCodeText == '200') {
											Swal.fire({
												title: 'แจ้งเตือน',
												text: 'ถอนเงินสำเร็จเงินจะเข้าภายใน 3 นาที',
												icon: 'success',
												showCancelButton: false,
												confirmButtonColor: '#3085d6',
												cancelButtonColor: '#d33',
												confirmButtonText: 'OK'
											}).then((result) => {
												window.location.reload();
											});
										} else {
											Swal.fire({
												icon: 'error',
												title: 'เกิดข้อผิดพลาด',
												text: result.msg,
												timer: 3000
											}).then((result) => {
												window.location.reload();
											});
										}

									}
								})
							}
						}
					}
				});
			}
		});

		function checkCreditLotto() {
			$.ajax({
				url: "/api/genAuthJwtUser/<?=$info["id"];?>",
				method: 'get',
				success: function(data) {
					let tokenUser = data.token;
					$.ajax({
						url: url_backend + '/ApiCheckCreditLotto',
						method: 'post',
						headers: {
							"Authorization": "Bearer " + tokenUser
						},
						data: {
							member_id: '<?=$user?>',
							userUFA: '<?=$user_ufa?>'
						},
						success: function(data) {

						}
					})

				}
			})
		}

		function checkTransectionUser() {
			$.ajax({
				url: "/api/genAuthJwt/<?=$info["id"];?>",
				method: 'get',
				success: function(data) {
					let tokenUser = data.token;
					$.ajax({
						url: url_backend + '/ApiqueryTransactionAll',
						method: 'post',
						dataType: "json",
						contentType: "application/json; charset=utf-8",
						headers: {
							"Authorization": "Bearer " + tokenUser,
						},
						data: JSON.stringify({
							mode: 'member',
							state: {
								game: 1,
								lotto: 1
							},
							infomode: true,
							user: '<?=$user?>',
						}),
						success: function(data) {
							let datatt = [];
							for (let ss of data.data) {
								let ddd = [
									ss.type,
									`${moment(ss.date).format('YYYY/MM/DD-hh:mm:ss')}`,
									numberFormat(ss.amount),
									getColorString(ss.state)
								]
								datatt.push(ddd);
							}
							tableTransec(datatt, 'member_transection', column_transection);
						}
					})

				}
			})
		}
		checkTransectionUser();

		$('.game-to-wallet').click(async () => {
			document.getElementsByClassName('game-to-wallet').disabled = true;
			Loading();
			await checkCreditLotto();
		})

		function setDataTransactionWheel() {
			$.ajax({
				url: 'apwheel/table/<?=$user?>',
				method: 'get',
				success: function(data) {
					let result = data.data;
					let htm = '';
					for (let i = 0; i < result.length; i++) {
						htm += '<tr>';
						htm += '<td scope="row" class="text-center" style="color:#000;">' + result[i].credit + ' เครดิต</td>';
						htm += '<td scope="row" class="text-center" style="color:#000;">' + result[i].create_date + '</td>';
						htm += '</tr>';
					}
					document.getElementById('transaction_wheel').innerHTML = htm;
					if ($('.modal.show').length < 1) {
						showWheelModal();
					}
				}
			})
		}

		function getDataSpinCan() {
			$.ajax({
				url: 'apwheel/getrole/<?=$user?>',
				method: 'get',
				success: function(data) {
					if (data.status) {
						document.getElementById('btn_wheelspin').innerHTML = '<button type="button" class="btn btn-primary btn-lg btn-block wheel-horizontal-spin-button" style="background: linear-gradient(180deg, rgb(174 146 221), rgb(225 157 214));color: #fff;border-bottom: 5px solid #2c5698;">สุ่มวงล้อ</button>';
					} else {
						document.getElementById('btn_wheelspin').innerHTML = '<button type="button" class="btn btn-primary btn-lg btn-block" style="background:  linear-gradient(180deg, rgb(174 146 221), rgb(225 157 214));color: #fff;border-bottom: 5px solid #2c5698;" disabled>วันนี้สุ่มไปแล้ว รอพรุ่งนี้นะคะ</button>';
					}
				}
			})
		}

		function showWheelModal() {
			$('#wheelspin').modal({
				show: true
			});
		}

		$('#wheelspin_pc').click(() => {
			<?php if ($setting_w['status'] == 1) {?>
				setWheel();
				getDataSpinCan();
				setDataTransactionWheel();
			<?php } else {?>
				Swal.fire(
					'แจ้งเตือน !',
					'วงล้อยังไม่เปิดใช้บริการ',
					'warning'
				)
			<?php }?>
		})
		$('#wheelspinufa').click(() => {
			<?php if ($setting_w['status'] == 1) {?>
				setWheel();
				getDataSpinCan();
				setDataTransactionWheel();
			<?php } else {?>
				Swal.fire(
					'แจ้งเตือน !',
					'วงล้อยังไม่เปิดใช้บริการ',
					'warning'
				)
			<?php }?>
		})
		$('#wheelspinufa_1').click(() => {
			<?php if ($setting_w['status'] == 1) {?>
				setWheel();
				getDataSpinCan();
				setDataTransactionWheel();
			<?php } else {?>
				Swal.fire(
					'แจ้งเตือน !',
					'วงล้อยังไม่เปิดใช้บริการ',
					'warning'
				)
			<?php }?>
		})

		$('#wheelspinufa_2').click(() => {
			<?php if ($setting_w['status'] == 1) {?>
				setWheel();
				getDataSpinCan();
				setDataTransactionWheel();
			<?php } else {?>
				Swal.fire(
					'แจ้งเตือน !',
					'วงล้อยังไม่เปิดใช้บริการ',
					'warning'
				)
			<?php }?>
		})

		$('#wheelspinufa_mobile').click(() => {
			<?php if ($setting_w['status'] == 1) {?>
				setWheel();
				getDataSpinCan();
				setDataTransactionWheel();
			<?php } else {?>
				Swal.fire(
					'แจ้งเตือน !',
					'วงล้อยังไม่เปิดใช้บริการ',
					'warning'
				)
			<?php }?>

		})

		var tick = new Audio('assets/sound/tick.mp3');
		$(document).on('click', '.wheel-horizontal-spin-button', function(e) {
			if (true) {
				$.ajax({
					url: 'apwheel/getrd/<?=$user?>/<?=$info["id"]?>',
					method: 'get',
					success: async function(data) {
						await $('.wheel-horizontal').superWheel('start', 'value', data.data.num);
						$(this).prop('disabled', true);
						$.ajax({
							url: url_backend + '/ApiUpdateWheelspinUser',
							method: 'post',
							data: {
								id: <?=$info["id"]?>,
								user: '<?=$user?>'
							},
							success: function(data) {}
						});
					}
				})
			} else {
				Swal.fire(
					'แจ้งเตือน !',
					'คุณยังไม่ได้ Login!',
					'warning'
				)
			}
		});

		function setWheel() {
			let result = [];
			<?php
$i = 0;
foreach ($setting_w_type as $v) {?>
				result[<?php echo $i; ?>] = {};
				result[<?php echo $i; ?>] = {
					des: '<?php echo $v['description'] ?>',
					color: '<?php echo $v['color'] ?>',
					credit: '<?php echo $v['value'] ?>',
					value: <?php echo $i++; ?>
				};
			<?php }?>



			let slices = [];
			for (let i = 0; i < result.length; i++) {
				slices[i] = {};
				slices[i].background = result[i].color;
				slices[i].text = result[i].credit != 0 ? result[i].credit + ' เครดิต' : 'ไม่ได้เครดิต';
				slices[i].des = result[i].des;
				slices[i].value = result[i].value;
				slices[i].credit = result[i].credit;
			}

			$('.wheel-horizontal').superWheel({
				slices: slices,
				text: {
					color: '<?=$setting_w['text_color']?>',
					offset: 8,
					size: <?=$setting_w['text_size']?>,
					letterSpacing: 0,
					orientation: '<?=$setting_w['text_type']?>',
				},
				line: {
					width: 6,
					color: "<?=$setting_w['line_color']?>"
				},
				outer: {
					width: 12,
					color: "<?=$setting_w['outer_color']?>"

				},
				inner: {
					width: 2,
					color: "<?=$setting_w['inner_color']?>",
				},
				marker: {
					background: "#00BCD4"
				},
				center: {
					width: 30,
					background: '<?=$asset_backend . $setting_w['center_color']?>',
					rotate: true,
					class: "",
					image: {
						url: "<?=$setting_w['center_img']?>",
						width: 45
					}
				},
				selector: "value"
			});

			$('.wheel-horizontal').superWheel('onStart', function(results) {
				$('.wheel-horizontal-spin-button').text('Spinning...');
			});

			$('.wheel-horizontal').superWheel('onStep', function(results) {
				if (typeof tick.currentTime !== 'undefined')
					tick.currentTime = 0;
				tick.play();
			});


			$('.wheel-horizontal').superWheel('onComplete', function(results) {
				let result = '';
				let title = '';
				let icon = '';
				if (results.credit != 0) {
					result = results.des;
					title = 'ยินดีด้วย!';
					icon = 'success';
				} else {
					result = results.des;
					title = 'เสียใจด้วย!';
					icon = 'error';
				}
				Swal.fire({
					type: '',
					icon: icon,
					title: title,
					html: result
				}).then((result) => {
					if (result) {
						document.getElementById('btn_wheelspin').innerHTML = '<button type="button" class="btn btn-primary btn-lg btn-block" disabled>วันนี้สุ่มไปแล้ว รอพรุ่งนี้นะคะ</button>';
						setDataTransactionWheel();

						$.ajax({
							url: url_backend + '/ApiGetBalanceWallet',
							method: 'post',
							data: {
								id: <?=$info["id"]?>
							},
							success: function(data) {
								if (data.statusCodeText == "200") {
									var rr = data.data[0];
									$('.ufabet-credit').html(`${formatMoney(rr.balance)} ฿`);
								} else {
									$('.ufabet-credit').html("0.00 ฿");
								}
							}
						})
					}
				});
				$('.wheel-horizontal-spin-button:disabled').prop('disabled', false).text('Spin');
			});
		}

		function openModalWinloss() {
			let desc =''
			if (desc == '') {
				$.ajax({
					url: url_backend + '/ApiCheckDay',
					method: 'post',
					data: {
						id: <?=$info["id"]?>,
						username: '<?=$user?>'
					},
					success: function(data) {
						document.getElementById('wl_img').src = data.data[0].img_name;
						document.getElementById('wl_desc').innerHTML = data.data[0].description;
						if (data.statusCodeText == '200') {
							document.getElementById('wl_receive').style.display = 'block';
							document.getElementById('wl_already').style.display = 'none';
						} else {
							document.getElementById('wl_already').innerHTML = data.msg;
							document.getElementById('wl_receive').style.display = 'none';
							document.getElementById('wl_already').style.display = 'block';
						}
					}
				})
			}
			$('#modal_winloss').modal('show');

		}

		function ReceiveBonusWinloss() {
			$.ajax({
				url: url_backend + '/ApiReceiveBonusWinloss',
				method: 'post',
				data: {
					id: <?=$info["id"]?>,
					username: '<?=$user?>'
				},
				success: function(data) {
					if (data.statusCodeText == '200') {
						Swal.fire(
							'แจ้งเตือน !',
							'รับโบนัสคืนยอดเสีย จำนวน ' + data.bonus + ' เรียบร้อยแล้ว',
							'success'
						).then((result) => {
							location.reload()
						})
					} else {
						Swal.fire(
							'แจ้งเตือน !',
							data.msg,
							'error'
						).then((result) => {
							location.reload()
						})
					}
				}
			})
		}

		function receiveBonus() {
			$.ajax({
				url: url_backend + '/ApiReceiveBonus',
				method: 'post',
				data: {
					id: <?=$info["id"]?>,
				},
				success: function(data) {
					if (data.statusCodeText == '200') {
						Swal.fire(
							'แจ้งเตือน !',
							'รับโบนัสแนะนำเพื่อน จำนวน ' + data.bonus + ' เรียบร้อยแล้ว',
							'success'
						).then((result) => {
							location.reload()
						})
					} else {
						Swal.fire(
							'แจ้งเตือน !',
							data.msg,
							'error'
						).then((result) => {
							location.reload()
						})
					}
				}
			})
		}

		setInterval(function() {
			$.ajax({
				url: `api/alert_topup?t=${Math.floor(Date.now() / 1000)}`,
				method: 'get',
				success: function(data) {
					if (data.status == true) {
						Swal.fire(
							'เติมเงินสำเร็จ !!',
							data.amount + ' บาท',
							'success'
						).then((result) => {
							location.reload()
						})
						$.ajax({
							url: "api/update_alert",
							method: 'post',
							data: {
								id: data.id
							},
							success: function(data) {}
						})
					}
				}
			})
		}, 15000);

		function copyLinkaffs() {
			var copyText = document.getElementById("refURL22s");
			copyText.select();
			document.execCommand("copy");
			Swal.fire({
				icon: 'success',
				title: 'สำเร็จ',
				text: 'ก็อปปี้ลิ้ง : ' + copyText.value
			});
		};

		function lottoNumberModal() {
			$('#add_number_lotto').modal('show');
			lottoRewardType();
		}
		let array_number = [];

		function add_array_lotto() {
			let number = document.getElementById('lotto_number_input').value;
			let type = document.getElementById('lotto_reward_type').value;
			if (!type) {
				Swal.fire(
					'แจ้งเตือน !',
					'กรุณาเลือกประเภทก่อน',
					'error'
				)
			} else {
				if (!number) {
					Swal.fire(
						'แจ้งเตือน !',
						'กรุณาใส่ตัวเลข',
						'error'
					)
				} else {
					let split_num = type.split('-');
					let id = split_num[0];
					type = split_num[1];
					let name = split_num[2];
					array_number.push({
						id: id,
						name: name,
						type: type,
						number: number
					});
					let htm = '';
					for (let i = 0; i < array_number.length; i++) {
						htm += '<tr>';
						htm += '<td scope="row" class="text-center" style="color:#000;">' + array_number[i].name + '</td>';
						htm += '<td scope="row" class="text-center" style="color:#000;">' + array_number[i].number + '</td>';
						htm += '</tr>';
					}
					document.getElementById('lotto_number_array').innerHTML = htm;
					document.getElementById('lotto_number_input').value = '';
				}
			}
		}

		function add_lotto_number() {
			let name = document.getElementById('lotto_number_name').value;
			if (!name) {
				Swal.fire(
					'แจ้งเตือน !',
					'กรุณาใส่ชื่อ',
					'error'
				)
			} else {
				if (array_number.length == 0) {
					Swal.fire(
						'แจ้งเตือน !',
						'กรุณาเพิ่มตัวเลขก่อน',
						'error'
					)
				} else {
					$.ajax({
						url: url_backend + '/ApiAddLottoNumber',
						method: 'post',
						data: {
							username: '<?=$user?>',
							list: array_number,
							name: name
						},
						success: function(data) {
							if (data.statusCodeText == '200') {
								Swal.fire(
									'แจ้งเตือน !',
									'เพิ่มเรียบร้อยแล้ว',
									'success'
								)
							}
							document.getElementById('lotto_number_name').value = '';
							$('#add_number_lotto').modal('hide');
							getLottoNumberGroup();

						}

					})
				}
			}
		}

		function getLottoNumberGroup() {
			$.ajax({
				url: url_backend + '/ApiGetLottoNumberGroup',
				method: 'post',
				data: {
					username: '<?=$user?>',
				},
				success: function(data) {
					if (data.statusCodeText == '200') {
						let htm = '';
						for (let i = 0; i < data.data.length; i++) {
							htm += '<tr>';
							htm += '<td scope="row" class="text-center" style="color:#000;">' + data.data[i].group_number + '</td>';
							htm += '<td scope="row" class="text-center" style="color:#000;">' + data.data[i].group_name + '</td>';
							htm += `<td scope="row" class="text-center" style="color:#000;"><button class="btn btn-info" onclick="GetDetailLottoNumberGroup('${data.data[i].group_number}')">รายละเอียด</button></td>`;
							htm += '</tr>';
						}
						document.getElementById('tb_lotto_number').innerHTML = htm;
					}
				}
			})
		}


		function GetDetailLottoNumberGroup(id) {
			$.ajax({
				url: url_backend + '/ApiGetLottoNumberDetail',
				method: 'post',
				data: {
					id: id,
					username: '<?=$user?>',
				},
				success: function(data) {
					if (data.statusCodeText == '200') {
						$('#number_lotto_detail').modal('show');
						let htm = '';
						for (let i = 0; i < data.data.length; i++) {
							htm += '<tr>';
							htm += '<td scope="row" class="text-center" style="color:#000;">' + data.data[i].description + '</td>';
							htm += '<td scope="row" class="text-center" style="color:#000;">' + data.data[i].numbers + '</td>';
							htm += '</tr>';
						}
						document.getElementById('tb_lotto_number_detail').innerHTML = htm;
					}
				}
			})
		}

		function lottoRewardType() {
			$.ajax({
				url: url_backend + '/ApiGetLottoTypeByGroup',
				method: 'post',
				data: {
					id: <?=$info["id"]?>,
				},
				success: function(data) {
					if (data.statusCodeText == '200') {
						let htm = '';
						htm = '<option selected value="">โปรดเลือกประเภท</option>';
						for (let i = 0; i < data.data.length; i++) {
							htm += '<option value="' + data.data[i].id + '-' + data.data[i].reward_name + '-' + data.data[i].description + '">' + data.data[i].description + '</option>';
						}
						document.getElementById('lotto_reward_type').innerHTML = htm;
					}
				}
			})
		}

		function openModalPromotion() {
			document.getElementById('promotion_detail_div').innerHTML = '';
			document.getElementById('promotion_detail_div1').innerHTML = '';
			$.ajax({
				url: "/apitopup/get_promotion_list",
				method: 'post',
				success: function(data) {
					let htm = '<option value="0" selected>เลือกโปรโมชั่น</option>';
					for (let i = 0; i < data.data.length; i++) {
						let type = '';
						if (data.data[i].type == 1) {
							type = '[เกมส์]';
						} else {
							type = '[หวย]'
						}
						htm += `<option value="${data.data[i].id}">${data.data[i].name}  [${data.data[i].pro_type}] ${type}</option>`;
					}
					document.getElementById('select_promotion').innerHTML = htm;
					document.getElementById('select_promotion1').innerHTML = htm;

				}
			})
			$('#modal-promotion_test').modal('show');
		}

		function onChangeSelectPromotion() {
			let id = document.getElementById('select_promotion').value;
			let htm = '';
			if (id == 0) {
				document.getElementById('promotion_detail_div').innerHTML = '';
				document.getElementById('promotion_detail_div').style.display = 'none';
			} else {
				$.ajax({
					url: url_backend + '/ApiQueryPromotionUserByID',
					method: 'post',
					data: {
						pro_id: id,
						id: <?=$info["id"]?>,
						username: '<?=$user?>'
					},
					success: function(result) {
						htm = `<h4>รายละเอียดโปรโมชั่น</h4>
                                <img src="${result.pro_detail[0].img_name}" class="img-fluid d-lg-block d-none " alt="">
                                <textarea id="editor" rows="15" class="form-control" name="text_1">${result.pro_detail[0].text}</textarea>
                                <br>`;
						if (!result.status) {
							htm += `<h2 class="text-center" style="color:red;">${result.msg}</h2>`;
						} else {
							htm += `<button id="btn_promotion" id-promotion="${result.pro_detail[0].id}" type-promotion="${result.pro_detail[0].pro_type}" type="submit" class="btn btn-primary btn-lg btn-block mt-5" onclick="ReceivePromotion(${result.pro_detail[0].id},${result.ref_trans})">รับโปรโมชั่น</button>`;
						}
						document.getElementById('promotion_detail_div').innerHTML = htm;

						document.getElementById('promotion_detail_div').style.display = 'block';
					}
				})
			}
		}

		function ReceivePromotion(id, trans) {
			document.getElementById('btn_promotion').innerHTML = 'กำลังรับโปรโมชั่น กรุณารอสักครู่....';
			document.getElementById('btn_promotion').disabled = true;
			$.ajax({
				url: url_backend + '/ApiReceivePromotion',
				method: 'post',
				data: {
					pro_id: id,
					id: <?=$info["id"]?>,
					username: '<?=$user?>',
					trans: trans
				},
				success: function(result) {
					if (result.statusCodeText == "200") {
						Swal.fire(
							'แจ้งเตือน !',
							'รับโปรโมชั่นเรียบร้อยแล้ว',
							'success'
						).then((result) => {
							location.reload()
						})
					} else {
						Swal.fire(
							'แจ้งเตือน !',
							result.msg,
							'error'
						).then((result) => {
							location.reload()
						})
					}
					console.log(result);
				}
			})
		}

		function onChangeSelectPromotion1() {
			let id = document.getElementById('select_promotion1').value;
			let htm = '';
			if (id == 0) {
				document.getElementById('promotion_detail_div1').innerHTML = '';
				document.getElementById('promotion_detail_div1').style.display = 'none';
			} else {
				$.ajax({
					url: url_backend + '/ApiQueryPromotionUserByID',
					method: 'post',
					data: {
						pro_id: id,
						id: <?=$info["id"]?>,
						username: '<?=$user?>'
					},
					success: function(result) {
						htm = `<h4>รายละเอียดโปรโมชั่น</h4>
                                <img src="${result.pro_detail[0].img_name}" class="img-fluid d-lg-block d-none " alt="">
                                <textarea id="editor" rows="15" class="form-control" name="text_1">${result.pro_detail[0].text}</textarea>
                                <br>`;
						if (!result.status) {
							htm += `<h2 class="text-center" style="color:red;">${result.msg}</h2>`;
						} else {
							htm += `<button id="btn_promotion" id-promotion="${result.pro_detail[0].id}" type-promotion="${result.pro_detail[0].pro_type}" type="submit" class="btn btn-primary btn-lg btn-block mt-5" onclick="ReceivePromotion(${result.pro_detail[0].id},${result.ref_trans})">รับโปรโมชั่น</button>`;
						}
						document.getElementById('promotion_detail_div1').innerHTML = htm;

						document.getElementById('promotion_detail_div1').style.display = 'block';
					}
				})
			}
		}


		var bank_number21 = parseInt(<?=$bank_info['accnum']?>);
		var clipboard4 = new ClipboardJS('.copy-account-number', {
			container: document.getElementById('Deposit'),
			text: function(trigger) {
				return '<?=$bank_info['accnum']?>';
			}
		});
		clipboard4.on('success', function(e) {
			$('.copy-account-number').text('คัดลอกสำเร็จ')
			setTimeout(function() {
				$('.copy-account-number').text('คัดลอกเลขบัญชี')
			}, 2000)
		});

		var bank_number22 = parseInt(<?=$bank_truewallet['accnum']?>);
		var clipboard4_twl = new ClipboardJS('.copy-account-number-twl', {
			container: document.getElementById('Deposit'),
			text: function(trigger) {
				return '<?=$bank_truewallet['accnum']?>';
			}
		});
		clipboard4_twl.on('success', function(e) {
			$('.copy-account-number-twl').text('คัดลอกสำเร็จ')
			setTimeout(function() {
				$('.copy-account-number-twl').text('คัดลอกเลขบัญชี')
			}, 2000)
		});


	<?php endif;?>
</script>
<script>
	$('.sidebarCollapse').on('click', function clickHandler(e) {
		e.preventDefault();
		$('sidebar').toggleClass('sidebar-open');
	});
</script>
<script>
	function sidebarOpen() {
		document.getElementById("sidebar").style.display = "block";
	}

	function sidebarClose() {
		document.getElementById("sidebar").style.display = "none";
	}
</script>

<script>

</script>

<!-- add-on -->