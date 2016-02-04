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
                <h3 class="box-title">Product Detail </h3>
                <a href="<?= ADMIN_ROOT ?>/product/adddetail/<?=$this->data['item'][0]['IDProduct']; ?>/page/1" class="createpost"><i class="fa fa-plus fa-2x"></i></a>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="tb" class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>ProductID</th>
                                <th>Product Name</th>
                                <th>Model</th>
                                <th>Tag</th>
                                <th>Image</th>
                                <th>Caption</th>
                                <th>Status</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <?php
                        include_once '../models/tagproduct.php';
                        $tagProduct = new TagProduct();
                        $tag = new Tag();
                        $i = ($this->data['currentPage'] - 1) * 5 + 1;
                        foreach ($this->data['item'] as $row) {
                            $aTag = $tagProduct->selectByIDProduct($row['IDProduct']);
                            ?>
                            <tbody>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $row['IDProduct']; ?></td>
                                    <td><?= substr($row['Name'], 0, 200); ?></td>
                                    <td><?= $row['Model']; ?></td>
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
                                    <td><img id="image-content" src="<?= WEBROOT_PATH ?>/img/upload/<?= isset($row['Image']) ? $row['Image'] : 'default.jpg'; ?>"></td>
                                    <td><?= substr($row['Caption'], 0, 200); ?></td>
                                    <td><?= $row['Status'] == 1 ? 'Enable' : 'Disable'; ?></td>
                                    <td><a href="<?= ADMIN_ROOT ?>/product/editdetail/<?= $row['IDProduct']; ?>/productdetail/<?= $row['IDProductDetail']; ?>"><i class="fa fa-pencil"></i></a></td>
                                    <td><a onclick="return confirm('Do you want delete this record?');" href="<?= ADMIN_ROOT ?>/product/deletedetail/<?= $row['IDProduct']; ?>/productdetail/<?= $row['IDProductDetail']; ?>"><i class="fa fa-trash"></i></a></td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div><!-- /.row -->
<?php ?>
<div class="c-gray-box center">
    <ul class="pagination">
        <li class="<?= $this->data['currentPage'] < 2 ? "hide" : "" ?>"><a href="<?= ADMIN_ROOT . "/product/detail/".($this->data['item'][0]['IDProduct'])."/page/" . ($this->data['currentPage'] - 1);?> ">&laquo;</a></li>
        <?php
        $paging = $this->data['item'];
        foreach ($this->data['paging'] as $page) {
            echo "<li class='" . ($this->data['currentPage'] == $page ? "active" : "") . "'><a href='" . ADMIN_ROOT . "/product/detail/".$paging[0]['IDProduct']."/page/$page". "'>$page</a></li>";
        }
        ?>
        <li class="<?= $this->data['currentPage'] > $this->data['currentPage'] - 1 ? "hide" : "" ?>"><a href="<?= ADMIN_ROOT . "/product/detail/".($this->data['item'][0]['IDProduct']). "/page/" . ($this->data['currentPage'] + 1);?>">&raquo;</a></li>
    </ul>
</div>