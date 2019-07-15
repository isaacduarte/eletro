<?php 
 include_once '../classes/Produto.class.php';

   if(isset($_GET['id'])){
      $produto = Produto::getProdutoPorId($_GET['id']);
	  $id = $produto['id'];
	  $nome= $produto['nome'];
	  $preco = $produto['preco'];
	  $descricao= $produto['descricao'];
	  $imagem= $produto['imagem'];
	}
 ?>

	<form  method="post" enctype="multipart/form-data" action="../controller/cadControle.php">
	<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Product registrations -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Cadastro de Produtos</h3>
							</div>
							<div class="form-group">
								<input value="<?php echo isset($nome) ? $nome : '' ?>" class="input" type="text" name="nome" placeholder="Nome do Produto">
							</div>
							<div class="form-group">
								<input value="<?php echo isset($preco) ? $preco : '' ?>" class="input" type="number" name="preco" placeholder="Preço">
							</div>
							<div class="form-group">
								<input value="<?php echo isset($descricao) ? $descricao : '' ?>" class="input" type="text" name="descricao" placeholder="Descrição">
							</div>
							<div class="form-group">

							<div class="icon glyphicon glyphicon-plus">
							<img class="foto" src="../img/<?php echo $produto['imagem'] ?>" alt="">
								<input class="file" type="file" name="arquivo" id="imagem">
							</div>
							
							</div>
							<div class="form-group">
							<button type="submit" class="primary-btn order-submit">Cadastrar Produto</button>
							</div>
					</div>	
						<!-- /Product registration-->	
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
	</form>
		