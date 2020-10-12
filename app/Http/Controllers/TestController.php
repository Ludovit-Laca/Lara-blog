<?php

namespace App\Http\Controllers;


class TestController extends Controller
{
    public function testAction() {

        // deklaracia premennej v PHP
        $premenna = "Cviko ";

        // for cyklus v PHP
        for ($i = 0; $i < 5; $i++) {
            // vypis v PHP
            echo $premenna . $i . "<br>";
        }
    }
}
