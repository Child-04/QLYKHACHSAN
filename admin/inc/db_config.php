<?php

    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'hotelwebsite';

    $con = mysqli_connect($hname, $uname, $pass, $db);

    if (!$con) {
        die("Cannot Connect to Database: " . mysqli_connect_error());
    }

    $GLOBALS['con'] = $con;

    function filteration($data)
    {
        foreach ($data as $key => $value) {
            $value = trim($value);
            $value = htmlspecialchars($value);
            $value = stripcslashes($value);
            $value = strip_tags($value);
            $data[$key] = $value;
        }
        return $data;
    }

    function select($sql, $values, $datatypes)
    {
        $con = $GLOBALS['con'];
        if ($stmt = mysqli_prepare($con, $sql)) {
            mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
            if (mysqli_stmt_execute($stmt)) {
                $res = mysqli_stmt_get_result($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            } else {
                mysqli_stmt_close($stmt);
                die("Query cannot be executed - Select");
            }
        } else {
            die("Query cannot be prepared - Select");
        }
    }

    function update($sql, $values, $datatypes)
    {
        $con = $GLOBALS['con'];
        if ($stmt = mysqli_prepare($con, $sql)) {
            mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
            if (mysqli_stmt_execute($stmt)) {
                $res = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            } else {
                mysqli_stmt_close($stmt);
                die("Query cannot be executed - Update");
            }
        } else {
            die("Query cannot be prepared - Update");
        }
    }

    function insert($sql, $values, $datatypes)
    {
        $con = $GLOBALS['con'];
        if ($stmt = mysqli_prepare($con, $sql)) {
            mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
            if (mysqli_stmt_execute($stmt)) {
                $res = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            } else {
                mysqli_stmt_close($stmt);
                die("Query cannot be executed - Insert");
            }
        } else {
            die("Query cannot be prepared - Insert");
        }
    }

    function delete($sql, $values, $datatypes) {
        $con = $GLOBALS['con'];
        if ($stmt = mysqli_prepare($con, $sql)) {
            mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
            if (mysqli_stmt_execute($stmt)) {
                $res = mysqli_stmt_affected_rows($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            } else {
                mysqli_stmt_close($stmt);
                die("Query cannot be executed - Delete");
            }
        } 
        else {
            die("Query cannot be prepared - Delete");
        }
    }

    // function delete($sql, $values, $datatypes)
    //   {
    //       $con = $GLOBALS['con'];
    //       $stmt = mysqli_prepare($con, $sql);
    //       if ($stmt) {
    //           mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
    //           return mysqli_stmt_execute($stmt);
    //       }
    //       return false;
    //   }

    
?>