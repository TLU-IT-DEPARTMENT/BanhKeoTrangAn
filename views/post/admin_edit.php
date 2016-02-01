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
            <label for="">Title</label><span class="red-require"><strong>*</strong></span>
            <input type="text" name="Title" value="<?= $this->data['post']['Title']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Title" required>
        </div>
        <div class="form-group">
            <label for="">Slug</label><span class="red-require"><strong>*</strong></span>
            <input type="text" name="Slug" value="<?= $this->data['post']['Slug']; ?>" class="form-control" id="exampleInputPassword1" placeholder="Slug" required>
        </div>
        <div class="form-group">
            <label for="">Content</label><span class="red-require"><strong>*</strong></span>
            <textarea class="form-control ckeditor" rows="10"  id="dataInput" placeholder="Content" name="Content"><?= $this->data['post']['Content']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="imageexist"></label>
            <img class="image-exist" src="<?= WEBROOT_PATH ?>/img/upload/<?= $this->data['post']['Image']; ?>">
            <br/>
            <br/>
            <br/>
            <label for="exampleInputFile">Update Image</label>
            <input type="file" name="uploadedimage" id="exampleInputFile">
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>