<?php 
include "koneksi.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql_insert = "INSERT INTO contact (name, email, message, created_at) VALUES ('$name', '$email', '$message', NOW())";

    if ($conn->query($sql_insert) === TRUE) {
        echo "<script>alert('Message sent successfully!');</script>";
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggi Saputri - Contact Me</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;700&family=Dancing+Script:wght@400&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        /* Contact Section */
        .contact-section {
            background: linear-gradient(135deg, #f7e3d3, #ffffff);
            padding: 50px 20px;
            position: relative;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }

        .contact-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            background-color: #d2b48c;
            z-index: -1;
            clip-path: polygon(100% 0, 0 100%, 100% 100%);
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        .contact-text h2 {
            font-size: 3em;
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            color: #d2b48c;
            animation: fadeInUp 1.2s ease-in-out;
        }

        .contact-text p {
            font-size: 1.2em;
            line-height: 1.8;
            color: #555;
            animation: fadeInUp 1.5s ease-in-out;
        }

        .form-control {
            border-radius: 20px;
            font-size: 1.1em;
            padding-left: 40px;
            position: relative;
            transition: box-shadow 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0 0 5px rgba(210, 180, 140, 0.5);
            outline: none;
        }

        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #d2b48c;
        }

        .btn-primary {
            background-color: #d2b48c;
            border-color: #d2b48c;
            border-radius: 25px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            font-size: 1.2em;
            padding: 10px 20px;
        }

        .btn-primary:hover {
            background-color: #ffcc99;
            border-color: #ffcc99;
            transform: scale(1.05);
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
        footer {
        background-color: #ffffff;
        color: #333;
        text-align: center;
        font-size: 0.9em;
        padding: 20px 0;
        margin-top: 50px;
        position: fixed;
        bottom: 0; 
        width: 100%; 
    }


    </style>
</head>

<body>
<?php include "navbar.php"; ?>
    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 contact-text">
                    <h2>Contact Me</h2>
                    <p>Feel free to reach out to me for any collaboration or inquiries. I’d love to hear from you!</p>
                </div>
                <div class="col-md-6">
                    <form action="" method="POST">
                        <div class="form-group">
                            <i class="fas fa-user"></i>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <i class="fas fa-envelope"></i>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <i class="fas fa-comment"></i>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php"?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
