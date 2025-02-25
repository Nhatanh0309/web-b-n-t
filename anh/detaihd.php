<?php
$iduser = $_SESSION['id_user'];
$idhd = $_GET['idhd'];
$sql = "SELECT * FROM cart WHERE id_user ='$iduser' AND id_hoadon ='$idhd'";
$query = mysqli_query($conn, $sql);
?>

<div style="font-size: 30px;margin-top:170px" align="center">
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

        text = "Chi Tiết Hóa Dơn Số :<?php echo $idhd ?>"; //h
        string2array(text);
        divserzeugen();
        //document.write(text);
    </script>
</div>
<table>
    <tr>
        <th>Hình Ảnh</th>
        <th>Tên</th>
        <th>Giá</th>
        <th>Khuyến Mại</th>
        <th>Số Lượng</th>
        <th>Thành Tiền</th>

    </tr>
    <?php
    $total = 0;
    while ($row = mysqli_fetch_array($query)) {
        $idpro = $row['id_product'];
        $sqlde = "SELECT * FROM product WHERE id_product ='$idpro'";
        $queryp = mysqli_query($conn, $sqlde);
        $rowp = mysqli_fetch_array($queryp);
        $kq = $rowp['gia'] * $row['soluong'] * (100 - $rowp['sale']) / 100;
    ?>
        <tr>

            <td align="center" class="cartpro"><img src="<?php echo $rowp['img'] ?>" width="150px"></td>
            <td align="center" class="cartpro"><?php echo $rowp['tensp'] ?></td>
            <td align="center" class="cartpro"><?php echo $rowp['gia'] ?>.000Vnd</td>
            <td align="center" class="cartpro"><?php echo $rowp['sale'] ?>%</td>
            <td align="center" class="cartpro"><?php echo $row['soluong'] ?></td>
            <td align="center" class="cartpro"><?php echo $kq ?>.000Vnd</td>
        </tr>
    <?php
        $total = $total + $kq;
    }
    ?>

</table>
<div class="cncart">
    <div align="center">Tổng Tiền :<?php echo $total ?>.000Vnd</div>
    <table></table>
</div>

<style>
    table {
        width: 77%;
        margin: 0 auto;
    }

    th {
        border: 1px solid black;
    }

    td {
        border: 1px solid black;
    }

    .cartpro {
        width: 11%;
        align-items: center;
    }

    .cncart {
        width: 75%;
        margin: 0 auto;
        border-radius: 10px;
    }

    .btcart {
        width: 150px;
        padding: 5px 0;
    }

    .incart {
        max-width: 50px;
    }
</style>