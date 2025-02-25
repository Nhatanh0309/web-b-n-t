<table>
    <tr>
        <th>IMG</th>
        <th style="width: 30px;">ID</th>
        <th style="width: 120px;">Tên Hãng</th>
        <th>-----</th>
        <th>-----</th>
    </tr>
    <?php
    ?>
    <tr>
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <td class="colpro"><input type="file" name="uploadFile"></td>
            <td class="colpro"><input type="text" name="idhang" placeholder="Để Trống"></td>
            <td class="colpro"><input type="text" name="tenhang"></td>
            <td class="colpro"><button name="ishang" class="cn plush"><i class="fas fa-plus"></i></button></td>
        </form>
    </tr>
    <?php
    $sql = "SELECT * FROM hangsx";
    $query = mysqli_query($conn, $sql); //lay result trong database dk ket noi

    $i = 1;
    while ($row = mysqli_fetch_array($query)) { //tao mang ket qua vaf in ra
        echo "<tr>";
    ?>
        <form action="update.php" method="POST">
            <td class="colpro"><img src="../<?php echo $row['img'] ?>" alt="<?Php echo $row['tenhang'] ?>" width="100px" height="35px" style="border-radius: 10px;"></td>
            <td class="colpro"><input type="text" name="id" value="<?Php echo $row['id_hang'] ?>"></td>
            <td class="colpro"><input type="text" name="tenhang" value="<?Php echo $row['tenhang'] ?>"></td>
            <td class="colpro"><button name="uphang" class="cn cnnn"><i class="fas fa-edit"></i></button>
            </td>
        </form>
        <td class="colpro">
            <a href="?go=delete&table=hang&id=<?php echo $row['id_hang'] ?>"><button class="cn cnn"><i class="fas fa-trash"></i></button></a>
        </td>
    <?php
        $i++;
        echo "</tr>";
    }
    ?>
</table>