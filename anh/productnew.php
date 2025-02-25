<style>
    .banner h2 {
        color: red;
    }

    .nnhay {
        display: block;
        float: left;
    }
</style>
<div class="banner">
    <p>
    <div style="font-size: 30px" align="center">
        <script type="text/javascript">
            farbbibliothek = new Array();
            farbbibliothek[0] = new Array("#FF0000", "#FF1100", "#FF2200", "#FF3300", "#FF4400", "#FF5500", "#FF6600", "#FF7700", "#FF8800", "#FF9900", "#FFaa00", "#FFbb00", "#FFcc00", "#FFdd00", "#FFee00", "#FFff00", "#FFee00", "#FFdd00", "#FFcc00", "#FFbb00", "#FFaa00", "#FF9900", "#FF8800", "#FF7700", "#FF6600", "#FF5500", "#FF4400", "#FF3300", "#FF2200", "#FF1100");
            farbbibliothek[1] = new Array("#00FF00", "#000000", "#00FF00", "#00FF00");
            farbbibliothek[2] = new Array("#00FF00", "#FF0000", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00", "#00FF00");
            farbbibliothek[3] = new Array("#FF0000", "#FF4000", "#FF8000", "#FFC000", "#FFFF00", "#C0FF00", "#80FF00", "#40FF00", "#00FF00", "#00FF40", "#00FF80", "#00FFC0", "#00FFFF", "#00C0FF", "#0080FF", "#0040FF", "#0000FF", "#4000FF", "#8000FF", "#C000FF", "#FF00FF", "#FF00C0", "#FF0080", "#FF0040");
            farbbibliothek[4] = new Array("#FF0000", "#EE0000", "#DD0000", "#CC0000", "#BB0000", "#AA0000", "#990000", "#880000", "#770000", "#660000", "#550000", "#440000", "#330000", "#220000", "#110000", "#000000", "#110000", "#220000", "#330000", "#440000", "#550000", "#660000", "#770000", "#880000", "#990000", "#AA0000", "#BB0000", "#CC0000", "#DD0000", "#EE0000");
            farbbibliothek[5] = new Array("#000000", "#000000", "#000000", "#FFFFFF", "#FFFFFF", "#FFFFFF");
            farbbibliothek[6] = new Array("#0000FF", "#FFFF00");
            farben = farbbibliothek[0];

            function farbschrift() {
                for (var b = 0; b < Buchstabe.length; b++) {
                    document.all["a" + b].style.color = farben[b]
                }
                farbverlauf()
            }

            function string2array(b) {
                Buchstabe = new Array();
                while (farben.length < b.length) {
                    farben = farben.concat(farben)
                }
                k = 0;
                while (k <= b.length) {
                    Buchstabe[k] = b.charAt(k);
                    k++
                }
            }

            function divserzeugen() {
                for (var b = 0; b < Buchstabe.length; b++) {
                    document.write("<span id='a" + b + "' class='a" + b + "'>" + Buchstabe[b] + "</span>")
                }
                farbschrift()
            }
            var a = 1;

            function farbverlauf() {
                for (var b = 0; b < farben.length; b++) {
                    farben[b - 1] = farben[b]
                }
                farben[farben.length - 1] = farben[-1];
                setTimeout("farbschrift()", 100)
            }
            var farbsatz = 1;

            function farbtauscher() {
                farben = farbbibliothek[farbsatz];
                while (farben.length < text.length) {
                    farben = farben.concat(farben)
                }
                farbsatz = Math.floor(Math.random() * (farbbibliothek.length - 0.0001))
            }
            setInterval("farbtauscher()", 5000);

            text = "Sản Phẩm Mới"; //h
            string2array(text);
            divserzeugen();
            //document.write(text);
        </script>
    </div>
    </p>
</div>
<div class="product">
    <?php
    include("connect.php");
    $sql = "SELECT * FROM product ORDER BY id_product DESC LIMIT 12";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <div class="container">
            <a href="?goto=detailproduct&idsp=<?php echo $row['id_product'] ?>">
                <img class="zoom" src="<?php echo $row['img'] ?>" alt="Avatar">
                <div>
                    <h4 class="namepro" style="color: red"><?php echo $row['tensp'] ?></h4>
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
                <a href="#" onclick="document.getElementById('id01').style.display='block'""><button class=" buy">Mua</i></button></a>
            <?php } ?>
            <div class="ov nnhay"><img src="https://eco.hcmuaf.edu.vn/data/new.png" width="40px" height="24px"></div>
        </div>

</div>
<?php
    }
?>
<script type="text/javascript">
    showHide();

    function show() {
        var a = document.getElementsByClassName("nnhay");
        var i;
        for (i = 0; i < a.length; i++) {
            a[i].style.display = "block";
        }
    }

    function hide() {
        var a = document.getElementsByClassName("nnhay");
        var i;
        for (i = 0; i < a.length; i++) {
            a[i].style.display = "none";
        }
    }
    var start = 0;

    function showHide() {

        if (start == 0) {
            show();
            start = 1;
        } else {
            hide();
            start = 0;
        }
        setTimeout(showHide, 300);
    }
</script>

</div>
<div align="center">
    <p>
    <h2 style="color: red;">Sản Phẩm Đang Giảm Giá</h2>
    </p>
</div>
<div class="product">
    <?php
    include("connect.php");
    $sql = "SELECT * FROM product WHERE sale >0";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <div class="container">
            <a href="?goto=detailproduct&idsp=<?php echo $row['id_product'] ?>">
                <img class="zoom" src="<?php echo $row['img'] ?>" alt="Avatar">
                <div>
                    <h4 class="namepro" style="color: red"><?php echo $row['tensp'] ?></h4>
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