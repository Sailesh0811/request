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
	<title>Admin || Re:quest</title>
	<!-- <script src="https://unpkg.com/vue/dist/vue.js"></script> -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="../materialize/css/materialize.css">
  <script type="text/javascript" src="../js/admin.js"></script>
</head>
<body>
	<table class="responsive-table">
        <thead>
          <tr>
              <th data-field="id">S.No</th>
              <th data-field="teamid">Team id</th>
              <th data-field="name">Participants</th>
              <th data-field="army">Army</th>
                 <th data-field="dragon">Dragon</th>
                 <th data-field="reg1">Reg1</th>
                 <th data-field="reg2">Reg2</th>
                 <th data-field="mobile1">Mobile1</th>
                 <th data-field="mobile2">Mobile2</th>
                 <th data-field="college">College</th>
          </tr>
        </thead>

        <tbody>
        <?php
       
        
        $q="select * from users order by dragon desc,army desc";
        $result=mysqli_query($connection,$q);$res= array();
        $row=mysqli_fetch_assoc($result);$j=1;
        for($i=0;$i<mysqli_num_rows($result);$i++){
        
         echo "<tr>";
        echo "<td>".$j."</td>";
        echo "<td>".$row['teamid']."</td>";
        echo "<td>".$row['p1']." , ".$row['p2']."</td>";
        echo "<td>".$row['army']."</td>";
        echo "<td>".$row['dragon']."</td>";
        echo "<td>".$row['reg1']."</td>";
        echo "<td>".$row['reg2']."</td>";
        echo "<td>".$row['mobile1']."</td>";
        echo "<td>".$row['mobile2']."</td>";
        echo "<td>".$row['college']."</td>";
        $row=mysqli_fetch_assoc($result);
        echo "</tr>";$j++;
}
          
           
          
          ?>          
        </tbody>
      </table>
      <div class="row">
        <div class="input-field col s6">
          <input id="teamid" type="text" class="validate" required>
          <label for="teamid">Enter team id</label>
        </div>
        <button class="btn waves-effect waves-light right blue accent-4" type="button" id="delete" name="action">Delete
        <i class="material-icons right">send</i>
      </button>
      </div>
      
</body>
</html>
