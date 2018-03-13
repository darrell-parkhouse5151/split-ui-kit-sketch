<?php
/**
 * Created by Darrell.
 * Date: 3/13/2018
 * Time: 2:22 PM
 */

$form_proc = new FormProc();

$nameErr = $passwordErr = "";
$name = $password = "";

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    /*$name = $form_proc->test_input($_POST['name']);
    $password = $form_proc->test_input($_POST['password']);
    */
    $name = $_POST['name'];
    $password = $_POST['password'];

    if ($name) {
        $nameErr = "Name is required";
    } else {
        $name = $form_proc->sanitize_input($_POST['name']);
    }

    if (empty($password)) {
        $passwordErr = "password is required";
    } else {
        $password = $form_proc->sanitize_input($_POST['password']);
    }
}

