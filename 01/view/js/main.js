pecaSelecionada = "";
screenEle = document.getElementById('screen');
pecas = document.getElementById('pecas');
pelicula = document.getElementById('pelicula');
msgEle = document.getElementById('msg');
retorno = document.getElementById('retorno');
loadEle = document.getElementById('load');
loadInt = 0;

load(screenEle);
if(typeof(Worker) !== "undefined") {
    if(typeof(w) == "undefined") {
        gameWork = new Worker("view/js/game.js");
        frameWork = new Worker("view/js/frame.js");
        pecaSelectWork = new Worker("view/js/pecaSelect.js");
        pecaMoveWork = new Worker("view/js/pecaMove.js");
        pecaCaptureWork = new Worker("view/js/pecaCapture.js");
    }
    //---------------- GameDados
    load();
    gameWork.onmessage = function(event){
      gameIdEle = document.getElementById('gameId');
      player1UsernameEle = document.getElementById('player1');
      player2UsernameEle = document.getElementById('player2');

      gameIdEle.innerHTML = event.data.id;
      player1UsernameEle.innerHTML = event.data.player1.username;
      player2UsernameEle.innerHTML = event.data.player2.username;
      console.log("gameDados");
      loaded();
    };
    gameWork.postMessage(gameId);
    //---------------- frame
    frameWork.onmessage = function(event) {
      pecas.innerHTML = event.data.pecas;
      msg.innerHTML = event.data.msg;

      if(event.data.vez=="minha"){
        screenEle.classList = "vezMinha";
      }
      else{
          screenEle.classList = "vezOther";
      }
      loaded();
    };
    frameWork.postMessage(gameId);
    load();
    //console.log(window.set);
    window.setInterval(function (){
        frameWork.postMessage(gameId);
        load();
    }, 1000);
    //----------------------------
    function casaClick(elemento){
        console.log(elemento.id);
    }
    //-------------------------------
    function pecaSelect(elemento){
        pecaSelecionada = elemento.id;
        pecaSelectWork.onmessage = function(event) {
          pelicula.innerHTML =  event.data;
          loaded();
        };
        parametros = {
            "id":gameId,
            "peca":elemento.id.match(/[\d]+/)[0]
        };
        pecaSelectWork.postMessage(parametros);
        load();
        console.log(elemento.id)
    }
    //---------------------------------------
    function pecaMove(elemento){
      pecaMove.onmessage = function(event) {
        pelicula.innerHTML =  event.data;
        loaded();
      };
      parametros = {
          "id":gameId,
          "destino":elemento.id,
          "peca":pecaSelecionada.match(/[\d]+/)[0]
      };
      load();
      pecaMoveWork.postMessage(parametros);
      pelicula.innerHTML = "";
      console.log(elemento.id)
    }
    //------------------------
    function pecaCapture(elemento){
      pecaCaptureWork.onmessage = function(event) {
        pelicula.innerHTML =  event.data;
        loaded();
      };
      parametros = {
          "id":gameId,
          "destino":elemento.id,
          "peca":pecaSelecionada.match(/[\d]+/)[0]
      };
      pecaCaptureWork.postMessage(parametros);
      load();
      pelicula.innerHTML = "";
      console.log(elemento.id)
    }
} else {
    retorno.innerHTML = "Sorry! No Web Worker support.";
}
function load(){
  loadInt += 1;
  loadSet();
}
function loaded(){
  loadInt -= 1;
  loadSet();
}
function loadSet(){
  loadStar = "";
  for(ls = 0; ls <= loadInt; ls++)
    loadStar += "_";
  loadEle.innerHTML = loadStar;
}
loaded();
