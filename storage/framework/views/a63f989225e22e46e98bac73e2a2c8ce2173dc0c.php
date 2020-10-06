<ul class="list-group shadow my-3">
    <li class="list-group-item d-flex justify-content-between align-items-center border-bottom border-danger">
        Horas à pagar:
        <a  href="#"  class="btn-link text-white active"  data-toggle="modal" data-target="#exampleModal">
            <span class="badge badge-primary badge">
                <?php if(@$totalHoras): ?>
               
                <span class=""><?php echo e($horas->total); ?> h</span>
                <?php else: ?>
                 <span class="">
                    Adicione as horas a pagar...
                </span>                
                <?php endif; ?>

            </span>
        </a>
    </li>
    
    <li class="list-group-item d-flex justify-content-between align-items-center border-info">
        Horas Pagas:
        <span class="badge badge-primary badge">
            <?php echo e($horas->pagas); ?> h
        </span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center border-warning">
        Horas Faltantes:
        <span class="badge badge-primary badge">
             <?php echo e($horas->faltantes); ?> h
            
        </span>
    </li>
</ul>