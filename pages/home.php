<?php 
//    //valida a dados aluno seletiva
//	if(isset($_GET['confirmar-seletiva'])){
//
//		//instancia a classe INSCRICAO
//		$inscricaoAlunos = new InscricaoAlunos();
//
//		//echo '<script>alert("teste ")</script>'; 
//
//		//cadastrar o aluno no bando de dados  
//		if($inscricaoAlunos->cadastrarAlunos($nome,$email,$datanascto,$celular,$telefone,$genero)){															
//			//
//			echo '<style>.sucesso-erro-box-login-s { display: block; }</style>';			
//		}else{
//			echo '<style>.sucesso-erro-box-login-e { display: block; }</style>';
//		}
//
//		//efetua logoout
//		Painel::loggout();
//	}  
?>
<div class="box-content-home w100"> 
	
	<!--adiciona certificados extracurriculares do aluno-->   
	<section class="adicionar-aluno-processo-seletivo">

		<div class="box-content-processo-seletivo">		

			<div class="campo-id-marcacao">
				<div id="numero-da-pagina">1</div><!--numero-da-pagina-->
				<div id="total-de-pagina">3</div><!--total-de-pagina-->
				<!--etapa1-->
				<div id="input1">0</div><!--total-de-pagina-->
				<div id="input2">0</div><!--total-de-pagina-->
				<div id="input3">0</div><!--total-de-pagina-->
				<div id="input4">0</div><!--total-de-pagina-->
				<div id="input5">0</div><!--total-de-pagina-->
				<div id="input6">0</div><!--total-de-pagina-->
				<!--etapa2-->
				<div id="input7">0</div><!--total-de-pagina-->
				<div id="input8">0</div><!--total-de-pagina-->
				<div id="input9">0</div><!--total-de-pagina-->
				<div id="input10">0</div><!--total-de-pagina-->
				<div id="input11">0</div><!--total-de-pagina-->
				<div id="input12">0</div><!--total-de-pagina-->
				<!--etapa3-->
				<div id="input13">0</div><!--total-de-pagina-->
				<div id="input14">0</div><!--total-de-pagina-->
				<div id="input15">0</div><!--total-de-pagina-->
				<div id="input16">0</div><!--total-de-pagina-->
				<div id="input17">0</div><!--total-de-pagina-->
				<div id="input18">0</div><!--total-de-pagina-->
				<div id="input19">0</div><!--total-de-pagina-->
			</div><!--campo-id-marcacao-->			
		
			<h2><i class="bi bi-pencil-square"></i> Preencha o formulário para sua inscrição </h2>

			<form method="post" enctype="multipart/form-data"> <!--sem este atributo ENCTYPE, nao funciona o upload da imagem--> 

				<!-- valida envio do formulario aluno-processo-seletivo -->        
				<?php

					//verifica se existe o metodo ACAO, para enviar o formulario adicionar   
					if(isset($_POST['acao'])){
					
						//variaveis de controle
						$nome = $_POST['nome'];

						/*
						$email = $_POST['email'];
						$datanascto = $_POST['datanascto'];
						$celular = $_POST['celular'];
						$telefone = $_POST['telefone'];						
						$genero = $_POST['genero1'];												
						$id_modalidade = $_POST['id_modalidade'];						
						$id_area_conhecimento = $_POST['id_area_conhecimento'];						
						$id_curso_seletivo = $_POST['id_curso_seletivo'];		
						$id_estado_curso = $_POST['id_estado_curso'];		
						$id_estado_polo = $_POST['id_estado_polo'];	
						$codigoindicacao = $_POST['codigoindicacao'];	
						$codigovoucher = $_POST['codigo-voucher'];	
						$cpf = $_POST['cpf'];	
						$rg = $_POST['rg'];	
						$id_nacionalidade = $_POST['id_nacionalidade'];	
						$id_estado_natal = $_POST['id_estado_natal'];	
						$id_cidade_natal = $_POST['id_cidade_natal'];	
						$social = $_post['social1'];
						$especial = $_post['especial1'];
						*/

						//instancia a classe INSCRICAO
						$inscricaoAlunos = new InscricaoAlunos();
					
						//cadastrar o aluno no bando de dados  
						if($inscricaoAlunos->cadastrarAlunos($nome)){															
							//
							echo '<style>.sucesso-erro-box-login-s { display: block; }</style>';			
							echo "<meta HTTP-EQUIV='refresh' CONTENT='4'>";
							
							//
							//tentei sair do sistema mas não consegui, se puderem me ajudar ????!!!!
							//echo '<script type="text/javascript">',	'clickSair();', '</script>';
							//

						}else{
							echo '<style>.sucesso-erro-box-login-e { display: block; }</style>';
							echo "<meta HTTP-EQUIV='refresh' CONTENT='4'>";
							//
							die();
						}
							
					}						
				?>

				<!--valida 1a etapa do formulario-->
				<div class="box-formulario pagina1">

					<div class="form-group">
						<label>Nome completo*</label>
						<input type="text" class="form-control" id="nome" onblur="validInput(event)" name="nome" required>
					</div><!--form-group-->  

					<div class="form-group">
						<label>Email*</label>
						<input type="text" class="form-control" id="email" onblur="validInput(event)" name="email" required>
					</div><!--form-group-->  
					
					<div class="row">
						<div class="form-group col-sm-6">
							<label for="inputDate" class="col-sm-2 col-form-label">Data*</label>
							<input type="date" class="form-control" id="datanascto" onblur="validInput(event)" name="datanascto" required>
						</div>					
						<div class="form-group col-sm-6">
							<label>Celular*</label>
							<input type="text" class="form-control" id="celular" onblur="validInput(event)" data-mask="(00) 99999-9999" name="celular" required>
						</div>
					</div>		 					

					<div class="row">
						<div class="form-group col-sm-6">
							<label>Telefone*</label>
							<input type="text" class="form-control" id="telefone" onblur="validInput(event)" data-mask="(00) 99999-9999" name="telefone" required>
						</div>					
						<div class="form-group col-sm-6"> 
							<div class="centraliza-genero">
								<label>Gênero*</label>
							</div>
							<div class="text-center">							
								<fieldset class="row mb-3">															
									<div class="col-sm-10">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" id="genero1" onblur="validInput(event)" name="genero1" value="Masculino"> <!--    checked   -->
											<label class="form-check-label" for="genero1">Masculino</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" id="genero2" onblur="validInput(event)" name="genero1" value="Feminino">
											<label class="form-check-label" for="genero2">Feminino</label>
										</div>
									</div>								
								</fieldset>
							</div>
						</div>
					</div>						

				</div>

				<!--valida 2a etapa do formulario--> 
				<div class="box-formulario pagina2">					

					<div class="form-group">
						<label>Modalidade*</label>
						<select id="id_modalidade" onblur="validInput(event);" name="id_modalidade" >
							<option value="">Seleciona um item</option>
							<?php
								$id_modalidade = Painel::selectAll('tb_site_modalidades');
								foreach ($id_modalidade as $key => $value) {
							?>
							<option <?php if($value['id'] == @$_POST['id_modalidade']) echo 'selected'; ?> value="<?php echo $value['id'] ?>"><?php echo $value['descricao']; ?></option>
							<?php } ?>
						</select>			
					</div><!--form-group-->			

					<div class="row">
						<div class="form-group col-sm-6">
							<label>Área de conhecimento*</label>
							<select id="id_area_conhecimento" onblur="validInput(event);" name="id_area_conhecimento">
								<option value="">Seleciona um item</option>
								<?php
									$id_area_conhecimento = Painel::selectAll('tb_site_area_conhecimentos');
									foreach ($id_area_conhecimento as $key => $value) {
								?>
								<option <?php if($value['id'] == @$_POST['id_area_conhecimento']) echo 'selected'; ?> value="<?php echo $value['id'] ?>"><?php echo $value['descricao']; ?></option>
								<?php } ?>
							</select>			
						</div>
						
						<div class="form-group col-sm-6" id="curso-seletivo" style='display:none;'>
							<label>Cursos*</label>
							<select id="id_curso_seletivo" onblur="validInput(event);" name="id_curso_seletivo">
								<option value="">Seleciona um item</option>
								<?php
									$id_curso_seletivo = Painel::selectAll('tb_site_curso_seletivos');
									foreach ($id_curso_seletivo as $key => $value) {
								?>
								<option <?php if($value['id'] == @$_POST['id_curso_seletivo']) echo 'selected'; ?> value="<?php echo $value['id'] ?>"><?php echo $value['descricao']; ?></option>
								<?php } ?>
							</select>			
						</div>				
					</div>

					<div class="row">
						<div class="form-group col-sm-6" id="estado-curso" style='display:none;'>
							<label>Estado em que deseja estudar*</label>
							<select id="id_estado_curso" onblur="validInput(event);" name="id_estado_curso">
								<option value="">Seleciona um item</option>
								<?php
									$id_estado_curso = Painel::selectAll('tb_site_estados');
									foreach ($id_estado_curso as $key => $value) {
								?>
								<option <?php if($value['id'] == @$_POST['id_estado_curso']) echo 'selected'; ?> value="<?php echo $value['id'] ?>"><?php echo $value['descricao']; ?></option>
								<?php } ?>
							</select>			
						</div>
						
						<div class="form-group col-sm-6" id="estado-polo" style='display:none;'>
							<label>Polo*</label>
							<select id="id_estado_polo" onblur="validInput(event);" name="id_estado_polo">
								<option value="">Seleciona um item</option>
								<?php
									$id_estado_polo = Painel::selectAll('tb_site_estados');
									foreach ($id_estado_polo as $key => $value) {
								?>
								<option <?php if($value['id'] == @$_POST['id_estado_polo']) echo 'selected'; ?> value="<?php echo $value['id'] ?>"><?php echo 'XX - '.$value['descricao']; ?></option>
								<?php } ?>
							</select>			
						</div>				
					</div>					
					
					<div class="form-group">
						<label>Código de indicação (Cooperação universitária)*</label>
						<input type="text" class="form-control" id="codigoindicacao"  onblur="validInput(event);" name="codigoindicacao" required>
					</div><!--form-group--> 

					<div class="form-group">
						<div class="form-check" id="id-form-check">
							<input class="form-check-input" type="checkbox" id="id_voucher_promocional">
							<label class="form-check-label" for="id_voucher_promocional">Tenho um Voucher (Cupom) Promocional</label>
						</div>	
					</div><!--form-group--> 

					<div class="form-group" id="codigo-voucher-cupom" style='display:none;'>
						<input type="text" class="form-control" id="codigo-voucher" name="codigo-voucher" placeholder="Tenho um Voucher (Cupom) Promocional*">
					</div><!--form-group--> 					

				</div>

				<!--valida 3a etapa do formulario--> 
				<div class="box-formulario pagina3">

					<div class="row">

						<div class="form-group col-sm-6">
							<label>CPF*</label>
							<input type="text" class="form-control" id="cpf" onblur="validInput(event);"  data-mask="000.000.000-00" name="cpf" required>
						</div><!--form-group-->  

						<div class="form-group col-sm-6">
							<label>RG*</label>
							<input type="text" class="form-control" id="rg" onblur="validInput(event);"  data-mask="000.000.000-0" name="rg" required>
						</div><!--form-group-->  		

					</div>

					<div class="row">
						<div class="form-group col-sm-6">
							<label>Nacionalidade*</label>
							<select id="id_nacionalidade" onblur="validInput(event);"  name="id_nacionalidade">
								<option value="">Seleciona um item</option>
								<?php
									$id_nacionalidade = Painel::selectAll('tb_site_nacionalidades');
									foreach ($id_nacionalidade as $key => $value) {
								?>
								<option <?php if($value['id'] == @$_POST['id_nacionalidade']) echo 'selected'; ?> value="<?php echo $value['id'] ?>"><?php echo $value['descricao']; ?></option>
								<?php } ?>
							</select>			
						</div>
						
						<div class="form-group col-sm-6">
							<label>Estado Natal*</label>
							<select id="id_estado_natal" onblur="validInput(event);" name="id_estado_natal">
								<option value="">Seleciona um item</option>
								<?php
									$id_estado_natal = Painel::selectAll('tb_site_estados');
									foreach ($id_estado_natal as $key => $value) {
								?>
								<option <?php if($value['id'] == @$_POST['id_estado_natal']) echo 'selected'; ?> value="<?php echo $value['id'] ?>"><?php echo $value['descricao']; ?></option>
								<?php } ?>
							</select>			
						</div>				
					</div>	

					<div class="form-group">
						<label>Cidade Natal*</label>
						<select id="id_cidade_natal" onblur="validInput(event);" name="id_cidade_natal">
							<option value="">Seleciona um item</option>
							<?php
								$id_cidade_natal = Painel::selectAll('tb_site_cidades');
								foreach ($id_cidade_natal as $key => $value) {
							?>
							<option <?php if($value['id'] == @$_POST['id_cidade_natal']) echo 'selected'; ?> value="<?php echo $value['id'] ?>"><?php echo $value['descricao']; ?></option>
							<?php } ?>
						</select>			
					</div><!--form-group-->							
				
					<div class="row">

					<div class="form-group col-sm-6"> 
							<div class="centraliza-social">
								<label>Utiliza nome social?</label>
							</div>
							<div class="text-left">							
								<fieldset class="row mb-3">															
									<div class="col-sm-10">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" id="social1" onblur="validInput(event)" name="social1" value="Não">  <!--     checked     -->
											<label class="form-check-label" for="social1">Não</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" id="social2" onblur="validInput(event)" name="social1" value="Sim">
											<label class="form-check-label" for="social2">Sim</label>
										</div>
									</div>								
								</fieldset>
							</div>
						</div>

						<div class="form-group col-sm-6"> 
							<div class="centraliza-especial">
								<label>Necessidade especiais?</label>
							</div>
							<div class="text-left">							
								<fieldset class="row mb-3">															
									<div class="col-sm-10">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" id="especial1" onblur="validInput(event);" name="especial1" value="Não"> <!--   checked    -->
											<label class="form-check-label" for="especial1">Não</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" id="especial2" onblur="validInput(event);" name="especial1" value="Sim">
											<label class="form-check-label" for="especial2">Sim</label>
										</div>
									</div>								
								</fieldset>
							</div>
						</div>

					</div>						

				</div>				

				<!--botao de avancar e voltar--> 
				<div id="paginas-prox-ante">	
					<div class="form-group">				
						<a id="seta-direita" onclick="openPrevNext(event, '+')">Avançar</a>	
						<div id="marcador-pagina"></div>				
						<a id="seta-esquerda" onclick="openPrevNext(event, '-')">Voltar</a>
					</div><!--form-group-->   
				</div>
				
				<!--finaliza formulario-->
				<div id="botao-cadastrar">
					<div class="form-group">
						<!-- <input type="submit" id="acao" name="acao" value="Finalizar"> -->
						<a id="finalizar-seletiva" onclick="document.getElementById('popapi-seletivo').style.visibility = 'visible';">Finalizar</a> 
					</div><!--form-group-->   
				</div>

				<!--popapi-finalizar-->    
				<div class="popapi-cursos">

					<div class="row justify-content-center"> 

						<div class="row">

							<div class="popapi-all-container">

								<!-- curso basico -->
								<div id="popapi-seletivo" >

									<div class="popapi-container">
										
										<div class="conteudo-popapi-cursos01">

											<div class="conteudo-popapi-cursos02 justify-content-center">

												<a class="logo33" onclick="document.getElementById('popapi-seletivo').style.visibility = 'hidden';"></a>    

												<div class="text-center"> 
													<h4>Atenção!</h4>
													<p>Confira seus dados abaixo e confirme sua matrícula!</p>
												</div>
												
												<div class="row">
													
													<div class="popapi-title-seletivo">
														<div class="text-center"> 														
															<?php $descricaoProcessoSeletivo = Painel::select('tb_site_cursos','id=?',array($_SESSION['id_curso_processo_seletivo']))['descricao']; ?>														
															<h4><?php echo $descricaoProcessoSeletivo; ?></h4>
														</div>
													</div>

													<div class="col-lg-4 col-md-6">
														<h2>Modalidade</h2>														
														<div class="exibe-opcao-selecionada" style="display:block">
															<div id="opcao-selecionada-modalidade"></div><!--modalidade-selecionada-->
														</div><!--exibe-opcao-modalidade-->															
													</div>

													<div class="col-lg-4 col-md-6">
														<h2>Cursos</h2>
														<div class="exibe-opcao-selecionada" style="display:block">
															<div id="opcao-selecionada-curso"></div><!--modalidade-curso-->
														</div><!--exibe-opcao-curso-->																													
													</div>

													<div class="col-lg-4 col-md-6">
														<h2>Polo</h2>
														<div class="exibe-opcao-selecionada" style="display:block">
															<div id="opcao-selecionada-polo"></div><!--modalidade-polo-->
														</div><!--exibe-opcao-polo-->																													
													</div>

												</div>                              
							
												<div class="row">
													<div class="form-group">
														<div class="text-center"> 
															<input type="submit" id="acao" name="acao" value="CONFIRMAR MATRÍCULA">
															<!--
															<div class="acao-confirmar-seletiva">
																<a id="confirmar-seletiva" href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"></i>CONFIRMAR MATRÍCULA</a>
															</div>
															-->
														<div>
													</div><!--form-group-->   
												</div>

											</div><!--conteudo-popapi-cursos02-->

										</div><!--conteudo-popapi-cursos01-->

										<div class="clear"></div><!--  limpa flutuações-->

									</div><!--container-->

								</div>

							</div>

						</div>

					<div>

				</div><!--popapi-cursos-->

			</form>

		</div><!--box-content-processo-seletivo-->

	</section><!--adicionar-aluno-processo-seletivo-->

</div><!--box-content-home-->
         
