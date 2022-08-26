var img = ["../imagens/i0.png", "../imagens/i1.png",
    "../imagens/i2.png",
    "../imagens/i3.png",
    "../imagens/i4.png",
    "../imagens/i5.png",
    "../imagens/i6.png",
    "../imagens/i7.png",
    "../imagens/i8.png",
    "../imagens/i9.png",
    "../imagens/i10.png",
    "../imagens/i11.png",
    "../imagens/i12.png",
    "../imagens/i13.png",
    "../imagens/i14.png",
    "../imagens/i15.png",
    "../imagens/i16.png",
    "../imagens/i17.png",
    "../imagens/i18.png",
    "../imagens/i19.png",
    "../imagens/i20.png",
    "../imagens/i21.png",
    "../imagens/i22.png",
    "../imagens/i23.png",
    "../imagens/i24.png",
    "../imagens/i25.png",
    "../imagens/i26.png",
    "../imagens/i26t.png"];

var prevId;
var prevClas;
var prevWins = [];
var prevElm;
var Elm;
var win = false;
var clicks = 0;

function buttonPress(id, clas){

    var nId = Number(id);
    var nClas = Number(clas);

    clicks++;

    if(id===null || clas===null){
        alert("Erro: ID ou Clase nulos");
    }else{

        if(prevId!==null){

            prevElm = document.getElementById(prevId);

        }

        Elm = document.getElementById(id);

        Elm.innerHTML = '<img src="'+img[clas]+'">';

        if(prevClas!==null && (prevId!==id)){
            if(prevClas===Number(Elm.className)){
                prevWins.push(prevId);
                prevWins.push(nId);
            }else{
                if(prevElm!=null){
                    prevElm.innerHTML = '<img src="'+img[0]+'">';

                }
            }
        }

        prevId = nId;
        prevClas = Number(Elm.className);

        if(prevWins[1]!=null){

            for(var i=0;i<36;i++){
                document.getElementById(prevWins[i]).innerHTML = '<img src="'+img[27]+'">';


                /*document.getElementById(prevWins[i]).innerHTML = ' ';*/
                document.getElementById(prevWins[i]).style.backgroundColor = "transparent";
                document.getElementById(prevWins[i]).style.borderColor = "transparent";
                /*document.getElementById(prevWins[i]).style.width = "128px";
                /*document.getElementById(prevWins[i]).style.height = "131px";*/
            }
        }

        if(prevWins.length===36){
            win = true;
        }

        if(win===true){
            alert("You beat the game with "+ clicks + " clicks!");
         /*   document.getElementById("win").style.display = "inline";
            document.getElementById("high").style.display = "inline";
            document.getElementById("high").ct.value = clicks;*/
        }


    }

}