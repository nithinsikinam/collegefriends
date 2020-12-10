<?php include "include/header.php"; ?> 
    <body class="sb-nav-fixed">
       <?php include "include/sidenav.php"; ?>
       <?php 

          if (isset($_POST['add'])) {
                
                $timeing = $_POST['timeing'];
                $class_code = $_POST['class_code'];


                $query="INSERT INTO settings(class_code,timeing) VALUES('{$class_code}','{$timeing}') ";

                $smtp=mysqli_query($connection,$query);

                if (!$connection) {
                    
                    die("Query faild".mysqli_error($connection));

                }

            }  

        ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Add Student Details
                            </div>
                            <div class="card-body col-sm-4">
                               <form action="#" method="post">
                                   <div class="form-group">
                                    <label for="class_code">Class Code</label>
                                    <select class="form-control" name="class_code">
                                      <option>BBA1</option>
                                      <option>BBA2</option>
                                      <option>BBA3</option>
                                      <option>BSC1</option>
                                      <option>BSC2</option>
                                      <option>BSC3</option>
                                      <option>BCA1</option>
                                      <option>BCA2</option>
                                      <option>BCA3</option>
                                      <option>B.COM1</option>
                                      <option>B.COM2</option>
                                      <option>B.COM3</option>
                                    </select>
                                  </div>
                                    <div class="form-group">
                                    <label for="name">Timeing</label>
                                    <input type="text" class="form-control" name="timeing" placeholder="Enter Time">
                                  </div>

                                  <center><button type="submit" name="add" class="btn btn-primary" >Add</button></center>
            
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
  <?php include "include/footer.php"; ?>  
