<table class="table table-hover table-light table-striped">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Data</th>
            <th scope="col">Total de horas pagas</th>


        </tr>
    </thead>
    <tbody>
        @forelse($relatorios as $horaPaga)
        <tr>
            <td>
                <a href="/he/delete/{{$horaPaga->id}}" type="submit" class="btn btn-sm btn-outline-danger" title="Excluir">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                    </svg>
                </a>
            </td>
            <td>{{date("d/m/Y", strtotime($horaPaga->data))}} </th>
                <td class="justify-content-center">{{date("H:i", strtotime($horaPaga->total))}} h</td>


        </tr>
        @empty
        Nenhuma Hora Paga
        @endforelse
    </tbody>
</table>