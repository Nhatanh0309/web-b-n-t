<div align="center">
    Thêm Người Dùng
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td class="iscpro">
                    <label class="tdnhap">Hình Ảnh</label><br>
                    <input class="nsp" type="file" name="uploadFile">
                </td>
                <td class="iscpro">
                    <label class="tdnhap">Họ Tên Người Dùng </label><br>
                    <input class="nsp" type="text" name="name" value="">
                </td>
                <td class="iscpro">
                    <label class="tdnhap">Gmail</label><br>
                    <input class="nsp" type="text" name="gmail" value="">
                </td>
            </tr>
            <hr>
            <tr>
                <td class="iscpro">
                    <label class="tdnhap">USER</label><br>
                    <input class="nsp" type="text" name="username" value="">
                </td>
                <td class="iscpro">
                    <label class="tdnhap">Password</label><br>
                    <input class="nsp" type="text" name="pass" value="">
                </td>
                <td class="iscpro">
                    <label class="tdnhap">Quyền</label><br>
                    <select class="hop nsp" name="level">

                        <option value="0">Người Dùng</option>
                        <option value="1">ADMIN</option>

                    </select>
                </td>

            </tr>
            <hr>
        </table>
        <input class="themspp" type="submit" name="isuser" value="Thêm">
    </form>
</div>