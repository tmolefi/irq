<?Php
	
?>

<!DOCTYPE html>
<head>
    <title>IRQ</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
</head>
<body style="background-image: url(assets/images/pic9.jpg); background-position:center; background-repeat: no-repeat; background-size: 1000px 500px;"</body>
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="padding: 0px 20px;" class="navbar-brand" href="#"><img src="assets/images/unnamed.jpg" height="50px" width="60px"></a>
            </div>
            <!-- Collect t*he nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php"> <strong>Home </strong> <span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="about.php"> <strong>About </strong><span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                </ul> -->
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
				<?Php if(isset($_SESSION['name'])) : ?>
					<li><a href="login.php"> <strong><?Php echo $_SESSION['name']; ?></strong></a></li>
				<?Php else : ?>
					<li><a href="login.php"> <strong>Login </strong></a></li>
					<li><a href="register.php"> <strong>Register </strong></a></li>
				<?Php endif; ?>
            </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        </nav>
</html>