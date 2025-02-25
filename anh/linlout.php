<script type="text/javascript" src="asset/main.js"></script>
<div id="id01" class="modal">
    <div class="form-box">
        <h1> Đăng Nhập </h1>
        <form id="userLogin" method="post" action="login.php">
            <div class="input-box">
                <i class="fas fa-user" style="margin-right: 10px"></i>
                <input class="inputlog" type="text" name="user" placeholder="Username">
            </div>
            <div class="input-box">
                <i class="fas fa-unlock-alt" style="margin-right: 10px"></i>
                <input class="inputlog" type="password" id="passwordin" name="pass" placeholder="Password">
                <span class="eye" onclick="MyFunctionLogin()">
                    <i id="hide1" style=" display: none" class="fas fa-eye"></i>
                    <i id="hide2" class="fas fa-eye-slash"></i>
                </span>
            </div>
            <input type="submit" class="login-btn" value="Đăng nhập">
            <span><a class="small-1" href="forgot.php"> Quên mật khẩu ?</a> </span>

        </form>
        <button class="btnlog" style="background-color:red" onclick="document.getElementById('id01').style.display='none'">Trở Về</button>
        <button class="btnlog" style="background-color:green;" onclick="document.getElementById('id01').style.display='none';document.getElementById('id02').style.display='block'">Đăng Kí</button>
    </div>

</div>
<div id="id02" class="modal">
    <div class="form-box">
        <h1> Đăng Nhập </h1>
        <form id="userLogin" method="post" action="singin.php">
            <div class=" input-box">
            <i class="fas fa-user" style="margin-right: 10px"></i>
            <input onchange="checkmail()" class="inputlog" type="text" id="gmail" name="gmail" placeholder="Gmail">
    </div>
    <div class="input-box">
        <i class="fas fa-user" style="margin-right: 10px"></i>
        <input class="inputlog" type="text" name="user" placeholder="Nhập User">
    </div>
    <div class="input-box">
        <i class="fas fa-user" style="margin-right: 10px"></i>
        <input class="inputlog" type="text" name="name" placeholder="Nhập Họ Và Tên">
    </div>
    <div class="input-box">
        <i class="fas fa-unlock-alt" style="margin-right: 10px"></i>
        <input class="inputlog" type="password" id="passwords" name="pass" placeholder="Nhập Mật Khẩu">
        <span class="eye" onclick="MyFunctionSing()">
            <i id="hide11" style=" display: none" class="fas fa-eye"></i>
            <i id="hide21" class="fas fa-eye-slash"></i>
        </span>
    </div>
    <div class="input-box">
        <i class="fas fa-unlock-alt" style="margin-right: 10px"></i>
        <input class="inputlog" type="password" id="passwordsr" name="passl" placeholder="Nhập Lại Mật Khẩu">
        <span class="eye" onclick="MyFunctionSingR()">
            <i id="hide12" style=" display: none" class="fas fa-eye"></i>
            <i id="hide22" class="fas fa-eye-slash"></i>
        </span>
    </div>
    <input type="submit" class="login-btn" value="Đăng nhập">
    <span><a class="small-1" href="forgot.php"> Quên mật khẩu ?</a> </span>

    </form>
    <button class="btnlog" style="background-color:red" onclick="document.getElementById('id02').style.display='none'">Trở Về</button>
    <button class="btnlog" style="background-color:green;" onclick="document.getElementById('id02').style.display='none';document.getElementById('id01').style.display='block'">Đăng Nhập</button>
</div>
</div>