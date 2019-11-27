
<?php 



function filter_data($data){
        $data = strip_tags($data);
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = filter_var($data, FILTER_SANITIZE_STRING);
        return $data;
    }


?>