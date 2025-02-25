<style>
    .notifi {
        position: relative;
    }

    .notifi .badge {
        position: absolute;
        top: -5px;
        left: 30px;
        padding: 0px 6px;
        border-radius: 50%;
        background-color: red;
        color: white;
    }
</style>
<?php
if(isset($_SESSION['id_user'])){
$iduser = $_SESSION['id_user'];
$sql="SELECT * FROM cart WHERE id_user ='$iduser' AND status ='0'";
$query = mysqli_query($conn,$sql);
$i=0;
$sol=0;
while($row=mysqli_fetch_array($query)){
$sol= $sol+$row['soluong'];
$i++;
}
}else {
    $sol=0;
}
?>
<div id="mySidenav" class="sidenav">
    <a href="#" id="about" class="notifi" onclick="alert('Thông Báo Đang Phát Triển')"><i class="fas fa-bell"></i><span class="badge">3</span></a>
    <a href="?goto=cart" id="blog" class="notifi"><i class="fas fa-shopping-cart"></i><span class="badge"><?php echo $sol ?></span></a>
    <a href="?goto=lienhe" id="projects" onclick="gotoBottom()"><i class="fas fa-phone-alt"></i></a>
    <a href="?goto=blog" id="contact"><i class="fas fa-blog"></i></a>
</div>
<!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
<script>
    // function gotoBottom() {
    //     scrollingElement = (document.scrollingElement || document.body)

    //     $(scrollingElement).animate({
    //         scrollTop: document.body.scrollHeight
    //     }, 500);
    // }
</script>