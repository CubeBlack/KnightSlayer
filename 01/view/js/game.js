function httpGet(theUrl)
{
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
}
self.addEventListener('message', function(e) {
  url = "../../json/GameDados.php?id=" + e.data;
  gameStr = httpGet(url);
  gameObj = JSON.parse(httpGet(url));
  postMessage(gameObj);
}, false);
