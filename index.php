
<?php
$produto1 = [
    'titulo'=> 'moto', 
    'descricao'=>'Esse produto é incrivel',
];
$produto2  = [
	'titulo' => 'carro',
	'descricao' => 'Esse produto é incrivel'
];
$produtos = [$produto1,$produto2];



/*
include 'config.php';

include 'src/Produtos.php';
$produtos = new Produtos($mysql);
$produtos = $produto->exibirTodos();

*/

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Toogas</title>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
	
<!---------------------------------  font Awesome   ----------------------------------- -->
  <link rel="stylesheet" type="text/css" href="css/all.css">

<!---------------------------------  AOS   ----------------------------------- -->
  <link rel="stylesheet" type="text/css" href="css/helpers/aos.css">
  <link rel="icon" href="assets/rds-simbolo.png" sizes="16x16">


</head>

<body>
	
	<!---------------------------------  Navigation Start   ----------------------------------- -->
	
	<nav class="nav">
		<div class="nav-menu flex-row">
			<div class="nav-brand">
				<a href="#" class="text-gray">Toogas</a>
			</div>
			<div class="toggle-collpase">
				<div class="toggle-icons">
					<i class="fas fa-bars"></i>
				</div>
			</div>
			<div class="nav-items">
				<ul>
					<li class="nav-link home">
					<a href="#home">Home</a>
					</li>				
					<li class="nav-link sobre">
					<a href="#sobre">Sobre nós</a>
					</li>		
					<li class="nav-link loja">
					<a href="#loja">Loja online</a>
					</li>		
				</ul>
			</div>
			<div class="social text-gray">
				<a href="https://www.linkedin.com/company/toogas-lda/"><i class="fab fa-linkedin-in"></i></a>
			</div>
		
		
		</div>
	</nav>
	<!---------------------------------  Navigation end   ----------------------------------- -->
	
	<!---------------------------------  Main Section Start   ----------------------------------- -->
	
	<main>
		<!---------  Site Title   --------- -->
		<section class="site-title">
	
		</section>
	
	
		<!---------  Site Title end --------- -->
		<!---------  About Start   --------- -->
		<section class="container">
			<div class="site-container" id="sobre">
				<div class="posts">
					<div class="post-content" data-aos="flip-up">
						<div class="post-image">
							<div class="post-title" data-aos="flip-up">
							<h2>Adobe Magento Solution Partner</h2>
								<p>
								Com quase uma década de experiência em Portugal
								e com uma base instalada de mais de 200 clientes em todo o mundo,
								utilizamos Magento, a maior plataforma de eCommerce à escala mundial.

								Estamos focados em desenvolver soluções inovadoras de comércio eletrónico,
								aumentando as vendas e a presença online dos nossos clientes.</p>
							</div>
						</div>					
					</div>
				</div>
				
			
			</div>
		</section>
		
		
		<!---------  About end   --------- -->
		
		
		<!---------  Store Start   --------- -->
		
		<section class="container site-container loja-online">
			<div class="loja-container" id="loja">
				<?php foreach ($produtos as $produto) : ?>
        <h2><div class="produto">
            <a href="produto.php?id=<?php echo $produto['id']; ?>">
                <?php echo $produto['titulo']; ?>
            </a>
        </h2>
        <p>
            <?php echo nl2br($produto['descricao']);  ?>
		</p>
		<button class="btn">comprar</button>
		</div>
        <?php endforeach; ?>
    </div>
			</div>
		</section>
		
		<!---------  Store end   --------- -->
	</main>
	
	
	<!---------------------------------  Main Section end   ----------------------------------- -->
	<!---------------------------------  Footer start  ----------------------------------- -->
	<footer class="rodape">
		<div class="container" id="contato">
			<div class="sobre" data-aos="fade-right">
			<h2>Info</h2>
			<p>Esse site foi construido para um projeto teste de desenvolvimento front end</p>
			</div>
			<div class="design" data-aos="fade-in">
			<h2>Design</h2>
			<div class="lista">
				<img src="assets/instagram/thumb-card3.png">
				<img src="assets/instagram/thumb-card4.png">
				<img src="assets/instagram/thumb-card5.png">
				<img src="assets/instagram/thumb-card6.png">
				<img src="assets/instagram/thumb-card7.png">
				<img src="assets/instagram/thumb-card8.png">
			</div>
			</div>
			<div class="contato" data-aos="fade-left">
			<h2>Contato</h2>
				<div class="social-footer">
				<a href="https://linkedin.com/in/raphael-da-silva-design-development/"><i class="fab fa-linkedin-in"></i></a>
				<a href="https://github.com/rapha1908/MeusCodigos"><i class="fab fa-github"></i></a>
				<a href="https://www.behance.net/raphaeldasilva"><i class="fab fa-behance"></i></a>
			
				</div>
				<p>Celular: +351 91 2727 977</p>			
				<a href="mailto:rapha.santi@gmail.com">Click aqui para me enviar um email</a>
				<button class="zap">
					<a href="http://api.whatsapp.com/send?1=pt_BR&phone=353831165596">Meu WhatsApp</a>
				</button>

			</div>
						
				<div class="move-up">
					<i class="fas fa-arrow-circle-up fa-2x"></i>				
				</div>
		</div>
	
	</footer>
	<!---------------------------------  Footer end  ----------------------------------- -->
	<script src="js/jquery.js"></script>

	<!---------------------------------  AOS   ----------------------------------- -->

	<script src="js/aos.js"></script>

	<script src="js/main.js"></script>
	
	
</body>
</html>
