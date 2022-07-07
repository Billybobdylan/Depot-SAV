
var PU = Number(prompt("Entrez le prix de votre article :"))
var QTECOM = Number(prompt("Entrez la quantité de vos articles :"))
var PAP = 0
var TOT = PU * QTECOM

if(TOT>=100 && TOT<=200){
    var resultat = (TOT * 5) / 100;
    var PAP = TOT - resultat
    alert("Le prix est de : " + PAP + "€ après la remise de 5%")
}
if(PAP < 500){
    var PORT = (PAP * 2) / 100
    alert("Les frais de ports s'éleves à : " + PORT + "€")
        if(PORT < 6){
            var resultat = (PAP + 6);
            alert("Le prix avec les frais de port est de : " + resultat + "€");
        }
    }
