<style>
    
    
</style>
<form role="form" method="post">
    <div class="box-body">
        <div class="form-group">
            <label for="">UserName</label>
            <input type="text" name="Name" class="form-control" id="exampleInputEmail1" placeholder="UserName">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="">Full Name</label>
            <input type="text" name="Fullname" class="form-control" id="exampleInputPassword1" placeholder="Fullname">
        </div>
        
        <div class="form-group">
            <label for="">Birthday</label>
            <input type="date" name="Birthday" class="form-control" id="exampleInputPassword1" placeholder="Birthday">
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" name="Address" class="form-control" id="exampleInputPassword1" placeholder="Address">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="Email" class="form-control" id="exampleInputPassword1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="">Phone Number</label>
            <input type="text" name="PhoneNumber" class="form-control" id="exampleInputPassword1" placeholder="PhoneNumber">
        </div>
        <div class="form-group ">
            <label for="">Gender</label>
            <input type="radio" class="radio-inline" name="Gender" value="0" checked> Male<br>
            <input type="radio" class="radio-inline"name="Gender" value="1"> Female<br>
            <input type="radio" class="radio-inline"name="Gender" value="2"> Other
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <input type="radio" class="radio-inline"name="Status" value="1" checked> Admin<br>
            <input type="radio" class="radio-inline"name="Status" value="0" checked> Member<br>
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>