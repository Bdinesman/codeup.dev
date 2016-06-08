/*function Clock(){
	this.minutes=10;
	this.seconds=0;
	this.getSeconds=function(){
		var getSeconds;
		if(this.seconds>10){
			getSeconds="0" + this.seconds;
			return getSeconds;
		}else if(this.secons<10){
			getSeconds=(this.seconds);
			return getSeconds;
		}
	}
	this.getMinutes=function(){
		var getMinutes;
		if(this.minutes>10){
			getMinutes="0" + this.minutes;
			return 	getMinutes;
		}else{
			printMinutes=this.minutes;
			return getMinutes;
		}
	}
	this.display=function(){
		var body = document.getElementsByClassName("body");
		body.innerHTML="asdfasdf";
		//+ ":" + this.seconds;
	}
	this.countdown=function(){
		if(this.seconds>0){
			this.seconds--;
		}else if(this.seconds==0){
			this.minutes--;
			this.seconds=59;
		}
	}
}
*/