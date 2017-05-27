  self.addEventListener('message', function(e) {
    var xmlHttp = new XMLHttpRequest();
    url = "../../json/pecaCaptura.php?id=" + e.data.id +"&peca=" + e.data.peca + "&destino=" + e.data.destino;
    xmlHttp.open("GET",url,false);
    xmlHttp.send(null);
  }, false);
