<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data presentation</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root"; //ή όποιον χρήστη έχετε
        $password = ""; // αλλάξτε το
        $dbname = "personal";
        
        // Δημιουργία σύνδεσης
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        // Έλεγχος σύνδεσης
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        //ορισμός charset της σύνδεσης ώστε να παρουσιάζονται τα ελληνικά σωστά
        mysqli_set_charset($conn, "utf8");
        
        //Δημιουργία ερωτήματος
        $sql = "INSERT INTO `supernova_review`(`name`, `release-date`, `review-by`, `comments`, `stars` ) VALUES
        ('".$_POST['name']."','".$_POST['release_date']."', '".$_POST['review-by']."', '".$_POST['comments']."','".$_POST['stars']."') ;";
        
        //εκτέλεση ερωτήματος στη βάση
        $result = mysqli_query($conn, $sql);
        
        //έλεγχος αποτελεσμάτων
        if ($result) {
            //Εμφάνιση αποτελεσμάτων σε μορφή πίνακα
            echo "<br>αποθηκευση οκ<br>";
        }
        
        //κλείσιμο σύνδεσης
        mysqli_close($conn);
    ?>
</body>
</html>