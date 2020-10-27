<div class="album py-5 bg-light">
    <div class="container">
        <!-- Button trigger modal -->
        


        <div class="row row-cols-4">
            <?php $__currentLoopData = range(1,20); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 ">
                <div class="card mb-4 shadow-sm">
                    <img class="img-fluid" data-toggle="modal" data-target="#exampleModal" src="https://picsum.photos/200/300?random=<?php echo e($i); ?>">
<!--                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">Detalhes</button>-->
                                <?php echo $__env->make('loja.partes.modal_produtos', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!--                                <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
                            </div>

                        </div>-->
<!--                    </div>-->
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>