 <?php   
 include 'db_connection.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `user` WHERE id = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  

           header('location:users_credentials.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>     