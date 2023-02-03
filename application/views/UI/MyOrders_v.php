<?php 
    $id= "406-8552175-7565926";
    $years = range(date('Y'),'2020');
?>

<div id="nt_content" class="myorder-page">

    <div class="kalles-section page_section_heading">
        <div class="page-head tc pr oh cat_bg_img page_head_">
            <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0"
                data-bgset="<?php echo UI_ASSETS ?>/images/shop/collection-list/bg-heading.jpg"></div>
            <div class="container pr z_100">
                <h1 class="mb__5 cw">My Orders</h1>
            </div>
        </div>
    </div>

    <div class="container cb py-5">
        <div class="row">
            <div class="col-12">
                <div class="cat_sortby cat_sortby_js col tr kalles_dropdown kalles_dropdown_container">
                    <a class="in_flex fl_between al_center sortby_pick kalles_dropDown_label" href="#">
                        <span class="lbl-title sr_txt dn">Filter By Year</span>
                        <i class="ml__5 mr__5 facl facl-angle-down"></i>
                    </a>
                    <div class="nt_sortby dn">
                        <svg class="ic_triangle_svg" viewBox="0 0 20 9" role="presentation">
                            <path
                                d="M.47108938 9c.2694725-.26871321.57077721-.56867841.90388257-.89986354C3.12384116 6.36134886 5.74788116 3.76338565 9.2467995.30653888c.4145057-.4095171 1.0844277-.40860098 1.4977971.00205122L19.4935156 9H.47108938z"
                                fill="#ffffff"></path>
                        </svg>
                        <div class="nt_ajaxsortby wrap_sortby kalles_dropdown_options">
                            <?php foreach($years as $row){?>
                            <a data-label="<?php echo $row;?>" class="kalles_dropdown_option truncate btnfilteryear"
                                href="javascript:void(0)">
                                <?php echo $row;?>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div id="kalles-section-faqs" class="kalles-section nt_section type_faq js_faq_ad mt__50">
                    <div class="kalles-tabs sp-tabs">
                        <div class="panel entry-content sp-tab des_mb_2 des_style_2 dn clicked_accordion border-0"
                            id="tab_faqs-0">
                            <div class="js_ck_view"></div>
                            <div class="heading bgbl dn">
                                <a class="tab-heading flex al_center fl_between pr cd chp fwm" href="#tab_faqs-0"><span
                                        class="txt_h_tab">Track Your Order</span><span
                                        class="nav_link_icon ml__5"></span></a>
                            </div>
                            <div class="sp-tab-content dn text-center">
                                <div class="row">
                                <div class="col-md-6 offset-md-3 ">
                                    <p class="mb-2">To track your order please enter your OrderID in the box below and
                                        press
                                        "Track" button.
                                    </p>
                                    <p>
                                        <label for="ct_name">Order ID</label>
                                        <input required="required" type="text" id="ct_name" name="ct_name" value="">
                                    </p>
                                    <input type="submit" class="button w__100" value="Track">
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 login-form mt__30 mb-0 mb-md-5 order-list">
                <?php if(!empty($orderHtml)){
                    echo $orderHtml;
                } ?>
            </div>
        </div>
    </div>
</div>