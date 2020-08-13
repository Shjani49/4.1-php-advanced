<?php
// Ensure that we aren't pulling Pokemon.Class in multiple times; pull it in if it hasn't run yet.
include_once 'Pokemon.Class.php';

class PokemonFromApi extends Pokemon
{
    // Output!
    public function output()
    {
?>
        <dl>
            <dt>Name</dt>
            <dd><?php echo $this->name; ?></dd>
            <dt>Health</dt>
            <dd><?php echo $this->health; ?></dd>
            <dt>Type</dt>
            <dd><?php echo $this->type; ?></dd>
            <dt>Level</dt>
            <dd><?php echo $this->getLevel(); ?></dd>
            <dl>
        <?php
    }
}
