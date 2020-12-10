   <?php include 'config.php'; ?>
    <?php 

     if (isset($_GET['delete'])) {
         
      $delete_id= $_GET['delete'];

      $query="DELETE FROM stu_detail WHERE id='{$delete_id}'";

      $smtp=mysqli_query($connection,$query);

      header("location:../tables.php");

       }


     if (isset($_GET['delete'])) {
         
      $delete_id= $_GET['delete'];

      $query="DELETE FROM settings WHERE id='{$delete_id}'";

      $smtp=mysqli_query($connection,$query);

      header("location:../setting.php");

       }

     ?> 