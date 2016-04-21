<?php
	Class Login{

		public function loginUser($username, $password)
		{
			# code...
			$sql = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'";
			$exe = mysql_query($sql);

			if (mysql_num_rows($exe) > 0) {
				# code...
				$row = mysql_fetch_array($exe);
				if ($password == $row['password']) {
					# Admin Login
					if ($row['level'] == 1) {
						$_SESSION['id'] = $row['id'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['level'] = $row['level'];

						// $id = $_SESSION['id'];
						// $username = $_SESSION['username'];
						// $level = $_SESSION['level'];

                        echo "<script language=javascript> document.location.href='admin/admin-home.php'; </script>";
					}
					if ($row['level'] == 2) {
						# code...						
						$_SESSION['id'] = $row['id'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['level'] = $row['level'];

                        echo "<script language=javascript> document.location.href='to-do-home.php'; </script>";
					}
					else{
                        echo "<script language='JavaScript'>alert('Anda Bukan Admin !')</script>";
                        echo "<script language=javascript> document.location.href='index.php'; </script>";
                    }
                }else{
                    echo "<script language='JavaScript'>alert('User atau Password anda tidak cocok')</script>";
                    echo "<script language=javascript> document.location.href='index.php'; </script>";
                }
            }else{
                 echo "<script language='JavaScript'>alert('User atau Password anda tidak cocok')</script>";
                 echo "<script language=javascript> document.location.href='index.php'; </script>";
            }
		}
	}
?>