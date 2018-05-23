page = [];
//-- config --
page.server = "https://localhost/KnightSlayer/server/server-terminal.php";
page.workerUrl = "https://localhost/Teminal/v002.0/terminal_v1.1worker.js";
//--
page.load = function(){
	//------------ configuracao
	term = new Terminal();
	term.server = page.server;
	term.workerUrl = page.workerUrl;
	term.on();
	page.getUser();
	
}
//- - - - - PopUp
page.checkPop = false;
page.popUp = function(){
	console.log("pop");
	this.checkPop = !this.checkPop;
	if(this.checkPop){
		document.getElementById("popUp").className = "popUP-true";
	}
	else{
		document.getElementById("popUp").className = "popUP-false";
	}

}
page.popContent = function(content=""){
	document.getElementById("popUp-content").innerHTML = content;
}
page.formLogin = "<div id=\"fNotaCabecario\"></div><form><label>Dado</label><textarea id=\"fNotaDado\"></textarea><label>Tags</label><textarea id=\"fNotaTag\"></textarea><input id=\"fNotaAplic\" onclick=\"\" value=\"Salvar\" type=\"button\"><input id=\"fNotaAplic\" onclick=\"page.popUp()\" value=\"Cancelar\" type=\"button\"></form>";
page.loginform = "<form><label>Dado</label><textarea id=\"novaNotaDado\"></textarea><label>Tags</label><textarea id=\"novaNotaTag\"></textarea><input onclick=\"page.novaNotaAplic()\" value=\"Salvar\" type=\"button\"></form>";
console.log("page.js");
page.user = function(){
	page.popContent(page.formLogin);
	page.popUp();
}
page.replace = function(base,dados){
	var dadosK=Object.keys(dados);
	for (var i = 0; i < dadosK.length; i++) {
		base = base.replace(new RegExp("{" + dadosK[i] + "}", 'g'),dados[dadosK[i]]);
	}
	return base;
}

//setInterval(function(){console.log("jurema")},60)
console.log("page.js");