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
    <style>
        /* Podstawowe style dla całej strony */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Nagłówek */
        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        header .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header h1 {
            margin: 0;
            font-size: 36px;
        }

        header nav ul {
            list-style-type: none;
            padding: 0;
        }

        header nav ul li {
            display: inline;
            margin: 0 15px;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        /* Sekcje */
        section {
            padding: 40px 0;
        }

        section h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #2c3e50;
        }

        section p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        section img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Kontener dla sekcji */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Stopka */
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
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

