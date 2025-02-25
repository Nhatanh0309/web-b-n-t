<?php
$idsp = $_GET['idsp'];
$tablesp = "product";
$id = "WHERE id_product=$idsp";
function truyvan($conn, $table, $id)
{
    $sql = "SELECT * FROM $table $id";
    $query = mysqli_query($conn, $sql);
    return $query;
}
$datasp = truyvan($conn, $tablesp, $id);
$rowsp = mysqli_fetch_array($datasp); {
?>
    <table style="width: 100%;margin-top:170px">
        <tr>
            <td style="width: 30%;">
                <img src="<?php echo $rowsp['img'] ?>" alt="Avatar" width="300px">
            </td>
            <td>
                <table>
                    <tr>
                        <td style="color: blue;"> Tên điện thoại :<?php echo $rowsp['tensp'] ?></td>
                    </tr>
                    <tr>
                        <td style="color:red">Giá :<?php echo $rowsp['gia'] ?>.000 Vnd</td>
                    </tr>
                    <tr>
                        <td>Dung lượng :<?php echo $rowsp['dungt'] ?></td>
                    </tr>
                    <tr>
                        <td>Kích Thước :<?php echo $rowsp['kicht'] ?></td>
                    </tr>
                    <tr>
                        <td>Trọng Lượng :<?php echo $rowsp['trongl'] ?></td>
                    </tr>
                    <tr>
                        <td>
                            <?php if (isset($_SESSION['id_user'])) { ?>
                                <a href="./addcart.php?idpro=<?php echo $rowsp['id_product'] ?>">
                                    <button style="background-color: red;padding :10px"><i class="fas fa-cart-plus"></i></button>
                                </a>
                            <?php
                            } else { ?>
                                <a href="#" onclick="document.getElementById('id01').style.display='block'""><button class=" buy">Mua</button></a>
                            <?php } ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <table>
                    <tr>
                        <td> Chip :<?php echo $rowsp['chip'] ?></td>
                    </tr>
                    <tr>
                        <td>Hệ điều hành :<?php echo $rowsp['hedieuhanh'] ?></td>
                    </tr>
                    <tr>
                        <td>Cam trước :<?php echo $rowsp['camtruoc'] ?></td>
                    </tr>
                    <tr>
                        <td>Cam sau :<?php echo $rowsp['camsau'] ?></td>
                    </tr>
                    <tr>
                        <td>Màn hình :<?php echo $rowsp['manhinh'] ?></td>
                    </tr>
                    <tr>
                        <td>Pin :<?php echo $rowsp['pin'] ?></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>


<?php
}

include("productnew.php");
?>