<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <style>
            html, body {
               height: 100%;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    background-color:#FBEEE6 ;
    margin: 2%;   
    padding:10%; 
            }
            .header {
    background-image:url(https://static.tumblr.com/665fdee8f2c750463f834462646af2bd/hynthlb/pNfo961pz/tumblr_static_tumblr_static__640.jpg);    
                
                height: 30%
                width: 100%;
            }
            .header-title {
                text-align: center;
            }
            .header-content {
                left: 35%;
            }
            .nav {
                background-color: black;
                text-align: center;
                width: 100%;
                
            }
            .nav ul {
                display: inline-block;
                margin: 0 auto;
                list-style-type: none;
                background-color: black;
                overflow: hidden;
            }
            .nav li {
                float: left;
                padding: 16px;
                
            }
            .nav li:hover {
                background-color: #333333;
            }
            .nav li a {
                color: white;
                text-decoration: none;
                
            }
            .nav li a:hover {
                background-color: #333333;
            }
            .selected-item {
                background-color: #333333;

            }
            .main-content {
                border-color: #f3f3f3;
                border-style: solid;
                margin: 0 auto;
                padding: 90px 90px 90px 90px;
            }
            
            .main-content section {
                border-style: solid;
                width: 60%;
                height: 95%;
                margin: 0 auto;
               padding: 90px 90px 90px 90px;


            }
            .footer {
                width: 100%;
                color: white;
                background-color: black;
                text-align: center;
                margin-bottom: 0;
                font-weight: lighter;
                padding: 10px
            }
           
           </style>

    </head>
    <body>
        

        <header class="header">
            <div class="header-content">
                <div class="header-title">
                    <img width="200" src="https://openclipart.org/image/2400px/svg_to_png/184749/Jiu-jitsu.png"/>
                    <h1>柔術 - Arte marcial del JuiJitsu</h1>
                </div>
                <nav class="nav">
                    <ul>
                        <li class="nav-item selected-item"><a href="#">Item 1</a></li>
                        <li class="nav-item"><a href="#">Item 1</a></li>
                        <li class="nav-item"><a href="#">Item 1</a></li>
                        <li class="nav-item"><a href="#">Item 1</a></li>
                        <li class="nav-item"><a href="#">Item 1</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="main-content">
            <!-- Aqui es donde pones informacion distinta en cada pagina -->
            <article>
                <header><h2> Contacto </h2></header>

            <form action="conex.php" method="post">
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre"/>
                </div>
               <div>
                    <label for="apellido">Apellido::</label>
                    <input type="text" name="apellido" />
                </div>
                <div>
                    <label for="telefono"> Telefono:</label>
                    <input type="number" name="tel"/>
                </div>
                <div>
                    <label for="mail">E-mail:</label>
                    <input type="email" name= "mail"/>
                </div>
                <div>
                
                <label for="asunto">Asunto:</label>
                <textarea name="asunto"></textarea>
                </div>
                
                <div class="button">
                    <button type="submit"> Enviar </button>
                </div>
            </form>
            </article>
        </div>

        
        <footer class="footer">
            <p>Autor: Maria Paula Ortiz, mariapaula@gmail.com </p>
        </footer>
    
    </body>
</html>