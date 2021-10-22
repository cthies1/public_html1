<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
        <title>Passenger Information Input Form</title>
        <meta name="description" content="This is an input form page." />
        <meta name="author" content="Chloe, Bee, Anna, Diggy" />
        <link rel="stylesheet" href="./assets/css/styles.css" />
    </head>
    <body>
        <p>
            <?php
            if(!is_null($_GET["error"])){
                if(strpos($_GET["error"], '1') == 0){ //fname error
                    echo "invalid first name  \n";
                }
                if(strpos($_GET["error"], '2')){ //lname error
                    echo "invalid last name  \n";
                }
                if(strpos($_GET["error"], '3')){ //ssn error
                    echo "invalid ssn  \n";
                }

            }
            /*
                if ($_GET["error"] == 123)
                    echo "Invalid first name!";
                    echo "Invalid last name!";
                    echo "Invalid ssn!";
                if ($_GET["error"] == 120)
                    echo "Invalid first name!";
                    echo "Invalid last name!";
                if ($_GET["error"] == 103)
                    echo "Invalid first name!";
                    echo "Invalid ssn!";
                if ($_GET["error"] == 100)
                    echo "Invalid first name!";
                if ($_GET["error"] == 23)
                    echo "Invalid last name!";
                    echo "Invalid ssn!";
                if ($_GET["error"] == 20)
                    echo "Invalid last name!";
                if ($_GET["error"] == 3)
                    echo "Invalid ssn!";
                    */
            ?>
            <form action="inputPassenger.php" method="post">
                First Name: <input type="text" name="f_name"/><br/>
                <div class ="error" id="firstNameError"></div>
                Middle Name: <input type="text" name="m_name"/><br/>
                Last Name: <input type="text" name="l_name"/><br/>
                <div class ="error" id="lastNameError"></div>
                Social Security Number: <input type="text" name="ssn"/><br/>
                <div class ="error" id="socialSecurityError"></div>
                <input type="submit"/>
            </form>
        </p>
        
    </body>
</html>