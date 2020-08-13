<?php

class Pokemon 
{

    /** 
     * Set up some Properties for your class.
     * 
     * Properties 
     */
    public $name = '';
    private $health = 25;
    private $type = 'normal';
    private $level = 1;

    // If the property is private, it can still be read/output if you set up a method for it.
    public function getLevel(){

        return $this->level;
    }

    // If the property is private, it can still be written to/update if you set up a method for it.
    public function levelUp(){
        $this->level++;
        return $this->level;
    }
}