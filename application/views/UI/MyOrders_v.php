<?php 
    $id= "406-8552175-7565926";
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

    <div class="container cb">
        <div class="row">
            <div class="col-12 col-md-12 login-form mt__60 mb-0 mb-md-5">
                <?php if(!empty($orderHtml)){
                    echo $orderHtml;
                } ?>
            </div>
        </div>
    </div>
</div>