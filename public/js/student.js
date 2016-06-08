'use strict';
// Exercise 1
// Refactor this code to interact with the user, use prompt, alert,
// and confirm where needed. Here are some more rules:
// * Prompt the user for her name, and the name of the subject
// * Use at least one object. This object should have at least one
// * function.
// * Use at least one array (it must be part of the object)
// * Make it work for a variable number of grades.
var student = {
	"firstName":"",
	"lastName":"",
	"subjectList":[],
	"listOfSubjectNames":[],
	"subject":[	{			
		"subjectName":"",
		"grades":[],
		"average":0
		}
	],
	notOnList: function(subjectQuery){
		this.listOfSubjectNames.forEach(function(element,index){
			if(subjectQuery==element){
				return false;
			}else{
				return true;
			}
		}
	)},
	getName : function() {
		this.firstName = prompt("Pleaase Enter your first name");
		this.lastName=prompt("please Enter your last name");
	},
	enterGrades: function(){
		var gradeSubject = prompt("Please enter the subject");
		var onList = this.notOnList(gradeSubject);
		if(this.notOnList==true){
			this.subject.subjectName=gradeSubject;
			this.listOfSubjectNames.push(gradeSubject);
			this.subjectList.push(subject);
		}else{
			this.subjectList.forEach(function (element,inde){
				this.subject=this.subjectList[this.listOfSubjectNames.indexOf(gradeSubject)];
			})
		}
		var enteredGrade = prompt("Please enter a grade.Type QUIT to exit");
		while(true){
			if(enteredGrade=="QUIT" || enteredGrade==null){
				this.subjectList.push.this.subject;
				return this.subject;
				break;
			}
			enteredGrade=Number(enteredGrade);
			this.subject.grades.push(enteredGrade);
			var enteredGrade = prompt("Please enter a grade.Type QUIT to exit");
		}
		return subject;
	},
	averageGrades: function(){
		var awesomeGrade = 80;
		var sum=0;
		for(var j=0;j<this.subjectList.length;j++){
			for(var i=0;i<this.subjectList[j].grades.length;i++){
				sum=sum+this.subjectList[j].grades[i];
				console.log(sum);
			}
			this.subjectList[j].average=sum/(this.subjectList[j].grades.length);
			console.log("Your average for " + this.subjectList[j].subjectName + " is " + this.subjectList[j].average);
			if (this.subjectList[j].average > awesomeGrade) {
    			console.log("You're Awesome!!!!");
			} else {
    			console.log('You need more practice.');
			}
			console.log(this.subjectList);
		}
	}

}
student.enterGrades();
student.enterGrades();
student.averageGrades();