function posicaoForX(posicao){
  numPos= posicao.charCodeAt(0)-96
  retorno = numPos * 50;
  return retorno;
}
function posicaoForY(posicao){
  numPos = posicao[1];
  retorno = numPos * 50;
  return retorno;
}
  self.addEventListener('message', function(e) {

    var xmlHttp = new XMLHttpRequest();
    url = "../../json/tabuleiro.php?id=" + e.data;
    xmlHttp.open("GET",url,false);
    xmlHttp.send(null);

    respostaAll = JSON.parse(xmlHttp.responseText);
    respostaObj = new Object();

    respostaObj.msg = respostaAll.msg;
    respostaObj.pecas = "";
    for (var i = 0; i < 32; i++) {
      if(typeof respostaAll.pecas[i] == "undefined") continue;
      respostaObj.pecas += "<image ";
      respostaObj.pecas += "id = \"p" + i +"\" ";
      respostaObj.pecas += "onClick = \"pecaSelect(this);\" ";
      x = posicaoForX(respostaAll.pecas[i].posicao);
      respostaObj.pecas += "x = \"" + x + "\" ";
      y = posicaoForY(respostaAll.pecas[i].posicao);
      respostaObj.pecas += "y = \"" + y + "\" ";
      href = "view/skin/p" + respostaAll.pecas[i].tipo + ".svg";
      respostaObj.pecas += "xlink:href = \"" + href + "\" ";
      respostaObj.pecas += "height=\"25px\" width=\"25px\" ";
      respostaObj.pecas += "/>";

    }
    respostaObj.vez = respostaAll.vez;
    postMessage(respostaObj);
  }, false);
