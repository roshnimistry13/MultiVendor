<div id="nt_wrapper">
    <div id="nt_content">

        <div class="kalles-section page_section_heading">
            <div class="page-head tc pr oh page_head_wis_heading">
                <div class="parallax-inner nt_parallax_false lazyload nt_bg_lz pa t__0 l__0 r__0 b__0"
                    data-bgset="assets/images/shop/shop-banner.jpg"></div>
                <div class="container pr z_100">
                    <h1 class="tu mb__10 cw">Wishlist Items</h1>
                </div>
            </div>
        </div>

        <div id="kalles-section-wishlist_page" class="container container_cat pop_default cat_default mb__20">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="kalles-section tp_se_cdt">
                        <div
                            class="on_list_view_false prs_wis products nt_products_holder row  row_pr_1 cdt_des_1 round_cd_false nt_cover ratio_nt position_8 space_30 nt_default">
                            <?php if(!empty($whishlist)){
                                foreach($whishlist as $row){?>
                            <div
                                class="col-lg-2 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1">
                                <div class="product-inner pr">
                                    <div class="product-image pr oh lazyload">
                                        <a class="d-block"
                                            href="<?php echo base_url('product-detail/').$row['short_code']; ?>">
                                            <div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571"
                                                data-bgset="<?php echo base_url().PRODUCT_IMAGE_PATH.$row['product_id'].'/'.$row['cover_img']?>">
                                            </div>
                                        </a>
                                        <div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0">
                                            <div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571"
                                                data-bgset="<?php echo base_url().PRODUCT_IMAGE_PATH.$row['product_id'].'/'.$row['cover_img']?>">
                                            </div>
                                        </div>
                                        <div class="nt_add_w ts__03 pa ">
                                            <a href="#" class="cb chp ttip_nt tooltip_right wis_remove"
                                                data-pid="<?php echo $row['product_id']; ?>"><span class="tt_txt">Remove
                                                    Wishlist</span><i class="facl facl-heart-o"></i></a>
                                        </div>
                                        <div class="hover_button op__0 tc pa flex column ts__03">
                                            <a href="#"
                                                class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span
                                                    class="tt_txt">Quick Shop</span><i
                                                    class="iccl iccl-cart"></i><span>Quick Shop</span></a>
                                        </div>

                                    </div>
                                    <div class="product-info mt__15">
                                        <h3 class="product-title pr fs__14 mg__0 fwm">
                                            <a class="cd chp"
                                                href="<?php echo base_url('product-detail/').$row['short_code']; ?>"><?php echo $row['product_name'];?></a>
                                        </h3>
                                        <span class="price dib mb__5">
                                            <i
                                                class="fa fa-inr cr fs__14"></i><ins><?php echo moneyFormatIndia_ui($row['net_price']);?></ins>
                                            &nbsp;
                                            <i class="fa fa-inr fs__14"></i>
                                            <del><?php echo moneyFormatIndia_ui($row['mrp_price']);?></del>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <?php } }?>
                        </div>
                        <!-- <div class="products-footer tc mt__40">
                            <nav class="nt-pagination w__100 tc paginate_ajax">
                                <ul class="pagination-page page-numbers">
                                    <li><a class="prev page-numbers" href="#">Prev</a></li>
                                    <li><span class="page-numbers">1</span></li>
                                    <li><a class="page-numbers current" href="#">2</a></li>
                                    <li><a class="page-numbers" href="#">3</a></li>
                                    <li><a class="page-numbers" href="#">4</a></li>
                                    <li><a class="next page-numbers" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>