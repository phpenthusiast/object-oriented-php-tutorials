<?php
if ($query -> rowCount() > 0) {
    $count = $query -> rowCount();
    echo $count . " rows were affected.";
} else {
    echo "No affected rows.";
}
