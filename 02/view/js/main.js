gameId = location.search.slice(1);
gemeVez = null;

gameWork = new Worker("view/js/playersName.js");
gameWork.onmessage = function(e){
  usernamePl1.innerHTML = e.data[1];
  usernamePl2.innerHTML = e.data[2];
}

frameWork = new Worker("view/js/frame.js");
ultimaPecas = null;

frameWork.onmessage = function(e){
  if(ultimaPecas != e.data.pecas){
    pecasEle.innerHTML = e.data.pecas;
  }
  if (msg.innerHTML != e.data.msg) {
    msg.innerHTML = e.data.msg;
  }
  if(e.data.vez == "minha"){
    screenEle.classList = "minha";
  }
  else {
    screenEle.classList = "other";
  }

  ultimaPecas = e.data.pecas;
}
//---------------------- pecaSelect
pecaSelectWork = new Worker("view/js/pecaSelect.js");
pecaSelectWork.onmessage = function(e){
  peliculaEle.innerHTML = e.data;
}
//------------------- pecamove
pecaMoveWork = new Worker ("view/js/pecaMove.js");
//---------------
pecaCapturaWork = new Worker ("view/js/pecaCaptura.js");

///////load
function load() {
  gameIdEle = document.getElementById("gameId");
  usernamePl1 = document.getElementById("pl1Username");
  usernamePl2 = document.getElementById("pl2Username");

  gameIdEle.innerHTML = gameId;
  gameWork.postMessage(gameId);
  //--------- frame
  msgEle = document.getElementById("msg");
  pecasEle = document.getElementById("pecas");
  screenEle = document.getElementById("screen");
  frameWork.postMessage(gameId);
  setInterval(function (){
    frameWork.postMessage(gameId);
  }, 1000);
  //--------- pecaSelect
  peliculaEle = document.getElementById("peliculas");
}
function pecaSelect(ele){
  peliculaEle.innerHTML = "";
  data = new Object();
  data.id = gameId;
  data.peca = ele.id.match(/[\d]+/)[0];
  pecaSelectWork.postMessage(data);
  console.log(ele.id);
}
function pecaMove(peca, destino) {
  data = new Object();
  data.id = gameId;
  data.peca = peca;
  data.destino = destino;
  pecaMoveWork.postMessage(data);
  peliculaEle.innerHTML = "";
}
function pecaCaptura(peca, destino){
  data = new Object();
  data.id = gameId;
  data.peca = peca;
  data.destino = destino;
  pecaCapturaWork.postMessage(data);
  peliculaEle.innerHTML = "";
}
