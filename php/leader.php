<?php
require 'dbconfig.php';
session_start();


?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>  	
	<title>Leaderboard || Re:quest</title>
	<script src="https://unpkg.com/vue/dist/vue.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="../materialize/css/materialize.css">
</head>
<body>
	<table class="responsive-table">
        <thead>
          <tr>
              <th data-field="id">S.No</th>
              <th data-field="name">Participants</th>
              <th data-field="price">Army</th>
                 <th data-field="price">Dragon</th>
                 <th data-field="price">Lifelines</th>
          </tr>
        </thead>

        <tbody>
        <?php
       
        
        
        $q="select * from users order by (30*dragon+army+30/(lifeline+1)) desc";
        $result=mysqli_query($connection,$q);$res= array();
        $row=mysqli_fetch_assoc($result);$j=1;
        for($i=0;$i<mysqli_num_rows($result);$i++){
        
         echo "<tr>";
        echo "<td>".$j."</td>";
        echo "<td>".$row['p1']." , ".$row['p2']."</td>";
        echo "<td>".$row['army']."</td>";
        echo "<td>".$row['dragon']."</td>";
        $lif=2-$row['lifeline'];
        echo "<td>".$lif."</td>";
        $row=mysqli_fetch_assoc($result);
        echo "</tr>";$j++;
}
          
           
          
          ?>          
        </tbody>
      </table>
      
</body>
</html>
