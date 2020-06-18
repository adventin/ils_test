<?php

class A {

    public function f($a){

        if (!is_string($a) || !method_exists($this, $a)) {
            echo 'method not exists';
            return;
        }
        $this->$a();
    }

    public function example(){
        echo 'do something';
    }
}

$a = new A();
$a->f(123);
$a->f('example1');
$a->f('example');