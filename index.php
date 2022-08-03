<?php
    if(isset($_COOKIE['visita'])) {
        echo "¡Qué alegría verte de nuevo por aquí!";
    } else {
        setcookie('visita', 'ok', time() + 31536000); // 1 año de
        echo "Bienvenid@ a la página por primera vez";
    }
?>
<html>

<head>
    <title>Detector de nuevas visitas</title>
    <meta charset=utf-8 />
</head>

<body>

</body>

</html>