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
            <label for="">Kind of Product Name</label><span class="red" ><strong> * </strong></span>
            <input type="text" name="Name" class="form-control" id="dataInput" placeholder="KindOfProduct Name" required>
        </div>
        <div class="form-group">
            <label for="">Kind of Product Parent</label>
            <select class="form-control" id="kindofproductParent" name="IDKindOfProductParent">
                <option value="null">NULL</option>>
                <?php
                foreach ($this->data['listKindOfProduct'] as $row) {?>
                <option value = "<?= $row['IDKindOfProduct']?>"> <?= $row['Name']?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Slug</label><span class="red" ><strong> * </strong></span>
            <input type="text" name="Slug" class="form-control" id="dataInput" placeholder="Slug" required>
        </div>

        <div class="form-group">
            <label for="">Order Kind Of Product</label>
            <input type="number" name="OrderKindOfProduct" class="form-control" id="dataInput" placeholder="Order KindOfProduct">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" rows="5" id="dataInput" placeholder="Description" name="Description"></textarea>
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <select class="form-control" id="kindofproductStatus" name="Status">
                <option value="enable">Enable</option>
                <option value="disable">Disable</option>
            </select>
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
</form>