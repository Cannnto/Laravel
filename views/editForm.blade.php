<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="{{url('/edit/'.$codigo)}}" method="post">
        @csrf
        <fieldset>
            <div>
                <label for="nome">Nome da imobiliaria:</label>
                <input type="text" name="nome" value="<?=$nome?>"placeholder="<?=$nome?>">
            </div>
            <div>
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" value="<?=$endereco?>"placeholder="<?=$endereco?>">
            </div>
            <div>
                <label for="preco">Preço:</label>
                <input type="number" name="preco" value="<?=$preco?>"placeholder="<?=$preco?>">
            </div>
            <div>
                <label for="venda">Venda ou Aluguel:</label>
                <input type="number" name="venda" value="<?=$venda?>"placeholder="<?=$venda?>">
            </div>
            <input type="submit">
        </fieldset>
    </form>
</body>
</html>