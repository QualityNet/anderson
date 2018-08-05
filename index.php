<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0" />  
    <meta name="description" content="Login to your account and bookmark your favorite sites." />
    <meta name="keywords" content="" />
    <link href="http://urltv.ddns.net/static/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="row">
 <form method="post" action="create.php">
  <div class="col-md-2">
    <input type="text" class="form-control" name="usuario" placeholder="USUARIO">
    <input type="text" class="form-control" name="senha" placeholder="SENHA">
    <?php if (isset($_GET['error'])){ 
    	echo "<font color='red'><strong>Erro! Não foi Possível Gravar as Informações!</strong></font>"; 
    }else if(isset($_GET['sucesso'])){
    	echo "<font color='green'><strong>Sucesso! Informações Gravadas com Sucesso!</strong></font>";} ?>
  </div>
  <div class="col-md-2">
    <input type="submit" class="btn btn-primary" name="post_image" value="ADICIONAR">
  </div>
 </form>
</div>
</body>
</html>