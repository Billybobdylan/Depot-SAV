var age = prompt("Ecrivez un âge")
var jeune=0
var vieux=0
var moyen=0

do {
     if (age<20) {
        jeune++
        age = prompt("Ecrivez un âge")
    }
    else if(20<=age & age<=40) {
        moyen ++
        age = prompt("Ecrivez un âge")
    }
    else if(age>40) {
        vieux++
        age = prompt("Ecrivez un âge")
    }
}
while (age<100)

if (age=>100) { 
    vieux++ 
}
alert("Il y a " + jeune + " personnes de moins de 20 ans, " + moyen + " personnes âgés de 20 a 40 ans et " + vieux + " personne âgés de plus de 40 ans.")
 
