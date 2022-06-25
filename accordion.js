"use strict"
document.addEventListener("DOMContentLoaded", () => {
    let acc = document.getElementsByClassName("accordion"); //sammelt alle Elemente mit der Klasse "accordion" in "acc"
    let content = document.getElementsByClassName('accordion-content'); //sammelt alle Elemente mit der Klasse "accordion-content" in "content"
    
    for (let i = 0; i < acc.length; i++) { // Geht alle "acc"-Elemente durch
        acc[i].onclick = function() { // Funktion beim Klicken eines "acc"-Elements
            var setClasses = !this.classList.contains('is-open'); // setClasses boolischer Wert der angibt ob "is-open" ein Teil von "acc"-Element ist
            setClass(acc, 'is-open', 'remove'); // setClass Funktion schließt alle offenen "acc"-Elemente
            setClass(content, 'show', 'remove'); // ""
            if (setClasses) { // Wenn setClasses = true dann:
                this.classList.toggle("is-open"); // "acc"-Element kriegt "is-open"
                this.nextElementSibling.classList.toggle("show"); // "acc"-Geschwister Element kriegt "show" also der Inhalt vom Akkordion
            }
        }
    }

    function setClass(obj, className, fnName) { // Ersetzt className durch den fnName, da "remove" nich existiert wird 
        for (let i = 0; i < obj.length; i++) { // "is-open" bzw "show" einfach mit "null" überschrieben
            obj[i].classList[fnName](className); //
        }
    }
})
