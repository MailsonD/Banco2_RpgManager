
function atualizarAtributos(){
	let atrforca = Number(forca.value);
	let atrdestreza = Number(destreza.value);
	let atrinteligencia = Number(inteligencia.value);
	let atrconstituicao = Number(constituicao.value);
	let atrsorte = Number(sorte.value);
	let atrcarisma = Number(carisma.value);

	let total = atrforca+atrdestreza+atrinteligencia+atrconstituicao+atrsorte+atrcarisma;
	
	console.log(total);

	pontosUsados.innerHTML = total;
	if(total>20){
		$("#pontosUsados").css('color','red');
		$('#submitForm').prop('disabled', true);
	}else if(total<20){
		$("#pontosUsados").css('color','green');
		$('#submitForm').prop('disabled', true);
		}else{
			$("#pontosUsados").css('color','green');
			$('#submitForm').prop('disabled', false);
		}
}