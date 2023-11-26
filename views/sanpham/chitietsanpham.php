<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';


extract($sanphamchitiet);



if (isset($_POST['themgiohang'])) {

    if(isset($_SESSION['user']) && ($_SESSION['user'])){
    $ten_sp = $_POST['ten_sp'];
    $gia_goc = $_POST['gia_goc'];
    $anh_sp = $_POST['anh_sp'];
    $gia_khuyen_mai = $_POST['gia_khuyen_mai'];
    $id_sp = $_POST['id_sp'];
    $quantity = $_POST['quantity'];
    $productIndex = -1;
    $productExists = false;

    // kiểm tra sản phẩm có trong giỏ hàng không
    // 
    $fl=0;
    for( $i = 0; $i < sizeof($_SESSION['cart']); $i++ ){
        if($_SESSION['cart'][$i]['ten_sp'] == $ten_sp){
            $fl=1;
            $newQuantity= $quantity  + $_SESSION['cart'][$i]['quantity'];
            $_SESSION['cart'][$i]['quantity']= $newQuantity;
        }
    }

    // không trùng sản phẩm thì thêm mới 
 if($fl == 0){
    $_SESSION['cart'][] = array(
        'ten_sp' => $ten_sp,
        'gia_goc' => $gia_goc,
        'anh_sp' => $anh_sp,
        'gia_khuyen_mai' => $gia_khuyen_mai,
        'id_sp' => $id_sp,
        'quantity' => $quantity
    );

}
    }
}

?>


