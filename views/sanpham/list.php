<main class="main">
            <div class="category-banner-container bg-gray">
                <div class="container">
                    <div class="category-banner banner p-0">
                        <div class="row align-items-center no-gutters m-0 text-center text-lg-left">
                            <div
                                class="col-md-4 col-xl-2 offset-xl-2 d-flex justify-content-center justify-content-lg-start my-5 my-lg-0">
                                <div class="d-flex flex-column justify-content-center">
                                    <h3 class="text-left text-light text-uppercase m-0">Giảm </h3>
                                    <h2 class="text-uppercase m-b-1">20% off</h2>
                                    <h3 class="font-weight-bold text-uppercase heading-border ml-0 m-b-3">điện thoại </h3>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-4 text-md-center my-5 my-lg-0"
                                style="background-image: url(views/assets/images/demoes/demo27/banners/shop-banner-bg.png);">
                                <img class="d-inline-block" src="views/admin/view/upload/b17.jpg"
                                    alt="banner" width="400" height="242">
                            </div>
                            <div class="col-md-3 my-5 my-lg-0">
                                <h4 class="font5 line-height-1 m-b-4">winter Sale</h4>
                                <a href="#" class="btn btn-teritary btn-lg ml-0">Xem thêm </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ </a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sản phẩm </li>
                    </ol>
                </div>
            </nav>

            <div class="container">
                <div class="row main-content">
                    <div class="col-lg-9">
                        <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                            <div class="toolbox-left">
                                <a href="#" class="sidebar-toggle"><svg data-name="Layer 3" id="Layer_3"
                                        viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
                                        <line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
                                        <line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
                                        <line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
                                        <line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
                                        <line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
                                        <path
                                            d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
                                            class="cls-2"></path>
                                        <path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2">
                                        </path>
                                        <path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
                                        <path
                                            d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
                                            class="cls-2"></path>
                                    </svg>
                                    <span>Filter</span>
                                </a>

                                <!-- <div class="toolbox-item toolbox-sort">
                                    <label>Danh mục </label>

                                    <div class="select-custom">
                                        <select name="orderby" class="form-control">
                                            <option value="menu_order" selected="selected">Chọn tất cả</option>
                                            <?php foreach($list_dm as $key=>$value){?>

                                                    <option value="<?=$value['id_dm'];?>"><?=$value['ten_dm']?></option>

                                                <?php };?>
                                        </select>
                                    </div>


                                </div> -->
                            </div>

                         
                        </nav>

                        <div class="row">
                    <?php foreach ($dssp as $key => $value) {
                        $link = "index.php?act=chitietsanpham&id_sp=" . $value['id_sp'];
                        ?>
                        <div class="col-6 col-sm-4 col-xl-3">
                            <div class="product-default">
                                <figure>
                                    <a href="demo27-product.html">
                                        <img src="views/admin/view/upload/<?= $value['anh_sp'] ?>" width="280" height="280"
                                            alt="product">
                                    </a>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                        <div class="product-label label-sale">-13%</div>
                                    </div>
                                </figure>
                                <div class="product-details">

                                    <h3 class="product-title">
                                        <a href="<?= $link ?>">
                                            <?= $value['ten_sp'] ?>
                                        </a>
                                    </h3>
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <div class="price-box">
                                        <span class="old-price">
                                            <?= $value['gia_goc'] ?>
                                        </span>
                                        <span class="product-price">$259.0</span>
                                    </div><!-- End .price-box -->
                                    <div class="product-action">
                                        <a href="#" class="btn-icon-wish" title="wishlist"><i
                                                class="icon-heart"></i></a>
                                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                                class="icon-shopping-cart"></i><span>Thêm giỏ hàng </span></a>
                                        <a href="#" class="btn-quickview" title="Quick View"><i
                                                class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div><!-- End .product-details -->
                            </div>
                        </div><!-- End .col-xl-3 -->
                    <?php } ?>
                </div>
                        <nav class="toolbox toolbox-pagination mb-0">
                            <div class="toolbox-item toolbox-show">
                                <label class="mt-0">Show:</label>

                                <div class="select-custom">
                                    <select name="count" class="form-control">
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                    </select>
                                </div><!-- End .select-custom -->
                            </div><!-- End .toolbox-item -->

                            <ul class="pagination toolbox-item">
                                <li class="page-item disabled">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><span class="page-link">...</span></li>
                                <li class="page-item">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- End .col-lg-9 -->

                    <div class="sidebar-overlay"></div>
                            <?php include "asside.php";?>
                </div><!-- End .row -->
            </div><!-- End .container -->
        </main><!-- End .main -->
