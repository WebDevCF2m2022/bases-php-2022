<?php include 'menu.php' ?>
    <container>
        <h2>Liste des Classes du CF2m</h2>
        <?php
        foreach (CLASS_CF2M as $item) :
        ?>
            <ul>
                <li><?= $item ?></li>
            </ul>
        <?php
        endforeach;
        ?>
    </container>
    <?php include 'footer.php' ?>
</body>
</html>