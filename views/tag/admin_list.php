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
                <h3 class="box-title">Tags List</h3>
                <a href="<?= ADMIN_ROOT ?>/tag/add" class="createpost"><i class="fa fa-plus fa-2x"></i></a>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="tb" class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>TagID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <?php
                        $i = ($this->data['currentPage'] - 1) *5 + 1;
                        foreach ($this->data['lstTag'] as $row) {
                            ?>
                            <tbody>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $row['IDTag']; ?></td>
                                    <td><?= $row['Name']; ?></td>
                                    <td><?= $row['Slug']; ?></td>
                                    <td><?= substr($row['Description'], 0, 200); ?></td>
                                    <td><a href="<?= ADMIN_ROOT ?>/tag/edit/<?= $row['IDTag']; ?>"><i class="fa fa-pencil"></i></a></td>
                                    <td><a onclick="return confirm('Do you want delete this record?');" href="<?= ADMIN_ROOT ?>/tag/delete/<?= $row['IDTag']; ?>"><i class="fa fa-trash"></i></a></td>
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
        <li class="<?= $this->data['currentPage'] < 2 ? "hide" : "" ?>"><a href="<?= ADMIN_ROOT . "/tag/list/page/" . ($this->data['currentPage'] - 1); ?> ">&laquo;</a></li>
        <?php
        foreach ($this->data['paging'] as $page) {
            echo "<li class='" . ($this->data['currentPage'] == $page ? "active" : "") . "'><a href='" . ADMIN_ROOT . "/tag/list/page/$page" . "'>$page</a></li>";
        }
        ?>
        <li class="<?= $this->data['currentPage'] > $this->data['currentPage'] - 1 ? "hide" : "" ?>"><a href="<?= ADMIN_ROOT . "/tag/list/page/" . ($this->data['currentPage'] + 1); ?>">&raquo;</a></li>
    </ul>
</div>