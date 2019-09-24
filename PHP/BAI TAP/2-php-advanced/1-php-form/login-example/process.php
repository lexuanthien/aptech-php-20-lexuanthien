<?php

function addToArray($arr, $field)
{
    if (isset($_POST[$field])) {
        $data = $_POST[$field];
        switch ($field) {
            case 'email':
                filter_var($data, FILTER_VALIDATE_EMAIL) ?
                $arr[$field] = $data :
                $arr[$field . 'Err'] = $field . ' field is invalid email format';
                break;
            case 'password':
                preg_match("/^[a-zA-z0-9]*$/", $data) ?
                $arr[$field] = validateInput($data) :
                $arr[$field . 'Err'] = $field . ' field only has letters and no white space allowed';
                break;
        }
    } else {
        $arr[$field . 'Err'] = $field . " field is required";
    }
    return $arr;
}

function validateInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arr = [];
    foreach ($_POST as $key => $value) {
        $arr = addToArray($arr, $key);
    }
    if (count($arr) > 0) {
        foreach ($arr as $key => $value) {
            if (preg_match(("/Err$/"), $key)) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
            echo $key . ' - ' . $value . ' - ok<br>';
        }
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
} else {
    echo "GET METHOD";
}
