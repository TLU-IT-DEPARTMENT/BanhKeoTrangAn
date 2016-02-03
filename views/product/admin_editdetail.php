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
            <label for="">Product Name</label><span class="red-require">
                <input type="text" name="Name" value="<?=$this->data['ProductName']['Name']?>" class="form-control " id="exampleInputEmail1" placeholder="Name" >
                </div>
                <div class="form-group">
                    <label for="">Caption</label><span class="red-require">
                        <input type="text" name="Caption" class="form-control" id="exampleInputEmail1" placeholder="Caption">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Image</label>
                            <input type="file" id="file" name="files[]" multiple accept="image/*">
                        </div>
                        
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
                </form>
