<?php
include 'includes/pokemon-api.php';
include 'includes/PokemonFromApi.Class.php';
global $title;
$title = 'PHP API Example';
include 'templates/header.php';
?>

<h1><?php echo $title; ?></h1>

<?php include 'templates/navigation.php'; ?>

<h2>API Test</h2>
<?php if ($pokemons = retrievePokemon(25, 0)) : ?>
    <ol>
        <?php foreach ($pokemons as $pokemon) : ?>
            <?php $currentPokemon = new PokemonFromApi($pokemon->name); ?>
            <li>
                <?php $currentPokemon->output(); ?>
            </li>
        <?php endforeach; ?>
    </ol>
<?php endif; ?>



<?php include 'templates/footer.php';
