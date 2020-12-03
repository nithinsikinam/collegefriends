<?php include "include/header.php"; ?> 
    <body class="sb-nav-fixed">
       <?php include "include/sidenav.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Student Details
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Class Code</th>
                                                <th>Student Code</th>
                                                <th>Course</th>
                                                <th>year</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Class Code</th>
                                                <th>Student Code</th>
                                                <th>Course</th>
                                                <th>year</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 

                                                $query="SELECT * FROM stu_detail";
                                                $smtp=mysqli_query($connection,$query);
                                                $i=1;
                                                while ($row=mysqli_fetch_array($smtp)) {

                                                    $name = $row['name'];
                                                    $class_code= $row['class_code'];
                                                    $std_code= $row['std_code'];
                                                    $course= $row['course'];
                                                    $year= $row['year'];

                                                    echo "<tr>";
                                                    echo "{$i}";
                                                    echo "<td>{$name}</td>";
                                                    echo "<td>{$class_code}</td>";
                                                    echo "<td>{$std_code}</td>";
                                                    echo "<td>{$course}</td>";
                                                    echo "<td>{$year}</td>";
                                                    echo "</tr>";

                                                    $i++;
                                                    
                                                }


                                             ?>
                                           
                                            
                                        </tbody>
                                    </table>
                                </div>
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
