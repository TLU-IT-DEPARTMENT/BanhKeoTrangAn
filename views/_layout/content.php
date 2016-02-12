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
                                <li class="active"><a href="#<?= isset($kindofproduct[0]['IDKindOfProduct']) ? $kindofproduct[0]['IDKindOfProduct'] : "" ?>" data-toggle="tab"><?= isset($kindofproduct[0]['Name']) ? $kindofproduct[0]['Name'] : ""; ?></a></li>
                                <li><a href="#<?= isset($kindofproduct[1]['IDKindOfProduct']) ? $kindofproduct[1]['IDKindOfProduct'] : "" ?>" data-toggle="tab"><?= isset($kindofproduct[1]['Name']) ? $kindofproduct[1]['Name'] : ""; ?></a></li>
                                <li><a href="#<?= isset($kindofproduct[2]['IDKindOfProduct']) ? $kindofproduct[2]['IDKindOfProduct'] : "" ?>" data-toggle="tab"><?= isset($kindofproduct[2]['Name']) ? $kindofproduct[2]['Name'] : ""; ?></a></li>
                                <li><a href="#<?= isset($kindofproduct[3]['IDKindOfProduct']) ? $kindofproduct[3]['IDKindOfProduct'] : "" ?>" data-toggle="tab"><?= isset($kindofproduct[3]['Name']) ? $kindofproduct[3]['Name'] : ""; ?></a></li>
                                <li><a href="#<?= isset($kindofproduct[4]['IDKindOfProduct']) ? $kindofproduct[4]['IDKindOfProduct'] : "" ?>" data-toggle="tab"><?= isset($kindofproduct[4]['Name']) ? $kindofproduct[4]['Name'] : ""; ?></a></li>
                                <?php ?>
                            </ul>
                        </div>
                        <!-- index 0 -->
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="<?= isset($kindofproduct[0]['IDKindOfProduct']) ? $kindofproduct[0]['IDKindOfProduct'] : "" ?>" > 
                                <?php
                                if (!empty($kindofproduct[0]['IDKindOfProduct'])) {
                                    $idKind1 = $kindofproduct[0]['IDKindOfProduct'];
                                    $homeModel = new Home();
                                    $result1 = $homeModel->showProductByKind($idKind1);
                                    foreach ($result1 as $key => $item) {
                                        ?>
                                        <div class="col-sm-3">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="<?= WEBROOT_PATH ?>/img/upload/<?= isset($item['Image']) ? $item['Image'] : "" ?>" alt="" />
                                                        <h2>$<?= isset($item['UnitPrice']) ? $item['UnitPrice'] : "" ?></h2>
                                                        <p><?= isset($item['Description']) ? substr($item['Description'], 0, 100) : "" ?></p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                } else {
                                    echo "<div class='col-sm-3'>";
                                        echo "<div class='product-image-wrapper'>";
                                            echo "<div class='single-products'>";
                                                echo "<div class='productinfo text-center'>";
                                                    echo " <img src='<?= WEBROOT_PATH ?>/img/upload/default.jpg' alt=''/>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                    echo "</div>";
                                }
                                ?>  
                            </div>
                            <!-- index 1 -->
                            <div class="tab-pane fade" id="<?= isset($kindofproduct[1]['IDKindOfProduct']) ? $kindofproduct[1]['IDKindOfProduct'] : "" ?>" >
                                <?php
                                if (!empty($kindofproduct[1]['IDKindOfProduct'])) {
                                    $idKind2 = $kindofproduct[1]['IDKindOfProduct'];
                                    $homeMode2 = new Home();
                                    $result2 = $homeModel->showProductByKind($idKind2);
                                    foreach ($result2 as $key2 => $item2) {
                                        ?>
                                        <div class="col-sm-3">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="<?= WEBROOT_PATH ?>/img/upload/<?= isset($item2['Image']) ? $item2['Image'] : "" ?>" alt="" />
                                                        <h2>$<?= isset($item2['UnitPrice']) ? $item2['UnitPrice'] : "" ?></h2>
                                                        <p><?= isset($item2['Description']) ? substr($item2['Description'], 0, 100) : "" ?></p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                } else {
                                    echo "<div class='col-sm-3'>";
                                        echo "<div class='product-image-wrapper'>";
                                            echo "<div class='single-products'>";
                                                echo "<div class='productinfo text-center'>";
                                                    echo " <img src='<?= WEBROOT_PATH ?>/img/upload/default.jpg' alt=''/>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                    echo "</div>";
                                }
                                ?>
                            </div>
                            <!-- index 2 -->
                            <div class="tab-pane fade" id="<?= isset($kindofproduct[2]['IDKindOfProduct']) ? $kindofproduct[2]['IDKindOfProduct'] : "" ?>" >
                                <?php
                                if (!empty($kindofproduct[2]['IDKindOfProduct'])) {
                                    $idKind3 = $kindofproduct[2]['IDKindOfProduct'];
                                    $homeMode3 = new Home();
                                    $result3 = $homeModel->showProductByKind($idKind3);
                                    foreach ($result3 as $key3 => $item3) {
                                        ?>
                                        <div class="col-sm-3">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="<?= WEBROOT_PATH ?>/img/upload/<?= isset($item3['Image']) ? $item3['Image'] : "" ?>" alt="" />
                                                        <h2>$<?= isset($item3['UnitPrice']) ? $item3['UnitPrice'] : "" ?></h2>
                                                        <p><?= isset($item3['Description']) ? substr($item3['Description'], 0, 100) : "" ?></p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                } else {
                                    echo "<div class='col-sm-3'>";
                                        echo "<div class='product-image-wrapper'>";
                                            echo "<div class='single-products'>";
                                                echo "<div class='productinfo text-center'>";
                                                    echo " <img src='<?= WEBROOT_PATH ?>/img/upload/default.jpg' alt=''/>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                    echo "</div>";
                                }
                                ?>
                            </div>
                            <!-- index 3 -->
                            <div class="tab-pane fade" id="<?= isset($kindofproduct[3]['IDKindOfProduct']) ? $kindofproduct[3]['IDKindOfProduct'] : "" ?>" >
                                <?php
                                if (!empty($kindofproduct[3]['IDKindOfProduct'])) {
                                    $idKind4 = $kindofproduct[3]['IDKindOfProduct'];
                                    $homeMode4 = new Home();
                                    $result4 = $homeModel->showProductByKind($idKind4);
                                    foreach ($result4 as $key4 => $item4) {
                                        ?>
                                        <div class="col-sm-3">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="<?= WEBROOT_PATH ?>/img/upload/<?= isset($item4['Image']) ? $item4['Image'] : "" ?>" alt="" />
                                                        <h2>$<?= isset($item4['UnitPrice']) ? $item4['UnitPrice'] : "" ?></h2>
                                                        <p><?= isset($item4['Description']) ? substr($item4['Description'], 0, 100) : "" ?></p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    <?php
                                    }
                                } else {
                                    echo "<div class='col-sm-3'>";
                                        echo "<div class='product-image-wrapper'>";
                                            echo "<div class='single-products'>";
                                                echo "<div class='productinfo text-center'>";
                                                    echo " <img src='<?= WEBROOT_PATH ?>/img/upload/default.jpg' alt=''/>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                    echo "</div>";
                                }
                                ?>
                            </div>
                            <!-- index 4 -->
                            <div class="tab-pane fade" id="<?= isset($kindofproduct[4]['IDKindOfProduct']) ? $kindofproduct[4]['IDKindOfProduct'] : "" ?>" >
                                <?php
                                if (!empty($kindofproduct[4]['IDKindOfProduct'])) {
                                    $idKind5 = $kindofproduct[4]['IDKindOfProduct'];
                                    $homeMode5 = new Home();
                                    $result5 = $homeModel->showProductByKind($idKind5);
                                    foreach ($result5 as $key5 => $item5) {
                                        ?>
                                        <div class="col-sm-3">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="<?= WEBROOT_PATH ?>/img/upload/<?= isset($item5['Image']) ? $item5['Image'] : "" ?>" alt="" />
                                                        <h2>$<?= isset($item5['UnitPrice']) ? $item5['UnitPrice'] : "" ?></h2>
                                                        <p><?= isset($item5['Description']) ? substr($item5['Description'], 0, 100) : "" ?></p>
                                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                } else {
                                    echo "<div class='col-sm-3'>";
                                        echo "<div class='product-image-wrapper'>";
                                            echo "<div class='single-products'>";
                                                echo "<div class='productinfo text-center'>";
                                                    echo " <img src='<?= WEBROOT_PATH ?>/img/upload/default.jpg' alt=''/>";
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                    echo "</div>";
                                }
                                ?>
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