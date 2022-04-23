<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <header>
            <h1 class="text-center mt-5 mb-5">Contact Info</h1>
        </header>

        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-8">
                <b>Nome: </b><p>{{ $contact->name }}</p>
                <b>Contato: </b><p>{{ $contact->contact }}</p>
                <b>Email: </b><p>{{ $contact->email }}</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8">
                <div class="d-grid gap-2 d-md-block">
                    <a href="{{ route('contacts.edit', ['contact' => $contact->id]) }}" class="btn-info btn btn-block">Editar</a>
                    <form action="{{ route('contacts.destroy', ['contact' => $contact->id]) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-block" type="submit">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
