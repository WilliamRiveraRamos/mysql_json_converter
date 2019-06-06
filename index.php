<!doctype html>
    <html lang="en">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>    
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>MySQL to JSON Converter</title>
    </head>
    <body>
        <div class="container">
            <h2>MySQL to JSON converter</h2>
            <form action="post-job.php" method="POST">
                <div class="from-group">
                    <input type="text" class="form-control mt-2" name="company" placeholder="Company" />
                </div>

                <div class="from-group">
                    <input type="text" class="form-control mt-2" name="location" placeholder="City, State" />
                </div>

                <div class="from-group">
                    <input type="text" class="form-control mt-2" name="jobTitle" placeholder="Job Title" />
                </div>

                <div class="from-group">
                    <textarea class="form-control mt-2" cols="10" rows="4" name="jobDesc" placeholder="Job Description"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Create Job Post</button>        
            </form>
        </div>
    </body>
</html>