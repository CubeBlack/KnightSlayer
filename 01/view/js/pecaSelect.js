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
  url = "../../json/pecaView.php?id=" + e.data.id + "&peca=" + e.data.peca;
  httpReposta = httpGet(url);
  console.log(httpReposta);
  pecaObj = JSON.parse(httpGet(url));
  resposta = "";
  if (typeof pecaObj.movimento  != "undefined")
      for(pe = 0; pe < pecaObj.movimento.length;pe++){
        resposta += "<image ";
        resposta += "id = '"+ pecaObj.movimento[pe] +"' ";
        resposta += "xlink:href = 'view/skin/c2.svg' ";
        resposta += "onClick = 'pecaMove(this);' ";
        x = posicaoforX(pecaObj.movimento[pe]);
        resposta += "x = '" + x + "' ";
        y = posicaoforY(pecaObj.movimento[pe]);
        resposta += "y = '" + y + "' ";
        resposta += "height='50px' width='50px' ";
        resposta += "/>";
    }
    if (typeof pecaObj.captura  != "undefined")
        for(pe = 0; pe < pecaObj.captura.length;pe++){
          resposta += "<image ";
          resposta += "id = '"+ pecaObj.captura[pe] +"' ";
          resposta += "xlink:href = 'view/skin/c5.svg' ";
          resposta += "onClick = 'pecaCapture(this);' ";
          x = posicaoforX(pecaObj.captura[pe]);
          resposta += "x = '" + x + "' ";
          y = posicaoforY(pecaObj.captura[pe]);
          resposta += "y = '" + y + "' ";
          resposta += "height='50px' width='50px' ";
          resposta += "/>";
      }
  postMessage(resposta);

}, false);
