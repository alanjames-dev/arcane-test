<?php
    ob_start();
    session_start();
    
    $servername = "localhost";
    $uname = "id15200193_arcane_root";
    $pass = "A$0c1ety4dm1n$%#";
    $dbname = "id15200193_users";
   
    $db = new mysqli($servername, $uname, $pass, $dbname);
   
    if ($db->connect_error) {
        error_log('Connection error: ' . $db->connect_error);
    }
    
    $sql = "SELECT * FROM flag";
    $result = $db->query($sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //print_r($data[0]["user_solves"]);
        
    $username = $_SESSION["user_user_name"];
    $code = mysqli_real_escape_string($db, $_POST["code"]);
    
    foreach($data as $flag){
        //print_r($flag["chall_flag"]);
        if($flag['chall_flag'] == $code){
            $time = strtotime($flag['issue_date']);
            $sql0 = "SELECT now()";
            $result0 = $db->query($sql0);
            $data0 = mysqli_fetch_all($result0, MYSQLI_ASSOC);
            $curtime = strtotime($data0[0]['now()']);
            
            $sql1 = "SELECT * FROM users";
            $result1 = $db->query($sql1);
            $data1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
            
            $user_solves = $flag['user_solves'];
            
            foreach($data1 as $val){
                $user_id = strval($val['id']);
                
                    
                if($val['username'] == $username){
                    
                    if(strpos($user_solves, $user_id)!==false){
                        $success = 0;
                    } else {
                       
                        $user_solves = $user_solves . "," . $user_id;
                        $sql = "UPDATE flag SET chall_count+1' WHERE chall_flag='".$code."'";
                        $result = $db->query($sql);

                        
                        $userpts = $val['points'];
                        if($flag['difficulty'] == 0){
                            $pts = $flag['chall_points'];
                            // if(($curtime - $time) > 172800 && ($curtime - $time) <= 604800){
                            //     $pts = $pts - 3;
                            // } else if(($curtime - $time) > 604800 && ($curtime - $time) <= 1209600){
                            //     $pts = $pts - 5;
                            // } else if(($curtime - $time) > 1209600){
                            //     $pts = $pts - 8;
                            // }
                            
                            
                        } else if($flag['difficulty'] == 1) {
                            $pts = $flag['chall_points'];
                            // if(($curtime - $time) > 172800 && ($curtime - $time) <= 604800){
                            //     $pts = $pts - 5;
                            // } else if(($curtime - $time) > 604800 && ($curtime - $time ) <= 1209600){
                            //     $pts = $pts - 10;
                            // } else if(($curtime - $time) > 1209600){
                            //     $pts = $pts - 15;
                            // }
                            
                        } else if($flag['difficulty'] == 2) {
                            $pts = $flag['chall_points'];
                            // if(($curtime - $time) > 172800 && ($curtime - $time) <= 604800){
                            //     $pts = $pts - 13;
                            // } else if(($curtime - $time) > 604800 && ($curtime - $time ) <= 1209600){
                            //     $pts = $pts - 25;
                            // } else if(($curtime - $time) > 1209600){
                            //     $pts = $pts - 40;
                            // }
                            
                            
                        } else if($flag['difficulty'] == 3) {
                            $pts = $flag['chall_points'];
                            // if(($curtime - $time) > 172800 && ($curtime - $time) <= 604800){
                            //     $pts = $pts - 25;
                            // } else if(($curtime - $time ) > 604800 && ($curtime - $time) <= 1209600){
                            //     $pts = $pts - 50;
                            // } else if(($curtime - $time) > 1209600){
                            //     $pts = $pts - 75;
                            // }
                            
                        } else if($flag['difficulty'] == 4) {
                            $pts = $flag['chall_points'];
                            // if(($curtime - $time) > 172800 && ($curtime - $time) <= 604800){
                            //     $pts = $pts - 50;
                            // } else if(($curtime - $time) > 604800 && ($curtime - $time) <= 1209600){
                            //     $pts = $pts - 100;
                            // } else if(($curtime - $time ) > 1209600){
                            //     $pts = $pts - 50;
                            // }
                            
                        } else {
                            $success = 0;
                        }
                        
                        $sum = $pts + $userpts;
                        $solved_sum = $val['solved'] + 1;
                        $sql2 = "UPDATE users SET points='".$sum."', solved='".$solved_sum."' WHERE username='".$_SESSION['user_user_name']."'";
                        $result2 = $db->query($sql2);
                        $sql3 = "UPDATE flag SET user_solves='".$user_solves."' WHERE chall_flag='".$code."'";
                        $result3 = $db->query($sql3);
                        $sql = "UPDATE flag SET chall_count=chall_count+1 WHERE chall_flag='".$code."'";
                        $result = $db->query($sql);
                         
                        $success = 1;
                        break;
                        
                    }
                    
                } else {
                    $success = 0;
                }
               
            }
            break;
        } else {
            // print_r($flag["chall_flag"]);
            $success = 0;
        }
    }
    
    if($success == 1){
        header("location: congrats.html");
        
    } else {
        header("location: failure.html");
    }
       
    mysqli_close($db);
   
?>