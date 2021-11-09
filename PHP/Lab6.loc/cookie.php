
    <h1>Счётчик посещений</h1>
    <?php
        include 'inc/cookie.inc.php';
        echo "Вы зашли к нам $visit_counter раз <br>";
        echo "Последнее посещение: $last_visit";
    ?>