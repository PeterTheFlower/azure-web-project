<?php
    // Możesz dodać tutaj kod PHP, jeśli potrzebujesz dynamicznej zawartości
    // np. funkcje do logowania, wyświetlanie daty, itp.
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moje Pasje</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Moje Pasje</h1>
            <nav>
                <ul>
                    <li><a href="#gory">Góry</a></li>
                    <li><a href="#strzelanie">Strzelanie</a></li>
                    <li><a href="#informatyka">Informatyka</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="gory">
        <div class="container">
            <h2>Góry</h2>
            <p>Chodzenie po górach to moja największa pasja. Uwielbiam odkrywać nowe szlaki, podziwiać przyrodę i czuć się blisko natury. Każdy krok na górskim szlaku to dla mnie nie tylko wyzwanie, ale i relaks. Góry to moje miejsce na odpoczynek i inspirację.</p>
            <img src="https://www.tapeciarnia.pl/tapety/normalne/tapeta-turysta-na-sniegu-w-zimowych-gorach.jpg" alt="Góry">
        </div>
    </section>

    <section id="strzelanie">
        <div class="container">
            <h2>Strzelanie</h2>
            <p>Strzelanie to kolejna moja pasja, która daje mi ogromną satysfakcję. Wymaga precyzji, skupienia i cierpliwości. Czas spędzony na strzelnicy to doskonała okazja do poprawy swoich umiejętności, a także chwila relaksu i koncentracji.</p>
            <img src="https://www.sofx.com/wp-content/uploads/2023/06/Optimized-6434041.jpg" alt="Strzelanie">
        </div>
    </section>

    <section id="informatyka">
        <div class="container">
            <h2>Informatyka</h2>
            <p>Moje zainteresowania informatyczne koncentrują się głównie na sieciach komputerowych oraz systemach operacyjnych. Uwielbiam zgłębiać tajniki działania sieci, konfiguracji routerów oraz bezpieczeństwa. Moje hobby to także eksperymentowanie z różnymi systemami operacyjnymi, zarówno Windows, jak i Linux.</p>
            <img src="https://upload.wikimedia.org/wikipedia/commons/d/da/BjarneStroustrup.jpg" alt="Informatyka">
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Moje Pasje | Wszystkie prawa zastrzeżone</p>
        </div>
    </footer>
</body>
</html>

