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
            <input type="text" name="Name" class="form-control" id="dataInput" placeholder="Category Name" value="<?=$this->data['category'][0]['Name']?>" required>
        </div>
        <div class="form-group">
            <label for="">Category Parent</label>
            <select class="form-control" id="categoryParent" name="IDCategoryParent">
                <option value="null">NULL</option>>
                <?php
                foreach ($this->data['listCategory'] as $row) {?>
                <option value = "<?= $row['IDCategory']?>" <?php if($this->data['category'][0]['IDCategoryParent'] == $row['IDCategory']) echo 'selected' ?>> <?= $row['Name']?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Slug</label><span class="red" ><strong> * </strong></span>
            <input type="text" name="Slug" class="form-control" id="dataInput" placeholder="Slug" value="<?=$this->data['category'][0]['Slug']?>"required>
        </div>

        <div class="form-group">
            <label for="">Order Category</label>
            <input type="number" name="OrderCategory" class="form-control" id="dataInput" placeholder="Order Category" value="<?=$this->data['category'][0]['OrderCategory']?>">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" rows="5" id="dataInput" placeholder="Description" name="Description"><?=$this->data['category'][0]['Description']?></textarea>
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
</form>