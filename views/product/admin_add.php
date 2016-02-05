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
            <input type="text" name="Name" class="form-control" id="exampleInputEmail1" placeholder="Name" required>
        </div>
        <div class="form-group">
            <label for="">Slug</label><span class="red-require"><strong>*</strong></span>
            <input type="text" name="Slug" class="form-control" id="exampleInputPassword1" placeholder="Slug" required>
        </div>
        <div class="form-group">
            <label for="">Model</label><span class="red-require"><strong>*</strong></span>
            <input type="text" name="Model" class="form-control" id="exampleInputPassword1" placeholder="Model" required>
        </div>
        <div class="form-group">
            <label for="">UnitPrice</label><span class="red-require"><strong>*</strong></span>
            <input type="text" name="UnitPrice" class="form-control" id="exampleInputPassword1" placeholder="UnitPrice" required>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control ckeditor" rows="10" id="dataInput" placeholder="Description" name="Description"></textarea>
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
            <label for="">Kind Of Product</label><span class="red-require"><strong>*</strong></span><br>
                <?php foreach ($this->data['listKop'] as $row) {?>
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox"  name="Kop[]" value="<?= $row['IDKindOfProduct']; ?>"> <?= $row['Name']; ?>
                </label>
                <?php }?>
        </div>
        <div class="form-group">
            <label for="">Rate</label>
            <input type="text" name="Rate" class="form-control" id="exampleInputPassword1" placeholder="Rate">
        </div>
        <div class="form-group">
            <label for="">RatePeople</label>
            <input type="text" name="RatePeople" class="form-control" id="exampleInputPassword1" placeholder="RatePeople">
        </div>
        <div class="form-group">
            <label for="">Status</label><span class="red-require"><strong>*</strong></span>
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
