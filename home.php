<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
</style>
</head>

<body>
<div class="header">
<?php
$active="home";
include('head.php'); ?>

</div>

<?php include'ticker.php'; ?>

  <div id="page-container" style="margin-top:50px; position: relative;min-height: 84vh;   ">
    <div class="container">
    <div id="content-wrap"style="padding-bottom:75px;">
  <div id="demo" class="carousel slide" data-ride="carousel">
 

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image\front.jpg" alt="image\front.jpg" width="100%" height="500">
      </div>
      <div class="carousel-item">
        <img src="image\back.png" alt="image\back.png" width="100%" height="500">
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <br>
  <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white" >Do's</h4>

                        <p class="card-body overflow-auto" style="padding-left:2%;height:140px;text-align:left;">
                          <?php
                            include 'conn.php';
                            $sql=$sql= "select * from pages where page_type='dos'";
                            $result=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0)   {
                                while($row = mysqli_fetch_assoc($result)) {
                                  echo $row['page_data'];
                                }
                              }

                           ?>
                         </p>
                </div>
            </div>
             <div class="col-lg-6 mb-4">
                <div class="card">
                    <h4 class="card-header card bg-info text-white" >Dont's</h4>

                    <p class="card-body overflow-auto" style="padding-left:2%;height:140px;text-align:left;">
                      <?php
                        include 'conn.php';
                        $sql=$sql= "select * from pages where page_type='donts'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)   {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['page_data'];
                            }
                          }

                       ?>
                     </p>
                        </div>
                        </div>
                        <div>
        
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>BLOOD GROUPS</h2>
                <p>
                  <?php
                    include 'conn.php';
                    $sql=$sql= "select * from pages where page_type='bloodgroups'";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)   {
                        while($row = mysqli_fetch_assoc($result)) {
                          echo $row['page_data'];
                        }
                      }

                   ?></p>

            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="image\blood.jpg" alt="" >
            </div>
        </div>
        <!-- /.row -->

        <hr>
        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h2>UNIVERSAL DONORS AND RECIPIENTS</h2>
            <p>
              <?php
                include 'conn.php';
                $sql=$sql= "select * from pages where page_type='universal'";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0)   {
                    while($row = mysqli_fetch_assoc($result)) {
                      echo $row['page_data'];
                    }
                  }

               ?></p>
              </div>
            <div class="col-md-4">
                <a class="btn btn-lg btn-secondary btn-block" href="donate_blood.php" style="align:center; background-color:#009aab;color:white ">Become a Donor </a>
            </div>
        </div>

    </div>
  </div>
  <?php include('footer.php');?>
</div>

</body>

</html>
