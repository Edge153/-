<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<p></p>
		<button disabled="disabled">立即抢购</button>
		<script>
			var time=5;
		 var timer=setInterval(function(){
		 	document.querySelector("p").innerHTML=time;		 	  
		 	  if(time==0){
		 	  	clearInterval(timer);
		 	  	document.querySelector("button").removeAttribute("disabled")
		 	  }
		 	time--;
		 	
		 },1000)
			
			
			
			
			
			
		</script>
	</body>
</html>
