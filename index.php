<?php
include('./components/head.php')
?>

<body>
    <?php
    include('./sections/navigation.php')
    ?>
    <?php
    include('./sections/Banner.php')
    ?>
    <main class="max-w-7xl mx-auto px-8 sm:px-16">
        <?php
        include('./sections/SmallCard.php')
        ?>

        <?php
        include('./sections/MediumCard.php')
        ?>

        <?php
        include('./sections/LargeCard.php')
        ?>
    </main>
</body>

<?php
include('./sections/Footer.php')
?>