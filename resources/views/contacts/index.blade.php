<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contatos</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="container-fluid">
        <header>
            <h1 class="text-center mt-5 mb-5">Contatos</h1>
        </header>
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-8">
                <a class="btn btn-primary" href="/contacts/create">Adicionar contato</a>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $contact)
                        <tr>
                            <td><a href="{{ route('contacts.show', ['contact' => $contact->id]) }}">{{ $contact->name }}</a></td>
                            <td><a href="{{ route('contacts.edit', ['contact' => $contact->id]) }}" class="btn btn-info text-white">Editar</a></td>
                            <td>
                                <form action="{{ route('contacts.destroy', ['contact' => $contact->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Excluir</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
