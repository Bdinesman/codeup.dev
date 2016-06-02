// This is how you get a random number between 50 and 100
var allCones = Math.floor(Math.random() * 50) + 50;
// This is how you get a random number between 1 and 5
var cones = Math.floor(Math.random() * 5) + 1;
do{
	cones = Math.floor(Math.random() * 5) + 1;
	if(allCones-cones>0){
		allCones=allCones-cones;
		console.log(cones + " cones sold....");
	}
	else if ((allCones-cones)<0){
		console.log("I cannot sell " + cones + ", I only have " + allCones);
		break;
	}else if (allCones-cones==0){
		console.log("Yay, I sold them all!");
		allCones=allCones-cones;
		break;
	}
}while(allCones>0);
var x=1;
while(x<65536){
	x=x*2;
	console.log(x);
}