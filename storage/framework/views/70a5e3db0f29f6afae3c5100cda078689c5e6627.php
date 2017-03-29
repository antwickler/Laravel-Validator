<?php $__env->startSection('title','Contact Me | Antwickler'); ?>

<?php $__env->startSection('content'); ?>
    <p align="center"><img src="ant.png" height="250"></p>
    <article class="container">
        <h1 align="center"><b>You can contact me at ...</b></h1>
    </article>

    <div class="container">
            <h4 align="center">
                <a href="https://www.facebook.com/Ratchawangmueang" target="_blank"><img src="facebook-icon.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://www.instagram.com/antwickler/" target="_blank"><img src="instagram-icon.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://www.youtube.com/channel/UCK24oCSsHhsRnceFYzhGLig" target="_blank"><img src="youtube-icon.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="mailto:weerasak.ratchawangmueang@gmail.com"><img src="email-icon.png"></a><br><br><br>
            </h4>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>