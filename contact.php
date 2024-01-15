<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Contact</title>
</head>

<body>
    <?php
    require('./components/header.php');
    ?>
    <main>
        <form action="./process/envoyer_mail.php" method="POST">
            <div id="form-name">
                <div class="form-input">
                    <label for="name">Nom</label>
                    <input type="text" name="name" id="name" autocomplete="off">
                </div>
                <div class="form-input">
                    <label for="surname">Prénom</label>
                    <input type="text" name="surname" id="surname" autocomplete="off">
                </div>
            </div>
            <div class="form-input">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" autocomplete="off">
            </div>
            <div class="form-input">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" value="Envoyer" id="send">
            <div id="error-content">

            </div>
        </form>
    </main>
    <?php
    require('./components/footer.php');
    ?>
    <script src="./js/contact.js"></script>
</body>

</html>