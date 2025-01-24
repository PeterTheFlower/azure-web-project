<?php
// Plik index.php
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lodowisko w Parku Jordana</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 700px;
            padding: 30px;
        }
        h1 {
            color: #2c3e50;
            font-size: 2.5rem;
        }
        .heart {
            font-size: 5rem;
            color: #e74c3c;
            margin: 20px 0;
        }
        .love-message {
            font-size: 3rem;
            color: #e74c3c;
            margin: 40px 0;
            font-weight: bold;
        }
        .image-container {
            width: 100%;
            height: 300px;
            background-color: #ddd;
            border-radius: 10px;
            margin-bottom: 20px;
            background-image: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Flovekrakow.pl%2Faktualnosci%2Fzima-w-miescie-nie-musi-byc-nudna_33502.html&psig=AOvVaw0PgsKy5S6TjbXHb8k6yUqO&ust=1737830120665000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCNjM9er_josDFQAAAAAdAAAAABAE');
            background-size: cover;
            background-position: center;
        }
        .ad-container {
            background-color: #2980b9;
            color: white;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            font-size: 1.2rem;
        }
        .ad-container h2 {
            margin: 0;
        }
        .ad-container p {
            margin: 10px 0 0;
        }
        .button {
            background-color: #e74c3c;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.1rem;
            display: inline-block;
            margin-top: 20px;
        }
        .button:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Zapraszamy na Lodowisko w Parku Jordana w Krakowie!</h1>
        <div class="heart">❤️</div>
        <div class="love-message">Kocham Cię!</div>
        <div class="image-container">
            <!-- Tu wstaw zdjęcie lodowiska -->
        </div>
        <div class="ad-container">
            <h2>Wspaniała zabawa na lodzie czeka na Ciebie!</h2>
            <p>Przyjdź do Parku Jordana i ciesz się jazdą na lodzie w wyjątkowej atmosferze!</p>
            <p>Nasze lodowisko oferuje świetne warunki, muzykę i fantastyczną atmosferę.</p>
            <p>Otwórz oczy na zimową przygodę już teraz!</p>
            <a href="#" class="button">Zarezerwuj bilet</a>
        </div>
    </div>
</body>
</html>
