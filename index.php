<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Prevención contra el Fentanilo</title>
      <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
         rel="stylesheet"
         />
      <style>
         *{
         margin:0;
         padding:0;
         box-sizing:border-box;
         font-family: Arial, Helvetica, sans-serif;
         }
         body{
         background-color:#cbd9f5;
         color:rgb(0, 0, 0);
         }
         .navbar{
         background-color:#111827;
         }
         .navbar-brand{
         font-weight:bold;
         }
         .boton{
         background-color:#111827;
         border-radius:8px;
         margin:0 5px;
         transition:0.3s;
         }
         .boton:hover{
         background-color:#0b8c84;
         }
         .nav-link{
         color:white !important;
         padding:10px 15px;
         }
         header{
         padding:50px 20px;
         text-align:center;
         }
         header h1{
         font-size:60px;
         color:#0b8c84;
         margin-bottom:10px;
         }
         header p{
         font-size:20px;
         color:#182232;
         }
         .contenedor{
         width:90%;
         margin:auto;
         padding:40px 0;
         }
         .seccion-superior{
         display:flex;
         align-items:center;
         justify-content:space-between;
         gap:40px;
         flex-wrap:wrap;
         }
         .imagen,
         .texto{
         flex:1;
         min-width:300px;
         }
         .imagen img{
         width:100%;
         border-radius:12px;
         border:4px solid #0b8c84;
         }
         .texto h2{
         font-size:40px;
         color:#0b8c84;
         margin-bottom:20px;
         }
         .texto p{
         font-size:18px;
         line-height:1.8;
         margin-bottom:15px;
         color:#0f141d;
         }
         .subtitulo{
         text-align:center;
         margin-top:70px;
         }
         .subtitulo h2{
         font-size:45px;
         margin-bottom:20px;
         color:#06635d;
         }
         .linea{
         width:220px;
         height:5px;
         background:#0b8c84;
         margin:auto;
         border-radius:10px;
         }
         .cartas{
         display:grid;
         grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
         gap:25px;
         margin-top:50px;
         }
         .card{
         background:#1a1f29;
         border:2px solid #0b8c84;
         border-radius:15px;
         padding:30px;
         transition:0.3s;
         color:white;
         }
         .card:hover{
         transform:translateY(-5px);
         }
         .card h3{
         font-size:35px;
         color:#0b8c84;
         }
         .card h4{
         font-size:28px;
         margin:15px 0;
         }
         .card p{
         font-size:17px;
         line-height:1.7;
         }
         .ayuda{
         text-align:center;
         margin:70px 0;
         }
         .ayuda h2{
         margin-bottom:25px;
         }
         .btn-ayuda{
         display:inline-block;
         padding:15px 30px;
         background:#0b8c84;
         color:white;
         text-decoration:none;
         border-radius:10px;
         transition:0.3s;
         }
         .btn-ayuda:hover{
         background:#06635d;
         }
         .contactos{
         background:#1a1f29;
         border:2px solid #0b8c84;
         border-radius:15px;
         padding:40px;
         margin-bottom:50px;
         text-align:center;
         }
         .contactos h2{
         color:#0b8c84;
         margin-bottom:25px;
         }
         .contactos p{
         margin-bottom:10px;
         font-size:18px;
         color:white;
         }
         footer{
         background:#111827;
         text-align:center;
         padding:20px;
         color:white;
         }
         @media(max-width:768px){
         header h1{
         font-size:40px;
         }
         .texto h2{
         font-size:32px;
         }
         .subtitulo h2{
         font-size:35px;
         }
         }
      </style>
   </head>
   <body>
      <nav class="navbar navbar-expand-sm navbar-dark">
         <div class="container">
            <a href="#" class="navbar-brand">
            💊 Prevención contra el fentanilo
            </a>
            <button
               class="navbar-toggler"
               type="button"
               data-bs-toggle="collapse"
               data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ms-auto">
                  <li class="nav-item boton">
                     <a class="nav-link" href="#">Inicio</a>
                  </li>
                  <li class="nav-item boton">
                     <a class="nav-link" href="#">Riesgos</a>
                  </li>
                  <li class="nav-item boton">
                     <a class="nav-link" href="#">Problemas</a>
                  </li>
                  <li class="nav-item boton">
                     <a class="nav-link" href="#">Ayuda</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <header>
         <h1><b>EL FENTANILO</b></h1>
         <p>Información, riesgos y consecuencias</p>
      </header>
      <div class="contenedor">
         <section class="seccion-superior">
            <div class="imagen">
               <img
                  src="https://upload.wikimedia.org/wikipedia/commons/6/67/Fentanyl.jpg"
                  alt="Fentanilo"
                  >
            </div>
            <div class="texto">
               <h2>¿Qué es?</h2>
               <p>
                  El fentanilo es un opioide sintético extremadamente potente
                  utilizado médicamente para tratar dolores intensos.
               </p>
               <p>
                  También puede convertirse en una droga muy peligrosa cuando
                  se consume sin supervisión médica.
               </p>
               <p>
                  Incluso pequeñas cantidades pueden provocar sobredosis,
                  dependencia y graves daños a la salud.
               </p>
            </div>
         </section>
         <section class="subtitulo">
            <h2>Riesgos del Fentanilo</h2>
            <div class="linea"></div>
         </section>
         <section class="cartas">
            <div class="card">
               <h3>01</h3>
               <h4>Adicción</h4>
               <p>
                  El consumo frecuente puede generar dependencia física y emocional.
               </p>
            </div>
            <div class="card">
               <h3>02</h3>
               <h4>Sobredosis</h4>
               <p>
                  Cantidades mínimas pueden causar problemas respiratorios y muerte.
               </p>
            </div>
            <div class="card">
               <h3>03</h3>
               <h4>Daños físicos</h4>
               <p>
                  Puede afectar el cerebro, el corazón y otros órganos importantes.
               </p>
            </div>
         </section>
         <section class="ayuda">
            <h2>Más información y ayuda</h2>
            <a
               class="btn-ayuda"
               href="https://www.gob.mx/salud"
               target="_blank">
            Ir a sitio de ayuda
            </a>
         </section>
         <section class="contactos">
            <h2>Contactos de apoyo</h2>
            <p><strong>Emergencias:</strong> 911</p>
            <p><strong>Línea de la Vida:</strong> 800 911 2000</p>
            <p><strong>Email:</strong> ayuda@salud.mx</p>
            <p><strong>Horario:</strong> Atención 24 horas</p>
         </section>
      </div>
      <footer>
         <p>
            Página informativa sobre el fentanilo | Proyecto escolar 2026
         </p>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
   </body>
</html>
