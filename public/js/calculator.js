var calculator={
	'leftHand':"",
	'operator':"",
	'rightHand':"",
	'input':"",
	bttnPress:function (){
		var input=event.keyCode;
		if(input==49){
			input=1;
			return input;
		}else if(input==50){
			input=2;
			return input;
		}else if(input==51){
			input=3;
			return input;
		}else if(input==52){
			input=4;
			return input;
		}else if(input==53){
			input=5;
			return input;
		}else if(input==54){
			input=6;
			return input;
		}else if(input==55){
			input=7;
			return input;
		}else if(input==56){
			input=8;
			return input;
		}else if(input==57){
			input=9;
			return input;
		}else if(input==48){
			input=0;
			return input;
		}else if(input==61 || input==13){
			input='Enter';
			return input;
		}else if(input==45){
			input='-';
			return input;
		}else if(input==46){
			input='.';
			return input;
		}else if(input==99){
			input='c';
			return input;
		}else if(input==61){
			input='=';
			return input;	
		}else if(input==43){
			input='+';
			return input;
		}else if(input==120 || input==42){
			input='*';
			return input;
		}
	},
	buttonValueCheck:function(){
		var buttonValue = "";
	}
}
var leftSide = document.getElementById('leftSide');
var operator = document.getElementById('operator');
var rightSide= document.getElementById('rightSide');
var buttons = document.getElementsByTagName('button');
var leftSideValue = "";
var operaterValue = "";
var rightSideValue = "";
var result = 0;
function checkButtonPress(){
	var pressed = calculator.bttnPress();
	if(pressed=='c'){
		leftSide.value="";
		operator.value="";
		rightSide.value="";
	}
	if(pressed=='Enter'&& rightSide.value!=""){
		calculate();
	}
	if(typeof pressed=='number'){
		if((rightSide.value=="") && (operator.value=="")){
			leftSideInput();
			console.log(operator.innerText);
		}if(operator.value!=""){
			rightSideInput();
		}
	}
	if(typeof pressed!='number' && pressed!='Enter' && operator.value=="" && pressed!='c'){
			operand();
	}
}
for(var i=0;i<buttons.length;i++){
	buttons[i].addEventListener('click',pressedOperations,false);
}
function leftSideInput(){
	leftSide.value += calculator.bttnPress();
	//leftSide.value=leftSide.value + leftSideValue;
}
function operand(){
	var operaterValue = calculator.bttnPress();
	operator.value=operator.value + operaterValue;
	return operaterValue;
}
function rightSideInput(){
	rightSide.value += calculator.bttnPress();
}
function calculate(){
	var firstValue = parseInt(leftSide.value);
	var secondValue = parseInt(rightSide.value);
	if (operator.value=='+'){
		result=firstValue+secondValue;
	}else if(operator.value=='-'){
		result=firstValue-secondValue;
	}else if(operator.value='*'){
		result=firstValue*secondValue;
	}
	operator.value="";
	rightSide.value="";
	leftSide.value=result;
}
function pressedOperations (){
	var pressed=parseInt(this.value);
	console.log(pressed);
	if(isNaN(pressed)==true && this.value=='c'){
		leftSide.value="";
		operator.value="";
		rightSide.value="";
	}
	if(this.value=='Enter'&& rightSide.value!=""){
		calculate();
	}
	if(typeof pressed=='number' && isNaN(pressed)==false){
		if((rightSide.value=="") && (operator.value=="")){
			leftSide.value += pressed;
			console.log(operator.innerText);
		}if(operator.value!=""){
			rightSide.value += pressed;
		}
	}
	if(isNaN(pressed)==true && this.value!='Enter' && operator.value=="" && this.value!='c'){
		pressed=this.value;
		operator.value=operator.value + pressed;
	}
}
window.addEventListener("keypress",checkButtonPress,false);