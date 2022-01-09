<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="../icon.png">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <title>Υποβολή Αξιολόγησης</title>
    <style>

        .result {
            font-weight: 900;
            font-size: 30px;
        }

        .success {
            color: green;
        }

        .failure {
            color: red;
        }
    </style>
</head>
<body>
    <meta http-equiv="refresh" content="11;url= ../index.html">
    <div class="container">
        <br><br><br>
        <br><br><br>
        Η υποβολή της αξιολόγησης σας ήταν:
        <br>
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
                echo "<div class='result success'>Επιτυχής</div>";
            } else {
                echo "<div class='result failure'>Ανεπιτυχής</div>";
            }
            
            //κλείσιμο σύνδεσης
            mysqli_close($conn);
        ?>
        <br>
        <div id="countdown" style="text-align: center; color: grey;"></div>
        <script>
            var timeleft = 10;
            var downloadTimer = setInterval(function(){
            if(timeleft <= 0){
                clearInterval(downloadTimer);
                document.getElementById("countdown").innerHTML = "Μεταφέρεστε στην αρχική σελίδα";
            } else {
                document.getElementById("countdown").innerHTML = "Σε <strong>" + timeleft + "</strong> θα μεταφερθείτε στην αρχική σελίδα";
            }
            timeleft -= 1;
            }, 1000);
        </script>
    </div>
    <footer>
        <div class="footer-div">Δημήτρης Φουσέκης p21181 | Πάρης Πολυχρονόπουλος p21141 | <img src="../unipi.gif" style="height: 17px; width: 18px"> ΠΑ.ΠΕΙ.</div>
    </footer>
</body>
</html>