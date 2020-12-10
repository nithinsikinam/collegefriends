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
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Class Code</th>
                                                <th>Student Code</th>
                                                <th>Course</th>
                                                <th>Year</th>
                                                <th>Edit</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Class Code</th>
                                                <th>Student Code</th>
                                                <th>Course</th>
                                                <th>Year</th>
                                                <th>Edit</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 

                                                $query="SELECT * FROM stu_detail";
                                                $smtp=mysqli_query($connection,$query);
                                                $i=1;
                                                while ($row=mysqli_fetch_array($smtp)) {

                                                    $id=$row['id'];
                                                    $name = $row['name'];
                                                    $class_code= $row['class_code'];
                                                    $std_code= $row['std_code'];
                                                    $course= $row['course'];
                                                    $year= $row['year'];

                                                    echo "<tr>";
                                                    echo "<td>{$i}</td>";
                                                    echo "<td>{$name}</td>";
                                                    echo "<td>{$class_code}</td>";
                                                    echo "<td>{$std_code}</td>";
                                                    echo "<td>{$course}</td>";
                                                    echo "<td>{$year}</td>";
                                                    echo "<td> <a href='edit_student.php?edit=$id' class'btn btn-primary'><i class='fas fa-edit mr-3'></i></a>";
                                                    echo "<a href='action.php?delete=$id' class'btn btn-primary '><i class='fas fa-trash-alt'></i></a></td>";
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
