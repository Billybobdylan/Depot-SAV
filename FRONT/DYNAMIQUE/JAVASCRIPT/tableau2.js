
var b;
var a=Number;
var t;
var e=Number
var h;
var i;
var j;
var k;
var l;
var arr;


//InitTab(i)
{
    t=new Array
    t.length=prompt("Entrez le nombre d'element")
}
//SaisieTab(s)
{
    for (a = 0; a<t.length; a++)
{   b=Number(prompt("Notez les elements du tableau"));
    
    t[a] = b;  
    
}
}
//AfficheTab(f)
{
    document.write("Tableau :"+t)
}
//RechercheTab(r)
{
    e=prompt("Entrez le chiffre de la valeur")  
    document.write("Le chiffre sélectionner est"+t[e])
}

//InfoTab(f)
{
    h=Math.max(...t)
}
    document.write("La plus grande valeur ="+h)

j=0;

for (a = 0; a < t.length; a++)
{   
    j=j+t[a]   
}
    j=j/t.length
document.write("La moyenne du tableau ="+j)

//Tri a bulle

function bubbleSort(items) {
    var length = items.length;  
    for (var i = 0; i < length; i++) { 
          for (var l = 0; l < (length - i - 1); l++) { 
                   if(items[l] > items[l+1]) {
                           var tmp = items[l]; 
                items[l] = items[l+1]; 
                items[l+1] = tmp; 
            }
        }        
    }
}

var arr = t; 
bubbleSort(arr);

document.write("Le tableau avec le tri a bulles"+arr);