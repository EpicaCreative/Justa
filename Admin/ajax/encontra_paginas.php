<?php include "../funcoes/funcoes.php"; ?>

<select name="class" id="class"  class="form-control">
<option value="">Selecione a classe</option>
<?php	$select_classe = mysqli_query(Conexao(),"Select * from tags where tipo = '".$_POST['tipo']."' && vinculo_pagina = ".$_POST['id']." order by descricao ASC");
		while($array_classe = mysqli_fetch_array($select_classe)){?>
		<option value="<?php echo $array_classe['id'] ?>" ><?php echo utf8_encode($array_classe['descricao']) ?></option>
<?php } ?>
</select>		
