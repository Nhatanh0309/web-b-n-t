<div><a href="?go=insertsp"><button class="plush"><i class="fas fa-plus-circle"></i></button></a></div>
<table>
    <style type="text/css">

    </style>
    <tr>
        <th>Xóa</th>
        <th>Sửa</th>
        <th>img</th>
        <th>ID</th>
        <th>Tên Sản Phẩm</th>
        <th>Giá</th>
        <th>Sale</th>
        <th>Dung Lượng</th>
        <th>Kích Thước</th>
        <th>Trọng Lượng</th>
        <th>Chip</th>
        <th>Hệ điều hành</th>
        <th>Cam sau</th>
        <th>Cam trước</th>
        <th>Màn hình</th>
        <th>Pin</th>
    </tr>
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $rowPerPage = 10;
    $perRow = $page * $rowPerPage - $rowPerPage;
    $sql = "SELECT * FROM product LIMIT $perRow,$rowPerPage";
    $query = mysqli_query($conn, $sql); //lay result trong database dk ket noi

    $i = 1;
    while ($row = mysqli_fetch_array($query)) { //tao mang ket qua vaf in ra
        echo "<tr>";
    ?>
        <td class="colpro"><a href="?go=delete&table=pro&id=<?php echo $row['id_product'] ?>"><button class="cn cnn"><i class="fas fa-trash"></i></button></a></td>
        <form action="update.php" method="POST">
            <td class="colpro"><button name="uppro" class="cn cnnn"><i class="fas fa-edit"></i></button>

            </td>
            <td class="colpro"><img src="../<?php echo $row['img'] ?>" alt="<?php echo $row['tensp'] ?>" width="100px" height="70px"></td>
            <td class="colpro"><input type="text" name="id" value="<?php echo $row['id_product'] ?>"></td>
            <td class="colpro"><input type="text" name="tensp" value="<?php echo $row['tensp'] ?>"></td>
            <td class="colpro"><input type="text" name="gia" value="<?php echo $row['gia'] ?>"></td>
            <td class="colpro"><input type="text" name="sale" value="<?php echo $row['sale'] ?>">%</td>
            <td class="colpro"><input type="text" name="dungt" value="<?php echo $row['dungt'] ?>"></td>
            <td class="colpro"><input type="text" name="kicht" value="<?php echo $row['kicht'] ?>"></td>
            <td class="colpro"><input type="text" name="trongl" value="<?php echo $row['trongl'] ?>"></td>
            <td class="colpro"><input type="text" name="ccyen" value="<?php echo $row['chip'] ?>"></td>
            <td class="colpro"><input type="text" name="ktbanhxe" value="<?php echo $row['hedieuhanh'] ?>"></td>
            <td class="colpro"><input type="text" name="dongco" value="<?php echo $row['camtruoc'] ?>"></td>
            <td class="colpro"><input type="text" name="hopso" value="<?php echo $row['camsau'] ?>"></td>
            <td class="colpro"><input type="text" name="phanh" value="<?php echo $row['manhinh'] ?>"></td>
            <td class="colpro"><input type="text" name="csmax" value="<?php echo $row['pin'] ?>"></td>
        </form>

    <?php
        $i++;
        echo "</tr>";
    }
    ?>
</table>
<div>
    <?php
    $sql = "SELECT * FROM product";
    $query = mysqli_query($conn, $sql);
    $rowtotal = mysqli_num_rows($query);
    $totalPage = ceil($rowtotal / $rowPerPage);
    $listPage = "";
    for ($a = 1; $a <= $totalPage; $a++) {
        if ($a == $page) {
            echo '<a class="active">' . $a . '</a>';
        } else {
            echo '<a class="pt" href="?go=sanpham&page=' . $a . '">' . $a . '</a>';
        }
    }
    if ($page == 1) {
        $page = $totalPage;
        echo '<a class="pt" href="?go=sanpham&page=' . $page . '">&laquo;</a>';
    } else {
        $page = $page - 1;
        echo '<a class="pt" href="?go=sanpham&page=' . $page . '">&laquo;</a>';
    }

    ?>
</div>