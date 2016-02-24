<script type="text/javascript" src="<?= WEBROOT_PATH ?>/plugins/ckeditor/sample.js"></script>
<script type="text/javascript" src="<?= WEBROOT_PATH ?>/plugins/ckeditor/ckeditor.js"></script>
<style>
    .red-require{
        color: red;
    }
    .button {
        display: block;
        width: 115px;
        height: 33px;
        background: #4E9CAF;
        padding: 6px;
        text-align: center;
        border-radius: 4px;
        color: white;
        font-weight: bold;
        margin-top: 8px;
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
            <label for="">Categories</label><br>
            <?php foreach ($this->data['listCategory'] as $row) { ?>
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox" name="Categories[]" value="<?= $row['IDCategory']; ?>"> <?= $row['Name']; ?>
                </label>
            <?php } ?>
        </div>
        <div class="form-group">
            <label for="">Tags</label><br>
            <?php foreach ($this->data['listTag'] as $row) { ?>
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox" name="Tags[]" value="<?= $row['IDTag']; ?>"> <?= $row['Name']; ?>
                </label>
            <?php } ?>
        </div>
        <div class="form-group" style="height: 100px;">
            <label for="">Image</label><br>
            <input type="text" name="uploadedimage" class="form-control" id="fieldID" placeholder="Image" required>
            <a data-toggle="modal" href="javascript:;" data-target="#myModal" class="button" type="button">Select Image</a>
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


<div class="modal fade" id="myModal" style="width: 100%; display: none; position: center;" aria-hidden="true">
    <div class="modal-dialog" style="width: 100%;">
        <div class="modal-content" style=" width: 80%; margin-left: 13%; margin-top: 3%;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Choose Image</h4>
            </div>
            <div class="modal-body" style="width: 100%;">
                <iframe width="100%" height="410" src="<?= WEBROOT_PATH ?>/plugins/filemanager/dialog.php?type=1&field_id=fieldID&relative_url=1" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


