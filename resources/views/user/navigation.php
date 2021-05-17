
<!DOCTYPE html>
<html lang="pl">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/navi.css">
    <title>Konfigurator</title>
</head>

<body>
    <header class="sticky-top">
        <nav class="navtop navbar navbar-expand-lg navbar-white bg-white sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="../views/"><img width="120px" height="auto" src="../../../public/img/logo.png"  style="position:relative" alt="..."></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#onDisplayResolutionChange" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse collapse justify-content-end navbar-collapse" id="onDisplayResolutionChange">
                    <ul class="navbar-nav">
                        <li class="nav-item" style="margin-right: 20px"><a class="nav-link navka" href="../views/signin.php"><i style="margin-right: 5px" class="fa fa-user navka"></i> Zaloguj się</a></li>
                        <li class="nav-item" style="margin-right: 20px"><a class="nav-link navka" href="../views/signup.php"><i style="margin-right: 5px" class="fa fa-user-plus navka"></i> Zarejestruj się</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<nav class="navbot navbar navbar-expand-lg navbar-white bg-white sticky-top">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
					<li class="nav-item">
						<a style="width:150px; margin-left:20px" class="nav-link fa fa-heart-o navka" href="#">  Moje listy</a>
					</li>
					<li class="nav-item">
						<a style="margin-left:220px" class="nav-link fa fa-group navka" href="#"> Udostępnione</a>
					</li>
					<li class="nav-item">
						<a style="margin-left:240px" class="nav-link fa fa-desktop navka" href="#">  Konfigurator</a>
					</li>
					</ul>
				</div>
            </div>
        </nav>
    </header> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3810206ae2.js" crossorigin="anonymous"></script>
</body>
</html>