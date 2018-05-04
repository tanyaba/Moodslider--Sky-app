
var moodNum = 0;
function multiMood(){       // function to count number of different moods
    if(moodNum<5){
    moodNum+=1;
    }else{
        moodNum=1;
    }
}
// funtion to load the data from data file
function loadFile(value) {
    var moodList = ['Agitated', '', 'Calm', 'Happy', '', 'Sad', 'Tired', '', 'Wide Awake', 'Scared', '', 'Fearless'];
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            mood(this, moodList[value]);        // call mood function, parrameters = data from the file and selected mood
        }
    };
    xhttp.open("GET", "programmes.xml", true);
    xhttp.send();
}

// function to retrieve image and name for selectedMood
function mood(data, selectedMood) {
    multiMood();
    var xml = data.responseXML;
    var parent = xml.getElementsByTagName("programme");
    var count = moodNum;               //programme slot id where new suggestions will be displayed
    for (var i = 0; i < parent.length; i++) {
        if (parent[i].getElementsByTagName("mood")[0].childNodes[0].nodeValue === selectedMood && count < 6) {
             var card = "<img class='card-img-top h-75' src=" + parent[i].getElementsByTagName("image")[0].childNodes[0].nodeValue + ">" +
                    "<div class='card-body '> <p class='card-title'>" + parent[i].getElementsByTagName("name")[0].childNodes[0].nodeValue + "</p></div>";
            document.getElementById(count).innerHTML = card;
            count += 1;

        }
    }

}


//
//function loadFile(value) {
//    var moodList = ['Agitated', '', 'Calm', 'Happy', '', 'Sad', 'Tired', '', 'Wide Awake', 'Scared', '', 'Fearless'];
//    var xhttp = new XMLHttpRequest();
//    xhttp.onreadystatechange = function () {
//        if (this.readyState === 4 && this.status === 200) {
//            mood(this, moodList[value]);        // call mood function, parrameters = data from the file and selected mood
//        }
//    };
//    xhttp.open("GET", "programmes.xml", true);
//    xhttp.send();
//}
//
//// function to retrieve image and name for selectedMood
//function mood(data, selectedMood) {
//    var xml = data.responseXML;
//    var parent = xml.getElementsByTagName("programme");
//    var count =1;
//    for (var i = 0; i < parent.length; i++) {
//        if (parent[i].getElementsByTagName("mood")[0].childNodes[0].nodeValue === selectedMood && count < 6) {
//             var card = "<img class='card-img-top h-75' src=" + parent[i].getElementsByTagName("image")[0].childNodes[0].nodeValue + ">" +
//                    "<div class='card-body '> <p class='card-title'>" + parent[i].getElementsByTagName("name")[0].childNodes[0].nodeValue + "</p></div>";
//            document.getElementById(count).innerHTML = card;
//            count += 1;
//
//        }
//    }
//
//}

            


