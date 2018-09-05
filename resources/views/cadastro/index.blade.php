<p class="h3">Cadastros</p>
<hr>
<a class="btn btn-sm btn-primary" href="{{ url($folder . '/create') }}" target="_self">Novo</a>
<hr>
<div class="row">

    <table class="table table-hover">

        @foreach($dados as $dado)
            <tr class="">
                <td class="">{{ $dado->nome }}</td>
                <td class="">{{ $dado->email }}</td>
                <td class="">{{ $dado->telefone }}</td>
                <td class="">{{ $dado->celular }}</td>
                <td class="text-right">
                    <a role="button" class="btn btn-sm btn-default" href="{{ url($folder . '/' . $dado->id . '/edit') }}" target="_self"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i></a>
                    <a role="button" class="btn btn-sm btn-default" href="{{ url($folder . '/' . $dado->id) }}" target="_self"><i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="Ver"></i></a>
                    <form style="display:inline;" method="POST" action="{{ url($folder . '/' . $dado->id) }}">
                        @method('DELETE')
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ $dado->id }}">
                        <button type="submit" class="btn btn-link btn-sm btn-default" data-toggle="tooltip" data-placement="top" title="Excluir">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

</div>

{{ $dados->links() }}
