<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Admin sistem informasi PPDB</title>
    </head>

    <body>
        
        <?php
            //mulai session
            session_start();

            //konek database
            include 'koneksi.php';

            //ambil data dari form login
            $username=$_POST['username'];
            $password=$_POST['password'];

            //query
            $data=mysqli_query($varkoneksi,"select * from tb_user where username='$username' and password='$password'");


            //cek data
            $cek=mysqli_num_rows($data);

            if($cek>0)
            {
                $_SESSION['username']=$username;
                $_SESSION['status']='login';
                header("location:admin/index.php");
            }
            else
            {
                header("location:index.php?pesan=gagal");
            }
        ?>
    </body>
</html>
