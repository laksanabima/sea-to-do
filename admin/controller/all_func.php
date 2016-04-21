<?php

	class User
	{
		public function View()
		{
			$sql = "SELECT * FROM tb_user";
			$exe = mysql_query($sql);

			return $exe;
		}

		public function ViewById($id)
		{
			$sql = "SELECT * FROM tb_user WHERE id = $id";
			$exe = mysql_query($sql);

			return $exe;
		}

		public function Create($nama, $username, $password, $email, $phone, $divisi, $level)
		{
			$sql = "INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `email`, `nohp`, `divisi`, `level`) VALUES (NULL, '$username', '$password', '$nama', '$email', '$phone', '$divisi', '$level');";
			//echo $sql;
			$exe = mysql_query($sql);
			echo "<script>alert('Tambah data Berhasil!!!'); document.location.href='./user-entry.php';</script>"; 
            return $exe;
		}

		public function Edit($id, $nama, $username, $email, $phone, $divisi, $level)
		{
			# code...
			$sql = "UPDATE `tb_user` SET `username` = '$username', `nama` = '$nama', `email` = '$email', `divisi` = '$divisi', `level` = '$level' WHERE `tb_user`.`id` = '$id'";
			//echo "$sql";
			$exe = mysql_query($sql);
			if ($exe) {
				echo "<script>alert('Data Berhasil Di Ubah !'); document.location.href='./user-entry.php';</script>";
			}else{
				echo "<script>alert('Data Gagal Di Ubah !'); document.location.href='./user-entry.php';</script>";

			}
		}

		public function Delete($id)
		{
			# code...
			$sql = "DELETE FROM tb_user WHERE id = $id";
			$exe = mysql_query($sql);
			if ($exe) {
				echo "<script>document.location.href='./user-entry.php';</script>";
			}else{
				echo "<script>alert('Data Gagal Di Hapus !'); document.location.href='./user-entry.php';</script>";

			}
		}
	}

?>