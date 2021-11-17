<!DOCTYPE html>
<html lang="pt"> 

    <head> 

        <!--incorporando fontes do googlefonts-->     
        <!--font1-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Favicons -->
        <link href="<?php echo INCLUDE_PATH; ?>/img/icon-horas-extracurriculares.png" rel="icon">
        <link href="<?php echo INCLUDE_PATH; ?>/img/icon-horas-extracurriculares.png" rel="apple-touch-icon">

        <!--linkando o arquivo fornecedores externos CSS-->
        <link href="<?php echo INCLUDE_PATH; ?>/fornecedores/animate.css/animate.min.css" rel="stylesheet">
        <link href="<?php echo INCLUDE_PATH; ?>/fornecedores/fontawesome/css/all.css" rel="stylesheet" >
        <link href="<?php echo INCLUDE_PATH; ?>/fornecedores/animate.css/animate.min.css" rel="stylesheet">
        <link href="<?php echo INCLUDE_PATH; ?>/fornecedores/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo INCLUDE_PATH; ?>/fornecedores/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="<?php echo INCLUDE_PATH; ?>/fornecedores/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="<?php echo INCLUDE_PATH; ?>/fornecedores/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="<?php echo INCLUDE_PATH; ?>/fornecedores/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!--linkando o arquivo proprio interno CSS-->
        <link href="<?php echo INCLUDE_PATH_PAINEL; ?>/css/style.css" rel="stylesheet">

        <!--formatoção de caracteres/acentuação utilizado no projeto-->
        <meta charset="utf-8">    
        <!--configuração para dispositivo movel-->  
        <meta name="viewport" content="width=device-width, initial-scale=1.0" name="viewport">
        <!--conteúdo resumido do projeto-->
        <meta name="description" content="conteúdo do meu projeto" name="description">
        <!--palavras do resumo para uma busca do projeto-->
        <meta name="keywords" content="palavras,separadas,por,virgula" name="keywords">
        <!--nome do autor ou empresa do projeto-->
        <meta name="author" content="DROPS.code - Edmur G Silva Jr">    
        <!--título do projeto-->
        <title>GRUPO RUBEUS</title>    

    </head> 

    <body>  

        <!--codigo do projeto(parte01)--> 
        <header id="header">                  

            <div class="header-menu">

                <h1 class="logo me-auto"><a href="index.html">Processo seletivo</a></h1>            

                <nav class="navbar">
                    <ul>
                        <li><a class="signin" onclick="document.getElementById('box-login').style.display = 'block';">Login</a></li>                    
                        <li><a class="signup" onclick="document.getElementById('box-inscreva-se').style.display = 'block';">Inscreva-se</a></li>                                                                                           
                    </ul>
                </nav><!--desktop-menu-->                                  

                <div class="clear"></div><!--clear(reset para flutuação)-->

            </div><!--header-menu-->                                  

            <div class="sucesso-erro-box-login-e erro"> <i class="bi bi-x"></i>  Erro ao increver o usuário!  </div> 
            <div class="sucesso-erro-box-login-s sucesso"> <i class="bi bi-x"></i> Cadastro feito com sucesso! </div> 
            <div class="sucesso-erro-box-login-j erro"> <i class="bi bi-x"></i> Já existe esta informação! </div> 

        </header><!--header-->

        <!--codigo do projeto(parte01)-->
        <section id="rubeus" class="rubeus">

            <!-- valida envio do formulario login ou inscreva-se -->
            <?php
                //verifica se existe o metodo ACAO, para enviar o formulario login
                if(isset($_POST['acao']) && $_POST['identificador'] == 'form_login'){

                    //variaveis de controle
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $processoSeletivo = $_POST['id_curso_processo_seletivo'];

                    $sql = MySql::conectar()->prepare("SELECT * FROM tb_admin_usuarios WHERE usuario = ? AND senha = ?");
                    $sql->execute(array($email,$password));
                    if($sql->rowCount() == 1){
                        $info = $sql->fetch();
                        //Logamos com sucesso.
                        $_SESSION['login'] = true;
                        $_SESSION['usuaio'] = $email;
                        $_SESSION['senha'] = $password;
                        $_SESSION['nome'] = $info['nome']; 
                        $_SESSION['id_Usuario'] = $info['id'];
                        $_SESSION['id_curso_processo_seletivo'] = $processoSeletivo;
                        //
                        header('Location: '.INCLUDE_PATH_PAINEL);
                        //
                        die();                    
                    }else{
                        //Falhou
                        echo '<style>.sucesso-erro-box-login-e { display: block; }</style>';
                        echo "<meta HTTP-EQUIV='refresh' CONTENT='4'>";
                    }

                }else if(isset($_POST['acao']) && $_POST['identificador'] == 'form_inscreva-se'){

                    //echo '<script>alert("teste ")</script>';   

                   //variaveis de controle
                   $email = $_POST['email'];
                   $senha = $_POST['password'];
                   $validarSenha = $_POST['valid-password'];
                   $nome = $_POST['nome'];
                   
                   //instancia a classe USUARIO    
                   $adminUsuarios = new AdminUsuarios();                       
                   
                   //valida todos os campos do formulario  
                   if($email == ''){
                        echo '<style>.sucesso-erro-box-login-e { display: block; }</style>';
                        echo "<meta HTTP-EQUIV='refresh' CONTENT='4'>";                 
                    }else if($email != filter_var($email, FILTER_VALIDATE_EMAIL)){
                       echo '<style>.sucesso-erro-box-login-e { display: block; }</style>';
                       echo "<meta HTTP-EQUIV='refresh' CONTENT='4'>";                 
                    }else if($senha == ''){
                        echo '<style>.sucesso-erro-box-login-e { display: block; }</style>';                                    
                        echo "<meta HTTP-EQUIV='refresh' CONTENT='4'>";
                    }else if($nome == ''){
                        echo '<style>.sucesso-erro-box-login-e { display: block; }</style>';;                    
                        echo "<meta HTTP-EQUIV='refresh' CONTENT='4'>";                        
                    }else{
                        //valida campos chaves do formulario  
                        if($senha != $validarSenha){
                            echo '<style>.sucesso-erro-box-login-e { display: block; }</style>';                                    
                            echo "<meta HTTP-EQUIV='refresh' CONTENT='4'>";
                        }else{
							//valida se existe nome do usuario já cadastrado
							$verifica = MySql::conectar()->prepare("SELECT * FROM tb_admin_usuarios WHERE usuario=?");
							$verifica->execute(array($email));
							if($verifica->rowCount() == 0){											
								//cadastrar o usuario no bando de dados  
								if($adminUsuarios->cadastrarUsuarios($email,$senha,$nome)){
                                    echo '<style>.sucesso-erro-box-login-s { display: block; }</style>';                                    
                                    echo "<meta HTTP-EQUIV='refresh' CONTENT='4'>";
								}else{
                                    echo '<style>.sucesso-erro-box-login-e { display: block; }</style>';                                    
                                    echo "<meta HTTP-EQUIV='refresh' CONTENT='4'>";
								}
							}else{
                                echo '<style>.sucesso-erro-box-login-j { display: block; }</style>';                                    
                                echo "<meta HTTP-EQUIV='refresh' CONTENT='4'>"; 
                            }
                        }
                    }
                }
            ?>      

            <section id="hero">
                <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                    <div class="carousel-inner" role="listbox">

                        <!-- Slide 1 -->
                        <div class="carousel-item active" style="background-image: url(./img/slide/slide-1.jpg)">
                            <div class="carousel-container">
                                <div class="container">
                                    <h2 class="animate__animated animate__fadeInDown">Vestibular Online</h2>
                                    <p class="animate__animated animate__fadeInUp">O vestibular online possibilita aos candidatos a realização do exame pela internet. Através do acesso ao Portal Vestibulares, o candidato pode realizar a escolha do curso, unidade de ensino e apoio, além de poder escolher a modalidade (presencial, semipresencial ou 100% online).</p>              
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item" style="background-image: url(./img/slide/slide-2.jpg)">
                            <div class="carousel-container">
                                <div class="container">
                                    <h2 class="animate__animated animate__fadeInDown">Utilize a nota do ENEM</h2>
                                    <p class="animate__animated animate__fadeInUp">Aproveite seu desempenho no ENEM para entrar na Anhanguera. Por meio de sua nota, é possível ingressar em algum curso de graduação, sem o vestibular tradicional. É simples: vá à nossa secretaria com os documentos necessários para comprovar seu desempenho, incluindo uma cópia da relação de pontos que você teve no exame.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="carousel-item " style="background-image: url(./img/slide/slide-3.jpg)">
                            <div class="carousel-container">
                                <div class="container">
                                    <h2 class="animate__animated animate__fadeInDown">Transferência Externa</h2>
                                    <p class="animate__animated animate__fadeInUp">A transferência externa está disponível para todos os alunos que desejam ampliar sua perspectiva com um novo método de ensino em sua área de atuação. As nossas instituições de ensino aceitam as solicitações de transferência de alunos que trancaram sua faculdade há, no máximo, 6 meses.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                    </a>

                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                    </a>

                </div>
            </section><!--hero-->

            <!--login-->
            <div class="container">  
                
                <div id="box-login">                

                    <div class="section-title">
                        <h2>Efetue o login</h2>
                    </div>

                    <a class="logo31" onclick="document.getElementById('box-login').style.display = 'none';"></a>    

                    <div class="row justify-content-center">             

                        <div class="php-login-form">

                            <div class="row">
                            
                                <!--valida e configura do seu formulario para o login-->
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group mt-3">
                                        <input type="text" name="email" class="form-control" id="email" placeholder="Email" required>
                                    </div>                            
                                    <div class="form-group mt-3">
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Senha" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Processo seletivo:</label>
                                        <select name="id_curso_processo_seletivo">
                                            <?php
                                                $id_curso_processo_seletivo = Painel::selectAll('tb_site_cursos');
                                                foreach ($id_curso_processo_seletivo as $key => $value) {
                                            ?>
                                            <option <?php if($value['id'] == @$_POST['id_curso_processo_seletivo']) echo 'selected'; ?> value="<?php echo $value['id'] ?>"><?php echo $value['descricao']; ?></option>
                                            <?php } ?>
                                        </select>			
                                    </div><!--form-group-->
                                    <div class="form-group mt-3">
                                        <div class="text-center">     
                                            <input type="hidden" name="identificador" value="form_login">           <!--campos ocultos para servir de referencia-->
                                            <input type="submit" name="acao" value="Login">
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>

                    </div>

                </div>

                <!--inscrever-se-->
                <div id="box-inscreva-se">                

                    <div class="section-title">
                        <h2>Inscreva-se agora</h2>
                    </div>

                    <a class="logo32" onclick="document.getElementById('box-inscreva-se').style.display = 'none';"></a>                        

                    <div class="row justify-content-center">             

                        <div class="php-login-form">

                            <div class="row">
                            
                                <!--valida e configura do seu formulario para o login-->
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group mt-3">
                                        <label>Email:</label>
                                        <input type="text" name="email" class="form-control" id="email" placeholder="Email" required>
                                    </div><!--form-group-->
                                    <div class="form-group mt-3">
                                        <label>Nome:</label>
                                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" required> 
                                    </div><!--form-group-->
                                    <div class="form-group mt-3">
                                        <label>Senha:</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Senha" autocomplete="off" >
                                    </div><!--form-group--> 
                                    <div class="form-group mt-3">
                                        <label>Confirmar Senha:</label>
                                        <input type="password" name="valid-password" class="form-control" id="valid-password" placeholder="Confirma senha" autocomplete="off" >
                                    </div><!--form-group-->
                                    <div class="form-group mt-3">
                                        <div class="text-center">     
                                            <input type="hidden" name="identificador" value="form_inscreva-se">           <!--campos ocultos para servir de referencia-->
                                            <input type="submit" name="acao" value="Inscreva-se">
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section><!--rubeus--> 

        <!--linkando o arquivo fornecedores externos JS--> 
        <script src="<?php echo INCLUDE_PATH; ?>/fornecedores/bootstrap/js/bootstrap.bundle.min.js"></script> 
        <script src="<?php echo INCLUDE_PATH; ?>/fornecedores/glightbox/js/glightbox.min.js"></script>        
        <script src="<?php echo INCLUDE_PATH; ?>/fornecedores/jquery-v3.6.0/jquery.js"></script>  
        <script src="<?php echo INCLUDE_PATH; ?>/fornecedores/swiper/swiper-bundle.min.js"></script>

        <!--linkando o arquivo proprio interno JS-->
        <script src="<?php echo INCLUDE_PATH; ?>/js/jquery-mask.js"></script> <!--esta biblioteca depende do JQUERY.JS por isto tem que ser declarada depois-->
        <script src="<?php echo INCLUDE_PATH; ?>/js/main.js"></script>                       
        
    </body>

</html>