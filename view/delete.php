<h2>Bạn chắc chắn muốn xóa khách hàng <?php echo $customer->name; ?>?</h2>
<form action="./index.php?page=delete" method="post">
    <input type="hidden" name="id" value="<?php echo $customer->id; ?>"/>
    <div class="form-group">
        <input type="submit" value="Xóa" class="btn btn-danger"/>
        <a class="btn btn-warning" href="index.php">Hủy</a>
    </div>
</form>
