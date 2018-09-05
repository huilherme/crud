
<form method="POST" action="{{ url($folder . '/' . $dados->id ) }}">
    @method('PUT')
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label for="nome">Nome*</label>
        <input class="form-control" type="text" name="nome" id="nome" value="{{ $dados->nome }}" required>
    </div>

    <div class="form-group">
        <label for="email">E-mail*</label>
        <input class="form-control" type="email" name="email" id="email" value="{{ $dados->email }}" required>
    </div>

    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input class="form-control mask-telefone" type="text" name="telefone" id="telefone" value="{{ $dados->telefone }}">
    </div>

    <div class="form-group">
        <label for="celular">Celular</label>
        <input class="form-control mask-telefone" type="text" name="celular" id="celular" value="{{ $dados->celular }}">
    </div>

    <div class="clearfix"></div>
    <hr>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Salvar</button>
        <a role="button" class="btn btn-danger" href="{{ url()->previous() }}" target="_self">Cancelar</a>
    </div>
    <div class="clearfix"></div>
</form>