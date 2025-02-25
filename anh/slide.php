<div style="margin-top:170px">
    <div class="slideshow-container">
        <?php
        $sql = "SELECT * FROM slide ";
        $query = mysqli_query($conn, $sql);
        $i = 1;
        while ($slide = mysqli_fetch_array($query)) {
        ?>
            <div class="mySlides fade">
                <img src="<?php echo $slide['link'] ?>" style="width:100%; max-height: 540px;">
            </div>
        <?php
            $i++;
        }
        ?>

    </div>
    <script>
        var slideIndex = 0;
        showSlides();
    </script>
</div>