<?php

class Pokemon 
{

    /** 
     * Set up some Properties for your class.
     * 
     * Properties can be public, protected, or private.
     */
    public $name = '';
    public $health = 25;
    public $type = 'normal';
    private $level = 1;

    function __construct ( $name = false, $health = false, $type = false ) {
        if ( is_string( $name ) ) {
          $this->name = $name;
        }
        if ( is_integer( $health ) ) {
          $this->health = $health;
        }
        if ( is_string( $type ) ) {
          $this->type = $type;
        }
      }
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