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
                                Status
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Student Code</th>
                                                <th>Class Code</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Status</th>
                                                <th>Last Time</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Student Code</th>
                                                <th>Class Code</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Status</th>
                                                <th>Last Time</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 

                                                $query="SELECT * FROM status";
                                                $smtp=mysqli_query($connection,$query);
                                                $i=1;
                                                while ($row=mysqli_fetch_array($smtp)) {

                                                    $id=$row['id'];
                                                    $class_code= $row['class_code'];
                                                    $std_code= $row['std_code'];
                                                    $date= $row['date'];
                                                    $time= $row['time'];
                                                    $status= $row['status'];
                                                    $last_time= $row['last_time'];

                                                    echo "<tr>";
                                                    echo "<td>{$i}</td>";
                                                    echo "<td>{$std_code}</td>";
                                                    echo "<td>{$class_code}</td>";
                                                    echo "<td>{$date}</td>";
                                                    echo "<td>{$time}</td>";
                                                    echo "<td>{$status}</td>";
                                                    echo "<td>{$last_time}</td>";
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
