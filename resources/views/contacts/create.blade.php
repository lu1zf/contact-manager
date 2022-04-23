<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar contato</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-fluid">
        <h1 class="mt-5 mb-5 text-center">Adicionar contato</h1>

        <div class="row justify-content-center mb-5">
          <div class="col-12 col-md-8">
            <form action={{ route('contacts.store') }} method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input class="form-control" name="name" id="name" value="{{ old('name') }}" />
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Contato</label>
                    <input type="text" class="form-control" name="contact" id="contact" value="{{ old('contact') }}" >
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
          </div>
        </div>
      </div>
</body>
</html>
