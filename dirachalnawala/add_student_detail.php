<?php include "include/header.php"; ?> 
    <body class="sb-nav-fixed">
       <?php include "include/sidenav.php"; ?>
       <?php 

          if (isset($_POST['add'])) {
                
                $name = $_POST['name'];
                $class_code = $_POST['class_code'];
                $std_code = $_POST['std_code'];
                $course = $_POST['course'];
                $year = $_POST['year'];

                $query="INSERT INTO stu_detail(name,class_code,std_code,course,year) VALUES('{$name}','{$class_code}','{$std_code}','{$course}','{$year}') ";

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
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                                  </div>
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
                                    <label for="Std_code">Student Code</label>
                                    <input type="text" class="form-control" name="std_code" placeholder="Enter Student Code">
                                  </div>
                                  <div class="form-group">
                                    <label for="Course">Course</label>
                                    <select class="form-control" name="course">
                                      <option>BBA</option>
                                      <option>BSC</option>
                                      <option>BCA</option>
                                      <option>B.COM</option>
                                    </select>
                                  </div>
            
                                 <div class="form-group">
                                    <label for="year">Year</label>
                                    <select class="form-control" name="year">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                    </select>
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
