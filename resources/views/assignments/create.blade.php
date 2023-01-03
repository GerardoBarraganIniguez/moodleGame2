<!DOCTYPE html>
<html>
  <head>
    <title>Administrar Usuarios</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <style>
      .frame{
        background-color: #030303d7;
        color: #ffffff;
        display: flex;
        width: 80%;
        min-height: 500px;
        position: absolute;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%); 
      }
      .table{
        color: #ffffff;
      }

      body{
        background-color: #0303034d;
      }

      .custom-img {
        width: 50%;
        height: 50%;
        padding-left: 10px; 
      }

      .custom-input {
        height: 2.5rem;
        width: 2.5rem;
      }
    </style>

  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
          <img src="\img\a.png" alt="" class="custom-img">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#" style="padding-left: 1140px">Cerrar sesión</a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="frame" style="padding-top: 15px">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <h5 style="padding-top: 15px">Crear lección</h5>
            <p>Seleccione el no. de cuadros de texto que desea agregar:</p>
            <div class="form-group d-flex">
                <button class="btn btn-secondary ml-0" id="minus">-</button>
                <input type="text" class="form-control custom-input" id="num-boxes" value="1" disabled>
                <button class="btn btn-secondary mr-auto" id="plus">+</button>
            </div>
        <div id="text-boxes"></div> 
        </div>
      </div>
    </div>
    </div>
    
    <script>
        // Obtén el elemento del botón "-"
        const minusButton = document.getElementById('minus');
        // Obtén el elemento del botón "+"
        const plusButton = document.getElementById('plus');
        // Obtén el elemento del input de número de cuadros de texto
        const numBoxesInput = document.getElementById('num-boxes');
        // Obtén el elemento donde se agregarán los cuadros de texto
        const textBoxesDiv = document.getElementById('text-boxes');
      
        // Agrega un evento "click" al botón "-"
        minusButton.addEventListener('click', () => {
          // Reduce el valor del input en 1
          numBoxesInput.value = parseInt(numBoxesInput.value) - 1;
          // Si el valor del input es menor que 1, regresarlo a 1
          if (numBoxesInput.value < 1) numBoxesInput.value = 1;
          // Actualiza los cuadros de texto
          updateTextBoxes();
        });
      
        // Agrega un evento "click" al botón "+"
        plusButton.addEventListener('click', () => {
          // Aumenta el valor del input en 1
          numBoxesInput.value = parseInt(numBoxesInput.value) + 1;
          // Actualiza los cuadros de texto
          updateTextBoxes();
        });
      
        // Función que actualiza los cuadros de texto
        function updateTextBoxes() {
          // Vacía el elemento donde se agregarán los cuadros de texto
          textBoxesDiv.innerHTML = '';
          // Crea tantos cuadros de texto como indique el input
          for (let i = 0; i < numBoxesInput.value; i++) {
             // Crea un elemento de la estructura de un cuadro de texto numerado
            const textBox = `
                <div class="form-group">
                    <label for="text-box-${i + 1}">Cuadro de texto ${i + 1}</label>
                    <textarea class="form-control" id="text-box-${i + 1}" rows="3"></textarea>
                </div>
            `;
            // Agrega el elemento al elemento padre
            textBoxesDiv.innerHTML += textBox;
          }
        }
        // Llama a la función para crear el primer cuadro de texto
        updateTextBoxes();
    </script>      
  </body>
</html>