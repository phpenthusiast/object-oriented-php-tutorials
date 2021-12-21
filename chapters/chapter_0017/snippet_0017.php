<?php
if($query -> rowCount() > 0){
    foreach($results as $result){
        echo $result -> name . ", ";
        echo $result -> city . ", ";
        echo $result -> date_added;
    }
}
