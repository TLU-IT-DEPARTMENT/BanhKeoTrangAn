<?php include VIEWS_PATH . '/_layout/link.php'; ?>

<body>
    <?php include VIEWS_PATH . '/_layout/header.php'; ?>
    <div class="container">
        <div class="row">
            <?php include VIEWS_PATH . '/_layout/leftbar.php'; ?>

            <?php
            $item = $this->data['item'];
            ?>
            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img class="photoView" src="<?= WEBROOT_PATH?>/img/upload/<?= $this->data['item'][0]['Image'] ?>" alt="" />
                            <h3>ZOOM</h3>
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href=""><img class="icon-slider" src="<?= WEBROOT_PATH?>/img/upload/<?= $this->data['item'][0]['Image'] ?>" alt=""></a>
                                    <a href=""><img class="icon-slider" src="<?= WEBROOT_PATH?>/img/upload/<?= $this->data['item'][0]['Image'] ?>" alt=""></a>
                                    <a href=""><img class="icon-slider" src="<?= WEBROOT_PATH?>/img/upload/<?= $this->data['item'][0]['Image'] ?>" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href=""><img class="icon-slider" src="<?= WEBROOT_PATH?>/img/upload/<?= $this->data['item'][0]['Image'] ?>" alt=""></a>
                                    <a href=""><img class="icon-slider" src="<?= WEBROOT_PATH?>/img/upload/<?= $this->data['item'][0]['Image'] ?>" alt=""></a>
                                    <a href=""><img class="icon-slider" src="<?= WEBROOT_PATH?>/img/upload/<?= $this->data['item'][0]['Image'] ?>" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href=""><img class="icon-slider" src="<?= WEBROOT_PATH?>/img/upload/<?= $this->data['item'][0]['Image'] ?>" alt=""></a>
                                    <a href=""><img class="icon-slider" src="<?= WEBROOT_PATH?>/img/upload/<?= $this->data['item'][0]['Image'] ?>" alt=""></a>
                                    <a href=""><img class="icon-slider" src="<?= WEBROOT_PATH?>/img/upload/<?= $this->data['item'][0]['Image'] ?>" alt=""></a>
                                </div>

                            </div>

                            <!-- Controls -->
                            <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="<?= WEBROOT_PATH . DS ?>images/product-details/new.jpg" class="newarrival" alt="" />
                            <h2><?= $this->data['product'][0]['Name'] ?></h2>
                            <p>Web ID: <?= $this->data['product'][0]['IDProduct'] ?></p>
                            <img src="<?= WEBROOT_PATH . DS ?>images/product-details/rating.png" alt="" />
                            <span>
                                <span>US $<?= $this->data['product'][0]['UnitPrice'] ?></span>
                                <label>Quantity:</label>
                                <input type="text" value="1" />
                                <button type="button" class="btn btn-fefault cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    Add to cart
                                </button>
                            </span>
                            <p><b>Availability:</b> In Stock</p>
                            <p><b>Condition:</b> New</p>
                            <p><b>Brand:</b> Bánh Kẹo Tràng An</p>
                            <a href=""><img src="<?= WEBROOT_PATH . DS ?>images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->

                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li><a href="#details" data-toggle="tab">Details</a></li>
                            <li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
                            <li><a href="#tag" data-toggle="tab">Tag</a></li>
                            <li class="active"><a href="#reviews" data-toggle="tab">Reviews</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="details" >
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?= WEBROOT_PATH . DS ?>images/home/gallery1.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?= WEBROOT_PATH . DS ?>images/home/gallery2.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?= WEBROOT_PATH . DS ?>images/home/gallery3.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?= WEBROOT_PATH . DS ?>images/home/gallery4.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="companyprofile" >
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?= WEBROOT_PATH . DS ?>images/home/gallery1.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?= WEBROOT_PATH . DS ?>images/home/gallery3.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?= WEBROOT_PATH . DS ?>images/home/gallery2.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?= WEBROOT_PATH . DS ?>images/home/gallery4.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tag" >
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?= WEBROOT_PATH . DS ?>images/home/gallery1.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?= WEBROOT_PATH . DS ?>images/home/gallery2.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?= WEBROOT_PATH . DS ?>images/home/gallery3.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?= WEBROOT_PATH . DS ?>images/home/gallery4.jpg" alt="" />
                                            <h2>$56</h2>
                                            <p>Easy Polo Black Edition</p>
                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade active in" id="reviews" >
                            <div class="col-sm-12">
                                <ul>
                                    <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                    <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                    <li><a href=""><i class="fa fa-calendar-o"></i>12 Fer 2016</a></li>
                                </ul>
                                <p><?= $this->data['product'][0]['Description'] ?></p> <br/>
                                <p><b>Write Your Review</b></p> <br/>

                                <form action="#">
                                    <span>
                                        <input style="background-color: white;" type="text" placeholder="Your Name"/>
                                        <input style="background-color: white;" type="email" placeholder="Email Address"/>
                                    </span>
                                    <textarea name="text-comment" style="background-color: white;"></textarea>
                                    <b>Rating: </b> <img src="<?= WEBROOT_PATH . DS ?>images/product-details/rating.png" alt="" />
                                    <button type="button" class="btn btn-default pull-right">
                                        Submit
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div><!--/category-tab-->

                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">recommended items</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">	
                                <?php foreach ($this->data['recommend'] as $key => $item) {
                                    ?>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img class="recommend-img" src="<?= WEBROOT_PATH?>/img/upload/<?= $item['Image'] ?>" alt="" />
                                                    <h2>$<?= $item['UnitPrice'] ?></h2>
                                                    <p><?= $item['Name'] ?></p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                <?php } ?>
                            </div>
                            <div class="item">	
                                <?php foreach ($this->data['recommend'] as $key => $item) { ?>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img class="recommend-img" src="<?= WEBROOT_PATH?>/img/upload/<?= $item['Image'] ?>" alt="" />
                                                    <h2>$<?= $item['UnitPrice'] ?></h2>
                                                    <p><?= $item['Name'] ?></p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
                            </div>
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>			
                    </div>
                </div><!--/recommended_items-->
            </div>
        </div>
    </div>



    <?php include VIEWS_PATH . '/_layout/footer.php'; ?> 

    <script src="<?= WEBROOT_PATH ?>/js/jquery.js"></script>
    <script src="<?= WEBROOT_PATH ?>/js/bootstrap.min.js"></script>
    <script src="<?= WEBROOT_PATH ?>/js/jquery.scrollUp.min.js"></script>
    <script src="<?= WEBROOT_PATH ?>/js/price-range.js"></script>
    <script src="<?= WEBROOT_PATH ?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?= WEBROOT_PATH ?>/js/main.js"></script>
    <script src="<?= WEBROOT_PATH ?>/js/main1.js"></script> <!-- Gem jQuery -->
</body>
</html>


<style>
    .imgProduct{
        width: 180px !important;
        height: 180px !important;
    }
    .center{
        text-align: center;
    }
    .icon-slider {
        width: 89px !important;
        height: 89px !important;
    }
    .recommend-img{
        width: 209px !important;
        height: 185px !important;
    }
    .photoView{
        width: 400px !important;
        height: 320px !important;
    }
    .left-sidebar h2, .brands_products h2{
        margin-top: 20px !important;
    }
</style>