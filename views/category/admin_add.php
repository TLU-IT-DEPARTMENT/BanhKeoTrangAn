<style>
    .red{
        color: red;
    }
    .ra{

    }
</style>
<form role="form" method="post">
    <div class="box-body">
        <div class="form-group">
            <label for="">Category Name</label><span class="red" ><strong> * </strong></span>
            <input type="text" name="Name" class="form-control" id="dataInput" placeholder="Category Name" required>
        </div>
        <div class="form-group">
            <label for="">Category Parent</label>
            <select class="form-control" id="categoryParent" name="IDCategoryParent">
                <option value="null">NULL</option>>
                <?php
                foreach ($this->data['listCategory'] as $row) {?>
                <option value = "<?= $row['IDCategory']?>"> <?= $row['Name']?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Slug</label><span class="red" ><strong> * </strong></span>
            <input type="text" name="Slug" class="form-control" id="dataInput" placeholder="Slug" required>
        </div>

        <div class="form-group">
            <label for="">Order Category</label>
            <input type="number" name="OrderCategory" class="form-control" id="dataInput" placeholder="Order Category">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" rows="5" id="dataInput" placeholder="Description" name="Description"></textarea>
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <select class="form-control" id="categoryStatus" name="Status">
                <option value="enable">Enable</option>
                <option value="disable">Disable</option>
            </select>
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
</form>