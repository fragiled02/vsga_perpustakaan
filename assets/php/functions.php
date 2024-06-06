<?php
function check_message($msg){
    $act = 'error';

    if (isset($_GET['messageInsert']) && $_GET['messageInsert'] === 'success') {
        $act = 'ditambahkan';
    }else if(isset($_GET['messageUpdate']) && $_GET['messageUpdate'] === 'success'){
        $act = 'di update';
    }else if(isset($_GET['messageDelete']) && $_GET['messageDelete'] === 'success'){
        $act = 'dihapus';
    }

    if($act != 'error'){
        echo "
            <script>
                alert('$msg berhasil $act');
                if (typeof(window.history.pushState) == 'function') {
                    var newURL = window.location.protocol + '//' + window.location.host + window.location.pathname;
                    window.history.replaceState({path: newURL}, '', newURL);
                }
            </script>
            ";
        };
    };


function check_string($str) {
    // lowercase the string
    $raw = $str;
    $str = strtolower($str);
    // check for forbidden words or symbols
    $forbidden = array("insert", "select", "update", "delete", "where", "$");
    // loop through the forbidden array
    foreach ($forbidden as $word) {
        // if the string contains any of the forbidden words or symbols, return false
        if (strpos($str, $word) !== false) {
        return false;
        };
    };
    // otherwise, return the string
    return $raw;
};

function SQL_FIREWALL($raw, $dtypes){
    include "koneksi.php";
    $raw1; $raw2; $raw3;

    if(empty($raw)){return false;}

    else if(!preg_match("/[a-z]/i", $raw) && ($dtypes == "n" || $dtypes == "N" )){
        $raw2 = $raw;
        return $raw2;
    }else{
        $raw1 = strval($raw);
        $raw2 = $koneksi->real_escape_string($raw1); 
        $raw3 = check_string($raw2);
        return $raw3;
    };
};

function jalankanSQL($sql){
    try{
        //connect server
        $final = null;
        include "koneksi.php";

        //sql querry processing
        $final_sql = strval($sql);
        
        //new prepare statement obj
        $stmt = $koneksi->stmt_init() or die(mysqli_error($koneksi));
        $stmt->prepare($final_sql) or die(mysqli_error($koneksi));
        $stmt->execute() or die(mysqli_error($koneksi));
        $result = $stmt->get_result();

        if(!empty($result)){
            while ($row = $result->fetch_assoc()) { //get results
                $final[] = $row;
            }; 
            $stmt->close();
            return($final);
        }else if($stmt != false){
            $stmt->close();
            return(true);
        }else{
            $stmt->close();
            return(false);
        };
   
    }catch(Exception $e) {
        echo($e->getMessage());
    };

};

//  menjalankan sql
//  $stmt = $koneksi->stmt_init();
//  $stmt->prepare($final_sql);
//  $stmt->execute();
//  $result = $stmt->get_result();
//  $stmt->close();
