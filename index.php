
<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <title>Saytım</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
    <div class="site-header">
        <div class="site-title">
            <div class="site-title-icon"></div>
            SAYTIN ADI
        </div>
        <div class="menu">
            <div class="menu-item">Əsas Səhifə</div>
            <div class="menu-item">Bloq</div>
            <div class="menu-item">Musiqi</div>
            <div class="menu-item">Bizi İzləyin</div>
        </div>
        <div class="separator"></div>
        <div class="clock">
            <div class="clock-time" id="clock-time">--:--:--</div>
            <div class="clock-date" id="clock-date">--.--.----</div>
        </div>
    </div>
    <script>
        function updateClock() {{
            const now = new Date();
            const time = now.toLocaleTimeString('az-Latn-AZ');
            const date = now.toLocaleDateString('az-Latn-AZ');
            document.getElementById('clock-time').textContent = time;
            document.getElementById('clock-date').textContent = date;
        }}
        setInterval(updateClock, 1000);
        updateClock();
    </script>
</body>
</html>
