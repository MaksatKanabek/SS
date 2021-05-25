<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Service</title>
	<link rel="stylesheet" href="bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/454de254d5.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="intro">
        <div class="intro__media">
            <!-- <video src="video/video.mp4" autoplay muted loop></video> -->
        </div>
    </div>

    <header>
        <nav class="navbar navbar-expand-lg scroll-me" id="menu-section">
            <div class="container">
                <a class="navbar-brand" href="#">Subscription Service</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <?php
                            if($_SESSION['id_users'] == null):
                        ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">ATFGOLD PRO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">MEDIA PRO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">БАЙЛАНЫС</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="authorization.php"><i class="far fa-user"></i> КАБИНЕТ</a>
                        </li>                              
                        <?php
                            else:
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Баланс: <?php echo $balance?> тг</a>
                        </li> 
                        <div class="dropdown">
                            <a class="nav-link btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="far fa-user"></i> <?php echo $acc_name?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Жеке кабинет</a></li>
                                <li><a class="dropdown-item" href="#"><button type="button" class="balance" data-bs-toggle="modal" data-bs-target="#myModal">Балансты толтыру</button></a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="logout.php">Шығу</a></li>
                            </ul>
                        </div>                 
                        <?php
                            endif; 
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>