loadWork = new Worker("page/js/load.js");
loadWork.onmessage = function(e){
  document.getElementById(e.data.local).innerHTML = e.data.conteudo;
}

function load(page="", local = "", adicional =""){
  parametro = new Object();

  if(local=="") local = "conteudo";
  document.getElementById(local).innerHTML = "Loading...";

  parametro.url = "";
  parametro.url += "../../page/";
  parametro.url += page;
  parametro.url += ".php";
  parametro.url += "?";
  parametro.url += adicional;

  parametro.local = local;

  loadWork.postMessage(parametro);
}
function loadConteudo(){
  load('usuario','conteudo');
  load('menu','menu');
  load('titulo','titulo');
}
