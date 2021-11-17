<?php 
    //valida a configuracao de loggout    
	if(isset($_GET['loggout'])){
		Painel::loggout();
	}  
?>
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

    <body onload="javascript:autoRefresh();"> 

        <!--codigo do projeto(parte01)--> 
        <section id="painel" class="painel">

            <div class="menu">
                <div class="menu-wraper">
                    <div class="box-usuario">    
                        
                        <div class="imagem-logo">
                            <img src="<?php echo INCLUDE_PATH_PAINEL ?>img/icon-rubeus.png" />
                        </div><!--imagem-logo-->     

                        <div class="nome-usuario">
                            <p><?php echo $_SESSION['nome']; ?></p>
                        </div><!--nome-usuario-->    
                        
                        <div class="nome-processo-seletivo1">
                            <p>Processo seletivo:</p> 
                        </div><!--nome-processo-seletivo1-->   

                        <div class="nome-processo-seletivo2">
                            <?php $descricaoProcessoSeletivo = Painel::select('tb_site_cursos','id=?',array($_SESSION['id_curso_processo_seletivo']))['descricao']; ?>
                            <p> <?php    
                                if($_SESSION['id_curso_processo_seletivo'] != '')
                                {
                                    echo $descricaoProcessoSeletivo; 
                                }
                                ?> 
                            </p> 
                        </div><!--nome-processo-seletivo2-->        

                        <div id="etapa-processo-seletivo">
                            <div class="col-lg-6">
                                <div class="resume-item">

                                    <div id="passo-etapa-logo1">
                                        <h1><i id="cor-etapa-logo1" class="bi bi-exclamation"></i></h1> 
                                    </div>             
                                    <div id="passo-etapa-logo2">
                                        <h1><i id="cor-etapa-logo2" class="bi bi-dash"></i></h1> 
                                    </div>        
                                    <div id="passo-etapa-logo3">
                                        <h1><i id="cor-etapa-logo3" class="bi bi-check"></i></h1>
                                    </div>                                                                                                                                            
                                    <div id="passo-etapa-titulo1">Passo 1</div>            
                                    <div id="passo-etapa-mensagem1">Aguardando conclusão</div>                                                  
                                    <p>.        </p>
                                    <p>.        </p>
                                </div>
                                <div class="resume-item">

                                    <div id="passo-etapa-logo4">
                                        <h1><i id="cor-etapa-logo4" class="bi bi-exclamation"></i></h1> 
                                    </div>             
                                    <div id="passo-etapa-logo5">
                                        <h1><i id="cor-etapa-logo5" class="bi bi-dash"></i></h1> 
                                    </div>        
                                    <div id="passo-etapa-logo6">
                                        <h1><i id="cor-etapa-logo6" class="bi bi-check"></i></h1>
                                    </div>                                                                                                                                            
                                    <div id="passo-etapa-titulo2">Passo 2</div>  
                                    <div id="passo-etapa-mensagem2">Pendente</div>                                    
                                    <p>.        </p>
                                    <p>.        </p>
                                </div>
                                <div class="resume-item">
                                    <div id="passo-etapa-logo7">
                                        <h1><i id="cor-etapa-logo7" class="bi bi-exclamation"></i></h1> 
                                    </div>             
                                    <div id="passo-etapa-logo8">
                                        <h1><i id="cor-etapa-logo8" class="bi bi-dash"></i></h1> 
                                    </div>        
                                    <div id="passo-etapa-logo9">
                                        <h1><i id="cor-etapa-logo9" class="bi bi-check"></i></h1>
                                    </div>                                                                                                                                            
                                    <div id="passo-etapa-titulo3">Passo 3</div>
                                    <div id="passo-etapa-mensagem3">Pendente</div>                                                                          
                                </div>

                            </div>
                        </div><!--etapa-processo-seletivo-->

                    </div>   

                </div>
            </div><!--menu-->

            <header>
                <div class="center">

                    <div class="menu-btn">
                        <i class="bi bi-list"></i>
                    </div><!--menu-btn-->

                    <div class="loggout">                                                
                        <a id="loggout" href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"> <i class="bi bi-box-arrow-right"></i> <span>Sair</span></a>
                    </div><!--loggout-->

                    <div class="clear"></div><!--limpa flutuações-->
                </div>
        
            </header><!--header-->

            <div class="content">

                <div class="sucesso-erro-box-login-e erro"> <i class="bi bi-x"></i>  Erro ao increver o usuário!  </div> 
	            <div class="sucesso-erro-box-login-s sucesso"> <i class="bi bi-x"></i> Cadastro feito com sucesso! </div> 

                <div id="painel-central">
                    <!--carrega pagina do painel de controle-->
                    <?php Painel::carregarPagina(); ?>
                <div>

            </div><!--content-->             

        </section><!--painel-->

        <!--linkando o arquivo fornecedores externos JS--> 
        <script src="<?php echo INCLUDE_PATH; ?>/fornecedores/bootstrap/js/bootstrap.bundle.min.js"></script> 
        <script src="<?php echo INCLUDE_PATH; ?>/fornecedores/glightbox/js/glightbox.min.js"></script>        
        <script src="<?php echo INCLUDE_PATH; ?>/fornecedores/jquery-v3.6.0/jquery.js"></script>  
        <script src="<?php echo INCLUDE_PATH; ?>/fornecedores/swiper/swiper-bundle.min.js"></script>

        <!--linkando o arquivo proprio interno JS-->
        <script src="<?php echo INCLUDE_PATH; ?>/js/jquery-mask.js"></script> <!--esta biblioteca depende do JQUERY.JS por isto tem que ser declarada depois-->
        <script src="<?php echo INCLUDE_PATH; ?>/js/main.js"></script>         

        <!-- Video details -->
        <script>  

            // configura menu vertical conforme tamanho de pagina
            window.addEventListener('resize', function() {      
                if (window.matchMedia('(max-width: 850px)').matches) {
                    $('.menu').css('width','401px');
                    $('.menu').css('padding','10px 0');
                    $('.menu-wraper').css('width','401px');
                    $('header').css('left','401px');
                    $('header').css('width','calc(100% - 401px)');    
                    $('.content').css('left','401px');
                    $('.content').css('width','calc(100% - 401px)');                                      
                }else {
                    $('.menu').css('width','451px');
                    $('.menu').css('padding','10px 0');
                    $('.menu-wraper').css('width','451px');
                    $('header').css('left','451px');  
                    $('header').css('width','calc(100% - 451px)');                                      
                    $('.content').css('left','451px');
                    $('.content').css('width','calc(100% - 451px)');                      
                }
            }, true);  

            // configura menu vertical quando dar REFRESH na pagina
            function autoRefresh() {
                if (window.matchMedia('(max-width: 850px)').matches) {
                    $('.menu').css('width','401px');
                    $('.menu').css('padding','10px 0');
                    $('.menu-wraper').css('width','401px');
                    $('header').css('left','401px');
                    $('header').css('width','calc(100% - 401px)');    
                    $('.content').css('left','401px');
                    $('.content').css('width','calc(100% - 401px)');                                      
                }else {
                    $('.menu').css('width','451px');
                    $('.menu').css('padding','10px 0');
                    $('.menu-wraper').css('width','451px');
                    $('header').css('left','451px');  
                    $('header').css('width','calc(100% - 451px)');                                      
                    $('.content').css('left','451px');
                    $('.content').css('width','calc(100% - 451px)');                      
                }            
            }                

            //controle pagina de exibicao do formulario de inscricao
            var varNumeroPagina = document.getElementById("numero-da-pagina").innerHTML;
            var varTotalPagina = document.getElementById("total-de-pagina").innerHTML;
            document.getElementById("marcador-pagina").innerHTML = varNumeroPagina + " - " + varTotalPagina;         
            function openPrevNext(evt, marcador) {
                var varNumeroPagina = parseInt(document.getElementById("numero-da-pagina").innerHTML);
                var varTotalPagina = parseInt(document.getElementById("total-de-pagina").innerHTML);
                var tabconten0, tabcontent1, tabcontent2, tabcontent3;

                //pagina1
                tabcontent1 = document.getElementsByClassName("pagina1");
                for (i = 0; i < tabcontent1.length; i++) {
                    tabcontent1[i].style.display = "none";
                }
            
                //pagina2
                tabcontent2 = document.getElementsByClassName("pagina2");
                for (i = 0; i < tabcontent2.length; i++) {
                    tabcontent2[i].style.display = "none";
                }

                //pagina3
                tabcontent3 = document.getElementsByClassName("pagina3");
                for (i = 0; i < tabcontent3.length; i++) {
                    tabcontent3[i].style.display = "none";
                }                
            
                //Nesxt
                if(marcador === "+")
                {
                    if(varNumeroPagina < varTotalPagina)
                    {
                        varNumeroPagina = varNumeroPagina + 1;
                    }
                }
                //Prev
                if(marcador === "-")
                {
                    if((varNumeroPagina <= varTotalPagina) && varNumeroPagina !== 1)
                    {
                        varNumeroPagina = varNumeroPagina - 1;
                    }
                }
            
                //valida exibir botao cadastrar formulario
                if(varNumeroPagina == 3)
                {
                    document.getElementById("botao-cadastrar").style.display = "block";
                }else{
                    document.getElementById("botao-cadastrar").style.display = "none";
                }                

                //valida exibir botao voltar formulario
                if(varNumeroPagina > 1)
                {
                    document.getElementById("seta-esquerda").style.display = "block";
                }else{
                    document.getElementById("seta-esquerda").style.display = "none";
                } 

                //valida exibir botao avancar formulario
                if(varNumeroPagina == 3)
                {
                    document.getElementById("seta-direita").style.display = "none";
                }else{
                    document.getElementById("seta-direita").style.display = "block";
                } 

                //atualiza pagina
                tabcontent0 = "pagina" + varNumeroPagina.toString();
                tabcontent0 = document.getElementsByClassName(tabcontent0);
                for (i = 0; i < tabcontent0.length; i++) {
                    tabcontent0[i].style.display = "block";
                }
            
                //Atualiza marcadores de controle
                document.getElementById("numero-da-pagina").innerHTML = varNumeroPagina.toString();
                document.getElementById("marcador-pagina").innerHTML = varNumeroPagina.toString() + " - " + varTotalPagina;                      

                //atualiza etapas do processo seletivo
                if(varNumeroPagina.toString() == '1')                
                {
                    //logo
                    // 1
                    document.getElementById("passo-etapa-logo1").style.display = "block";                    
                    document.getElementById("passo-etapa-logo2").style.display = "none";
                    document.getElementById("passo-etapa-logo3").style.display = "none";
                    document.getElementById("passo-etapa-mensagem1").innerHTML = "Aguardando conclusão";
                    document.getElementById("cor-etapa-logo1").style.color = '#ffffff';
                    // 2
                    document.getElementById("passo-etapa-logo4").style.display = "none";
                    document.getElementById("passo-etapa-logo5").style.display = "block";
                    document.getElementById("passo-etapa-logo6").style.display = "none";                
                    document.getElementById("passo-etapa-mensagem2").innerHTML = "Pendente";    
                    document.getElementById("cor-etapa-logo2").style.color = '#2a2e2e';
                    // 3
                    document.getElementById("passo-etapa-logo7").style.display = "none";
                    document.getElementById("passo-etapa-logo8").style.display = "block";
                    document.getElementById("passo-etapa-logo9").style.display = "none";
                    document.getElementById("passo-etapa-mensagem3").innerHTML = "Pendente";                        
                    document.getElementById("cor-etapa-logo3").style.color = '#2a2e2e';
                    //etapa
                    document.getElementById("passo-etapa-titulo1").style.color = '#ffffff';
                    document.getElementById("passo-etapa-titulo2").style.color = '#2a2e2e';
                    document.getElementById("passo-etapa-titulo3").style.color = '#2a2e2e';
                    //mensagem
                    document.getElementById("passo-etapa-mensagem1").style.color = '#ffffff';
                    document.getElementById("passo-etapa-mensagem2").style.color = '#2a2e2e';
                    document.getElementById("passo-etapa-mensagem3").style.color = '#2a2e2e';
                }else if(varNumeroPagina.toString() === "2")
                {
                    //logo
                    // 1
                    document.getElementById("passo-etapa-logo1").style.display = "none";
                    document.getElementById("passo-etapa-logo2").style.display = "none";
                    document.getElementById("passo-etapa-logo3").style.display = "block";
                    document.getElementById("passo-etapa-mensagem1").innerHTML = "Concluído";                                            
                    document.getElementById("cor-etapa-logo5").style.color = '#2a2e2e';                   
                    //
                    document.getElementById("passo-etapa-logo4").style.display = "block";
                    document.getElementById("passo-etapa-logo5").style.display = "none";
                    document.getElementById("passo-etapa-logo6").style.display = "none";
                    document.getElementById("passo-etapa-mensagem2").innerHTML = "Aguardando conclusão";                        
                    document.getElementById("cor-etapa-logo4").style.color = '#ffffff';                  
                    //
                    document.getElementById("passo-etapa-logo7").style.display = "none";
                    document.getElementById("passo-etapa-logo8").style.display = "block";
                    document.getElementById("passo-etapa-logo9").style.display = "none";                    
                    document.getElementById("passo-etapa-mensagem3").innerHTML = "Pendente";                                            
                    document.getElementById("cor-etapa-logo6").style.color = '#2a2e2e';
                    //etapa
                    document.getElementById("passo-etapa-titulo1").style.color = '#2a2e2e';
                    document.getElementById("passo-etapa-titulo2").style.color = '#ffffff';
                    document.getElementById("passo-etapa-titulo3").style.color = '#2a2e2e';
                    //mensagem
                    document.getElementById("passo-etapa-mensagem1").style.color = '#2a2e2e';
                    document.getElementById("passo-etapa-mensagem2").style.color = '#ffffff';
                    document.getElementById("passo-etapa-mensagem3").style.color = '#2a2e2e';
                }else if(varNumeroPagina.toString() === "3")
                {
                    //logo
                    // 1
                    document.getElementById("passo-etapa-logo1").style.display = "none";
                    document.getElementById("passo-etapa-logo2").style.display = "none";
                    document.getElementById("passo-etapa-logo3").style.display = "block";
                    document.getElementById("passo-etapa-mensagem1").innerHTML = "Concluído";                                            
                    document.getElementById("cor-etapa-logo8").style.color = '#2a2e2e';                    
                    //
                    document.getElementById("passo-etapa-logo4").style.display = "none";
                    document.getElementById("passo-etapa-logo5").style.display = "none";
                    document.getElementById("passo-etapa-logo6").style.display = "block";
                    document.getElementById("passo-etapa-mensagem2").innerHTML = "Concluído";              
                    document.getElementById("cor-etapa-logo9").style.color = '#2a2e2e';                                                                      
                    //
                    document.getElementById("passo-etapa-logo7").style.display = "block";
                    document.getElementById("passo-etapa-logo8").style.display = "none";
                    document.getElementById("passo-etapa-logo9").style.display = "none";                     
                    document.getElementById("passo-etapa-mensagem3").innerHTML = "Aguardando conclusão";                                                                
                    document.getElementById("cor-etapa-logo7").style.color = '#ffffff';                                        
                    //etapa
                    document.getElementById("passo-etapa-titulo1").style.color = '#2a2e2e';
                    document.getElementById("passo-etapa-titulo2").style.color = '#2a2e2e';
                    document.getElementById("passo-etapa-titulo3").style.color = '#ffffff';
                    //mensagem
                    document.getElementById("passo-etapa-mensagem1").style.color = '#2a2e2e';
                    document.getElementById("passo-etapa-mensagem2").style.color = '#2a2e2e';
                    document.getElementById("passo-etapa-mensagem3").style.color = '#ffffff';
                }

                //habilita o botao avancar e cadastrar
                if(varNumeroPagina.toString() == '1') {                    
                    //valida
                    let habilitaBotaoAvancar1 = parseInt(document.getElementById("input1").innerHTML) + parseInt(document.getElementById("input2").innerHTML) + parseInt(document.getElementById("input3").innerHTML) + parseInt(document.getElementById("input4").innerHTML) + parseInt(document.getElementById("input5").innerHTML) + parseInt(document.getElementById("input5").innerHTML);
                    //
                    if(habilitaBotaoAvancar1 == 6){    
                        //alert('voltou');
                        document.getElementById("seta-direita").style.background = "#3cd8d8";
                        document.getElementById("seta-direita").style.cursor = "pointer";
                        document.getElementById("seta-direita").style.pointerEvents = "auto";
                    }else{
                        document.getElementById("seta-direita").style.background = "#6e7575";
                        document.getElementById("seta-direita").style.cursor = "default";
                        document.getElementById("seta-direita").style.pointerEvents = "none";
                        
                    }

                }else if(varNumeroPagina.toString()== '2') {                    

                    //valida
                    let habilitaBotaoAvancar2 = parseInt(document.getElementById("input7").innerHTML) + parseInt(document.getElementById("input8").innerHTML) + parseInt(document.getElementById("input9").innerHTML) + parseInt(document.getElementById("input10").innerHTML) + parseInt(document.getElementById("input11").innerHTML) + parseInt(document.getElementById("input12").innerHTML);
                    //
                    if(habilitaBotaoAvancar2 == 6){    
                        //alert('voltou');
                        document.getElementById("seta-direita").style.background = "#3cd8d8";
                        document.getElementById("seta-direita").style.cursor = "pointer";
                        document.getElementById("seta-direita").style.pointerEvents = "auto";
                    }else{
                        document.getElementById("seta-direita").style.background = "#6e7575";
                        document.getElementById("seta-direita").style.cursor = "default";
                        document.getElementById("seta-direita").style.pointerEvents = "none";
                        
                    }

                }else if(varNumeroPagina.toString()== '3') {    

                    //valida
                    let habilitaBotaoAvancar3 = parseInt(document.getElementById("input13").innerHTML) + parseInt(document.getElementById("input14").innerHTML) + parseInt(document.getElementById("input15").innerHTML) + parseInt(document.getElementById("input16").innerHTML) + parseInt(document.getElementById("input17").innerHTML) + parseInt(document.getElementById("input18").innerHTML);
                    //
                    if(habilitaBotaoAvancar3 == 6){    
                        //alert('voltou');
                        document.getElementById("finalizar-seletiva").style.background = "#3cd8d8";
                        document.getElementById("finalizar-seletiva").style.cursor = "pointer";
                        document.getElementById("finalizar-seletiva").style.pointerEvents = "auto";
                    }else{
                        document.getElementById("finalizar-seletiva").style.background = "#6e7575";
                        document.getElementById("finalizar-seletiva").style.cursor = "default";
                        document.getElementById("finalizar-seletiva").style.pointerEvents = "none";
                        
                    }                    

                }
            
            }   

            //exibe a opcao do formulario cursos
            $('#id_area_conhecimento').change(function(){                

                var valor = $('#id_area_conhecimento').val();
                if (valor != "0"){
                    $('#curso-seletivo').show();
                }else {
                    $('#curso-seletivo').hide();
                }
            });         

            //exibe a opcao do formulario estado cursos
            $('#id_curso_seletivo').change(function(){                

                var valor = $('#id_curso_seletivo').val();
                if (valor != "0"){
                    $('#estado-curso').show();
                }else {
                    $('#estado-curso').hide();
                }
            });         

            //exibe a opcao do formulario estado polos
            $('#id_estado_curso').change(function(){                

                var valor = $('#id_estado_curso').val();
                if (valor != "0"){
                    $('#estado-polo').show();
                }else {
                    $('#estado-polo').hide();
                }
            });     

            //exibe a opcao voucher promocional 
            $(document).ready(function () {

                //exibe a opcao voucher promocional
                $("#id-form-check input[type=checkbox]").change(function () {
                    
                    let quantCheck = $('input[type="checkbox"]:checked').length;
                    if(quantCheck != 0) {
                        $('#codigo-voucher-cupom').css('display', 'block')
                    } 
                    else {
                        $('#codigo-voucher-cupom').css('display', 'none')
                    }

                })
            });            

            //valida se todos input estao preenchidos
            //valida input nume
            $(document).on("input", "#nome", function() {
                var caracteresDigitadosNome = $(this).val().length;                    
                if (caracteresDigitadosNome >= 5) {
                    document.getElementById("input1").innerHTML = "1";
                } else {
                    document.getElementById("input1").innerHTML = "0";
                }
            }); 

            //valida input email
            $(document).on("input", "#email", function() {
                var caracteresDigitadosEmail = $(this).val().length;                    
                if (caracteresDigitadosEmail >= 5) {
                    document.getElementById("input2").innerHTML = "1";
                } else {
                    document.getElementById("input2").innerHTML = "0";
                }
            });        
            
            
            //valida input data nascimento
            $(document).on("input", "#datanascto", function() {
                var caracteresDigitadosDataNascto = $(this).val().length;                    
                if (caracteresDigitadosDataNascto >= 10) {
                    document.getElementById("input3").innerHTML = "1";
                } else {
                    document.getElementById("input3").innerHTML = "0";
                }
                
            });               
            
            //valida input celular
            $(document).on("input", "#celular", function() {
                var caracteresDigitadosCelular = $(this).val().length;                    
                if (caracteresDigitadosCelular >= 15) {
                    document.getElementById("input4").innerHTML = "1";                        
                } else {
                    document.getElementById("input4").innerHTML = "0";
                }
                
            });          
                        
            //valida input telefone
            $(document).on("input", "#telefone", function() {
                var caracteresDigitadosTelefone = $(this).val().length;                    
                if (caracteresDigitadosTelefone >= 15) {
                    document.getElementById("input5").innerHTML = "1";  
                } else {
                    document.getElementById("input5").innerHTML = "0";
                }
                
            });                 

            //valida input genero
            $(document).on("input", "#genero1", function() {
                var caracteresDigitadosGenero = $(this).val().length;                    
                if (caracteresDigitadosGenero >= 1) {
                    document.getElementById("input6").innerHTML = "1";  
                } else {
                    document.getElementById("input6").innerHTML = "0";
                }
                
            });   
            //
            $(document).on("input", "#genero2", function() {
                var caracteresDigitadosGenero = $(this).val().length;                    
                if (caracteresDigitadosGenero >= 1) {
                    document.getElementById("input6").innerHTML = "1";  
                } else {
                    document.getElementById("input6").innerHTML = "0";
                }
                
            });              

            //valida input modalidade
            $("#id_modalidade").change(function() {
                var caracteresDigitadosModalidade = $("#id_modalidade").val().length;    
                var descricaoSelecionada = $("#id_modalidade option:selected").text(); 
                if (caracteresDigitadosModalidade >= 1) {
                    document.getElementById("input7").innerHTML = "1";  
                } else {
                    document.getElementById("input7").innerHTML = "0";
                }
                $('#opcao-selecionada-modalidade').html(descricaoSelecionada);
            });                  

            //valida input area conhecimento
            $("#id_area_conhecimento").change(function() {
                var caracteresDigitadosAreaconhecimento = $("#id_area_conhecimento").val().length;                    
                if (caracteresDigitadosAreaconhecimento >= 1) {
                    document.getElementById("input8").innerHTML = "1";  
                } else {
                    document.getElementById("input8").innerHTML = "0";
                }
                
            });   

            //valida input curso
            $("#id_curso_seletivo").change(function() {
                var caracteresDigitadosCurso = $("#id_curso_seletivo").val().length;   
                var descricaoSelecionada = $("#id_curso_seletivo option:selected").text();                
                if (caracteresDigitadosCurso >= 1) {
                    document.getElementById("input9").innerHTML = "1";  
                } else {
                    document.getElementById("input9").innerHTML = "0";
                }
                $('#opcao-selecionada-curso').html(descricaoSelecionada);
            });             
            
            //valida input estado estudar
            $("#id_estado_curso").change(function() {
                var caracteresDigitadosEstadoestudar = $("#id_estado_curso").val().length;                    
                if (caracteresDigitadosEstadoestudar >= 1) {
                    document.getElementById("input10").innerHTML = "1";  
                } else {
                    document.getElementById("input10").innerHTML = "0";
                }
                
            });              

            //valida input estado polo
            $("#id_estado_polo").change(function() {
                var caracteresDigitadosEstadopolo = $("#id_estado_polo").val().length;  
                var descricaoSelecionada = $("#id_estado_polo option:selected").text();
                if (caracteresDigitadosEstadopolo >= 1) {
                    document.getElementById("input11").innerHTML = "1";  
                } else {
                    document.getElementById("input11").innerHTML = "0";
                }
                $('#opcao-selecionada-polo').html(descricaoSelecionada);
            });             
            
            //valida input codigo indicacao
            $("#codigoindicacao").change(function() {
                var caracteresDigitadosCodigoindicacao = $("#codigoindicacao").val().length;                    
                if (caracteresDigitadosCodigoindicacao >= 1) {
                    document.getElementById("input12").innerHTML = "1";  
                } else {
                    document.getElementById("input12").innerHTML = "0";
                }
                
            });          
            
            //valida input cpf
            $(document).on("input", "#cpf", function() {
                var caracteresDigitadosCpf = $(this).val().length;                    
                if (caracteresDigitadosCpf >= 11) {
                    document.getElementById("input13").innerHTML = "1";
                } else {
                    document.getElementById("input13").innerHTML = "0";
                }
            });          
            
            //valida input cpf
            $(document).on("input", "#rg", function() {
                var caracteresDigitadosRg = $(this).val().length;                    
                if (caracteresDigitadosRg >= 10) {
                    document.getElementById("input14").innerHTML = "1";
                } else {
                    document.getElementById("input14").innerHTML = "0";
                }
            });               

            //valida input nacionalidade
            $("#id_nacionalidade").change(function() {
                var caracteresDigitadosNacionalidade = $("#id_nacionalidade").val().length;                    
                if (caracteresDigitadosNacionalidade >= 1) {
                    document.getElementById("input15").innerHTML = "1";  
                } else {
                    document.getElementById("input15").innerHTML = "0";
                }
                
            });   

            //valida input estado natal
            $("#id_estado_natal").change(function() {
                var caracteresDigitadosEsdadonatal = $("#id_estado_natal").val().length;                    
                if (caracteresDigitadosEsdadonatal >= 1) {
                    document.getElementById("input16").innerHTML = "1";  
                } else {
                    document.getElementById("input16").innerHTML = "0";
                }
                
            });          
            
            //valida input estado natal
            $("#id_cidade_natal").change(function() {
                var caracteresDigitadosCidadenatal = $("#id_cidade_natal").val().length;                    
                if (caracteresDigitadosCidadenatal >= 1) {
                    document.getElementById("input17").innerHTML = "1";  
                } else {
                    document.getElementById("input17").innerHTML = "0";
                }
                
            });              

            //valida input nome social
            $(document).on("input", "#social1", function() {
                var caracteresDigitadosNomesocial = $(this).val().length;                    
                if (caracteresDigitadosNomesocial >= 1) {
                    document.getElementById("input18").innerHTML = "1";  
                } else {
                    document.getElementById("input18").innerHTML = "0";
                }
                
            });   
            //
            $(document).on("input", "#social2", function() {
                var caracteresDigitadosNomesocial = $(this).val().length;                    
                if (caracteresDigitadosNomesocial >= 1) {
                    document.getElementById("input18").innerHTML = "1";  
                } else {
                    document.getElementById("input18").innerHTML = "0";
                }
                
            });   

            //valida input necessidade especial
            $(document).on("input", "#especial1", function() {
                var caracteresDigitadosNecessidadeespecial = $(this).val().length;                    
                if (caracteresDigitadosNecessidadeespecial >= 1) {
                    document.getElementById("input19").innerHTML = "1";  
                } else {
                    document.getElementById("input19").innerHTML = "0";
                }
                
            });               
            //
            $(document).on("input", "#especial2", function() {
                var caracteresDigitadosNecessidadeespecial = $(this).val().length;                    
                if (caracteresDigitadosNecessidadeespecial >= 1) {
                    document.getElementById("input19").innerHTML = "1";  
                } else {
                    document.getElementById("input19").innerHTML = "0";
                }
                
            });               

            //simula um click no botao sair
            document.getElementById('acao').onclick = function () {

                //document.getElementById("loggout").click();              //ou   $('#loggout').click();                

            }
            //
            function clickSair() {    
                                
                //document.getElementById("loggout").click();              //ou   $('#loggout').click();                

            }

            //habilita o botao avancar e cadastrar
            function validInput(evt) {    

                var varNumeroPagina = document.getElementById("numero-da-pagina").innerHTML;

                if(varNumeroPagina.toString() == '1') {                    
                    //valida
                    let habilitaBotaoAvancar1 = parseInt(document.getElementById("input1").innerHTML) + parseInt(document.getElementById("input2").innerHTML) + parseInt(document.getElementById("input3").innerHTML) + parseInt(document.getElementById("input4").innerHTML) + parseInt(document.getElementById("input5").innerHTML) + parseInt(document.getElementById("input5").innerHTML);
                    //
                    if(habilitaBotaoAvancar1 == 6){    
                        //alert('voltou');
                        document.getElementById("seta-direita").style.background = "#3cd8d8";
                        document.getElementById("seta-direita").style.cursor = "pointer";
                        document.getElementById("seta-direita").style.pointerEvents = "auto";
                    }else{
                        document.getElementById("seta-direita").style.background = "#6e7575";
                        document.getElementById("seta-direita").style.cursor = "default";
                        document.getElementById("seta-direita").style.pointerEvents = "none";
                        
                    }

                }else if(varNumeroPagina.toString()== '2') {                    

                    //valida
                    let habilitaBotaoAvancar2 = parseInt(document.getElementById("input7").innerHTML) + parseInt(document.getElementById("input8").innerHTML) + parseInt(document.getElementById("input9").innerHTML) + parseInt(document.getElementById("input10").innerHTML) + parseInt(document.getElementById("input11").innerHTML) + parseInt(document.getElementById("input12").innerHTML);
                    //
                    if(habilitaBotaoAvancar2 == 6){    
                        //alert('voltou');
                        document.getElementById("seta-direita").style.background = "#3cd8d8";
                        document.getElementById("seta-direita").style.cursor = "pointer";
                        document.getElementById("seta-direita").style.pointerEvents = "auto";
                    }else{
                        document.getElementById("seta-direita").style.background = "#6e7575";
                        document.getElementById("seta-direita").style.cursor = "default";
                        document.getElementById("seta-direita").style.pointerEvents = "none";
                        
                    }

                }else if(varNumeroPagina.toString()== '3') {    

                    //valida
                    let habilitaBotaoAvancar3 = parseInt(document.getElementById("input13").innerHTML) + parseInt(document.getElementById("input14").innerHTML) + parseInt(document.getElementById("input15").innerHTML) + parseInt(document.getElementById("input16").innerHTML) + parseInt(document.getElementById("input17").innerHTML) + parseInt(document.getElementById("input18").innerHTML);
                    //
                    if(habilitaBotaoAvancar3 == 6){    
                        //alert('voltou');
                        document.getElementById("finalizar-seletiva").style.background = "#3cd8d8";
                        document.getElementById("finalizar-seletiva").style.cursor = "pointer";
                        document.getElementById("finalizar-seletiva").style.pointerEvents = "auto";
                    }else{
                        document.getElementById("finalizar-seletiva").style.background = "#6e7575";
                        document.getElementById("finalizar-seletiva").style.cursor = "default";
                        document.getElementById("finalizar-seletiva").style.pointerEvents = "none";
                        
                    }

                }

            };
            
        </script>             


    </body>
</html>