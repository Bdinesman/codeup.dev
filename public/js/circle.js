(function() {
    "use strict";

    // create a circle object
    var circle = {
        radius: 3,
        getArea: function () {
            // TODO: complete this method
            // hint: area = pi * radius^2
            var area = Math.PI * Math.pow(this.radius,2);
            return area; // TODO: return the proper value
        },

        logInfo: function (doRounding) {
            var area=this.getArea();
            if(doRounding==true){
                console.log("Area of a circle with radius: " + this.radius + ", is: " + Math.floor(area));

            }else if(doRounding==false){
                console.log("Area of a circle with radius: " + this.radius + ", is: " + area);
            }
        }
    };

    // log info about the circle
    console.log("Raw circle information");
    circle.logInfo(false);
    console.log("Circle information rounded to the nearest whole number");
    circle.logInfo(true);

    console.log("=======================================================");
    // TODO: Change the radius of the circle to 5.

    // log info about the circle
    circle.radius=5;
    console.log("Raw circle information");
    circle.logInfo(false);
    console.log("Circle information rounded to the nearest whole number");
    circle.logInfo(true);
})();
