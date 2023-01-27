<?php
    session_destroy();

    echo '
    <script>
        alert("Cerraste sesion correctamente.");
        window.location = "../index.html"
    </script>
    ';

?>