<?php
if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới khách hàng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="text-center">
    <h1>Thêm mới khách hàng</h1>
</div>
<div class="col-12">
    <form method="post" action="./index.php?page=add">
        <div class="row">
            <div class="col">
                <label>Tên khách hàng</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập tên" required>
            </div>
            <div class="col">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Nhập mail" required>
            </div>
        </div>
        <div class="form-group">
            <label>Địa chỉ</label>
            <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
        <a href="./index.php" class="btn btn-warning">Hủy</a>
    </form>
</div>
</body>
</html>