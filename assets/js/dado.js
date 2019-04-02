
function randomIntFromInterval(min,max)
{

	return Math.floor(Math.random()*(max-min+1)+min);
}
function dado(){

	let tipoDado=document.getElementById("valoresDados").value;
	let resultado;
	document.getElementById("seunumero").innerHTML = "Seu número é:";
	if (tipoDado== "D4") {   
		resultado = randomIntFromInterval(1,4);
		document.getElementById("mensagem").innerHTML = resultado;
	} else if (tipoDado=="D12") {
		resultado = randomIntFromInterval(1,12);
		document.getElementById("mensagem").innerHTML = resultado;
	}else if (tipoDado=="D10") {
		resultado = randomIntFromInterval(1,10);
		document.getElementById("mensagem").innerHTML = resultado;
	}else{
		resultado = randomIntFromInterval(1,8);
		document.getElementById("mensagem").innerHTML = resultado;
	}
	enviarMensagemDado(tipoDado,resultado)
}

document.getElementById("sortear").onclick = function() {dado()};

function enviarMensagemDado(tipoDado, resultado){
	let msg = usuarioLogado+" rolou o "+tipoDado+" e teve "+resultado+"!";
	console.log(msg);
	escrever(msg);
}