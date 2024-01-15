<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Accueil</title>
</head>

<body>
    <?php
    require('./components/header.php');
    ?>
    <main>
        <section>
            <div class="container">
                <div class="img-container">
                    <img src="./images/ziak.png" alt="Image de ziak">
                </div>
                <div class="title-container">
                    <p id="title-container__title">Découvrez les meilleurs rappeurs français.</p>
                    <p id="title-container__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis
                        harum distinctio, voluptate
                        esse unde assumenda aliquid optio placeat possimus suscipit doloribus earum mollitia debitis ut,
                        illo perspiciatis exercitationem quae neque!</p>
                    <a href="" class="input-log">S'inscrire</a>
                </div>
            </div>
        </section>
    </main>
    <?php
    require('./components/footer.php');
    ?>
</body>

</html>