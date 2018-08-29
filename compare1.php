<!DOCTYPE html>
<html lang="en">
<head>
  <title>Better Environment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
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
      <li><a href="home.php">Home</a></li>

      <li><a href="temp.php">Temp</a></li>
      <li class="active"><a href="co2.php">CO2</a></li>
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
	
    </ul>
  </div>
</nav>
  
<div class="container" style="margin-bottom:20px;">
	<div class="row"> 
		<div class="col-md-12">

			<h1 class="balake"><b>" Collected Values of CO2 in difference areas of Dhaka City "</b></h1>
				<div class ="right_side">
																
					
			<div class="image" style="max-width:500px;margin-top:70px;">

			  
			  
			  <img class="mySlides w3-animate-fading" src="image/Collected values of CO2 in different areas of Dhaka city.png" style="width:100%">
			
			  
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

var rootRef = firebase.database().ref("sensor").orderByChild("Date").limitToFirst(100);
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
