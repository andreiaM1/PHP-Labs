<html>
    <body>
        <form action="">
            Parola:
            <input type="password" name="val"/>
            <br/>
            <textarea name="val1">...</textarea>
            <p/>
            <p/>
            Bauturi preferate:
            <br/>
            Coca Cola
            <input type="radio" name="bautura" value="coke"/>
            <br/>
            Pepsi
            <input type="radio" name="bautura" value="pepsi"/>
            <p/>
            <p/>
            Alege universitatea:<br/>
            <select name="univ1">
                <option value="UBB">UBB</option>
                <option value="UTCN">UTCN</option>
                <option value="USAMV">USAMV</option>
            </select>
            <p/>
            Branza:
            <input type="checkbox" name="ingr[]" value="braza"/>
            Ceapa:
            <input type="checkbox" name="ingre[]" value="ceapa"/>
            <p/>
            <p/>
            Aelegere multipla de universitate:<br/>
            <select name="univ[]" multiple="multiple">
                <option value="UBB">UBB</option>
                <option value="UTCN">UTCN</option>
                <option value="USAMV">USAMV</option>
            </select>
            <p/>
            <input type="submit" value="send" name="send"/>
        </form>
        <?php
        if(isset($_REQUEST["send"])){
            if(isset($_REQUEST["val"])){
                $val=$_REQUEST["val"];
                echo "Parola este $val<br/>";
            }
            $valoare=$_REQUEST["val1"];
            echo "Ai introdus: <br/>";
            echo "<b>$valoare</b>";
            echo "<p/>";
            if(isset($_REQUEST["bautura"])){
                $val=$_REQUEST["bautura"];
                echo "Bautura preferata este $val<br/>";
            }
            if(isset($_REQUEST["univ1"])){
                $val=$_REQUEST["univ1"];
                echo "Alegerea facuta este <br/>";
                echo "<b>$val</b></br>";
            }
            if(isset($_REQUEST["ingr"])){
                $a=$_REQUEST["ingr"];
                echo "Ingrediente selectate:";
                for($i=0;$i<sizeof($a);$i++){
                    echo "<li>$a[$i]</li>";
                }
            }
            if(isset($_REQUEST["univ"])){
                $a=$_REQUEST["univ"];
                echo "S-a selectat:<br/>";
                for($i=0;$i<sizeof($a);$i++){
                    echo "<li>$a[$i]";
                }
            }
        }
        ?>
    </body>
</html>