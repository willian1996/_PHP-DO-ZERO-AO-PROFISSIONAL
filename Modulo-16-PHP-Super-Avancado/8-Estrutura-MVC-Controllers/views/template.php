<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu site</title>
</head>
<body>
    <h1>Este é o topo</h1>
    <a href="<?php echo BASE_URL; ?>">Home</a>
    <a href="<?php echo BASE_URL; ?>galeria">Galeria</a>
    <hr>
    
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
    
    
    
    
    
    
    
</body>
</html>
