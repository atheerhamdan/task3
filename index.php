<!DOCTYPE html>

          <?php
session_start();
require_once ('connection.php');
if (isset($_POST['save'])) {
   
    $value = $_POST['sensor_value']; 
    $date= date('Y-m-d') ;
    $time= date('h:i:sa');
    $sql = "INSERT INTO sensor (  sensor_value,date,time) VALUES  ('$value','$date','$time')";
    if ($con->query($sql)) {
        $_SESSION['success'] = 'تم الاضافة بنجاح';
                   
    } else
         $_SESSION['error'] = $con->error;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet" type="text/css"/>
     
    </head>
  
    <body>
          
           
    <div class="box">
       <nav>
            <ul>
                
                <li ><a href="" onclick="return false;">اضافة قيم الحساس</a></li>
            
                <li><a href="get.php">عرض قيم الحساس </a></li>
                <li style="float: left;"><a href="#" onclick="window.close();return false;">خروج  </a></li>
            </ul>  
        </nav>
       
        <h2>اضافة قيم الحساس</h2>
       
         
       
        <form action="index.php" method="POST" >
               <div class="form-group" dir="rtl">
               <label class="label2" >قراءة  الحساس </label><input class="form-fields" name="sensor_value" type="number">
          </div>
               <div class="setting" dir="rtl">
                   <input class="btn-submit" name="save" type="submit" value="حفظ">
          </div>
             
           </form>
      <?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='error'  dir='rtl'>
			  		".$_SESSION['error']."
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}else if(isset($_SESSION['success'])){
  			echo "
  				<div class='sucess' dir='rtl'>
			  		".$_SESSION['success']."
			  	</div>
  			";
  			unset($_SESSION['success']);
  		}
  	?>
            </div>
        
      
        
    </body>
</html>
