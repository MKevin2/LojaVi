
<head>
<link rel="shortcut icon" href="img/smartphone.png"> <!--color of logo: #267CF1-->
</head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">TechNivek</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><img src="img/botao-home.png"/><span class="sr-only">(current)</span></a></li>
        <form class="navbar-form navbar-left" role="search" name="frmpesquisa" method="get" action="busca.php">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Pesquisar..." name="txtBuscar">
          </div>
          <button type="submit" class="btn btn-default">Buscar</button>
        </form>
        <li><a href="lanc.php"> Lançamentos </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Marcas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="categoria.php?cat=Apple"> Apple </a></li>
            <li><a href="categoria.php?cat=Samsung"> Samsung </a></li>
            <li><a href="categoria.php?cat=Motorola"> Motorola </a></li>
            <li><a href="categoria.php?cat=Xiaomi"> Xiaomi </a></li>
            <li><a href="categoria.php?cat=LG"> LG </a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Contato</a></li>

        <?php if(empty($_SESSION['ID'])) { ?>
        <li><a href="formlogon.php"><span class="glyphicon glyphicon-log-in"> Logon </a></li>
        <?php } else {

          if($_SESSION['STATUS'] == 0) {
            $consulta_usuario = $cn->query("select nm_usuario from tbl_usuario where cd_usuario = '$_SESSION[ID]'");
            $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
          ?>
            <li><a href="#"><span class="glyphicon glyphicon-user"> <?php echo $exibe_usuario['nm_usuario']; ?> </a></li>
            <li><a href="sair.php"><span class="glyphicon glyphicon-log-out"> Sair </a></li>
          
          <?php } else { ?>
            <li><a href="adm.php"><button class="btn btn-info">Administrador</button></a></li>
            <li><a href="sair.php"><span class="glyphicon glyphicon-log-out"> Sair </a></li>
          <?php }  } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>