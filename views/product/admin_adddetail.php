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
            <h2>Add Detail Product</h2>
            <label for="">Product Name</label>
            <input type="text" disable name="Name" readonly="readonly" value="<?= $this->data['ProductName'][0]['Name'] ?>" class="form-control " id="exampleInputEmail1" placeholder="Name" >
        </div>
        <div class="form-group">
            <label for="">Caption</label>
            <input type="text" name="Caption"  class="form-control" id="exampleInputEmail1" placeholder="Caption">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">Upload Image</label><span class="red-require"><strong>*</strong></span>
            <input type="file" id="file" name="files[]" multiple accept="image/*">
        </div>

    </div><!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Add</button>
    </div>
</form>
