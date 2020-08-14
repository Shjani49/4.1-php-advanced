<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>React Example</title>

<!-- Load React. -->
  <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
  <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

<!-- Load JSX Transformer. -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.13.3/JSXTransformer.js"></script>

<!-- React script(s) -->
<script type ="text/jsx" src ="js/react-scripts.js" defer></script>

</head>
<body>
    <h1>React Example</h1>
    <?php include 'templates/navigation.php';?>
    <main id ="root"></main>

</body>
</html>
