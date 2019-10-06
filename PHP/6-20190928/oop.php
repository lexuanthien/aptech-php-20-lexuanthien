<?php

    class Preson {
        var $name;
        var $sex;
        var $MayMat;

        function set_name($n) {
            $this->name = $n;
        }    
        function set_sex($s) {
            $this->sex = $s;   
        } 
        
        function set_maymat($m) {
            $this->MayMat = $m;   
        }


        function get_name() {
            return $this->name;
        }


        function get_sex() {
            return $this->sex;
        }

        function get_maymat() {
            return $this->MayMat;
        }

    }

    $ten = new Preson();

    $ten->set_name('Thien');
    Echo $ten->get_name();

    echo "<br>";

    $ten->set_sex('nam');
    echo $ten->get_sex();

    echo "<br>";
    
    $ten->set_maymat(10);
    echo $ten->get_maymat();