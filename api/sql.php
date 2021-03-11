<?php

function SelectMySql($sql)
{
    include_once('config.php');
    $result = mysqli_query($link, $sql);

    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
        $results[$i] = $row[0];
        $results[$i+1] = $row[1];
        $results[$i+2] = $row[2];
        $results[$i+3] = $row[3];
        $results[$i+4] = $row[4];
        $results[$i+5] = $row[5];
        $results[$i+6] = $row[6];
        $results[$i+7] = $row[7];
        $i =+ 7;
    }

    return $results;
}

function SelectSql($table, $table2, $PK, $FK)
{
    $sql = "SELECT * FROM ".$table." INNER JOIN ".$table2." ON ".$table.".".$FK."=".$table2.".".$PK;
    return SelectMySql($sql);
}

?>