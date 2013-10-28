<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
echo '<h1>Test calling function</h1>';
echo '<h2>Call MyHello()</h2>';

MyHello("Sailor Moon");

function MyHello($str) {
    echo '<p>Hello' . $str . '!</p>';
}
?>
