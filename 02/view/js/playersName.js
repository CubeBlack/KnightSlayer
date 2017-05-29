self.addEventListener('message', function(e) {
  var xmlHttp = new XMLHttpRequest();
  url = "../../json/playersName.php?id=" + e.data;
  xmlHttp.open("GET",url,false);
  xmlHttp.send(null);
  postMessage(JSON.parse(xmlHttp.responseText));
}, false);
