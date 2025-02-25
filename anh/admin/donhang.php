<table style="border-color: red;" border="0.5px">
    <tr>
        <th>Hình Ảnh</th>
        <th>Giá</th>
        <th>TK USER</th>
        <th>Trạng Thái</th>
        <th>Họ Tên</th>
        <th>Dịa Chỉ</th>
        <th>Sdt</th>
    </tr>
    <?php
    $sql = "SELECT * FROM hoadon";
    $query = mysqli_query($conn, $sql); //lay result trong database dk ket noi

    $i = 1;
    while ($row = mysqli_fetch_array($query)) { //tao mang ket qua vaf in ra
        echo "<tr>";
    ?>
        <td class="colpro"><?php echo $row['id_hoadon'] ?></td>
        <td class="colpro"><?Php echo $row['total'] ?>.000Vnd</td>
        <td class="colpro"><?Php echo $row['id_user'] ?></td>
        <td class="colpro"><?Php echo $row['status'] ?></td>
        <td class="colpro"><?Php echo $row['hotennn'] ?></td>
        <td class="colpro"><?Php echo $row['diachi'] ?></td>
        <td class="colpro"><?Php echo $row['sdt'] ?></td>
        <?php
        $i++;
        echo "</tr>";
    }
        ?>
</table>