<ul class="list-group shadow my-3">
    <li class="list-group-item d-flex justify-content-between align-items-center border-bottom border-danger">
        Horas à pagar:
        <a  href="#" class="btn-link text-white"  data-toggle="modal" data-target="#exampleModal">
            <span class="badge badge-primary badge">
                @if(@$horas)
                <span class="">{{$horas->total}} h</span>
                @else
                <span class="">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    Qtd Horas
                </span>
                @endif

            </span>
        </a>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center border-info">
        Horas Pagas:
        <span class="badge badge-primary badge">
            {{$horas->pagas}} h
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center border-warning">
        Horas Faltantes:
        <span class="badge badge-primary badge">
             {{$horas->faltantes}} h
            
        </span>
    </li>
</ul>