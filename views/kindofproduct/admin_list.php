<style>
    .createkindofproduct{
        margin-left: 90% !important;
        color:black;
    }
    .center{
        text-align: center;
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
                <h3 class="box-title">Categories List</h3>
                <a href="<?= ADMIN_ROOT ?>/kindofproduct/add" class="createkindofproduct"><i class="fa fa-plus fa-2x"></i></a>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="tb" class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>ID Category</th>
                                <th>Category Parent</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Order Category</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <?php
                        $i = ($this->data['currentPage'] - 1) *5 + 1;
                        foreach ($this->data['listCategory'] as $row) {
                            ?>
                            <tbody>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $row['IDCategory']; ?></td>
                                    <?php
                                    $aCategory = new Category();
                                    $CategoryParent = $aCategory->selectByIDCategory($row['IDCategoryParent']);
                                    $CategoryParentName = $CategoryParent[0]['Name'];
                                    ?>
                                    <td><?= $CategoryParentName; ?></td>
                                    <td><?= substr($row['Name'], 0, 200); ?></td>
                                    <td><?= substr($row['Slug'], 0, 200); ?></td>
                                    <td><?= $row['OrderCategory']; ?></td>
                                    <td><?= substr($row['Description'], 0, 200); ?></td>
                                    <td><a href="<?= ADMIN_ROOT ?>/kindofproduct/edit/<?= $row['IDCategory']; ?>"><i class="fa fa-pencil"></i></a></td>
                                    <td><a onclick="return confirm('Do you want delete this record?');" href="<?= ADMIN_ROOT ?>/kindofproduct/delete/<?= $row['IDCategory']; ?>"><i class="fa fa-trash"></i></a></td>
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
        <li class="<?= $this->data['currentPage'] < 2 ? "hide" : "" ?>"><a href="<?= ADMIN_ROOT . "/kindofproduct/list/page/" . ($this->data['currentPage'] - 1); ?> ">&laquo;</a></li>
        <?php
        foreach ($this->data['paging'] as $page) {
            echo "<li class='" . ($this->data['currentPage'] == $page ? "active" : "") . "'><a href='" . ADMIN_ROOT . "/kindofproduct/list/page/$page" . "'>$page</a></li>";
        }
        ?>
        <li class="<?= $this->data['currentPage'] > $this->data['currentPage'] - 1 ? "hide" : "" ?>"><a href="<?= ADMIN_ROOT . "/kindofproduct/list/page/" . ($this->data['currentPage'] + 1); ?>">&raquo;</a></li>
    </ul>
</div>


