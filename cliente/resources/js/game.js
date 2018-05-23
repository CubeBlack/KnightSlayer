var query = location.search.slice(1);
var partes = query.split('&');
var data = {};
partes.forEach(function (parte) {
 var chaveValor = parte.split('=');
 var chave = chaveValor[0];
 var valor = chaveValor[1];
 data[chave] = valor;
});

game = [];
game.id = data.game;
game.load = function (){
	this.x = 50;
	this.y = 50;
	this.width = 60;
	
	term2 = new Terminal();
	term2.server = page.server;
	term2.workerUrl = page.workerUrl;
	term2.on();
	
	this.dGame = document.getElementById("game_display");
	this.dCasas = document.getElementById("game_casas");
	this.dPecas = document.getElementById("game_pecas");
	//this.display = new SimpleDisplay(this.dGame,"this-display","width='400px' height='400px' ");
	this.tabuleiro();
	this.pecas();
	

	
	//peca = document.createElement("img");
	//peca.setAttribute("src",game.tipoToImage["king-black"]);
	//this.dGame.appendChild(peca);
}
game.tabuleiro = function(){
	for(colun = 1; colun < 9; colun++){
		for(linha = 1; linha < 9; linha++){
			xCasa = this.x + (this.width * (colun-1));
			yCasa = this.y + (this.width * (linha-1));
			eId = game.positionToName(colun,linha);
			casa = document.createElement("div");
			console.log(xCasa);
			casa.setAttribute("id",eId);
			casa.setAttribute("onclick","game.casa(this)");
			style = "";
			style += "top:"+yCasa+"px;";
			style += "left:"+xCasa +"px;";
			style += "width:"+game.width +"px;";
			style += "height:"+game.width +"px;";
			if((colun + linha)%2==0){
				casa.setAttribute("class","casa-black");
			}
			else{
				casa.setAttribute("class","casa-white");
			}
			
			casa.setAttribute("style",style);
			this.dCasas.appendChild(casa);
		}
	}

}
game.ultimogamer="";
game.pecas = function(){
	fRetono = function (msg){
		//if(game.ultimogamer == msg)return;
		game.ultimogamer = msg;
		
		game.dPecas.innerHTML = "";
		tGame = JSON.parse(msg);
		pecas = tGame.tabuleiro.situacoes[0].pecas;
		
		for(pNum = 0; pNum < pecas.length; pNum++){
			ePeca = document.createElement("img");
			position = game.nameToPosition(pecas[pNum].posicao);
			style = "";
			xCasa = game.x + (game.width * (position["linha"]-1));
			yCasa = game.y + (game.width * (position["coluna"]-1));
			
			style += "top:"+yCasa+"px;";
			style += "left:"+xCasa +"px;";
			style += "width:"+game.width +"px;";
			style += "height:"+game.width +"px;";
			ePeca.setAttribute("style",style);
			ePeca.setAttribute("id","p" + pNum);
			ePeca.setAttribute("casa",pecas[pNum].posicao);
			ePeca.setAttribute("src",game.tipoToImage[pecas[pNum].tipo]);
			game.dPecas.appendChild(ePeca);
			
		}
		//game.pecas();
	
	};
	term2.com("game.get("+game.id+")",fRetono);
}
game.tipoToImage = {
	"piao-branco":"resources/img/p1.svg",
	"torre-branco":"resources/img/p2.svg",
	"cavalo-branco":"resources/img/p3.svg",
	"bispo-branco":"resources/img/p4.svg",
	"dama-branco":"resources/img/p5.svg",
	"rei-branco":"resources/img/p6.svg",
	"piao-preto":"resources/img/p7.svg",
	"torre-preto":"resources/img/p8.svg",
	"cavalo-preto":"resources/img/p9.svg",
	"bispo-preto":"resources/img/p10.svg",
	"dama-preto":"resources/img/p11.svg",
	"rei-preto":"resources/img/p12.svg"
};
game.positionToName = function(linha,coluna){
	letras = {1:"a",2:"b",3:"c",4:"d",5:"e",6:"f",7:"g",8:"h"};
	return letras[coluna]+linha;
}
game.nameToPosition = function(str){
	numeros = {"a":1,"b":2,"c":3,"d":4,"e":5,"f":6,"g":7,"h":8};
	position = {};
	position["linha"] = parseInt(str[1]);
	position["coluna"] = numeros[str[0]];
	return position;
}