<?php
include 'koneksi.php';
$query = "SELECT title, content FROM home WHERE id IN (1)";
$result = $conn->query($query);
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggi Saputri - Home</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;700&family=Dancing+Script:wght@400&display=swap" rel="stylesheet">


    <style>
        /* Hero Section */
        .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 100px 0;
        }

        .hero-section h1 {
            font-size: 3.5em;
            font-family: 'Pacifico', cursive;
            color: #d2b48c;
            animation: fadeInUp 1.2s ease-in-out;
        }

        .hero-section p {
            font-size: 1.5em;
            color: #555;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .hero-section .btn {
            font-size: 1.2em;
            padding: 10px 20px;
            background-color: #d2b48c;
            border: none;
            color: white;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }

        .hero-section .btn:hover {
            background-color: #ffcc99;
        }

        .hero-section img {
            border-radius: 15px;
            max-width: 100%;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
        }

        .hero-section img:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
<?php include "navbar.php"; ?>

    <!-- Hero Section -->
    <section class="hero-section container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1><?php echo $data['title']; ?></h1> <!-- Output title from database -->
                <p><?php echo $data['content']; ?></p> <!-- Output content from database -->
                <a href="aboutme.php" class="btn">Learn More About Me</a>
            </div>
            <div class="col-md-6">
                <img src="image/anggi2.jpg" alt="Anggi Saputri">
            </div>
        </div>
    </section>

   <?php include "footer.php"?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
