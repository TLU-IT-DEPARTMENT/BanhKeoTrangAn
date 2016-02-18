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