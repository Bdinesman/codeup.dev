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
(function(){
var randomArray=[];
var threeArray=[];
function generateArray(){
	for(i=0;i<20;i++){
	var random = Math.floor(Math.random()*1000);
	randomArray.push(random);
	}
	document.write("Random Array: [" + randomArray.sort() + "]<br>"); 
	randomArray.forEach(sort);
	document.write("\nNumbers Divisible by Three: [" + threeArray.sort() + "]");
}
function sort(number){
	if (number%3==0){
		threeArray.push(number);
	}
}
generateArray();
})();

