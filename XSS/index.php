<?php

// if(!isset($_COOKIE["PHPSESSID"]))
//     setcookie('PHPSESSID',md5(uniqid(rand(), true)));

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['comment']) && !empty($_POST['comment']) && isset($_POST['user']) && !empty($_POST['user'])){
    $file_name = substr(md5(uniqid(rand(), true)),10);
    $fh = fopen("./comments/$file_name", 'w+');
    fwrite($fh, $_POST['user']."\n".$_POST['comment']);
    fclose($fh);
}
$dh = opendir('./comments');

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Picture of the week</title>
    <style>
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
        display: none;
    }
</style>
</head>
<body>
    <form method="post">
        <h3>Post a comment:</h3>
                    <label for="comment">Username:</label>
                    <input type="text" name="user" style="width: 100%"/>
                    <br><br>              
                    <label for="comment">Comment:</label>
                    <input type="text" name="comment" style="width: 100%"/>
                    <br><br>
                    <input type="submit" value="Post it!" />
                <h3>Comments:</h3>
               
        </table>
    </form>
    
    <script type="text/javascript" src="enacra.js"></script>
     <?php
            
                    while($file = readdir($dh)){
                        if($file != "." && $file != "..") {
                            $content = file("./comments/$file");
                            echo "<tr style='border: 1px dotted black'>\n";
                            echo "\t<td colspan='2' style='word-wrap: break-word;padding: 5px;'>Submitted by: <b>$content[0]</b></td>\n";
                            echo "<tr style='border: 1px dotted black'>\n";
                            echo "</tr>\n";
                            echo "\t<td colspan='2' style='border: 1px dotted black;word-wrap: break-word;padding: 5px;'>$content[1]</td>\n";
                            echo "</tr>\n";
                            if( stripos($content[1], "alert" ) || stripos($content[0], "alert")){
                              unlink("./comments/$file");
                            }
             
                        }
                    
                    
                         
                    }
                ?>
              

</body>
</html>
