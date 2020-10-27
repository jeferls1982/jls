@extends('loja.layouts.frente_loja')
@section('content')

<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="/loja">Nome da Empresa</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
            
        </li>
    </ul>
</nav>


<!--<nav class="navbar sticky-top fixed-top navbar-light  shadow bg-light">
    <div>
        <i class="fab fa-whatsapp ml-1"></i>
        <i class="fab fa-facebook-f  ml-3"></i>
        <i class="fab fa-instagram ml-3"></i>
    </div>
    <div class="h4">
        Logo
    </div>
    <div>
        <i class="fas fa-shopping-cart"></i>
        <i class="fas fa-sign-in-alt"></i>
    </div>

</nav>-->




<div class="container-fluid">
    <div class="row">
        @include('loja.partes.left')
        @include('loja.partes.main')


    </div>
</div>


@endsection