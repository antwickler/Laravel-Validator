<?php $__env->startSection('title','Contact Me | Antwickler'); ?>

<?php $__env->startSection('content'); ?>
    
    <article class="container">
        <h1 align="center"><b>Success!</b></h1><br>
        <p align="center"><img src="success.png" height="300"><br>
    </article>

    <div class="container">
            <h3 align="center">
                <b>You have successfully signd up as a user.</b>
            </h3>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>