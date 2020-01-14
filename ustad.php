<?php 
include('includes/header.php'); 
include('includes/navbar.php'); 
?> 

<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menon-aktifkan guru yang telah dipilih ? </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

    
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Yes</button>
        </div>
      </form>

    </div>
  </div>
</div>


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <section class="content">
              <div class="row">
                <div class="col-12">
                  
                  <!-- /.card -->
        
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Data Ustadz Yang Mengajar</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <?php 
                      $connection = mysqli_connect("localhost","root","","test");

                      $query = "SELECT * FROM guru";
                      $query_run = mysqli_query($connection, $query);
    
                      ?>
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Id</th>
                          <!-- <th>Profil</th> -->
                          <th>Nama</th>
                          <th>Keahlian</th>
                          <th>Biografi</th>
                          <th>Rating</th>
                          <th>Total Santri</th>
                          <th>Total Pertemuan</th>
                          <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                  <?php
                    if(mysqli_num_rows($query_run) > 0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                    {
                 ?>     
                <tr>
                  <td> <?php echo $row['guru_id']; ?> </td>
                  <!-- <td> <?php echo $row['image']; ?> </td> -->
                  <td> <?php echo $row['nama_guru']; ?> </td>
                  <td> <?php echo $row['keahlian']; ?> </td>
                  <td> <?php echo $row['biografi_guru']; ?> </td>
                  <td> <?php echo $row['rating']; ?> </td>
                  <td> <?php echo $row['total_santri']; ?> </td>
                  <td> <?php echo $row['total_pertemuan']; ?> </td>
                  <td>
                  <style>
                          .switch {
                            
                            position: relative;
                            display: inline-block;
                            width: 60px;
                            height: 34px;
                          }

                          .switch input { 
                            content: "On";
                            opacity: 0;
                            width: 0;
                            height: 0;
                          }

                          .slider {
                            position: absolute;
                            cursor: pointer;
                            top: 0;
                            left: 0;
                            right: 0;
                            bottom: 0;
                            background-color: #ccc;
                            -webkit-transition: .4s;
                            transition: .4s;
                          }

                          .slider:before {
                            position: absolute;
                            content: "";
                            height: 26px;
                            width: 26px;
                            left: 4px;
                            bottom: 4px;
                            background-color: white;
                            -webkit-transition: .4s;
                            transition: .4s;
                          }

                          input:checked + .slider {
                            background-color: #2196F3;
                          }

                          input:focus + .slider {
                            box-shadow: 0 0 1px #2196F3;
                          }

                          input:checked + .slider:before {
                            -webkit-transform: translateX(26px);
                            -ms-transform: translateX(26px);
                            transform: translateX(26px);
                          }

                          /* Rounded sliders */
                          .slider.round {
                            border-radius: 34px;
                          }

                          .slider.round:before {
                            border-radius: 50%;
                          }
                          </style>
                          </head>
                          <body>


                          <label class="switch" data-toggle="modal" data-target="#addadminprofile">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                          </label>
                          </td> 


                  <meta name="viewport" content="width=device-width, initial-scale=1">


                            
                  <!-- <td>
                    <input type="checkbox">
                    <label for="" class="onbtn">On</label>
                    
                    <label for="" class="ofbtn">Off</label>
                  </td> -->
            
                </tr>
                
                    <?php
                      }
                  }
                  else {
                    echo "No Record Found";
                  }
                  ?>
                  
                  </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </section>
            <!-- /.content -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
