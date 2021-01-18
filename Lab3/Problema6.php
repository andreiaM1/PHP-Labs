<html>
    <body>
        <form action="">
            <input type="text" name="euro" value="<?php if(isset($_REQUEST['euro'])) echo $_REQUEST['euro'];?>";/>
            <p/>
            <input type="submit" value="convert"/>
        </form>
        <?php
           if(isset($_REQUEST["euro"])){
               $euro=$_REQUEST["euro"];
               $lei=$euro*4.5;
               echo "Suma in lei este $lei pentru $euro EUR";
           }
        ?>
    </body>
</html>