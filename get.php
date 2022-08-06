<!DOCTYPE html>

          <?php

require_once ('connection.php');

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
                
                <li><a href="index.php" >اضافة قيم الحساس</a></li>
            
                  <li><a href="#" onclick="return false;">عرض قيم الحساس </a></li>
                  <li style="float: left;"><a href="#" onclick="close();">خروج  </a></li>
            </ul>  
        </nav>
       
        <h2>عرض قيم الحساس</h2>
         <div class="form-group" >
             <table >
                      <thead>
                                
                                  
                                    <th> id</th>
                                    <th>value </th>
                              <th>date </th>
                             
<th>time </th>
                                
                                    
                               
                            </thead>
                            <tbody >
                                     <?php
                     $sql = "SELECT * FROM sensor ";
                     $query = $con->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                        <tr>
                     
                              <td><?php echo $row['id']; ?></td>
                           <td><?php echo $row['sensor_value']; ?></td>
                      
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['time']; ?></td>
                        </tr>
                      <?php
                    }
                  ?>
                             
                                
                            </tbody>
                        </table>
         
         </div>
          
           
          
            </div>
        </box>
        
    </body>
</html>

