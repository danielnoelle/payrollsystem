<?php

function getValue($name)
{
    if (!empty($_SESSION[$name])) {
        echo $_SESSION[$name];
    }
}

function validateInput($name, $span, $input) {
    if (empty($_SESSION[$name]) && isset($_SESSION[$name])) {
        $encodedInput = json_encode($input);
        $encodedSpan = json_encode($span);
        echo "<script>informErrorToUser($encodedInput, $encodedSpan);</script>";
    }
}