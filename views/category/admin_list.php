<style>
    .createcategory{
        margin-left: 980px !important;
        color:black;
    }

</style>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Categories List</h3>
                <a href="<?= ADMIN_ROOT ?>/category/add" class="createcategory"><i class="fa fa-plus fa-2x"></i></a>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="tb" class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>IDCategory</th>
                                <th>IDCategoryParent</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>OrderCategory</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <?php
                        foreach ($this->data['listCategory'] as $row) {
                            $i = 1;
                            ?>
                            <tbody>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $row['IDCategory']; ?></td>
                                    <td><?= $row['IDCategoryParent']; ?></td>
                                    <td><?= $row['Name']; ?></td>
                                    <td><?= $row['Slug']; ?></td>
                                    <td><?= $row['OrderCategory']; ?></td>
                                    <td><?= $row['Description']; ?></td>
                                    <td><a href="<?= ADMIN_ROOT ?>/category/edit/<?= $row['IDCategory']; ?>"><i class="fa fa-pencil"></i></a></td>
                                    <td><a onclick="return confirm('Do you want delete this record?');" href="<?= ADMIN_ROOT ?>/category/delete/<?= $row['IDCategory']; ?>"><i class="fa fa-trash"></i></a></td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div><!-- /.row -->



