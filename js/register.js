$(document).ready(function(){
	$('#login').click(function(){
		var reg1=$('#reg1').val();
		var reg2=$('#reg2').val();
		
		var p1=$('#p1').val();
		var p2=$('#p2').val();
		var college=$('#college').val();
		var mobile1=$('#mobile_number1').val();
		var mobile2=$('#mobile_number2').val();
		if( p1=="" || p2=="" ||  reg2=="" || reg1 =="" || college=="" || mobile2=="" || mobile1=="" ){
			alert('Please fill all the fields');
		}
		else{
			$.ajax({
				type:"POST",
				data:{ p1:p1,p2:p2,reg1:reg1,reg2:reg2,college:college,mobile1:mobile1,mobile2:mobile2},
				url:"../php/register.php",
				success:function(data){
					//console.log(data);
					if(data=="error"){
						alert('error');
					}
					else {
						alert ('Your team id '+ data);
						//console.log(data);
					}
				}
			})
		}
		//console.log(teamid+p1+p2+password);
	});
	
});