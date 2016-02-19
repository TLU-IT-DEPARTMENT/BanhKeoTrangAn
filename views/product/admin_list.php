<style>
    .createpost{
        margin-left: 96% !important;
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
                <h3 class="box-title">Product List</h3>
                <a href="<?= ADMIN_ROOT ?>/product/add" class="createpost"><i class="fa fa-plus fa-2x"></i></a>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="tb" class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>ProductID</th>
                                <th>Product Name</th>
                                <th>Kind Of Product</th>
                                <th>Slug</th>
                                <th>Model</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Tag</th>
                                <th>Rate</th>
                                <th>RatePeople</th>
                                <th>Status</th>
                                <th>View Detail</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <?php
                        include_once '../models/tagproduct.php';
                        include_once '../models/kindofproduct_product.php';
                        include_once '../models/kindofproduct.php';

                        $tagProduct = new TagProduct();
                        $tag = new Tag();
                        $KindOfProduct_ProductModel = new KindOfProduct_Product();

                        $i = ($this->data['currentPage'] - 1) * 5 + 1;
                        foreach ($this->data['item'] as $row) {
                            $aTag = $tagProduct->selectByIDProduct($row['IDProduct']);
                            $KopName = $KindOfProduct_ProductModel->getProductNameByKind($row['IDProduct']);
                           
                            ?>
                            <tbody>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $row['IDProduct']; ?></td>
                                    <td><?= substr($row['Name'], 0, 200); ?></td>
                                    <td>
                                        <?php
                                        $Name = "";
                                        foreach ($KopName as $rowNam) {
                                            $Name = $Name . $rowNam['Name'] . "  ";
                                        }
                                        echo $Name;
                                        ?>
                                    </td>
                                    <td><?= substr($row['Slug'], 0, 200); ?></td>
                                    <td><?= $row['Model']; ?></td>
                                    <td><?= $row['UnitPrice']; ?></td>
                                    <td><img id="image-content" src="<?= WEBROOT_PATH?>/img/upload/<?= isset($row['Image'])?$row['Image']:"default.jpg"; ?>"></td>
                                    <td><?= substr($row['Description'], 0, 200); ?></td>
                                    <td>
                                        <?php
                                        $Tags = "";
                                        foreach ($aTag as $rowTag) {
                                            $TagName = $tag->selectByID($rowTag['IDTag']);
                                            $Tags = $Tags . $TagName['Name'] . "; ";
                                        }
                                        echo $Tags;
                                        ?>
                                    </td>
                                    <td><?= $row['Rate']; ?></td>
                                    <td><?= $row['RatePeople']; ?></td>
                                    <td><?= $row['Status'] == 1 ? 'Enable' : 'Disable'; ?></td>
                                    <td><a href="<?= ADMIN_ROOT ?>/product/detail/<?= $row['IDProduct']; ?>/page/1"><i class="fa fa-info"></i></a></td>
                                    <td><a href="<?= ADMIN_ROOT ?>/product/edit/<?= $row['IDProduct']; ?>"><i class="fa fa-pencil"></i></a></td>
                                    <td><a onclick="return confirm('Do you want delete this record?');" href="<?= ADMIN_ROOT ?>/product/delete/<?= $row['IDProduct']; ?>"><i class="fa fa-trash"></i></a></td>
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
        <li class="<?= $this->data['currentPage'] < 2 ? "hide" : "" ?>"><a href="<?= ADMIN_ROOT . "/product/list/page/" . ($this->data['currentPage'] - 1); ?> ">&laquo;</a></li>
        <?php
        foreach ($this->data['paging'] as $page) {
            echo "<li class='" . ($this->data['currentPage'] == $page ? "active" : "") . "'><a href='" . ADMIN_ROOT . "/product/list/page/$page" . "'>$page</a></li>";
        }
        ?>
        <li class="<?= $this->data['currentPage'] > $this->data['currentPage'] - 1 ? "hide" : "" ?>"><a href="<?= ADMIN_ROOT . "/product/list/page/" . ($this->data['currentPage'] + 1); ?>">&raquo;</a></li>
    </ul>
</div>