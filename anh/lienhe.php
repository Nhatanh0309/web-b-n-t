<style type="text/css">
    .contact__nd {
        width: 45%;
    }

    .contact__map {
        width: 45%;
    }

    .coll {
        float: left;
    }

    .contact__nhap {
        width: 100%;
        padding: 3px;
        border-radius: 8px;
    }

    .coll+.coll {
        margin-left: 30px;
    }

    .contact__nhap+.contact__nhap {
        margin-top: 8px;
    }

    .gui {
        padding: 5px;
        background-color: red;
        color: white;
    }

    .gui:hover {
        opacity: 0.5;
    }

    .contact::after {
        content: "";
        display: table;
        clear: both;
    }
</style>



<div class="contact" style="margin-top:170px">
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

                text = "Phản Hồi Của Bạn"; //h
                string2array(text);
                divserzeugen();
                //document.write(text);
                tinymce.init({
                    selector: '#tinymce-editor'
                });
            </script>
        </div>
        <div class="contact__nd coll">
            <h3 style="text-align:center">
                GỬI PHẢN HỒI
            </h3>
            <form>
                <strong class="contact__nhap">
                    Họ và Tên
                </strong>
                <input class="contact__nhap" type="" name="" placeholder="Nguyễn Văn A">
                <strong class="contact__nhap">
                    Gmail
                </strong>
                <input class="contact__nhap" type="" name="" placeholder="xxxxxx@gmail.com">
                <strong class="contact__nhap">
                    Số Điện Thoại
                </strong>
                <input class="contact__nhap" type="" name="" placeholder="09**********">
                <strong class="contact__nhap">
                    Tiêu Đề
                </strong>
                <input class="contact__nhap" type="" name="">
                <strong class="contact__nhap">
                    Nội Dung
                </strong>
                <textarea id="tinymce-editor" class="contact__nhap" name="content" placeholder="Đây là nội dung..." rows="15" cols="60"></textarea>
                <input class="contact__nhap gui" type="submit" name="" value="Gửi">
            </form>

        </div>
        <div class="contact__map coll">
            <h3 style="text-align:center">
                THÔNG TIN LIÊN HỆ
            </h3>
            <div>
                <p class="contact__nhap">
                    <strong>
                        Địa chỉ:
                    </strong>
                    235 Hoàng Quốc Việt, Cổ Nhuế, Bắc Từ Liêm, Hà Nội
                </p>
                <p class="contact__nhap">
                    <strong>
                        Hotline:
                    </strong>
                    <a href="tel:085.949.8558" class="contact">
                        0999999999
                    </a>
                </p>
                <p class="contact__nhap">
                    <strong>
                        Email:
                    </strong>
                    <a href="mailto:xxxxxx@gmail.com" class="contact">
                        xxxxxx@gmail.com
                    </a>
                </p>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.657060482346!2d105.78272751445485!3d21.046403592552664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abb158a2305d%3A0x5c357d21c785ea3d!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyDEkGnhu4duIEzhu7Fj!5e0!3m2!1svi!2s!4v1632144586812!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
</div>