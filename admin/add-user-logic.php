<?php

require 'config/database.php';
//getting form data if submit button was clicked
if(isset($_POST['submit'])){
    $firstname = filter_var($_POST['firstname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $is_admin = filter_var($_POST['userrole'],FILTER_SANITIZE_NUMBER_INT);
    $avatar = $_FILES['avatar'];
    
    // validate input values
    if(!$firstname){
        $_SESSION['add-user'] = "Please enter your first name";
    }
    elseif(!$lastname){
        $_SESSION['add-user'] = "Please enter your last name";
    }
    elseif(!$username){
        $_SESSION['add-user'] = "Please enter your username";
    }
    elseif(!$email){
        $_SESSION['add-user'] = "Please enter your a vaild email";
    }
    elseif(!$is_admin){
        $_SESSION['add-user'] = "Please select a valid user-role";
    }
    elseif(strlen($createpassword)<8 || strlen($confirmpassword)<8){
        $_SESSION['add-user'] = "Password should be 8+ characters";
    }
    elseif(!$avatar['name']){
        $_SESSION['add-user'] = "Please add avatar";
    }
    else{
        if($createpassword !== $confirmpassword){
            $_SESSION['add-user'] = "Passwords do not match";
        }
        else{
            $hashed_password = password_hash($confirmpassword,PASSWORD_DEFAULT);
            
            // check if username already exists in the table
            $user_check_query = "SELECT * FROM users  WHERE username='$username' OR email='$email'";

            $user_check_result = mysqli_query($connection,$user_check_query);
            if(mysqli_num_rows($user_check_result)>0){
                $_SESSION['add-user'] = 'username or email already exists';

            }else {
                // work on avatar
                // rename avatar
                $time = time();
                $avatar_name = $time.$avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = 'images/'.$avatar_name;
                //checking image file only
                $allowed_files = ['png','jpg','jpeg'];
                $extension = explode('.',$avatar_name,4); 
                $extension = end($extension);
                if(in_array($extension,$allowed_files)){
                    //setting image size
                    if($avatar['size'] < 1500000){
                        //upload avatar
                        move_uploaded_file($avatar_tmp_name,$avatar_destination_path);
                    }else{
                        $_SESSION['add-user'] = 'File size too big. Should be less than 1 mb.';
                    }
                }else{
                    $_SESSION['add-user'] = 'File should be jpg, png, jpeg.';
                }


            }
        }
    }

    //redirect back to signup page

    if(isset($_SESSION['add-user'])){
        //pass form data back to the signup page
        $_SESSION['signup-data'] = '';
        header('location: '.ROOT_URL.'admin/add-user.php');
        die();

    }else{
        //insert new users into the database
        $insert_user_query = "INSERT INTO `users` (firstname, lastname, username, email, password, avatar, is_admin)
        VALUES ('$firstname','$lastname','$username','$email','$hashed_password','$avatar_name',0);";

        $insert_user_result = mysqli_query($connection,$insert_user_query);

        if(!mysqli_errno($connection)){
            //redirect user to login page with success message
            $_SESSION['signup-success'] = 'Registration Successful, Please Log In';
            header('location: '.ROOT_URL.'signin.php');
            die();
        }
    }
}
else{
    header('location: '.ROOT_URL.'admin/add-user.php');
            die();

}
?>
