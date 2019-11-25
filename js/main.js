$(function() {
	$nav = $(".nav");
	$toggleCollapse = $(".toggle-collpase");
	
	//evento de click no botão toggle
	$toggleCollapse.click(function(){
		$nav.toggleClass('collapse');
		
	});
	
	$(".move-up").click(function(){
		$("html, body").animate({
			scrollTop:0
		},3000);
	})
		
	//Inicialização da animação
	AOS.init();
	
	var scene = document.getElementById('scene');
	var parallax = new Parallax(scene);
});

// Testando importação de dados
function importaDados() {
	$.get("http://demomagento2-clients.toogas.com/rest/V1/products?searchCriteria", function(data){
		console.log(data);
	});
}
