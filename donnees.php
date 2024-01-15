<?php
$file = 'datas/music.json';

$json = file_get_contents($file);

$musics = json_decode($json, true);

function convertir($millisecondes)
{
    $secondes = floor($millisecondes / 1000);
    $minutes = floor($secondes / 60);
    $secondesRestantes = $secondes % 60;
    return sprintf('%02d:%02d', $minutes, $secondesRestantes);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="http://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <title>Données</title>
</head>

<body>
    <?php
    require('./components/header.php');
    ?>
    <main>
        <?php
        require('./components/table.php');
        ?>
    </main>
    <?php
    require('./components/footer.php');
    ?>
    <script>
        $("#music-table").DataTable({ language: { url: "http://cdn.datatables.net/plug-ins/1.13.1/i18n/fr-FR.json " } });
    </script>

</body>

</html>