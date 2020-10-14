<?php

include_once("koneksi.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];

	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];

    $result = mysqli_query($mysqli, "UPDATE pengguna SET nama='$nama',username='$username',password='$password' WHERE id=$id");

    header("Location: index.php");
}
?>

<?php
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM pengguna WHERE id=$id");
    while($user_data = mysqli_fetch_array($result))
    {
        $nama = $user_data['nama'];
		$username = $user_data['username'];
		$password = $user_data['password'];
    }

?>

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
				<td bgcolor="#AFEEEE" width="500" valign="top" height="520px">
				<fieldset>
					<legend><font color="green"><b>Data user</b></font></legend>
						<form method="post" action="edit.php" name="update_user">
							<table cellpadding="6" cellspacing="0">
							<div class="no-daftar">
								<label for="user-password" style="padding-top:22px">NAMA USER
          						</label>
									<div class="atas"><input type="text" name="nama" size="60" value="<?php echo $nama;?>"></div>
								</div>
								<div class="nisn">
									<label for="user-password" style="padding-top:22px">USERNAME
          						</label>
									<div class="atas"><input type="text" name="username" size="60" value="<?php echo $username;?>"></div>
								</div>
								<div class="nama">
								<label for="user-password" style="padding-top:22px">PASSWORD
          						</label>
									<div class="atas"><input type="password" name="password" size="60" value="<?php echo $password;?>"></div>
								</div>							
								<tr>
                                    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
									<td><button type="submit" name="update" id="submit-btn">
											<b>UPDATE</b>
										</button>
										<a href="index.php"><button type="button" id="submit-btn"><b>KEMBALI</b></button></a>
									</td>
								</tr>							
							</table>
							</form>
                            </fieldset>
					<tr>
						<td height="20px" bgcolor="#20B2AA" colspan="3" align="center">
							PPDB SMKN 1 CIMAHI ~ copyright &#169; 2020 Designed By Mahesyasn18
						</td>
					</tr>
					
			</table>
	</body>

</html>