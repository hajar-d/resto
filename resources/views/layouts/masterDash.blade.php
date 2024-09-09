<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Professionnel</title>
    <!-- Include your CSS frameworks and stylesheets here -->
</head>
<body>

    <nav>
        <ul>
            <li><a href="#">Accueil</a></li>
            <li>
                <a href="#">Gestion Utilisateurs</a>
                <ul>
                    <li><a href="#">Liste Utilisateurs</a></li>
                    <li><a href="#">Ajouter Utilisateur</a></li>
                </ul>
            </li>
            <!-- Add more navigation items as needed -->
        </ul>
    </nav>

    <main>
        <!-- Main content of your dashboard goes here -->
        @yield('content')
    </main>

    <footer>
        <!-- Footer content -->
    </footer>

    <!-- Include your JavaScript frameworks and scripts here -->
</body>
</html>
