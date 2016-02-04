<style>
    .createpost{
        margin-left: 90% !important;
        color:black;
    }
    .center{
        text-align: center;
    }
    #image-content{
        width: 120px;
        height: 80px;
    }
    td {
        text-align: center !important;
    }
    th {
        text-align: center !important;
    }
</style>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tags Post List</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="tb" class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>ProductID</th>
                                <th>ProductName</th>
                                <th>TagID</th>
                                <th>TagName</th>
                            </tr>
                        </thead>

                        <?php
                        include_once '../models/product.php';
                        include_once '../models/tag.php';

                        $TagModel = new Tag();
                        $ProductModel = new Product();

                        $i = ($this->data['currentPage'] - 1) * 10 + 1;
                        foreach ($this->data['item'] as $row) {
                            $tag = $TagModel->selectByIdStatus($row['IDTag'], 1);
                            $product = $ProductModel->selectByIDStatus($row['IDProduct'], 1);
                           
                            $tagName = $tag[0]['Name'];
                            $productName = $product[0]['Name'];
                            ?>
                            <tbody>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $row['IDProduct']; ?></td>
                                    <td><?= $productName ?></td>
                                    <td><?= $row['IDTag']; ?></td>
                                    <td><?= $tagName ?></td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div><!-- /.row -->

<div class="c-gray-box center">
    <ul class="pagination">
        <li class="<?= $this->data['currentPage'] < 2 ? "hide" : "" ?>"><a href="<?= ADMIN_ROOT . "/tagproduct/list/page/" . ($this->data['currentPage'] - 1); ?> ">&laquo;</a></li>
        <?php
        foreach ($this->data['paging'] as $page) {
            echo "<li class='" . ($this->data['currentPage'] == $page ? "active" : "") . "'><a href='" . ADMIN_ROOT . "/tagproduct/list/page/$page" . "'>$page</a></li>";
        }
        ?>
        <li class="<?= $this->data['currentPage'] > $this->data['currentPage'] - 1 ? "hide" : "" ?>"><a href="<?= ADMIN_ROOT . "/tagproduct/list/page/" . ($this->data['currentPage'] + 1); ?>">&raquo;</a></li>
    </ul>
</div>