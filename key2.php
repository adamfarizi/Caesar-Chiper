<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enkripsi & Dekripsi</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            if (isset($_POST['enkripsi'])) {

                    $input = $_POST["input"];
                    $upper = strtolower($input);

                    $key = array(
                        'a' => 'T',
                        'b' => 'E',
                        'c' => 'K',
                        'd' => 'N',
                        'e' => 'I',
                        'f' => 'F',
                        'g' => 'O',
                        'h' => 'R',
                        'i' => 'M',
                        'j' => 'A',
                        'k' => 'B',
                        'l' => 'C',
                        'm' => 'D',
                        'n' => 'G',
                        'o' => 'H',
                        'p' => 'J',
                        'q' => 'L',
                        'r' => 'P',
                        's' => 'Q',
                        't' => 'S',
                        'u' => 'U',
                        'v' => 'V',
                        'w' => 'W',
                        'x' => 'X',
                        'y' => 'Y',
                        'z' => 'Z'
                        );
            
                    $output = str_replace(array_keys($key), $key, $upper);
                
            }

            elseif (isset($_POST['dekripsi'])) {

                    $input = $_POST["input"];
                    $upper = strtoupper($input);

                    $key = array(
                        'a' => 'T',
                        'b' => 'E',
                        'c' => 'K',
                        'd' => 'N',
                        'e' => 'I',
                        'f' => 'F',
                        'g' => 'O',
                        'h' => 'R',
                        'i' => 'M',
                        'j' => 'A',
                        'k' => 'B',
                        'l' => 'C',
                        'm' => 'D',
                        'n' => 'G',
                        'o' => 'H',
                        'p' => 'J',
                        'q' => 'L',
                        'r' => 'P',
                        's' => 'Q',
                        't' => 'S',
                        'u' => 'U',
                        'v' => 'V',
                        'w' => 'W',
                        'x' => 'X',
                        'y' => 'Y',
                        'z' => 'Z'
                        );
                    
                    $output = str_replace($key, array_keys($key), $upper);
                
            }
        ?>
       
        <div class="link">
            <a href="key1.php">KEY 1</a>
            <a href="key2.php" class="active">KEY 2</a>
        </div>
        <div class="enkrip">
            <div class="atas">
                <form method="POST">
                    <center><h4>INPUTAN</h4></center>
                    <textarea name="input" cols="50" rows="8" style="font-family: Arial;" placeholder="Masukkan disini ..."></textarea><br>
                    <input type="submit" name="enkripsi" value="ENKRIPSI !" class="button btn1"/>
                    <input type="submit" name="dekripsi" value="DEKRIPSI !" class="button btn2"/>
                </form>
            </div>
            <div class="bawah enkripsi">
                <center><h4>HASIL</h4></center>
                <textarea name="hasil" cols="50" rows="10" style="font-family: Arial;" readonly> <?php echo $output;?> </textarea>
            </div>
        </div>
    </body>
</html>