<?php 

session_start();


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar Dashboard Template</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;   
}  
button {   
        background-color: #4CAF50;   
        width: 100%;  
        color: white;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }   
</style>  

  </head>



  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Coding <span>Snow 123</span></h3>
      </div>
      <div class="right_area">
        <a href="login.php" class="logout_btn" style="padding:10px;">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="1.png" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="#"><i class="fas fa-cogs"></i><span>Components</span></a>
        <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
        <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="1.png" class="profile_image" alt="">
        <h4><?php //echo $_SESSION['user_name']; ?>Jessica</h4>
      </div>
      <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="#"><i class="fas fa-cogs"></i><span>Components</span></a>
      <a href="#"><i class="fas fa-table"></i><span>Tables</span></a>
      <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
    <!--sidebar end-->

    <?php 

    $edit_id = $_GET['edit'];

    $conn = mysqli_connect('localhost','root','','senior_citizen');

    $sql = "SELECT * FROM users WHERE user_id = '$edit_id' ";
    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($result)) {
        $username     = $row['username'];
        $password     = $row['password'];
        $name         = $row['user_name'];
        $age          = $row['user_age'];
        $phonenumber  = $row['user_phonenumber'];
    }


    ?>

    <div class="content">
      <div class="card">
        <br>
         <a href="index.php"> Return Back To Index </a>
         <br><br><br>
      <form action="backend/edit_user.php" method="POST">  
          <div class="container">   
                <input type="hidden" name="updateID" value="<?php echo $edit_id ?>">
               <label>Add Username: </label>   
               <input type="text" placeholder="Enter Username" name="username" value="<?php echo $username ?>">  
               <label>Add Password </label>   
               <input type="password" placeholder="Enter Password" name="password" value="<?php echo $password ?>">  
                <label>Add Name </label>   
               <input type="text" placeholder="Enter Name" name="name" value="<?php echo $name ?>"> 
                 <label>Add Age </label>   
               <input type="text" placeholder="Enter Age" name="age" value="<?php echo $age ?>"> 
                 <label>Add Phonenumber </label>   
               <input type="text" placeholder="Enter Phonenumber" name="phonenumber" value="<?php echo $phonenumber ?>"> 
               <button type="submit" name="editBtn">Submit</button>   
          </div>   
       </form>  
      </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>