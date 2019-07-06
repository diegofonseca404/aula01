
<h1>Lista de clientes</h1>

<ul>
    <form action="/clients" method="post">
        @csrf
        <input name="nome" placeholder="Nome">
        <input name="cpf" placeholder="CPF">
        <button type="submit">Salvar</button>
    </form>
    @foreach($clients as $client)
        <li>{{ $client->nome }} &nbsp;&nbsp; 
            <form action="/clients/{{$client->id}}" method="post">
                @method('DELETE')                
                <button type="submit">Deletar</button>
            </form>
            &nbsp;&nbsp;
            <a href="/clients/{{$client->id}}/edit">Editar</a>
            &nbsp;&nbsp;
            <a href="/clients/{{$client->id}}/show">Exibir</a>
        </li>
    @endforeach

</ul>