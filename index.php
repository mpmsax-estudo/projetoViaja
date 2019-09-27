<!DOCTYPE html>
<html lang=en>
	<head>
		<Title>Projeto</Title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" src="css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js">
</script>
<style>
	@media screen and (max-width:900px) {
		/* estilo Mobile */
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			width: 70%;
			margin: auto;
		}
	}
	@media screen and (min-width:900px) {
		/* estilo Desktop 
		.container {
			display: none;
		}
		#myCarousel {
			display: none;
		} */
	}
</style>
	</head>
<body>
	<div class="container">
		<h2>Activate Carousel with JavaScript</h2>
		<div id="myCarousel" class="carousel slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li class="item1 active"></li>
				<li class="item2"></li>
				<li class="item3"></li>
				<li class="item4"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				
				<div class="item active">
					<img src="imagens/1-foz-iguacu.jpg" alt="foz-iguacu">
					<div class="carousel-caption">
						<h3>Foz do Iguacu</h3>
						<p>Good wether</p>
					</div>
				</div>
				<div class="item">
					<img src="imagens/2-vitoria-conquista.jpg" alt="Vitoria da Conquista">
					<div class="carousel-caption">
						<h3>Vitoria Da Conquista</h3>
						<p>Good City</p>
					</div>
				</div>
				<div class="item">
					<img src="imagens/3-brasilia.jpg" alt="Brasilia">
					<div class="carousel-caption">
						<h3>Brasilia</h3>
						<p>Capital</p>
					</div>
				</div>
				<div class="item">
					<img src="imagens/4-porto-alegre.jpg" alt="Porto Alegre">
					<div class="carousel-caption">
						<h3>Porto Alegre</h3>
						<p>Good Beaches</p>
					</div>
				</div>
				<a class="left carousel-control" href="#myCarousel" role="button">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			// Activate Carousel
			$("#myCarousel).carousel();

			//Enable Carousel Indicators
			$(".item1").click(function(){
				$("#myCarousel").carousel(0);
			});
			$(".item2").click(function(){
				$("#myCarousel").carousel(1);
			});
			$(".item3").click(function(){
				$("#myCarousel").carousel(2);
			});
			$(".item4").click(function(){
				$("#myCarousel").carousel(3);
			});

			//Enable Carousel Controls
			$(".left").click(function(){
				$("#myCarousel").carousel("prev");
			});
			$(".right").click(function(){
				$("#myCarousel").carousel("next");
			});
		});
	</script>


</body>
</html>
