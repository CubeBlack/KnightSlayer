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
    url = "../../json/pecaMove.php?id=" + e.data.id +"&peca=" + e.data.peca + "&destino=" + e.data.destino;
    console.log(url);
    xmlHttp.open("GET",url,false);
    xmlHttp.send(null);
    console.log(xmlHttp.responseText);
    respostaAll = JSON.parse(xmlHttp.responseText);
    if (respostaAll==null) {
      console.log(respostaAll);
      return;
    }

    resposta = "";

    postMessage(resposta);
  }, false);
