<?php
if (!isset($_SESSION["username"])) {
    header("Location: ../login/loginform.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Quản lý sinh viên</title>

</head>
<?php include "../../model/config.php"; ?>
<?php
$sql = "select id, classname, count(classname) as c from manage_student.tbstudent as std, manage_student.tbclass as cls where std.class_name = cls.classname group by cls.classname, cls.id; ";
$result = mysqli_query($conn, $sql);

?>

<body>
    <div class="main">
        <?php if ($result->num_rows > 0): ?>
            <table border="1" class="table">
                <tr>
                    <td>STT</td>
                    <td>ID</td>
                    <td>Lớp</td>
                    <td>Số lượng sinh viên</td>
                    <td>Chức năng</td>
                </tr>
                <?php $index = 1;
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td>
                            <?= $index;
                            $index++; ?>
                        </td>
                        <td>
                            <?= $row['id'] ?>
                        </td>
                        <td>
                            <?= $row['classname'] ?>
                        </td>
                        <td>
                            <?= $row['c'] ?>
                        </td>
                        <td><button class="manage_btn"><a href="fix.php?id=<?= $row['id'] ?>">Sửa</a></button>
                            <button class="manage_btn"><a onclick="return confirm('Bạn có chắc chắn muốn xóa không?');"
                                    href="../../model/managecls/delete.php?id=<?= $row['id'] ?>">Xóa</a></button>
                        </td>
                    </tr>
                <?php endwhile ?>
            </table>
            <button class="btn btn-success "><a href="add.php" style="color: white">Thêm lớp</a></button>


        </div>
        <!-- <div class="add-btn">

        </div> -->

    <?php else: ?>
        <p>Không có thông tin lớp</p>
    <?php endif; ?>
</body>

</html>

<?php


?>