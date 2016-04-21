<?php
  session_start();

  if (isset($_SESSION['level']) == 1) {
    # code...
    include '../config/conn.php';
    include 'controller/all_func.php';

    $user = new User();
    function antiinjection($data){
      $filter_sql = mysql_real_escape_string(htmlspecialchars($data,ENT_QUOTES));
      return $filter_sql;
    }
    if (isset($_POST['tambah'])) {
      # code...
      $nama = antiinjection($_POST['nama']);
      $username = antiinjection($_POST['username']);
      $password = md5(antiinjection($_POST['password']));
      $email = antiinjection($_POST['email']);
      $phone = antiinjection($_POST['phone']);
      $divisi = antiinjection($_POST['divisi']);
      $level = antiinjection($_POST['level']);

      if ($nama != "" AND $username != "" AND $password != "" AND $email != "" AND $phone != "" AND $divisi != "" AND $level != "") {
        # code...
        $user->Create($nama, $username, $password, $email, $phone, $divisi, $level);
      }else{
        echo "<script>alert('Maaf Data Tida Boleh Kosong!!!'); document.location.href='./user-entry.php?action=tambah';</script>";   
      }
    }
    if (isset($_POST['ubah'])) {
      # code...
      $id = $_POST['id'];
      $nama = antiinjection($_POST['nama']);
      $username = antiinjection($_POST['username']);
      $email = antiinjection($_POST['email']);
      $phone = antiinjection($_POST['phone']);
      $divisi = antiinjection($_POST['divisi']);
      $level = antiinjection($_POST['level']);
      
      $user->Edit($id, $nama, $username, $email, $phone, $divisi, $level);
      //echo "$nama, $username, $email, $phone, $divisi, $level";
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <?php
      include 'view/head.php';
    ?>
  </head>
  <body class="hold-transition skin-blue-light fixed sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <?php
        include 'view/header.php';
      ?>

      <!-- Left side column. contains the sidebar -->
      <?php
        include 'view/aside.php';
      ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard - Administrator
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Layout</a></li>
            <li class="active">Fixed</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        <!-- From Tambah Data -->
        <?php
          if (isset($_GET['action'])) { 
            if ($_GET['action'] == 'tambah') {
        ?>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Pengguna</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
              <form action="" method="post" accept-charset="utf-8">
                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="nama" class="form-control" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label >Username</label>
                  <input type="text" name="username" class="form-control" placeholder="Enter username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone number</label>
                  <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
                </div>
                <div class="form-group">
                  <label>Divisi</label>
                  <select class="form-control" name="divisi">
                    <option value="">-</option>
                    <option value="1">Training</option>
                    <option value="2">PRM (Public Relation and Marketing)</option>
                    <option value="3">IT Content</option>
                    <option value="4">IT Network</option>
                    <option value="5">Administration and Finance</option>
                    <option value="6">Other</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Level user</label>
                  <select class="form-control" name="level">
                    <option value="">-</option>
                    <option value="1">Administrator</option>
                    <option value="2">Manager</option>
                    <option value="3">Staff</option>
                    <option value="4">PPS</option>
                    <option value="5">Other</option>
                  </select>
                </div>
              </div><!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name = "tambah" class="btn btn-primary">Add Data</button>
              </div>
              </form>
              
          </div>
        <!-- From Tambah Data -->

          <?php
            }            
            elseif ($_GET['action'] == 'ubah' && isset($_GET['id'])) {
              $id = base64_decode($_GET['id']);
              $view = $user->ViewById($id);
              $row = mysql_fetch_array($view);
          ?>
          <!-- From Ubah Data -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Pengguna</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
              <form action="" method="post" accept-charset="utf-8">
                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="hidden" name="id" value="<?=$row['id']?>">
                  <input type="text" name = "nama" class="form-control" placeholder="" value="<?=$row['nama']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" name="username" class="form-control" placeholder="" value="<?=$row['username']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" placeholder="" value="<?=$row['email']?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone number</label>
                  <input type="text" name="phone" class="form-control" placeholder="" value="<?=$row['nohp']?>">
                </div>
                <div class="form-group">
                  <label>Divisi</label>
                  <select class="form-control" name="divisi">
                    <option value="<?=$row['divisi']?>">-</option>
                    <option value="1">Training</option>
                    <option value="2">PRM (Public Relation and Marketing)</option>
                    <option value="3">IT Content</option>
                    <option value="4">IT Network</option>
                    <option value="5">Administration and Finance</option>
                    <option value="6">Other</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Level user</label>
                  <select class="form-control" name="level">
                    <option value="<?=$row['level']?>">-</option>
                    <option value="1">Administrator</option>
                    <option value="2">Manager</option>
                    <option value="3">Staff</option>
                    <option value="4">PPS</option>
                    <option value="5">Other</option>
                  </select>
                </div>
              </div><!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name = "ubah" class="btn btn-primary">Edit Data</button>
              </div>
              </form>
              
          </div>

          <?php
          }
          elseif ($_GET['action']=='hapus' && isset($_GET['id'])) {
            $id = base64_decode($_GET['id']);
            $user->Delete($id);
          }
          }
          else{
          ?>
          <!-- From Ubah Data -->
          <p align="right">
            <a class="btn btn-social btn-success" href="?action=tambah">
                    <i class="fa fa-plus"></i> Add User Data
                  </a>
          </p>
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">List User Data</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="2">No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Divisi</th>
                    <th>Level</th>
                    <th width="5">Action</th>
                  </tr>
                </thead>
                <tbody>                
                <?php
                  $no = 1;
                  $tampil = $user->View();
                  while ( $row = mysql_fetch_array($tampil)) {
                ?>
                  <tr>
                    <td align="center"><?=$no++?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['username']?></td>
                    <td><?=$row['email']?></td>
                    <td>
                      <?php
                        if ($row['divisi'] == 1) {
                          echo "Training";
                        }elseif ($row['divisi'] == 2) {
                          echo "PRM";
                        }elseif ($row['divisi'] == 3) {
                          echo "IT Content";
                        }elseif ($row['divisi'] == 4) {
                          echo "IT Network";
                        }elseif ($row['divisi'] == 5) {
                          echo "Admin";
                        }elseif ($row['divisi'] == 6) {
                          echo "Other";
                        }else{
                          echo "None";
                        }
                      ?>
                    </td>
                    <td>
                      <?php
                        if ($row['level'] == 1) {
                          echo "Administrator";
                        }elseif ($row['level'] == 2) {
                          echo "Manager";
                        }elseif ($row['level'] == 3) {
                          echo "Staff";
                        }elseif ($row['level'] == 4) {
                          echo "PPS";
                        }elseif ($row['level'] == 5) {
                          echo "Other";
                        }else{
                          echo "None";
                        }
                      ?>
                    </td>
                    <td align="center">
                      <a href = "?action=ubah&id=<?php echo base64_encode($row['id']); ?>"><i class="fa fa-edit"></i>Edit</a> &nbsp;&nbsp;
                      <a href = "?action=hapus&id=<?php echo base64_encode($row['id']); ?>"><i class="fa fa-trash"></i>Hapus</a>
                    </td>

                  </tr>
                <?php
                  }
                ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Divisi</th>
                    <th>Level</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
              </table>
            </div><!-- /.box-body -->
          </div> 
            <?php
          }
            ?>         
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php
        include 'view/footer.php';
      ?>
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <?php
      include 'view/foot.php';
    ?>
  </body>
</html>

<?php
  }else{
    echo "<script type='text/javascript'>alert('Sorry, You can not access this page...!');window.location.href='../index.php';</script>";
  }
?>