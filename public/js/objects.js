(function(){
    "use strict";
    var person = {
    	firstName:'Brandon',
    	lastName:'Dinesman',
    	sayHello:function () {
    		alert("Hello! My name is " + this.firstName + " " + this.lastName);
    	}
    }
    console.log(person);
    person.sayHello();
    // TODO: Create person object
    // var person = todo;

    // TODO: Create firstName and lastName properties in your person object; assign your name to them

    // TODO: Add a sayHello method to the person object that
    //       alerts a greeting using the firstName and lastName properties

    // Say hello from the person object.
    // person.sayHello();
})();
var randomArray=[];
var threeArray=[];
function generateRandomArray(n){
	for(i=0;i<n;i++){
	var random = Math.floor(Math.random()*1000);
	randomArray.push(random);
	}
	document.write("Random Array: [" + randomArray.sort() + "]"); 
	return randomArray;
}
function divisibleByThree(array){
	array.forEach(sort);
	document.write("Numbers Divisible by Three: [" + threeArray.sort() + "]"); 
}
function sort(number){
	if (number%3==0){
		threeArray.push(number);
	}
}
var testArray = generateRandomArray(100);
divisibleByThree(testArray);