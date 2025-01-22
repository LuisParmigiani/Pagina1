<?php 
require __DIR__ . '/vendor/autoload.php';


$access_token = 'APP_USR-8105227905238325-012014-aaf69464d89ba35bfa63136fba4cae19-386912703';
MercadoPago\SDK::setAccessToken($access_token);

$preference = new MercadoPago\Preference();

$preference->back_urls = array(
    "success" => "https://tusitio.com/correcto.php",
    "failure" => "https://tusitio.com/falla.php",
    "pending" => "https://tusitio.com/esperando.php"
);

$item = new MercadoPago\Item();
$item->title = 'nombre';
$item->quantity = 1;
$item->unit_price = 60;

$preference->items = [$item];
$preference->save();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pag</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Mi tienda</h1>
    </header>

    <div id="wallet_container">Cargando Mercado Pago...</div>

    <footer></footer>

    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        const mp = new MercadoPago('APP_USR-8105227905238325-012014-aaf69464d89ba35bfa63136fba4cae19-386912703');
        
        mp.bricks().create("wallet", "wallet_container", {
            initialization: {
                preferenceId: "<?php echo $preference->id; ?>",
            },
            customization: {
                texts: {
                    valueProp: 'smart_option',
                },
            },
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
