
function randomIntFromInterval(min,max)
{
    
    return Math.floor(Math.random()*(max-min+1)+min);
}
function dado(){
document.getElementById("campoMensagem").placeholder = randomIntFromInterval(1,8);
}

document.getElementById("sortear").onclick = function() {dado()};