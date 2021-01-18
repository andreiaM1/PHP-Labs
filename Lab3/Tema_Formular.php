<html>
    <head>
        <title>Exemplu formular</title>
    </head>
    <body>
        <?php
        $name_error="";
        $password_error="";
        ?>
        <h3>Registration form</h3>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <p>Enter your name:<br/>
        <input type="text" name="name"/></p>
        <p>Enter your home address:<br/>
        <textarea rows="10" cols="50"name="address"></textarea></p>
        <p>Enter your password:<br/>
        <input type="password" name="password"/></p>
        <p>Choose your gender:<br/></p>
        <select name="gender">
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="Other">Other</option>
        </select>
        <p>Enrollment for one of the programs below:<br/></p>
        Machine Learning 
        <input type="radio" name="program" value="MachineLearning"/>
        Data Analysis 
        <input type="radio" name="program" value="DataAnalysis"/> 
        Algorithms
        <input type="radio" name="program" value="Algorithms"/> 
        </select>
        <p>Add elective courses:<br/></p>
        <select name="electives[]" multiple="multiple">
            <option value="Astronomy">Astronomy</otpion>
            <option value="Photography">Photography</option>
            <option value="Drama">Drama</option>
            <option value="Journalism">Journalism</option>
        </select>
        <p>Add facilities:<br/></p>
        Dorm
        <input type="checkbox" name="facilities[]" value="Dorm"/>
        Cafeteria
        <input type="checkbox" name="facilities[]" value="Cafeteria"/>
        <p/>
        <p/>
        <input type="submit" value="Register now" name="register"/>
    </form>
    <?php
        if(isset($_POST["register"])){
            if(!empty($_POST["name"])){
                echo "<p>Submitted name: $_POST[name]<p><br/>";
            }
            if(!empty($_POST["address"])){
                echo "<p>Submitted address: $_POST[address]<p><br/>";
            }
            if(!empty($_POST["password"])){
                echo "<p>Password for this account: $_POST[password]<p><br/>";
            }
            if(!empty($_POST["gender"])){
                echo "<p>Gender: $_POST[gender]<p><br/>";
            }
            if(!empty($_POST["program"])){
                echo "<p>Enrolled for: $_POST[program]<p><br/>";
            }
            if(!empty($_POST["electives"])){
                echo "<p>Your elective courses:<p><br/>";
                foreach($_POST["electives"] as $elective)
                    echo "<li>$elective</li>";
            }
            if(!empty($_POST["facilities"])){
                echo "<p>Selected facilities:</p><br/>";
                $facilities=$_POST["facilities"];
                foreach($_POST["facilities"] as $facility)
                echo "<li>$facility</li>";
            }
        }
    ?>
    </body>    
</html>