
function escolherFoto(){
	var radios = document.getElementsByName("foto");
	for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            $("#avatarSelecionado").attr("src",'/assets/img/'+radios[i].value+'');
            $("#avatarForm").val(radios[i].value);
        }
    }
}