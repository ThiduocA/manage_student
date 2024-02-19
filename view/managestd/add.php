<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form thêm sinh viên</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h3 class="text-uppercase text-center my-5">Form chỉnh sửa</h3>
        <form action="../../model/insert.php" method="post">
            Mã sinh viên: <input type="text" name="msv" class="form-control" required="">
            Họ tên: <input type="text" name="name" class="form-control" required="" value="">
            Lớp: <input type="text" name="class_name" id="" class="form-control" required="" value="">
            <button class="btn btn-block btn-info my-5">Cập nhật thông tin</button>
        </form>
    </div>
</body>

</html>