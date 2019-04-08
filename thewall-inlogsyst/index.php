<?php
require "header.php"; // Maak met CSS
?>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <?php 
            if (isset($_SESSION['userId'])) {
            echo '<p class="login-status">Je bent ingelogd!</p>'; // Stijl de tekst hiervan met CSS: bijv met een groen kleurtje en wat text-decoration!
            }
            else {
                echo '<p class="login-status">Je bent uitgelogd!</p>'; // Stijl de tekst hiervan met CSS: bijv met een blauw kleurtje en wat text-decoration!

            }
            ?>
</section>
</div>
</main>

<?php 
require "footer.php"; // Maak met CSS
?>