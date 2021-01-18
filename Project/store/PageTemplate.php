<?php
    class PageTemplate {

        static function getDynamicButton(){
            if(!(session_status() === PHP_SESSION_ACTIVE))
                session_start();
            if(isset($_SESSION['loggedin'])){
                if($_SESSION['userType'] == "Client")
                    return <<<EOT
                    <a id="cart-icon" href="cart.php"><img src="..\images\carticon.jpg" alt="cart icon" width="60" height="60"></a>
                    <ul>
                        <li>
                            <a href="orders.php">Orders</a>
                            <ul class="dropdown">
                                <li><a href="logout.php">Log out</a></li>
                            </ul>
                        </li>
                    </ul>
EOT;
                else return <<<EOT
                <ul>
                        <li>
                            <a>Manage</a>
                            <ul class="dropdown">
                                <li><a href="updateOrders.php">Orders</a></li>
                                <li><a href="manage.php">Products</a></li>
                            </ul>
                        </li>
                    </ul>
                <a href="logout.php">Logout</a>
EOT;
            }
            else {
                return <<<EOT
                <a href="login.php">Login</a>
EOT;
            }
        } 

        static function getProductsButton(){
            if(!(session_status() === PHP_SESSION_ACTIVE))
            session_start();
            if(isset($_SESSION['loggedin'])){
                if($_SESSION['userType'] == "Admin")
                    return <<<EOT
                <div></div>
EOT;
                else 
                return <<<EOT
                <a href="products.php">Products</a>
EOT;

            }
            else 
            return <<<EOT
            <a href="products.php">Products</a>
EOT;
        }

        static function template_header($title){
            $dynamicButton = PageTemplate::getDynamicButton();
            $productsButton = PageTemplate::getProductsButton();
            echo<<<EOT
            <!DOCTYPE html>
            <html>
                <head>
                <meta charset="utf-8">
                <title>$title</title>
                <link rel="stylesheet" href="..\styles\style.css">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
                </head>
                <body>
                <header>
                <div class="content-wrapper">
                <h1>Virtual Shop</h1>
                <nav>
                    <a href="home.php">Home</a>
                    $productsButton
                    $dynamicButton
                </nav>
                </div>
                </header>
                <main>
EOT;            
}

        static function template_footer(){
            $year=date('Y');
            echo<<<EOT
            </main>
            <footer>
                <div class="content-wrapper">
                <p>&copy; $year, Project shopping cart</p>
                </div>
            </footer>
            </body>
            </html>
EOT;
}
    }
?>