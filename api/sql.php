<?php

function Config()
{
    $host = 'localhost'; // адрес сервера 
    $database = ''; // имя базы данных
    $user = ''; // имя пользователя
    $password = ''; // пароль

    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));

    $link->set_charset("utf8");
    return $link;
}

function SelectMySql($sql)
{
    
    $result = mysqli_query(Config(), $sql);

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
        $results[$i+8] = $row[8];
        $results[$i+9] = $row[9];
        $results[$i+10] = $row[10];
        $results[$i+11] = $row[11];
        $results[$i+12] = $row[12];
        $results[$i+13] = $row[13];
        $results[$i+14] = $row[14];
        $results[$i+15] = $row[15];
        $results[$i+16] = $row[16];
        $results[$i+17] = $row[17];
        $results[$i+18] = $row[18];
        $results[$i+19] = $row[19];
        $results[$i+20] = $row[20];
        $results[$i+21] = $row[21];
        $results[$i+22] = $row[22];
        $results[$i+23] = $row[23];
        $i = $i + 24;
    }

    return $results;
}

function SelectSql($table, $table2, $PK, $FK)
{
    $sql = "SELECT * FROM ".$table." INNER JOIN ".$table2." ON ".$table.".".$FK."=".$table2.".".$PK;
    return SelectMySql($sql);
}

function SelectMSql($table)
{
    $sql = "SELECT * FROM ".$table;
    return SelectMySql($sql);
}

function SessionSel()
{
    if (!isset($_COOKIE['session']))
    {
        echo '<script>location.replace("/index.php");</script>'; exit;
    }
    else
    {
        $sqls = "SELECT count(sessions.session) FROM sessions INNER JOIN users ON sessions.id_users = users.id WHERE sessions.session = '".$_COOKIE['session']."'";
        $resultsc = mysqli_query(Config(), $sqls);
        
        while ($row = mysqli_fetch_array($resultsc))
        {
            if($row[0] == 0)
            {
                echo '<script>location.replace("/api/logout.php");</script>'; exit;
            }
        }
        
    }
}

function DelRowMySql($table, $id_rowTable, $column)
{
    SessionSel();

    $sql = "DELETE FROM ".$table." WHERE (".$column." = '".$id_rowTable."');";
  
    SelectMySql($sql);
}

?>