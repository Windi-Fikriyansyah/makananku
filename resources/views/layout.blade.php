<!-- // Layout: resources/views/layout.blade.php -->
<?php
    session_start();

    require_once 'resouces/views/template.php';
    require_once 'config/helper.php';

    // session('all');
	list($application_name, $author, $description, $keywords, $creator, $version, $title, $header, $footer, $address, $telephone, $facsimile, $email, $whatsapp, $website, $facebook, $instagram, $twitter, $youtube) = settings();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@400;600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>MakananKu</title>
</head>
<body>
    <nav>
        <h1>MakananKu</h1>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2025 MakananKu</p>
    </footer>
</body>
</html>