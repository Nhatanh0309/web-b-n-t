	<div align="center">
		Thêm Sản Phẩm
		<form action="insert.php" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td class="iscpro">
						<label class="tdnhap">Hình Ảnh</label><br>
						<input class="nsp" type="file" name="uploadFile">
					</td>
					<td class="iscpro">
						<label class="tdnhap">Tên Sản Phẩm </label><br>
						<input class="nsp" type="text" name="tensp" value="">
					</td>
					<td class="iscpro">
						<label class="tdnhap">Giá</label><br>
						<input class="nsp" type="text" name="gia" value="">
					</td>
				</tr>
				<hr>
				<tr>
					<td class="iscpro">
						<label class="tdnhap">Dung Lượng </label><br>
						<input class="nsp" type="text" name="dungt" value="">
					</td>
					<td class="iscpro">
						<label class="tdnhap">Kích Thước </label><br>
						<input class="nsp" type="text" name="kicht" value="">
					</td>
					<td class="iscpro">
						<label class="tdnhap">Trọng Lượng </label><br>
						<input class="nsp" type="text" name="trongl" value="">
					</td>
				</tr>
				<hr>
				<tr>
					<td class="iscpro">
						<label class="tdnhap">Chip </label><br>
						<input class="nsp" type="text" name="chip" value="">
					</td>
					<td class="iscpro">
						<label class="tdnhap">Hệ điều hành </label><br>
						<input class="nsp" type="text" name="hedieuhanh" value="">
					</td>
					<td class="iscpro">
						<label class="tdnhap">Cam trước</label><br>
						<input class="nsp" type="text" name="camtruoc" value="">
					</td>
				</tr>
				<tr>
					<td class="iscpro">
						<label class="tdnhap">Cam sau </label><br>
						<input class="nsp" type="text" name="camsau" value="">
					</td>
					<td class="iscpro">
						<label class="tdnhap">Màn hình </label><br>
						<input class="nsp" type="text" name="manhinh" value="">
					</td>
					<td class="iscpro">
						<label class="tdnhap">Pin</label><br>
						<input class="nsp" type="text" name="pin" value="">
					</td>
				</tr>
				<tr>
					<td class="iscpro">
						<label class="tdnhap">SALE</label><br>
						<input class="nsp" type="text" name="sale" value="0">%
					</td>
					<td class="iscpro">
						<label class="tdnhap">Danh Mục </label><br>
						<select class="hop nsp" name="danhmuc">
							<?php
							$sql = "SELECT * FROM danhmuc";
							$query = mysqli_query($conn, $sql);
							$i = 1;
							while ($row = mysqli_fetch_array($query)) {
							?>
								<option value="<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendm'] ?></option>
							<?php
								$i++;
							} ?>
						</select>
					</td>
					<td class="iscpro">
						<label class="tdnhap">Hãng</label><br>
						<select class="hop nsp" name="hang">
							<?php
							$sql = "SELECT * FROM hangsx";
							$query = mysqli_query($conn, $sql);
							$i = 1;
							while ($row = mysqli_fetch_array($query)) {
							?>
								<option value="<?php echo $row['id_hang'] ?>"><?php echo $row['tenhang'] ?></option>
							<?php
								$i++;
							} ?>
						</select>
					</td>
				</tr>
				<tr>
					<td class="iscpro">
						<label class="tdnhap">Màu</label><br>
						<select class="hop nsp" name="mau">
							<?php
							$sql = "SELECT * FROM mau";
							$query = mysqli_query($conn, $sql);
							$i = 1;
							while ($row = mysqli_fetch_array($query)) {
							?>
								<option value="<?php echo $row['id_mau'] ?>"><?php echo $row['mamau'] ?></option>
							<?php
								$i++;
							} ?>
						</select>
					</td>
					<td class="iscpro">
						<label class="tdnhap">Dung lượng</label><br>
						<select class="hop nsp" name="ldungt">
							<?php
							$sql = "SELECT * FROM dungluong";
							$query = mysqli_query($conn, $sql);
							$i = 1;
							while ($row = mysqli_fetch_array($query)) {
							?>
								<option value="<?php echo $row['id_dungt'] ?>"><?php echo $row['sodungt'] ?></option>
							<?php
								$i++;
							} ?>
						</select>
					</td>
					<td class="iscpro">
						<label class="tdnhap">Hệ điều hành</label><br>
						<select class="hop nsp" name="lhopso">
							<?php
							$sql = "SELECT * FROM hedieuhanh";
							$query = mysqli_query($conn, $sql);
							$i = 1;
							while ($row = mysqli_fetch_array($query)) {
							?>
								<option value="<?php echo $row['id_hopso'] ?>"><?php echo $row['tenhs'] ?></option>
							<?php
								$i++;
							} ?>
						</select>
					</td>
				</tr>

			</table>
			<input class="themspp" type="submit" name="ispro" value="Thêm">
		</form>
	</div>