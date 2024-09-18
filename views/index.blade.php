<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *
        {   margin: 0;
            border: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body
        {   display: flex;
            flex-direction: column;
            align-items:center;
            justify-content:center;
            height:100vh;
            width:100vw;
        }
        .container
        {   display:flex;
            justify-content:space-around;
            width: 100%;
            height:50vh;
        }
        .bl1
        {   display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;


        }
        fieldset
        {   border: 0.2vw solid black;
            border-radius:1vw;
            display: flex;
            flex-direction: column;
            width: 30vw;
            padding:1vw;
            gap:1vw;
            margin-bottom:2vw;        
        }
        fieldset div
        {   display:flex;
            width:100%;
            margin-left:10%;       
        }
        input[type = text], input[type = number]
        {   border: 0.1vw solid black;   
            margin-left:1vw;               
        }
        .message
        {   position:absolute;
            left:50vw;
            top:5vw;
        }
        table
        {   border:0.2vw solid black;
            border-radius:1vw;
        }
        td,th
        {   text-align:center;
            border-top: 0.1vw solid black;

        }
    </style>
</head>
<body>
    <div class="container">
        <div class="bl1">
            <form action="/inserir" method="post">
                @csrf
                <fieldset>
                    <div>
                        <label for="nome">Nome da imobiliaria:</label>
                        <input type="text" name="nome">
                    </div>
                    <div>
                        <label for="endereco">Endereço:</label>
                        <input type="text" name="endereco">
                    </div>
                    <div>
                        <label for="preco">Preço:</label>
                        <input type="number" name="preco">
                    </div>
                    <div>
                        <label for="venda">Venda ou Aluguel:</label>
                        <input type="number" name="venda">
                    </div>
                    <input type="submit" value='Enviar'>
                </fieldset>
            </form>
            <form action="search" method="get">
                <label for="search">Search</label>
                <input type="text" name='search'>
                <input type="submit" value='Enviar'>
            </form>
            <form action="/" method="get">
                <label for="">Mostrar Todos</label>
                <input type="submit" value='Enviar'>
            </form>

            @if(session()->has('enviado'))
                <div class="message">{{session('enviado')}}</div>
            @endif
        </div>
        <table>
            <tr>
                <th>código</th>
                <th>nome</th>
                <th>endereço</th>
                <th>preço</th>
                <th>venda ou aluguel</th>
            </tr>

            @foreach($banco as $item)
                <tr>
                    <td>{{$item->codigo}}</td>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->endereco}}</td>
                    <td>{{$item->preco}}</td>
                    <td>{{$item->venda}}</td>
                    <td><button><a href="{{url('/delete/'.$item->codigo)}}">delete</a></button></td>
                    <td><button><a href="{{url('/edit/'.$item->codigo)}}">edit</a></button></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>