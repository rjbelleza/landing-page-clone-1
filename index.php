<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/hero.css">
    <link rel="stylesheet" href="assets/css/features.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <title>Nauto | Roadmap to Improving Fleet Safety</title>
</head>
<body>
    <?php   
        include "components/header.html";
        include "components/hero.html"; 
    ?>
    <div class="main-container">
        <?php
            include "components/features.html";
            include "components/form.html"; 
        ?>
    </div>
    <?php include "components/footer.html"; ?> 
    <script src="assets/js/script.js"></script>
</body>
</html>