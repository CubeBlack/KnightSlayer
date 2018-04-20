function httpGet(theUrl)
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
    xmlHttp.send( false );
    return xmlHttp.responseText;
}
onmessage = function(e) {
	console.log("aqui");
	resposta = httpGet(e.data);
	postMessage(resposta);
  //postMessage("mensagem retornada, " + e.data);
}
