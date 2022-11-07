<!DOCTYPE html>
<html lang="en">
    <head>
        

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="css/css.css">
        <title>Jasdip Singh</title>
        <center><header><h1 style="text-align:center;">Jasdip Singh Assignment 4</h1></header></center>
       
    </head>
    <style>
        body {
        background-image: url("img/back.jpg");
        background-repeat: no-repeat;
        background-size:cover;
        border-radius: 50%;
        
        }   


    </style>
    <body>
    <div class="aligned">
    <a href="http://167.99.253.247/csc443/singhj12/CSC_443_Projects/CSC_443_assignment_3/CSC_443_Assignment3/index.php">
    <img src="img/sc.png" height="32px" width="32px"> 
    </a>

        <h2><span>SCSU Theme Park Icon</span><h2>
    
            </div>
       <center> <div class="box">
        <p>Page latest Version: Nov 5 2022</p>
        
            
        <span id="spanDate"></span>
        <script>
         var months = ['January','February','March','April','May','June','July','August','September','October','November','December'];       
            var date = new Date();
            date.setTime(date.getTime());       
            document.getElementById("spanDate").innerHTML = 
            months[date.getMonth()] + " " + date.getDate()+ ", " + 
            date.getFullYear()
        </script>
        
        <br><br>
        <a href="http://167.99.253.247/csc443/singhj12/CSC_443_Projects/CSC_443_assignment_3/CSC_443_Assignment3/index.php" style="color: white" target="_blank">SCSU Theme Park</a>
        <br><br>
        <button class="button-18" role="button" onclick="window.location.href='http://167.99.253.247/csc443/miguele1/assignments/presentation3/' ;">Eric Miguel</button>
        <br><br>
        <button class="button-18" role="button" onclick="window.location.href='https://167.99.253.247/csc443/pollardh1/Assignment%203/' ;">Ryan Pollard</button>
        <br><br>
        <button class="button-18" role="button" onclick="window.location.href='http://167.99.253.247/csc443/stofkoj1/csc443projects/presentations/P2/pres2/' ;">Jeffrey Stofko</button>
        <br><br>
        <button class="button-18" role="button">Brianny Perez</button>
    </div></center>
    <style>
                table ,th, td {
                    border:1px solid black;
                    border-top-style: double;      
                }
                td {
                        text-align: center;
                    }  
    </style>
    <br><br>
    <center><h4 style="text-align:center;">This CSV file data is being displayed Dynamically with PHP </h4></center>
    <center>
        <?php
            echo "<html><body><table>\n\n";
            $f = fopen("review.csv", "r");
            while (($line = fgetcsv($f)) !== false) {
                    echo "<tr>";
                    foreach ($line as $cell) {
                            echo "<td>" . htmlspecialchars($cell) . "</td>";
                    }
                    echo "</tr>\n";
            }
            fclose($f);
            echo "\n</table></body></html>"
            ?>




    </center>

        <br><br>
    
             

</body>

</html>
