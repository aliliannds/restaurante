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
	<br/>
	<?php 
		$p = $_GET['p'];
		$carrinho = Array(
			$_GET['endereco'],
			$_GET['quantidade'],
			$valor[$_GET['p']],
			($_GET['quantidade'] * $valor[$_GET['p']]),
			$_GET['pagamento']
		);
	?>
	<a href="index.php" style="margin-left: 8%;">Realizar novo pedido</a>	
	<form id="carrinho" method="GET" action="result.php">
		<table>
			<caption><h2>RESULTADO</h2></caption>
			<tbody>
				<tr>
					<td class="texto-centro">
						<img src="<?php echo $imagens[$_GET['p']]?>" class="w-50">
					</td>
					<td class="texto-esq">
						Endereço: <?php echo $carrinho[0] ?><br/>
						Quantidade: <?php echo $carrinho[1] ?><br/>
						Valor unitário: R$<?php echo $carrinho[2] ?><br/>
						<hr>
						<span class="negrito">Total:</span> R$<?php echo $carrinho[3];?><br/>
						<span class="negrito">Forma de pagamento: </span>
							<?php 
							$pagamento = ($carrinho[4] == "cartao") ? "Cartão de débito/crédito" : "Em dinheiro";
							echo $pagamento; ?><br/>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>