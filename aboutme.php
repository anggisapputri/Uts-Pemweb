<?php include "koneksi.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggi Saputri - About Me</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;700&family=Dancing+Script:wght@400&display=swap" rel="stylesheet">


    <style>
        /* About Section */
        .about-section {
            background: linear-gradient(135deg, #f0e5cf, #ffffff);
            padding: 100px 20px;
            position: relative;
        }

        .about-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            background-color: #d2b48c;
            z-index: -1;
            clip-path: polygon(100% 0, 0 100%, 100% 100%);
        }

        .about-text h2 {
            font-size: 3em;
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            color: #d2b48c;
            animation: fadeInUp 1.2s ease-in-out;
        }

        .about-text p {
            font-size: 1em;
            line-height: 1.6;
            color: #555;
            animation: fadeInUp 1.5s ease-in-out;
        }

        .about-text .btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #d2b48c;
            color: white;
            border-radius: 25px;
            border: none;
            transition: background-color 0.3s ease;
            font-size: 1.2em;
        }

        .about-text .btn:hover {
            background-color: #ffcc99;
        }

        .about-image img {
            max-width: 100%;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
        }

        .about-image img:hover {
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

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 about-text">
                    <h2>About Me</h2>
                    <?php
                $sql = "SELECT data_me, experience FROM about WHERE id = 1";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<p>" . $row["data_me"] . "</p>";
                        echo "<p>" . $row["experience"] . "</p>";
                    }
                } else {
                    echo "<p>No data available.</p>";
                }
                $conn->close();
                ?>
                    <a href="contact.php" class="btn">Let's Collaborate!</a>
                </div>
                <div class="col-md-6 about-image">
                    <img src="image/anggi2.jpg" alt="Anggi Saputri">
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php"?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>
