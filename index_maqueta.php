<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Tienda de camisetas</title>
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
        <div id="container">
            <!-- Cabecera -->

            <header id="header">
                <div id="logo">
                    <img src="assets/img/camiseta.png" alt="camiseta Logo" />
                    <a href="index.php">
                        Tienda de camisetas
                    </a>
                </div>
            </header>

            <!-- Menu-->

            <nav id="menu">
                <ul>
                    <li>
                        <a href="">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Categoria 1
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Categoria 2
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Categoria 3
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Categoria 4
                        </a>
                    </li>
                </ul>
            </nav>
        <div id="content">
    
                <!-- Barra lateral-->
                <aside id="lateral">
                    <h3>Entrar a la web</h3>
                    <div id="login" class="block_aside">
                        <form action="" method="post" >
                            <label for="email">Email </label>
                            <input type="email" name="email" />
                            <label for="password">Password </label>
                            <input type="password" name="password" />
                            <input type="submit" value="Ingresar" />
                        </form>
                        <ul>
                            <li><a href="#" >Pedidos</a></li>
                            <li><a href="#" >Gestionar Pedidos</a></li>
                            <li><a href="#" >Gestionar Categorias</a></li>
                        </ul>
                    </div>
                </aside>
                </div>

            <!--Pie de pagina -->
            <footer id="footer">
                <p>Desarrollado por Francisco Rojo WEB &copy; <?= date("Y") ?></p>
            </footer>
        </div>
    </body>
</html>
            
                
            