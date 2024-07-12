
    <div class="x-hamburger js-hamburger-toggle sidebarCollapse d-block d-lg-none">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="top-bar" id="header_menu">
        <div class="d-flex justify-content-between topheader">
            <div class="align-self-center leftheader">
                <div class="btnsidebar">

                </div>
                <div class="brand-logo">
                    <a href="./" class="custom-logo-link" rel="home" aria-current="page"><img width="600" height="170"
                            src="<?= $theme_asset ?>/assets/uploads/2022/11/logo.png" class="custom-logo" alt="<?= $webname ?>" decoding="async"
                            fetchpriority="high" /></a>
                </div>
                <div class="center-header headertop">
                    <div class="menu-menu-container">
                        <ul id="menu-menu" class="menu">
                            <li id="menu-item-341"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-216 current_page_item menu-item-341">
                                <a href="./" aria-current="page"
                                    class="menu-image-title-after menu-image-not-hovered"><img width="330" height="330"
                                        src="<?= $theme_asset ?>/assets/uploads/2022/03/home-1.svg"
                                        class="menu-image menu-image-title-after" alt="" decoding="async" /><span
                                        class="menu-image-title-after menu-image-title">หน้าหลัก</span></a>
                            </li>
                            <!-- <li id="menu-item-1827" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1827"><a href="./review/" class="menu-image-title-after menu-image-not-hovered"><img width="329" height="329" src="<?= $theme_asset ?>/assets/uploads/2022/05/star-1.svg" class="menu-image menu-image-title-after" alt="" decoding="async" /><span class="menu-image-title-after menu-image-title">รีวิว</span></a></li>
                            <li id="menu-item-213" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213"><a href="./promotion/" class="menu-image-title-after menu-image-not-hovered"><img width="199" height="199" src="<?= $theme_asset ?>/assets/uploads/2022/03/gift.svg" class="menu-image menu-image-title-after" alt="" decoding="async" /><span class="menu-image-title-after menu-image-title">โปรโมชั่น</span></a></li>
                            <li id="menu-item-850" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-850"><a href="./%e0%b8%82%e0%b9%88%e0%b8%b2%e0%b8%a7%e0%b8%aa%e0%b8%b2%e0%b8%a3/" class="menu-image-title-after menu-image-not-hovered"><img width="28" height="28" src="<?= $theme_asset ?>/assets/uploads/2022/03/news.svg" class="menu-image menu-image-title-after" alt="" decoding="async" /><span class="menu-image-title-after menu-image-title">ข่าวสาร</span></a></li>
                            <li id="menu-item-620" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-620"><a href="./category/post/" class="menu-image-title-after menu-image-not-hovered"><img width="489" height="489" src="<?= $theme_asset ?>/assets/uploads/2022/03/book-1.svg" class="menu-image menu-image-title-after" alt="" decoding="async" /><span class="menu-image-title-after menu-image-title">บทความ</span></a></li>
                            <li id="menu-item-342" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-342"><a href="/" class="menu-image-title-after menu-image-not-hovered"><img width="26" height="26" src="<?= $theme_asset ?>/assets/uploads/2022/03/line.svg" class="menu-image menu-image-title-after" alt="" decoding="async" /><span class="menu-image-title-after menu-image-title">ติดต่อเรา</span></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="align-self-center mx-1">
                    <div class="online-icon">
                    </div>
                </div>
                <div class="toploginbox">
                    <form>
                        <div class="el-input my-1">
                            <i class="fas fa-user"></i>
                            <input type="text" id="phone" placeholder="ชื่อผู้ใช้งาน" class="inputstyle">
                        </div>
                        <div class="el-input my-1">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="password_m" placeholder="รหัสผู้ใช้งาน" class="inputstyle">
                        </div>
                        <div class="flexcenter">
                            <input type="button" onclick="login_new()" name="button" id="button" value="เข้าสู่ระบบ"
                                class="btn">
                        </div>
                    </form>
                </div>
                <div class="align-self-center text-center mx-1 rightmenubtn">

                    <div class="">
                        <button class="btn btn-login-top">
                            <div class="textwidget"><a href="#loginbtn">เข้าสู่ระบบ</a></div>
                        </button><button class="btn btn-login-top">
                            <div class="textwidget"><a href="register">สมัครสมาชิก</a></div>
                        </button>
                    </div>
                </div>



            </div>
        </div>


    </div>



    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center py-2 logologinmodal">
                        <a href="./" class="custom-logo-link" rel="home" aria-current="page"><img width="600"
                                height="170" src="<?= $theme_asset ?>/assets/uploads/2022/11/logo.png" class="custom-logo" alt="<?= $webname ?>"
                                decoding="async" /></a>
                    </div>
                    <div class="form-login">
                        <div class="">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="phone_m" id="phone_m"
                                    placeholder="เบอร์มือถือ">
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="password_mm" id="password_mm" class="form-control"
                                    placeholder="รหัสผ่าน">
                            </div>
                            <div class="pb-1 login-desktop text-center">
                                <button type="button" class="btn btn-lg btn-login"
                                    onclick="login_neww()">เข้าสู่ระบบ</button>
                            </div>
                            <div class="pb-1 login-mobile text-center">
                                <button type="button" class="btn btn-lg btn-login"
                                    onclick="login_neww()">เข้าสู่ระบบ</button>
                            </div>
                        </div>
                        <div class="footer-form py-3">
                            <div class="row ">
                                <div class="col-7">
                                    <span class="text-white">ท่านยังไม่มีบัญชี?</span> <a href="register" style=""
                                        class="text-white"><u>สมัครสมาชิก</u></a>
                                </div>
                                <div class="col-5 text-right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="insidebarleft">
        <a href="./" class="custom-logo-link" rel="home" aria-current="page"><img width="600" height="170"
                src="<?= $theme_asset ?>/assets/uploads/2022/11/logo.png" class="custom-logo" alt="<?= $webname ?>" decoding="async" /></a>
        <div class="menu-menu-container">
            <ul id="menu-menu-1" class="menu">
                <li
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-216 current_page_item menu-item-341">
                    <a href="./" aria-current="page" class="menu-image-title-after menu-image-not-hovered"><img
                            width="330" height="330" src="<?= $theme_asset ?>/assets/uploads/2022/03/home-1.svg"
                            class="menu-image menu-image-title-after" alt="" decoding="async" /><span
                            class="menu-image-title-after menu-image-title">หน้าหลัก</span></a>
                </li>
                <!-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1827"><a href="./review/" class="menu-image-title-after menu-image-not-hovered"><img width="329" height="329" src="<?= $theme_asset ?>/assets/uploads/2022/05/star-1.svg" class="menu-image menu-image-title-after" alt="" decoding="async" /><span class="menu-image-title-after menu-image-title">รีวิว</span></a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213"><a href="./promotion/" class="menu-image-title-after menu-image-not-hovered"><img width="199" height="199" src="<?= $theme_asset ?>/assets/uploads/2022/03/gift.svg" class="menu-image menu-image-title-after" alt="" decoding="async" /><span class="menu-image-title-after menu-image-title">โปรโมชั่น</span></a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-850"><a href="./%e0%b8%82%e0%b9%88%e0%b8%b2%e0%b8%a7%e0%b8%aa%e0%b8%b2%e0%b8%a3/" class="menu-image-title-after menu-image-not-hovered"><img width="28" height="28" src="<?= $theme_asset ?>/assets/uploads/2022/03/news.svg" class="menu-image menu-image-title-after" alt="" decoding="async" /><span class="menu-image-title-after menu-image-title">ข่าวสาร</span></a></li>
                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-620"><a href="./category/post/" class="menu-image-title-after menu-image-not-hovered"><img width="489" height="489" src="<?= $theme_asset ?>/assets/uploads/2022/03/book-1.svg" class="menu-image menu-image-title-after" alt="" decoding="async" /><span class="menu-image-title-after menu-image-title">บทความ</span></a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-342"><a href="/" class="menu-image-title-after menu-image-not-hovered"><img width="26" height="26" src="<?= $theme_asset ?>/assets/uploads/2022/03/line.svg" class="menu-image menu-image-title-after" alt="" decoding="async" /><span class="menu-image-title-after menu-image-title">ติดต่อเรา</span></a></li> -->
            </ul>
        </div>
    </div>
    <div class="overlaysidebar"></div>
    <div class="desktop-index wrapper-index">
        <div data-elementor-type="wp-page" data-elementor-id="216" class="elementor elementor-216">
            <section data-uael-partstyle="nasa" data-uael-partcolor="" data-uael-partopacity=""
                data-uael-partdirection="bottom" data-uael-partnum="" data-uael-partsize="" data-uael-partspeed=""
                data-uael-interactive="no"
                class="elementor-section elementor-top-section elementor-element elementor-element-40961c3 uael-particle-yes uael-particle-adv-yes linecutbt01 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="40961c3" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-02a726e"
                        data-id="02a726e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-e246030 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="e246030" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6229531"
                                        data-id="6229531" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-964f9cc elementor-widget elementor-widget-image"
                                                data-id="964f9cc" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" loading="lazy" width="600" height="170"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/logo.png"
                                                        class="attachment-large size-large" alt="" style=" width: auto;" />
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-ffc0502 elementor-widget elementor-widget-image"
                                                data-id="ffc0502" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a href="register">
                                                    <img decoding="async" loading="lazy" width="768" height="232"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/สมัครสมาชิก.gif"
                                                        class="attachment-full size-full" alt="" />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-53c9077 elementor-widget elementor-widget-heading"
                                                data-id="53c9077" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default"><?= $webname ?>
                                                        ออโต้เต็มระบบ บริการ 24 ชม.</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-42da1fc"
                                        data-id="42da1fc" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-55428c1 elementor-arrows-position-inside elementor-widget elementor-widget-image-carousel"
                                                data-id="55428c1" data-element_type="widget"
                                                data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;arrows&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;speed&quot;:500}"
                                                data-widget_type="image-carousel.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-image-carousel-wrapper swiper-container"
                                                        dir="ltr">
                                                        <div
                                                            class="elementor-image-carousel swiper-wrapper swiper-image-stretch">
                                                            <div class="swiper-slide">
                                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                                        class="swiper-slide-image"
                                                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/2.jpg" alt="2" />
                                                                </figure>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                                        class="swiper-slide-image"
                                                                        src="<?= $theme_asset ?>/assets/uploads/2022/06/022.jpg"
                                                                        alt="022" /></figure>
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                                        class="swiper-slide-image"
                                                                        src="<?= $theme_asset ?>/assets/uploads/2022/06/123.jpg"
                                                                        alt="123" /></figure>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-prev">
                                                            <i aria-hidden="true" class="eicon-chevron-left"></i> <span
                                                                class="elementor-screen-only">Previous</span>
                                                        </div>
                                                        <div
                                                            class="elementor-swiper-button elementor-swiper-button-next">
                                                            <i aria-hidden="true" class="eicon-chevron-right"></i> <span
                                                                class="elementor-screen-only">Next</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-ee7740f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="ee7740f" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-8517f24"
                                        data-id="8517f24" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-54843ed elementor-widget elementor-widget-image"
                                                data-id="54843ed" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" loading="lazy" width="1920" height="450"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/ฟรีเครดิต.gif"
                                                        class="attachment-full size-full" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-cc132ba linecutbt01 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="cc132ba" data-element_type="section" id="tabs"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8ca1210"
                        data-id="8ca1210" data-element_type="column"
                        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-b62cc20 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="b62cc20" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-4e85538 tablink"
                                        data-id="4e85538" data-element_type="column" id="tabmain01"
                                        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-071a179 elementor-widget elementor-widget-image"
                                                data-id="071a179" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" loading="lazy" width="1024" height="280"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/cropped-logo1-1024x280.png"
                                                        class="attachment-large size-large" alt=""
                                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/11/cropped-logo1-1024x280.png 1024w, <?= $theme_asset ?>/assets/uploads/2022/11/cropped-logo1-300x82.png 300w, <?= $theme_asset ?>/assets/uploads/2022/11/cropped-logo1-768x210.png 768w, <?= $theme_asset ?>/assets/uploads/2022/11/cropped-logo1-50x14.png 50w, <?= $theme_asset ?>/assets/uploads/2022/11/cropped-logo1.png 1032w"
                                                        sizes="(max-width: 1024px) 100vw, 1024px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-90dcbd6 tablink"
                                        data-id="90dcbd6" data-element_type="column" id="tabmain02"
                                        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-acfb1f9 elementor-widget elementor-widget-image"
                                                data-id="acfb1f9" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" loading="lazy" width="100" height="100"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/EZ-Casino-แทงฟุตบอลพนันออนไลน์-บาสเก็ตบอล-E-Sport.png"
                                                        class="attachment-large size-large" alt=""
                                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/11/EZ-Casino-แทงฟุตบอลพนันออนไลน์-บาสเก็ตบอล-E-Sport.png 100w, <?= $theme_asset ?>/assets/uploads/2022/11/EZ-Casino-แทงฟุตบอลพนันออนไลน์-บาสเก็ตบอล-E-Sport-50x50.png 50w"
                                                        sizes="(max-width: 100px) 100vw, 100px" />
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-a687cf3 elementor-widget elementor-widget-heading"
                                                data-id="a687cf3" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">แทงบอล
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-1a95a49 tablink"
                                        data-id="1a95a49" data-element_type="column" id="tabmain03"
                                        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-1396862 elementor-widget elementor-widget-image"
                                                data-id="1396862" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" loading="lazy" width="200" height="200"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/04/casino.png"
                                                        class="attachment-large size-large" alt=""
                                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/04/casino.png 200w, <?= $theme_asset ?>/assets/uploads/2022/04/casino-150x150.png 150w, <?= $theme_asset ?>/assets/uploads/2022/04/casino-50x50.png 50w"
                                                        sizes="(max-width: 200px) 100vw, 200px" />
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-06c58c1 elementor-widget elementor-widget-heading"
                                                data-id="06c58c1" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">บาคาร่า
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-1afcba7 tablink"
                                        data-id="1afcba7" data-element_type="column" id="tabmain04"
                                        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-7b515ee elementor-widget elementor-widget-image"
                                                data-id="7b515ee" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" loading="lazy" width="200" height="200"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/04/slot.png"
                                                        class="attachment-large size-large" alt=""
                                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/04/slot.png 200w, <?= $theme_asset ?>/assets/uploads/2022/04/slot-150x150.png 150w, <?= $theme_asset ?>/assets/uploads/2022/04/slot-50x50.png 50w"
                                                        sizes="(max-width: 200px) 100vw, 200px" />
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3ff894b elementor-widget elementor-widget-heading"
                                                data-id="3ff894b" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">สล็อต
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-66f8c3b tablink"
                                        data-id="66f8c3b" data-element_type="column" id="tabmain05"
                                        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-cdbfc06 elementor-widget elementor-widget-image"
                                                data-id="cdbfc06" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" loading="lazy" width="100" height="100"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/download-1.png"
                                                        class="attachment-large size-large" alt=""
                                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/11/download-1.png 100w, <?= $theme_asset ?>/assets/uploads/2022/11/download-1-50x50.png 50w"
                                                        sizes="(max-width: 100px) 100vw, 100px" />
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-984aea6 elementor-widget elementor-widget-heading"
                                                data-id="984aea6" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">รีวิว
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-16 elementor-inner-column elementor-element elementor-element-38b3bfb tablink"
                                        data-id="38b3bfb" data-element_type="column" id="tabmain06"
                                        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-ab3b23d elementor-widget elementor-widget-image"
                                                data-id="ab3b23d" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" loading="lazy" width="100" height="100"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/EZ-Casino-บริการสล็อตออนไลน์-ฝาก-100-รับเครดิตฟรี-100.png"
                                                        class="attachment-large size-large" alt=""
                                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/11/EZ-Casino-บริการสล็อตออนไลน์-ฝาก-100-รับเครดิตฟรี-100.png 100w, <?= $theme_asset ?>/assets/uploads/2022/11/EZ-Casino-บริการสล็อตออนไลน์-ฝาก-100-รับเครดิตฟรี-100-50x50.png 50w"
                                                        sizes="(max-width: 100px) 100vw, 100px" />
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-82aa222 elementor-widget elementor-widget-heading"
                                                data-id="82aa222" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">แจ็คพอต
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-8e2fa33  tabcontent linecutbt01 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="8e2fa33" data-element_type="section" id="tab-1"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-692ed25"
                        data-id="692ed25" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-04a1b5d elementor-widget elementor-widget-heading"
                                data-id="04a1b5d" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">ฝาก-ถอน ออโต้
                                        โปรแรงสุดในไทย อัพเกรดใหม่ New <?= $webname ?> ระบบไวกว่าเดิม</h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-418ed6d elementor-widget elementor-widget-image"
                                data-id="418ed6d" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" loading="lazy" width="600" height="170"
                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/logo.png" class="attachment-full size-full"
                                        alt="" />
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b67f4c1 elementor-widget elementor-widget-image"
                                data-id="b67f4c1" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" loading="lazy" width="1200" height="339"
                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/pro1.png" class="attachment-full size-full" alt=""
                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/11/pro1.png 1200w, <?= $theme_asset ?>/assets/uploads/2022/11/pro1-300x85.png 300w, <?= $theme_asset ?>/assets/uploads/2022/11/pro1-1024x289.png 1024w, <?= $theme_asset ?>/assets/uploads/2022/11/pro1-768x217.png 768w, <?= $theme_asset ?>/assets/uploads/2022/11/pro1-50x14.png 50w"
                                        sizes="(max-width: 1200px) 100vw, 1200px" />
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-8aa68a1 uael-img-grid-tablet__column-2 uael-img-grid__column-2 uael-img-grid-mobile__column-1 uael-ins-normal elementor-widget elementor-widget-uael-image-gallery"
                                data-id="8aa68a1" data-element_type="widget"
                                data-settings="{&quot;gallery_columns_tablet&quot;:&quot;2&quot;,&quot;column_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gallery_columns&quot;:&quot;2&quot;,&quot;gallery_columns_mobile&quot;:&quot;1&quot;,&quot;column_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;column_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;images_valign&quot;:&quot;flex-start&quot;}"
                                data-widget_type="uael-image-gallery.default">
                                <div class="elementor-widget-container">
                                    <div class="uael-gallery-parent uael-caption- uael-gallery-unjustified">
                                        <div class="uael-img-gallery-wrap uael-img-grid-wrap uael-img-grid-masonry-wrap"
                                            data-filter-default="All">
                                            <div class="uael-grid-item  uael-img-gallery-item-1">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/newmember.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="526" height="210"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/newmember.png"
                                                                class="attachment-medium_large size-medium_large"
                                                                alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-2">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/newsystem.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="526" height="210"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/newsystem.png"
                                                                class="attachment-medium_large size-medium_large"
                                                                alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-3">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/oct_pro_01.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="595" height="218"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/oct_pro_01.png"
                                                                class="attachment-medium_large size-medium_large"
                                                                alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-4">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/oct_pro_02.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="595" height="218"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/oct_pro_02.png"
                                                                class="attachment-medium_large size-medium_large"
                                                                alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-5">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/oct_pro_03.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="595" height="218"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/oct_pro_03.png"
                                                                class="attachment-medium_large size-medium_large"
                                                                alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-6">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/oct_pro_04.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="595" height="218"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/oct_pro_04.png"
                                                                class="attachment-medium_large size-medium_large"
                                                                alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-bb202b3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="bb202b3" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-dbbabc8"
                                        data-id="dbbabc8" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-a568623 elementor-widget elementor-widget-text-editor"
                                                data-id="a568623" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p><?= $webname ?> เว็ปตรง ไม่ผ่าน Agency ฟังก์ชั่นใช้งานง่าย ฝาก &#8211;
                                                        ถอนไว ด้วยระบบ AUTO เล่นได้ทุกห้องโดยไม่ต้องโยกเงินไม่มีขั้นต่ำ
                                                        เราได้รวบรวม กีฬา คาสิโน เกมสล็อต ชั้นนำ มาไว้ให้คุณ
                                                        ได้เลือกหลากหลาย
                                                        เพื่อให้คุณ ได้เพลิดเพลินกับการเดิมพันออนไลน์แบบครบวงจร
                                                        ไม่ต้องสมัครหลายเว็ปให้เสียเวลา <?= $webname ?> ใช้ระบบมีความปลอดภัยสูง
                                                        และมีความมั่นคง ทางการเงินระดับแนวหน้า
                                                        ทำให้คุณเดิมพันได้อย่างไร้กังวล ใช้งานง่าย
                                                        สะดวกสบาย สามารถเล่นได้ทุกที่ทุกเวลา
                                                        พร้อมทั้งให้บริการระดับพรีเมี่ยม ดูแลทุกการเดิมพัน
                                                        จากทีมงานคุณภาพบริษัท <?= $webname ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-c2a1a05 linecutbt01 tabcontent elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="c2a1a05" data-element_type="section" id="tab-2"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0fe27ae"
                        data-id="0fe27ae" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-fffd7e3 elementor-widget elementor-widget-heading"
                                data-id="fffd7e3" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">
                                        แทงบอลออนไลน์ที่เราเปิดบริการ</h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b2cbbfa elementor-widget elementor-widget-image"
                                data-id="b2cbbfa" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" loading="lazy" width="1024" height="404"
                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/SPORTS02-1024x404.png"
                                        class="attachment-large size-large" alt=""
                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/11/SPORTS02-1024x404.png 1024w, <?= $theme_asset ?>/assets/uploads/2022/11/SPORTS02-300x118.png 300w, <?= $theme_asset ?>/assets/uploads/2022/11/SPORTS02-768x303.png 768w, <?= $theme_asset ?>/assets/uploads/2022/11/SPORTS02-50x20.png 50w, <?= $theme_asset ?>/assets/uploads/2022/11/SPORTS02.png 1358w"
                                        sizes="(max-width: 1024px) 100vw, 1024px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-5966d74 linecutbt01 tabcontent elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="5966d74" data-element_type="section" id="tab-3"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-adb674b"
                        data-id="adb674b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-37ea48e elementor-widget elementor-widget-heading"
                                data-id="37ea48e" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">
                                        คาสิโนออนไลน์ที่เราเปิดบริการ</h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-88df710 elementor-widget elementor-widget-image"
                                data-id="88df710" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" loading="lazy" width="1024" height="420"
                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/CASINO02-1024x420.png"
                                        class="attachment-large size-large" alt=""
                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/11/CASINO02-1024x420.png 1024w, <?= $theme_asset ?>/assets/uploads/2022/11/CASINO02-300x123.png 300w, <?= $theme_asset ?>/assets/uploads/2022/11/CASINO02-768x315.png 768w, <?= $theme_asset ?>/assets/uploads/2022/11/CASINO02-50x21.png 50w, <?= $theme_asset ?>/assets/uploads/2022/11/CASINO02.png 1311w"
                                        sizes="(max-width: 1024px) 100vw, 1024px" />
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-d09e6ef elementor-widget elementor-widget-gallery"
                                data-id="d09e6ef" data-element_type="widget"
                                data-settings="{&quot;columns&quot;:7,&quot;columns_tablet&quot;:6,&quot;columns_mobile&quot;:4,&quot;aspect_ratio&quot;:&quot;1:1&quot;,&quot;gallery_layout&quot;:&quot;grid&quot;,&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;overlay_background&quot;:&quot;yes&quot;,&quot;content_hover_animation&quot;:&quot;fade-in&quot;}"
                                data-widget_type="gallery.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-gallery__container">
                                        <div class="e-gallery-item elementor-gallery-item elementor-animated-content">
                                            <div class="e-gallery-image elementor-gallery-item__image"
                                                data-thumbnail="<?= $theme_asset ?>/assets/uploads/2022/03/Artboard-6_0.png"
                                                data-width="319" data-height="334" alt=""></div>
                                            <div class="elementor-gallery-item__overlay"></div>
                                        </div>
                                        <div class="e-gallery-item elementor-gallery-item elementor-animated-content">
                                            <div class="e-gallery-image elementor-gallery-item__image"
                                                data-thumbnail="<?= $theme_asset ?>/assets/uploads/2022/03/v16.png" data-width="319"
                                                data-height="334" alt=""></div>
                                            <div class="elementor-gallery-item__overlay"></div>
                                        </div>
                                        <div class="e-gallery-item elementor-gallery-item elementor-animated-content">
                                            <div class="e-gallery-image elementor-gallery-item__image"
                                                data-thumbnail="<?= $theme_asset ?>/assets/uploads/2022/03/v10.png" data-width="319"
                                                data-height="334" alt=""></div>
                                            <div class="elementor-gallery-item__overlay"></div>
                                        </div>
                                        <div class="e-gallery-item elementor-gallery-item elementor-animated-content">
                                            <div class="e-gallery-image elementor-gallery-item__image"
                                                data-thumbnail="<?= $theme_asset ?>/assets/uploads/2022/03/v9.png" data-width="319"
                                                data-height="334" alt=""></div>
                                            <div class="elementor-gallery-item__overlay"></div>
                                        </div>
                                        <div class="e-gallery-item elementor-gallery-item elementor-animated-content">
                                            <div class="e-gallery-image elementor-gallery-item__image"
                                                data-thumbnail="<?= $theme_asset ?>/assets/uploads/2022/03/v7.png" data-width="319"
                                                data-height="334" alt=""></div>
                                            <div class="elementor-gallery-item__overlay"></div>
                                        </div>
                                        <div class="e-gallery-item elementor-gallery-item elementor-animated-content">
                                            <div class="e-gallery-image elementor-gallery-item__image"
                                                data-thumbnail="<?= $theme_asset ?>/assets/uploads/2022/11/mmigame.png" data-width="319"
                                                data-height="334" alt=""></div>
                                            <div class="elementor-gallery-item__overlay"></div>
                                        </div>
                                        <div class="e-gallery-item elementor-gallery-item elementor-animated-content">
                                            <div class="e-gallery-image elementor-gallery-item__image"
                                                data-thumbnail="<?= $theme_asset ?>/assets/uploads/2022/11/download-3.png"
                                                data-width="319" data-height="334" alt=""></div>
                                            <div class="elementor-gallery-item__overlay"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-4885c6a linecutbt01 tabcontent elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="4885c6a" data-element_type="section" id="tab-4"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2aaa61c"
                        data-id="2aaa61c" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d903fb7 elementor-widget elementor-widget-heading"
                                data-id="d903fb7" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">
                                        สล็อตออนไลน์ที่เราเปิดบริการ</h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-7bf05a6 uael-img-grid__column-2 uael-img-grid-tablet__column-2 uael-img-grid-mobile__column-2 uael-ins-normal elementor-widget elementor-widget-uael-image-gallery"
                                data-id="7bf05a6" data-element_type="widget"
                                data-settings="{&quot;gallery_columns&quot;:&quot;2&quot;,&quot;gallery_columns_tablet&quot;:&quot;2&quot;,&quot;column_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;column_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;column_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;gallery_columns_mobile&quot;:&quot;2&quot;,&quot;images_valign&quot;:&quot;flex-start&quot;}"
                                data-widget_type="uael-image-gallery.default">
                                <div class="elementor-widget-container">
                                    <div class="uael-gallery-parent uael-caption- uael-gallery-unjustified">
                                        <div class="uael-img-gallery-wrap uael-img-grid-wrap uael-img-grid-masonry-wrap"
                                            data-filter-default="All">
                                            <div class="uael-grid-item  uael-img-gallery-item-1">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_AFB_BANNER_SLOT_EDIT.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="498" height="215"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_AFB_BANNER_SLOT_EDIT.png"
                                                                class="attachment-full size-full" alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-2">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_JILI_BANNER_SLOT_EDIT.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="498" height="215"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_JILI_BANNER_SLOT_EDIT.png"
                                                                class="attachment-full size-full" alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-3">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_CQ9_BANNER_SLOT_EDIT.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="498" height="215"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_CQ9_BANNER_SLOT_EDIT.png"
                                                                class="attachment-full size-full" alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-4">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_JOKER_BANNER_SLOT_EDIT.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="498" height="215"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_JOKER_BANNER_SLOT_EDIT.png"
                                                                class="attachment-full size-full" alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-5">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_PRAGMATIC_BANNER_SLOT_EDIT.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="498" height="215"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_PRAGMATIC_BANNER_SLOT_EDIT.png"
                                                                class="attachment-full size-full" alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-6">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_GIOCOPLUS_BANNER_SLOT_EDIT.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="498" height="215"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_GIOCOPLUS_BANNER_SLOT_EDIT.png"
                                                                class="attachment-full size-full" alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-7">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_NETENT_BANNER_SLOT_EDIT.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="498" height="215"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_NETENT_BANNER_SLOT_EDIT.png"
                                                                class="attachment-full size-full" alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-8">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_PLAYNGO_BANNER_SLOT_EDIT.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="498" height="215"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_PLAYNGO_BANNER_SLOT_EDIT.png"
                                                                class="attachment-full size-full" alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-9">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_QUICKSPIN_BANNER_SLOT_EDIT.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="498" height="215"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_QUICKSPIN_BANNER_SLOT_EDIT.png"
                                                                class="attachment-full size-full" alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-10">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_REALTIME_BANNER_SLOT_EDIT.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="498" height="215"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_REALTIME_BANNER_SLOT_EDIT.png"
                                                                class="attachment-full size-full" alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-11">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_PGSOFT_BANNER_SLOT_EDIT.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="498" height="215"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_PGSOFT_BANNER_SLOT_EDIT.png"
                                                                class="attachment-full size-full" alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-12">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_WORLDMATCH_BANNER_SLOT_EDIT.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="498" height="215"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_WORLDMATCH_BANNER_SLOT_EDIT.png"
                                                                class="attachment-full size-full" alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-13">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_MICROGAMING_BANNER_SLOT_EDIT.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="498" height="215"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_MICROGAMING_BANNER_SLOT_EDIT.png"
                                                                class="attachment-full size-full" alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-14">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_SBOGAMES_BANNER_SLOT_EDIT.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="498" height="215"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_SBOGAMES_BANNER_SLOT_EDIT.png"
                                                                class="attachment-full size-full" alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-15">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_FUNKYGAMES_BANNER_SLOT_EDIT.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="498" height="215"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_FUNKYGAMES_BANNER_SLOT_EDIT.png"
                                                                class="attachment-full size-full" alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="uael-grid-item  uael-img-gallery-item-16">
                                                <div class="uael-grid-item-content">
                                                    <a class="uael-grid-img uael-grid-gallery-img uael-ins-hover elementor-clickable"
                                                        target="_blank" rel="nofollow"
                                                        href="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_YGG_BANNER_SLOT_EDIT.png"
                                                        data-elementor-open-lightbox="no">
                                                        <div class="uael-grid-img-thumbnail uael-ins-target"><img
                                                                decoding="async" loading="lazy" width="498" height="215"
                                                                src="<?= $theme_asset ?>/assets/uploads/2022/11/MMB_YGG_BANNER_SLOT_EDIT.png"
                                                                class="attachment-full size-full" alt="" /></div>
                                                        <div class="uael-grid-img-overlay"></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-55e5dd9 linecutbt01 tabcontent elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="55e5dd9" data-element_type="section" id="tab-5"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8df67ff"
                        data-id="8df67ff" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-97c85e9 elementor-widget elementor-widget-heading"
                                data-id="97c85e9" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">รีวิวจ่ายจากลูกค้าของเรา
                                    </h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-cbbe958 elementor-arrows-position-inside elementor-widget elementor-widget-image-carousel"
                                data-id="cbbe958" data-element_type="widget"
                                data-settings="{&quot;slides_to_show&quot;:&quot;3&quot;,&quot;slides_to_show_tablet&quot;:&quot;2&quot;,&quot;slides_to_show_mobile&quot;:&quot;1&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;arrows&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]}}"
                                data-widget_type="image-carousel.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
                                        <div class="elementor-image-carousel swiper-wrapper">
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/176db55dcddf8dba3e07e92f764aade7.jpg"
                                                        alt="176db55dcddf8dba3e07e92f764aade7" /></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/334c6672309a4c590d322c29ef87c868.jpg"
                                                        alt="334c6672309a4c590d322c29ef87c868" /></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/5687fc9386394840c93e7a8827eb1978.jpg"
                                                        alt="5687fc9386394840c93e7a8827eb1978" /></figure>
                                            </div>
                                        </div>
                                        <div class="elementor-swiper-button elementor-swiper-button-prev">
                                            <i aria-hidden="true" class="eicon-chevron-left"></i> <span
                                                class="elementor-screen-only">Previous</span>
                                        </div>
                                        <div class="elementor-swiper-button elementor-swiper-button-next">
                                            <i aria-hidden="true" class="eicon-chevron-right"></i> <span
                                                class="elementor-screen-only">Next</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-f693a59 linecutbt01 tabcontent elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="f693a59" data-element_type="section" id="tab-6"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-733cd21"
                        data-id="733cd21" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-8adc881 elementor-widget elementor-widget-heading"
                                data-id="8adc881" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">แจ็คพอตยืนยันจ่ายจริง
                                    </h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-6bd4932 elementor-arrows-position-inside elementor-widget elementor-widget-image-carousel"
                                data-id="6bd4932" data-element_type="widget"
                                data-settings="{&quot;slides_to_show&quot;:&quot;3&quot;,&quot;slides_to_show_tablet&quot;:&quot;2&quot;,&quot;slides_to_show_mobile&quot;:&quot;1&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;arrows&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]}}"
                                data-widget_type="image-carousel.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
                                        <div class="elementor-image-carousel swiper-wrapper">
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/imgimage-jackpot-122000b-result.jpg"
                                                        alt="imgimage-jackpot-122000b-result" /></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/imgimage-jackpot-150717b-result.jpg"
                                                        alt="imgimage-jackpot-150717b-result" /></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/imgimage-jackpot-549988b-result.jpg"
                                                        alt="imgimage-jackpot-549988b-result" /></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/imgimage-jackpot-1134752b-result.jpg"
                                                        alt="imgimage-jackpot-1134752b-result" /></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/imgimage-jackpot-2400000b-result.jpg"
                                                        alt="imgimage-jackpot-2400000b-result" /></figure>
                                            </div>
                                        </div>
                                        <div class="elementor-swiper-button elementor-swiper-button-prev">
                                            <i aria-hidden="true" class="eicon-chevron-left"></i> <span
                                                class="elementor-screen-only">Previous</span>
                                        </div>
                                        <div class="elementor-swiper-button elementor-swiper-button-next">
                                            <i aria-hidden="true" class="eicon-chevron-right"></i> <span
                                                class="elementor-screen-only">Next</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-be8546f tabcontent linecutbt01 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="be8546f" data-element_type="section" id="tab-4"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e5f7421"
                        data-id="e5f7421" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-0e5aecf elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="0e5aecf" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ec2cba8"
                                        data-id="ec2cba8" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-a82e301 elementor-widget elementor-widget-heading"
                                                data-id="a82e301" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">
                                                        รวมสูตรแฮ็กคาสิโน</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-8aec077"
                                        data-id="8aec077" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-37913c3 elementor-align-right elementor-widget elementor-widget-button"
                                                data-id="37913c3" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a href="#"
                                                            class="elementor-button-link elementor-button elementor-size-sm"
                                                            role="button">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span
                                                                    class="elementor-button-icon elementor-align-icon-right">
                                                                    <i aria-hidden="true"
                                                                        class="far fa-arrow-alt-circle-right"></i>
                                                                </span>
                                                                <span class="elementor-button-text">ดูทั้งหมด</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="elementor-element elementor-element-ad75c01 elementor-posts--align-center elementor-grid-3 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-widget elementor-widget-posts"
                                data-id="ad75c01" data-element_type="widget"
                                data-settings="{&quot;classic_columns&quot;:&quot;3&quot;,&quot;classic_columns_tablet&quot;:&quot;2&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                data-widget_type="posts.classic">
                                <div class="elementor-widget-container">
                                    <div
                                        class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid">
                                        <article
                                            class="elementor-post elementor-grid-item post-254 post type-post status-publish format-standard has-post-thumbnail hentry category-post category-casino">
                                            <a class="elementor-post__thumbnail__link" href="./nullam-euismod/">
                                                <div class="elementor-post__thumbnail"><img decoding="async"
                                                        loading="lazy" width="768" height="432"
                                                        src="<?= $theme_asset ?>/assets/uploads/2021/11/01-768x432.jpg"
                                                        class="attachment-medium_large size-medium_large" alt="" />
                                                </div>
                                            </a>
                                            <div class="elementor-post__text">
                                                <h3 class="elementor-post__title">
                                                    <a href="./nullam-euismod/">
                                                        Nullam euismod quis dolor id scelerisque. Fusce facilisis tellus
                                                        non mattis pretium. </a>
                                                </h3>
                                                <div class="elementor-post__excerpt">
                                                    <p>Nullam euismod quis dolor id scelerisque. Fusce facilisis tellus
                                                        non mattis pretium. Curabitur vitae nulla</p>
                                                </div>
                                            </div>
                                        </article>
                                        <article
                                            class="elementor-post elementor-grid-item post-252 post type-post status-publish format-standard has-post-thumbnail hentry category-post category-huay">
                                            <a class="elementor-post__thumbnail__link" href="./lorem-ipsum/">
                                                <div class="elementor-post__thumbnail"><img decoding="async"
                                                        loading="lazy" width="768" height="432"
                                                        src="<?= $theme_asset ?>/assets/uploads/2021/11/01-768x432.jpg"
                                                        class="attachment-medium_large size-medium_large" alt="" />
                                                </div>
                                            </a>
                                            <div class="elementor-post__text">
                                                <h3 class="elementor-post__title">
                                                    <a href="./lorem-ipsum/">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a>
                                                </h3>
                                                <div class="elementor-post__excerpt">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                                        eget aliquet nisi, et tempor felis.</p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-18a9d3a linecutbt01 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="18a9d3a" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-72f6328"
                        data-id="72f6328" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-8e17edc elementor-widget elementor-widget-heading"
                                data-id="8e17edc" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h3 class="elementor-heading-title elementor-size-default">🔥<?= $webname ?>
                                        ระบบที่ดีที่สุด🔥</h3>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-16e3dd7 elementor-widget elementor-widget-image"
                                data-id="16e3dd7" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" loading="lazy" width="1552" height="336"
                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/bank4-1.png" class="attachment-full size-full"
                                        alt=""
                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/11/bank4-1.png 1552w, <?= $theme_asset ?>/assets/uploads/2022/11/bank4-1-300x65.png 300w, <?= $theme_asset ?>/assets/uploads/2022/11/bank4-1-1024x222.png 1024w, <?= $theme_asset ?>/assets/uploads/2022/11/bank4-1-768x166.png 768w, <?= $theme_asset ?>/assets/uploads/2022/11/bank4-1-1536x333.png 1536w, <?= $theme_asset ?>/assets/uploads/2022/11/bank4-1-50x11.png 50w"
                                        sizes="(max-width: 1552px) 100vw, 1552px" />
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-a03b1d5 elementor-widget elementor-widget-image"
                                data-id="a03b1d5" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" loading="lazy" width="1552" height="562"
                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/regis-2.png" class="attachment-full size-full"
                                        alt=""
                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/11/regis-2.png 1552w, <?= $theme_asset ?>/assets/uploads/2022/11/regis-2-300x109.png 300w, <?= $theme_asset ?>/assets/uploads/2022/11/regis-2-1024x371.png 1024w, <?= $theme_asset ?>/assets/uploads/2022/11/regis-2-768x278.png 768w, <?= $theme_asset ?>/assets/uploads/2022/11/regis-2-1536x556.png 1536w, <?= $theme_asset ?>/assets/uploads/2022/11/regis-2-50x18.png 50w"
                                        sizes="(max-width: 1552px) 100vw, 1552px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-2f86573 elementor-section-full_width linecutbt01 elementor-section-height-default elementor-section-height-default"
                data-id="2f86573" data-element_type="section">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f556c47"
                        data-id="f556c47" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-05d80f3 elementor-widget elementor-widget-image"
                                data-id="05d80f3" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" loading="lazy" width="900" height="160"
                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/เครดิตฟรี-50-ยืนยันเบอร์-ล่าสุด.gif"
                                        class="attachment-large size-large" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-a1481eb linecutbt01 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="a1481eb" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fb38254"
                        data-id="fb38254" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-f9837da elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="f9837da" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-72cc41d"
                                        data-id="72cc41d" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-93a1526 elementor-widget elementor-widget-heading"
                                                data-id="93a1526" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">
                                                        เกี่ยวกับเรา <?= $webname ?></h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-b38f166 elementor-widget elementor-widget-text-editor"
                                                data-id="b38f166" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>เมื่อยุคสมัยเปลี่ยนไป โลกของการสร้างรายได้ บนโลกออนไลน์
                                                        ที่เป็นแค่โลกเสมือนจริง ได้เปลี่ยนความไม่แน่นอน
                                                        ให้เกิดความแน่นอน ทั้งยังสร้างรายได้ที่มั่นคง และง่ายดาย
                                                        ได้มากกว่า ไม่ว่าคุณจะเป็นใคร
                                                        ก็หาเงินได้ง่ายยิ่งกว่าปลอกกล้วยเข้าปาก
                                                        ได้จริง ๆ ด้วยสิ่งสำคัญเพียงข้อเดียวคือ&#8230;การเลือก
                                                        คาสิโนออนไลน์ ที่เชื่อถือได้ และให้บริการแก่สมาชิกทุก ๆ ท่านได้
                                                        อย่างไม่มีแบ่งแยก ไม่เลือกปฎิบัติ ไม่สร้างความเครียด
                                                        เหมือนดั่งการทำเงิน ในรูปแบบอื่น
                                                        ๆ บนโลกของความเป็นจริง และถ้าหากคุณเป็นหนึ่งคน
                                                        ที่กำลังมองหาการสร้างรายได้ ในรูปแบบนี้ การเข้ามาที่
                                                        คาสิโนออนไลน์ <?= $webname ?> แห่งนี้ แปลว่าคุณมาถูกที่ ถูกทางแล้ว
                                                        เพราะในปี 2021 นี้ ไม่มีแหล่งรายได้ใด
                                                        ที่จะมอบประสบการณ์ทางเลือกใหม่ ได้เต็มรูปแบบ ครบวงจร
                                                        และสร้างความหลากหลาย ได้เงินจริง!! ได้เท่ากับ ที่ คาสิโนออนไลน์
                                                        <?= $webname ?> อีกแล้วอย่างแน่นอน</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-af49810"
                                        data-id="af49810" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-7baa090 elementor-widget elementor-widget-image"
                                                data-id="7baa090" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" loading="lazy" width="484" height="489"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/11/292-1.png"
                                                        class="attachment-large size-large" alt=""
                                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/11/292-1.png 484w, <?= $theme_asset ?>/assets/uploads/2022/11/292-1-297x300.png 297w, <?= $theme_asset ?>/assets/uploads/2022/11/292-1-50x50.png 50w"
                                                        sizes="(max-width: 484px) 100vw, 484px" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-d4ff137 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="d4ff137" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4a5fee0"
                        data-id="4a5fee0" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-38f1497 elementor-widget elementor-widget-image-carousel"
                                data-id="38f1497" data-element_type="widget"
                                data-settings="{&quot;slides_to_show&quot;:&quot;9&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:25,&quot;sizes&quot;:[]},&quot;autoplay_speed&quot;:1500,&quot;slides_to_show_tablet&quot;:&quot;7&quot;,&quot;slides_to_show_mobile&quot;:&quot;4&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}"
                                data-widget_type="image-carousel.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
                                        <div class="elementor-image-carousel swiper-wrapper swiper-image-stretch">
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/04/ameba.dea3fdf.png"
                                                        alt="ameba.dea3fdf" /></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/04/ag-gaming.2eb0369.png"
                                                        alt="ag-gaming.2eb0369" /></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/04/spade-gaming.d835b4d.png"
                                                        alt="spade-gaming.d835b4d" /></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/04/sexy-gaming.09728c1.png"
                                                        alt="sexy-gaming.09728c1" /></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/04/sa-gaming.52e386a.png"
                                                        alt="sa-gaming.52e386a" /></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/04/pretty-gaming.f27ce57.png"
                                                        alt="pretty-gaming.f27ce57" /></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/04/live-22.dfd4972.png"
                                                        alt="live-22.dfd4972" /></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/04/joker-gaming.417d073.png"
                                                        alt="joker-gaming.417d073" /></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/04/gamatron.96cdfab.png"
                                                        alt="gamatron.96cdfab" /></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/04/dream-gaming.d993e67.png"
                                                        alt="dream-gaming.d993e67" /></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/04/dragoonsoft.a39781a.png"
                                                        alt="dragoonsoft.a39781a" /></figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="swiper-slide-inner"><img decoding="async"
                                                        class="swiper-slide-image"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/04/ambbet.1d53780.png"
                                                        alt="ambbet.1d53780" /></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-623628b linecuttop01 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="623628b" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-10496a9"
                        data-id="10496a9" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-e70d634 elementor-widget elementor-widget-heading"
                                data-id="e70d634" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h4 class="elementor-heading-title elementor-size-default">สมัครสมาชิก <?= $webname ?>
                                        พร้อมรับโบนัสอีกมากมาย</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
    <div class="modal" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" style="padding-top: 3em;padding-bottom: 3em;">
                    <div class="contactmodal">
                        <div class="line-contact"><img class="image " src="<?= $theme_asset ?>/assets/uploads/2022/03/line2.png" alt=""
                                width="881" height="881" decoding="async" loading="lazy" /></div>
                        <div class="line-contact">
                            <div class="textwidget">Line: akthai01</div>
                        </div>
                    </div>
                    <div class="contact-close" data-dismiss="modal" style="cursor:pointer;">
                        X
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <footer class="mt-auto linecuttop01">
        <div class="-inner-wrapper">

            <div
                class="container -image-wrapper d-flex justify-content-center align-items-center px-3 px-lg-0 flex-wrap">
                <div class="fotterctn">
                    <div class="disfooterct">
                        <div class="infootergrid p-0 text-break">
                            <div class="text-center">
                            </div>
                            <div class="bankcontainer">
                                <div class="bank-footer">
                                    <h2 class="widgettitle">ช่องทางการฝากเงิน</h2>

                                    <style type="text/css">
                                        #gallery-1 {
                                            margin: auto;
                                        }

                                        #gallery-1 .gallery-item {
                                            float: left;
                                            margin-top: 10px;
                                            text-align: center;
                                            width: 11%;
                                        }

                                        #gallery-1 img {
                                            border: 2px solid #cfcfcf;
                                        }

                                        #gallery-1 .gallery-caption {
                                            margin-left: 0;
                                        }

                                        /* see gallery_shortcode() in wp-includes/media.php */
                                    </style>
                                    <div id='gallery-1'
                                        class='gallery galleryid-216 gallery-columns-9 gallery-size-thumbnail'>
                                        <dl class='gallery-item'>
                                            <dt class='gallery-icon portrait'>
                                                <a href='./5-2/'><img width="150" height="150"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/03/5-1-150x150.png"
                                                        class="attachment-thumbnail size-thumbnail" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/03/5-1-150x150.png 150w, <?= $theme_asset ?>/assets/uploads/2022/03/5-1-24x24.png 24w, <?= $theme_asset ?>/assets/uploads/2022/03/5-1-36x36.png 36w, <?= $theme_asset ?>/assets/uploads/2022/03/5-1-48x48.png 48w, <?= $theme_asset ?>/assets/uploads/2022/03/5-1.png 180w"
                                                        sizes="(max-width: 150px) 100vw, 150px" /></a>
                                            </dt>
                                        </dl>
                                        <dl class='gallery-item'>
                                            <dt class='gallery-icon landscape'>
                                                <a href='./4-2/'><img width="120" height="120"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/03/4-1.png"
                                                        class="attachment-thumbnail size-thumbnail" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/03/4-1.png 120w, <?= $theme_asset ?>/assets/uploads/2022/03/4-1-24x24.png 24w, <?= $theme_asset ?>/assets/uploads/2022/03/4-1-36x36.png 36w, <?= $theme_asset ?>/assets/uploads/2022/03/4-1-48x48.png 48w"
                                                        sizes="(max-width: 120px) 100vw, 120px" /></a>
                                            </dt>
                                        </dl>
                                        <dl class='gallery-item'>
                                            <dt class='gallery-icon landscape'>
                                                <a href='./3-2/'><img width="121" height="120"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/03/3-1.png"
                                                        class="attachment-thumbnail size-thumbnail" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/03/3-1.png 121w, <?= $theme_asset ?>/assets/uploads/2022/03/3-1-24x24.png 24w, <?= $theme_asset ?>/assets/uploads/2022/03/3-1-36x36.png 36w, <?= $theme_asset ?>/assets/uploads/2022/03/3-1-48x48.png 48w"
                                                        sizes="(max-width: 121px) 100vw, 121px" /></a>
                                            </dt>
                                        </dl>
                                        <dl class='gallery-item'>
                                            <dt class='gallery-icon landscape'>
                                                <a href='./2-2/'><img width="120" height="120"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/03/2-1.png"
                                                        class="attachment-thumbnail size-thumbnail" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/03/2-1.png 120w, <?= $theme_asset ?>/assets/uploads/2022/03/2-1-24x24.png 24w, <?= $theme_asset ?>/assets/uploads/2022/03/2-1-36x36.png 36w, <?= $theme_asset ?>/assets/uploads/2022/03/2-1-48x48.png 48w"
                                                        sizes="(max-width: 120px) 100vw, 120px" /></a>
                                            </dt>
                                        </dl>
                                        <dl class='gallery-item'>
                                            <dt class='gallery-icon landscape'>
                                                <a href='./1-2/'><img width="121" height="120"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/03/1-1.png"
                                                        class="attachment-thumbnail size-thumbnail" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/03/1-1.png 121w, <?= $theme_asset ?>/assets/uploads/2022/03/1-1-24x24.png 24w, <?= $theme_asset ?>/assets/uploads/2022/03/1-1-36x36.png 36w, <?= $theme_asset ?>/assets/uploads/2022/03/1-1-48x48.png 48w"
                                                        sizes="(max-width: 121px) 100vw, 121px" /></a>
                                            </dt>
                                        </dl>
                                        <dl class='gallery-item'>
                                            <dt class='gallery-icon portrait'>
                                                <a href='./7/'><img width="119" height="120"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/03/7.png"
                                                        class="attachment-thumbnail size-thumbnail" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/03/7.png 119w, <?= $theme_asset ?>/assets/uploads/2022/03/7-24x24.png 24w, <?= $theme_asset ?>/assets/uploads/2022/03/7-36x36.png 36w, <?= $theme_asset ?>/assets/uploads/2022/03/7-48x48.png 48w"
                                                        sizes="(max-width: 119px) 100vw, 119px" /></a>
                                            </dt>
                                        </dl>
                                        <dl class='gallery-item'>
                                            <dt class='gallery-icon landscape'>
                                                <a href='./6-2/'><img width="120" height="120"
                                                        src="<?= $theme_asset ?>/assets/uploads/2022/03/6-1.png"
                                                        class="attachment-thumbnail size-thumbnail" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="<?= $theme_asset ?>/assets/uploads/2022/03/6-1.png 120w, <?= $theme_asset ?>/assets/uploads/2022/03/6-1-24x24.png 24w, <?= $theme_asset ?>/assets/uploads/2022/03/6-1-36x36.png 36w, <?= $theme_asset ?>/assets/uploads/2022/03/6-1-48x48.png 48w"
                                                        sizes="(max-width: 120px) 100vw, 120px" /></a>
                                            </dt>
                                        </dl>
                                        <br style='clear: both' />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="footercontain">
                    <div class="disfooterct">
                        <div class="infootergrid pt-3">
                            <div class="-tags-wrapper">
                                <div class="container">
                                    <div class="row x-footer-seo">
                                        <div class="col-12 mb-3 d-block d-lg-none">
                                        </div>
                                        <div class="col-12 -tags">
                                            <div class="btn btn-sm">
                                                <div class="textwidget"><a href="/">ทดสอบ</a></div>
                                            </div>
                                            <div class="btn btn-sm">
                                                <div class="textwidget"><a href="/"> <?= $webname ?> </a></div>
                                            </div>
                                            <div class="btn btn-sm">
                                                <div class="textwidget"><a href="/">คาสิโนสด</a></div>
                                            </div>
                                            <div class="btn btn-sm">
                                                <div class="textwidget"><a href="/">เกมยิงปลา</a></div>
                                            </div>
                                            <div class="btn btn-sm">
                                                <div class="textwidget"><a href="/">สล็อต</a></div>
                                            </div>
                                            <div class="btn btn-sm">
                                                <div class="textwidget"><a href="/">เว็บพนัน</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="infootergrid pt-3">
                            <div class="mx-auto"><img width="1032" height="282"
                                    src="<?= $theme_asset ?>/assets/uploads/2022/11/cropped-logo1.png"
                                    class="image wp-image-1995  attachment-full size-full" alt="" decoding="async"
                                    style="max-width: 100%; height: auto;" loading="lazy"
                                    srcset="<?= $theme_asset ?>/assets/uploads/2022/11/cropped-logo1.png 1032w, <?= $theme_asset ?>/assets/uploads/2022/11/cropped-logo1-300x82.png 300w, <?= $theme_asset ?>/assets/uploads/2022/11/cropped-logo1-1024x280.png 1024w, <?= $theme_asset ?>/assets/uploads/2022/11/cropped-logo1-768x210.png 768w, <?= $theme_asset ?>/assets/uploads/2022/11/cropped-logo1-50x14.png 50w"
                                    sizes="(max-width: 1032px) 100vw, 1032px" /></div>
                            <div class="mx-auto">
                                <div class="textwidget">2022 ©
                                    <h3 class="elementor-heading-title elementor-size-default"><?= $webname ?></h3>
                                    . All Rights Reserved. | Version: (2.6.33)
                                </div>
                            </div>
                        </div>
                        <div class="infootergrid pt-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <div class="x-button-actions" id="account-actions-mobile">
        <div class="-outer-wrapper">
            <div class="-left-wrapper">

                <span class="-item-wrapper">
                    <span class="-ic-img"><span class="-textfooter d-block">เข้าสู่ระบบ</span>
                        <img width="150" height="150" src="<?= $theme_asset ?>/assets/uploads/2022/03/ic-menu-login-animate-1.png"
                            class="image wp-image-872  attachment-full size-full" alt="" decoding="async"
                            style="max-width: 100%; height: auto;" loading="lazy"
                            srcset="<?= $theme_asset ?>/assets/uploads/2022/03/ic-menu-login-animate-1.png 150w, <?= $theme_asset ?>/assets/uploads/2022/03/ic-menu-login-animate-1-24x24.png 24w, <?= $theme_asset ?>/assets/uploads/2022/03/ic-menu-login-animate-1-36x36.png 36w, <?= $theme_asset ?>/assets/uploads/2022/03/ic-menu-login-animate-1-48x48.png 48w"
                            sizes="(max-width: 150px) 100vw, 150px" /></span>
                </span>
                <span class="-item-wrapper">
                    <span class="-ic-img">
                        <span class="-textfooter d-block">สมัคร</span><img width="50" height="50"
                            src="<?= $theme_asset ?>/assets/uploads/2022/03/ic-menu-register.png"
                            class="image wp-image-873  attachment-full size-full" alt="" decoding="async"
                            style="max-width: 100%; height: auto;" loading="lazy"
                            srcset="<?= $theme_asset ?>/assets/uploads/2022/03/ic-menu-register.png 50w, <?= $theme_asset ?>/assets/uploads/2022/03/ic-menu-register-24x24.png 24w, <?= $theme_asset ?>/assets/uploads/2022/03/ic-menu-register-36x36.png 36w, <?= $theme_asset ?>/assets/uploads/2022/03/ic-menu-register-48x48.png 48w"
                            sizes="(max-width: 50px) 100vw, 50px" /></span>
                </span>
            </div>
            <span class="-center-wrapper js-footer-lobby-selector js-menu-mobile-container">

                <div class="-selected"><img width="208" height="210" src="<?= $theme_asset ?>/assets/uploads/2022/04/dice.png"
                        class="image wp-image-1339  attachment-full size-full" alt="" decoding="async"
                        style="max-width: 100%; height: auto;" loading="lazy"
                        srcset="<?= $theme_asset ?>/assets/uploads/2022/04/dice.png 208w, <?= $theme_asset ?>/assets/uploads/2022/04/dice-150x150.png 150w, <?= $theme_asset ?>/assets/uploads/2022/04/dice-50x50.png 50w"
                        sizes="(max-width: 208px) 100vw, 208px" /></div>
            </span>
            <div class="-fake-center-bg-wrapper">
                <svg viewBox="-10 -1 30 12">
                    <defs>
                        <linearGradient id="rectangleGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#932611"></stop>
                            <stop offset="100%" stop-color="#2c0005"></stop>
                        </linearGradient>
                    </defs>
                    <path d="M-10 -1 H30 V12 H-10z M 5 5 m -5, 0 a 5,5 0 1,0 10,0 a 5,5 0 1,0 -10,0z"></path>
                </svg>
            </div>
            <div class="-right-wrapper">


                <span class="-item-wrapper"><span class="-ic-img"><span class="-textfooter d-block"><a
                                href="/promotion">โปรโมชั่น</a></span><a href="/promotion"><img width="50" height="50"
                                src="<?= $theme_asset ?>/assets/uploads/2022/04/ezgif-4-03e60ee417.png"
                                class="image wp-image-1555  attachment-full size-full" alt="" decoding="async"
                                style="max-width: 100%; height: auto;" loading="lazy" /></a></span>
                </span><span class="-item-wrapper"><span class="-ic-img"><span class="-textfooter d-block"><a
                                href="/">ติดต่อเรา</a></span><a href="/"><img width="123" height="122"
                                src="<?= $theme_asset ?>/assets/uploads/2022/03/support-1.png"
                                class="image wp-image-874  attachment-full size-full" alt="" decoding="async"
                                style="max-width: 100%; height: auto;" loading="lazy"
                                srcset="<?= $theme_asset ?>/assets/uploads/2022/03/support-1.png 123w, <?= $theme_asset ?>/assets/uploads/2022/03/support-1-24x24.png 24w, <?= $theme_asset ?>/assets/uploads/2022/03/support-1-36x36.png 36w, <?= $theme_asset ?>/assets/uploads/2022/03/support-1-48x48.png 48w"
                                sizes="(max-width: 123px) 100vw, 123px" /></a></span>
                </span>


            </div>
            <div class="-fully-overlay js-footer-lobby-overlay"></div>
        </div>
    </div>




    <div class="linefixed"><img width="150" height="231" src="<?= $theme_asset ?>/assets/uploads/2022/06/contact-us-1.png"
            class="image wp-image-1941  attachment-full size-full" alt="" decoding="async"
            style="max-width: 100%; height: auto;" loading="lazy"
            srcset="<?= $theme_asset ?>/assets/uploads/2022/06/contact-us-1.png 150w, <?= $theme_asset ?>/assets/uploads/2022/06/contact-us-1-32x50.png 32w"
            sizes="(max-width: 150px) 100vw, 150px" /></div>

    <script src="<?= $theme_asset ?>/assets/themes/ak47/assets/plugins/numeral/min/numeral.min.js"></script>
    <script type="text/javascript" src="<?= $theme_asset ?>/assets/themes/ak47/assets/scripts/custom.js?2022-02-25"></script>
    <script src="<?= $theme_asset ?>/assets/themes/ak47/js/js.js?1694782663"></script>

    <link rel='stylesheet' id='elementor-gallery-css'
        href='<?= $theme_asset ?>/assets/plugins/elementor/assets/lib/e-gallery/css/e-gallery.min.css?ver=1.2.0' type='text/css'
        media='all' />
    <script type='text/javascript'
        src='<?= $theme_asset ?>/assets/plugins/ultimate-elementor/assets/lib/isotope/isotope.min.js?ver=1.36.4'
        id='uael-isotope-js'></script>
    <script type='text/javascript' src='<?= $theme_asset ?>/assets/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js'></script>
    <script type='text/javascript' src='<?= $theme_asset ?>/assets/plugins/ultimate-elementor/assets/lib/slick/slick.min.js?ver=1.36.4'
        id='uael-slick-js'></script>
    <script type='text/javascript'
        src='<?= $theme_asset ?>/assets/plugins/ultimate-elementor/assets/lib/jquery-element-resize/jquery_resize.min.js?ver=1.36.4'
        id='uael-element-resize-js'></script>
    <script type='text/javascript'
        src='<?= $theme_asset ?>/assets/plugins/ultimate-elementor/assets/min-js/uael-frontend.min.js?ver=1.36.4'
        id='uael-frontend-script-js'></script>
    <script type='text/javascript'
        src='<?= $theme_asset ?>/assets/plugins/ultimate-elementor/assets/lib/fancybox/jquery_fancybox.min.js?ver=1.36.4'
        id='uael-fancybox-js'></script>
    <script type='text/javascript'
        src='<?= $theme_asset ?>/assets/plugins/ultimate-elementor/assets/lib/justifiedgallery/justifiedgallery.min.js?ver=1.36.4'
        id='uael-justified-js'></script>
    <script type='text/javascript' src='<?= $theme_asset ?>/assets/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min.js?ver=1.2.0'
        id='elementor-gallery-js'></script>
    <script type='text/javascript' src='<?= $theme_asset ?>/assets/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.7.1'
        id='elementor-pro-webpack-runtime-js'></script>
    <script type='text/javascript' src='<?= $theme_asset ?>/assets/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.6.5'
        id='elementor-webpack-runtime-js'></script>
    <script type='text/javascript' src='<?= $theme_asset ?>/assets/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.6.5'
        id='elementor-frontend-modules-js'></script>
    <script type='text/javascript' src='<?= $theme_asset ?>/assets/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2'
        id='wp-polyfill-inert-js'></script>
    <script type='text/javascript' src='<?= $theme_asset ?>/assets/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11'
        id='regenerator-runtime-js'></script>
    <script type='text/javascript' src='<?= $theme_asset ?>/assets/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0'
        id='wp-polyfill-js'></script>

    <script type='text/javascript' src='<?= $theme_asset ?>/assets/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2'
        id='elementor-waypoints-js'></script>
    <script type='text/javascript' src='<?= $theme_asset ?>/assets/js/jquery/ui/core.min.js?ver=1.13.2'
        id='jquery-ui-core-js'></script>
    <!-- <script type='text/javascript' src='<?= $theme_asset ?>/assets/plugins/elementor/assets/js/frontend.min.js?ver=3.6.5' id='elementor-frontend-js'></script> -->
    <script type='text/javascript' src='<?= $theme_asset ?>/assets/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.7.1'
        id='pro-elements-handlers-js'></script>

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