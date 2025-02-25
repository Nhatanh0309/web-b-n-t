<table>
    <tr>
        <th>ID</th>
        <th>Tên Danh Mục</th>
        <th>-----</th>
        <th>-----</th>
    </tr>
    <tr>
        <form action="insert.php" method="POST">
            <td class="colpro"><input type="text" name="iddm"></td>
            <td class="colpro"><input type="text" name="tendm"></td>
            <td class="colpro"><button class="cn plush" name="isdm"><i class="fas fa-edit"></i></button></td>
        </form>
    </tr>
    <?php
    $sql = "SELECT * FROM danhmuc";
    $query = mysqli_query($conn, $sql); //lay result trong database dk ket noi

    $i = 1;
    while ($row = mysqli_fetch_array($query)) { //tao mang ket qua vaf in ra
        echo "<tr>";
    ?>
        <form action="update.php" method="POST">
            <td class="colpro"><input type="text" name="id" value="<?Php echo $row['id_danhmuc'] ?>"></td>
            <td class="colpro"><input type="text" name="tendm" value="<?Php echo $row['tendm'] ?>"></td>
            <td class="colpro"><button name="updm" class="cn cnnn"><i class="fas fa-edit"></i></button>
            </td>
        </form>
        <td class="colpro">
            <a href="?go=delete&table=danhmuc&id=<?php echo $row['id_danhmuc'] ?>"><button class="cn cnn"><i class="fas fa-trash"></i></button></a>
        </td>
    <?php
        $i++;
        echo "</tr>";
    }
    ?>
</table>