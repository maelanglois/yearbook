<?php

require dirname(__DIR__) . '/root/connection.php';
require dirname(__DIR__) . '/view/new-yearbook.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $name = $_POST['name'];
        $fileName = $_FILES['image']['name'];
        $imageData = file_get_contents($_FILES['image']['tmp_name']);
        $startPeriod = $_POST['start_period'];
        $endPeriod = $_POST['end_period'];

        $stmt = $bdd->prepare("INSERT INTO promotions (name, image, image_content, start_period, end_period) VALUES (?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $fileName, PDO::PARAM_STR);
        $stmt->bindParam(3, $imageData, PDO::PARAM_LOB);
        $stmt->bindParam(4, $startPeriod, PDO::PARAM_INT);
        $stmt->bindParam(5, $endPeriod, PDO::PARAM_INT);
        
        if ($stmt->execute()) {
            header("Location: ?page=homepage");
        } else {
            echo "Erreur lors de l'ajout de l'image.";
        }
    } else {
        echo "Erreur lors du téléchargement de l'image.";
    }
}


