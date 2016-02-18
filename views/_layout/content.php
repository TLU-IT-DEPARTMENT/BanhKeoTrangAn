<style>
    .imgProduct{
        width: 180px !important;
        height: 180px !important;
    }
    .recommend-img{
        width: 180px;
        height: 180px;
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
                                            <a href="<?= ROOT_PATH ?>en/home/addtocart/<?= $item['IDProduct'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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

                <div class="category-tab"><!--category-tab-->
                    <!-- title -->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <?php foreach ($this->data['kindofproduct'] as $key => $row) {
                                ?>
                                <li <?php if ($key == 0) echo "class = 'active' "; ?> ><a href="#kind<?= $row['IDKindOfProduct'] ?>" data-toggle="tab"><?= $row['Name'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!--content  -->
                    <?php
                    foreach ($this->data['kindofproduct'] as $key => $row) {
                        $homeModel = new Home();
                        $data = $homeModel->showProductByKind($row['IDKindOfProduct']);
                        foreach ($data as $key1 => $row1) {
                            ?>
                            <div <?php
                            if ($key1 == 0)
                                echo " class='tab-pane fade active in' ";
                            else
                                echo " class='tab-pane fade ' ";
                            ?> id="kind<?= $row1['IDProduct'] ?>" >

                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img class="imgProduct" src="<?= WEBROOT_PATH ?>/img/upload/<?= $row1['Image'] ?>" alt="" />
                                                <h2>$<?= $row1['UnitPrice'] ?></h2>
                                                <p><?= substr($row1['Description'], 0, 50) ?></p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php }
                    } ?>
                </div><!--/category-tab-->

                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">recommended items</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <?php foreach ($this->data['recommend'] as $key => $item) {
                                ?>
                                <div <?php
                                if ($key == 0)
                                    echo "class='item active' ";
                                else
                                    echo "class='item '";
                                ?>>	

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
                                </div>
<?php } ?>
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