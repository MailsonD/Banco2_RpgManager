function escrever(msg) {
	var msgRef = firebase.database().ref().child('mensagens').push();
	msgRef.set({
		msg : msg,
		usuario : usuarioLogado
	});
}

// firebase.database().ref().child('mensagens').on('child_added', function(snap) {
//       var novamensagem = snap.val(); //Nova mensagem recebida.
//       if(novamensagem.usuario == usuarioLogado){
//       	boxMsg.innerHTML += "<div class='col m12 col s12'>"+
//       	"<div class='box-blue'>"+
//       	"<img class='pull-right'/>"+
//       	"<p>"+novamensagem.texto+"</p>"+
//       	"<div>"+
//       	"<strong>"+novamensagem.usuario+"</strong>"+
//       	"<span class='date'> Recived</span>"+
//       	"</div>"+
//       	"</div>"+
//       	"</div>";
//       }else{
//       	boxMsg.innerHTML += "<div class='col m12 col s12'>"+
//       	"<div class='box-gray'>"+
//       	"<img class='pull-left'/>"+
//       	"<p>"+novamensagem.texto+"</p>"+
//       	"<div>"+
//       	"<strong>"+novamensagem.usuario+"</strong>"+
//       	"<span class='date'> Recived</span>"+
//       	"</div>"+
//       	"</div>"+
//       	"</div>";
//       }
//       console.log(novamensagem.texto,novamensagem.usuario);
//   });