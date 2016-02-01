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
            <label for="">Name</label><span class="red-require"><strong>*</strong></span>
            <input type="text" name="Name" class="form-control" id="exampleInputEmail1" placeholder="Name" required>
        </div>
        <div class="form-group">
            <label for="">Slug</label><span class="red-require"><strong>*</strong></span>
            <input type="text" name="Slug" class="form-control" id="exampleInputPassword1" placeholder="Slug" required>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control ckeditor" name="Description" rows="10" id="dataInput" placeholder="Description" ></textarea>
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
