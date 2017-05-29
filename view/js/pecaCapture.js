function httpGet(theUrl)
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
}
function posicaoforX(posicao){
    numPos = posicao.charCodeAt(0)-96;
    retorno = numPos*50;
    return retorno;
}
function posicaoforY(posicao){
    numPos = posicao[1];
    retorno = numPos*50;
    return retorno;
}
self.addEventListener('message', function(e) {
  url = "../../json/pecaCapture.php?id=" + e.data.id + "&peca=" + e.data.peca + "&destino="+ e.data.destino;
  httpReposta = httpGet(url);
  console.log(url);
  resposta = "";
  postMessage(resposta);
}, false);
