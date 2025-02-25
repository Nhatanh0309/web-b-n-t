<div class="product" style="margin-top:170px">
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