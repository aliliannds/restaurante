<!DOCTYPE html>
<html>
<head>
	<title>Restaurante delivery</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include "itens.php" ?>
</head>
<body>
	<h1 id="topo">Restaurante delivery</h1>
	<hr>	
	<div id="pratos">
		<table>
			<caption><h2>Pratos</h2> </caption>
			<thead>
				<tr>
					<th style="opacity: 0;"></th>
					<th>Detalhes</th>
					<th>Ação</th>
				</tr>
			</thead>			
			<tbody>
				<tr>
					<td class="texto-centro w-50"><img src="<?php echo $imagens[0]?>" alt="PF"></td>
					<td>
						<h3 class="negrito">PF - Prato feito<span class="preco">R$25,00</span></h3>
						<p class="negrito">Ingredientes do prato:</p>	
						<ul>
							<li>Arroz</li>
							<li>Feijão</li>
							<li>Farofa</li>
							<li>Ovo</li>
							<li>Batata frita</li>
							<li>Bife a milanesa</li>
							<li>Salada com alface, tomate e cebola</li>
						</ul>
					</td>
					<td class="w-5 texto-centro"><a href="buy.php?p=0">Adicionar ao carrinho</a></td>
				</tr>
				<tr>
					<td class="texto-centro w-50"><img src="<?php echo $imagens[1]?>" alt="Canja"></td>
					<td>
						<h3 class="negrito">Canja de frango<span class="preco">R$15,00</span></h3>
						<p class="negrito">Ingredientes do prato:</p>	
						<ul>
							<li>Frango</li>
							<li>Macarrão</li>
							<li>Cenoura e batata</li>
							<li>Batata frita</li>
							<li>Cebola</li>
							<li>Coentro</li>
							<li>Acompanhanho de um pão francês</li>
						</ul>
					</td>
					<td class="w-5 texto-centro"><a href="buy.php?p=1">Adicionar ao carrinho</a></td>
				</tr>
				<tr>
					<td class="texto-centro w-50"><img src="<?php echo $imagens[2]?>" alt="Hamburguer+batata"></td>
					<td>
						<h3 class="negrito">Hamburguer e batata frita<span class="preco">R$16,00</span></h3>
						<p class="negrito">Ingredientes do prato:</p>	
						<ul>
							<li>Pão</li>
							<li>Alface</li>
							<li>Tomate</li>
							<li>Carne bovina</li>
							<li>Queijo</li>
							<li>Batata frita</li>
						</ul>
					</td>
					<td class="w-5 texto-centro"><a href="buy.php?p=2">Adicionar ao carrinho</a></td>
				</tr>
				<tr>
					<td class="texto-centro w-50"><img src="<?php echo $imagens[3]?>" alt="Bolo"></td>
					<td>
						<h3 class="negrito">Pedaço de bolo de chocolate<span class="preco">R$4,00</span></h3>
						<p class="negrito">Ingredientes do prato:</p>	
						<ul>
							<li>Cobertura de chocolate</li>
							<li>Recheio de chocolate</li>
							<li>Massa de chocolate</li>
							<li>Raspas de chocolate meio amargo</li>
						</ul>
					</td>
					<td class="w-5 texto-centro"><a href="buy.php?p=3">Adicionar ao carrinho</a></td>
				</tr>
				<tr>
					<td class="texto-centro w-50"><img src="<?php echo $imagens[4]?>" alt="Pastel"></td>
					<td>
						<h3 class="negrito">Pastel de carne<span class="preco">R$5,00</span></h3>
						<p class="negrito">Ingredientes do prato:</p>	
						<ul>
							<li>Massa do pastel</li>
							<li>Carne moída</li>
							<li>Cubos de queijo</li>
						</ul>
						<p>Vem no tamanho grande(20x15cm)</p>
					</td>
					<td class="w-5 texto-centro"><a href="buy.php?p=4">Adicionar ao carrinho</a></td>
				</tr>
				<tr>
					<td class="texto-centro w-50"><img src="<?php echo $imagens[5]?>" alt="Refrigerante"></td>
					<td>
						<h3 class="negrito">Guaraná Jesus<span class="preco">R$3,00</span></h3>
						<p>Latinha com 350ml</p>
					</td>
					<td class="w-5 texto-centro"><a href="buy.php?p=5">Adicionar ao carrinho</a></td>
				</tr>
				<tr>
					<td class="texto-centro w-50"><img src="<?php echo $imagens[6]?>" alt="Suco"></td>
					<td>
						<h3 class="negrito">Suco de laranja Del Valle Maracujá<span class="preco">R$4,00</span></h3>
						<p>Latinha com 290ml</p>
					</td>
					<td class="w-5 texto-centro"><a href="buy.php?p=6">Adicionar ao carrinho</a></td>
				</tr>
			</tbody>				
		</table>
	</div>
	<a href="#topo" class="subir">Topo</a>		
</body>
</html>