<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
		body{
			margin: 0;
            font-family: sans-serif;

		}
		
        header{
            width: 100%;
            background: #4e94ab;
        }

        #btn-menu{
            display: none;

        }

        header label{
            display: none;
            width: 30px;
            height:30px;
            padding: 10px;
            border-right:1px solid #fff;
        }

        #btn-menu{
            display: none;
        }

        header label:hover{
            cursor: pointer;
            background:  rgba(201, 26, 26, 0.5);
        }
.menu ul {
    margin: 0;
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
}
.menu li {
    text-align: center;
    flex-grow: 1;
    border-right: 2px solid white;
    transition: all 0.5s;
}

.menu li:hover{
    background: rgba(0,0,0,0.3);
}

.menu li a {
    display: block;
    padding: 15px 20px;
    color: #fff;
    text-decoration: none;
}

@media (max-width:768px){
    header label{
        display:block
    }
    .menu{
        position: absolute;
        background: #4E94ab;
        width: 70%;
        margin: -70%;
    }
    .menu ul{
        flex-direction: column;
        
    }
    .menu li {
        border-top: 3px solid white;
    }
}
#btn-menu:checked ~ .menu {
    margin: 0;
}
*{
    font-family: sans-serif;
    border-radius: 5px;
}
.index{
    background: url('2.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
   
}
.demo {
    
    position: absolute;
 
    border: 1px solid black;
    justify-content: space-around;
    border-radius: 60px;
    height: 750px;
    position: center;
    width: 580px;  
    
    left: 50px;

}

</style>
<title>menus</title>

</head>
<body>
    <header>

    <input type="checkbox" id="btn-menu">
    <label for="btn-menu"><img src="5.png" alt="" width="30">></label>

    <nav class="menu">
        <ul>
            <li><a href="inicio.php">inicio</a></li>
            <li><a href="servicios.php">servicios</a></li>
            <li><a href="producto.php">productos</a></li>
            <li><a href="factura.php">cliente</a></li>
            <li><a href="contactanos.php">contactanos</a></li>
        </ul>
    </nav>

    </header>
    <body class="index"><center>
   
        
   <h1>introducion</h1>
   
   <div><img src="7.jpg" width="500"  class="img_home"></div>
   <div class="demo"> 
      
   <h2>Misión </h2>

   <p class="texto_demo"> Nuestra misión es ser la líder en la capacitación de profesionales 
       a favor capacitar personas que se puedan desenvolver mejor en el 
       desarrollo de tecnologías avanzadas y el manejo de los datos.!! </p>
       
                        <h2>Visión </h2>
       
     <p>Nuestra visión a 2 años es ser la empresa líder en la innovación de la educación. </p>
       
       <h2>Valores   </h2> 
       
       <p> La empresa DATALEARNING se destaca en los valores tale como la
            responsabilidad, respeto, confianza y compromiso social que
             permita la Guía de los clientes de manera adecuada, precisa
              y cómoda según el criterio del cliente para que de esta manera 
              podamos crecer y ofrecer un mejor Servicio. </p>
       
       <h2>Alcance</h2>  
       
       <p > Nuestra empresa busca capacitar profesionales que se vuelvan expertos
            en el manejo de datos como las base fundamenta el desarrollo de nuevas
             tecnologías que permitan una mejor estructura de datos constituida
             sobre unas bases sólidas que garanticen la calidad de nuestro servicio. </p> 
       
        
       
       <h2>Objetivos Generales </h2>
       
        
       
       <p > Revolucionar la forma en la cual se capacita al personal de las empresas,
            con el fin de crear y desarrollar expertos en su campo de aplicación para
             mejorar la calidad del desarrollo. </p>
       
       <h2>Objetivos Específicos  </h2>
       
       <p class="texto_demo">Implementar nuevas formas de Capacitar personal olvidando las antiguas reglas
            de esta manera transformar el entorno humano (natural y social),
             para adáptalo mejor a las necesidades y deseos humanos.! </p>

  
   <a href="usuario.php"><button id="button"><b>Entrar</b></button></a>

</div></center>

</body>
</html>
