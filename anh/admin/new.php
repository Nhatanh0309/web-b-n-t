<div><a href="?go=bvnew"><button class="plush"><i class="fas fa-plus-circle"></i></button></a></div>
<table>
    <tr>
        <th>Hinh Ảnh</th>
        <th>ID</th>
        <th>Title</th>
       
        <th>----</th>
    </tr>
    <?php
    $sql = "SELECT * FROM blog";
    $query = mysqli_query($conn, $sql); //lay result trong database dk ket noi

    $i = 1;
    while ($row = mysqli_fetch_array($query)) { //tao mang ket qua vaf in ra
        echo "<tr>";
    ?>
        <form action="update.php" method="POST">
            <td class="colpro"><img src="../<?php echo $row['img'] ?>" alt="Avata" width="45px" height="45px"></td>
            <td class="colpro"><input type=" text" name="id" style="width:30px" value="<?Php echo $row['id_blog'] ?>"></td>
            <td class="colpro"><input type=" text" name="title" value="<?Php echo $row['title'] ?>" style="width: 100px;"></td>
            <td class="colpro"><button name="upbv" class="cn cnnn"><i class="fas fa-edit"></i></button>
            </td>
        </form>
        <td class="colpro">
            <a href="?go=delete&table=new&id=<?php echo $row['id_blog'] ?>"><button class="cn cnn"><i class="fas fa-trash"></i></button></a>
        </td>
    <?php
        $i++;
        echo "</tr>";
    }
    ?>
</table>