<div class="text-center">
    <h2>Cập nhật thông tin khách hàng</h2>
</div>
<form method="post" action="./index.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $customer->id; ?>"/>
    <div class="row">
        <div class="col" >
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $customer->name; ?>" class="form-control"/>
        </div>
        <div class="col">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $customer->email; ?>" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label>Address</label>
        <textarea name="address" class="form-control"><?php echo $customer->address; ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-info"/>
        <a href="index.php" class="btn btn-warning">Cancel</a>
    </div>
</form>
