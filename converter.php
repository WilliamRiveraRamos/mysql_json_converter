<!doctype html>
    <html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>    
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Converter</title>
    </head>

    <body>
    <?php

    include 'conn.php';

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    mysqli_select_db($conn, $dbname); 

    $query = "SELECT * FROM Jobs ORDER BY idJob DESC";

    $result = mysqli_query($conn, $query); 

    $convertToJson = array();

    while($row = mysqli_fetch_array($result)) {
        $rowArray['Company Name'] = $row['Company'];
        $rowArray['Job Location'] = $row['Location'];
        $rowArray['Job Title'] = $row['JobTitle'];
        $rowArray['Job Desc.'] = $row['JobDesc'];

        array_push($convertToJson, $rowArray);
        }

        json_encode($convertToJson);

        $jobsList = "jobs_list.json";

        $data = json_encode($convertToJson); 

        if ($fp = fopen($jobsList, "w")) {
            fwrite($fp, $data);
            echo "<p>The data has been converted to JSON, please check your working directory.</p>";
        } 
        fclose($fp);

        mysqli_close($conn);
    ?>
    </body>
</html>