document.getElementById("caixaMensagens").addEventListener("submit", (e)=>{
	let msg = campoMensagem.value;
	e.preventDefault();
	escrever(msg);
	caixaMensagens.reset();
});


function escrever(msg) {
	var msgRef = firebase.database().ref().child('mensagens').push();
	msgRef.set({
		msg : msg,
		usuario : usuarioLogado
	});
}

firebase.database().ref().child('mensagens').on('child_added', function(snap) {
      var novamensagem = snap.val(); //Nova mensagem recebida.
      let nomeMeste = novamensagem.usuario;
      if(novamensagem.mestre != undefined){
        nomeMeste += " (MESTRE)";
      }
      if(novamensagem.usuario == usuarioLogado){
      	boxMsg.innerHTML += "<div class='col s12 row'>"+
        						"<div class='col m7 col s7'></div>"+
        						"<div class='col m5 col s5 pull-right'>"+
          							"<div class='box-blue'>"+
            							"<p>"+novamensagem.msg+"</p>"+

          							"</div>"+
        						"</div>"+
      						"</div>";
      }else{
      	boxMsg.innerHTML += "<div class='col s12 row'>"+
        						"<div class='col m5 col s5 pull-left'>"+
          							"<div class='box-gray'>"+
            							"<label class='white-text'><b>"+nomeMeste+"</b></laber>"+
            								"<p>"+novamensagem.msg+"</p>"+
          							"</div>"+
        						"</div>"+
        					"<div class='col m7 col s7'></div>"+
      						"</div>";
      }
  });