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
                <?php include VIEWS_PATH . '/_layout/feauture_items/feauture_items.php'; ?>
                <?php include VIEWS_PATH . '/_layout/kindofproduct_tab/kindofproduct_tab.php'; ?>
                <?php include VIEWS_PATH . '/_layout/recommended_items/recommend.php'; ?>
            </div>
        </div>
    </div>
</section>