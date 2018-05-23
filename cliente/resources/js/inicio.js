page.inicioLoad = function(){
	term2 = new Terminal();
	term2.server = page.server;
	term2.workerUrl = page.workerUrl;
	term2.on();
	page.updateUser();
	
}
page.updateUser = function(){
	term2.com("user.listar(json)",page.rUpdateUser);
}
page.rUpdateUser = function(msg){
	//console.log(msg);
	//term2.com("user.listar(json)");
	retorno = msg;
	if(msg[0]=="["){
		retorno = "";
		users = JSON.parse(msg);
		//console.log(users);
		for(linha = 0; linha < users.length; linha++){
			dados = {
				"id":users[linha].id,
				"nick":users[linha].nick
				}
			retorno += page.replace(page.templateInicioUser,dados);
		}
	}
	document.getElementById("players").innerHTML = retorno;
	
	page.updateNovidades();
}
page.updateNovidades = function(){
	term2.com("post.listar(json))",page.rUpdateNovidades);
}
page.rUpdateNovidades = function(msg){
	retorno = msg;
	if(msg[0]=="["){
		retorno = "";
		users = JSON.parse(msg);
		//console.log(users);
		for(linha = 0; linha < users.length; linha++){
			dados = {
				"id":users[linha].id,
				"msg":users[linha].msg
				}
			base = "";
			console.log(users[linha].tipo);
			retorno += page.replace(page.templateInicioPost[users[linha].tipo],dados);
		}
	}
	document.getElementById("novidades").innerHTML = retorno;
}
page.templateInicioUser = "<div id='user-block'>{nick}({id})<input type='button' value='desafiar' onclick='page.desafiar({id});page.updateUser();;'> lincar/deslincar</div>";
//------------- Postagems -----
page.templateInicioPost = {};
//dmensagem do sistema
page.templateInicioPost[0] = "<section id='post-block'><div id='msg'>{msg}</div>Systema</section>";
//desafio
page.templateInicioPost[1] = "<section id='post-block'><div id='msg'>{msg}</div><input type='button' value='Aceitar' onclick='page.aceitarDesafio({id});page.updateUser();'> </div><input type='button' value='Recusar'></section>";
// mensagem de usuario para todos
page.templateInicioPost[2] = "<section id='post-block'><div id='msg'>{msg}</div>Usuario para usuario</section>";

console.log("inicio.js");