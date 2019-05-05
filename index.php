<?php

//Declaring blank strings to prevent errors
$string = "";
$string_length = "";
$hashed_string = "";
$hashed_string_length = "";

if(isset($_POST['generate_hash']))
{
    $string = $_POST['string'];
    $string_length = strlen($string);
}

?>
   

<html>
    <head>
        <title>Hash Encryption</title>
        <link href="style.css" type="text/css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    
    
    <body>
        <div class="background">
            <div class="main_column">
                <div class="header">
                    <h1>Hash Strings</h1>
                </div>
                <div class="form">
                   <form method="post" action="index.php">
                        <textarea name="string" placeholder="Enter Your Text" required></textarea>
                        <input type="submit" name="generate_hash" id="hash" value="Generate Hash"><br>
                    </form>
                </div>
                <div class="result">
                    <?php
                        if($string != "")
                        {
                            echo "<h1>Input String: $string [$string_length]</h1><hr>";
                            echo "<h1>1. MD2 : " . hash('md2', $string) . " [" . strlen(hash('md2', $string)) . "]</h1><hr>";
                            echo "<h1>2. MD4 : " . hash('md4', $string) . " [" . strlen(hash('md4', $string)) . "]</h1><hr>";
                            echo "<h1>3. MD5 : " . hash('md5', $string) . " [" . strlen(hash('md5', $string)) . "]</h1><hr>";
                            echo "<h1>4. SHA-1 : " . hash('sha1', $string) . " [" . strlen(hash('sha1', $string)) . "]</h1><hr>";
                            echo "<h1>5. SHA-224 : " . hash('sha224', $string) . " [" . strlen(hash('sha224', $string)) . "]</h1><hr>";
                            echo "<h1>6. SHA-256 : " . hash('sha256', $string) . " [" . strlen(hash('sha256', $string)) . "]</h1><hr>";
                            echo "<h1>7. SHA-384 : " . hash('sha384', $string) . " [" . strlen(hash('sha384', $string)) . "]</h1><hr>";
                            echo "<h1>8. SHA-512/224 : " . hash('sha512/224', $string) . " [" . strlen(hash('sha512/224', $string)) . "]</h1><hr>";
                            echo "<h1>9. SHA-512/256 : " . hash('sha512/256', $string) . " [" . strlen(hash('sha512/256', $string)) . "]</h1><hr>";
                            echo "<h1>10. SHA-512 : " . hash('sha512', $string) . " [" . strlen(hash('sha512', $string)) . "]</h1><hr>";
                            echo "<h1>11. SHA3-224 : " . hash('sha3-224', $string) . " [" . strlen(hash('sha3-224', $string)) . "]</h1><hr>";
                            echo "<h1>12. SHA3-256 : " . hash('sha3-256', $string) . " [" . strlen(hash('sha3-256', $string)) . "]</h1><hr>";
                            echo "<h1>13. SHA3-384 : " . hash('sha3-384', $string) . " [" . strlen(hash('sha3-384', $string)) . "]</h1><hr>";
                            echo "<h1>14. SHA3-512 : " . hash('sha3-512', $string) . " [" . strlen(hash('sha3-512', $string)) . "]</h1><hr>";
                            echo "<h1>15. RipeMD-128 : " . hash('ripemd128', $string) . " [" . strlen(hash('ripemd128', $string)) . "]</h1><hr>";
                            echo "<h1>16. RipeMD-160 : " . hash('ripemd160', $string) . " [" . strlen(hash('ripemd160', $string)) . "]</h1><hr>";
                            echo "<h1>17. RipeMD-256 : " . hash('ripemd256', $string) . " [" . strlen(hash('ripemd256', $string)) . "]</h1><hr>";
                            echo "<h1>18. RipeMD-320 : " . hash('ripemd320', $string) . " [" . strlen(hash('ripemd320', $string)) . "]</h1><hr>";
                            echo "<h1>19. Tiger-128,3 : " . hash('tiger128,3', $string) . " [" . strlen(hash('tiger128,3', $string)) . "]</h1><hr>";
                            echo "<h1>20. Tiger-160,3 : " . hash('tiger160,3', $string) . " [" . strlen(hash('tiger160,3', $string)) . "]</h1><hr>";
                            echo "<h1>21. Tiger-192,3 : " . hash('tiger192,3', $string) . " [" . strlen(hash('tiger192,3', $string)) . "]</h1><hr>";
                            echo "<h1>22. Tiger-128,4 : " . hash('tiger128,4', $string) . " [" . strlen(hash('tiger128,4', $string)) . "]</h1><hr>";
                            echo "<h1>23. Tiger-160,4 : " . hash('tiger160,4', $string) . " [" . strlen(hash('tiger160,4', $string)) . "]</h1><hr>";
                            echo "<h1>24. Tiger-192,4 : " . hash('tiger192,4', $string) . " [" . strlen(hash('tiger192,4', $string)) . "]</h1><hr>";
                            echo "<h1>25. Snefru : " . hash('snefru', $string) . " [" . strlen(hash('snefru', $string)) . "]</h1><hr>";
                            echo "<h1>26. Snefru-256 : " . hash('snefru256', $string) . " [" . strlen(hash('snefru256', $string)) . "]</h1><hr>";
                            echo "<h1>27. Gost : " . hash('gost', $string) . " [" . strlen(hash('gost', $string)) . "]</h1><hr>";
                            echo "<h1>28. Gost-Cryto : " . hash('gost-crypto', $string) . " [" . strlen(hash('gost-crypto', $string)) . "]</h1><hr>";
                            echo "<h1>29. Adler-32 : " . hash('adler32', $string) . " [" . strlen(hash('adler32', $string)) . "]</h1><hr>";
                            echo "<h1>30. CRC-32 : " . hash('crc32', $string) . " [" . strlen(hash('crc32', $string)) . "]</h1><hr>";
                            echo "<h1>31. CRC-32b : " . hash('crc32b', $string) . " [" . strlen(hash('crc32b', $string)) . "]</h1><hr>";
                            echo "<h1>32. FNV-132 : " . hash('fnv132', $string) . " [" . strlen(hash('fnv132', $string)) . "]</h1><hr>";
                            echo "<h1>33. FNV-1a32 : " . hash('fnv1a32', $string) . " [" . strlen(hash('fnv1a32', $string)) . "]</h1><hr>";
                            echo "<h1>34. FNV-164 : " . hash('fnv164', $string) . " [" . strlen(hash('fnv164', $string)) . "]</h1><hr>";
                            echo "<h1>35. FNV-1a64 : " . hash('fnv1a64', $string) . " [" . strlen(hash('fnv1a64', $string)) . "]</h1><hr>";
                            echo "<h1>36. Joaat : " . hash('joaat', $string) . " [" . strlen(hash('joaat', $string)) . "]</h1><hr>";
                            echo "<h1>37. Haval-128,3 : " . hash('haval128,3', $string) . " [" . strlen(hash('haval128,3', $string)) . "]</h1><hr>";
                            echo "<h1>38. Haval-160,3 : " . hash('haval160,3', $string) . " [" . strlen(hash('haval160,3', $string)) . "]</h1><hr>";
                            echo "<h1>39. Haval-192.3 : " . hash('haval192,3', $string) . " [" . strlen(hash('haval192,3', $string)) . "]</h1><hr>";
                            echo "<h1>40. Haval-224,3 : " . hash('haval224,3', $string) . " [" . strlen(hash('haval224,3', $string)) . "]</h1><hr>";
                            echo "<h1>41. Haval-256,3 : " . hash('haval256,3', $string) . " [" . strlen(hash('haval256,3', $string)) . "]</h1><hr>";
                            echo "<h1>42. Haval-128,4 : " . hash('haval128,4', $string) . " [" . strlen(hash('haval128,4', $string)) . "]</h1><hr>";
                            echo "<h1>43. Haval-160,4 : " . hash('haval160,4', $string) . " [" . strlen(hash('haval160,4', $string)) . "]</h1><hr>";
                            echo "<h1>44. Haval-192,4 : " . hash('haval192,4', $string) . " [" . strlen(hash('haval192,4', $string)) . "]</h1><hr>";
                            echo "<h1>45. Haval-224,4 : " . hash('haval224,4', $string) . " [" . strlen(hash('haval224,4', $string)) . "]</h1><hr>";
                            echo "<h1>46. Haval-256,4 : " . hash('haval256,4', $string) . " [" . strlen(hash('haval256,4', $string)) . "]</h1><hr>";
                            echo "<h1>47. Haval-128,5 : " . hash('haval128,5', $string) . " [" . strlen(hash('haval128,5', $string)) . "]</h1><hr>";
                            echo "<h1>48. Haval-160,5 : " . hash('haval160,5', $string) . " [" . strlen(hash('haval160,5', $string)) . "]</h1><hr>";
                            echo "<h1>49. Haval-192,5 : " . hash('haval192,5', $string) . " [" . strlen(hash('haval192,5', $string)) . "]</h1><hr>";
                            echo "<h1>50. Haval-224,5 : " . hash('haval224,5', $string) . " [" . strlen(hash('haval224,5', $string)) . "]</h1><hr>";
                            echo "<h1>51. Haval-256,5 : " . hash('haval256,5', $string) . " [" . strlen(hash('haval256,5', $string)) . "]</h1><hr>";
                            }
                    ?>
                </div>
            </div>
        </div>
    </body>
    
    <script src="pr.js"></script>
</html>