<!DOCTYPE html>
<html lang="en">
<head>
  <title>Better Environment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Bootstrap Dropdown Hover CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
  <link rel="stylesheet" href="default.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
  
</head>
<body style="height:800px; font-size:13px;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php"><b>Better Environment</b></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>

      <li><a href="temp.php">Temp</a></li>
      <li><a href="co2.php">CO2</a></li>
	  <li><a href="humidity.php">Humidity</a></li>
	
	<li>
<div class = "dropdown">
   
   <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">
   Compare Graph <span class="caret"></span>
  </button>
   
   <ul class = "dropdown-menu pull-right" role = "menu" aria-labelledby = "dropdownMenu1">
      <li role = "presentation">
         <a href="compare1.php"><center>CO2</center></a>
      </li>
      
      <li role = "presentation">
         <a href="compare2.php"><center>Humidity</center></a>
      </li>
      <li role = "presentation">
         <a href="compare3.php"><center>Temperature</center></a>
      </li> 
	  
	  
	  
   </ul>
   
</div>
</li>
	 </div>
	  
	
    </ul>
  </div>
</nav>
  
<div class="container" style="margin-bottom:20px;">
	<div class="row"> 
		<div class="col-md-12">
			<div class="col-md-7 tbl_body" >
					<table id="table_body" border="2" class="table table-fixed" >
					<tbody>
							<h1 class="prothm" ><b>Latest data Collection</b></h1>
					<tr>
						<td><b>Date</b></td>
						<td><b>Time</b></td>
						<td><b>Temprature</b></td>
						<td><b>Feels Like</b></td>
						<td><b>Humidity</b></td>
						<td><b>CO2</b></td>
						
						
					</tr>
					</tbody>
				  </table>
			</div>
			<div class="col-md-5">
				<div class ="right_side">
					
					
					
					
					
			<div class="image" style="max-width:500px;margin-top:70px;">

			  <img class="mySlides w3-animate-fading" src="image/co2/Measuring Value of CO2(ppm) for Every Ten Minitues in Farmgate.png" style="width:100%">
			  <img class="mySlides w3-animate-fading" src="image/temp/Measuring Value of Temperature and Feels Like for every 20 Minute in Farmgate.png" style="width:100%">
			  <img class="mySlides w3-animate-fading" src="image/Humidity/Measuring Value of Humidity for every Twenty Minitues in Farmgate.png" style="width:100%">
			  <img class="mySlides w3-animate-fading" src="image/Collected values of CO2 in different areas of Dhaka city.png" style="width:100%">
			   <img class="mySlides w3-animate-fading" src="image/Collected values of Humidity in different areas of Dhaka city.png" style="width:100%">
			   <img class="mySlides w3-animate-fading" src="image/Collected values of Temperature in different areas of Dhaka city.png" style="width:100%">
			</div>

			<script>
			var myIndex = 0;
			carousel();

			function carousel() {
				var i;
				var x = document.getElementsByClassName("mySlides");
				for (i = 0; i < x.length; i++) {
				   x[i].style.display = "none";  
				}
				myIndex++;
				if (myIndex > x.length) {myIndex = 1}    
				x[myIndex-1].style.display = "block";  
				setTimeout(carousel, 1000);    
			}
			</script>

				</div>
			</div>
		</div>
	</div>
  
  
  
  
</div>
<div class="footer">
  
  <p>Developed By : Group-07,IoT Second Batch , DataSoft</p>
  <p>Special Thanks to DataSoft,ICT Division,LICT,Bangladesh Hi Tech Authority</p>
  
</div>


<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase-messaging.js"></script>
<script src="js/bootstrap.min.js"></script>

    <!-- Bootstrap Dropdown Hover JS -->
    <script src="js/bootstrap-dropdownhover.min.js"></script>

<script>
// Initialize Firebase
var config = {
apiKey: "AIzaSyB9RyJlBz2vW76VSg99EoVr11y_2bjzkj8",
authDomain: "better-environment-master.firebaseapp.com",
databaseURL: "https://better-environment-master.firebaseio.com",
projectId: "better-environment-master",
storageBucket: "better-environment-master.appspot.com",
messagingSenderId: "289755352780"
};
firebase.initializeApp(config);

</script>
  
  
<script> 

var rootRef = firebase.database().ref("sensor").orderByChild("Date").limitToFirst(500);
//var rootReff = rootRef.orderBy("Date").limit(3)

rootRef.on("child_added",snap =>{
	var Date = snap.child("Date").val();
	
	var Time = snap.child("Time").val();
	var temperature = snap.child("temperature").val();
	var humidity = snap.child("humidity").val();
	var Feels_Like = snap.child("Feels Like").val();
	var CO2 = snap.child("CO2").val();
	
	$("#table_body").append("<tr><td> "+ Date + "</td><td> "+ Time + "</td><td> "+ temperature + "</td><td> "+ humidity + "</td><td> "+ Feels_Like + "</td><td>" + CO2 +" </td></tr>");
	
	
	
});
 </script>
  
  

<script src="http://code.jquery.com/jquery-3.3.1.js"></script>




</body>
</html>
