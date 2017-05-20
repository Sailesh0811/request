$(document).ready(function (argument) {
	$.ajax({
		type:"POST",
		url:"../php/leaderboard.php",
		success:function(argument){
			console.log(argument);
			var res=JSON.parse(argument);
			console.log(res);
			for(var i=0;i<=res.length;i++){
				for(var j=0;j<3;){
				var s='<td>'+res[i][j]+'</td><td>'+res[i][j]+'</td><td>'+res[i][j]+'</td>';
				$('#app').append(s);
				j++;
			}
			
		}
		}
	});
})