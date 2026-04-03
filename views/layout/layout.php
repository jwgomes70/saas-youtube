<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link href="/lib/estilos.css" rel="stylesheet">

        <title>SaaS ERP</title>
    </head>

    <body class="d-flex flex-column min-vh-100">
        <?php require __DIR__ . '/cabec.php'; ?>

        <main class="flex-grow-1 container py-4">
            <?php require $view; ?>
        </main>

        <?php require __DIR__ . '/rodape.php'; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <script src="/lib/funcoes.js"></script>
    </body>
</html>