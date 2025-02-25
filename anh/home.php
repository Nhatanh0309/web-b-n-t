<?php
include("productnew.php");
?>
<div>

    <h2 style="margin-left : 40%;color:red">Tất Cả Các Sản Phẩm</h2>

</div>
<div class="product">
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $rowPerPage = 24;
    $perRow = $page * $rowPerPage - $rowPerPage;
    $sql = "SELECT * FROM product LIMIT $perRow,$rowPerPage";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <div class="container">
            <a href="?goto=detailproduct&idsp=<?php echo $row['id_product'] ?>">
                <img class="zoom" src="<?php echo $row['img'] ?>" alt="Avatar">
                <div align="center">
                    <h4 style="color: red"><?php echo $row['tensp'] ?></h4>
                    <?php if ($row['sale'] != 0) { ?>
                        <h5 class="giapro" style="color: red;">
                            <del style="color: gray;"><?php echo $row['gia'] ?>.000 Vnd</del>|| Giảm :<?php echo $row['sale'] ?>%
                        </h5><?php } ?>
                    <h5 class="giapro" style="color: blue;"><?php echo $row['gia'] - $row['gia'] * $row['sale'] / 100 ?>.000 Vnd</h5>
            </a>
            <?php if (isset($_SESSION['id_user'])) { ?>
                <a href="./addcart.php?idpro=<?php echo $row['id_product'] ?>">
                    <button class="buy"><i class="fas fa-cart-plus"></i></button>
                </a>
            <?php
            } else { ?>
                <a href="#" onclick="document.getElementById('id01').style.display='block'""><button class=" buy">Mua</button></a>
            <?php } ?>

        </div>

</div>
<?php
    }
?>
</div>
<div>
    <?php
    $sql = "SELECT * FROM product ";
    $query = mysqli_query($conn, $sql);
    $rowtotal = mysqli_num_rows($query);
    $totalPage = ceil($rowtotal / $rowPerPage);
    $listPage = "";
    for ($a = 1; $a <= $totalPage; $a++) {
        if ($a == $page) {
            echo '<a class="active">' . $a . '</a>';
        } else {
            echo '<a class="pt" href="?go=home&page=' . $a . '">' . $a . '</a>';
        }
    }
    if ($page == 1) {
        $page = $totalPage;
        echo '<a class="pt" href="?go=home&page=' . $page . '">&laquo;</a>';
    } else {
        $page = $page - 1;
        echo '<a class="pt" href="?go=home&page=' . $page . '">&laquo;</a>';
    }

    ?>
</div>