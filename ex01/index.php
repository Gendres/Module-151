<!DOCTYPE html>
<html>
    <body>
        <?php
            echo "PHP vous dit bonjour ! ";
            
            $now = new DateTime();
            $now->setTimezone(new DateTimeZone('Europe/Paris'));
            echo "Il est " . $now->format("H:i:s");
        ?>
    </body>
</html>