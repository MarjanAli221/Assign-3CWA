<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A IT Solution Firm" />
    <meta name="keywords" content="HTML, CSS, Database" />
    <meta name="author" content="Mohammad Shafiul Marjan ALi" />
    <link rel="stylesheet" href="./styles/style.css" />
    <title>PHP Enhancements</title>
</head>

<body>
    <?php include "./header.inc"; ?>
    <div class="container">
        <h2>Description of PHP Enhancements</h2>

        <section class="enhancements">

            <article>

                <h2>Authentication System</h2>
                In this configuration general users can't spectate the data as well as managing the applicant.
                Person with the privilaged account credentials , in this case the manager can access this things. To acceess 
                the manager page user needs to logon first. The he/she  can see the information .
                 To make the things easy , I've set the username and password & made it viewable to check the system quickly .
                 After successful logon , person can view the data.I used php session for storing authentic user 
                 information while log into the website.Applied in <a href="https://mercury.swin.edu.au/cos10011/s103538067/assignment3/login.php">page.</a>
            </article>
            <aside>
                <ul>
                    <li>session_start() function</li>
                    <li>$_SESSION variable</li>
                    <li>session_destroy() function</li>
                </ul>
            </aside>
        </section>
        <section class="enhancements">
            <h2>Direct Delete Button</h2>
            <article>
                According to the spec sheet , we had to delete EOI's with the specified job reference
                number. When skimming through a large number of applicant's , HR manager can instantly delete any 
                applicant's application by clicking the associated "Delete" button. This will save him some time.Login to see
                the second enhancement. 
                 Applied in <a href="https://mercury.swin.edu.au/cos10011/s103538067/assignment3/manage.php">page.</a>
                 <img src="images/proof.png" alt="" class="slider-image">

            </article>
           
        </section>
    </div>
    <?php include "./footer.inc"; ?>
    <script src="./scripts/enhancement.js"></script>
</body>
</html>