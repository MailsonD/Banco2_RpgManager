var logadoRef = firebase.database().ref('logados/'+emailUsuario.split('@')[0]);
logadoRef.set({
	nome : usuarioLogado,
	email : emailUsuario
});


firebase.database().ref().child('logados').on('child_added', function(snap) {
    var novousuario = snap.val(); 
    usuarios.innerHTML += "<p id='"+novousuario.email+"' class='white-text'>"+novousuario.nome+"</p><br>";
 });

firebase.database().ref().child('logados').on('child_removed', function(snap) {
    var usuarioRemovido = snap.val(); 
    document.getElementById(usuarioRemovido.email).remove();
 });
