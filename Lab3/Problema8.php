<?php
$nameError=$emailError=$mobileError=$genderError=$websiteError="";
$name=$email=$mobile=$website="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["name"])){
        $nameError="Numele este obligatoriu!";
    }
    else{
        $name=htmlspecialchars(trim($_POST["name"]));
        if(!preg_match("/^[a-zA-Z]*$/",$name)){
            $nameError="Introduceti doar litere si spatiu!";
        }
    }
    if(empty($_POST["mobile"])){
        $mobileError="Mobilul este obligatoriu!";
    }
    else{
        $mobile=htmlspecialchars(trim($_POST["mobile"]));
        if(!preg_match("/^[0-9]{10}+$/",$mobile)){
            $nameError="Numarul de telefon trebuie sa contina 10 cifre!";
        }
    }
    if(empty($_POST["email"])){
        $emailError="Emailul este obligatoriu!";
    }
    else{
        $email=trim($_POST["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $emailError="Format email invalid!";
        }
    }
    if(empty($_POST["gender"])){
        $genderError="Genul este obligatoriu!";
    }
    else{
        $gender=htmlspecialchars(trim($_POST["name"]));
    }
    if(empty($_POST["website"])){
        $website="";
    }
    else{
        $name=htmlspecialchars(trim($_POST["website"]));
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
         $websiteErr = "URL invalid";
         }
    }
}
?>
<html>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameError;?></span>
    <br><br>
    Mobile: <input type="text" name="mobile" value="<?php echo $mobile;?>">
    <span class="error">* <?php echo $mobileError;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailError;?></span>
    <br><br>
    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo
    "checked";?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo
    "checked";?> value="male">Male
    <span class="error">* <?php echo $genderError;?></span>
    <br><br>
    <br><br>
    Website: <input type="text" name="website" value="<?php echo $website;?>">
    <span class="error"><?php echo $websiteError;?></span>
    <input type="submit" name="submit" value="Submit"> 
</form>
</html>
