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
    <title>Accueil</title>
</head>

<body>
    <?php
    require('./components/header.php');
    ?>
    <main>
        <table id="music-table">
            <thead>
                <tr>
                    <td>Nom</td>
                    <td>Artiste</td>
                    <td>Album</td>
                    <td>Durée</td>
                    <td>Date de sortie</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($musics as $item) { ?>
                    <tr>
                        <td>
                            <?= $item['Nom'] ?>
                        </td>
                        <td>
                            <?= $item['Artiste Nom'] ?>
                        </td>
                        <td>
                            <?= $item['Album'] ?>
                        </td>
                        <td>
                            <?= convertir($item['Durée (ms)']) ?>
                        </td>
                        <td>
                            <?= $item['Date de sortie'] ?>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </main>
    <?php
    require('./components/footer.php');
    ?>
</body>

</html>
<script>
    $("#music-table").DataTable({ language: { url: "http://cdn.datatables.net/plug-ins/1.13.1/i18n/fr-FR.json " } });
</script>