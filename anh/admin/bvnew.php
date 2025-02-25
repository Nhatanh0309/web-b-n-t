<form action="insert.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td class="col1">Tiêu Đề</td>
            <td class="col2"><input type="text" name="title" value=""></td>
        </tr>
        <tr>
            <td class="col1">Tiêu Đề</td>
            <td class="col2" style="margin-left: 155px;"><textarea name="content" id="content" placeholder="Đây là nội dung..." class="noidung" rows="20" cols="80"></textarea></td>
        </tr>
        <tr>
            <td class="col1">Ảnh</td>
            <td class="col2"><input type="file" name="uploadFile"></td>
        </tr>
    </table>
    <input style="padding: 5px 20px;background-color :blue" type="submit" name="isbv" value="Đăng">
</form>
<style>
    .col1 {
        width: 150px;
    }

    .col2 {
        padding: 5px;
    }
</style>