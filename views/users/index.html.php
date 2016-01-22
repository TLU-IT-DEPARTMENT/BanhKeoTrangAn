<div class="table-responsive">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Password</td>
        <td>Fullname</td>
        <td>Gender</td>
        <td>Birthday</td>
        <td>Address</td>
        <td>Email</td>
        <td>PhoneNumber</td>
        <td>Status</td>
    </tr>
</div>
<?php 
$i = 1;
foreach($data['pages'] as $value){ ?>
<tr>
    <td><?= $i++ ?></td>
    <td><?= $value['Name']; ?></td>
    <td><?= $value['Password']; ?></td>
    <td><?= $value['Fullname']; ?></td>
    <td><?= $value['Gender']; ?></td>
    <td><?= $value['Birthday']; ?></td>
    <td><?= $value['Address']; ?></td>
    <td><?= $value['Email']; ?></td>
    <td><?= $value['PhoneNumber']; ?></td>
    <td><?= $value['Status']; ?></td>
</tr>
<?php } ?>