<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                // if email already exists
                echo "$email - already exists";
            } else {
                // processing file upload for avatar
                if(isset($_FILES['avatar'])) {
                    $img_name = $_FILES['avatar']['name']; // getting user's uploaded image
                    $img_type = $_FILES['avatar']['type']; // getting image type
                    $tmp_name = $_FILES['avatar']['tmp_name']; // 
                    
                    // Exploade the image and get extension
                    $img_explode = explode('.', $img_name);
                    $img_ext     = end($img_explode);

                    $extensions = ['png', 'jpg', 'jpeg', 'webp'];// allowed image types
                    if(in_array($img_ext, $extensions) === true) {
                        $time = time();
                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($tmp_name, __DIR__."/assets/avatar/".$new_img_name)) {
                            $status = 'Active now';
                            $random_id = rand(time(), 10000000000);
                            // insert all user data
                            $sql2 = mysqli_query($conn, "INSERT INTO users(unique_id, fname, lname, email, password, avatar, status)
                                VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')
                            ");
                            if($sql2) {
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($sql3) > 0) {
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id'] = $row['unique_id'];
                                    echo 'Success';
                                }
                            } else {
                                echo "Error bang";
                            }
                        }
                    } else {    
                        echo 'Please use jpg, jpeg, png, and webp format!';
                    }
                } else {
                    echo "Please select an image";
                }
            }
        }else{
            echo "$email - Is not valid email";
        }
    }else{
        echo "All input fields are required!";
    }
?>