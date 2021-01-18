<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Multiple select dropdown in PHP</title>
        <style>
            .container {
            max-width: 350px;
            margin: 50px auto;
            text-align: center;
            }
            select {
            width: 100%;
            min-height: 150px;
            margin-bottom: 20px;
            }
            input[type="submit"] {
            margin-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container mt-5">
            <form action="" method="POST" class="mb-3">
                <select name="Fructe[]" multiple>
                    <option value=""disable selected>Choose option</option>
                    <option value="Mar">Mar</option>
                    <option value="Banana">Banana</option>
                    <option value="Ananas">Ananas</option>
                    <option value="Capsuni">Capsuni</option>
                </select>
                <input type="submit" name="submit" value="Alege optiuni">
            </form>
            <?php
                if(isset($_POST["submit"])){
                    if(!empty($_POST["Fructe"])){
                        foreach($_POST["Fructe"] as $selected){
                            echo "".$selected." ";
                        }
                    }
                    else{
                        '<div class="error">Nu ati selectat!</div>';
                    }
                }
            ?>
    </body>
</html>