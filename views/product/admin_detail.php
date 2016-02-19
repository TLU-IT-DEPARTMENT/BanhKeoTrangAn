
<?php include_once ROOT . DS . 'lib/router.class.php'; ?>

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
                <a href="<?= ADMIN_ROOT ?>/product/adddetail/<?= $this->data['params'];?>/page/1" class="createpost"><i class="fa fa-plus fa-2x"></i></a>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="tb" class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>IDProductDetail</th>
                                <th>Image</th>
                                <th>Caption</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <?php
                        $i = ($this->data['currentPage'] - 1) * 5 + 1;
                        foreach ($this->data['item'] as $row) {?>
                            <tbody>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?=$row['IDProductDetail'];?></td>
                                    <td><img id="image-content" src="<?= WEBROOT_PATH ?>/img/upload/<?= isset($row['Image']) ? $row['Image'] : 'default.jpg'; ?>"></td>
                                    <td><?= substr($row['Caption'], 0, 200); ?></td>
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
        <li class="<?= $this->data['currentPage'] < 2 ? "hide" : "" ?>"><a href="<?= ADMIN_ROOT . "/product/detail/" . ($this->data['item'][0]['IDProduct']) . "/page/" . ($this->data['currentPage'] - 1); ?> ">&laquo;</a></li>
        <?php
        foreach ($this->data['paging'] as $page) {
            if (isset($this->data['item'][0]))
                echo "<li class='" . ($this->data['currentPage'] == $page ? "active" : "") . "'><a href='" . ADMIN_ROOT . "/product/detail/" . $this->data['item'][0]['IDProduct'] . "/page/$page" . "'>$page</a></li>";
            else
                echo "";
        }
        ?>
        <li class="<?= $this->data['currentPage'] > $this->data['currentPage'] - 1 ? "hide" : "" ?>"><a href="<?= ADMIN_ROOT . "/product/detail/" . ($this->data['item'][0]['IDProduct']) . "/page/" . ($this->data['currentPage'] + 1); ?>">&raquo;</a></li>
    </ul>
</div>