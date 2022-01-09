<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" HREF="../../icon.png" type="image/png"> 
    <link rel="stylesheet" type="text/css" href="../../style.css"> 
    <title>Δισκογραφία Light</title>
    <style>
        td {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">

        <h1>Δισκογραφία</h1>
        <br><br>
        <hr width="100%">
        <table>
            <tr>
                <td><h3>Immortale</h3></td>
            </tr>
            <tr>
                <td><img src="../pictures/immortale.png" alt="Immortale cover" width="50%" height="50%"></td>
            </tr>
            <tr>
                <td>
                    <div>
                        Κυκλοφόρησε 18 Ιουνίου του 2021,<br>
                        περιέχει 18 κομμάτια που έχουν συνολική διάρκεια 69 λεπτά.
                        <br><br>
                        <table>
                            <tr>
                                <td>
                                    Αξιολόγηση κοινού:
                                </td>
                                <td><img src="../../review/star/patric.png" class="patric"></td>
                                <td><img src="../../review/star/patric.png" class="patric"></td>
                                <td><img src="../../review/star/patric.png" class="patric"></td>
                                <td><img src="../../review/star/patric.png" class="patric"></td>
                                <td><img src="../../review/star/half-star.png" class="patric-half"></td>
                                <td>(4.5/5)</td>
                            </tr>
                        </table>
                        <iframe src="https://open.spotify.com/embed/album/4pG7RebITssOm6t4w9TNL8?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    </div>
                </td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
                <td><h3>Supernova</h3></td>
            </tr>
            <tr>
                <td><img src="../pictures/supernova.png" alt="Supernova Cover" width= "70%" height= "70%"> </td>
            </tr>
            <tr>
                <td>
                    <div>
                        <br>
                        Κυκλοφόρησε 25 Δεκεμβρίου του 2020,<br>
                        περιέχει 9 κομμάτια που έχουν συνολική διάρκεια 30 λεπτά.
                        <br><br>
                        <table>
                            <tr>
                                <td>
                                    Αξιολόγηση κοινού:
                                </td>
                        <?php

                            function is_decimal( $val )
                            {
                                return is_numeric( $val ) && floor( $val ) != $val;
                            }


                            $con = new mysqli("localhost", "root", "", "personal");
                            if ($con->connect_error) {
                                echo "connection Failed: " . $con->connect_error;
                            } else {
                                $sql = "SELECT AVG(stars) AS average FROM Supernova_review WHERE `name` LIKE 'Supernova';";

                                $result = $con->query($sql);

                                if ($result) {
                                    $row = $result->fetch_assoc();
                                    $stars = $row["average"];
                                    $stars = round($stars, 1);
                                    if ($stars==0) {
                                        for ($i = 0; $i < 5; $i++) {
                                            echo "<td><img src='../../review/star/patric-thumbs-down.png' class='patric-down'></td>";
                                        }
                                        echo "<td>(0/5)</td>";
                                    } else {
                                        $n = 0;
                                        for ($i = 0; $i < $stars - 1; $i++) {
                                            echo "<td><img src='../../review/star/patric.png' class='patric'></td>";
                                            $n++;
                                        }
                                        if ($n != $stars - 1) {
                                            echo "<td><img src='../../review/star/half-star.png' class='patric-half'></td>";
                                        } else {
                                            echo "<td><img src='../../review/star/patric.png' class='patric'></td>";
                                        }
                                        echo "<td>(" . $stars . "/5)</td>";
                                    }

                                } else {
                                    for ($i = 0; $i < 5; $i++) {
                                        echo "<td><img src='../../review/star/patric-thumbs-down.png' class='patric-down'></td>";
                                    }
                                    echo "<td>(0/5)</td>";
                                }

                            }
                        ?>
                            </tr>
                        </table>
                        <iframe src="https://open.spotify.com/embed/album/0YjJuXJlkF0Al7355W6BXU?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    </div>
                </td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
                <td><h3>Primo</h3></td>
            </tr>
            <tr>
                <td><img src="../pictures/primo.png" alt="Primo Cover" width="50%" height="50%"> </td>
            </tr>
            <tr>
                <td>
                    <div>
                        <br>
                        Κυκλοφόρησε 27 Δεκεμβίου του 2017,<br>
                        περιέχει 9 κομμάτια που έχουν συνολική διάρκεια 35 λεπτά.
                        <br><br>
                        <table>
                            <tr>
                                <td>
                                    Αξιολόγηση κοινού:
                                </td>
                                <td><img src="../../review/star/patric.png" class="patric"></td>
                                <td><img src="../../review/star/patric.png" class="patric"></td>
                                <td><img src="../../review/star/patric.png" class="patric"></td>
                                <td><img src="../../review/star/patric.png" class="patric"></td>
                                <td><img src="../../review/star/patric.png" class="patric"></td>
                                <td>(5/5)</td>
                            </tr>
                        </table>
                        <iframe src="https://open.spotify.com/embed/album/5W9adzyPi3j5GllVH2zG01?utm_source=generator" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    </div>
                </td>
            </tr>
        </table> 
    </div>
    <footer>
        <input type="button" id="toggle" class="toggle" value="Open navigation">
        <div id="navigation" class="footer-navigation">
            <p>
                <a href="../../index.html">Αρχική</a>
                <span>Light</span>
                <a href="../../mad_clip/mad_clip.html">Mad-Clip</a>
                <a href="../../competition/competition.html">Διαγωνισμός</a>
                <a href="../../review/review.html">Αξιολόγηση</a>
                <a href="../../contact_us/contact_us.html">Επικοινωνία</a>
            </p>
        </div>
        <div class="footer-div">Δημήτρης Φουσέκης p21181 | Πάρης Πολυχρονόπουλος p21141 | <img src="../../unipi.gif" style="height: 17px; width: 18px"> ΠΑ.ΠΕΙ.</div>
    </footer>
    
    <script>
        document.getElementById("toggle").addEventListener("click", function () {toggle()});
        function toggle() {
            var menu = document.getElementById("navigation");
            if (menu.style.display == "block") {
                menu.style.display = "none";
                document.getElementById("toggle").value = "Open navigation";
            } else {
                menu.style.display = "block";
                document.getElementById("toggle").value = "Close navigation";
            }
        }
    </script>

</body>
</html>