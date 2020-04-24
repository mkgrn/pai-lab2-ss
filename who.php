<html>
    <head>
        <meta charset="UTF-8">
        <title>Kosmici mnie uprowadzili - zgłoszenie porwania</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <h2>Kosmici mnie uprowadzili - zgłoszenie porwania</h2>
        <h3>Psa widzieli:</h3>
        <?php
        
        $i=1; 
            $dbc = mysqli_connect('localhost', 'root', '','aliendb_e7t1s1')
            or die ('Error connecting to MySQL server.');
            
            $query = "SELECT * FROM aliens_abduction WHERE fang_spotted ='tak'";
            
            $result = mysqli_query($dbc, $query) 
            or die('Error querying database.');
            
            while ($row = mysqli_fetch_array($result)){
                $i=$i+1;
                $to = $row['email'];
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                
                echo  $i . ' ' . '' . $first_name . ' ' . $last_name . ' ('.$to. ')<br/>';
            }     
            mysqli_close($dbc);
        ?>
    </body>
</html>