<?php
if (isset($_GET['idblog'])) {
    $id = $_GET['idblog'];
}
$sql = "SELECT * FROM blog WHERE id_blog=$id";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>
<div class="product" style="margin-top:170px">
    <div>
        <h3 style="margin-left: 10%;">-<?php echo $row['title'] ?></h3>
    </div>
    <div align="center"><img src="<?php echo $row['img'] ?>" alt="" width="60%" height="auto"></div>
    <div>
        <p class="doanv"><?php echo $row['content'] ?></p>
    </div>

</div>
<style>
    .doanv {
        font-size: 18px;
        max-width: 65%;
        margin: 20px auto;
        text-align: left;
    }
</style>
<h2 align="center" style="color: red;">Bài Viết Khác</h2>
<div class="product" style="margin-top:10px">
    <?php

    $sql = "SELECT * FROM blog";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <div class="container">
            <a href="?goto=detaiblog&idblog=<?php echo $row['id_blog'] ?>">
                <div align="center">
                    <img src="<?php echo $row['img'] ?>" width="260px" height="200px">

                    <h5 style="color: red"><?php echo $row['title'] ?></h5>
            </a>

        </div>
</div>
<?php
    }
?>
</div>
<?php
include("productnew.php");
?>