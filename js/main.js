$(function(){
	"use strict";
	
	var open  = true;
	var windowSize = $(window)[0].innerWidth;
	var targetSizeMenu = (windowSize <= 600) ? 401 : 451;

	// valida o tamanho da pagina
	window.addEventListener('resize', function() {
		if (window.matchMedia('(max-width: 600px)').matches) {
			targetSizeMenu = 401;
		}else {
			targetSizeMenu = 451;
		}
	}, true);  

	//valida menu vertical ao pressionar botao para minimizar ou maximizar 
	$('.menu-btn').click(function(){
		if(open){
			//O menu está aberto, precisamos fechar e adaptar nosso conteudo geral do painel
			$('.menu').animate({'width':0,'padding':0},function(){
				open = false;
			});
			$('.content,header').css('width','100%');
			$('.content,header').animate({'left':0},function(){
				open = false;
			});
 	}else{
			//O menu está fechado
			$('.menu').css('display','block');
			$('.menu').animate({'width':targetSizeMenu+'px','padding':'10px 0'},function(){
				open = true;
			});
			if(windowSize > 868)
				$('.content,header').css('width','calc(100% - 451px)');
				$('.content,header').animate({'left':targetSizeMenu+'px'},function(){
				open = true;
			});
		}
	})

	//formata menu vertical ao minimizar ou maximizar apenas pelo tamanho da tela 
	$(window).resize(function(){
		windowSize = $(window)[0].innerWidth;
		targetSizeMenu = (windowSize <= 600) ? 401 : 451;
		if(windowSize <= 868){
			$('.menu').css('width','0').css('padding','0');
			$('.content,header').css('width','100%').css('left','0');
			open = false;
		}else{
			$('.menu').animate({'width':targetSizeMenu+'px','padding':'10px 0'},function(){
				open = true;
			});

			$('.content,header').css('width','calc(100% - 451px)');
			$('.content,header').animate({'left':targetSizeMenu+'px'},function(){
			open = true;
			});
		}

	})


	




















	

	/**
	 * Easy selector helper function
	 */
	const select = (el, all = false) => {
		el = el.trim()
		if (all) {
			return [...document.querySelectorAll(el)]
		} else {
			return document.querySelector(el)
		}
	}

	/**
	 * Easy event listener function
	 */
	const on = (type, el, listener, all = false) => {
		let selectEl = select(el, all)
		if (selectEl) {
			if (all) {
			selectEl.forEach(e => e.addEventListener(type, listener))
			} else {
			selectEl.addEventListener(type, listener)
			}
		}
	}

	/**
	 * Easy on scroll event listener 
	 */
	const onscroll = (el, listener) => {
		el.addEventListener('scroll', listener)
	}

	/**
	 * Toggle .header-scrolled class to #header when page is scrolled
	 */
	let selectHeader = select('#header')
	if (selectHeader) {
		const headerScrolled = () => {
			if (window.scrollY > 100) {
			selectHeader.classList.add('header-scrolled')
			} else {
			selectHeader.classList.remove('header-scrolled')
			}
		}
		window.addEventListener('load', headerScrolled)
		onscroll(document, headerScrolled)
	}

	/**
	 * Back to top button
	 */
	let backtotop = select('.back-to-top')
	if (backtotop) {
		const toggleBacktotop = () => {
			if (window.scrollY > 100) {
			backtotop.classList.add('active')
			} else {
			backtotop.classList.remove('active')
			}
		}
		window.addEventListener('load', toggleBacktotop)
		onscroll(document, toggleBacktotop)
	}

	/**
	 * Mobile nav toggle
	 */
	on('click', '.mobile-nav-toggle', function(e) {
		select('#navbar').classList.toggle('navbar-mobile')
		this.classList.toggle('bi-list')
		this.classList.toggle('bi-x')
	})

	/**
	 * Mobile nav dropdowns activate
	 */
	on('click', '.navbar .dropdown > a', function(e) {
		if (select('#navbar').classList.contains('navbar-mobile')) {
			e.preventDefault()
			this.nextElementSibling.classList.toggle('dropdown-active')
		}
	}, true)

	/**
	 * Hero carousel indicators
	 */
	let heroCarouselIndicators = select("#hero-carousel-indicators")
	let heroCarouselItems = select('#heroCarousel .carousel-item', true)

	heroCarouselItems.forEach((item, index) => {
		(index === 0) ?
		heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "' class='active'></li>":
			heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "'></li>"
	});

	/**
	 * Porfolio isotope and filter
	 */
	window.addEventListener('load', () => {
	let portfolioContainer = select('.portfolio-container');
	if (portfolioContainer) {
			let portfolioIsotope = new Isotope(portfolioContainer, {
			itemSelector: '.portfolio-item'
			});

			let portfolioFilters = select('#portfolio-flters li', true);

			on('click', '#portfolio-flters li', function(e) {
			e.preventDefault();
			portfolioFilters.forEach(function(el) {
				el.classList.remove('filter-active');
			});
			this.classList.add('filter-active');

			portfolioIsotope.arrange({
				filter: this.getAttribute('data-filter')
			});
			}, true);
		}

	});

	/**
	 * Portfolio details slider
	 */
	new Swiper('.portfolio-details-slider', {
		speed: 400,
		loop: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false
		},
		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
			clickable: true
		}
	});

	/**
	 * Skills animation
	 */
	let skilsContent = select('.skills-content');
		if (skilsContent) {
		new Waypoint({
			element: skilsContent,
			offset: '80%',
			handler: function(direction) {
			let progress = select('.progress .progress-bar', true);
			progress.forEach((el) => {
				el.style.width = el.getAttribute('aria-valuenow') + '%'
			});
			}
		})
	}













	//valida acao do botao deletar 
	$('[actionBtn=delete]').click(function(){
		var txt;
		var r = confirm("Deseja excluir o registro?");
		if (r == true) {
			return true;
		} else {
			return false;
		}
	})	

	//valida acao do botao enviar 
	$('[actionBtn=enviar]').click(function(){
		var txt;
		var r = confirm("Deseja enviar o certificado para analise?");
		if (r == true) {
			return true;
		} else {
			return false;
		}
	})		

	//valida acao do botao homologar 
	$('[actionBtn=homologar]').click(function(){
		var txt;
		var r = confirm("Deseja homologar este certificado?");
		if (r == true) {
			return true;
		} else {
			return false;
		}
	})	

	//valida acao do botao nao-homologar 
	$('[actionBtn=nao-homologar]').click(function(){
		var txt;
		var r = confirm("Deseja nhomologar este certificado?");
		if (r == true) {
			return true;
		} else {
			return false;
		}
	})	

})









