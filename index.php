<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">   
        <link rel="stylesheet" href="css/estilo.css">
</head>

<body class="bg-azul-claro">
    <main>
        <header class="text-center">
            <img src="logo.png" alt="logotipo Bololand">
        </header>

        <nav class="navbar navbar-expand-lg bg-azul justify-content-end">
            <button class="navbar-toggler bg-branco" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="material-icons azul">
                    menu
                    </i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lojas</a>
                    </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=cadastro">Cadrastar</a>
                    </li>

            </div>
        </nav>
        <?php
        if(isset($_GET["p"])){}
            if($_GET["p"]=="cadastro"){
                echo "<section>";
                include("formUser.php");
                echo "</section>";
            }
?>




        <section class="container bg-branco" id="produtos">
            <div class="row">
                <div class="col-12 col-md-4 itens">
                    <img src="img/produtos/produto01.jpg" class="img-fluid" alt="">
                    <h2>Titulo</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate hic doloribus impedit soluta, voluptatibus sequi, doloremque omnis labore qui odit sed ea architecto illo quaerat nam dolor enim fugit fuga.</p>
                </div>
                <div class="col-12 col-md-4 itens">
                    <img src="img/produtos/produto02.jpg" class="img-fluid" alt="">
                    <h2>Titulo</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate hic doloribus impedit soluta, voluptatibus sequi, doloremque omnis labore qui odit sed ea architecto illo quaerat nam dolor enim fugit fuga.</p>
                </div>
                <div class="col-12 col-md-4 itens">
                    <img src="img/produtos/produto03.jpg" class="img-fluid" alt="">
                    <h2>Titulo</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate hic doloribus impedit soluta, voluptatibus sequi, doloremque omnis labore qui odit sed ea architecto illo quaerat nam dolor enim fugit fuga.</p>
                </div>


            </div>
        </section>
        <div class="container bg-branco" id="propag-1">
            <img src="img/propaganda/p200x1000-01-2.jpg" class="col-12" alt="">
        </div>

        <section class="container bg-branco" id="clientes">
            <div class="row">
            <div class="col-md-8">
            <div class="row comentario">
            <div class="col-md-4">
            <img src="https://picsum.photos/200/200" class="img-fluid rounded-circle" 
            class="img-fluid foto" alt="">
            </div>
            <div class="col-md-8 texto">
            
            <h2>Titulo</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti delectus commodi dignissimos magni temporibus nam, cupiditate similique recusandae, maxime facere ducimus enim nostrum nobis sunt nulla aperiam praesentium! Esse, eius.</p>

            </div>

            </div>

            <div class="row comentario">
                <div class="col-md-4">
                    <img src="https://picsum.photos/200/200" class="img-fluid rounded-circle" 
                    class="img-fluid foto" alt="">
                    </div>
                    <div class="col-md-8 texto">
            
                        <h2>Titulo</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti delectus commodi dignissimos magni temporibus nam, cupiditate similique recusandae, maxime facere ducimus enim nostrum nobis sunt nulla aperiam praesentium! Esse, eius.</p>

                       </div> 
                    </div> 
                    <div class="row comentario">
                        <div class="col-md-4">
                            <img src="https://picsum.photos/200/200" class="img-fluid rounded-circle" 
                            class="img-fluid foto" alt="">
                            </div>
                            <div class="col-md-8 texto">
                    
                                <h2>Titulo</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti delectus commodi dignissimos magni temporibus nam, cupiditate similique recusandae, maxime facere ducimus enim nostrum nobis sunt nulla aperiam praesentium! Esse, eius.</p>
        
                               </div> 
                            </div> 
                        </div> 

                        <div class="col-md-4">
                            <img src="img/propaganda/p300x800-01.jpg" class="img-fluid"
                            class="img-fluid foto" alt="">
                            
                        </div> 
                    </div> 

                    </section>
            <section>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/produtos/p1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/produtos/p2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/produtos/p3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

            </section>

            <section class="bg-branco contato">
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="form-group row">
                              <label for="exampleInputEmail1">Nome</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                            </div>
                            <div class="form-group row">
                              <label for="exampleInputPassword1">Assunto</label>
                              <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                              </div>
                              <div class="form-group row">
                                <label for="exampleFormControlTextarea1"></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                        
                            <button type="submit" class="btn btn-primary">Enviar</button>
                          </form>
                    
                    </div>
                
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3777.058663644161!2d-43.53388948488617!3d-22.856924241840414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9be1cf5fa9fe83%3A0xfebc5445c8df0c36!2sR.%20Painel%20-%20Campo%20Grande%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%20Brasil!5e1!3m2!1spt-BR!2siq!4v1580153229435!5m2!1spt-BR!2siq" width="98%" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                    <div>
                        <h2>Endereço</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptate facere aut suscipit consequuntur, nulla esse eum animi eligendi ad sit optio at ex doloribus voluptates dolor unde ducimus. Necessitatibus.</p>

                    </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="col-md-6 text-left">
                    <p>value 1</p>
                    <p>value 2</p>
                    <p>value 3</p>
                </div>
                    <div class="col-md-6 text-center">
                        <p>value 1</p>
                        <p>value 2</p>
                        <p>value 3</p>
                    </div>
                        <div class="col-md-6 text-right">
                            <img src="img/social/quadrados/instagram.png">
                            <img src="img/social/quadrados/facebook.png">
                            <img src="img/social/quadrados/twitter.png">
                        </div>

            </footer>

    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body bg-azul-claro >

</html>