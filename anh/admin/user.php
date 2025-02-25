<div><a href="?go=nd"><button class="plush"><i class="fas fa-plus-circle"></i></button></a></div>
<table>
    <tr>
        <th>Avata</th>
        <th>ID</th>
        <th>User</th>
        <th>Pass</th>
        <th>Name</th>
        <th>Gmail</th>
        <th>Level</th>
        <th>----</th>
    </tr>
    <?php
    $sql = "SELECT * FROM user";
    $query = mysqli_query($conn, $sql); //lay result trong database dk ket noi

    $i = 1;
    while ($row = mysqli_fetch_array($query)) { //tao mang ket qua vaf in ra
        echo "<tr>";
    ?>
        <form action="update.php" method="POST">
            <td class="colpro"><img src="../<?php echo $row['img'] ?>" alt="Avata" width="45px" height="45px" style="border-radius: 50%;"></td>
            <td class="colpro"><input type=" text" name="id" style="width:30px" value="<?Php echo $row['id_user'] ?>"></td>
            <td class="colpro"><input type=" text" name="user" value="<?Php echo $row['username'] ?>" style="width: 100px;"></td>
            <td class="colpro"><input type=" text" name="pass" value="<?Php echo $row['pass'] ?>"></td>
            <td class="colpro"><input type=" text" name="name" value="<?Php echo $row['name'] ?>"></td>
            <td class="colpro"><input type=" text" name="gmail" value="<?Php echo $row['gmail'] ?>"></td>
            <td class="colpro"><input type=" text" name="level" value="<?Php echo $row['level'] ?>" style="width: 50px;"></td>
            <td class="colpro"><button name="upuser" class="cn cnnn"><i class="fas fa-edit"></i></button>
            </td>
        </form>
        <td class="colpro">
            <a href="?go=delete&table=user&id=<?php echo $row['id_user']?>"><button class="cn cnn"><i class="fas fa-trash"></i></button></a>
        </td>
    <?php
        $i++;
        echo "</tr>";
    }
    ?>
</table>