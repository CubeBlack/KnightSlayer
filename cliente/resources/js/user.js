page.formLogin = "<h1>Usuario K-Slayer</h1><div id='formLogin-retorno'> </div><p><label>Nick/Email</label><input type='text' id='formLogin-user' ></p> <p><label>Senha/PassWord</label><input type='text' id='formLogin-pass'></p><p><input type='button' value='login' onClick='page.iLogin()'><input type='button' value='cancelar'></p>";
page.loginform = "";
page.logued = false;
page.iUser = [];
page.user = function(){
	page.popUp();
	if(page.logued==true){
		page.perfil();
		return;
	}
	page.popContent(page.formLogin);

}
page.iLogin = function(){
	user = document.getElementById("formLogin-user").value;
	pass = document.getElementById("formLogin-pass").value;
	term.com("user.login(" + user + "," + pass + ")",page.rLogin);
	console.log(term.ultimoRequerimentoDoServidor);
}
page.rLogin = function(msg){
	console.log(msg);
	if(msg=="Ok!"){
		page.popUp();
		page.getUser();
		return;
	}
	pass = document.getElementById("formLogin-retorno").innerHTML = "Usuario ou senha invalidos";
}
page.getUser = function(){
	term.com("user.get(json)",page.rGetUser);
	
}
page.rGetUser = function(msg){
	label = "User";
	if(msg[0]=="["){
		console.log(msg);
	}
	page.iUser = JSON.parse(msg);
	if(page.iUser.id != 0){
		label = page.iUser.nick;
		page.logued = true;
	}else{
		page.logued = false;
	}
	document.getElementById("userId").innerHTML = label;
}
page.perfil = function(){
	dados = {
		"titulo":page.iUser.titulo,
		"nick":page.iUser.nick
		};
	
	content =  page.replace(page.templateUserMyPerfil,dados);
	page.popContent(content);
}
page.sair = function(){
	term.com("user.sair()",page.getUser);
	page.popUp();
}
page.desafiar = function(id){
	fRetono = function (msg){
		console.log(term.ultimoRequerimentoDoServidor);
		console.log(msg);
	};
	term.com("user.desafiar("+id+")",fRetono);
}
page.aceitarDesafio = function(id){
	fRetono = function (msg){
		console.log(term.ultimoRequerimentoDoServidor);
		console.log(msg);
	};
	term.com("user.aceitarDesafio("+id+")",fRetono);
}
page.templateUserMyPerfil = "<h1>{titulo} {nick}</h1><input type='button' onClick='page.sair()' value='Sair' ><input type='button' value='cancelar' onClick='page.popUp()'>";
console.log("user.js");