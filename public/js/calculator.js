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
		}else if(input==45 || input==95){
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
var moveable = document.getElementById('calcBody').draggable=true;
var leftSideValue = "";
var operaterValue = "";
var rightSideValue = "";
var result = 0;
function checkButtonPress(){
	var pressed = calculator.bttnPress();
	console.log(pressed);1
	if(pressed=='c'){
		leftSide.value="";
		operator.value="";
		rightSide.value=""
		result=0;
	}
	else if(pressed=='Enter'&& rightSide.value!=""){
		calculate();
	}
	else if(typeof pressed=='number'){
		if((rightSide.value=="") && (operator.value=="")){
			leftSideInput();
			console.log(operator.innerText);
		}if(operator.value!=""){
			rightSideInput();
		}
	}
	else if(typeof pressed!='number' && pressed!='Enter' && pressed!='.' && operator.value=="" && pressed!='c'){
			operand();
	}else if(pressed=='.'){
		if(leftSide.value.indexOf('.')==-1 && operator.value=="" && result==0){
			leftSideInput();
		}else if(operator.value!="" && rightSide.value.indexOf('.')==-1){
			rightSideInput();
		}
	}
}
for(var i=0;i<buttons.length;i++){
	buttons[i].addEventListener('click',pressedOperations,false);
}
function leftSideInput(){
	leftSide.value += calculator.bttnPress();
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
	var firstValue = parseFloat(leftSide.value);
	var secondValue = parseFloat(rightSide.value);
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
	if(this.value=='c'){
		leftSide.value="";
		operator.value="";
		rightSide.value=""
		result=0;
	}
	else if(this.value=='Enter'&& rightSide.value!=""){
		calculate();
	}
	else if(typeof pressed=='number' && isNaN(pressed)==false){
		if((rightSide.value=="") && (operator.value=="")){
			leftSide.value+=this.value;
		}if(operator.value!=""){
			rightSide.value+=this.value;
		}
	}
	else if(isNaN(pressed)==true && pressed!='Enter' && this.value!='.' && operator.value=="" && pressed!='c'){
			operator.value+=this.value;
	}else if(this.value=='.'){
		if(leftSide.value.indexOf('.')==-1 && operator.value=='' && result==0){
			leftSide.value+=this.value;
		}else if(operator.value!='' && rightSide.value.indexOf('.'==-1)){
			rightSide.value+=this.value;
		}
	}
}
window.addEventListener("keypress",checkButtonPress,false);