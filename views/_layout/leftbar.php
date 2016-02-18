        <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Kind Of Product</h2>

                    <div class="panel-group category-products" id="accordian">
                        <div class="panel panel-default">
                            <?php
                            foreach ($this->data['kindofproductLeftbar'] as $item) {
                                ?>
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#<?= $item['Slug']?>">
                                            <?php if (!empty($item['children'])) echo "<span class='badge pull-right'><i class='fa fa-plus'></i></span>"; ?>
                                            <?= $item['Name']; ?>
                                        </a>
                                    </h4>
                                </div>
                                    <div id="<?= $item['Slug']?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                    </div>
                    
                    <h2>Category</h2>

                    <div class="panel-group category-products" id="accordian2">
                        <div class="panel panel-default">
                            <?php
                            foreach ($this->data['categoryLeftbar'] as $item) {
                                ?>
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian2" href="#<?= $item['Slug']?>">
                                            <?php if (!empty($item['children'])) echo "<span class='badge pull-right'><i class='fa fa-plus'></i></span>"; ?>
                                            <?= $item['Name']; ?>
                                        </a>
                                    </h4>
                                </div>
                                    <div id="<?= $item['Slug']?>" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <?php foreach ($item['children'] as $row) { ?>
                                                <li><a href=""><?= $row['Name']; ?></a></li>  
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                            <?php }
                            ?>
                        </div>
                    <?php } ?>
                <?php }
                ?>
            </div>

        </div>

        <h2>Category</h2>

        <div class="panel-group category-products" id="accordian2">
            <div class="panel panel-default">
                <?php
                foreach ($this->data['categoryLeftbar'] as $item) {
                    ?>
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordian2" href="#<?= $item['Slug'] ?>">
                                <?php if (!empty($item['children'])) echo "<span class='badge pull-right'><i class='fa fa-plus'></i></span>"; ?>
                                <?= $item['Name']; ?>
                            </a>
                        </h4>
                    </div>
                    <?php foreach ($item['children'] as $row) { ?>
                        <div id="<?= $item['Slug'] ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                <ul>
                                    <li><?= $row['Name']; ?></li>                                                                   
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                <?php }
                ?>

            </div>

        </div>

        <div class="brands_products"><!--brands_products-->
            <h2>Brands</h2>
            <div class="brands-name">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="#"> <span class="pull-right">(50)</span>Acne</a></li>
                    <li><a href="#"> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                    <li><a href="#"> <span class="pull-right">(27)</span>Albiro</a></li>
                    <li><a href="#"> <span class="pull-right">(32)</span>Ronhill</a></li>
                    <li><a href="#"> <span class="pull-right">(5)</span>Oddmolly</a></li>
                    <li><a href="#"> <span class="pull-right">(9)</span>Boudestijn</a></li>
                    <li><a href="#"> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                </ul>

            </div>

        </div>

    </div><!-- end.collapse -->



    <div class="price-range"><!--price-range-->
        <h2>Price Range</h2>
        <div class="well text-center">
            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
            <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
        </div>
    </div><!--/price-range-->

    <div class="shipping text-center"><!--shipping-->
        <img src="<?= WEBROOT_PATH ?>/images/home/shipping.jpg" alt="" />
    </div><!--/shipping-->

</div>
</div>
