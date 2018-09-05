<div class="row">
    <div class="col-1">Nome:</div><div class="col-11">{{ $dados->nome }}</div>
    <div class="col-1">E-mail:</div><div class="col-11">{{ $dados->email }}</div>
    <div class="col-1">Telefone:</div><div class="col-5">{{ $dados->telefone }}</div>
    <div class="col-1">Celular:</div><div class="col-5">{{ $dados->celular }}</div>
</div>
<hr>
<a role="button" class="btn btn-primary" href="{{ url($folder . '/' . $dados->id . '/edit') }}" target="_self">Editar</a>
<a role="button" class="btn btn-danger" href="{{ url()->previous() }}" target="_self">Voltar</a>