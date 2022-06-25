let i = 0; // Startpunkt
let imgArray = []; //Bildarray 
//let/const statt var
//use strict


// Bilder Array
imgArray[0] = 'images/slideshow/social_shaking_header4_mobil.jpg';
imgArray[1] = 'images/slideshow/istockphoto-965947982-1024x1024.jpg';
imgArray[2] = 'images/slideshow/gettyimages-868935172-612x612.jpg';


//Erstes Bild beim Laden der Seite direkt initialisieren, sonst 3s grau
setTimeout(function changeImg1() {
    document.getElementById(i).checked = true;
    document.getElementById('slide').src = imgArray[i];
    i++
}, 0)

// Bildwechsel
function changeImg() {
    document.getElementById('slide').className = 'animationSlide'; // gibt dem Slide die Animationsklasse
    document.getElementById(i).checked = true; // checkt den radiobutton mit der id=i 
    document.getElementById('slide').src = imgArray[i]; // Wechselt die src vom Bild in der html Datei mit dem jeweiligen Array-Eintrag
    // checkt ob index bereits Ende erreicht hat
    if (i < imgArray.length - 1) {
        // 1 Bild weiter
        i++;
    } else {
        // Zurück zum Anfang
        i = 0;
    }
}

// Bildwechsel-Intervall
var myInterval = setInterval(changeImg, 3000);

// Bildwechsel auf Knopfdruck
// Nächstes Bild
function changeNext() {
    if (i < imgArray.length - 1) {
        document.getElementById(i).checked = true;
        document.getElementById('slide').src = imgArray[i];
        i++;
    } else {
        document.getElementById(i).checked = true;
        document.getElementById('slide').src = imgArray[i];
        i = 0;
    }
}
// Bild davor
function changePrev() {
    if (i != 0) {
        document.getElementById('slide').src = imgArray[i];
        document.getElementById(i).checked = true;
        i = i - 1

    } else {
        document.getElementById('slide').src = imgArray[i];
        document.getElementById(i).checked = true;
        i = imgArray.length - 1;
    }
}

// Bildwechsel per Radiobuttons
function switchpic() {
    const rbs = document.querySelectorAll('input[name="rgroup"]'); // Sammelt alle radiobuttons in "rgroup"
    let selectedValue; // Hilfsvariable
    for (const rb of rbs) { // for-each-loop radiobutton(rb) der radiobuttons(rbs)
        if (rb.checked) { // wenn "rb" aktiv ist dann
            selectedValue = rb.value; // übergib dessen Wert an selectedValue
        }
    }
    i = selectedValue; // i soll dann diesen Wert annehmen damit auch das Bild dementsprechend gewechselt wird
    changeNext(); // changeNext() Funktion um den Intervall zu verkürzen und um die Wartezeit zu überspringen
}