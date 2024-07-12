<app-root _nghost-nbo-c179="" ng-version="9.1.13">
	<div _ngcontent-nbo-c179="" id="app pc-view" style="min-height: calc(100% - 60px); overflow: hidden;">
		<div _ngcontent-nbo-c179="" class="fixed-bg"></div>
		<nav _ngcontent-nbo-c179="" id="sidebar" hidden="">
			<div _ngcontent-nbo-c179="" id="dismiss"><i class="fa fa-backspace fa-flip-horizontal"></i></div>
			<div _ngcontent-nbo-c179="" class="sidebar-header">
				<div _ngcontent-nbo-c179="" class="align-center text-center"><img _ngcontent-nbo-c179="" src="<?= $theme_asset ?>/asssets/img/user-128.png" alt="หวยฮานอย" width="110" height="100" onerror="this.src='../asssets/img/user-128.png'" class="rounded-circle"><br _ngcontent-nbo-c179=""><span _ngcontent-nbo-c179="" class="username"></span>
					<br _ngcontent-nbo-c179=""><i class="fa fa-coins"></i><span _ngcontent-nbo-c179="" data-id="credit_balance" class="badge badge-pill badge-danger thb" style="margin-left: 5px;"> ฿</span>
				</div>
			</div>

		</nav>

		<div _ngcontent-nbo-c179="" class="sticky-top pc-view" hidden="">
			<div _ngcontent-nbo-c179="" class="topnavbar">
				<div _ngcontent-nbo-c179="" class="container">
					<div _ngcontent-nbo-c179="" class="d-flex justify-content-between align-items-center">
						<div _ngcontent-nbo-c179="" class="d-flex align-items-center">
							<a _ngcontent-nbo-c179="" href="#/main" routerlink="/main" title="HENG168">
								<div _ngcontent-nbo-c179="" class="memberlogo">
									<div _ngcontent-nbo-c179="" class="logomember mobile-logo-view"><img _ngcontent-nbo-c179="" src="" id="logofull" style="max-height: 50px; width: auto;" alt="HENG168" title="HENG168"><img _ngcontent-nbo-c179="" src="" id="logosymbol" alt="HENG168" title="HENG168"></div>
								</div>
							</a>
						</div>
						<div _ngcontent-nbo-c179="" class="d-flex flex-row justify-content-between align-items-center">
							<div _ngcontent-nbo-c179="" id="menu-pc" class="d-flex justify-content-between align-items-center pc-view"><a _ngcontent-nbo-c179="" href="#/main" routerlink="/main" data-toggle="tooltip" data-placement="bottom" title="" data-id="lotto" data-original-title="หน้าแรก"><i _ngcontent-nbo-c179="" class="sn-icon sn-icon--home2"></i></a><a _ngcontent-nbo-c179="" href="#/lottery" routerlink="/lottery" data-toggle="tooltip" data-placement="bottom" title="" data-id="lottery" data-original-title="แทงหวย"><i _ngcontent-nbo-c179="" class="fa fa-star"></i></a><a _ngcontent-nbo-c179="" href="#/result-all" routerlink="/result-all" data-toggle="tooltip" data-placement="bottom" title="" data-id="award" data-original-title="ผลรางวัล"><i _ngcontent-nbo-c179="" class="fa fa-award"></i></a><a _ngcontent-nbo-c179="" href="#/deposit" routerlink="/deposit" data-toggle="tooltip" data-placement="bottom" title="" data-id="refill" data-original-title="ฝากเงิน"><i _ngcontent-nbo-c179="" class="fa fa-donate"></i></a>
								<div _ngcontent-nbo-c179="" class="linemenu-x"></div>
							</div>
							<div _ngcontent-nbo-c179="" id="re-credit"><span _ngcontent-nbo-c179="" data-id="credit_balance" class="badge badge-pill badge-light thb"> ฿</span>
							</div>
							<a _ngcontent-nbo-c179="" href="#" data-toggle="modal" data-target="#Contactbox">
								<div _ngcontent-nbo-c179="" class="btn-line"></div>
							</a>


						</div>
					</div>
				</div>
			</div>
		</div>
		<!--popup ตอนเข้าเว็ป-->
		<div _ngcontent-mqn-c187="" id="ModalRate" tabindex="-1" role="dialog" aria-labelledby="ModalRate" aria-hidden="true" class="modal fade">
			<div _ngcontent-mqn-c187="" role="document" class="modal-dialog modal-lg">
				<div _ngcontent-mqn-c187="" class="modal-content" style="border-radius: 10px;">
					<div _ngcontent-mqn-c187="" class="modal-header bg-theme-primary">
						<h5 _ngcontent-mqn-c187="" class="modal-title">อัตราการจ่าย</h5><button _ngcontent-mqn-c187="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-mqn-c187="" aria-hidden="true">×</span></button>
					</div>
					<div _ngcontent-mqn-c187="" class="modal-body text-center ng-star-inserted"><img _ngcontent-mqn-c187="" style="max-width: 100%; max-height: 100%; height: inherit !important;" src="<?= $theme_asset ?>/img/15_.png"><br _ngcontent-mqn-c187=""></div>
					<!---->
					<!---->
					<div _ngcontent-mqn-c187="" class="modal-footer"><button _ngcontent-mqn-c187="" type="button" data-dismiss="modal" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">ปิด</button>
					</div>
				</div>
			</div>
		</div>
		<div _ngcontent-nbo-c179="" class="app-navbar">
			<div _ngcontent-nbo-c179="" class="container pc-view">
				<div _ngcontent-nbo-c179="" style="height: 150px;" class="ng-star-inserted">
					<div _ngcontent-nbo-c179="" class="row">
						<div _ngcontent-nbo-c179="" class="text-left p-2 col pc-view"><strong _ngcontent-nbo-c179="" data-toggle="modal" data-target="#ModalRate" class="d-none d-sm-inline-block" style="cursor: pointer;">อัตราจ่าย</strong><span _ngcontent-nbo-c179="" class="d-none d-sm-inline-block" style="padding: 0px 0.5rem;">|</span>
							<strong _ngcontent-nbo-c179="" data-toggle="modal" data-target="#ModalRule" class="d-none d-sm-inline-block" style="cursor: pointer;">กฏกติกา</strong>
						</div>
						<div _ngcontent-nbo-c179="" class="text-right p-2 col">
							<!---->
						</div>
					</div>
					<div _ngcontent-nbo-c179="" class="row"><img _ngcontent-nbo-c179="" src="<?= $theme_asset ?>/asssets/img/logo.png" alt="" class="main-logo"></div>
				</div>
				<!---->
				<!---->

				<!-- Login PC-->
			</div>
			<div _ngcontent-nbo-c179="" class="login-bar ng-star-inserted pc-view">
				<div _ngcontent-nbo-c179="" class="mx-auto d-lg-flex v-card v-sheet theme--light">
					<div _ngcontent-nbo-c179="" class="container">
						<div _ngcontent-nbo-c179="" class="row py-2 text-light" style="font-size: 16px;">
							<div _ngcontent-nbo-c179="" class="col-sm-8 col-md-4 col-lg-2 my-2 d-flex order-0 order-md-0">
								<input _ngcontent-nbo-c179="" type="text" id="phone" name="phone" pattern="[0-9]*" value="" placeholder="เบอร์โทรศัพท์" class="form-control ng-untouched ng-pristine ng-valid">
							</div>
							<div _ngcontent-nbo-c179="" class="col-sm-12 col-md-4 col-lg-2 my-2 d-flex order-0 order-md-0">
								<input _ngcontent-nbo-c179="" id="password_m" type="password" name="password_m" pattern="[a-zA-Z0-9.+#_,$-]+" value="" placeholder="รหัสผ่าน" required="" class="form-control ng-untouched ng-pristine ng-invalid">
							</div>
							<div _ngcontent-nbo-c179="" class="col-sm-12 col-md-4 col-lg-2 my-2 d-flex order-0 order-md-0">
								<button _ngcontent-nbo-c179="" type="button" id="login_m" onclick="login_new()" class="btn  btn-block btn-gold" cursorshover="true">เข้าสู่ระบบ
								</button>
							</div>
							<div _ngcontent-nbo-c179="" class="col-6 col-sm-6 col-md-4 col-lg-2 my-2 d-flex order-0 order-md-0">
								<a _ngcontent-nbo-c179="" href="register" type="button" class="btn btn-block bg-light btn-mofont">
									สมัครสมาชิก</a>
							</div>
							<div _ngcontent-nbo-c179="" class="col-md-4 col-lg-2 my-2 col-12 d-flex order-1 order-md-0">
								<a _ngcontent-nbo-c179="" target="_blank" href="https://line.me/R/ti/p/<?= $line_admin ?>" class="btn btn-block bg-light btn-mofont" cursorshover="true">
									สมัครผ่านแอดมิน
								</a>
							</div>
							<div _ngcontent-nbo-c179="" class="col-6 col-sm-6 col-md-4 col-lg-2 my-2 d-flex order-0 order-md-0">
								<a _ngcontent-nbo-c179="" href="#" type="button" class="btn  btn-block bg-light btn-mofont" cursorshover="true">
									ลืมรหัสผ่าน </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!---->




			<!--Login Mobile-->
			<div _ngcontent-nbo-c179="" class="container mobile-view">
				<div _ngcontent-nbo-c179="" style="height: 150px;" class="ng-star-inserted">
					<div _ngcontent-nbo-c179="" class="row">
						<div _ngcontent-nbo-c179="" class="text-left p-2 col pc-view"><strong _ngcontent-nbo-c179="" data-toggle="modal" data-target="#ModalRate" class="d-none d-sm-inline-block" style="cursor: pointer;">อัตราจ่าย</strong><span _ngcontent-nbo-c179="" class="d-none d-sm-inline-block" style="padding: 0px 0.5rem;">|</span>
							<strong _ngcontent-nbo-c179="" data-toggle="modal" data-target="#ModalRule" class="d-none d-sm-inline-block" style="cursor: pointer;">กฏกติกา</strong>
						</div>
						<div _ngcontent-nbo-c179="" class="text-right p-2 col">
							<!---->
						</div>
					</div>
					<div _ngcontent-nbo-c179="" class="row"><img _ngcontent-nbo-c179="" src="" alt="" class="main-logo"></div>
				</div>
				<!---->
				<!---->

				<!-- Login PC-->
			</div>
			<div class="justify-content-center fixed-bg-mobile mobile-view" style=" width: 100vw !important;">
				<div class="container justify-content-center ">
					<div class="row justify-content-center">
						<div class="col-md-6 text-center mb-5">
							<img _ngcontent-nbo-c179="" src="<?= $theme_asset ?>/asssets/img/logo.png" alt="" class="main-logo" style="position: inherit;">
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-7 col-lg-5">
							<div class="wrap">

								<div class="login-wrap p-4 p-md-5">
									<div class="d-flex">
										<div class="w-100">
											<h3 class="mb-4" style="font-family: 'Mitr', sans-serif !important;">
												เข้าสู่ระบบ</h3>
										</div>
									</div>
									<div class="form-group mt-3">
										<span class="fa fa-duotone fa-mobile  field-icon " style="font-size: 1.3em !important;"></span>
										<input type="text" id="phone_m" name="phone_m" pattern="[0-9]*" value="" class="form-control" required>
										<label class="form-control-placeholder" for="username">เบอร์โทรศัพท์</label>
									</div>
									<div class="form-group">
										<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
										<input id="password_mm" type="password" name="password_mm" pattern="[a-zA-Z0-9.+#_,$-]+" value="" class="form-control" required>
										<label class="form-control-placeholder" for="password">รหัสผ่าน</label>
										<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
									</div>
									<div class="form-group">
										<button type="button" id='login_m' onclick="login_neww()" class="form-control btn   px-3 btn-gold">เข้าสู่ระบบ</button>
									</div>
									<div class="row">
										<div class="form-group col-6">
											<a type="button" href="register" class="btn btn-block btn-register-with-ad p-1">สมัครสมาชิก</a>
										</div>
										<div class="form-group col-6">
											<a type="button" href="https://line.me/R/ti/p/<?= $line_admin ?>" class="btn  btn-block btn-register-with-ad p-1">สมัครผ่านแอดมิน</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!---->
		</div>

		<div _ngcontent-nbo-c179="" class="container banner-colosal ng-star-inserted pc-view">
			<mdb-carousel _ngcontent-nbo-c179="" class="carousel slide">
				<div tabindex="0" class="carousel slide">
					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
						<ol class="carousel-indicators ng-star-inserted">
							<?php foreach ($banner as $k => $v) : ?>
								<?php if ($v->checkhome == 1) : ?>
									<?php if ($k == 0) : ?>
										<li class="ng-star-inserted active"></li>
									<?php else : ?>
										<li class="ng-star-inserted"></li>
									<?php endif; ?>
								<?php endif; ?>
							<?php endforeach; ?>
						</ol>
						<div class="carousel-inner" style="margin-top:-20px !important;">
							<?php foreach ($banner as $k => $v) : ?>
								<?php if ($v->checkhome == 1) : ?>
									<?php if ($k == 0) : ?>
										<div class="carousel-item active">
										<?php else : ?>
											<div class="carousel-item">
											<?php endif; ?>
											<div _ngcontent-nbo-c179="" class="view w-100 ais-hero">
												<img _ngcontent-nbo-c179="" alt="หวยฮานอย vip วันนี้" class="d-block w-100" src="<?= $asset_backend.$v->img_name ?>">
												<div _ngcontent-nbo-c179="" mdbwaveseffect="" class="mask rgba-black-slight waves-light"></div>
											</div>
											</div>
										<?php endif; ?>
									<?php endforeach; ?>
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

				<div _ngcontent-nbo-c179="" class="container">
					<div _ngcontent-nbo-c179="" class="container pb-0 container--fluid" hidden="">
						<div _ngcontent-nbo-c179="" class="row mt-2 mb-3">
							<div _ngcontent-nbo-c179="" class="py-0 pt-1 col-sm-6 col-md-3 col-12"><button _ngcontent-nbo-c179="" type="button" data-toggle="modal" data-target="#ModalRate" class="gold btn btn-lg btn-block"><span _ngcontent-nbo-c179="" class="v-btn__content"><strong _ngcontent-nbo-c179="">อัตราจ่าย</strong></span></button></div>
							<div _ngcontent-nbo-c179="" class="py-0 pt-1 col-sm-6 col-md-3 col-12"><button _ngcontent-nbo-c179="" type="button" data-toggle="modal" data-target="#ModalRule" class="gold btn btn-lg btn-block"><span _ngcontent-nbo-c179="" class="v-btn__content"><strong _ngcontent-nbo-c179="">กฏกติกา</strong></span></button></div>
							<div _ngcontent-nbo-c179="" class="py-0 pt-1 col-sm-6 col-md-3 col-12"><button _ngcontent-nbo-c179="" href="register" class="gold btn btn-lg btn-block"><span _ngcontent-nbo-c179="" class="v-btn__content"><strong _ngcontent-nbo-c179="">สมัครสมาชิก</strong></span></ฟ>
							</div>
							<div _ngcontent-nbo-c179="" class="py-0 pt-1 col-sm-6 col-md-3 col-12"><button _ngcontent-nbo-c179="" type="button" data-toggle="modal" data-target="#Contactbox" class="gold btn btn-lg btn-block"><span _ngcontent-nbo-c179="" class="v-btn__content"><strong _ngcontent-nbo-c179="">ติดต่อเรา</strong></span></button></div>
						</div>
						<div _ngcontent-nbo-c179="" class="gold" style="height: 5px; border-radius: 5px;"></div>
						<div _ngcontent-nbo-c179="" class="slogan mt-3">
							<div _ngcontent-nbo-c179="" class="container text-center p-2 container--fluid"><strong _ngcontent-nbo-c179=""> ผลรางวัล ประจำวันที่ 02/08/65</strong></div>
						</div>
					</div>
					<div _ngcontent-nbo-c179="" class="mb-3"></div>
					<div _ngcontent-nbo-c179="" id="ModalRule" tabindex="-1" role="dialog" aria-labelledby="ModalRule" aria-hidden="true" class="modal fade">
						<div _ngcontent-nbo-c179="" role="document" class="modal-dialog modal-lg">
							<div _ngcontent-nbo-c179="" class="modal-content" style="border-radius: 10px;">
								<div _ngcontent-nbo-c179="" class="modal-header bg-theme-primary">
									<h5 _ngcontent-nbo-c179="" class="modal-title">กฏและกติกา</h5><button _ngcontent-nbo-c179="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-nbo-c179="" aria-hidden="true">×</span></button>
								</div>
								<div _ngcontent-nbo-c179="" class="modal-body">
									<p _ngcontent-nbo-c179=""><span _ngcontent-nbo-c179="" class="pl-3">ยินดีต้อนรับสู่หวยออนไลน์</span> เพื่อให้ท่านทราบถึงสิทธิประโยชน์ของสมาชิกกรุณาอ่านข้อตกลงอย่างละเอียดก่อนที่จะลงทะเบียนสมัครเป็นสมาชิกและใช้บริการ
										<a _ngcontent-nbo-c179="" href="https:">HENG168</a> เมื่อสมัครสมาชิกแล้วทางเว็บจะถือว่า สมาชิกได้อ่านและยอมรับ <span _ngcontent-nbo-c179="" class="text-primary">"
											นโยบายและเงื่อนไขการให้บริการของเว็บไซต์"</span>
									</p>
									<p _ngcontent-nbo-c179=""><strong _ngcontent-nbo-c179=""><u _ngcontent-nbo-c179="" style="color: #3b5898;">การรักษาและช่วยเหลือการเดิมพันออนไลน์</u></strong><br _ngcontent-nbo-c179=""></p>
									<ul _ngcontent-nbo-c179="" class="pl-3">
										<li _ngcontent-nbo-c179="">ถ้าสมาชิกหลุดออกจากเว็บไซต์ระหว่างการเดิมพัน บัญชีของท่านจะไม่มีผลกระทบต่อผลลัพธ์ของการเดิมพัน </li>
										<li _ngcontent-nbo-c179="">ไม่ต้องวิตกกังวล ถ้าสมาชิกออกจากเว็บไซด์ระหว่างการเดิมพัน สมาชิกจะถูกออกจากระบบช่วงเวลาหนึ่ง จากนั้นสมาชิกสามารถเข้าสู่ระบบ <a _ngcontent-nbo-c179="" href="https:">HENG168</a> ได้อีกครั้งตามปกติ</li>
									</ul>
									<p _ngcontent-nbo-c179=""></p>
									<p _ngcontent-nbo-c179=""><strong _ngcontent-nbo-c179=""><u _ngcontent-nbo-c179="" style="color: #3b5898;">การให้ความคุ้มครอง</u></strong><br _ngcontent-nbo-c179=""><a _ngcontent-nbo-c179="" href="https:">HENG168</a> ได้มีการจัดเตรียม ระบบที่มีประสิทธิภาพ ความรวดเร็วและการบริการลูกค้าที่เป็นมิตร ถ้าหากท่านมีคำถามหรือคำแนะนำใด
										ๆ กรุณาอย่าลังเลใจที่จะโทรศัพท์มาทางฝ่ายบริการลูกค้า ซึ่งจะมีให้บริการตลอด 24 ชั่วโมง ทุกวันไม่มีวันหยุดและทางเราจะตอบกลับอย่างรวดเร็วที่สุด <a _ngcontent-nbo-c179="" href="https:">HENG168</a> ขอรับรองว่าจะรักษาข้อมูลส่วนตัวของท่านไว้เป็นความลับอย่างปลอดภัย
									</p>
									<p _ngcontent-nbo-c179=""><strong _ngcontent-nbo-c179=""><u _ngcontent-nbo-c179="" style="color: #3b5898;">ข้อตกลงในการเดิมพัน</u></strong><br _ngcontent-nbo-c179=""></p>
									<ul _ngcontent-nbo-c179="" class="pl-3">
										<li _ngcontent-nbo-c179="">เพื่อหลีกเลี่ยงปัญหาต่างๆในขณะที่ใช้งานเว็บไซต์ สมาชิกกรุณาอ่านกฎกติกาของบริษัทอย่างละเอียดและระมัดระวัง เมื่อสมาชิกเข้าสู่หน้าเดิมพันทางบริษัทจะถือว่าท่านได้ยอมรับข้อตกลงของทาง <a _ngcontent-nbo-c179="" href="https:">HENG168</a></li>
										<li _ngcontent-nbo-c179="">การเดิมพันจะต้องอยู่ใน <span _ngcontent-nbo-c179="" class="text-success">"ระยะเวลาที่กำหนด"</span> มิฉะนั้นจะถือว่าการเดิมครั้งนั้นเป็น <span _ngcontent-nbo-c179="" class="text-danger">"โมฆะ"</span> ถ้าการเดิมพันได้มีการยกเลิกหรือหยุดพักชั่วคราว
											เนื่องจากเหตุผลใดๆก็ตามก่อนการเล่น การเดิมพันครั้งนั้นจะถือว่าเป็น<span _ngcontent-nbo-c179="" class="text-danger">"โมฆะ"</span>และทางบริษัทจะคืนเครดิตให้กับสมาชิก </li>
										<li _ngcontent-nbo-c179="">เป็นความรับผิดชอบของสมาชิกที่จะคอยดูผลลัพธ์ จากช่องหน้าต่างที่แสดงให้เห็นถึงผลการเดิมพันแพ้หรือชนะ ทางบริษัทจะยึดถือข้อมูล
											<span _ngcontent-nbo-c179="" class="text-primary">"รายละเอียดการวางเดิมพัน"</span> ของสมาชิก ในกรณีที่สมาชิกมีความสงสัย และต้องการตรวจสอบข้อมูลในการคำนวณของการเดิมพันนั้นๆ
										</li>
										<li _ngcontent-nbo-c179="">
											ถ้าหากเกิดความผิดพลาดของระบบระหว่างการเดิมพันหรือความผิดพลาดโดยไม่ได้เจตนาของพนักงาน ทางบริษัทขอสงวนสิทธ์ที่จะแก้ไขผลลัพธ์ให้ถูกต้อง และจะมีการพิมพ์ข้อความที่ได้มีการแก้ไขเผยแพร่ไว้ที่แถบตัววิ่งในหน้าเว็บไซต์ บริษัทจะไม่มีการแจ้งสมาชิกเป็นการส่วนตัว
										</li>
										<li _ngcontent-nbo-c179="">
											เป็นความรับชอบของสมาชิกที่จะทำให้แน่ใจว่าชื่อผู้ใช้และรหัสผ่านสำหรับเข้าเว็ไซต์นั้นถูกต้อง และกรุณาเปลี่ยนรหัสผ่านของสมาชิกอย่างน้อยเดือนละครั้ง เพื่อความปลอดภัย ถ้าหากท่านพบหรือสงสัยว่ามีผู้อื่นได้เข้าไปเล่นในบัญชีของท่านโดยไม่รับอนุญาต กรุณา แจ้งตัวแทนของท่านทันทีเพื่อเปลี่ยนรหัสส่วนตัว
											(หากมีการเดิมพันก่อนที่จะเปลี่ยนรหัสเดิมจะถือว่าการเดิมพันนั้นเป็นผล)
										</li>
										<li _ngcontent-nbo-c179="">ก่อนเริ่มการเดิมพันแต่ละครั้ง ท่านสมาชิกควรจะตรวจสอบวงเงินของท่านเสียก่อน ถ้าหากท่านมีข้อสงสัยใดๆ เกี่ยวกับวงเงิน กรุณาแจ้งตัวแทนของท่านสมาชิกทันที</li>
										<li _ngcontent-nbo-c179="">ในกรณีที่เหตุการณ์ไม่คาดคิดเกิดขึ้น อย่างเช่น ข้อมูลสูญหายเนื่องจากระบบอินเตอร์เน็ตขัดข้อง ทางบริษัทจะมีการประกาศให้รู้ถึงสาเหตุ และวิธีการแก้ปัญหา</li>
										<li _ngcontent-nbo-c179="">ชั่วโมงการให้บริการ 24 ชั่วโมง/วัน และไม่มีวันหยุด</li>
									</ul>
									<p _ngcontent-nbo-c179=""></p>
									<p _ngcontent-nbo-c179=""><strong _ngcontent-nbo-c179=""><u _ngcontent-nbo-c179="" style="color: #3b5898;">ระบบการรักษาความปลอดภัย</u></strong><br _ngcontent-nbo-c179=""></p>
									<ul _ngcontent-nbo-c179="" class="pl-3">
										<li _ngcontent-nbo-c179="">ข้อมูลทางด้านบัญชีเพื่อวัตถุประสงค์เฉพาะบุคคล ข้อมูลที่ทางสมาชิกให้มาในการเปิดบัญชีจะถูกเก็บเป็นความลับขั้นสูงสุด ทางบริษัทจะไม่เผยแพร่ข้อมูลนี้ให้กับบุคคลที่สามหรือองค์กรอื่นๆ ล่วงรู้ ไม่ว่าจะเป็นบัญชีอีเมล์ หรือข้อมูลอื่นๆ
											ที่ทางสมาชิกกรอกในใบสมัคร ข้อมูลเหล่านี้จะใช้ในจุดมุ่งหมายที่ตั้งใจเอาไว้ให้เท่านั้น เช่น การส่งเช็คเงินสดสำหรับผู้ชนะหรือข้อมูลอื่นๆ ตามที่สมาชิกร้องขอ</li>
										<li _ngcontent-nbo-c179="">
											ความปลอดภัยทางบริษัทได้ใช้วิธีที่มีประสิทธิภาพมากที่สุดเพื่อทำให้ท่านแน่ใจในความปลอดภัยของข้อมูลของท่าน ทางเราจะพยายามให้ดีที่สุดที่จะรักษาความถูกต้องแน่นอน และความลับเฉพาะของข้อมูล เพื่อป้องกันไม่ให้ข้อมูลรั่วไหลหรือนำไปใช้อย่างไม่ถูกต้อง ถ้าท่านมีข้อสงสัยใดๆ
											ที่เกี่ยวข้องกับการรักษาความลับ ความปลอดภัยของข้อมูล กรุณาติดต่อฝ่ายบริการลูกค้า พวกเรายินดีให้บริการ 24 ชั่วโมง/วัน ทุกวันไม่มีวันหยุด</li>
									</ul>
									<p _ngcontent-nbo-c179=""></p>
									<p _ngcontent-nbo-c179="">บริษัทความยินดีเป็นอย่างยิ่งที่ได้รับใช้ท่าน</p>
								</div>
								<div _ngcontent-nbo-c179="" class="modal-footer"><button _ngcontent-nbo-c179="" type="button" data-dismiss="modal" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">ฉันเข้าใจและยอมรับ</button>
								</div>
							</div>
						</div>
					</div>
					<div _ngcontent-nbo-c179="" id="ModalRate" tabindex="-1" role="dialog" aria-labelledby="ModalRate" aria-hidden="true" class="modal fade">
						<div _ngcontent-nbo-c179="" role="document" class="modal-dialog modal-lg">
							<div _ngcontent-nbo-c179="" class="modal-content" style="border-radius: 10px;">
								<div _ngcontent-nbo-c179="" class="modal-header bg-theme-primary">
									<h5 _ngcontent-nbo-c179="" class="modal-title">อัตราการจ่าย</h5><button _ngcontent-nbo-c179="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-nbo-c179="" aria-hidden="true">×</span></button>
								</div>
								<div _ngcontent-nbo-c179="" class="modal-body text-center ng-star-inserted"><img _ngcontent-nbo-c179="" style="max-width: 100%; max-height: 100%; height: inherit !important;" src="#"><br _ngcontent-nbo-c179=""></div>
								<!---->
								<!---->
								<div _ngcontent-nbo-c179="" class="modal-footer"><button _ngcontent-nbo-c179="" type="button" data-dismiss="modal" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">ปิด</button>
								</div>
							</div>
						</div>
					</div>
					<div _ngcontent-nbo-c179="" id="Contactbox" tabindex="-1" role="dialog" aria-labelledby="Contactbox" aria-hidden="true" class="modal fade">
						<div _ngcontent-nbo-c179="" role="document" class="modal-dialog modal-lg">
							<div _ngcontent-nbo-c179="" class="modal-content" style="border-radius: 10px;">
								<div _ngcontent-nbo-c179="" class="modal-header bg-theme-primary">
									<h5 _ngcontent-nbo-c179="" class="modal-title">เลือกช่องทางการติดต่อเรา</h5><button _ngcontent-nbo-c179="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-nbo-c179="" aria-hidden="true">×</span></button>
								</div>
								<div _ngcontent-nbo-c179="" class="modal-body">
									<div _ngcontent-nbo-c179="" class="row ng-star-inserted">
										<div _ngcontent-nbo-c179="" class="col-6 col-sm-6 col-md-6 ng-star-inserted" data-index="0"><a _ngcontent-nbo-c179="" class="btn btn-outline-success btn-block btn-contactbox mb-3" style="margin-bottom: 0;" href="line://ti/p/@168h3"><span _ngcontent-nbo-c179=""><small _ngcontent-nbo-c179="" class="d-flex justify-content-center">ติดต่อผ่านไลน์ &nbsp;
														<!---->
													</small></span><i _ngcontent-nbo-c179="" class="fab fa-line"></i></a>
										</div>
										<!---->
										<div _ngcontent-nbo-c179="" class="col-6 col-sm-6 col-md-6"><a _ngcontent-nbo-c179="" href="#" onclick="Tawk_API.toggle();return false" data-dismiss="modal" class="btn btn-outline-danger btn-block btn-contactbox mb-0"><span _ngcontent-nbo-c179=""><small _ngcontent-nbo-c179="">แชทสดกับพนักงาน</small></span><i _ngcontent-nbo-c179="" class="fa fa-user"></i></a></div>
										<!---->
									</div>
									<!---->
									<!---->
								</div>
								<div _ngcontent-nbo-c179="" class="modal-footer"><button _ngcontent-nbo-c179="" type="button" data-dismiss="modal" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">ปิด</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<router-outlet _ngcontent-nbo-c179=""></router-outlet>
				<app-login _nghost-nbo-c13="" class="ng-star-inserted pc-view">
					<div _ngcontent-nbo-c13="" id="app">
						<div _ngcontent-nbo-c13="" class="container">
							<section _ngcontent-nbo-c13="" id="contentbox" class="contentbox ng-star-inserted" style="border-radius:20px ;">
								<div _ngcontent-nbo-c13="" id="government-section" class="p-2 xtarget">
									<div _ngcontent-nbo-c13="" class="section-title">กลุ่มหวยไทย</div>
									<div _ngcontent-nbo-c13="" class="row px-0 m-0">
										<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1">
											<div _ngcontent-nbo-c13="" class="huay-card huay-card-th">
												<div _ngcontent-nbo-c13="" class="huay-card-header huay-card-bg-th">
													<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/TH.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-th ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หวยไทย</span><span _ngcontent-nbo-c13="" class="huay-card-period huay-card-bg-th">01/08/65</span></span>
												</div>
												<div _ngcontent-nbo-c13="" class="huay-card-body">
													<div _ngcontent-nbo-c13="" class="huay-card-body-content">
														<div _ngcontent-nbo-c13="" class="d-flex flex-row">
															<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																<div _ngcontent-nbo-c13="" class="huay-card-title">รางวัลที่ 1
																</div>
																<div _ngcontent-nbo-c13="" class="p-0 text-award"> 436594
																</div>
															</div>
															<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																</div>
																<div _ngcontent-nbo-c13="" class="p-0 text-award"> 14 </div>
															</div>
														</div>
														<div _ngcontent-nbo-c13="" class="d-flex flex-row">
															<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวหน้า
																</div>
																<div _ngcontent-nbo-c13="" class="p-0 text-award"> 893, 266
																</div>
															</div>
															<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวล่าง
																</div>
																<div _ngcontent-nbo-c13="" class="p-0 text-award"> 447, 282
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<br>
										<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1">
											<div _ngcontent-nbo-c13="" class="huay-card huay-card-aom">
												<div _ngcontent-nbo-c13="" class="huay-card-header huay-card-bg-aom"><span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/AOM.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-aom ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หวยออมสิน</span><span _ngcontent-nbo-c13="" class="huay-card-period huay-card-bg-aom">01/08/65</span></span>
												</div>
												<div _ngcontent-nbo-c13="" class="huay-card-body">
													<div _ngcontent-nbo-c13="" class="huay-card-body-content">
														<div _ngcontent-nbo-c13="" class="d-flex flex-row">
															<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																</div>
																<div _ngcontent-nbo-c13="" class="p-0 text-award"> 830
																</div>
															</div>
															<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																</div>
																<div _ngcontent-nbo-c13="" class="p-0 text-award"> 82 </div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1">
											<div _ngcontent-nbo-c13="" class="huay-card huay-card-aom">
												<div _ngcontent-nbo-c13="" class="huay-card-header huay-card-bg-baac"><span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/BAAC.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-aom ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หวย
															ธกส</span><span _ngcontent-nbo-c13="" class="huay-card-period huay-card-bg-baac">16/07/65</span></span>
												</div>
												<div _ngcontent-nbo-c13="" class="huay-card-body">
													<div _ngcontent-nbo-c13="" class="huay-card-body-content">
														<div _ngcontent-nbo-c13="" class="d-flex flex-row">
															<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																</div>
																<div _ngcontent-nbo-c13="" class="p-0 text-award"> 059
																</div>
															</div>
															<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																</div>
																<div _ngcontent-nbo-c13="" class="p-0 text-award"> 07 </div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<br>
								<br>
								<br>
								<div _ngcontent-nbo-c13="" id="foreign-section" class="p-2 xtarget">
									<div _ngcontent-nbo-c13="" class="section-title">กลุ่มหวยต่างประเทศ</div>
									<div _ngcontent-nbo-c13="" class="mobile-view">
										<div _ngcontent-nbo-c13="" class="container bg-white result-card">
											<div _ngcontent-nbo-c13="" class="row border-bottom result-card-header"><span _ngcontent-nbo-c13="" class="col-6"> 02/08/65 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">3 ตัวบน</span><span _ngcontent-nbo-c13="" class="col-3 text-center">2 ตัวล่าง</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/LA.png) 0% 0% / 100% 100%;"></span> หวยลาวพัฒนา </span><span _ngcontent-nbo-c13="" class="col-3 text-center">481</span><span _ngcontent-nbo-c13="" class="col-3 text-center">94</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/VN.png) 0% 0% / 100% 100%;"></span> หวยฮานอย </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/HC2.png) 0% 0% / 100% 100%;"></span> หวยฮานอย VIP </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/HC.png) 0% 0% / 100% 100%;"></span> หวยฮานอยพิเศษ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/N22.png) 0% 0% / 100% 100%;"></span> ฮานอยรอบดึก </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/HNM.png) 0% 0% / 100% 100%;"></span> ฮานอยเช้า </span><span _ngcontent-nbo-c13="" class="col-3 text-center">006</span><span _ngcontent-nbo-c13="" class="col-3 text-center">13</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/LAM.png) 0% 0% / 100% 100%;"></span> ลาวเช้า </span><span _ngcontent-nbo-c13="" class="col-3 text-center">585</span><span _ngcontent-nbo-c13="" class="col-3 text-center">82</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/LAMID.png) 0% 0% / 100% 100%;"></span> ลาวเที่ยง </span><span _ngcontent-nbo-c13="" class="col-3 text-center">622</span><span _ngcontent-nbo-c13="" class="col-3 text-center">47</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/LAPM.png) 0% 0% / 100% 100%;"></span> หวยลาวทดแทน (ทุกวัน) </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/MY.png) 0% 0% / 100% 100%;"></span> หวยมาเลย์ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/HCD.png) 0% 0% / 100% 100%;"></span> ฮานอยเดย์ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/LARJ.png) 0% 0% / 100% 100%;"></span> ลาวร่วมใจ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">505</span><span _ngcontent-nbo-c13="" class="col-3 text-center">52</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/LAVL.png) 0% 0% / 100% 100%;"></span> ลาววิลล่า </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/LANK.png) 0% 0% / 100% 100%;"></span> ลาวนคร </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/CA.png) 0% 0% / 100% 100%;"></span> หวยแคนาดา </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/LATN.png) 0% 0% / 100% 100%;"></span> ลาวทูไนท์ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/LAECO.png) 0% 0% / 100% 100%;"></span> ลาวเศรษฐกิจ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">693</span><span _ngcontent-nbo-c13="" class="col-3 text-center">18</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/LADD.png) 0% 0% / 100% 100%;"></span> ลาวดีเดย์ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">510</span><span _ngcontent-nbo-c13="" class="col-3 text-center">50</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/HNCY.png) 0% 0% / 100% 100%;"></span> ฮานอยไชโย </span><span _ngcontent-nbo-c13="" class="col-3 text-center">077</span><span _ngcontent-nbo-c13="" class="col-3 text-center">08</span></div>
											<!---->
										</div>
									</div>
									<div _ngcontent-nbo-c13="" class="pc-view">
										<div _ngcontent-nbo-c13="" class="row px-0 m-0">
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-la">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-la huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/LA.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-la ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หวยลาวพัฒนา
																(จ,พ,ศ)</span><span _ngcontent-nbo-c13="" class="huay-card-bg-la huay-card-period">01/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 481
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 94
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/VN.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-vn ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หวยฮานอย</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-hc2">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-hc2 huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/HC2.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-hc2 ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หวยฮานอย VIP</span><span _ngcontent-nbo-c13="" class="huay-card-bg-hc2 huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-hc">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-hc huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/HC.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-hc ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หวยฮานอยพิเศษ</span><span _ngcontent-nbo-c13="" class="huay-card-bg-hc huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-n22">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-n22 huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/N22.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-n22 ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">ฮานอยรอบดึก</span><span _ngcontent-nbo-c13="" class="huay-card-bg-n22 huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-hnm">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-hnm huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/HNM.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-hnm ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">ฮานอยเช้า</span><span _ngcontent-nbo-c13="" class="huay-card-bg-hnm huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 006
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 13
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lam">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lam huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/LAM.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lam ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">ลาวเช้า</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lam huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 585
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 82
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lamid">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lamid huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/LAMID.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lamid ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">ลาวเที่ยง</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lamid huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 622
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 47
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lapm">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/LAPM.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lapm ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หวยลาวทดแทน
																(ทุกวัน)</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-my">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-my huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/MY.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-my ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หวยมาเลย์</span><span _ngcontent-nbo-c13="" class="huay-card-bg-my huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-hcd">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-hcd huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/HCD.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-hcd ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">ฮานอยเดย์</span><span _ngcontent-nbo-c13="" class="huay-card-bg-hcd huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-larj">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-larj huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/LARJ.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-larj ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">ลาวร่วมใจ</span><span _ngcontent-nbo-c13="" class="huay-card-bg-larj huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 505
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 52
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lavl">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lavl huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/LAVL.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lavl ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">ลาววิลล่า</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lavl huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lank">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lank huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/LANK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lank ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">ลาวนคร</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lank huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-ca">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-ca huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/CA.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-ca ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หวยแคนาดา</span><span _ngcontent-nbo-c13="" class="huay-card-bg-ca huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-latn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-latn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/LATN.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-latn ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">ลาวทูไนท์</span><span _ngcontent-nbo-c13="" class="huay-card-bg-latn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-laeco">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-laeco huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/LAECO.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-laeco ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">ลาวเศรษฐกิจ</span><span _ngcontent-nbo-c13="" class="huay-card-bg-laeco huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 693
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 18
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-ladd">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-ladd huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/LADD.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-ladd ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">ลาวดีเดย์</span><span _ngcontent-nbo-c13="" class="huay-card-bg-ladd huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 510
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 50
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-hncy">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-hncy huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/HNCY.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-hncy ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">ฮานอยไชโย</span><span _ngcontent-nbo-c13="" class="huay-card-bg-hncy huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 077
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 08
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!---->
										</div>
									</div>
								</div>
								<div _ngcontent-nbo-c13="" id="huayOnline-section" class="p-2 xtarget">
									<div _ngcontent-nbo-c13="" class="section-title">หวยออนไลน์</div>
									<div _ngcontent-nbo-c13="" class="mobile-view">
										<div _ngcontent-nbo-c13="" class="container bg-white result-card">
											<div _ngcontent-nbo-c13="" class="row border-bottom result-card-header"><span _ngcontent-nbo-c13="" class="col-6"> 02/08/65 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">3 ตัวบน</span><span _ngcontent-nbo-c13="" class="col-3 text-center">2 ตัวล่าง</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/LAD.png) 0% 0% / 100% 100%;"></span> ลาวดิจิตอล </span><span _ngcontent-nbo-c13="" class="col-3 text-center">717</span><span _ngcontent-nbo-c13="" class="col-3 text-center">61</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/HCO.png) 0% 0% / 100% 100%;"></span> เวียดนาม พิเศษ ออนไลน์ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/VNO.png) 0% 0% / 100% 100%;"></span> เวียดนาม ออนไลน์ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/HC2O.png) 0% 0% / 100% 100%;"></span> เวียดนาม VIP ออนไลน์ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/LAV.png) 0% 0% / 100% 100%;"></span> หวยลาว VIP </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/DJA.png) 0% 0% / 100% 100%;"></span> ดาวโจนส์อเมริกา </span><span _ngcontent-nbo-c13="" class="col-3 text-center">302</span><span _ngcontent-nbo-c13="" class="col-3 text-center">00</span></div>
											<!---->
										</div>
									</div>
									<div _ngcontent-nbo-c13="" class="pc-view">
										<div _ngcontent-nbo-c13="" class="row px-0 m-0">
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lad">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lad huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/LAD.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lad ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">ลาวดิจิตอล</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lad huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 717
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 61
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-hco">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-hco huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/HCO.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-hco ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">เวียดนาม พิเศษ
																ออนไลน์</span><span _ngcontent-nbo-c13="" class="huay-card-bg-hco huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vno">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vno huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/VNO.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-vno ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">เวียดนาม ออนไลน์</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vno huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-hc2o">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-hc2o huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/HC2O.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-hc2o ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">เวียดนาม VIP
																ออนไลน์</span><span _ngcontent-nbo-c13="" class="huay-card-bg-hc2o huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/LAV.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-vn ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หวยลาว
																VIP</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-dja">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-dja huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/DJA.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-dja ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">ดาวโจนส์อเมริกา</span><span _ngcontent-nbo-c13="" class="huay-card-bg-dja huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 302
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 00
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!---->
										</div>
									</div>
								</div>
								<div _ngcontent-nbo-c13="" id="foreignStock-section" class="p-2 xtarget">
									<div _ngcontent-nbo-c13="" class="section-title">หวยหุ้น</div>
									<div _ngcontent-nbo-c13="" class="mobile-view">
										<div _ngcontent-nbo-c13="" class="container bg-white result-card">
											<div _ngcontent-nbo-c13="" class="row border-bottom result-card-header"><span _ngcontent-nbo-c13="" class="col-6"> 02/08/65 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">3 ตัวบน</span><span _ngcontent-nbo-c13="" class="col-3 text-center">2 ตัวล่าง</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/HKR.png) 0% 0% / 100% 100%;"></span> หุ้นเกาหลี </span><span _ngcontent-nbo-c13="" class="col-3 text-center">613</span><span _ngcontent-nbo-c13="" class="col-3 text-center">78</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/NHK0.png) 0% 0% / 100% 100%;"></span> หุ้นนิเคอิ เช้า </span><span _ngcontent-nbo-c13="" class="col-3 text-center">941</span><span _ngcontent-nbo-c13="" class="col-3 text-center">94</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/NHK1.png) 0% 0% / 100% 100%;"></span> หุ้นนิเคอิ บ่าย </span><span _ngcontent-nbo-c13="" class="col-3 text-center">473</span><span _ngcontent-nbo-c13="" class="col-3 text-center">62</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/HSC0.png) 0% 0% / 100% 100%;"></span> หุ้นฮั่งเส็ง เช้า </span><span _ngcontent-nbo-c13="" class="col-3 text-center">986</span><span _ngcontent-nbo-c13="" class="col-3 text-center">98</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/HSC1.png) 0% 0% / 100% 100%;"></span> หุ้นฮั่งเส็ง บ่าย </span><span _ngcontent-nbo-c13="" class="col-3 text-center">921</span><span _ngcontent-nbo-c13="" class="col-3 text-center">63</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/CHA0.png) 0% 0% / 100% 100%;"></span> หุ้นจีน เช้า </span><span _ngcontent-nbo-c13="" class="col-3 text-center">068</span><span _ngcontent-nbo-c13="" class="col-3 text-center">19</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/CHA1.png) 0% 0% / 100% 100%;"></span> หุ้นจีน บ่าย </span><span _ngcontent-nbo-c13="" class="col-3 text-center">002</span><span _ngcontent-nbo-c13="" class="col-3 text-center">85</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/TW.png) 0% 0% / 100% 100%;"></span> หุ้นไต้หวัน </span><span _ngcontent-nbo-c13="" class="col-3 text-center">723</span><span _ngcontent-nbo-c13="" class="col-3 text-center">46</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/HSG.png) 0% 0% / 100% 100%;"></span> หุ้นสิงคโปร์ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/IND.png) 0% 0% / 100% 100%;"></span> หุ้นอินเดีย </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/RUS.png) 0% 0% / 100% 100%;"></span> หุ้นรัสเซีย </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/EGY.png) 0% 0% / 100% 100%;"></span> หุ้นอียิปต์ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/GER.png) 0% 0% / 100% 100%;"></span> หุ้นเยอรมัน </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/ENG.png) 0% 0% / 100% 100%;"></span> หุ้นอังกฤษ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/DJ.png) 0% 0% / 100% 100%;"></span> หุ้นดาวโจนส์ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">840</span><span _ngcontent-nbo-c13="" class="col-3 text-center">73</span></div>
											<!---->
										</div>
									</div>
									<div _ngcontent-nbo-c13="" class="pc-view">
										<div _ngcontent-nbo-c13="" class="row px-0 m-0">
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/HKR.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-hkr ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นเกาหลี</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 613
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 78
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/NHK0.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-vn ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นนิเคอิ เช้า</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 941
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 94
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/NHK1.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-vn ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นนิเคอิ บ่าย</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 473
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 62
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/HSC0.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-vn ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นฮั่งเส็ง เช้า</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 986
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 98
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/HSC1.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-vn ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นฮั่งเส็ง บ่าย</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 921
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 63
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/CHA0.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-vn ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นจีน
																เช้า</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 068
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 19
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/CHA1.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-vn ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นจีน
																บ่าย</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 002
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 85
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/TW.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-vn ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นไต้หวัน</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 723
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 46
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/HSG.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-vn ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นสิงคโปร์</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/IND.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-vn ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นอินเดีย</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/RUS.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-vn ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นรัสเซีย</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/EGY.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-vn ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นอียิปต์</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/GER.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-vn ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นเยอรมัน</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/ENG.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-vn ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นอังกฤษ</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-vn">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/DJ.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-vn ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นดาวโจนส์</span><span _ngcontent-nbo-c13="" class="huay-card-bg-vn huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 840
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 73
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!---->
										</div>
									</div>
								</div>
								<div _ngcontent-nbo-c13="" id="stockVip-section" class="p-2 xtarget">
									<div _ngcontent-nbo-c13="" class="section-title">หวยหุ้นพิเศษ</div>
									<div _ngcontent-nbo-c13="" class="mobile-view">
										<div _ngcontent-nbo-c13="" class="container bg-white result-card">
											<div _ngcontent-nbo-c13="" class="row border-bottom result-card-header"><span _ngcontent-nbo-c13="" class="col-6"> 02/08/65 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">3 ตัวบน</span><span _ngcontent-nbo-c13="" class="col-3 text-center">2 ตัวล่าง</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/NHKV0.png) 0% 0% / 100% 100%;"></span> หุ้นนิเคอิ พิเศษ เช้า </span><span _ngcontent-nbo-c13="" class="col-3 text-center">364</span><span _ngcontent-nbo-c13="" class="col-3 text-center">65</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/NHKV1.png) 0% 0% / 100% 100%;"></span> หุ้นนิเคอิ พิเศษ บ่าย </span><span _ngcontent-nbo-c13="" class="col-3 text-center">303</span><span _ngcontent-nbo-c13="" class="col-3 text-center">97</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/CHAV0.png) 0% 0% / 100% 100%;"></span> หุ้นจีน พิเศษ เช้า </span><span _ngcontent-nbo-c13="" class="col-3 text-center">415</span><span _ngcontent-nbo-c13="" class="col-3 text-center">21</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/CHAV1.png) 0% 0% / 100% 100%;"></span> หุ้นจีน พิเศษ บ่าย </span><span _ngcontent-nbo-c13="" class="col-3 text-center">648</span><span _ngcontent-nbo-c13="" class="col-3 text-center">82</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/HSCV0.png) 0% 0% / 100% 100%;"></span> หุ้นฮั่งเส็ง พิเศษ เช้า </span><span _ngcontent-nbo-c13="" class="col-3 text-center">295</span><span _ngcontent-nbo-c13="" class="col-3 text-center">13</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/HSCV1.png) 0% 0% / 100% 100%;"></span> หุ้นฮั่งเส็ง พิเศษ บ่าย </span><span _ngcontent-nbo-c13="" class="col-3 text-center">903</span><span _ngcontent-nbo-c13="" class="col-3 text-center">47</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/TWV.png) 0% 0% / 100% 100%;"></span> หุ้นไต้หวัน พิเศษ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">107</span><span _ngcontent-nbo-c13="" class="col-3 text-center">92</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/HKRV.png) 0% 0% / 100% 100%;"></span> หุ้นเกาหลี พิเศษ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">437</span><span _ngcontent-nbo-c13="" class="col-3 text-center">54</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/HSGV.png) 0% 0% / 100% 100%;"></span> หุ้นสิงคโปร์ พิเศษ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/HVNV0.png) 0% 0% / 100% 100%;"></span> หุ้นเวียดนาม พิเศษ เช้า </span><span _ngcontent-nbo-c13="" class="col-3 text-center">279</span><span _ngcontent-nbo-c13="" class="col-3 text-center">87</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/HVNV1.png) 0% 0% / 100% 100%;"></span> หุ้นเวียดนาม พิเศษ บ่าย </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/RUSV.png) 0% 0% / 100% 100%;"></span> หุ้นรัสเซีย พิเศษ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/ENGV.png) 0% 0% / 100% 100%;"></span> หุ้นอังกฤษ พิเศษ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/GERV.png) 0% 0% / 100% 100%;"></span> หุ้นเยอรมัน พิเศษ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/DJS.png) 0% 0% / 100% 100%;"></span> หุ้นดาวโจนส์พิเศษ </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<!---->
										</div>
									</div>
									<div _ngcontent-nbo-c13="" class="pc-view">
										<div _ngcontent-nbo-c13="" class="row px-0 m-0">
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lapm">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-stock-special"><span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/NHKV0.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lapm ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นนิเคอิ พิเศษ
																เช้า</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-period-special">
																02/08/65 </span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 364
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 65
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lapm">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-stock-special"><span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/NHKV1.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lapm ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นนิเคอิ พิเศษ
																บ่าย</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-period-special">
																02/08/65 </span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 303
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 97
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lapm">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-stock-special"><span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/CHAV0.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lapm ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นจีน
																พิเศษ เช้า</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-period-special">
																02/08/65 </span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 415
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 21
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lapm">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-stock-special"><span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/CHAV1.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lapm ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นจีน
																พิเศษ บ่าย</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-period-special">
																02/08/65 </span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 648
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 82
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lapm">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-stock-special"><span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/HSCV0.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lapm ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นฮั่งเส็ง พิเศษ
																เช้า</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-period-special">
																02/08/65 </span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 295
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 13
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lapm">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-stock-special"><span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/HSCV1.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lapm ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นฮั่งเส็ง พิเศษ
																บ่าย</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-period-special">
																02/08/65 </span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 903
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 47
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lapm">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-stock-special"><span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/TWV.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lapm ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นไต้หวัน พิเศษ</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-period-special"> 02/08/65
															</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 107
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 92
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lapm">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-stock-special"><span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/HKRV.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lapm ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นเกาหลี พิเศษ</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-period-special"> 02/08/65
															</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 437
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 54
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lapm">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-stock-special"><span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/HSGV.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lapm ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นสิงคโปร์
																พิเศษ</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-period-special"> 02/08/65
															</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lapm">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-stock-special"><span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/HVNV0.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lapm ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นเวียดนาม พิเศษ
																เช้า</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-period-special">
																02/08/65 </span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 279
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 87
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lapm">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-stock-special"><span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/HVNV1.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lapm ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นเวียดนาม พิเศษ
																บ่าย</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-period-special">
																02/08/65 </span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lapm">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-stock-special"><span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/RUSV.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lapm ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นรัสเซีย พิเศษ</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-period-special"> 02/08/65
															</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lapm">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-stock-special"><span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/ENGV.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lapm ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นอังกฤษ พิเศษ</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-period-special"> 02/08/65
															</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lapm">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-stock-special"><span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/GERV.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lapm ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นเยอรมัน พิเศษ</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-period-special"> 02/08/65
															</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-lapm">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-stock-special"><span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/DJS.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-lapm ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">หุ้นดาวโจนส์พิเศษ</span><span _ngcontent-nbo-c13="" class="huay-card-bg-lapm huay-card-period-special"> 02/08/65
															</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xxx
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> xx
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!---->
										</div>
									</div>
								</div>
								<div _ngcontent-nbo-c13="" id="huay4D-section" class="p-2 xtarget" hidden="">
									<div _ngcontent-nbo-c13="" class="section-title">หวย 4D</div>
									<div _ngcontent-nbo-c13="" class="mobile-view">
										<div _ngcontent-nbo-c13="" class="container bg-white result-card">
											<div _ngcontent-nbo-c13="" class="row border-bottom result-card-header"><span _ngcontent-nbo-c13="" class="col-6"> 02/08/65 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">3 ตัวบน</span><span _ngcontent-nbo-c13="" class="col-3 text-center">2 ตัวล่าง</span></div>
											<!---->
										</div>
									</div>
									<div _ngcontent-nbo-c13="" class="pc-view">
										<div _ngcontent-nbo-c13="" class="row px-0 m-0">
											<!---->
										</div>
									</div>
								</div>
								<div _ngcontent-nbo-c13="" id="foreignStock-section" class="p-2 xtarget">
									<div _ngcontent-nbo-c13="" class="section-title">หวยยี่กี</div>
									<div _ngcontent-nbo-c13="" class="mobile-view">
										<div _ngcontent-nbo-c13="" class="container bg-white result-card">
											<div _ngcontent-nbo-c13="" class="row border-bottom result-card-header"><span _ngcontent-nbo-c13="" class="col-6"> 02/08/65 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">3 ตัวบน</span><span _ngcontent-nbo-c13="" class="col-3 text-center">2 ตัวล่าง</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 1 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">072</span><span _ngcontent-nbo-c13="" class="col-3 text-center">89</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 2 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">050</span><span _ngcontent-nbo-c13="" class="col-3 text-center">42</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 3 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">674</span><span _ngcontent-nbo-c13="" class="col-3 text-center">01</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 4 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">932</span><span _ngcontent-nbo-c13="" class="col-3 text-center">12</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 5 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">047</span><span _ngcontent-nbo-c13="" class="col-3 text-center">63</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 6 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">489</span><span _ngcontent-nbo-c13="" class="col-3 text-center">71</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 7 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">981</span><span _ngcontent-nbo-c13="" class="col-3 text-center">25</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 8 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">754</span><span _ngcontent-nbo-c13="" class="col-3 text-center">66</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 9 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">843</span><span _ngcontent-nbo-c13="" class="col-3 text-center">00</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 10 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">926</span><span _ngcontent-nbo-c13="" class="col-3 text-center">41</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 11 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">039</span><span _ngcontent-nbo-c13="" class="col-3 text-center">81</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 12 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">468</span><span _ngcontent-nbo-c13="" class="col-3 text-center">77</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 13 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">088</span><span _ngcontent-nbo-c13="" class="col-3 text-center">49</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 14 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">124</span><span _ngcontent-nbo-c13="" class="col-3 text-center">30</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 15 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">653</span><span _ngcontent-nbo-c13="" class="col-3 text-center">70</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 16 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">183</span><span _ngcontent-nbo-c13="" class="col-3 text-center">74</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 17 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">697</span><span _ngcontent-nbo-c13="" class="col-3 text-center">10</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 18 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">954</span><span _ngcontent-nbo-c13="" class="col-3 text-center">70</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 19 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">536</span><span _ngcontent-nbo-c13="" class="col-3 text-center">74</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 20 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">653</span><span _ngcontent-nbo-c13="" class="col-3 text-center">14</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 21 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">315</span><span _ngcontent-nbo-c13="" class="col-3 text-center">64</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 22 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">728</span><span _ngcontent-nbo-c13="" class="col-3 text-center">85</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 23 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">198</span><span _ngcontent-nbo-c13="" class="col-3 text-center">56</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 24 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">450</span><span _ngcontent-nbo-c13="" class="col-3 text-center">93</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 25 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">987</span><span _ngcontent-nbo-c13="" class="col-3 text-center">83</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 26 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">905</span><span _ngcontent-nbo-c13="" class="col-3 text-center">37</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 27 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">007</span><span _ngcontent-nbo-c13="" class="col-3 text-center">56</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 28 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">548</span><span _ngcontent-nbo-c13="" class="col-3 text-center">23</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 29 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">879</span><span _ngcontent-nbo-c13="" class="col-3 text-center">45</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 30 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">706</span><span _ngcontent-nbo-c13="" class="col-3 text-center">34</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 31 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">268</span><span _ngcontent-nbo-c13="" class="col-3 text-center">81</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 32 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">907</span><span _ngcontent-nbo-c13="" class="col-3 text-center">46</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 33 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">069</span><span _ngcontent-nbo-c13="" class="col-3 text-center">03</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 34 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">962</span><span _ngcontent-nbo-c13="" class="col-3 text-center">87</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 35 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">841</span><span _ngcontent-nbo-c13="" class="col-3 text-center">35</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 36 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">823</span><span _ngcontent-nbo-c13="" class="col-3 text-center">53</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 37 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">969</span><span _ngcontent-nbo-c13="" class="col-3 text-center">85</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 38 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">450</span><span _ngcontent-nbo-c13="" class="col-3 text-center">29</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 39 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">498</span><span _ngcontent-nbo-c13="" class="col-3 text-center">63</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 40 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">614</span><span _ngcontent-nbo-c13="" class="col-3 text-center">27</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 41 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 42 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 43 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 44 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 45 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 46 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 47 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 48 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 49 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 50 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 51 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 52 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 53 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 54 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 55 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 56 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 57 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 58 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 59 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 60 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 61 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 62 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 63 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 64 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 65 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 66 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 67 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 68 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 69 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 70 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 71 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 72 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 73 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 74 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>

											<!---->
										</div>
									</div>
									<div _ngcontent-nbo-c13="" class="pc-view">
										<div _ngcontent-nbo-c13="" class="row px-0 m-0">
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																1</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 072
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 89
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																2</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 050
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 42
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																3</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 674
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 01
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																4</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 932
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 12
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																5</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 047
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 63
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																6</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 489
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 71
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																7</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 981
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 25
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																8</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 754
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 66
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																9</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 843
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 00
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																10</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 926
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 41
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																11</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 039
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 81
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																12</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 468
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 77
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																13</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 088
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 49
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																14</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 124
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 30
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																15</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 653
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 70
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																16</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 183
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 74
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																17</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 697
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 10
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																18</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 954
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 70
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																19</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 536
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 74
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																20</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 653
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 14
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																21</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 315
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 64
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																22</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 728
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 85
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																23</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 198
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 56
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																24</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 450
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 93
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																25</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 987
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 83
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																26</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 905
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 37
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																27</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 007
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 56
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																28</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 548
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 23
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																29</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 879
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 45
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																30</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 706
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 34
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!---->
										</div>
									</div>
								</div>
								<div _ngcontent-nbo-c13="" id="foreignStock-section" class="p-2 xtarget">
									<div _ngcontent-nbo-c13="" class="section-title">หวยยี่กีห้านาที</div>
									<div _ngcontent-nbo-c13="" class="mobile-view">
										<div _ngcontent-nbo-c13="" class="container bg-white result-card">
											<div _ngcontent-nbo-c13="" class="row border-bottom result-card-header"><span _ngcontent-nbo-c13="" class="col-6"> 02/08/65 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">3 ตัวบน</span><span _ngcontent-nbo-c13="" class="col-3 text-center">2 ตัวล่าง</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 1 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">072</span><span _ngcontent-nbo-c13="" class="col-3 text-center">89</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 2 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">050</span><span _ngcontent-nbo-c13="" class="col-3 text-center">42</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 3 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">674</span><span _ngcontent-nbo-c13="" class="col-3 text-center">01</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 4 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">932</span><span _ngcontent-nbo-c13="" class="col-3 text-center">12</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 5 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">047</span><span _ngcontent-nbo-c13="" class="col-3 text-center">63</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 6 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">489</span><span _ngcontent-nbo-c13="" class="col-3 text-center">71</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 7 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">981</span><span _ngcontent-nbo-c13="" class="col-3 text-center">25</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 8 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">754</span><span _ngcontent-nbo-c13="" class="col-3 text-center">66</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 9 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">843</span><span _ngcontent-nbo-c13="" class="col-3 text-center">00</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 10 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">926</span><span _ngcontent-nbo-c13="" class="col-3 text-center">41</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 11 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">039</span><span _ngcontent-nbo-c13="" class="col-3 text-center">81</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 12 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">468</span><span _ngcontent-nbo-c13="" class="col-3 text-center">77</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 13 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">088</span><span _ngcontent-nbo-c13="" class="col-3 text-center">49</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 14 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">124</span><span _ngcontent-nbo-c13="" class="col-3 text-center">30</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 15 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">653</span><span _ngcontent-nbo-c13="" class="col-3 text-center">70</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 16 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">183</span><span _ngcontent-nbo-c13="" class="col-3 text-center">74</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 17 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">697</span><span _ngcontent-nbo-c13="" class="col-3 text-center">10</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 18 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">954</span><span _ngcontent-nbo-c13="" class="col-3 text-center">70</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 19 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">536</span><span _ngcontent-nbo-c13="" class="col-3 text-center">74</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 20 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">653</span><span _ngcontent-nbo-c13="" class="col-3 text-center">14</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 21 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">315</span><span _ngcontent-nbo-c13="" class="col-3 text-center">64</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 22 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">728</span><span _ngcontent-nbo-c13="" class="col-3 text-center">85</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 23 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">198</span><span _ngcontent-nbo-c13="" class="col-3 text-center">56</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 24 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">450</span><span _ngcontent-nbo-c13="" class="col-3 text-center">93</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 25 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">987</span><span _ngcontent-nbo-c13="" class="col-3 text-center">83</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 26 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">905</span><span _ngcontent-nbo-c13="" class="col-3 text-center">37</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 27 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">007</span><span _ngcontent-nbo-c13="" class="col-3 text-center">56</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 28 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">548</span><span _ngcontent-nbo-c13="" class="col-3 text-center">23</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 29 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">879</span><span _ngcontent-nbo-c13="" class="col-3 text-center">45</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 30 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">706</span><span _ngcontent-nbo-c13="" class="col-3 text-center">34</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 31 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">268</span><span _ngcontent-nbo-c13="" class="col-3 text-center">81</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 32 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">907</span><span _ngcontent-nbo-c13="" class="col-3 text-center">46</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 33 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">069</span><span _ngcontent-nbo-c13="" class="col-3 text-center">03</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 34 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">962</span><span _ngcontent-nbo-c13="" class="col-3 text-center">87</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 35 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">841</span><span _ngcontent-nbo-c13="" class="col-3 text-center">35</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 36 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">823</span><span _ngcontent-nbo-c13="" class="col-3 text-center">53</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 37 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">969</span><span _ngcontent-nbo-c13="" class="col-3 text-center">85</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 38 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">450</span><span _ngcontent-nbo-c13="" class="col-3 text-center">29</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 39 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">498</span><span _ngcontent-nbo-c13="" class="col-3 text-center">63</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 40 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">614</span><span _ngcontent-nbo-c13="" class="col-3 text-center">27</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 41 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 42 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 43 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 44 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 45 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 46 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 47 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 48 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 49 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 50 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 51 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 52 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 53 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 54 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 55 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 56 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 57 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 58 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 59 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 60 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 61 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 62 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 63 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 64 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 65 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 66 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 67 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 68 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 69 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 70 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 71 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 72 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 73 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>
											<div _ngcontent-nbo-c13="" class="row border-bottom my-1 ng-star-inserted"><span _ngcontent-nbo-c13="" class="col-6 result-text-product-mobile"><span _ngcontent-nbo-c13="" class="flag-icon result-flag-border" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span> รอบที่ 74 </span><span _ngcontent-nbo-c13="" class="col-3 text-center">xxx</span><span _ngcontent-nbo-c13="" class="col-3 text-center">xx</span></div>

											<!---->
										</div>
									</div>
									<div _ngcontent-nbo-c13="" class="pc-view">
										<div _ngcontent-nbo-c13="" class="row px-0 m-0">
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																1</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 072
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 89
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																2</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 050
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 42
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																3</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 674
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 01
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																4</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 932
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 12
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																5</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 047
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 63
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																6</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 489
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 71
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																7</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 981
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 25
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																8</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 754
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 66
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																9</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 843
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 00
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																10</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 926
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 41
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																11</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 039
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 81
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																12</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 468
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 77
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																13</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 088
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 49
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																14</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 124
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 30
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																15</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 653
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 70
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																16</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 183
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 74
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																17</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 697
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 10
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																18</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 954
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 70
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																19</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 536
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 74
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																20</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 653
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 14
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																21</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 315
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 64
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																22</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 728
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 85
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																23</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 198
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 56
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																24</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 450
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 93
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																25</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 987
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 83
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																26</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 905
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 37
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																27</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 007
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 56
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																28</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 548
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 23
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																29</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 879
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 45
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div _ngcontent-nbo-c13="" class="col-12 col-sm-12 col-md-6 col-lg-4 px-1 py-1 ng-star-inserted">
												<div _ngcontent-nbo-c13="" class="huay-card huay-card-yk">
													<div _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-header">
														<span _ngcontent-nbo-c13="" class="huay-card-icon" style="background: url(<?= $theme_asset ?>/asssets/img/YK.png) 0% 0% / 100% 100%;"></span><span _ngcontent-nbo-c13="" class="huay-card-product huay-card-product-yk ml-2"><span _ngcontent-nbo-c13="" class="huay-card-product-name">รอบที่
																30</span><span _ngcontent-nbo-c13="" class="huay-card-bg-yk huay-card-period">02/08/65</span></span>
													</div>
													<div _ngcontent-nbo-c13="" class="huay-card-body">
														<div _ngcontent-nbo-c13="" class="huay-card-body-content">
															<div _ngcontent-nbo-c13="" class="d-flex flex-row">
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">3 ตัวบน
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 706
																	</div>
																</div>
																<div _ngcontent-nbo-c13="" class="text-center w-50 m-0 d-flex flex-column">
																	<div _ngcontent-nbo-c13="" class="huay-card-title">2 ตัวล่าง
																	</div>
																	<div _ngcontent-nbo-c13="" class="p-0 text-award"> 34
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!---->
										</div>
									</div>
								</div>
							</section>
							<!---->
							<!---->
						</div>
						<br>


				</app-login>
				<!---->


		</div>
		<!-- footer-->
		<footer _ngcontent-dhq-c187="" class="page-footer font-small">
			<div _ngcontent-dhq-c187="" class="footer-copyright py-2 text-center">
				<span>&copy; 2021 - <?= date("Y"); ?> | <a href="<?= $urlBase ?>"><?= $webname ?></a></span>
			</div>
			<div _ngcontent-dhq-c187="" class="mobile-view">
				<div _ngcontent-dhq-c187="" style="height: 50px;"></div>
			</div>
		</footer>

		<ngx-spinner _ngcontent-nbo-c179="" bdcolor="rgba(0, 0, 0, 0.8)" size="default" color="#fff" type="timer" _nghost-nbo-c12="" class="ng-tns-c12-0">
			<!---->
		</ngx-spinner>
</app-root>


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