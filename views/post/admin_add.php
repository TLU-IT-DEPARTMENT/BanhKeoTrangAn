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
            <label for="">Title</label><span class="red-require"><strong>*</strong></span>
            <input type="text" name="Title" class="form-control" id="exampleInputEmail1" placeholder="Title" required>
        </div>
        <div class="form-group">
            <label for="">Slug</label><span class="red-require"><strong>*</strong></span>
            <input type="text" name="Slug" class="form-control" id="exampleInputPassword1" placeholder="Slug" required>
        </div>
        <div class="form-group">
            <label for="">Content</label><span class="red-require"><strong>*</strong></span>
            <textarea class="form-control ckeditor" rows="10" id="dataInput" placeholder="Content" name="Content"></textarea>
        </div>
        <div class="form-group">
            <label for="">Tags</label><br>
                <?php foreach ($this->data['listTag'] as $row) {?>
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox" name="Tags[]" value="<?= $row['IDTag']; ?>"> <?= $row['Name']; ?>
                </label>
                <?php }?>
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Upload Image</label>
            <input type="file" name="uploadedimage" id="exampleInputFile">
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <select class="form-control" id="postStatus" name="Status">
                <option value="enable">Enable</option>
                <option value="disable">Disable</option>
            </select>
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
