<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];


$errors = [
    'firstnameerror'=>'',
    'lastnameerror'=>'',
    'emailerror'=>'',
];



if(isset($_POST['submit'])){



    if(empty($firstname)){
        $errors['firstnameerror' ] = "first name is empty";
    }
    if(empty($lastname)){
        $errors['lastnameerror' ] ="last name is empty";
    }
    if(empty($email)){
        $errors['emailerror' ] ="email is empty";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailerror' ] ="emaile is not vaild"; 
    }

    if(!array_filter($errors)){
        $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);

        $sql = "INSERT INTO users(firstname ,lastname , email)
        VALUES('$firstname','$lastname','$email') ";

        if(mysqli_query( $conn, $sql)){
            header('location: index.php');
        }
        else{
            echo 'Error: ' . mysqli_error( $conn );
        }



        }

}
?>