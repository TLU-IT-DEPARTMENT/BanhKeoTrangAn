<style>
    .imgProduct{
        width: 180px !important;
        height: 180px !important;
    }
</style>
<section>
    <div class="container">
        <div class="row">
            <?php include VIEWS_PATH . '/_layout/leftbar.php'; ?>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    <?php foreach ($this->data['product'] as $key => $item) {
                        ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img class="imgProduct" src="<?= WEBROOT_PATH ?>/img/upload/<?= $item['Image'] ?>" alt="" />
                                        <h2><?= $item['UnitPrice'] ?></h2>
                                        <p><?= $item['Name'] ?></p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2><?= $item['UnitPrice'] ?></h2>
                                            <p><?= $item['Name'] ?></p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="<?= ROOT_PATH ?>en/product/detail/<?= $item['IDProduct'] ?>"><i class="fa fa-info-circle"></i>View Detail</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div><!--features_items-->
                <?php $kindofproduct = $this->data['kindofproduct']; ?>
                <form method="get">
                    <div class="category-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <?php
                                ?>
                                <li class="active"><a href="#<?= isset($kindofproduct[0]['Name']) ? $kindofproduct[0]['Name'] : "" ?>" data-toggle="tab"><?= isset($kindofproduct[0]['Name']) ? $kindofproduct[0]['Name'] : ""; ?></a></li>
                                <li><a href="#<?= isset($kindofproduct[1]['Name']) ? $kindofproduct[1]['Name'] : "" ?>" data-toggle="tab"><?= isset($kindofproduct[1]['Name']) ? $kindofproduct[1]['Name'] : ""; ?></a></li>
                                <li><a href="#<?= isset($kindofproduct[2]['Name']) ? $kindofproduct[2]['Name'] : "" ?>" data-toggle="tab"><?= isset($kindofproduct[2]['Name']) ? $kindofproduct[2]['Name'] : ""; ?></a></li>
                                <li><a href="#<?= isset($kindofproduct[3]['Name']) ? $kindofproduct[3]['Name'] : "" ?>" data-toggle="tab"><?= isset($kindofproduct[3]['Name']) ? $kindofproduct[3]['Name'] : ""; ?></a></li>
                                <li><a href="#<?= isset($kindofproduct[4]['Name']) ? $kindofproduct[4]['Name'] : "" ?>" data-toggle="tab"><?= isset($kindofproduct[4]['Name']) ? $kindofproduct[4]['Name'] : ""; ?></a></li>
                                <?php ?>
                            </ul>
                        </div>
                        <!-- index 0 -->
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="<?= isset($kindofproduct[0]['Name']) ? $kindofproduct[0]['Name'] : "" ?>" > 
                                <?php
                                ?>
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="<?= WEBROOT_PATH ?>/images/home/gallery1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php ?>  
                            </div>
                            <!-- index 1 -->
                            <div class="tab-pane fade" id="<?= isset($kindofproduct[1]['Name']) ? $kindofproduct[1]['Name'] : "" ?>" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="<?= WEBROOT_PATH ?>/images/home/gallery4.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- index 2 -->
                            <div class="tab-pane fade" id="<?= isset($kindofproduct[2]['Name']) ? $kindofproduct[2]['Name'] : "" ?>" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="<?= WEBROOT_PATH ?>/images/home/gallery3.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- index 3 -->
                            <div class="tab-pane fade" id="<?= isset($kindofproduct[3]['Name']) ? $kindofproduct[3]['Name'] : "" ?>" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="<?= WEBROOT_PATH ?>/images/home/gallery1.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>          
                            </div>
                            <!-- index 4 -->
                            <div class="tab-pane fade" id="<?= isset($kindofproduct[4]['Name']) ? $kindofproduct[4]['Name'] : "" ?>" >
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="<?= WEBROOT_PATH ?>/images/home/gallery2.jpg" alt="" />
                                                <h2>$56</h2>
                                                <p>Easy Polo Black Edition</p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/category-tab-->
                </form>
                <?php ?>
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
                                                    <img class="recommend-img" src="<?= WEBROOT_PATH . DS ?>img/upload/<?= $item['Image'] ?>" alt="" />
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
                                                    <img class="recommend-img" src="<?= WEBROOT_PATH . DS ?>img/upload/<?= $item['Image'] ?>" alt="" />
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
</section>