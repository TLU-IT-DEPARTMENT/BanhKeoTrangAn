<script type="text/javascript" src="<?= WEBROOT_PATH ?>/plugins/ckeditor/sample.js"></script>
<script type="text/javascript" src="<?= WEBROOT_PATH ?>/plugins/ckeditor/ckeditor.js"></script>
<style>
    .red-require{
        color: red;
    }
    .image-exist{
        width: 80px;
        height: 80px;
    }
</style>
<form role="form" method="post" enctype="multipart/form-data">
    <div class="box-body">
        <div class="form-group">
            <label for="">Name</label><span class="red-require"><strong>*</strong></span>
            <input type="text" name="Name" value="<?= $this->data['item']['Name']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Name" required>
        </div>
        <div class="form-group">
            <label for="">Slug</label><span class="red-require"><strong>*</strong></span>
            <input type="text" name="Slug" value="<?= $this->data['item']['Slug']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Slug" required>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control ckeditor" rows="10"  id="dataInput" placeholder="Description" name="Description"><?= $this->data['item']['Description']; ?></textarea>
        </div>
        
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>