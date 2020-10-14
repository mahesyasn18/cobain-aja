<?php
include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM user ORDER BY id DESC");
?>
<?php
    //mulai session
    session_start();

    //cek status sudah login
    if($_SESSION['status']!="login")
        {
             header("location:../index.php?pesan=belum_login");
         }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PPDB | SMKN 1 CIMAHI</title>
		<style>
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
			td a{
				background: -webkit-linear-gradient(right, #17A589, #17A589);
				border: none;
				border-radius: 2px;
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
				font-decoration:none;
			}
			h4{
				font-family: calibri;
				font-size:30px;
				margin-bottom:-10px;
				margin-top:-5px;
			}
			#submit-btn {
				background: -webkit-linear-gradient(right, #17A589, #17A589);
				border: none;
				border-radius: 10px;
				box-shadow: 0px 1px 8px #17A589;
				cursor: pointer;
				color: white;
				font-family: calibri;
				font-size:12px;
				height: 29px;
				margin: 0 auto;
				margin-top: 10px;
				transition: 0.25s;
				width: 80px;
				box-shadow: 0px rgba(46,46,46,0.66);
			}
			#submit-btnn{
				background: -webkit-linear-gradient(right, #17A589, #17A589);
				border: none;
				border-radius: 2px;
				box-shadow: 0px 1px 8px #17A589;
				cursor: pointer;
				color: white;
				font-family: calibri;
				font-size:12px;
				height: 30px;
				margin: 0 auto;
				margin-top: 10px;
				transition: 0.25s;
				width: 80px;
				box-shadow: 0px rgba(46,46,46,0.66);
				width:150px;
			}
			#submit-btn:hover {
				box-shadow: 0px 1px 18px #17A589;
			}
			#submit-btnn:hover {
				box-shadow: 0px 1px 18px #17A589;
			}
		</style>
	</head>
	<body bgcolor="cyan">
		<table align="center" cellpadding="10" cellspacing="0" width="100%">
			<tr>
				<td height="80px" bgcolor="#20B2AA" colspan="3">
					
					<img src="photos/smk.png" alt="">
					<h3>PENDAFTARAN PESERTA DIDIK BARU</h3>
					<br>
					<h4 style="color: white;">Hello <?php echo $_SESSION['username']; ?> Selamat Datang di Laman Admin </h3>
				</td>
			</tr>
			<tr>
				<td bgcolor="#AFEEEE" width="1366px" valign="top" height="520px">
				<fieldset>
					<legend><font color="green"><b>FORM PENDAFTARAN</b></font></legend>

							<table cellpadding="6" cellspacing="0" width='80%' border=1>
                            <a href="formPPDB.php"><button type="button" id="submit-btnn"><b>+ Tambah Data Pendaftar</b></button></a> | <a href="user/index.php"><button type="button" id="submit-btnn"><b>Ke Halaman User</b></button></a> | <a href="logout.php" align="right"><button type="button" id="submit-btnn"><b>LOGOUT</b></button></a><br/><br/>
                                <tr>
                                    <th>Nomor Pendaftaran</th> <th>NISN</th> <th>Nama</th> <th>Tempat Lahir</th> <th>Tanggal Lahir</th> <th>Asal Sekolah</th> <th>Nilai UN</th> <th>Update</th>
                                </tr>
                                <?php  
                                while($user_data =  mysqli_fetch_array($result)) {         
                                    echo "<tr>";
                                    echo "<td>".$user_data['no']."</td>";
                                    echo "<td>".$user_data['nisn']."</td>";
                                    echo "<td>".$user_data['nama']."</td>";  
                                    echo "<td>".$user_data['tempatlahir']."</td>"; 
									echo "<td>".$user_data['tgllahir']."</td>"; 
									echo "<td>".$user_data['asalsekolah']."</td>"; 
                                    echo "<td>".$user_data['nilaiun']."</td>";   
                                    echo "<td><a href='edit.php?id=$user_data[id]'>Edit Data</a> | <a href='delete.php?id=$user_data[id]'>Delete Data</a></td></tr>";        
                                }
                                ?>						
							</table>
					</fieldset>
					<tr>
						<td height="20px" bgcolor="#20B2AA" colspan="3" align="center">
							PPDB SMKN 1 CIMAHI ~ copyright &#169; 2020 Designed By Mahesyasn18
						</td>
					</tr>
					
			</table>
	</body>

</html>