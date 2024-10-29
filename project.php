<?php include "koneksi.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggi Saputri - My Projects</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&family=Dancing+Script:wght@400&display=swap" rel="stylesheet">

    <style>
        /* Sections Styling */
        .section-title {
            font-size: 1.5em;
            font-weight: bold;
            color: #d2b48c;
            margin-top: 30px;
        }

        .section-description {
            font-size: 1em;
            margin-bottom: 15px;
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
<section class="projects-section container mt-4">
    <h2 class="text-center">My Projects</h2>
    <p class="text-center">Here are some projects I have worked on.</p>

    <div class="row">
        <?php
        // Query to get project categories
        $categories = ["UI/UX Design", "Applications", "Content Marketing"];
        foreach ($categories as $index => $category) {
            echo '<div class="col-md-4">';
            echo '<div class="section-title">' . sprintf("%02d. ", $index + 1) . $category . '</div>';

            // Query projects under each category
            $stmt = $conn->prepare("SELECT title, description FROM projects WHERE category = ?");
            $stmt->bind_param("s", $category);
            $stmt->execute();
            $result = $stmt->get_result();

            // Display projects in a list
            echo '<ul>';
            while ($row = $result->fetch_assoc()) {
                echo '<li>' . $row["title"] . ' - ' . $row["description"] . '</li>';
            }
            echo '</ul>';

            echo '</div>';
        }

        $conn->close();
        ?>
    </div>
</section>

    <?php include "footer.php"?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
