$(document).ready(function(){
	$('#login').click(function(){
		var teamid=$('#teamid').val();
		
		var password=$('#password').val();
		if(teamid=="" || password==""){
			alert('Please fill all the fields');
		}
		else{
			$.ajax({
				type:"POST",
				data:{teamid:teamid,password:password},
				url:"../php/login.php",
				success:function(data){
					//console.log(data);
					if(JSON.parse(data)=="success"){
						//console.log(data);
						window.location="../html/event.html";
					}
					else if(data=="error"){
						alert('Error');
					}
				}
			})
		}
		//console.log(teamid+p1+p2+password);
	});
	
});