<div class="album py-5 bg-light">
    <div class="container">
        <!-- Button trigger modal -->
        


        <div class="row row-cols-4">
            @foreach(range(1,20) as $i)
            <div class="col-md-3 ">
                <div class="card mb-4 shadow-sm">
                    <img class="img-fluid" data-toggle="modal" data-target="#exampleModal" src="https://picsum.photos/200/300?random={{$i}}">
<!--                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">Detalhes</button>-->
                                @include('loja.partes.modal_produtos')
<!--                                <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
                            </div>

                        </div>-->
<!--                    </div>-->
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>