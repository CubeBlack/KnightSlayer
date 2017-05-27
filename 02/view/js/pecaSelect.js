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
    url = "../../json/pecaSelect.php?id=" + e.data.id +"&peca=" + e.data.peca;

    xmlHttp.open("GET",url,false);
    xmlHttp.send(null);

    respostaAll = JSON.parse(xmlHttp.responseText);
    if (respostaAll==null) {
      console.log(respostaAll);
      return;
    }
    resposta = "";
    if(respostaAll.movimento != null)
      for (var i = 0; i < Object.keys(respostaAll.movimento).length; i++) {
        resposta += "<image ";
        resposta += "id = \"p" + i +"\" ";
        resposta += "onClick = \"pecaMove(" + e.data.peca + ",'" + respostaAll.movimento[i] +"');\" ";
        x = posicaoForX(respostaAll.movimento[i]);
        resposta += "x = \"" + x + "\" ";
        y = posicaoForY(respostaAll.movimento[i]);
        resposta += "y = \"" + y + "\" ";
        resposta += "xlink:href = \"view/skin/c2.svg\" ";
        resposta += "height=\"25px\" width=\"25px\" ";
        resposta += "/>";
      }
    if(respostaAll.captura != null)
      for (var i = 0; i < Object.keys(respostaAll.captura).length; i++) {
        resposta += "<image ";
        resposta += "id = \"p" + i +"\" ";
        resposta += "onClick = \"pecaCaptura(" + e.data.peca + ",'" + respostaAll.captura[i] +"');\" ";
        x = posicaoForX(respostaAll.captura[i]);
        resposta += "x = \"" + x + "\" ";
        y = posicaoForY(respostaAll.captura[i]);
        resposta += "y = \"" + y + "\" ";
        resposta += "xlink:href = \"view/skin/c5.svg\" ";
        resposta += "height=\"25px\" width=\"25px\" ";
        resposta += "/>";
      }
    postMessage(resposta);
  }, false);
