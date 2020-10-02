@extends('layouts.app')

@section('content')
<div class="container">
    @auth
    <div class="mb-3 alert alert-success shadow">
        Bem vindo: <b>{{ Auth::user()->name }}</b>
    </div>
    @include('sites.hora-extra.saldo')





    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="addTotalHoras" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTotalHoras">Adicionar Total de Horas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @if(!@$totalHoras)
                <form class="form-group" method="POST" action="/he">
                    @else
                    <form class="form-group" method="POST" action="/he/{{ $totalHoras->id }}">
                        @method('PUT')                    
                        @endif
                        @csrf
                        <div class="modal-body">
                            <label for="totalHoras">Total de Horas</label>
                            <input placeholder="Quantidade de horas..." id="totalHoras" type="number" class="form-control" value="{{$horas->total}}" name="totalHoras" required="required">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"/>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <div class="card shadow">
        @include('sites.hora-extra.accordion')
    </div>




    @endauth

    @guest
    <a href="/login" class="btn btn-outline-primary">Faça o login para continuar...</a>
    @endguest
</div>
@endsection