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