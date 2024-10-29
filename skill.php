<?php include "koneksi.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggi Saputri - Skills</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&family=Dancing+Script:wght@400&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
    
    /* Skills Section Styling */
    .skills-section {
        padding: 15px 10px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 50px;
    }

    .skills-section h2 {
        text-align: center;
        margin-bottom: 15px;
        font-size: 1.5em;
        color: #d2b48c;
        font-weight: 400;
        background: linear-gradient(90deg, #d2b48c, #ffcc99);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        padding: 5px;
        border-radius: 5px;
    }

    .skill-bar {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .skill-label {
        flex: 1;
        font-weight: 400;
        font-size: 1em;
        color: #333;
    }

    .progress {
        flex: 2;
        margin: 0 10px;
    }

    .progress-bar {
        background-color: #d2b48c;
    }

    /* New Section Styles */
    .info-section {
        margin-top: 40px;
    }

    .info-card {
        background-color: #ffffff;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .info-card h3 {
        color: #d2b48c;
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .info-card p {
        margin: 0;
    }

    
</style>
</head>

<body>
    <?php include "navbar.php";
    include "koneksi.php"; 
    $sqll = "SELECT skill_name, proficiency FROM skills";
    $resultskils = $conn->query($sqll);
    ?>
    <section class="skills-section container mt-4">
        <h2>My Skills</h2>
        <?php
        if ($resultskils->num_rows > 0) {
            while ($rows = $resultskils->fetch_assoc()) {
                echo '
                <div class="skill-bar">
                    <span class="skill-label">' . htmlspecialchars($rows["skill_name"]) . '</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: ' . intval($rows["proficiency"]) . '%;" aria-valuenow="' . intval($row["proficiency"]) . '" aria-valuemin="0" aria-valuemax="100">' . intval($row["proficiency"]) . '%</div>
                    </div>
                </div>';
            }
        } else {
            echo "<p>No skills found.</p>";
        }
        $conn->close();
        ?>
    </section>
   
     <?php
     include "koneksi.php";
    $sql = "SELECT title, description FROM roles";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo '<section class="info-section container mt-4">';
        while ($row = $result->fetch_assoc()) {
            echo '<div class="info-card">';
            echo '<h3>' . htmlspecialchars($row['title']) . '</h3>';
            echo '<p>' . htmlspecialchars($row['description']) . '</p>';
            echo '</div>';
        }
        echo '</section>';
    } else {
        echo "Tidak ada data.";
    }

    $conn->close();
    ?>
    <!-- Footer -->
    <?php include "footer.php"?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
