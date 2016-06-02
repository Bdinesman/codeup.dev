"use strict";
while(true){
	var name = prompt("Please enter your name:");
	if(name!=""){
		break;
	}
}
alert("Welcome, " + name + "!");
var pizza = confirm("Do you like pizza?");
if(pizza==true){
	alert("Of course you do. Who wouldn't?");
}else{
	alert("Liar!!!!!");
}

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.

// TODO: Show an alert message that welcomes the user based on their input.

// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.
