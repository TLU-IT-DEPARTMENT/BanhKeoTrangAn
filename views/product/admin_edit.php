<script type="text/javascript" src="<?= WEBROOT_PATH ?>/plugins/ckeditor/sample.js"></script>
<script type="text/javascript" src="<?= WEBROOT_PATH ?>/plugins/ckeditor/ckeditor.js"></script>
<style>
    .red-require{
        color: red;
    }
</style>
<form role="form" method="post" enctype="multipart/form-data">
    <div class="box-body">
        <div class="form-group">
            <label for="">Product Name</label><span class="red-require"><strong>*</strong></span>
            <input type="text"disable name="Name" value="<?= $this->data['item'][0]['Name']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Name" required>
        </div>
        <div class="form-group">
            <label for="">Slug</label><span class="red-require"><strong>*</strong></span>
            <input type="text" name="Slug" value="<?= $this->data['item'][0]['Slug']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Slug" required>
        </div>
        <div class="form-group">
            <label for="">Model</label><span class="red-require"><strong>*</strong></span>
            <input type="text" name="Model" value="<?= $this->data['item'][0]['Model']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Model" required>
        </div>
        <div class="form-group">
            <label for="">UnitPrice</label><span class="red-require"><strong>*</strong></span>
            <input type="text" name="UnitPrice"  value="<?= $this->data['item'][0]['UnitPrice']; ?>"class="form-control" id="exampleInputPassword1" placeholder="UnitPrice" required>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control ckeditor"  rows="10" id="dataInput" placeholder="Description" name="Description"><?= $this->data['item'][0]['Description']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="">Tags</label><br>
            <?php foreach ($this->data['listTag'] as $row) { ?>
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox" name="Tags[]" value="<?= $row['IDTag']; ?>" <?php if ($row['Name'] == $this->data['listTagExist'][0]['Name']) echo 'checked'; ?> > <?= isset($row['Name']) ? $row['Name'] : ''; ?>
                </label>
            <?php } ?>

        </div>
        <div class="form-group">
            <label for="">Rate</label>
            <input type="text" name="Rate" value="<?= $this->data['item'][0]['Rate']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Rate">
        </div>
        <div class="form-group">
            <label for="">RatePeople</label>
            <input type="text" name="RatePeople" value="<?= $this->data['item'][0]['RatePeople']; ?>" class="form-control" id="exampleInputPassword1" placeholder="RatePeople">
        </div>
        <div class="form-group">
            <label for="">Status</label><span class="red-require"><strong>*</strong></span>
            <select class="form-control" id="postStatus" name="Status">
                <option value="<?php if ($this->data['item'][0]['Status'] == 1) echo 'selected' ?>">Enable</option>
                <option value="<?php if ($this->data['item'][0]['Status'] == 0) echo 'selected' ?>">Disable</option>
            </select>
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
