<?php  

function registerUser($first_name,$last_name,$email,$password) {
    global $db;
    $password_hash = password_hash($password,PASSWORD_DEFAULT);
    $sql = $db->prepare("INSERT INTO users (first_name,last_name,email,password) VALUES(?,?,?,?)");
    $sql->bind_param("ssss",$first_name,$last_name,$email,$password_hash);
    $sql->execute();

    if($sql->errno == 0) { 
        $_SESSION["id"] = $sql->insert_id;
        header("Location:user/home.php");
    } else {
        header("Location:error.php");
    }
}

function loginUser($email,$password) {
        global $db;
        $user_password = getPasswordFromDb($email);

        if(!$user_password) {
            return false;
        }

        if(!password_verify($password,$user_password)) {
            return false;
        }

        $sql = $db->prepare("SELECT id FROM users WHERE email = ? AND password = ?");
        $sql->bind_param("ss",$email,$user_password);
        $sql->execute();
        if($sql->errno == 0) {
            $result = $sql->get_result();
            $id = $result->fetch_assoc()["id"];
            $_SESSION["id"] = $id;
            return true;
        } else {
            header("Location:error.php");
        }
}


function getPasswordFromDb($email) {
     global $db;
     $sql = $db->prepare("SELECT password FROM users WHERE email = ?");
     $sql->bind_param("s",$email);
     $sql->execute();
     $result = $sql->get_result();
     if($result->num_rows == 0) {
         return false;
     }
     $password = $result->fetch_assoc()["password"];
     return $password;
}


function isLogged() {
    if(isset($_SESSION["id"])) {
       return true;
    } else {
       return false;
    }
}




function getUser($id) {
    global $db;
    $sql = $db->prepare("SELECT * FROM users WHERE id = ?");
    $sql->bind_param("i",$id);
    $sql->execute();
    $result = $sql->get_result();
    $user   = $result->fetch_assoc();
    return $user;
}


function contactMsg($full_name,$email,$message) {
    global $db;
    $sql = $db->prepare("INSERT INTO contact_form (full_name,email,message) VALUES(?,?,?)");
    $sql->bind_param("sss",$full_name,$email,$message);
    $sql->execute();

    if($sql->errno == 0) { 
        header("Location:../index.php");
    } else {
        header("Location:error.php");
    }
}









?>