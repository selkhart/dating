<?php
/**
 * Created by PhpStorm.
 * User: selkh
 * Date: 3/1/2018
 * Time: 8:11 PM
 */

require("/home/selkhart/config.php");

class dbFunctions
{

    function connect()
    {
        try {
            //Instantiate a database object
            $dbh = new PDO(DB_DSN, DB_USERNAME,
                DB_PASSWORD);
            echo "Connected to database!!!";
            return $dbh;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return;
        }
    }

    function getMembers()
    {
        global $dbh;
        //1. Define the query
        $sql = "SELECT * FROM Members ORDER BY lname";
        //2. Prepare the statement
        $statement = $dbh->prepare($sql);
        //3. Bind parameters
        //4. Execute the query
        $statement->execute();
        //5. Get the results
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        //print_r($result);
        return $result;
    }

    function getPrimeMembers()
    {
        global $dbh;
        //1. Define the query
        $sql = "SELECT * FROM Members ORDER BY lname";
        //2. Prepare the statement
        $statement = $dbh->prepare($sql);
        //3. Bind parameters
        //4. Execute the query
        $statement->execute();
        //5. Get the results
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        //print_r($result);
        return $result;
    }


    function addAccount($fname, $lname, $gender, $seeking, $email, $age, $phone, $interests, $bio, $premium,
                        $state,
                        $image)
    {
        //
        global $conn;

        //define sql
        $sql = "insert into datingMembers(fname,lname,gender,seeking,email,age,phone,interests,bio,premium,state,
image) values(:fname,:lname,:gender,:seeking,:email,:age,:phone,:interests,:bio,:premium,:state,
:image)";

        //prepare
        $statement = $conn->prepare($sql);

        //bind the parameters
        $statement->bindParam(':fname', $fname, PDO::PARAM_STR);
        $statement->bindParam(':lname', $lname, PDO::PARAM_STR);
        $statement->bindParam(':gender', $gender, PDO::PARAM_STR);
        $statement->bindParam(':seeking', $seeking, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':age', $age, PDO::PARAM_INT);
        $statement->bindParam(':phone', $phone, PDO::PARAM_INT);
        $statement->bindParam(':interests', $interests, PDO::PARAM_STR);
        $statement->bindParam(':bio', $bio, PDO::PARAM_STR);
        $statement->bindParam(':premium', $premium, PDO::PARAM_BOOL);
        $statement->bindParam(':state', $state, PDO::PARAM_STR);
        $statement->bindParam(':image', $image, PDO::PARAM_STR);

        //execute
        $result = $statement->execute();

        echo "<pre>";
        print_r($result);
        echo "</pre>";

    }
}