<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ </a></li>
                        <li class="breadcrumb-item"><a href="index.php?act=sanpham">Sản phẩm </a></li>
                    </ol>
                </div>
            </nav>

            <div class="container">
                <div class="product-single-container product-single-default">
                    <div class="cart-message d-none">
                        <strong class="single-cart-notice"><?=$ten_sp?></strong>
                        <span> Sản phẩm đã thêm vào giỏ hàng .</span>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-6 product-single-gallery">
                            <div class="product-slider-container">
                                <div class="label-group">
                                    <div class="product-label label-sale">
                                        SALE
                                    </div>
                                </div>

                                <div class="product-single-carousel owl-carousel owl-theme show-nav-hover">
                                    <div class="product-item">
                                        <img class="product-single-image"
                                            src="views/admin/view/upload/<?=$anh_sp?>"
                                            data-zoom-image="assets/images/demoes/demo27/products/zoom/product-1-big.jpg"
                                            width="468" height="468" alt="product" />
                                    </div>
                                </div>
                                <!-- End .product-single-carousel -->
                                <span class="prod-full-screen">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>

                            <div class="prod-thumbnail owl-dots">
                                <div class="owl-dot">
                                    <img src="views/admin/view/upload/<?=$anh?>" width="110"
                                        height="110" alt="product-thumbnail" />
                                </div>
                            </div>
                        </div><!-- End .product-single-gallery -->

                        <div class="col-lg-7 col-md-6 product-single-details">
                            <h1 class="product-title"><?=$ten_sp?></h1>

                            <div class="product-nav">
                                <div class="product-prev">
                                    <a href="#">
                                        <span class="product-link"></span>

                                        <span class="product-popup">
                                            <span class="box-content">
                                                <img alt="product" width="150" height="150"
                                                    src="views/assets/images/demoes/demo27/products/product-3.jpg"
                                                    style="padding-top: 0px;">

                                                <span><?=$ten_sp?></span>
                                            </span>
                                        </span>
                                    </a>
                                </div>

                                <div class="product-next">
                                    <a href="#">
                                        <span class="product-link"></span>

                                        <span class="product-popup">
                                            <span class="box-content">
                                                <img alt="product" width="150" height="150"
                                                    src="views/assets/images/demoes/demo27/products/product-4.jpg"
                                                    style="padding-top: 0px;">

                                                <span>White Bike</span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->

                                <a href="#" class="rating-link">( 6 Reviews )</a>
                            </div><!-- End .ratings-container -->

                            <hr class="short-divider">

                            <div class="price-box">
                                <?php if($gia_khuyen_mai==""){?>
                                <div class="product-price"><?=$gia_goc?>  VND </div>
                                <?php }else{?>
                                    <div class="product-price"><s> <?=$gia_goc?> VND</s> &ndash; <?=$gia_khuyen_mai?> VND</div>
                                <?php }?>
                            </div><!-- End .price-box -->

                            <div class="product-desc">
                                <p>
                                  <?=$mota_sp?>
                                </p>
                            </div><!-- End .product-desc -->

                            <ul class="single-info-list">
                                <li>
                                    Thương hiệu :   <strong> <?=$thuong_hieu?></strong>
                                </li>
                            </ul>

                            <div class="product-filters-container">
                                <div class="product-single-filter"><label >Màu sắc: <?=$mau_sac?></label>
                                    <!-- <ul class="config-size-list config-color-list config-filter-list">
                                        <li class=""><a href="javascript:;" class="filter-color border-0"
                                                style="background-color: #6085a5;"></a></li>
                                        <li class=""><a href="javascript:;"
                                                class="filter-color border-0 initial disabled"
                                                style="background-color: #81d742"></a></li>
                                    </ul> -->
                                </div>

                                <div class="product-single-filter">
                                    <label>Bộ nhớ <?=$bo_nho?></label>
                                    <!-- <ul class="config-size-list">
                                        <li><a href="javascript:;"
                                                class="d-flex align-items-center justify-content-center"
                                                style="background-image: url(assets/images/demoes/demo27/products/zoom/product-1-thumb.jpg)"><span
                                                    class="sr-only">Extra
                                                    Large</span></a>
                                        </li>
                                        <li class=""><a href="javascript:;"
                                                class="d-flex align-items-center justify-content-center"
                                                style="background-image: url(assets/images/demoes/demo27/products/zoom/product-2-thumb.jpg)"><span
                                                    class="sr-only">Large</span></a>
                                        </li>
                                        <li class=""><a href="javascript:;"
                                                class="d-flex align-items-center justify-content-center"
                                                style="background-image: url(assets/images/demoes/demo27/products/zoom/product-3-thumb.jpg)"><span
                                                    class="sr-only">Medium</span></a></li>
                                    </ul> -->
                                </div>

                                <div class="product-single-filter">
                                    <label></label>
                                    <a class="font1 text-uppercase clear-btn" href="#">Clear</a>
                                </div>
                                <!---->
                            </div>

                            <div class="product-action">
                               
                 <form action="" method="post" id="add-to-cart-form">

                    <input type="hidden" name="ten_sp" value="<?=$ten_sp?>">
                    <input type="hidden" name="gia_goc" value="<?=$gia_goc?>">
                    <input type="hidden" name="anh_sp" value="<?=$anh_sp?>">
                    <input type="hidden" name="gia_khuyen_mai" value="<?=$gia_khuyen_mai?>">
                    <input type="hidden" name="id_sp" value="<?=$id_sp?>">
                                <div class="product-single-qty">
                                    <input class="horizontal-quantity form-control" type="text" name="quantity">
                                </div><!-- End .product-single-qty -->

                                <button name="themgiohang" type="submit" class="btn btn-dark mr-2" onclick="addToCart()">Thêm giỏ hàng</button>

                                <a href="index.php?act=giohang" class="btn btn-gray">Xem giỏ hàng</a>
                 </form>
                            </div><!-- End .product-action -->

                            <hr class="divider mb-0 mt-0">

                            <div class="product-single-share mb-3">
                                <label class="sr-only">Share:</label>

                                <div class="social-icons mr-2">
                                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"
                                        title="Facebook"></a>
                                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"
                                        title="Twitter"></a>
                                    <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank"
                                        title="Linkedin"></a>
                                    <a href="#" class="social-icon social-gplus fab fa-google-plus-g" target="_blank"
                                        title="Google +"></a>
                                    <a href="#" class="social-icon social-mail icon-mail-alt" target="_blank"
                                        title="Mail"></a>
                                </div><!-- End .social-icons -->

                                <a href="#" class="btn-icon-wish add-wishlist" title="Add to Wishlist"><i
                                        class="icon-wishlist-2"></i><span>Yêu thích</span></a>
                            </div><!-- End .product single-share -->
                        </div><!-- End .product-single-details -->
                    </div><!-- End .row -->
                </div><!-- End .product-single-container -->

                <div class="product-single-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab-desc" data-toggle="tab"
                                href="#product-desc-content" role="tab" aria-controls="product-desc-content"
                                aria-selected="true">Mô tả </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-size" data-toggle="tab" href="#product-size-content"
                                role="tab" aria-controls="product-size-content" aria-selected="true">Thông tin khuyến mãi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content"
                                role="tab" aria-controls="product-tags-content" aria-selected="false">Thông tin ký thuật </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="product-tab-reviews" data-toggle="tab"
                                href="#product-reviews-content" role="tab" aria-controls="product-reviews-content"
                                aria-selected="false">Bình luận (1)</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel"
                            aria-labelledby="product-tab-desc">
                            <div class="product-desc-content font2">
                                <p><?=$mota_sp?></p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-size-content" role="tabpanel"
                            aria-labelledby="product-tab-size">
                            <div class="product-size-content">
                                <div class="row">

                                </div><!-- End .row -->
                            </div><!-- End .product-size-content -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-tags-content" role="tabpanel"
                            aria-labelledby="product-tab-tags">
                            <?=$tinh_nang_ky_thuat?>
                            <!-- <table class="table table-striped mt-2">
                                <tbody>
                                    <tr>
                                        <th>Weight</th>
                                        <td>23 kg</td>
                                    </tr>

                                    <tr>
                                        <th>Dimensions</th>
                                        <td>12 × 24 × 35 cm</td>
                                    </tr>

                                    <tr>
                                        <th>Color</th>
                                        <td>Black, Green, Indigo</td>
                                    </tr>

                                    <tr>
                                        <th>Size</th>
                                        <td>Large, Medium, Small</td>
                                    </tr>
                                </tbody>
                            </table> -->
                        </div><!-- End .tab-pane -->

                        <div class="tab-pane fade" id="product-reviews-content" role="tabpanel"
                            aria-labelledby="product-tab-reviews">
                            <div class="product-reviews-content">
                                <h3 class="reviews-title"> Có 1 bình luận liên quan đến sản phẩm </h3>

                                <div class="comment-list">
                                    <div class="comments">
                                        <figure class="img-thumbnail">
                                            <img src="views/assets/images/blog/author.jpg" alt="author" width="80"
                                                height="80">
                                        </figure>

                                        <div class="comment-block">
                                            <div class="comment-header">
                                                <div class="comment-arrow"></div>

                                                <div class="ratings-container float-sm-right">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div><!-- End .product-ratings -->
                                                </div>

                                                <span class="comment-by">
                                                    <strong>Le Minh </strong> – April 12, 2018
                                                </span>
                                            </div>

                                            <div class="comment-content">
                                                <p>San pham rat tot </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="divider"></div>

                                <!-- <div class="add-product-review">
                                    <h3 class="review-title">Add a review</h3>

                                    <form action="#" class="comment-form m-0">
                                        <div class="rating-form">
                                            <label for="rating">Your rating <span class="required">*</span></label>
                                            <span class="rating-stars">
                                                <a class="star-1" href="#">1</a>
                                                <a class="star-2" href="#">2</a>
                                                <a class="star-3" href="#">3</a>
                                                <a class="star-4" href="#">4</a>
                                                <a class="star-5" href="#">5</a>
                                            </span>

                                            <select name="rating" id="rating" required="" style="display: none;">
                                                <option value="">Rate…</option>
                                                <option value="5">Perfect</option>
                                                <option value="4">Good</option>
                                                <option value="3">Average</option>
                                                <option value="2">Not that bad</option>
                                                <option value="1">Very poor</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Your review <span class="required">*</span></label>
                                            <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                        </div>


                            

                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </form>
                                </div> -->
                            </div><!-- End .product-reviews-content -->
                        </div><!-- End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-single-tabs -->

                <div class="products-section pt-0">
                    <h2 class="section-title m-b-4 border-0">Sản phẩm mới nhất</h2>
                  <div class="row">
                                
                        <div class="products-slider 5col owl-carousel owl-theme appear-animate" data-owl-options="{
                            'margin': 0
                        }" data-animation-name="fadeInUpShorter" data-animation-delay="200">

                            <?php foreach($list_sp_home as $key => $value){ ?>
                            <div class="product-default">
                                <figure>
                                    <a href="demo27-product.html">
                                        <img src="views/admin/view/upload/<?=$value['anh_sp']?>" width="280"
                                            height="280" alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <!-- <div class="category-list">
                                        <a href="category.html" class="product-category">Categor</a>
                                    </div> -->
                                    <h3 class="product-title">
                                        <a href="index.php?act=chitietsanpham&id_sp=<?=$value['id_sp']?>"><?=$value['ten_sp']?></a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="product-price"><?=$value['gia_goc']?></span>
                                    </div><!-- End .price-box -->
                                    <div class="product-action">
                                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="index.php?act=themgiohang&id_sp=<?=$value['id_sp']?>"
                                            class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i><span>Thêm vào giỏ hàng</span></a>
                                        <a href="#" class="btn-quickview"
                                            title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div><!-- End .product-details -->
                            </div>
                            <?php }?>

                   
                        </div>
                    </div>
                </div>
              
            </div><!-- End .container -->
        </main><!-- End .main -->
