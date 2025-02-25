<div class="product" style="margin-top:170px">
    <style>
        p {
            margin-left: 40%;
        }
    </style>
    <?php
    if (isset($_SESSION['search']['noti'])) {
        echo $_SESSION['search']['noti'];
    } else {
        $search = $_SESSION['search']['data'];
        $query = "SELECT * FROM product Where tensp LIKE '%$search%'";
        $sql = mysqli_query($conn, $query);
        $num = mysqli_num_rows($sql);
        if ($num > 0 && $search != "") {
            echo "<p>$num ket qua tra ve voi tu khoa <b>$search</b></p><br>";
            while ($row = mysqli_fetch_array($sql)) {
    ?>
                <div class="container">
                    <a href="?goto=detailproduct&idsp=<?php echo $row['id_product'] ?>">
                        <img src="<?php echo $row['img'] ?>" alt="Avatar" class="image">
                        <div align="center">
                            <h4 style="color: red"><?php echo $row['tensp'] ?></h4>
                            <h5 style="color: blue;"><?php echo $row['gia'] ?>.000 Vnd</h5>
                    </a>
                    <?php if (isset($_SESSION['id_user'])) { ?>
                        <a href="./vnpay_php/index.php?tien=<?php echo $row['gia'] ?>&idpro=<?php echo $row['id_product'] ?>&iduser=<?php echo $_SESSION['id_user'] ?>">
                            <button class="buy">Mua</button>
                        </a>
                    <?php
                    } else { ?>
                        <a href="#" onclick="document.getElementById('id01').style.display='block'""><button class=" buy">Mua</button></a>
                    <?php } ?>
                </div>
</div>
<?php

            }
        }
    }
?>
</div>