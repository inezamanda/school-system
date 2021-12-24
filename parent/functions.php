<?php
    include("config.php"); 
    
    function debug($data){
        var_dump($data);
        die;
    }

    // Bikin fungsi query sendiri
    function query($query){
        global $db;
        $result = mysqli_query($db, $query);
        // buat nyimpen per-row
        
        $rows = []; 
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows; 
    }

    function login($data){
        global $db;
        // debug($data);
        $id = $data["id"];
        $password = $data["password"];

        //cek apakah ada username dan password yang sama
        $result = mysqli_query($db, "SELECT password FROM parents WHERE id = $id");
        // debug($result);
        if( $checkPass = mysqli_fetch_assoc($result) ){
            // debug($checkPass);
            if( $password == $checkPass["password"]) {
                return true;
            }
        }
        return false;
    }
?>
