

var rootRef = firebase.database().ref.child("sensor");
//var rootRef = firebase.database("better-environment-28083").ref.child("sensor");
//var rootRef = firebase.database("sensor").ref.child("value");
rootRef.on("child_added",snap =>{
	
	var CO2 = snap.child("CO2").val();
	var Date = snap.child("Date").val();
	var temperature = snap.child("temperature").val();
	var Time = snap.child("Time").val();
	var humidity = snap.child("humidity").val();
	
	
	$("#table_body").append("<tr><td>" + CO2 + "</td><td>"+ Date + "</td><td>"+ temperature + "</td><td>"+ Time + "</td><td>"+ humidity + "</td></tr>")
	
	
	
});

