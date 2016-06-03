"use strict";

( function (){
var myNameIs = 'Bob';
function sayHello (name){
	console.log(name);
} // TODO: Fill in your name here.
sayHello(myNameIs);
// TODO:
// Create a function called 'sayHello' that takes a parameter 'name'.
// When called, the function should log a message that says hello from the passed in name.

// TODO: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.

// Don't modify the following line
// It generates a random number between 1 and 100 and stores it in random
var random = Math.floor((Math.random()*100)+1);
function isOdd(number){
	(number%2==0)? console.log("The number " + number + " is odd"): console.log("The number " + number + " is even");
}
var i =0;
do{
	isOdd(random);
	random = Math.floor((Math.random()*100)+1);
	i++
}while(i<10);
})();
console.log(myNameIs);
sayHello(myNameIs);
// TODO:
// Create a function called 'isOdd' that takes a number as a parameter.
// The function should use the ternary operator to log a message.
// The log should tell the number passed in and whether it is odd or not.

// TODO: Call the function 'isOdd' passing the variable 'random' as a parameter.
