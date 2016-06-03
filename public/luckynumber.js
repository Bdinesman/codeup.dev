Skip to content
 
 
Search…
All gists
GitHub
New gist @Bdinesman
  Star 0
  Fork 0
  @CodeupInstructorsCodeupInstructors/hello-world-js.js SECRET
Created 32 minutes ago
Embed  
<script src="https://gist.github.com/CodeupInstructors/a765acc1ee7c6556721bde8133dbcb1e.js"></script>
  Download ZIP
 Code  Revisions 1
Hello world activity. Review JS control structures (conditionals and loops).
Raw  hello-world-js.js
'use strict';

/*
 * How many times a lucky number is repeated for every 100 customers?
 */
var luckyNumber;
var i = 1;
var counter0=0;
var counter1=0;
var counter2=0;
var counter3=0;
var conter 4=0;
var counter 5=0;

while (i < 100) {
    luckyNumber = Math.floor(Math.random()* 6);
    if(luckyNumber==0){
    	counter0=counter0+1;
    }
    else if(luckyNumber==1){
    	counter1=counter1+1;
    }
    else if(luckyNumber==2){
    	counter2=counter2+1;
    }
    else if(luckyNumber==3){
    	counter3=counter1+1;
    }
    else if(luckyNumber==4){
    	counter4=counter1+1;
    }
    else if(luckyNumber==5){
    	counter5=counter1+1;
    }
    i++;
}
console.log("0 appeared appeared " + counter0 + " times");
console.log("1 appeared appeared " + counter1 + " times");
console.log("2 appeared appeared " + counter2 + " times");
console.log("3 appeared appeared " + counter3 + " times");
console.log("4 appeared appeared " + counter4 + " times");
console.log("5 appeared appeared " + counter5 + " times");
// The output should be something like

// 0 appeared 10 times
// 1 appeared 20 times
// 2 appeared 15 times
// 3 appeared 35 times
// 4 appeared 4 times
// 5 appeared 16 times

// The total should be 100
 @Bdinesman
           
Write  Preview

Leave a comment
Attach files by dragging & dropping,  Choose Files selecting them, or pasting from the clipboard.
 Styling with Markdown is supported
Comment
Status API Training Shop Blog About
© 2016 GitHub, Inc. Terms Privacy Security Contact Help