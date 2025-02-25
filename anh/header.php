<div id="navbar">
<a class="navara" href="?goto=home" id="logo">APPLE Nhat Anh <i class="fa fa-phone"></i></a>
    <div id="navbar-right">
        <a class="navara" href="#">
            <div class="search-container">
                <form action="search.php" method="$_GET">
                    <input class="inputsearch" type="text" placeholder="Search.." name="search">
                    <button type="submit" name="ok"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </a>
        <a class="navara" href="?goto=home">Home</a>
        <a class="navara" href="#" onclick="openSearch()">Danh Mục</a>
        <?php

        if (isset($_SESSION['id_user'])) {
            echo '<a class="navara" href="?goto=user">';
            echo $_SESSION['name'];
            echo '</a>';
        } else { ?>
            <a class="navara" href="#" onclick="document.getElementById('id01').style.display='block'"">USER</a>
        
        <?php
            include("linlout.php");
        } ?>
    </div>
</div>
<!-- list  -->
<div id="myOverlay" class="overlay">
                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                <div class="overlay-content">
                    <div class="navbar">
                        <div class="dropdown">
                            <button class="dropbtn">Loại 
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <?php
                                $sql = "SELECT * FROM danhmuc";
                                $query = mysqli_query($conn, $sql);
                                $i = 0;
                                while ($rowcategory = mysqli_fetch_array($query)) {
                                ?>
                                    <a class="navara" href="?goto=product&iddm=<?php echo $rowcategory['id_danhmuc'] ?>"><?php echo $rowcategory['tendm'] ?></a>
                                <?php
                                    $i++;
                                }
                                ?>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn">Hãng Điện thoại
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <?php
                                $sql = "SELECT * FROM hangsx";
                                $query = mysqli_query($conn, $sql);
                                $i = 0;
                                while ($rowcategory = mysqli_fetch_array($query)) {
                                ?>
                                    <a class="navara" href="?goto=product&idhang=<?php echo $rowcategory['id_hang'] ?>"><?php echo $rowcategory['tenhang'] ?></a>
                                <?php
                                    $i++;
                                }
                                ?>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn">Hệ điều hành
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <?php
                                $sql = "SELECT * FROM hedieuhanh";
                                $query = mysqli_query($conn, $sql);
                                $i = 0;
                                while ($rowcategory = mysqli_fetch_array($query)) {
                                ?>
                                    <a class="navara" href="?goto=product&idhs=<?php echo $rowcategory['id_hopso'] ?>"><?php echo $rowcategory['tenhs'] ?></a>
                                <?php
                                    $i++;
                                }
                                ?>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn">Ram
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <?php
                                $sql = "SELECT * FROM dungluong";
                                $query = mysqli_query($conn, $sql);
                                $i = 0;
                                while ($rowcategory = mysqli_fetch_array($query)) {
                                ?>
                                    <a class="navara" href="?goto=product&iddungt=<?php echo $rowcategory['id_dungt'] ?>"><?php echo $rowcategory['sodungt'] ?></a>
                                <?php
                                    $i++;
                                }
                                ?>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn">Màu sắc
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">
                                <?php
                                $sql = "SELECT * FROM mau";
                                $query = mysqli_query($conn, $sql);
                                $i = 0;
                                while ($rowcategory = mysqli_fetch_array($query)) {
                                ?>
                                    <a class="navara" href="?goto=product&idmau=<?php echo $rowcategory['id_mau'] ?>"><?php echo $rowcategory['mamau'] ?></a>
                                <?php
                                    $i++;
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
    </div>
    <div id="overUser" class="overUser">
        <span class="closeUser" onclick="closeSearch()" title="Close Overlay">×</span>
        <div class="overlay-content">
            Hello
        </div>
    </div>