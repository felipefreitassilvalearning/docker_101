<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker 101</title>
</head>
<body>
    <?php
        $result = file_get_contents('http://node-container:9001/products');
        $products = json_decode($result);
    ?>
    <table>
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Criado em</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
                <tr>
                    <td><?php echo $product->name; ?></td>
                    <td><?php echo $product->price; ?></td>
                    <td><?php echo $product->description; ?></td>
                    <td><?php echo $product->created_at; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>