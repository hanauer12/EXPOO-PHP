<?php

abstract  class  Animal
{
    public function emitirsom() {
        print $this->som();
    }

}

class Gato extends Animal
{
    public  function som(){
        return "MIAU";
    }
}

class Cachorro extends Animal
{
    public  function som(){
        return "AUAU";
    }
}