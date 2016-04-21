<?php
  session_start();

  if (isset($_SESSION["level"]) == 2) {
    # code...
    include 'config/conn.php';


  
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php
        include 'views/head.php';
    ?>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="res/img/logo.png" width="138" height="50" /></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About Me</a>
                    </li>
                    <li>
                        <a href="#">Member</a>
                    </li>
                    <li>
                        <a href="#">Messages</a>
                    </li>
                    <li>
                        <a href="controller/func_logout.php">Sign Out</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <div class="panel-group" id="accordion">
                  <h4><span class="glyphicon glyphicon-list-alt"></span> My Activities</h4>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        Activity 1</a>
                      </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                      <ul class="list-group">
                        <li class="list-group-item"><a href = "#"><span class="glyphicon glyphicon-list-alt"></span> Open</a></li>
                        <li class="list-group-item"><a href = "#"><span class="glyphicon glyphicon-eye-open"></span> Description</a></li>
                        <li class="list-group-item"><a href = "#"><span class="glyphicon glyphicon-trash"></span> Delete</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        Activity 2</a>
                      </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                      <ul class="list-group">
                        <li class="list-group-item"><a href = "#"><span class="glyphicon glyphicon-list-alt"></span> Open</a></li>
                        <li class="list-group-item"><a href = "#"><span class="glyphicon glyphicon-eye-open"></span> Description</a></li>
                        <li class="list-group-item"><a href = "#"><span class="glyphicon glyphicon-trash"></span> Delete</a></li>
                      </ul>
                    </div>
                    <p class="pull-right"><a id="dialogModal_ex1" title="add&nbsp;activity" class="titleModal"><span class="glyphicon glyphicon-plus"></span></a></p> 
                    
                  </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <div class="caption1">
                                <h4><span class="glyphicon glyphicon-th-list"></span> To Do</h4>
								<div class = "cont">
                                    <p align="right"><span class="glyphicon glyphicon-time"></span> July, 10 Friday</p>
                                    <p>Lorem lorem ipsum ipsum. </p>
                                    <p class="pull-right"><a href = "#"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp; <a href="#"><span class="glyphicon glyphicon-trash"></span></a></p><br />
								</div>
							</div>

                            <p class="pull-right"><a href = "#" id="dialogModal_ex1" title="add&nbsp;to&nbsp;do" class="titleModal"><span class="glyphicon glyphicon-plus"></span></a></p> 
                    
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <div class="caption2">
                                <h4><span class="glyphicon glyphicon-tasks"></span> In Progress</h4>
                                <div class = "cont">
                                    <p align="right"><span class="glyphicon glyphicon-time"></span> July, 10 Friday</p>
                                    <p>Lorem lorem ipsum ipsum. </p>
                                    <p class="pull-right"><a href = "#"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp; <a href="#"><span class="glyphicon glyphicon-trash"></span></a></p><br />
                                </div>
                            </div>
                                <p class="pull-right"><a href = "#" id="dialogModal_ex1" title="set&nbsp;into&nbsp;in&nbsp;progress" class="titleModal"><span class="glyphicon glyphicon-plus"></span></a></p> 
                    
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <div class="caption3">
                                <h4><span class="glyphicon glyphicon-ok"></span> Complete</h4>
                                <div class = "cont">
                                    <p align="right"><span class="glyphicon glyphicon-time"></span> July, 10 Friday</p>
                                    <p>Lorem lorem ipsum ipsum. </p>
                                    <p class="pull-right"><a href = "#"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp; <a href="#"><span class="glyphicon glyphicon-trash"></span></a></p><br />
                                </div>
                            </div>
                                <p class="pull-right"><a href = "#" id="dialogModal_ex1" title="set&nbsp;into&nbsp;complete" class="titleModal"><span class="glyphicon glyphicon-plus"></span></a></p> 
                    
                        </div>
                    </div>
                </div>

            </div>
            <!-- From Modal -->
            <?php
                include 'views/popUpView/add-activity.php';
            ?>
            <!-- End From Modal -->
        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <!-- Footer -->
        <footer>
		<hr />
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; SEA - To Do - SEAMEO SEAMOLEC 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <?php
        include 'views/foot.php';
    ?>
    
</body>

</html>
<?php
  }else{
    echo "<script type='text/javascript'>alert('Sorry, You can not access this page...!');window.location.href='index.php';</script>";
}
?>