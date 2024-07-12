<app-root _nghost-asb-c187="" ng-version="9.1.13">
	<div _ngcontent-asb-c187="" id="app" style="min-height: calc(100% - 60px); overflow: hidden;">
		<div _ngcontent-asb-c187="" class="fixed-bg"></div>
		<nav _ngcontent-asb-c187="" id="sidebar" class="">
			<div _ngcontent-asb-c187="" id="dismiss"><i _ngcontent-asb-c187="" class="fas fa-backspace fa-flip-horizontal"></i></div>
			<div _ngcontent-asb-c187="" class="sidebar-header">
				<div _ngcontent-asb-c187="" class="align-center text-center"><img _ngcontent-asb-c187="" src="<?= $theme_asset ?>/img/user-128.png" alt="หวยฮานอย" width="110" height="100" onerror="this.src='<?= $theme_asset ?>/img/user-128.png'" class="rounded-circle"><br _ngcontent-asb-c187=""><span _ngcontent-asb-c187="" class="username"><?= $user ?></span><br _ngcontent-asb-c187=""><i _ngcontent-asb-c187="" class="fas fa-coins"></i><span _ngcontent-asb-c187="" data-id="credit_balance" class="badge badge-pill badge-danger thb ufabet-credit" style="margin-left: 5px;">0.00 ฿</span></div>
			</div>
			<ul _ngcontent-asb-c187="" class="list-unstyled components">
				<li _ngcontent-asb-c187=""><a _ngcontent-asb-c187="" href="#/setting-profile" routerlink="/setting-profile"><i _ngcontent-asb-c187="" class="fas fa-user-cog"></i>
						ตั้งค่าบัญชีผู้ใช้</a></li>
				<li _ngcontent-asb-c187=""><a _ngcontent-asb-c187="" href="#/setting-bank" routerlink="/setting-bank"><i _ngcontent-asb-c187="" class="fas fa-money-check"></i>
						บัญชีธนาคาร</a></li>
				<li _ngcontent-asb-c187=""><a _ngcontent-asb-c187="" href="#/howto" routerlink="/howto"><i _ngcontent-asb-c187="" class="fas fa-info-circle"></i> วิธีใช้งาน</a></li>
				<li _ngcontent-asb-c187=""><a _ngcontent-asb-c187="" href="#" data-toggle="modal" data-target="#Contactbox"><i _ngcontent-asb-c187="" class="fas fa-handshake"></i>
						ศูนย์ช่วยเหลือ</a></li>
			</ul>
			<ul _ngcontent-asb-c187="" class="list-unstyled CTAs">
				<li _ngcontent-asb-c187=""><a _ngcontent-asb-c187="" href="javascript:void(0);" class="logout" onclick="logout_new()"><i _ngcontent-asb-c187="" class="fas fa-sign-out-alt"></i> ออกจากระบบ </a></li>
			</ul>
		</nav>
		<div _ngcontent-asb-c187="" class="sticky-top">
			<div _ngcontent-asb-c187="" class="topnavbar">
				<div _ngcontent-asb-c187="" class="container">
					<div _ngcontent-asb-c187="" class="d-flex justify-content-between align-items-center">
						<div _ngcontent-asb-c187="" class="d-flex align-items-center"><a _ngcontent-asb-c187="" href="#/main" routerlink="/main" title="HENG168">
								<div _ngcontent-asb-c187="" class="memberlogo">
									<div _ngcontent-asb-c187="" class="logomember mobile-logo-view"><img _ngcontent-asb-c187="" src="<?= $theme_asset ?>/img/logo-social-sq.png" id="logofull" style="max-height: 50px; width: auto;" alt="HENG168" title="HENG168"><img _ngcontent-asb-c187="" src="<?= $theme_asset ?>/img/icon64_64.png" id="logosymbol" alt="HENG168" title="HENG168"></div>
								</div>
							</a></div>
						<div _ngcontent-asb-c187="" class="d-flex flex-row justify-content-between align-items-center">
							<div _ngcontent-asb-c187="" id="menu-pc" class="d-flex justify-content-between align-items-center pc-view">
								<div _ngcontent-tdf-c192="" id="re-credit"><span _ngcontent-tdf-c192="" data-id="credit_balance" class="badge badge-pill badge-light thb ufabet-credit" cursorshover="true">0.00 ฿</span></div>
								<a _ngcontent-asb-c187="" href="#/main" routerlink="/main" data-toggle="tooltip" data-placement="bottom" title="" data-id="lotto" data-original-title="หน้าแรก">
									<i _ngcontent-asb-c187="" class="sn-icon sn-icon--home"></i>
								</a>
								<a _ngcontent-asb-c187="" href="#/lottery" routerlink="/lottery" data-toggle="tooltip" data-placement="bottom" title="" data-id="lottery" data-original-title="แทงหวย">
									<i _ngcontent-asb-c187="" class="fas fa-star"></i>
								</a>
								<a _ngcontent-asb-c187="" href="#/result-all" routerlink="/result-all" data-toggle="tooltip" data-placement="bottom" title="" data-id="award" data-original-title="ผลรางวัล">
									<i _ngcontent-asb-c187="" class="fas fa-award"></i>
								</a>
								<a _ngcontent-asb-c187="" href="javascript:void(0)" data-toggle="modal" data-target="#Deposit" title="" data-id="refill" data-original-title="ฝากเงิน">
									<i _ngcontent-asb-c187="" class="fas fa-donate"></i>
								</a>
								<div _ngcontent-asb-c187="" class="linemenu-x"></div>

							</div>

							<div _ngcontent-asb-c187="" id="sidebarCollapse" class="mobile-view"><img _ngcontent-asb-c187="" src="<?= $theme_asset ?>/img/user-128.png" alt="หวยฮานอย วันนี้ ออกอะไร" onerror="this.src='<?= $theme_asset ?>/img/user-128.png'" width="28" height="28" title="บัญชีผู้ใช้" class="rounded-circle ml-1"><i _ngcontent-asb-c187="" class="fas fa-ellipsis-v" style="margin-left: 5px;"></i>
							</div>
							<div _ngcontent-asb-c187="" class="dropdown pc-view ml-1">
								<div _ngcontent-asb-c187="" id="menu-profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="dropdown-toggle"><img _ngcontent-asb-c187="" src="<?= $theme_asset ?>/img/user-128.png" alt="หวยฮานอย วันนี้ ออกอะไร" onerror="this.src='<?= $theme_asset ?>/img/user-128.png'" width="40" height="35" class="rounded-circle"><span _ngcontent-asb-c187="" id="username" class="ml-1"><?= $user ?></span></div>
								<div _ngcontent-asb-c187="" aria-labelledby="menu-profile" id="menu-profile-dropdown" class="dropdown-menu"><a _ngcontent-asb-c187="" href="#/setting-profile" routerlink="/setting-profile" class="dropdown-item"><i _ngcontent-asb-c187="" class="fas fa-user-cog"></i>
										ตั้งค่าบัญชีผู้ใช้ </a><a _ngcontent-asb-c187="" href="#/setting-bank" routerlink="/setting-bank" class="dropdown-item"><i _ngcontent-asb-c187="" class="fas fa-money-check"></i> บัญชีธนาคาร </a><a _ngcontent-asb-c187="" href="#/howto" routerlink="/howto" class="dropdown-item"><i _ngcontent-asb-c187="" class="fas fa-info-circle"></i> วิธีใช้งาน </a><a _ngcontent-asb-c187="" href="#" data-toggle="modal" data-target="#Contactbox" class="dropdown-item"><i _ngcontent-asb-c187="" class="fas fa-handshake"></i> ศูนย์ช่วยเหลือ </a>
									<div _ngcontent-asb-c187="" class="dropdown-divider"></div><a _ngcontent-asb-c187="" href="javascript:void(0);" class="dropdown-item" onclick="logout_new()"><i _ngcontent-asb-c187="" class="fas fa-sign-out-alt"></i> ออกจากระบบ </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div _ngcontent-asb-c187="" class="app-navbar" hidden="">
			<div _ngcontent-asb-c187="" class="container">
				<!---->
				<div _ngcontent-asb-c187="" class="pc-view ng-star-inserted" style="height: 150px;">
					<div _ngcontent-asb-c187="" class="row v-toolbar--rule">
						<div _ngcontent-asb-c187="" class="text-left p-2 col pc-view"><strong _ngcontent-asb-c187="" data-toggle="modal" data-target="#ModalRate" class="d-none d-sm-inline-block" style="cursor: pointer;">อัตราจ่าย</strong><span _ngcontent-asb-c187="" class="d-none d-sm-inline-block" style="padding: 0px 0.5rem;">|</span><strong _ngcontent-asb-c187="" data-toggle="modal" data-target="#ModalRule" class="d-none d-sm-inline-block" style="cursor: pointer;">กฏกติกา</strong></div>
						<div _ngcontent-asb-c187="" class="text-right p-2 col">
							<!---->
						</div>
					</div>
					<div _ngcontent-asb-c187="" class="row v-toolbar--content text-center">
						<div _ngcontent-asb-c187="" class="d-none d-sm-inline-block col">
							<div _ngcontent-asb-c187="" style="cursor: pointer;"><i _ngcontent-asb-c187="" aria-hidden="true" class="material-icons" style="font-size: 40px;">local_play</i>
								<p _ngcontent-asb-c187="" style="font-weight: bold;"> เล่นหวย </p>
							</div>
						</div>
						<div _ngcontent-asb-c187="" class="d-none d-sm-inline-block col">
							<div _ngcontent-asb-c187="" style="cursor: pointer;"><i _ngcontent-asb-c187="" aria-hidden="true" class="icon-slot-machine blink-icon" style="font-size: 36px;"></i>
								<p _ngcontent-asb-c187="" style="font-weight: bold; padding-top: 10px;">
									สล็อต&amp;คาสิโน </p>
							</div>
						</div>
						<div _ngcontent-asb-c187="" class="d-none d-sm-inline-block col">
							<div _ngcontent-asb-c187="" style="cursor: pointer;"><i _ngcontent-asb-c187="" aria-hidden="true" class="material-icons" style="font-size: 40px;">chat</i>
								<p _ngcontent-asb-c187="" style="font-weight: bold;"> แชทสด </p>
							</div>
						</div>
						<div _ngcontent-asb-c187="" class="px-0 col col-2 pc-logo-view">
							<div _ngcontent-asb-c187="" class="router-link-exact-active active" style="cursor: pointer; display: flex; justify-content: center;"><img _ngcontent-asb-c187="" src="<?= $theme_asset ?>/img/logo-social-sq.png" alt="หวยฮานอย" class="main-logo2"></div>
						</div>
						<div _ngcontent-asb-c187="" class="d-none d-sm-inline-block col">
							<div _ngcontent-asb-c187="" style="cursor: pointer;"><i _ngcontent-asb-c187="" aria-hidden="true" class="fab fa-line" style="font-size: 36px;"></i>
								<p _ngcontent-asb-c187="" style="font-weight: bold; padding-top: 10px;">กลุ่มเลขเด็ด
								</p>
							</div>
						</div>
						<div _ngcontent-asb-c187="" class="d-none d-sm-inline-block col">
							<div _ngcontent-asb-c187="" style="cursor: pointer;"><i _ngcontent-asb-c187="" aria-hidden="true" class="fas fa-receipt" style="font-size: 36px;"></i>
								<p _ngcontent-asb-c187="" style="font-weight: bold; padding-top: 10px;"> โพยหวย </p>
							</div>
						</div>
						<div _ngcontent-asb-c187="" class="d-none d-sm-inline-block col">
							<div _ngcontent-asb-c187="" style="cursor: pointer;"><i _ngcontent-asb-c187="" aria-hidden="true" class="fas fa-thumbs-up" style="font-size: 36px;"></i>
								<p _ngcontent-asb-c187="" style="font-weight: bold; padding-top: 10px;"> แนะนำเพื่อน
								</p>
							</div>
						</div>
					</div>
				</div>
				<!---->
			</div>
			<!---->
		</div>
		<div _ngcontent-asb-c187="" class="footer-slogan mb-2" hidden="">
			<div _ngcontent-asb-c187="" class="container text-center pa-1 container--fluid">
				<div _ngcontent-asb-c187="">
					<h1>หวยออนไลน์ HENG-168</h1>
				</div>
				<div _ngcontent-asb-c187="">
					<p class="mb-0"> แทงหวยออนไลน์ บริการรับแทงหวย หวยรัฐบาล หวยฮานอย หวยหุ้น หวยยี่กี หวยลาว
						หวยมาเลเซีย รวมหวย เว็บใหญ่ เชื่อถือได้ อัตราจ่ายสูง โอนเงินไว ระบบดีที่สุด การันตี
						การเงินมั่นคง พร้อมผลหวย แนวทางหวย สถิติย้อนหลัง อัพเดทรวดเร็ว เจ้าหน้าที่บริการ 24 ชั่วโมง
					</p>
				</div>
			</div>
		</div>
		<div _ngcontent-asb-c187="" class="banner-colosal ng-star-inserted" hidden="">
			<mdb-carousel _ngcontent-asb-c187="" class="carousel slide">
				<div tabindex="0" class="carousel slide">
					<!---->
					<ol class="carousel-indicators ng-star-inserted">
						<li class="ng-star-inserted"></li>
						<li class="ng-star-inserted active"></li>
						<li class="ng-star-inserted"></li>
						<li class="ng-star-inserted"></li>
						<li class="ng-star-inserted"></li>
						<li class="ng-star-inserted"></li>
						<li class="ng-star-inserted"></li>
						<li class="ng-star-inserted"></li>
						<li class="ng-star-inserted"></li>
						<li class="ng-star-inserted"></li>
						<li class="ng-star-inserted"></li>
						<li class="ng-star-inserted"></li>
						<!---->
					</ol>
					<!---->
					<!---->
					<div class="carousel-inner">
						<mdb-carousel-item _ngcontent-asb-c187="" class="carousel-item ng-star-inserted">
							<div _ngcontent-asb-c187="" class="view w-100 ais-hero"><img _ngcontent-asb-c187="" alt="หวยฮานอย vip วันนี้" class="d-block w-100" src="#1662178616910.jpg">
								<div _ngcontent-asb-c187="" mdbwaveseffect="" class="mask rgba-black-slight waves-light"></div>
							</div>
						</mdb-carousel-item>
						<mdb-carousel-item _ngcontent-asb-c187="" class="carousel-item ng-star-inserted active carousel-item-left">
							<div _ngcontent-asb-c187="" class="view w-100 ais-hero"><img _ngcontent-asb-c187="" alt="หวยฮานอย vip วันนี้" class="d-block w-100" src="#1660929938878.jpg">
								<div _ngcontent-asb-c187="" mdbwaveseffect="" class="mask rgba-black-slight waves-light"></div>
							</div>
						</mdb-carousel-item>
						<mdb-carousel-item _ngcontent-asb-c187="" class="carousel-item ng-star-inserted carousel-item-next carousel-item-left">
							<div _ngcontent-asb-c187="" class="view w-100 ais-hero"><img _ngcontent-asb-c187="" alt="หวยฮานอย vip วันนี้" class="d-block w-100" src="#1662178668555.jpg">
								<div _ngcontent-asb-c187="" mdbwaveseffect="" class="mask rgba-black-slight waves-light"></div>
							</div>
						</mdb-carousel-item>
						<mdb-carousel-item _ngcontent-asb-c187="" class="carousel-item ng-star-inserted">
							<div _ngcontent-asb-c187="" class="view w-100 ais-hero"><img _ngcontent-asb-c187="" alt="หวยฮานอย vip วันนี้" class="d-block w-100" src="#1660808368500.jpg">
								<div _ngcontent-asb-c187="" mdbwaveseffect="" class="mask rgba-black-slight waves-light"></div>
							</div>
						</mdb-carousel-item>
						<mdb-carousel-item _ngcontent-asb-c187="" class="carousel-item ng-star-inserted">
							<div _ngcontent-asb-c187="" class="view w-100 ais-hero"><img _ngcontent-asb-c187="" alt="หวยฮานอย vip วันนี้" class="d-block w-100" src="#1660809941343.jpg">
								<div _ngcontent-asb-c187="" mdbwaveseffect="" class="mask rgba-black-slight waves-light"></div>
							</div>
						</mdb-carousel-item>
						<mdb-carousel-item _ngcontent-asb-c187="" class="carousel-item ng-star-inserted">
							<div _ngcontent-asb-c187="" class="view w-100 ais-hero"><img _ngcontent-asb-c187="" alt="หวยฮานอย vip วันนี้" class="d-block w-100" src="#1660810066213.jpg">
								<div _ngcontent-asb-c187="" mdbwaveseffect="" class="mask rgba-black-slight waves-light"></div>
							</div>
						</mdb-carousel-item>
						<mdb-carousel-item _ngcontent-asb-c187="" class="carousel-item ng-star-inserted">
							<div _ngcontent-asb-c187="" class="view w-100 ais-hero"><img _ngcontent-asb-c187="" alt="หวยฮานอย vip วันนี้" class="d-block w-100" src="#1660810116563.jpg">
								<div _ngcontent-asb-c187="" mdbwaveseffect="" class="mask rgba-black-slight waves-light"></div>
							</div>
						</mdb-carousel-item>
						<mdb-carousel-item _ngcontent-asb-c187="" class="carousel-item ng-star-inserted">
							<div _ngcontent-asb-c187="" class="view w-100 ais-hero"><img _ngcontent-asb-c187="" alt="หวยฮานอย vip วันนี้" class="d-block w-100" src="#1660810158511.jpg">
								<div _ngcontent-asb-c187="" mdbwaveseffect="" class="mask rgba-black-slight waves-light"></div>
							</div>
						</mdb-carousel-item>
						<mdb-carousel-item _ngcontent-asb-c187="" class="carousel-item ng-star-inserted">
							<div _ngcontent-asb-c187="" class="view w-100 ais-hero"><img _ngcontent-asb-c187="" alt="หวยฮานอย vip วันนี้" class="d-block w-100" src="#1660810186056.jpg">
								<div _ngcontent-asb-c187="" mdbwaveseffect="" class="mask rgba-black-slight waves-light"></div>
							</div>
						</mdb-carousel-item>
						<mdb-carousel-item _ngcontent-asb-c187="" class="carousel-item ng-star-inserted">
							<div _ngcontent-asb-c187="" class="view w-100 ais-hero"><img _ngcontent-asb-c187="" alt="หวยฮานอย vip วันนี้" class="d-block w-100" src="#1660810229914.jpg">
								<div _ngcontent-asb-c187="" mdbwaveseffect="" class="mask rgba-black-slight waves-light"></div>
							</div>
						</mdb-carousel-item>
						<mdb-carousel-item _ngcontent-asb-c187="" class="carousel-item ng-star-inserted">
							<div _ngcontent-asb-c187="" class="view w-100 ais-hero"><img _ngcontent-asb-c187="" alt="หวยฮานอย vip วันนี้" class="d-block w-100" src="#1660810259397.jpg">
								<div _ngcontent-asb-c187="" mdbwaveseffect="" class="mask rgba-black-slight waves-light"></div>
							</div>
						</mdb-carousel-item>
						<mdb-carousel-item _ngcontent-asb-c187="" class="carousel-item ng-star-inserted">
							<div _ngcontent-asb-c187="" class="view w-100 ais-hero"><img _ngcontent-asb-c187="" alt="หวยฮานอย vip วันนี้" class="d-block w-100" src="#1660810293110.jpg">
								<div _ngcontent-asb-c187="" mdbwaveseffect="" class="mask rgba-black-slight waves-light"></div>
							</div>
						</mdb-carousel-item>
						<!---->
					</div><a class="carousel-control-prev ng-star-inserted"><span aria-hidden="true" class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a>
					<!----><a class="carousel-control-next ng-star-inserted"><span aria-hidden="true" class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a>
					<!---->
				</div>
			</mdb-carousel>
		</div>
		<!---->
		<!---->
		<!---->
		<!---->
		<!---->
		<div _ngcontent-asb-c187="" class="container">
			<div _ngcontent-asb-c187="" class="container pb-0 container--fluid" hidden="">
				<div _ngcontent-asb-c187="" class="row mt-2 mb-3" hidden="">
					<div _ngcontent-asb-c187="" class="py-0 pt-1 col-sm-6 col-md-3 col-12"><button _ngcontent-asb-c187="" type="button" data-toggle="modal" data-target="#ModalRate" class="gold btn btn-lg btn-block"><span _ngcontent-asb-c187="" class="v-btn__content"><strong _ngcontent-asb-c187="">อัตราจ่าย</strong></span></button></div>
					<div _ngcontent-asb-c187="" class="py-0 pt-1 col-sm-6 col-md-3 col-12"><button _ngcontent-asb-c187="" type="button" data-toggle="modal" data-target="#ModalRule" class="gold btn btn-lg btn-block"><span _ngcontent-asb-c187="" class="v-btn__content"><strong _ngcontent-asb-c187="">กฏกติกา</strong></span></button></div>
					<div _ngcontent-asb-c187="" class="py-0 pt-1 col-sm-6 col-md-3 col-12"><button _ngcontent-asb-c187="" type="button" class="gold btn btn-lg btn-block"><span _ngcontent-asb-c187="" class="v-btn__content"><strong _ngcontent-asb-c187="">สมัครสมาชิก</strong></span></button></div>
					<div _ngcontent-asb-c187="" class="py-0 pt-1 col-sm-6 col-md-3 col-12"><button _ngcontent-asb-c187="" type="button" data-toggle="modal" data-target="#Contactbox" class="gold btn btn-lg btn-block"><span _ngcontent-asb-c187="" class="v-btn__content"><strong _ngcontent-asb-c187="">ติดต่อเรา</strong></span></button></div>
				</div>
				<div _ngcontent-asb-c187="" class="gold" style="height: 5px; border-radius: 5px;" hidden=""></div>
				<div _ngcontent-asb-c187="" class="slogan mt-3" hidden="">
					<div _ngcontent-asb-c187="" class="container text-center p-2 container--fluid"><strong _ngcontent-asb-c187=""> ผลรางวัล ประจำวันที่ 09/09/65</strong></div>
				</div>
			</div>
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
								<a _ngcontent-asb-c187="" href="https:">HENG168</a>
								เมื่อสมัครสมาชิกแล้วทางเว็บจะถือว่า สมาชิกได้อ่านและยอมรับ <span _ngcontent-asb-c187="" class="text-primary">"นโยบายและเงื่อนไขการให้บริการของเว็บไซต์์"</span>
							</p>
							<p _ngcontent-asb-c187=""><strong _ngcontent-asb-c187=""><u _ngcontent-asb-c187="" style="color: #3b5898;">การรักษาและช่วยเหลือการเดิมพันออนไลน์์</u></strong><br _ngcontent-asb-c187=""></p>
							<ul _ngcontent-asb-c187="" class="pl-3">
								<li _ngcontent-asb-c187="">ถ้าสมาชิกหลุดออกจากเว็บไซต์ระหว่างการเดิมพัน
									บัญชีของท่านจะไม่มีผลกระทบต่อผลลัพธ์ของการเดิมพัน </li>
								<li _ngcontent-asb-c187="">ไม่ต้องวิตกกังวล ถ้าสมาชิกออกจากเว็บไซด์ระหว่างการเดิมพัน
									สมาชิกจะถูกออกจากระบบช่วงเวลาหนึ่ง จากนั้นสมาชิกสามารถเข้าสู่ระบบ <a _ngcontent-asb-c187="" href="https:">HENG168</a> ได้อีกครั้งตามปกติ</li>
							</ul>
							<p _ngcontent-asb-c187=""></p>
							<p _ngcontent-asb-c187=""><strong _ngcontent-asb-c187=""><u _ngcontent-asb-c187="" style="color: #3b5898;">การให้ความคุ้มครอง</u></strong><br _ngcontent-asb-c187=""><a _ngcontent-asb-c187="" href="https:">HENG168</a>
								ได้มีการจัดเตรียม ระบบที่มีประสิทธิภาพ ความรวดเร็วและการบริการลูกค้าที่เป็นมิตร
								ถ้าหากท่านมีคำถามหรือคำแนะนำใดๆ กรุณาอย่าลังเลใจที่จะโทรศัพท์มาทางฝ่ายบริการลูกค้า
								ซึ่งจะมีให้บริการตลอด 24 ชั่วโมง ทุกวันไม่มีวันหยุด
								และทางเราจะตอบกลับอย่างรวดเร็วที่สุด <a _ngcontent-asb-c187="" href="https:">HENG168</a>
								ขอรับรองว่าจะรักษาข้อมูลส่วนตัวของท่านไว้เป็นความลับอย่างปลอดภัย </p>
							<p _ngcontent-asb-c187=""><strong _ngcontent-asb-c187=""><u _ngcontent-asb-c187="" style="color: #3b5898;">ข้อตกลงในการเดิมพัน</u></strong><br _ngcontent-asb-c187=""></p>
							<ul _ngcontent-asb-c187="" class="pl-3">
								<li _ngcontent-asb-c187="">เพื่อหลีกเลี่ยงปัญหาต่างๆในขณะที่ใช้งานเว็บไซต์
									สมาชิกกรุณาอ่านกฎกติกาของบริษัทอย่างละเอียดและระมัดระวัง
									เมื่อสมาชิกเข้าสู่หน้าเดิมพันทางบริษัทจะถือว่าท่านได้ยอมรับข้อตกลงของทาง <a _ngcontent-asb-c187="" href="https:">HENG168</a></li>
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
						<div _ngcontent-asb-c187="" class="modal-body text-center ng-star-inserted"><img _ngcontent-asb-c187="" style="max-width: 100%; max-height: 100%; height: inherit !important;" src="#1660810318065.jpg"><br _ngcontent-asb-c187=""></div>
						<!---->
						<!---->
						<div _ngcontent-asb-c187="" class="modal-footer"><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">ปิด</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Contactbox -->
			<div _ngcontent-asb-c187="" id="Contactbox" tabindex="-1" role="dialog" aria-labelledby="Contactbox" aria-hidden="true" class="modal fade">
				<div _ngcontent-asb-c187="" role="document" class="modal-dialog modal-lg">
					<div _ngcontent-asb-c187="" class="modal-content" style="border-radius: 10px;">
						<div _ngcontent-asb-c187="" class="modal-header bg-theme-primary">
							<h5 _ngcontent-asb-c187="" class="modal-title">เลือกช่องทางการติดต่อเรา</h5><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-asb-c187="" aria-hidden="true">×</span></button>
						</div>
						<div _ngcontent-asb-c187="" class="modal-body">
							<div _ngcontent-asb-c187="" class="row ng-star-inserted">
								<div _ngcontent-asb-c187="" class="col-6 col-sm-6 col-md-6 ng-star-inserted" data-index="0"><a _ngcontent-asb-c187="" class="btn btn-outline-success btn-block btn-contactbox mb-3" style="margin-bottom: 0;" href="line://ti/p/@168h4"><span _ngcontent-asb-c187=""><small _ngcontent-asb-c187="" class="d-flex justify-content-center">ติดต่อผ่านไลน์ &nbsp;
												<!---->
											</small></span><i _ngcontent-asb-c187="" class="fab fa-line"></i></a>
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
			<!-- Contactbox -->
			<!-- Deposit -->
			<div _ngcontent-asb-c187="" id="Deposit" tabindex="-1" role="dialog" aria-labelledby="Contactbox" aria-hidden="true" class="modal fade">
				<div _ngcontent-asb-c187="" role="document" class="modal-dialog modal-lg">
					<div _ngcontent-asb-c187="" class="modal-content" style="border-radius: 10px;">
						<div _ngcontent-asb-c187="" class="modal-header bg-theme-primary">
							<h5 _ngcontent-asb-c187="" class="modal-title">ฝากเงิน</h5><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-asb-c187="" aria-hidden="true">×</span></button>
						</div>
						<div _ngcontent-asb-c187="" class="modal-body">
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
													if ($bank_info['status'] == 1) {
													?>
														<div class="mb-3">
															<div class="media m-auto d-inline-flex">
																<img src="<?= $img_bank; ?>" alt="bank-bay" width="50px" class="rounded-circle mr-3">
																<div class="media-body text-left d-flex flex-column">
																	<div class="d-flex flex-lg-column flex-row">
																		<h1 class="text-primary"><?= $bank_info['accnum'] ?></h1>
																		<div class="f-5 d-lg-block d-none text-white"><span>
																				<?= $bank_info['name'] ?> </span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													<?php } ?>
													<br>
													<?php
													if ($bank_info['status_ktb'] == 1) {
													?>
														<div class="mb-3">
															<div class="media m-auto d-inline-flex">
																<img src="<?= $ufaBase; ?>/image/ktb.png" alt="bank-bay" width="50px" class="rounded-circle mr-3">
																<div class="media-body text-left d-flex flex-column">
																	<div class="d-flex flex-lg-column flex-row">
																		<h1 class="text-primary"><?= $bank_info['accnum_ktb'] ?></h1>
																		<div class="f-5 d-lg-block d-none text-white"><span>
																				<?= $bank_info['name_ktb'] ?> </span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													<?php } ?>
													<div class="-danger-zone">
														<div class="-icon-wrapper">
															<img src="build/web/ufacoder/img/ic-alert.png" alt="Alert icon png" class="-img">
														</div>
														<span>กรุณาใช้บัญชี <?= $info['bank'] ?>
															<br>เลขบัญชี <?= $info['accnum'] ?>
															<br>ชื่อ <?= $info['name'] ?>
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
														<b><span id="font_pop">ขั้นต่ำ <?= $d_limit ?> บาท</span><span class=""></span></b>
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
														<a href="https://line.me/R/ti/p/<?= $line ?>" id="contact-line" target="_blank">
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
												if ($bank_info['status'] == 1) {
												?>
													<div class="mb-3">
														<div class="media m-auto d-inline-flex">
															<img src="<?= $img_bank; ?>" alt="bank-bay" width="50px" class="rounded-circle mr-3">
															<div class="media-body text-left d-flex flex-column">
																<div class="d-flex flex-lg-column flex-row">
																	<b class="f-lg-4 f-5 mr-lg-0 mr-2 text-primary"> <?= $bank_info['accnum'] ?></b>
																</div>
																<div class="f-5 d-lg-none d-block"><?= $bank_info['name'] ?></div>
															</div>
														</div>
													</div>
												<?php } ?>
												<br>
												<?php
												if ($bank_info['status_ktb'] == 1) {
												?>
													<div class="mb-3">
														<div class="media m-auto d-inline-flex">
															<img src="<?= $img_bank; ?>" alt="bank-bay" width="50px" class="rounded-circle mr-3">
															<div class="media-body text-left d-flex flex-column">
																<div class="d-flex flex-lg-column flex-row">
																	<b class="f-lg-4 f-5 mr-lg-0 mr-2 text-primary"> <?= $bank_info['accnum_ktb'] ?></b>
																</div>
																<div class="f-5 d-lg-none d-block "><?= $bank_info['name_ktb'] ?></div>
															</div>
														</div>
													</div>
												<?php } ?>
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
													<span>ขั้นต่ำ <?= $d_limit ?> บาท</span><span class=""></span>
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
											<img src="images/bank2/<?= $info['bank'] ?>.jpg" width="50px" height="50px">
										</div>
										<div class="media-body ml-2">
											<div><strong><?= $info['name'] ?></strong></div>
											<div><?= $info['accnum'] ?></div>
										</div>
									</div>
								</div>
								<div>
									<p class="text-center mt-2" id='turnover'>
									</p>
								</div>
								<div class="m-auto ">
								</div>
								<p class="text-center mt-2">
									จำนวนเงินที่ต้องการถอน (ถอนขั้นต่ำ <?= $w_limit ?> บาท)
								</p>
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
											<img src="images/bank2/<?= $info['bank'] ?>.jpg" width="50px" height="50px">
										</div>
										<div class="media-body ml-2">
											<div><strong><?= $info['name'] ?></strong></div>
											<div><?= $info['accnum'] ?></div>
										</div>
									</div>
								</div>
								<div>
									<p class="text-center mt-2" id='turnover'>
									</p>
								</div>
								<div class="m-auto ">
								</div>
								<p class="text-center mt-2">
									จำนวนเงินที่ต้องการถอน (ถอนขั้นต่ำ <?= $w_limit ?> บาท)
								</p>
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
		</div>
		<router-outlet _ngcontent-asb-c187=""></router-outlet>
		<app-main _nghost-asb-c14="" class="ng-star-inserted">
			<div _ngcontent-asb-c14="" id="section-content" class="container">
				<div _ngcontent-asb-c14="" class="row pc-view">

					<div _ngcontent-asb-c14="" class="col-4">
						<div _ngcontent-asb-c14="" class="px-3 py-1 mt-3"><a _ngcontent-asb-c14="" class="btn btn-block btn-deposit-main" href="javascript:void(0)" data-toggle="modal" data-target="#Deposit" style="padding : 1.2rem 1.4rem !important;"><i _ngcontent-asb-c14="" class="fas fa-building float-left mt-1"></i> ฝากเงิน </a>
						</div>
						<div _ngcontent-asb-c14="" class="px-3 py-1"><a _ngcontent-asb-c14="" href="javascript:void(0)" data-toggle="modal" data-target="#Withdraw" class="btn btn-block btn-withdraw-main" style="padding : 1.2rem 1.4rem !important;"><i _ngcontent-asb-c14="" class="fas fa-dollar float-left mt-1"></i> ถอนเงิน</a>
						</div>
						<!--แจ้งเครดิต-->
						<div _ngcontent-asb-c14="" class="px-3 py-1"><a _ngcontent-asb-c14="" href="javascript:void(0)" data-toggle="modal" data-target="#Contactbox" class="btn btn-block btn-contact-main" style="padding : 1.2rem 1.4rem !important;"><i _ngcontent-asb-c14="" class="fas fa-headphones float-left mt-1"></i> แจ้งปัญหา</a></div>
						<!------>
					</div>
					<div _ngcontent-asb-c14="" class="col-7">
						<div _ngcontent-asb-c14="" class="d-flex flex-column card-main justify-content-between shadow px-3 py-3 my-3 mx-0 card-main-top-menu">
							<div _ngcontent-asb-c14="" class="d-flex justify-content-between"><span _ngcontent-asb-c14="" class="remain-credit-title">ยอดเงินคงเหลือ</span></div>
							<div _ngcontent-asb-c14="" class="d-flex flex-row justify-content-between mt-1">
								<div _ngcontent-asb-c14="" class="d-flex flex-column pt-0 pb-1">
									<h3 _ngcontent-asb-c14="" data-id="credit_balance" class="d-block text-left text-money-main ufabet-credit">0.00 ฿</h3>
									<div _ngcontent-asb-c14="" class="d-flex"><span _ngcontent-tdf-c14=""></span>
										USER ID : <?= $user ?> </div>
								</div>
							</div>
						</div>
						<div _ngcontent-asb-c14="" class="px-3 py-3 my-3 mx-0"><a _ngcontent-asb-c14="" href="javascript:void(0)" class="btn btn-block btn-move-main game-to-wallet" style="padding : 1.2rem 1.4rem !important;margin-top: -21px;"><i _ngcontent-asb-c14="" class="fas fa-headphones float-left mt-1"></i>
								โยกเงินเข้าเครดิต</a></div>
						<!------>

						<!---->
					</div>
				</div>
				<br>
				<div _ngcontent-asb-c14="" class="main-banner-top pc-view"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/main-banner-01.jpg" style="max-width: 100%; border-radius: 5px;">
					<div _ngcontent-asb-c14="" class="d-flex">
						<div _ngcontent-asb-c14="" class="broadcast-icon text-center"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/icon-braodcast.svg" style="width: 27px; height: auto; margin-top: -5px;"></div>
						<div _ngcontent-asb-c14="" class="txt-notice">
							<marquee _ngcontent-asb-c14="" behavior="scroll" direction="left">
								ก่อนฝากเครดิตทุกครั้ง
								รบกวนคุณลูกค้าทุกท่าน ตรวจสอบเลขบัญชีที่หน้าเว็บก่อนโอนทุกครั้ง</marquee>
						</div>
					</div>
				</div>
				<div _ngcontent-asb-c14="" class="mobile-view d-flex flex-column">
					<div _ngcontent-asb-c14="" class="d-flex">
						<div _ngcontent-asb-c14="" class="broadcast-icon text-center"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/icon-braodcast.svg" style="width: 27px; height: auto; margin-top: -5px;"></div>
						<div _ngcontent-asb-c14="" class="txt-notice">
							<marquee _ngcontent-asb-c14="" behavior="scroll" direction="left">
								ก่อนฝากเครดิตทุกครั้ง
								รบกวนคุณลูกค้าทุกท่าน ตรวจสอบเลขบัญชีที่หน้าเว็บก่อนโอนทุกครั้ง</marquee>
						</div>
					</div>
				</div>
				<br>
				<div _ngcontent-vsx-c14="" class="row mobile-view">
					<div _ngcontent-asb-c14="" class="col-4">
						<div _ngcontent-asb-c14="" class="px-3 py-2 mt-3"><a _ngcontent-asb-c14="" href="javascript:void(0)" data-toggle="modal" data-target="#Deposit" class="btn btn-block btn-deposit-main" style="
                                margin-left: -30px;
                                width: 8.2rem;"><i _ngcontent-asb-c14="" class="fas fa-building float-left mt-1"></i>
								ฝากเงิน </a>
						</div>
						<div _ngcontent-asb-c14="" class="px-3 py-2"><a _ngcontent-asb-c14="" href="javascript:void(0)" data-toggle="modal" data-target="#Withdraw" class="btn btn-block btn-withdraw-main" style="
                                margin-left: -30px;
                                width: 8.2rem;"><i _ngcontent-asb-c14="" class="fas fa-dollar float-left mt-1"></i>
								ถอนเงิน</a>
						</div>
						<!--แจ้งเครดิต-->
						<div _ngcontent-asb-c14="" class="px-3 py-2"><a _ngcontent-asb-c14="" href="javascript:void(0)" data-toggle="modal" data-target="#Contactbox" class="btn btn-block btn-contact-main" style="
                                margin-left: -30px;
                                width: 8.2rem;"><i _ngcontent-asb-c14="" class="fas fa-headphones float-left mt-1"></i>
								แจ้งปัญหา</a></div>
						<!------>

						<div _ngcontent-asb-c14="" class="px-3 py-2"><a _ngcontent-asb-c14="" href="javascript:void(0)" class="btn btn-block btn-move-main game-to-wallet" style="
                            margin-left: -30px;
                            width: max-content;"> โยกเงินเข้าเครดิต</a></div>


					</div>

					<div _ngcontent-asb-c14="" class="col-7">
						<div _ngcontent-asb-c14="" class="d-flex flex-column card-main justify-content-between shadow px-3 py-3 my-3 mx-0 card-main-top-menu" style="margin-bottom: 55px !important;">
							<div _ngcontent-asb-c14="" class="d-flex justify-content-between"><span _ngcontent-asb-c14="" class="remain-credit-title">ยอดเงินคงเหลือ</span></div>
							<div _ngcontent-asb-c14="" class="d-flex flex-row justify-content-between mt-1">
								<div _ngcontent-asb-c14="" class="d-flex flex-column pt-0 pb-1">
									<h3 _ngcontent-asb-c14="" data-id="credit_balance" class="d-block text-left text-money-main ufabet-credit">0.00 ฿</h3>
									<div _ngcontent-asb-c14="" class="d-flex"><span _ngcontent-tdf-c14=""></span>
										USER ID : <?= $user ?> </div>
								</div>
							</div>

						</div>
						<!---->
					</div>
				</div>
				<div class="row mobile-view">
					<div _ngcontent-asb-c14="" class=" col-6" style="position: relative;"><a _ngcontent-asb-c14="" href="#/request-all" routerlink="/request-all"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/แจ้งรายการฝากถอน.png" style="width: 100%; height: auto;"></a></div>
					<div _ngcontent-asb-c14="" class=" col-6" style="position: relative;"><a _ngcontent-asb-c14="" href="#/request-all" routerlink="/request-all"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/ประวัติการเงิน.png" style="width: 100%; height: auto;"></a></div>
				</div>

				<br>
				<div _ngcontent-vsx-c14="" class="row mobile-view">
					<img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/main-banner-01.jpg" style="max-width: 100%; border-radius: 5px;">
				</div>
				<br>
				<br>
				<div _ngcontent-asb-c14="" class="row p-0 m-0 pc-view">
					<div _ngcontent-asb-c14="" class="col-4 p-0 m-0"><a _ngcontent-asb-c14="" onclick="LoginLottoNew()" routerlink="/lottery"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/หวยออนไลน์.png" class="image-btn-effect" style="width: 95%; height: auto;"></a></div>
					<div _ngcontent-asb-c14="" class="col-4 p-0 m-0"><a _ngcontent-asb-c14="" href="game" routerlink="/game-sl"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/สล็อตคาสิโน.png" class="image-btn-effect" style="width: 95%; height: auto;"></a></div>
					<div _ngcontent-asb-c14="" class="col-4 p-0 m-0"><a _ngcontent-asb-c14="" onclick="LoginLottoNew()" href="#" routerlink="/lottery-yeekee/25"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/ยี่กี.png" class="image-btn-effect" style="width: 95%; height: auto;"></a></div>
				</div>
				<div _ngcontent-asb-c14="" class="row p-0 m-1 card-main-top-menu mobile-view" style="
                    padding: 10px 5px 10px 5px !important;">
					<div _ngcontent-asb-c14="" class="col-6 p-0" style="text-align: center;"><a _ngcontent-asb-c14="" href="#" onclick="LoginLottoNew()" routerlink="/lottery"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/หวยออนไลน์.png" class="image-btn-effect" style="width: 95%; height: auto;"></a></div>
					<div _ngcontent-asb-c14="" class="col-6 p-0" style="text-align: center;"><a _ngcontent-asb-c14="" href="#/lottery" routerlink="/lottery"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/หวยออนไลน์.png" class="image-btn-effect" style="width: 95%; height: auto;"></a></div>
					<div _ngcontent-asb-c14="" class="col-6 p-0" style="text-align: center; "><a _ngcontent-asb-c14="" href="game" routerlink="/game-sl"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/สล็อตคาสิโน.png" class="image-btn-effect" style="width: 95%; height: auto;"></a></div>
					<div _ngcontent-asb-c14="" class="col-6 p-0" style="text-align: center; ">
						<a _ngcontent-asb-c14="" href="#/lottery-yeekee/25" routerlink="/lottery-yeekee/25"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/ยี่กี.png" class="image-btn-effect" style="width: 95%; height: auto;"></a>
					</div>
				</div>

				<div _ngcontent-asb-c14="" class="w-100 row-menu-grid align-self-stretch">
					<div _ngcontent-asb-c14="" class="row bg-main-menu py-3 px-2 pc-view">
						<div _ngcontent-asb-c14="" class="col-4 col-sm-4 col-md-3 col-lg-2">
							<div _ngcontent-asb-c14="" class="text-center px-2 image-btn-effect" style="position: relative;"><a _ngcontent-asb-c14="" href="#/poy" routerlink="/poy" class="btn-main-menu"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/icon/โพยหวย.gif" style="width: 100%; height: auto;">
									โพยหวย </a></div>
						</div>
						<div _ngcontent-asb-c14="" class="col-4 col-sm-4 col-md-3 col-lg-2">
							<div _ngcontent-asb-c14="" class="text-center px-2 image-btn-effect" style="position: relative;"><a _ngcontent-asb-c14="" href="#" onclick="Tawk_API.toggle();return false" class="btn-main-menu"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/icon/แชทสด_.gif" style="width: 100%; height: auto;"> แชทสด </a></div>
						</div>
						<div _ngcontent-asb-c14="" class="col-4 col-sm-4 col-md-3 col-lg-2">
							<div _ngcontent-asb-c14="" class="text-center px-2 image-btn-effect" style="position: relative;"><a _ngcontent-asb-c14="" href="#/numbersets" routerlink="/numbersets" class="btn-main-menu"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/icon/สร้างเลขชุด 9.gif" style="width: 100%; height: auto;"> สร้างเลขชุด </a></div>
						</div>
						<div _ngcontent-asb-c14="" class="col-4 col-sm-4 col-md-3 col-lg-2">
							<div _ngcontent-asb-c14="" class="text-center px-2 image-btn-effect" style="position: relative;"><a _ngcontent-asb-c14="" href="javascript:void(0);" class="btn-main-menu"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/icon/ติดตั้งแอปฯ_.gif" style="width: 100%; height: auto;">
									ติดตั้งแอปฯ </a></div>
						</div>
						<div _ngcontent-asb-c14="" class="col-4 col-sm-4 col-md-3 col-lg-2">
							<div _ngcontent-asb-c14="" class="text-center px-2 image-btn-effect" style="position: relative;"><a _ngcontent-asb-c14="" href="#/affiliate" routerlink="/affiliate" class="btn-main-menu"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/icon/แนะนำเพื่อน_.gif" style="width: 100%; height: auto;">
									แนะนำเพื่อน </a></div>
						</div>
						<div _ngcontent-asb-c14="" class="col-4 col-sm-4 col-md-3 col-lg-2">
							<div _ngcontent-asb-c14="" class="text-center px-2 image-btn-effect" style="position: relative;"><a _ngcontent-asb-c14="" href="javascript:void(0);" class="btn-main-menu"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/icon/กลุ่มเลขเด็ด_.gif" style="width: 100%; height: auto;">
									กลุ่มเลขเด็ด </a></div>
						</div>
						<div _ngcontent-asb-c14="" class="d-md-none d-lg-block col-lg-3">
							<div _ngcontent-asb-c14="" class="text-center px-2 mt-4 image-btn-effect" style="position: relative;"><a _ngcontent-asb-c14="" href="#/request-all" routerlink="/request-all"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/แจ้งรายการฝากถอน.png" style="width: 100%; height: auto;"></a></div>
						</div>
						<div _ngcontent-asb-c14="" class="col-4 col-sm-4 col-md-3 col-lg-2">
							<div _ngcontent-asb-c14="" class="text-center px-2 image-btn-effect" style="position: relative;"><a _ngcontent-asb-c14="" href="#/result-all" routerlink="/result-all" class="btn-main-menu"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/icon/ผลรางวัล_.gif" style="width: 100%; height: auto;">
									ผลรางวัล </a></div>
						</div>
						<div _ngcontent-ont-c14="" class="col-4 col-sm-4 col-md-3 col-lg-2">
							<div _ngcontent-ont-c14="" class="text-center px-1 image-btn-effect" style="position: relative;"><a _ngcontent-ont-c14="" href="#/howto" routerlink="/howto" class="btn-main-menu"><img _ngcontent-ont-c14="" src="<?= $theme_asset ?>/img/icon/วิดีโอแนะนำการใช้งาน_.gif" style="width: 100%; height: auto;"> วิดีโอการใช้งาน
								</a></div>
						</div>
						<div _ngcontent-asb-c14="" class="col-4 col-sm-4 col-md-3 col-lg-2">
							<div _ngcontent-asb-c14="" class="text-center px-2 image-btn-effect" style="position: relative;"><a _ngcontent-asb-c14="" href="javascript:void(0);" class="btn-main-menu"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/icon/โปรโมชั่น_.gif" style="width: 100%; height: auto;">
									โปรโมชั่น </a></div>
						</div>
						<div _ngcontent-asb-c14="" class="d-md-none d-lg-block col-lg-3">
							<div _ngcontent-asb-c14="" class="text-center px-2 mt-4 image-btn-effect" style="position: relative;"><a _ngcontent-asb-c14="" href="#/statement" routerlink="/statement"><img _ngcontent-asb-c14="" src="<?= $theme_asset ?>/img/ประวัติการเงิน.png" style="width: 100%; height: auto;"></a></div>
						</div>
					</div>
					<!-- mobile site -->
					<div _ngcontent-ont-c14="" class="row py-3 px-2 mx-1 card-main-menu-mobile mobile-view">
						<div _ngcontent-ont-c14="" class="col-4">
							<div _ngcontent-ont-c14="" class="text-center px-2" style="position: relative;"><a _ngcontent-ont-c14="" href="#/poy" routerlink="/poy" class="btn-main-menu-mobile"><img _ngcontent-ont-c14="" src="<?= $theme_asset ?>/img/icon/โพยหวย.gif" style="width: 100%; height: auto;">
									โพยหวย </a>
							</div>
						</div>
						<div _ngcontent-ont-c14="" class="col-4">
							<div _ngcontent-ont-c14="" class="text-center px-2" style="position: relative;"><a _ngcontent-ont-c14="" href="#" onclick="Tawk_API.toggle();return false" class="btn-main-menu-mobile"><img _ngcontent-ont-c14="" src="<?= $theme_asset ?>/img/icon/แชทสด_.gif" style="width: 100%; height: auto;">
									แชทสด
								</a></div>
						</div>
						<div _ngcontent-ont-c14="" class="col-4">
							<div _ngcontent-ont-c14="" class="text-center px-2" style="position: relative;"><a _ngcontent-ont-c14="" href="#/numbersets" routerlink="/numbersets" class="btn-main-menu-mobile"><img _ngcontent-ont-c14="" src="<?= $theme_asset ?>/img/icon/สร้างเลขชุด 9.gif" style="width: 100%; height: auto;">
									สร้างเลขชุด </a></div>
						</div>
						<div _ngcontent-ont-c14="" class="col-4">
							<div _ngcontent-ont-c14="" class="text-center px-2" style="position: relative;"><a _ngcontent-ont-c14="" href="javascript:void(0);" class="btn-main-menu-mobile"><img _ngcontent-ont-c14="" src="<?= $theme_asset ?>/img/icon/ติดตั้งแอปฯ_.gif" style="width: 100%; height: auto;"> ติดตั้งแอปฯ
								</a></div>
						</div>
						<div _ngcontent-ont-c14="" class="col-4">
							<div _ngcontent-ont-c14="" class="text-center px-2" style="position: relative;"><a _ngcontent-ont-c14="" href="#/affiliate" routerlink="/affiliate" class="btn-main-menu-mobile"><img _ngcontent-ont-c14="" src="<?= $theme_asset ?>/img/icon/แนะนำเพื่อน_.gif" แจ้งรายการ style="width: 100%; height: auto;"> แนะนำเพื่อน
								</a></div>
						</div>
						<div _ngcontent-ont-c14="" class="col-4">
							<div _ngcontent-ont-c14="" class="text-center px-2" style="position: relative;"><a _ngcontent-ont-c14="" href="javascript:void(0);" class="btn-main-menu-mobile"><img _ngcontent-ont-c14="" src="<?= $theme_asset ?>/img/icon/กลุ่มเลขเด็ด_.gif" style="width: 100%; height: auto;">
									กลุ่มเลขเด็ด </a></div>
						</div>
						<div _ngcontent-ont-c14="" class="col-4">
							<div _ngcontent-ont-c14="" class="text-center px-2" style="position: relative;"><a _ngcontent-ont-c14="" href="#/result-all" routerlink="/result-all" class="btn-main-menu-mobile"><img _ngcontent-ont-c14="" src="<?= $theme_asset ?>/img/icon/ผลรางวัล_.gif" style="width: 100%; height: auto;">
									ผลรางวัล
								</a></div>
						</div>
						<div _ngcontent-ont-c14="" class="col-4">
							<div _ngcontent-ont-c14="" class="text-center px-2" style="position: relative;"><a _ngcontent-ont-c14="" href="#/howto" routerlink="/howto" class="btn-main-menu-mobile"><img _ngcontent-ont-c14="" src="<?= $theme_asset ?>/img/icon/วิดีโอแนะนำการใช้งาน_.gif" style="width: 100%; height: auto;">
									วิดีโอวิธีใช้งาน </a></div>
						</div>
						<div _ngcontent-ont-c14="" class="col-4">
							<div _ngcontent-ont-c14="" class="text-center px-2" style="position: relative;"><a _ngcontent-ont-c14="" href="javascript:void(0);" class="btn-main-menu-mobile"><img _ngcontent-ont-c14="" src="<?= $theme_asset ?>/img/icon/โปรโมชั่น_.gif" style="width: 100%; height: auto;">
									โปรโมชั่น </a></div>
						</div>

					</div>
					<!---->
					<div _ngcontent-ini-c14="" id="linebox" tabindex="-1" role="dialog" aria-labelledby="linebox" aria-hidden="true" class="modal fade">
						<div _ngcontent-ini-c14="" role="document" class="modal-dialog modal-lg">
							<div _ngcontent-ini-c14="" class="modal-content" style="border-radius: 10px;">
								<div _ngcontent-ini-c14="" class="modal-header bg-theme-primary">
									<h5 _ngcontent-ini-c14="" class="modal-title">กลุ่มเลขเด็ด</h5><button _ngcontent-ini-c14="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-ini-c14="" aria-hidden="true">×</span></button>
								</div>
								<div _ngcontent-ini-c14="" class="modal-body">
									<div _ngcontent-ini-c14="" class="row p-0 m-0">
										<div _ngcontent-ini-c14="" class="col-6 col-sm-6 col-md-4 text-center mb-2 group-yeekee ng-star-inserted" style="cursor: pointer;" data-index="0"><img _ngcontent-ini-c14="" class="mt-2" style="width: auto; height: 140px;" src="https://apidev.huaygaming.com/info/getGuideGroupImage/21">
											<div _ngcontent-ini-c14="" class="text-theme-primary mt-2">test
											</div>
										</div>
										<div _ngcontent-ini-c14="" class="col-6 col-sm-6 col-md-4 text-center mb-2 group-yeekee ng-star-inserted" style="cursor: pointer;" data-index="1"><img _ngcontent-ini-c14="" class="mt-2" style="width: auto; height: 140px;" src="https://apidev.huaygaming.com/info/getGuideGroupImage/24">
											<div _ngcontent-ini-c14="" class="text-theme-primary mt-2">2323
											</div>
										</div>
										<div _ngcontent-ini-c14="" class="col-6 col-sm-6 col-md-4 text-center mb-2 group-yeekee ng-star-inserted" style="cursor: pointer;" data-index="2"><img _ngcontent-ini-c14="" class="mt-2" style="width: auto; height: 140px;" src="https://apidev.huaygaming.com/info/getGuideGroupImage/22">
											<div _ngcontent-ini-c14="" class="text-theme-primary mt-2">1</div>
										</div>
										<!---->
									</div>
								</div>
								<div _ngcontent-ini-c14="" class="modal-footer"><button _ngcontent-ini-c14="" type="button" data-dismiss="modal" class="btn btn-theme-primary">ปิด</button>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!--ส่วนนี้คือ Modal เรียกใช้ผ่าน ID อันนี้คือ id="test_modal" -->
				<!-- #################################### Modal #################################### -->
				<div class="modal fade" id="test_modal" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header bg-secondary">
								<!-- ชื่อบนหัวข้อ Modal -->
								<h4 class="modal-title" style="color: white;">โปรโมชัน</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="card-body">


								<!-- ส่วนตรงกลางจะใส่ข้อมูลไรก็ได้ -->
								<div class="modal-body text-center">
									<img _ngcontent-yck-c14="" style="max-width: 100%; max-height: 100%; height: inherit !important;" src="<?= $theme_asset ?>/img/30_.png" class="ng-star-inserted">

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
	<ngx-spinner _ngcontent-asb-c14="" bdcolor="rgba(0, 0, 0, 0.8)" size="default" color="#fff" type="timer" _nghost-asb-c12="" class="ng-tns-c12-1">
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
							<p>จุดเด่นของเว็บหวยออนไลน์ HUAY GAMING เว็บใหญ่ ล่าสุด ที่เปิดบริการ รับแทงหวย
								ซื้อหวยออนไลน์ ชั้นนำมีความมั่นคงทางการเงิน จ่ายสูง
								ส่วนลดเยอะโดยลูกค้าสามารถเรียกแทงได้ 2 รูปแบบ
								แบบรับส่วนลดและแบบไม่รับส่วนลดแต่จะได้อัตราจ่ายที่สูงกว่า สามารถแทงได้ทุกที่
								ทุกอุปกรณ์ แทงหวยบนมือถือ สะดวกและรวดเร็ว เปิดรับแทงแต่วันที่ 10 และ 25
								ของทุกเดือน ปิดรับแทง 15.30 น. ของวันที่หวยออก มาพร้อมอัตราการจ่ายสูงสุดถึงบาทละ
								900/120 บาท ส่วนลดเยอะ 30% 450/92 แทงขั้นต่ำแค่เพียง 1 บาท
								ไม่มีเลขอั้นท่านสามารถแทงได้ทุกตัวอย่างเต็มที่บริการฝาก-ถอนเงินได้ตลอด 24
								ชั่วโมง</p>
						</div><br _ngcontent-asb-c187=""><span _ngcontent-asb-c187=""><button _ngcontent-asb-c187="" type="button" class="btn btn-theme-primary"><i _ngcontent-asb-c187="" class="fas fa-sign-in-alt"></i>
								เข้าสู่ระบบ</button></span>
								<span _ngcontent-asb-c187="" class="ml-2"><button _ngcontent-asb-c187="" type="submit" class="btn btn-warning"><i _ngcontent-asb-c187="" class="fas fa-user-plus"></i>
								สมัครสมาชิก</button></span>
					</div>
					<div _ngcontent-asb-c187="" class="text-right d-none d-sm-flex col col-3" style="padding: 0px;">
						<img _ngcontent-asb-c187="" src="<?= $theme_asset ?>/img/promote-side.webp" alt="หวยออนไลน์" style="height: 300px; width: auto; margin-top: auto; margin-left: auto;">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div _ngcontent-asb-c187="" id="linebox" tabindex="-1" role="dialog" aria-labelledby="linebox" aria-hidden="true" class="modal fade">
		<div _ngcontent-asb-c187="" role="document" class="modal-dialog modal-lg">
			<div _ngcontent-asb-c187="" class="modal-content" style="border-radius: 10px;">
				<div _ngcontent-asb-c187="" class="modal-header bg-theme-primary">
					<h5 _ngcontent-asb-c187="" class="modal-title">กลุ่มเลขเด็ด</h5><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" aria-label="Close" class="text-white close"><span _ngcontent-asb-c187="" aria-hidden="true">×</span></button>
				</div>
				<div _ngcontent-asb-c187="" class="modal-body">
					<div _ngcontent-asb-c187="" class="row p-0 m-0">
						<div _ngcontent-asb-c187="" class="col-6 col-sm-6 col-md-4 text-center mb-2 group-yeekee ng-star-inserted" style="cursor: pointer;" data-index="0"><img _ngcontent-asb-c187="" class="mt-2" style="width: auto; height: 140px;" src="https://s3.365huay.net/guideGroup/HENG168/1660808520052.jpg">
							<div _ngcontent-asb-c187="" class="text-theme-primary mt-2">เปิดซองเลขเด็ด</div>
						</div>
						<div _ngcontent-asb-c187="" class="col-6 col-sm-6 col-md-4 text-center mb-2 group-yeekee ng-star-inserted" style="cursor: pointer;" data-index="1"><img _ngcontent-asb-c187="" class="mt-2" style="width: auto; height: 140px;" src="https://s3.365huay.net/guideGroup/HENG168/1660810437720.jpg">
							<div _ngcontent-asb-c187="" class="text-theme-primary mt-2">รหัสลับ VI</div>
						</div>
						<div _ngcontent-asb-c187="" class="col-6 col-sm-6 col-md-4 text-center mb-2 group-yeekee ng-star-inserted" style="cursor: pointer;" data-index="2"><img _ngcontent-asb-c187="" class="mt-2" style="width: auto; height: 140px;" src="https://s3.365huay.net/guideGroup/HENG168/1660810410772.jpg">
							<div _ngcontent-asb-c187="" class="text-theme-primary mt-2">15 นาทีมหาสนุก</div>
						</div>
						<!---->
					</div>
				</div>
				<div _ngcontent-asb-c187="" class="modal-footer"><button _ngcontent-asb-c187="" type="button" data-dismiss="modal" class="btn btn-theme-primary" style="width: -webkit-fill-available; box-shadow: -1px 2px 5px black;">ปิด</button>
				</div>
			</div>
		</div>
	</div>
	</div>
	<footer _ngcontent-asb-c187="" class="page-footer font-small">
		<div _ngcontent-asb-c187="" class="footer-copyright text-center">
			<div _ngcontent-asb-c187="" class="rule-footer"><span _ngcontent-asb-c187="" data-toggle="modal" data-target="#ModalRate" style="cursor: pointer;">อัตราจ่าย</span> | <span _ngcontent-asb-c187="" data-toggle="modal" data-target="#ModalRule" style="cursor: pointer;">กฏกติกา</span> | <span _ngcontent-asb-c187="" style="cursor: pointer;" hidden="">สมัครสมาชิก</span><span _ngcontent-asb-c187="" hidden=""> | </span><span _ngcontent-asb-c187="" data-toggle="modal" data-target="#Contactbox" style="cursor: pointer;">ศูนย์ช่วยเหลือ</span></div>
			<hr _ngcontent-asb-c187="" role="separator" aria-orientation="horizontal" class="v-divider theme--dark">
			<div _ngcontent-asb-c187="" class="lotto-footer" style="font-size: 0.85rem;"><strong _ngcontent-asb-c187="">SECURE WEBSITE GUARANTEE 100%</strong><br _ngcontent-asb-c187=""> ©
				COPYRIGHT 2021 HENG168 ALL RIGHTS RESERVED </div>
		</div>
		<div _ngcontent-asb-c187="" class="mobile-view">
			<div _ngcontent-asb-c187="" style="height: 50px;"></div>
		</div>
	</footer>
	<?php if (false) : ?>
		<div _ngcontent-asb-c187="" id="myNavbar" class="bt-navbar"><a _ngcontent-asb-c187="" routerlink="/main" class="col-3" href="#/main"><i _ngcontent-asb-c187="" class="sn-icon sn-icon--home2"></i>
				<div _ngcontent-asb-c187="" class="bt-menu-label">หน้าหลัก</div>
			</a><a _ngcontent-asb-c187="" routerlink="/lottery" class="col-3" href="#" onclick="LoginLottoNew()"><i _ngcontent-asb-c187="" class="fas fa-star rotate"></i>
				<div _ngcontent-asb-c187="" class="bt-menu-label">แทงหวย</div>
			</a><a _ngcontent-asb-c187="" routerlink="/game-sl" class="col-3" href="#/game-sl"><i _ngcontent-asb-c187="" class="fas fa-donate"></i>
				<div _ngcontent-asb-c187="" class="bt-menu-label">คาสิโน</div>
			</a><a _ngcontent-asb-c187="" class="col-3" href="javascript:void(0)" data-toggle="modal" data-target="#Deposit"><i _ngcontent-asb-c187="" class="fas fa-donate"></i>
				<div _ngcontent-asb-c187="" class="bt-menu-label">ฝากเงิน</div>
			</a></div>
	<?php endif; ?>
	<ngx-spinner _ngcontent-asb-c187="" bdcolor="rgba(0, 0, 0, 0.8)" size="default" color="#fff" type="timer" _nghost-asb-c12="" class="ng-tns-c12-0">
		<!---->
	</ngx-spinner>
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
<script src="js/ufa.js?id=<?php echo time(); ?>"></script>
<script>
	$(document).ready(function() {
		$('#test_modal').modal('show');
	});

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
		logoutufa();
	}

	function logoutufa() {
		Swal.fire({
			icon: 'warning',
			title: 'ต้องการออกจากระบบ ?',
			showConfirmButton: false,
			html: '<br><br>' +
				'<a class="float-left btn btn-danger text-light" onclick="swal.close()"><i class="fas fa-times"></i> ยกเลิก</a>' +
				'<a href="api/logout" class="float-right btn btn-success text-light" title="Logout" title="ออกจากระบบ"><i class="fas fa-check"></i> ยืนยัน</a>',
		});
	}
	<?php if ($user) : ?>
		let url_backend = 'https://api.huaydet789.com';

		function LoginLottoNew() {
			Loading()
			$.ajax({
				url: "/api/genAuthJwtUser/<?= $info["id"]; ?>",
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
							member_id: '<?= $user ?>',
							app_type: "lotto"
						},
						success: function(data) {
							$.ajax({
								url: "/api/genAuthJwt/<?= $info["id"]; ?>",
								method: 'get',
								success: function(data) {
									let token = data.token;
									$.ajax({
										url: url_backend + '/ApiLoginLotto',
										method: 'post',
										data: {
											memberID: <?= $info["id"] ?>,
											username: '<?= $user ?>',
											token: token
										},
										success: function(data) {
											if (data.result.statusCodeText == '200') {
												window.location.href = 'https://lotto.huaydet789.com/pages/main/index.html?token=' + data.result.token;
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
				id: <?= $info["id"] ?>,
			},
			success: function(data) {
				if (data.statusCodeText == "200") {
					var rr = data.data[0];
					$('.ufabet-credit').html(formatMoney(rr.balance));
					$('.check-credit-status2').removeClass('fa-spin')
				} else {
					$('.ufabet-credit').html("0.00");
					$('.check-credit-status2').removeClass('fa-spin')
				}
			}
		});

		async function Loading() {
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
							id: <?= $info["id"] ?>,
						},
						success: function(data) {
							if (data.statusCodeText == "200") {
								var rr = data.data[0];
								$('.ufabet-credit').html(formatMoney(rr.balance));
								$('.check-credit-status2').removeClass('fa-spin')
							} else {
								$('.ufabet-credit').html("0.00");
								$('.check-credit-status2').removeClass('fa-spin')
							}
						}
					})
				}
			});
		}

		///Withdraw
		$('#withdrawbtn').click(() => {
			var money = $('#money_w').val();
			if (money == '' || money < 1) {
				Swal.fire({
					icon: 'error',
					title: 'เกิดข้อผิดพลาด',
					text: 'กรุณากรอกจำนวนเงิน'
				});
			} else {
				$.ajax({
					url: url_backend + '/checkWithdraw',
					method: 'post',
					data: {
						money: money,
						id: <?= $info["id"] ?>,
						username: '<?= $user ?>'
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
							});
						}

					}
				})
			}
		});

		function checkCreditLotto() {
			$.ajax({
				url: "/api/genAuthJwtUser/<?= $info["id"]; ?>",
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
							member_id: '<?= $user ?>',
							userUFA: '<?= $user_ufa ?>'
						},
						success: function(data) {

						}
					})

				}
			})
		}

		$('.game-to-wallet').click(async () => {
			document.getElementsByClassName('game-to-wallet').disabled = true;
			Loading();
			await checkCreditLotto();
		})

	<?php endif; ?>
</script>