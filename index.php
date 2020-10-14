
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
				font-size:15px;
				height: 44px;
				margin: 0 auto;
                margin-top: 20px;
                margin-left: 50px;
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
			input{
				padding-top:0px;
				padding: 9px; 
				border: solid 2px #00BFFF; 
				outline: 0; 
				font: normal 13px/100% 'Fredericka the Great', cursive; 
				background: white; 
				color:darkblue;
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
            .form {
                align-items: left;
                display: flex;
                flex-direction: column;
            }
            .form-border {
                background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
                height: 2px;
                width: 100%;
            }
            .form-content {
                background: #fbfbfb;
                border: none;
                outline: none;
                padding-top: 2px;
            }
            .underline-title {
                background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
                height: 2px;
                margin: -1.1rem auto 0 auto;
                width: 89px;
            }
            #card {
                background: #fbfbfb;
                border-radius: 8px;
                box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
                height: 410px;
                margin: 6rem auto 8.1rem auto;
                width: 329px;
                }
            #card-content {
                padding: 12px 44px;
                }
            #card-title {
                font-family: "Raleway Thin", sans-serif;
                letter-spacing: 4px;
                padding-bottom: 23px;
                padding-top: 13px;
                text-align: center;
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
                <div id="card">
                        <div id="card-content">
                        <div id="card-title">
                            <h2>LOGIN</h2>
                            <div class="underline-title"></div>
                        </div>
                        <form method="post" action="login_aksi.php">
                            <label for="user-email" style="padding-top:13px">Username</label>
                                <input id="user-email" class="form-content" type="text" name="username" autocomplete="on" required/>
                                <div class="form-border"></div>
                            <label for="user-password" style="padding-top:22px">Password</label>
                                <input id="user-password" class="form-content" type="password" name="password" autocomplete="on" required/>
                                <div class="form-border"></div>
                            <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
                            <br><br><br>
                            <?php
                            if(isset($_GET['pesan']))
                            {
                                if($_GET['pesan']=='gagal')
                                {
                                    echo "Gagal Login, username atau password salah";
                                }
                                else
                                if($_GET['pesan']=='logout')
                                {
                                    echo "Anda sudah logout";
                                }
                                if($_GET['pesan']=='belum_login')
                                {
                                    echo "Anda harus login dahulu untuk mengakses halaman admin";
                                }
                            }
                        ?>
                        </form>
                        </div>
                    </div>
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