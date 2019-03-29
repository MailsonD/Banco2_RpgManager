
function atualizarAtributos(){
	let atrforca = Number(forca.value);
	let atrdestreza = Number(destreza.value);
	let atrinteligencia = Number(inteligencia.value);
	let atrconstituicao = Number(constituicao.value);
	let atrsorte = Number(sorte.value);
	let atrcarisma = Number(carisma.value);

	let total = atrforca+atrdestreza+atrinteligencia+atrconstituicao+atrsorte+atrcarisma;
	console.log(total);
}