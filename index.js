

var rootRef = firebase.database().ref.child("sensor");

rootRef.on("child_added",snap =>{
	
	var temperature = snap.child("temp").val();
	var CO2 = snap.child("CO2").val();
	
	
	$("#table_body").append("<tr><td> "+ "temperature" + "</td><td>" + CO2 +" </td></tr>");
	
	
	
});