<table class="table table-hover table-light table-striped">
    <thead>
        <tr>
            <th scope="col">Data</th>
            <th scope="col">Total de horas pagas</th>

        </tr>
    </thead>
    <tbody>
        @forelse($relatorios as $horaPaga)
        <tr>
            <td>{{date("d/m/Y", strtotime($horaPaga->data))}} </th>
            <td>{{date("H:i", strtotime($horaPaga->total))}} h</td>

        </tr>
        @empty
        Nenhuma Hora Paga
        @endforelse
    </tbody>
</table>