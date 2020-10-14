<!DOCTYPE html>
<html>
	<head>
		<title>PPDB | SMKN 1 CIMAHI</title>
		<style>
			#submit-btn {
				background: -webkit-linear-gradient(right, #17A589, #17A589);
				border: none;
				border-radius: 10px;
				box-shadow: 0px 1px 8px #17A589;
				cursor: pointer;
				color: white;
				font-family: calibri;
				font-size:17px;
				height: 44px;
				margin: 0 auto;
				margin-top: 10px;
				transition: 0.25s;
				width: 130px;
				box-shadow: 0px rgba(46,46,46,0.66);
			}
			#submit-btn:hover {
				box-shadow: 0px 1px 18px #17A589;
			}
			label{
				font-family:arial;
				font-size:17px;
				color:black;
			}
			.atas input{
				padding-top:0px;
				padding: 5px; 
				border: solid 2px #00BFFF; 
				outline: 0; 
				font: normal 13px/100% 'Fredericka the Great', cursive; 
				width: 400px; 
				background: white; 
				color:darkblue;
			}
			.nisn .atas input{
				width: 180px; 
			}
			.no-daftar .atas input{
				width: 230px; 
			}
			.tempat .atas input{
				width: 230px; 
			}
			img{
				width:130px;
				height:130px;
			}
			h3{
				font-size:30px;
				font-family:arial;
				position:relative;
				margin-left:200px;
				margin-top:-85px;
				margin-bottom:40px;
			}
			.footer{
				font-family:arial;
				color:white;
			}
			b{
				font-family:arial;
			}
			a{
				background: -webkit-linear-gradient(right, #17A589, #17A589);
				border: none;
				
				box-shadow: 0px 1px 8px #17A589;
				cursor: pointer;
				color: white;
				font-family: calibri;
				font-size:17px;
				height: 44px;
				margin: 0 auto;
				margin-top: 10px;
				transition: 0.25s;
				width: 130px;
				box-shadow: 0px rgba(46,46,46,0.66);
			}
		</style>
	</head>
	<body bgcolor="cyan">
		<table align="center" cellpadding="10" cellspacing="0" width="100%">
			<tr>
				<td height="80px" bgcolor="#20B2AA" colspan="3">
					
					<img src="photos/smk.png" alt="">
					<h3>PENDAFTARAN PESERTA DIDIK BARU</h3>
				</td>
			</tr>
			<tr>
				<td bgcolor="#AFEEEE" width="auto" valign="top" height="520px">
				<fieldset>
					<legend><font color="green"><b>FORM PENDAFTARAN</b></font></legend>
						<form method="post" action="tambahuser.php" name="form2">
							<table cellpadding="6" cellspacing="0">
								<div class="no-daftar">
								<label for="user-password" style="padding-top:22px">NAMA USER
          						</label>
									<div class="atas"><input type="text" name="nama" size="60" autocomplete="on" required ></div>
								</div>
								<label for="nama" style="padding-top:22px">USERNAME
          						</label>
									<div class="atas"><input type="text" name="username" size="60" autocomplete="on" required ></div>
								</div>
								<div class="nisn">
									<label for="user-password" style="padding-top:22px">PASSWORD
          						</label>
									<div class="atas"><input type="password" name="password" size="60" autocomplete="on" required ></div>
								</div>
								<tr>
									<td></td>
									<td>
										<button id="submit-btn" type="submit" name="Tambah">
											<b>Tambah</b>
										</button>
										
        							<a href="index.php"><button type="button" id="submit-btn"><b>KEMBALI</b></button></a>
      							
									</td>
								</tr>							
							</table>
							</form>

							<?php
							if(isset($_POST['Tambah'])) {
								$nama = $_POST['nama'];
								$username = $_POST['username'];
								$password = $_POST['password'];
								include_once("koneksi.php");

								$result = mysqli_query($mysqli, "INSERT INTO pengguna(nama,username,password) VALUES('$nama','$username','$password')");

								echo "User added successfully. <a href='index.php'>View Users</a>";
							}
							?>

					</fieldset>
					<div class="footer">
					<tr>
						<td height="20px" bgcolor="#20B2AA" colspan="3" align="center" >
							PPDB SMKN 1 CIMAHI ~ copyright &#169; 2020 Designed By Mahesyasn18
						</td>
					</tr>
					</div>
					
			</table>
	</body>

</html>