<?php $__env->startSection('content'); ?>
<div class="container">
    <?php if(auth()->guard()->check()): ?>
    <div class="mb-3 alert alert-success shadow">
        Bem vindo: <b><?php echo e(Auth::user()->name); ?></b>
    </div>
    <?php echo $__env->make('sites.hora-extra.saldo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>





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

                <?php if(!@$totalHoras): ?>
                <form class="form-group" method="POST" action="/he">
                    <?php else: ?>
                    <form class="form-group" method="POST" action="/he/<?php echo e($totalHoras->id); ?>">
                        <?php echo method_field('PUT'); ?>                    
                        <?php endif; ?>
                        <?php echo csrf_field(); ?>
                        <div class="modal-body">
                            <label for="totalHoras">Total de Horas</label>
                            <input placeholder="Quantidade de horas..." id="totalHoras" type="number" class="form-control" value="<?php echo e($horas->total); ?>" name="totalHoras" required="required">
                            <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>"/>
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
        <?php echo $__env->make('sites.hora-extra.accordion', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>




    <?php endif; ?>

    <?php if(auth()->guard()->guest()): ?>
    <a href="/login" class="btn btn-outline-primary">Faça o login para continuar...</a>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>