<style>
    .createuser{
        margin-left: 90% !important;
        color:black;
    }
    .center{
        text-align: center;
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
                        $i = ($this->data['currentPage'] - 1) *5 + 1;
                        foreach ($this->data['lstUsers'] as $row) {
                            ?>
                            <tbody>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $row['IDUser']; ?></td>
                                    <td><?= $row['Name']; ?></td>
                                    <td><?= $row['Password']; ?></td>
                                    <td><?= $row['Fullname']; ?></td>
                                    <td><?php
                                        if ($row['Gender'] == 0)
                                            echo 'Male';
                                        elseif ($row['Gender'] == 1)
                                            echo 'Female';
                                        else
                                            echo 'Other';
                                        ?></td>
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

<div class="c-gray-box center">
    <ul class="pagination">
        <li class="<?= $this->data['currentPage'] < 2 ? "hide" : "" ?>"><a href="<?= ADMIN_ROOT . "/user/list/page/" . ($this->data['currentPage'] - 1); ?> ">&laquo;</a></li>
        <?php
        foreach ($this->data['paging'] as $page) {
            echo "<li class='" . ($this->data['currentPage'] == $page ? "active" : "") . "'><a href='" . ADMIN_ROOT . "/user/list/page/$page" . "'>$page</a></li>";
        }
        ?>
        <li class="<?= $this->data['currentPage'] > $this->data['currentPage'] - 1 ? "hide" : "" ?>"><a href="<?= ADMIN_ROOT . "/user/list/page/" . ($this->data['currentPage'] + 1); ?>">&raquo;</a></li>
    </ul>
</div>