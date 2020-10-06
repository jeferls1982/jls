<?php $__env->startSection('content'); ?>
<div class="container">
    <app-component></app-component>
    <router-view></router-view>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>