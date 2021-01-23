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
	<a href="index.php">⬅️</a>	
	<form id="carrinho" method="GET" action="result.php">
		<table>
			<caption><h2>Carrinho</h2></caption>
			<thead>
				<tr>
					<th colspan="2" class="texto-centro"><img style="max-width: 30%;" src="<?php echo $imagens[$_GET['p']]?>"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="w-5">Valor unitário:</td>
					<td><h4>R$<?php echo $valor[$_GET['p']]?></h4></td>
				</tr>
				<tr>
					<td class="w-5">Endereço:</td>
					<td><input type="text" name="endereco" placeholder="Rua/Alameda, nº da casa/apt"></td>
				</tr>
				<tr>
					<td class="w-5">Quantidade:</td>
					<td><input type="number" name="quantidade" min="1"></td>
				</tr>
				<tr>
					<td class="w-5">Forma de pagamento:</td>
					<td>
						<select name="pagamento">
							<option value="dinheiro">Em dinheiro</option>
							<option value="cartao">Cartão de débito/crédito</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="texto-centro"><input type="submit" value="Finalizar pedido"/></td>
				</tr>
			</tbody>
		</table>
		<input type="hidden" name="p" value="<?php echo $_GET['p']?>">
	</form>
</body>
</html>