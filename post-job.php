<!doctype html>
    <html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>    
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Add New Job Post</title>
    </head>

    <body>
    <?php
        
        include 'conn.php';

        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        
        if(!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $company = $_POST['company'];
        $location = $_POST['location'];
        $jobTitle = $_POST['jobTitle'];
        $jobDesc = $_POST['jobDesc'];

        $jobCreatedMsg = "Job Post Created!";

        $query = "INSERT INTO Jobs (Company, Location, JobTitle, JobDesc) VALUES('$company', '$location', '$jobTitle', '$jobDesc')";

        if(mysqli_query($conn, $query)) {
            echo "<div class='container'>";
                echo "<h4>" . $jobCreatedMsg . "</h4>";
                echo "<a href='index.php' class='btn btn-success mr-2'>Add New Job Post</a>";
                echo "<a href='converter.php' class='btn btn-warning'>Convert To JSON</a>";
            echo "</div>";
        } else {
            echo "Error: " . $query . "<br />" . mysqli_error($conn) . "<br />";
        }
        mysqli_close($conn);  
    ?>  

    </body>
</html>