<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dibujo</title>
  <link rel="stylesheet" href="css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
  <?php include('conexion.php');?>
  
  <section id="seccion">

    <h1>¡Pintame!</h1>
    
    <div id="cajaImagen">

      
      
    </div>
    
  <div id="contenedorColores"> 

    <div class="container">
      <div class="row">
        <div class="col">
          
        </div>
        <div id="centro" class="col-8">
          <div id="cajaColor">
      
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="negro" title="Selecciona color negro" onclick="cambioColor('negro')" checked>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="rojo" title="Selecciona color rojo" onclick="cambioColor('rojo')">
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="amarillo" title="Selecciona color amarillo" onclick="cambioColor('amarillo')">
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="verde" title="Selecciona color verde" onclick="cambioColor('verde')">
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="azul" title="Selecciona color azul" onclick="cambioColor('azul')">
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="blanco" title="Selecciona color blanco" onclick="cambioColor('blanco')">
            </div>
                        
          </div>
        </div>

        <div class="col">
          
        </div>
      </div>
    </div>

  </div>

  <button id="generarImagen" type="button" class="btn btn-outline-success" title="¡Guarda la imagen!" onclick="javascript:imprim1(cajaImagen)">Guardar Imagen</button>
  <button id="reiniciarImagen" type="button" class="btn btn-outline-secondary" title="Reiniciar" onclick="reiniciarImagen()">Reiniciar Imagen</button>
  
  <!-- <input type=”button” value=”Imprimir” onclick="javascript:window.print()" /> -->

  </section>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->

  <script src="js/main.js"></script>  
  <script src="js/filesaver.js"></script>
  <script src="js/html2canvas.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>