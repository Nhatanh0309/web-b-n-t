<table>
    <tr>
        <th>IMG</th>
        <th>-----</th>
    </tr>
    <tr>
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <td class="colpro"><input type="file" name="uploadFile"></td>
            <td class="colpro"><button class="cn plush" name="isdm"><i class="fas fa-plus-circle"></i></button>
            </td>
        </form>
    </tr>
    <?php
    $sql = "SELECT * FROM slide";
    $query = mysqli_query($conn, $sql); //lay result trong database dk ket noi

    $i = 1;
    while ($row = mysqli_fetch_array($query)) { //tao mang ket qua vaf in ra
        echo "<tr>";
    ?>

        <td class="colpro"><img src="../<?php echo $row['link'] ?>" width="100px" style="border-radius: 10px;"></td>
        <td class="colpro"><a href="?go=delete&table=slide&id=<?php echo $row['id_slide'] ?>"><button class="cn cnn"><i class="fas fa-trash"></i></button></a></td>
    <?php
        $i++;
        echo "</tr>";
    }
    ?>
</table>