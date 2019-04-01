
function randomIntFromInterval(min,max)
{
    
    return Math.floor(Math.random()*(max-min+1)+min);
}
function dado(){

var tipoDado=document.getElementById("valoresDados").value;
document.getElementById("seunumero").innerHTML = "Seu número é:";
if (tipoDado== "D4") {   
document.getElementById("mensagem").innerHTML = randomIntFromInterval(1,4);
} else if (tipoDado=="D12") {
document.getElementById("mensagem").innerHTML =randomIntFromInterval(1,12);
  }else if (tipoDado=="D10") {
    document.getElementById("mensagem").innerHTML =randomIntFromInterval(1,10);
      }else{
        document.getElementById("mensagem").innerHTML =randomIntFromInterval(1,8);
          }
}

document.getElementById("sortear").onclick = function() {dado()};