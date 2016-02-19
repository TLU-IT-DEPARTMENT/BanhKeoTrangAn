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
                <h3 class="box-title">Slider List</h3>
                <a href="<?= ADMIN_ROOT ?>/slider/add" class="createpost"><i class="fa fa-plus fa-2x"></i></a>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="tb" class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>IDSlider</th>
                                <th>Title</th>
                                <th>Header</th>
                                <th>Content</th>
                                <th>Image</th>
                                <th>Link</th>
                                <th>Order</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                            <?php
                                $i = ($this->data['currentPage'] - 1) *5 + 1;
                                foreach ($this->data['listSlider'] as $row) {
                            ?>
                            <tbody>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $row['IDSlider']; ?></td>
                                    <td><?= $row['Title'];?></td>
                                    <td><?= $row['Header'];?></td>
                                    <td><?= $row['Content'];?></td>
                                    <td><img id="image-content" src="<?= WEBROOT_PATH?>/img/upload/<?= $row['Image']; ?>"></td>
                                    <td><?= $row['Link'];?></td>
                                    <td><?= $row['Order'];?></td>
                                    <td><?= $row['Status'] == 1? 'Enable' : 'Disable'; ?></td>
                                    <td><a href="<?= ADMIN_ROOT ?>/slider/edit/<?= $row['IDSlider']; ?>"><i class="fa fa-pencil"></i></a></td>
                                    <td><a onclick="return confirm('Do you want delete this record?');" href="<?= ADMIN_ROOT ?>/slider/delete/<?= $row['IDSlider']; ?>"><i class="fa fa-trash"></i></a></td>
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
        <li class="<?= $this->data['currentPage'] < 2 ? "hide" : "" ?>"><a href="<?= ADMIN_ROOT . "/slider/list/page/" . ($this->data['currentPage'] - 1); ?> ">&laquo;</a></li>
        <?php
        foreach ($this->data['paging'] as $page) {
            echo "<li class='" . ($this->data['currentPage'] == $page ? "active" : "") . "'><a href='" . ADMIN_ROOT . "/slider/list/page/$page" . "'>$page</a></li>";
        }
        ?>
        <li class="<?= $this->data['currentPage'] > $this->data['currentPage'] - 1 ? "hide" : "" ?>"><a href="<?= ADMIN_ROOT . "/slider/list/page/" . ($this->data['currentPage'] + 1); ?>">&raquo;</a></li>
    </ul>
</div>
