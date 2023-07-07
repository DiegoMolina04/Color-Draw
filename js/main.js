
var colorSeleccionado = "black"

$(document).ready(() => {
    $('path').click(function() {
        $(this).css('fill', colorSeleccionado);
    });
});

/**$(function() { 
    $("#generarImagen").click(function() { 
        html2canvas($("#seccion"), {
          onrendered: function(canvas) {
              var myImage = canvas.toDataURL("image/png");
              var tWindow = window.open("");
              $(tWindow.document.body)
                  .html("<img id='Image' src=" + myImage + " style='width:100%;'></img>")
                  .ready(function() {
                      tWindow.focus();
                      tWindow.print();
                  });
          }
      });
    });
});*/

function reiniciarImagen(funcion){
    /*document.getElementsByTagName('path')[0].style.backgroundColor = "white";*/
    var element = document.getElementsByTagName('body');
    element.style.backgroundColor = "#00FF00";
    /*print(funcion);*/
    /*document.getElementsByClassName("input-blue-border")[0].style.borderColor = "red";*/
}

/*Funciona*/
function imprim1(imp1){
    var printContents = document.getElementById('cajaImagen').innerHTML;
            w = window.open();
            w.document.write(printContents);
            w.document.close(); // necessary for IE >= 10
            w.focus(); // necessary for IE >= 10
            w.print();
            w.close();
            return true;}
    /*
            $(document).ready(function($) {
                var ua = navigator.userAgent.toLowerCase();
                var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");
              
                $('#generarImagen').click(function(e) {
                  e.preventDefault();
                  if (isAndroid) {
                    // https://developers.google.com/cloud-print/docs/gadget
                    var gadget = new cloudprint.Gadget();
                    gadget.setPrintDocument("url", $('title').html(), window.location.href, "utf-8");
                    gadget.openPrintDialog();
                  } else {
                    window.print();
                  }
                  return false;
                });
              });*/


function cambioColor(color){
    
    switch (color){

        case 'rojo':
            colorSeleccionado = "red";
        
        break;

        case 'azul':
            colorSeleccionado = "blue";

        break;

        case 'verde':
            colorSeleccionado = "green";

        break;

        case 'negro':
            colorSeleccionado = "black";

        break;

        case 'blanco':
            colorSeleccionado = "white";

        break;

        case 'amarillo':
            colorSeleccionado = "yellow";

        break;

    }


    /*var valor = $('#color').css('backgroundColor');
    alert(valor);
    colorSeleccionado = valor*/
}