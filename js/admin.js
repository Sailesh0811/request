        $(document).ready(function() {
  	$('#delete').click(function(){
  var teamid=$('#teamid').val();
  $.ajax({
    type:"POST",
    url:"../php/admin.php",
    data:{
     teamid:teamid
    },
    success:function(data){
      //console.log(data);
      if(JSON.parse(data)=="success"){
      	//console.log(data);
      	window.location="../html/test.php";
      }
      else{
      	alert('Retry');
      }
      
    }
  });
});
  	$('#session').click(function(){
  //var teamid=$('#teamid').val();
  $.ajax({
    type:"POST",
    url:"../php/session.php",
    
    success:function(data){
      //console.log(data);
      if(JSON.parse(data)=="success"){
      	//console.log(data);
      	window.location="../html/test.php";
      }
      else{
      	alert('Retry');
      }
      
    }
  });
});
});

   