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
						<form method="post" action="formPPDB.php" name="form1">
							<table cellpadding="6" cellspacing="0">
								<div class="no-daftar">
								<label for="user-password" style="padding-top:22px">Nomor Pendaftar
          						</label>
									<div class="atas"><input type="text" name="no" size="60" autocomplete="on" required ></div>
								</div>
								<div class="nisn">
									<label for="user-password" style="padding-top:22px">NISN
          						</label>
									<div class="atas"><input type="text" name="nisn" size="60" autocomplete="on" required ></div>
								</div>
								<div class="nama">
								<label for="user-password" style="padding-top:22px">Nama Pendaftar
          						</label>
									<div class="atas"><input type="text" name="nama" size="60" autocomplete="on" required ></div>
								</div>							
								<div class="tempat">
								<label for="user-password" style="padding-top:22px">Tempat Lahir
          						</label>
									<div class="atas">
										<input type="text" name="tempatlahir" autocomplete="on" required >
									</div>			
									</div>
								<div class="tanggal">
								<label for="user-password" style="padding-top:22px">Tanggal Lahir
          						</label>
									<div class="atas">
										<input type="date" name="tgllahir" autocomplete="on" required >
									</div>
								</div>
								<tr>
								<label for="user-password" style="padding-top:22px">Asal Sekolah
          						</label>
									<div class="atas">
										<input type="text" name="asalsekolah" size="25" autocomplete="on" required >
									</div>
								</div>
								<tr>
								<label for="user-password" style="padding-top:22px">Nilai UN
          						</label>
									<div class="atas">
										<input type="text" name="nilaiun" size="10" autocomplete="on" required>
									</div>				
								</div>
								<tr>
									<td></td>
									<td>
										<button id="submit-btn" type="submit" name="daftar">
											<b>DAFTAR</b>
										</button>
										
        							<a href="index.php"><button type="button" id="submit-btn"><b>KEMBALI</b></button></a>
      							
									</td>
								</tr>							
							</table>
							</form>

							<?php
							if(isset($_POST['daftar'])) {
								$nomor = $_POST['no'];
								$nisn = $_POST['nisn'];
								$nama = $_POST['nama'];
								$tempat = $_POST['tempatlahir'];
								$tgl = $_POST['tgllahir'];
								$tanggal = date('Y-m-d', strtotime($tgl));
								$asal = $_POST['asalsekolah'];
								$nilai = $_POST['nilaiun'];

								include_once("koneksi.php");

								$result = mysqli_query($mysqli, "INSERT INTO user(no,nisn,nama,tempatlahir,tgllahir,asalsekolah,nilaiun) VALUES('$nomor','$nisn','$nama','$tempat','$tanggal','$asal','$nilai')");

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