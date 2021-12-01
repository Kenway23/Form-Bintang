<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form Bintang</title>
    </head>
    <body>
        <form action="" method="POST">
            <table>
                <tr>
                    <td><label>Masukan Baris Bintang</label></td>
                    <td>:</td>
                    <td><input type="number" name="bintang"></td>
                </tr>
                <tr>
                    <td><label>Pilih Bentuk Segitiga Bintang</label></td>
                    <td>:</td>
                    <td>
                        <label><input type="radio" name="pilihan" value="siku-siku">Siku-siku</label>
                        <br>
                        <label><input type="radio" name="pilihan" value="siku-terbalik">Siku Terbalik</label>
                        <br>
                        <label><input type="radio" name="pilihan" value="sempurna">Sempurna</label>
                        <br>
                        <label><input type="radio" name="pilihan" value="sempurna-terbalik">Sempurna Terbalik</label>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" name="Submit">Submit</button></td>
                </tr>
            </table>
        </form>
        <br><br>
        <?php
        if (isset($_POST['Submit'])) {

            $nilai = $_POST['bintang'];
            $pilihan = $_POST['pilihan'];

            if($pilihan == "siku-siku"){
                for($a = 0; $a <= $nilai; $a++){
                    for($b = 1; $b <= $a ; $b++){
                        echo "&nbsp;*";
                    }
                    echo "<br>";
                }   
            }else if($pilihan == "siku-terbalik"){
                for($c = 0; $c <= $nilai; $c++){
                    for($d = $nilai; $d > $c ; $d--){
                        echo "&nbsp;*";
                    }
                    echo "<br>";
                }
            }else if($pilihan == "sempurna"){
                for($e = 0; $e <= $nilai; $e++){
                    for($f = $nilai; $f > $e ;$f--){
                        echo "&nbsp;";
                    }
                    for($g = 0; $g < $e; $g++){
                        echo "*";
                    }
                    echo "<br>";
                }
            }else if($pilihan == "sempurna-terbalik"){
                for($h = 0; $h <= $nilai; $h++){
                    for($i = 0; $i < $h; $i++){
                        echo "&nbsp;";
                    }
                    for($j = $nilai; $j > $i ;$j--){
                        echo "*";
                    }
                    echo "<br>";
                }

            }
        }
        ?>
    </body>
</html>
