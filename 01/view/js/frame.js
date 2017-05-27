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
  url = "../../json/view.php?id=" + e.data;
  //reposta = httpGet(url);
  viewObj = JSON.parse(httpGet(url));
  pecas = "";
    for(p = 0; p < 32 ;p++){
      if(typeof viewObj.tabuleiro.pecas[p] != "undefined"){
        pecas += "<image ";
        pecas += "id = 'p" + p + "' ";
        pecas += "xlink:href = 'view/skin/p" + viewObj.tabuleiro.pecas[p].tipo + ".svg' ";
        pecas += "onClick = 'pecaSelect(this);' ";
        x = posicaoforX(viewObj.tabuleiro.pecas[p].posicao);
        pecas += "x = '" + x + "' ";
        y = posicaoforY(viewObj.tabuleiro.pecas[p].posicao);
        pecas += "y = '" + y + "' ";
        pecas += "height='50px' width='50px' ";
        pecas += "/>";
      }
      else {
        //console.log("def2");
      }
  }
  respostaObj = new Object();
  respostaObj.pecas = pecas;
  respostaObj.msg = viewObj.msg;
  respostaObj.vez = viewObj.vez;
  postMessage(respostaObj);
}, false);
//onClick = \"casa_onclick();
