<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<div id="container">
    <div id="card">
        <h1>Lista de Supports</h1>

        <a id="new-doubt" href="{{ route('supports.create') }}">Nova Dúvida</a>

        <table>
            <thead>
                <th>assunto</th>
                <th>status</th>
                <th>descrição</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($supports as $support)
                    <tr>
                        <td id="sub">{{ $support->subject }}</td>
                        <td id="status">{{ $support->assunto }}</td>
                        <td id="body">{{ $support->body }}</td>
                        <td>
                            <a class="link-up" href="{{ route('supports.show', $support->id) }}">Mais detalhes</a>
                            <hr>
                            <a class="link-up" href="{{ route('supports.edit', $support->id) }}">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>