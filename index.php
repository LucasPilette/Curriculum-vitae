<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $mail = $_POST['mailAdress'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $content = $_POST['content'];
        mail('pilettelucas@gmail.com',"Mail de $lastName $firstName", "$content Contact : $mail","From : $mail \r\n");
    };
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilette Lucas</title>
    <link href="http://fonts.cdnfonts.com/css/monument-extended" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/univia-pro" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/style.css">
</head>

<body id="debut">
    <div id="main_part" class=" mx-3 mt-3">
        <header>
            <div class="container-fluid">
                <div class="row text-white">
                    <div class="col-12 col-sm-8 col-xl-9 px-0" id="name">
                        Junior <span class="green_effect" id="web_dev">Web-Dev</span></h1>
                        <nav class="menu d-none d-md-inline">
                            <div class="menu__item">
                                <a class="menu__item-link">Lucas Pilette </a>
                                <img class="menu__item-img" src="assets/img/photolucas.jpg" />
                                <div class="marquee">
                                    <div class="marquee__inner">
                                        <span>Lucas Pilette &nbsp;</span>
                                        <span>Lucas Pilette &nbsp;</span>
                                        <span>Lucas Pilette &nbsp;</span>
                                        <span>Lucas Pilette &nbsp;</span>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-12 col-sm-4 col-xl-3 px-0 align-items-end align-items-xxl-start" id="navbarDiv">
                        <div class="navbar flex-md-column flex-xxl-row ">
                            <a href="#debut">A propos</a>
                            <a href="#section1">Portfolio</a>
                            <a href="#section2">Contact</a>
                        </div>
                    </div>
                    <div class="col d-none d-sm-inline col-sm-2 offset-sm-6 text-end">
                        <img src="assets/img/arrow-return-right.svg" class="arrow">
                    </div>
                    <div class="col-12 col-sm-3 pt-2 ageLoc">
                        <p id="age" class="my-0 animated">22 ans</p>
                        <p id="location" class="animated">Amiens</p>
                    </div>
                </div>
        </header>
        <div class="row text-white">
            <div class="col-12 col-sm-5 d-flex justify-content-center order-2 order-sm-1" id="back_text">
                <div class="skills">
                    <h2 class="comps">Compétences :</h2>
                    <ul>
                        <li>
                            <h3>HTML5</h3><span class="bar"><span class="html "></span></span>
                        </li>
                        <li>
                            <h3>CSS</h3><span class="bar"><span class="CSS "></span></span>
                        </li>
                        <li>
                            <h3>Javascript</h3><span class="bar"><span class="Javascript "></span></span>
                        </li>
                        <li>
                            <h3>PHP</h3><span class="bar"><span class="PHP "></span></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 offset-sm-1 text-center order-1 order-sm-2 pt-sm-3">
                <p class="bio text_long">Je m'appelle Lucas Pilette et je suis une formation <span
                        class="green_effect">"Développeur Web et Web Mobile"</span> à Amiens. Grâce à des études
                    scientifiques puis artistiques, je sais allier <span class="pink_effect">créativité</span> et <span
                        class="pink_effect">rigueur</span> afin de rendre fonctionnel et unique chaque projet. Je
                    recherche un stage dans une entreprise qui saura stimuler mon envie de <span class="green_effect">progresser</span>
                    et d'être un meilleur développeur chaque jour.</p>
            </div>
        </div>
        <div class="row text-white">
            <div class="col text-center pdf1">
                <a href="assets/pdf/Lucas PILETTE .pdf" id="pdf" download="CV Pilette Lucas"> Télécharger mon CV en PDF</a>
            </div>
        </div>
    </div>
    <div class="container projects">
        <div class="row text-white">
            <div class="col-12 text-center" id="section1">
                <h1 class="project_title pt-3">Portfolio</h1>
            </div>
            <div class="col-12 col-sm-5 d-flex align-items-center">
                <div class="first">
                    <h2>Bootstrap responsive</h2>
                    <p class="project_text project_first">Premier projet responsive et découverte de bootstrap.</p>
                </div>
            </div>
            <div class="col-12 col-sm-7 text-center">
                <img src="assets/img/responsive.png" class="project_images" id="responsive">
            </div>
            <div class="col-12 d-sm-none" id="white"></div>
            <div class="col-12 col-sm-7 text-center text-sm-start">
                <img src="assets/img/ShiFuMi.png" class="project_images">
            </div>
            <div class="col-12 col-sm-5 d-flex align-items-center">
                <div class="second">
                    <h2>Shi-Fu-Mi</h2>
                    <p class="project_text project_second">Premier projet Javascript avec la création d'un Shi-Fu-Mi contre l'ordinateur.</p>
                </div>
            </div>
            <div class="col-12 d-sm-none" id="white"></div>
            <div class="col-12 col-sm-5 pt-4 d-flex align-items-center">
                <div class="first">
                    <h2>Travail avec Json et manipulation de données</h2>
                    <p class="project_text project_first">Création d'un Json et d'un site de vente de Sneakers.</p>
                </div>
            </div>
            <div class="col-12 col-sm-7 text-center text-sm-end pt-4">
                <img src="assets/img/sneakers.png" class="project_images">
            </div>
            <div class="col-12 d-sm-none" id="white"></div>
            <div class="col-12 col-sm-7 text-center text-sm-start ">
                <img src="assets/img/calendar.png" class="project_images">
            </div>
            <div class="col-12 col-sm-5 d-flex align-items-center">
                <div class="second">
                    <h2>Calendrier en PHP</h2>
                    <p class="project_text project_second">Création d'un calendrier en PHP avec manipulation de classes.</p>
                </div>
            </div>
        </div>
        <div class="container contact">
            <div class="row text-white">
                <div class="col12 text-center" id="section2">
                    <h1 class="project_title2 pt-3">Contact</h1>
                    <h2 class="text-center">Un projet ? Une question ? N'hésitez pas à me <span
                            id="value1">contacter</span></h2>
                </div>
                <div class="col-12 col-sm-8 offset-sm-2">
                    <div class="container mb-5">
                        <div class="row">
                            <form id="contact_form" method="post">
                                <div class="col-12">
                                    <label for="mailUser" class="form-label">Adresse Mail</label>
                                    <div class="input-group ">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="text" class="form-control" placeholder="exemple@mail.com"
                                            aria-label="Username" aria-describedby="basic-addon1" name="mailAdress">
                                    </div>
                                    <div id="emailHelp" class="form-text">Je vous recontacterai via cette adresse mail
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between" id="form">
                                    <div class="col-5">
                                        <label for="nameUser" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="nameUser"
                                            aria-describedby="nameHelp" placeholder="Nom" name="firstName">
                                    </div>
                                    <div class="col-5">
                                        <label for="firstNameUser" class="form-label">Prénom</label>
                                        <input type="text" class="form-control" id="firstNameUser"
                                            aria-describedby="firstNameHelp" placeholder="Prénom" name="lastName">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="messageUser" class="form-label">Votre message</label>
                                    <textarea class="form-control" id="messageUser" cols="30" rows="5"
                                        placeholder="Veuillez renseigner votre message..." name="content"></textarea>
                                </div>
                                <input class="btn mt-3 ms-3" id="button" type="submit" value="Envoyer">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 links">
                    <div>
                        <img src="assets/img/envelope-fill.svg" alt="mail" class="mailLink">
                        <a href="mailto:pilettelucas@gmail.com" target="_blank" class="logos">Mon mail</a>
                    </div>
                    <div>
                        <img src="assets/img/github.svg" alt="" class="mailLink">
                        <a href="https://github.com/LucasPilette" target="_blank" class="logos">Mon github</a>
                    </div>
                </div>
                <div class="btn col-12 d-sm-none my-5">
                    <a href="#debut" id="back">Retour à l'accueil</a>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="assets/script/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>