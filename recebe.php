<?php

    $campo1 = $_POST['campo1'];
    $campo2 = $_POST['campo2'];

    echo "<script> alert('Campo: 1->($campo1), 2->($campo2)'); </script>";
    echo "<script> window.opener.location.reload(); </script>";
    echo "<script> window.location.href = 'index.php'; </script>";

?>
