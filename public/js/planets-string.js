(function(){
    "use strict";

    function convertToList (array){
        var convertedList = "<ul>\n<li>" + array.join("</li>\n<li>") + "</li>\n</ul>";
        console.log(convertedList);
    }
    function convertToBreaks (array){
        var brList = planetsArray.join("<br>\n") + "<br>";
        console.log(brList);
    }
    var planetsString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";
    var planetsArray= planetsString.split("|");

    // TODO: Convert planetsString to an array, save it to planetsArray.

    console.log(planetsArray);
    convertToBreaks(planetsArray);
    convertToList(planetsArray);
    // TODO: Create a string with <br> tags between each planet. console.log() your results.
    //       Why might this be useful?

    // Bonus: Create a second string that would display your planets in an undordered list.
    //        You will need an opening AND closing <ul> tags around the entire string, and <li> tags around each planet.
    //        console.log() your results.
})();
