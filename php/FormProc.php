<?php
/**
 * Created by Darrell.
 * Date: 3/13/2018
 * Time: 2:39 PM
 */

class FormProc {
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
}