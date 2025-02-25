<div class="product">
    <?php
    if (isset($_GET['idmau'])) { //truyền theo danh mục
        $idmau = $_GET['idmau'];
        $id = "id_mau =" . $idmau;
        $tv = "idmau=" . $idmau;
    }
    if (isset($_GET['iddungt'])) { //truyền theo danh mục
        $iddungt = $_GET['iddungt'];
        $id = "id_dungt =" . $iddungt;
        $tv = "iddungt=" . $iddungt;
    }
    if (isset($_GET['idhs'])) { //truyền theo danh mục
        $idhs = $_GET['idhs'];
        $id = "id_hopso =" . $idhs;
        $tv = "idhs=" . $idhs;
    }
    if (isset($_GET['iddm'])) { //truyền theo danh mục
        $iddm = $_GET['iddm'];
        $id = "id_danhmuc =" . $iddm;
        $tv = "iddm=" . $iddm;
    }
    if (isset($_GET['idhang'])) { // truyền theo hang
        $idhang = $_GET['idhang'];
        $id = "id_hang =" . $idhang;
        $tv = "idhang=" . $idhang;
        $sqlh = "SELECT * FROM hangsx WHERE id_hang =$idhang";
        $queryh = mysqli_query($conn, $sqlh);
        while ($rowh = mysqli_fetch_array($queryh)) {; ?>
            <div class="hang" align="center">
                <img src="<?php echo $rowh['img'] ?>" width="90%" style="padding: 0 auto;">
                <p>
                <h2>Nhãn Hàng :<?php echo $rowh['tenhang'] ?></h2>
                </>
            </div>
        <?php
        }
    }
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $rowPerPage = 12;
    $perRow = $page * $rowPerPage - $rowPerPage;
    $sql = "SELECT * FROM product WHERE $id LIMIT $perRow,$rowPerPage";
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
            <?php if (isset($_SESSION['id_user'])) {
                $iduser = $_SESSION['id_user'] ?>
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
    $sql = "SELECT * FROM product WHERE $id ";
    $query = mysqli_query($conn, $sql);
    $rowtotal = mysqli_num_rows($query);
    $totalPage = ceil($rowtotal / $rowPerPage);
    $listPage = "";
    for ($a = 1; $a <= $totalPage; $a++) {
        if ($a == $page) {
            echo '<a class="active">' . $a . '</a>';
        } else {
            echo '<a class="pt" href="?go=product&' . $tv . '&page=' . $a . '">' . $a . '</a>';
        }
    }
    if ($page == 1) {
        $page = $totalPage;
        echo '<a class="pt" href="?goto=product&' . $tv . '&page=' . $page . '">&laquo;</a>';
    } else {
        $page = $page - 1;
        echo '<a class="pt" href="?goto=product&' . $tv . '&page=' . $page . '">&laquo;</a>';
    }

    ?>
</div>