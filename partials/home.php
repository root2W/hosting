<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio Hogwarts de Magia y Hechicería</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .nav-menu {
            text-align: center;
            margin-bottom: 20px;
        }
        .nav-menu li {
            display: inline;
            margin-right: 10px;
        }
        .nav-menu li:last-child {
            margin-right: 0;
        }
        .nav-menu li a {
            text-decoration: none;
            color: #333;
            padding: 10px;
            border-radius: 5px;
            background-color: #ddd;
            transition: background-color 0.3s;
        }
        .nav-menu li a:hover {
            background-color: #ccc;
        }
        .login-btn {
            display: block;
            width: 200px;
            margin: 0 auto;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .login-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Colegio Hogwarts de Magia y Hechicería</h1>

    <ul class="nav-menu">
        <li><a href="#">Inicio</a></li>
        <li><a href="partials/nosotros.php">Nosotros</a></li>
        <li><a href="partials/contacto.php">Contacto</a></li>
    </ul>

    <h2>Clases de Hechicería</h2>
    <table>
        <tr>
            <th>Curso</th>
            <th>Profesor</th>
            <th>Horario</th>
        </tr>
        <tr>
            <td>Defensa contra las Artes Oscuras</td>
            <td>Profesor Severus Snape</td>
            <td>Lunes y Miércoles 09:00 - 10:30</td>
        </tr>
        <tr>
            <td>Encantamientos</td>
            <td>Profesora Filius Flitwick</td>
            <td>Martes y Jueves 11:00 - 12:30</td>
        </tr>
    </table>

    <h2>Casas de Hogwarts</h2>
    <table>
        <tr>
            <th>Casa</th>
            <th>Jefe de Casa</th>
            <th>Valores</th>
        </tr>
        <tr>
            <td>Gryffindor</td>
            <td>Profesora Minerva McGonagall</td>
            <td>Valentía, nobleza, audacia</td>
        </tr>
        <tr>
            <td>Hufflepuff</td>
            <td>Profesor Pomona Sprout</td>
            <td>Lealtad, paciencia, honestidad</td>
        </tr>
    </table>

    <h2>Equipos de Quidditch</h2>
    <table>
        <tr>
            <th>Equipo</th>
            <th>Capitán</th>
            <th>Casa</th>
        </tr>
        <tr>
            <td>Gryffindor</td>
            <td>Harry Potter</td>
            <td>Gryffindor</td>
        </tr>
        <tr>
            <td>Slytherin</td>
            <td>Draco Malfoy</td>
            <td>Slytherin</td>
        </tr>
    </table>

</body>