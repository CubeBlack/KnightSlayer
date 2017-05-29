function posicaoForX(posicao){
  numPos= posicao.charCodeAt(0)-96
  retorno = numPos * 50;
  return retorno;
}
function posicaoForY(posicao){
  numPos = posicao[1];
  retorno = numPos * 50;
  return retorno;
}
  self.addEventListener('message', function(e) {

    var xmlHttp = new XMLHttpRequest();
    url = "../../json/tabuleiro.php?id=" + e.data;
    xmlHttp.open("GET",url,false);
    xmlHttp.send(null);

    respostaAll = JSON.parse(xmlHttp.responseText);
    respostaObj = new Object();

    respostaObj.msg = respostaAll.msg;
    respostaObj.pecas = "";
    if(respostaAll.status != "false"){
      if(respostaAll.elevar=="true"){
        respostaObj.pecas += "<rect id=\"box\" x=\"0\" y=\"200\" width=\"450\" height=\"150\" />";
        func = "pecaElevar(" + respostaAll.elevar + ","+ 4 +")";
        respostaObj.pecas += "<image onClick = \"" + func +";\" xlink:href=\"view/skin/p3.svg\" x=\"100\" y=\"250\" height=\"50px\" width=\"50px\"/>";
        func = "pecaElevar(" + respostaAll.elevar + ","+ 5 +")";
        respostaObj.pecas += "<image onClick = \"" + func +";\" xlink:href=\"view/skin/p4.svg\" x=\"200\" y=\"250\" height=\"50px\" width=\"50px\"/>";
        func = "pecaElevar(" + respostaAll.elevar + ","+ 6 +")";
        respostaObj.pecas += "<image onClick = \"" + func +";\" xlink:href=\"view/skin/p5.svg\" x=\"300\" y=\"250\" height=\"50px\" width=\"50px\"/>";
      }
      for (var i = 0; i < 32; i++) {
        if(typeof respostaAll.pecas[i] == "undefined") continue;
        respostaObj.pecas += "<image ";
        respostaObj.pecas += "id = \"p" + i +"\" ";
        respostaObj.pecas += "onClick = \"pecaSelect(this);\" ";
        x = posicaoForX(respostaAll.pecas[i].posicao);
        respostaObj.pecas += "x = \"" + x + "\" ";
        y = posicaoForY(respostaAll.pecas[i].posicao);
        respostaObj.pecas += "y = \"" + y + "\" ";
        href = "view/skin/p" + respostaAll.pecas[i].tipo + ".svg";
        respostaObj.pecas += "xlink:href = \"" + href + "\" ";
        respostaObj.pecas += "height=\"25px\" width=\"25px\" ";
        respostaObj.pecas += "/>";
      }
    }
    else {
      //gameOver
      respostaObj.pecas = "<circle cx=\"50\" cy=\"50\" r=\"40\" stroke=\"green\" stroke-width=\"4\" fill=\"yellow\" />";
    }
    respostaObj.vez = respostaAll.vez;
    postMessage(respostaObj);
  }, false);
