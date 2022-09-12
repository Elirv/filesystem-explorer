<?php

echo readfile("./workshop/files/example-file.txt");




try {
    $fileName = "./workshop/files/example-file.txt";

    if (!file_exists($fileName)) {
        throw new Exception('File open failed');
    }

    // The function returns a pointer to the file if it is successful or zero if it is not. Files are opened for read or write operations.
    $file = fopen($fileName, "r");

    // Reads the file
    $content = fread($file, filesize($fileName));

    echo $content;

    // Close the file buffer
    fclose($file);
} catch (Throwable $t) {
    echo $t->getMessage();
}






try {
    $newFileName = "./3-create-write-file.txt";
    $fileContent = 'This is the content of the "3-create-write-file.txt" file.';

    // Now the file is created, but it's empty.
    $file = fopen($newFileName, "w");

    // Here we add the content to the file
    fwrite($file, $fileContent);

    // You can add new content to the file
    fwrite($file, "\nNew content in a new line.");

    $file = fopen($newFileName, "r");

    // Print the content
    $content = fread($file, filesize($newFileName));
    echo nl2br($content);

    // Close the file buffer
    fclose($file);
} catch (Throwable $t) {
    echo $t->getMessage();
}





$target_dir = "./files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "<p>File is an image - " . $check["mime"] . ".</p>";
        $uploadOk = 1;
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
            echo "<p>El fichero es válido y se subió con éxito.</p>";
        } else {
            echo "<p>¡Posible ataque de subida de ficheros!</p>";
        }
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}


?>