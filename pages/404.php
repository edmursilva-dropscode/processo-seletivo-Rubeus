<!--codigo do projeto(parte01)-->
<section id="erro-404" class="erro-404 section-bg">
    <div class="container">

        <div class="section-text"> 

			<div class="wraper-404">
				<h2><i style="padding:0 10px;color:red;" class="bi bi-x-circle"></i>A página Não Existe!</h2>
				<p>Deseja voltar para a <a href="<?php echo INCLUDE_PATH; ?>">página inicial</a> ?</p>
			</div><!--wraper404-->

        </div>

    </div>
</section><!-- End erro-404 Section -->

<!--configura funcoes de execução da pagina-->
<script>

    //pega o tamanho do id hero
    let objDivHero = document.getElementById("hero");  	
    objDivHero.style.display = "none";
    
</script> 