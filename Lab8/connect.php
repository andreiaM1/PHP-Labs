<?php
    function pdo_connect_mysql(){
        $DATABASE_HOST='localhost';
        $DATABASE_USER='root';
        $DATABASE_PASS='';
        $DATABASE_NAME='store';
        try{
            return new PDO('mysql:host='.$DATABASE_HOST.';dbname='.$DATABASE_NAME.';charset=utf8',
                            $DATABASE_USER,
                            $DATABASE_PASS);
        }
        catch(PDOException $exception){
            exit('Failed to connetct to the database');
        }
    }
    function template_header($title){
        $no_card_items = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
        echo <<<EOT
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf8">
                <title>$title</title>
                <link rel="stylesheet" href="styles.css">
                <link href="https://use.fontawesome.com/releases//v5.7.1/css/all.css">
            </head>
            <body>
            <header>
                <div class="content-wrapper">
                    <h1>Shopping Cart</h1>
                    <nav>
                        <a href="index.php">Home</a>
                        <a href="index.php?page=products">Produse</a>
                    
                        <div class="link-incons">
                            <a href="index.php?page=cart">
                                <i class="fas fa-shopping-cart">Your products</i>
                                <span>$no_card_items</span>
                            </a>
                            
                        </div>
                    </nav>
                </div>
            </header>
            <main>
EOT;
}

    function template_footer(){
        $year = date('Y');
        echo<<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy;$year,Shopping Cart</p>
            </div>
        </footer>
        </body>
        <html>
EOT;
}
?>