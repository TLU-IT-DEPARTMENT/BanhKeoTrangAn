<style>
    .createuser{
        margin-left: 980px !important;
        color:black;
    }

</style>

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Users List</h3>
                <a href="<?= ADMIN_ROOT ?>/user/add" class="createuser"><i class="fa fa-plus fa-2x"></i></a>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="tb" class="table table-hover table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>UserID</th>
                                <th>UserName</th>
                                <th>Password</th>
                                <th>Fullname</th>
                                <th>Gender</th>
                                <th>Birthday</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>PhoneNumber</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <?php
                        foreach ($this->data['lstUsers'] as $row) {
                            $i = 1;
                            ?>
                            <tbody>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $row['IDUser']; ?></td>
                                    <td><?= $row['Name']; ?></td>
                                    <td><?= $row['Password']; ?></td>
                                    <td><?= $row['Fullname']; ?></td>
                                    <td><?= $row['Gender']; ?></td>
                                    <td><?= $row['Birthday']; ?></td>
                                    <td><?= $row['Address']; ?></td>
                                    <td><?= $row['Email']; ?></td>
                                    <td><?= $row['PhoneNumber']; ?></td>
                                    <td><?= $row['Status'] == 1 ? 'Admin' : 'Member'; ?></td>
                                    <td><a href="<?= ADMIN_ROOT ?>/user/edit/<?= $row['IDUser']; ?>"><i class="fa fa-pencil"></i></a></td>
                                    <td><a onclick="return confirm('Do you want delete this record?');" href="<?= ADMIN_ROOT ?>/user/delete/<?= $row['IDUser']; ?>"><i class="fa fa-trash"></i></a></td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div><!-- /.row -->

