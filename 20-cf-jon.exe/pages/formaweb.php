<?php include 'menu.php' ?>
    <container>
        <h2>Liste des formateurs WEB</h2>
        <?php
        foreach(FORMATEURS_WEB AS $item):
        ?>
        <ul>
            <li><?=$item[0]?></li>
            <li><?=$item[1]?></li>
            <li><?=$item[2]?></li>
        </ul>
        <?php
        endforeach;
        ?>
    </container>
    <?php include 'footer.php' ?>
</body>
</html>