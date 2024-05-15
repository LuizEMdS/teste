<?php

class Animal {

    public function Andar (){

        return "Anda";
    }

    public function Comunicar (){

        return "Fala";
    }
}

class Cachorro extends Animal {

    public function Comunicar (){

        return "Late e " . parent::Comunicar ();
    }
}

$Shiba = new Cachorro;
echo $Shiba->Andar();
echo "<br>";
echo $Shiba->Comunicar();
?>