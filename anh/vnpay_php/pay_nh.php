<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tạo mới đơn hàng</title>
    <!-- Bootstrap core CSS -->
    <link href="./assets/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="./assets/jumbotron-narrow.css" rel="stylesheet">
    <script src="./assets/jquery-1.11.3.min.js"></script>
</head>

<body>
    <?php
    session_start();
    include('../connect.php');
    $idhd = $_GET['idhd'];
    $iduser = $_SESSION['id_user']; //user nguoi dung
    $sql = "SELECT * FROM cart WHERE id_user ='$iduser'  AND status = '0'";
    $query = mysqli_query($conn, $sql); //lay cac san pham trong gio
    $total = 0;
    while ($row = mysqli_fetch_array($query)) {
        $idpro = $row['id_product'];
        $sqlp = "SELECT * FROM product WHERE id_product = '$idpro'";
        $queryp = mysqli_query($conn, $sqlp);
        $rowp = mysqli_fetch_array($queryp);
        $gia = $rowp['gia'] *  $row['soluong'] * (100 - $rowp['sale']) / 100;
        $total += $gia;
    }
    ?>
    <div class="container">
        <div class="header clearfix">
            <h3 class="text-muted">
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

                        text = "Thông Tin Thanh Toán"; //h
                        string2array(text);
                        divserzeugen();
                        //document.write(text);
                    </script>
                </div>
                </p>
            </h3>
        </div>
        <h3>Tạo mới đơn hàng</h3>
        <div class="table-responsive">
            <form action="./xuli.php" method="post">

                <div class="form-group">
                    <label for="order_id">Mã Hóa Đơn</label>
                    <input class="form-control" name="order_id" type="text" value="<?php echo $idhd ?>" />
                </div>
                <div class="form-group">
                    <label for="amount">Tổng Tiền</label>
                    <input class="form-control" name="amount" type="number" value="<?php echo $total * 1000 ?>" />
                </div>
                <div class="form-group">
                    <label for="order_desc">Họ Và Tên Người Nhận</label>
                    <textarea class="form-control" cols="20" name="order_desc" rows="2">Bạn Có Thể Ghi Chi Tiết</textarea>
                </div>
                <div class="form-group">
                    <label>Số điện thoại (*)</label>
                    <input class="form-control" name="txt_billing_mobile" type="text" value="0934998386" />
                </div>
                <div class="form-group">
                    <label>Địa chỉ (*)</label>
                    <input class="form-control" name="txt_billing_addr1" type="text" value="22 Lang Ha" />
                </div>

                <!-- <button type="submit" class="btn btn-primary" id="btnPopup">Thanh toán Post</button> -->
                <button type="submit" name="redirect" style="background-color: blue; color:aliceblue;border-radius:8px;padding:8px">Mua</button>

            </form>
        </div>
        <p>
            &nbsp;
        </p>
        <footer class="footer">
            <p>&copy; VNPAY <?php echo date('Y') ?></p>
        </footer>
    </div>




</body>

</html>