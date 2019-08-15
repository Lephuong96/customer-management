<div class="text-center">
    <h2>Danh sách khách hàng</h2>
</div>
<div class="row">
    <div class="col-12 col-md-8">
        <a href="index.php?page=add">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="button">Thêm mới</button>
        </a>
    </div>
</div>
<br>
<div>
    <table class="table table-striped text-center">
        <thead>
        <tr>
            <th>STT</th>
            <th>Tên khách hàng</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Thao tác</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($customers as $key => $customer): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $customer->name ?></td>
                <td><?php echo $customer->email ?></td>
                <td><?php echo $customer->address ?></td>
                <td>
                    <a href="./index.php?page=edit&id=<?php echo $customer->id ?>" class="btn btn-info">Sửa</a>
                    <a href="./index.php?page=delete&id=<?php echo $customer->id; ?>" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>