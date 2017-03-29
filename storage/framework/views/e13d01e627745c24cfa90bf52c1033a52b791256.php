<?php $__env->startSection('title','Home | Antwickler'); ?>

<?php $__env->startSection('content'); ?>
    <h1 align="center"><b>
        Please Sign Up ...<br /><br />  
    </b></h1>

    <?php if(count($errors) > 0): ?>
    <div class="alert alert-warning">
        <ul><b>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li> <?php echo e($error); ?> </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </b></ul>
    </div><br>
  	<?php endif; ?>

    <center>
      <table width="380" border="0" align="center">
        <tbody>
          <tr>
            <td>
            
              <form method="post" action="signup">
                    <p align="left"><b>
                      <label>First Name &nbsp;</label>
        					  	<input type="text" name="firstName" value="Enter First Name..."><br><br>
        					  	<label>Last Name &nbsp;</label>
        					  	<input type="text" name="lastName" value="Enter Last Name..."><br><br>
        					  	<label>Screen Name &nbsp;</label>
        					  	<input type="text" name="screenName" value="Enter Screen Name..."><br><br>
        					  	<label>Date of Birth &nbsp;</label>
        					  	<input type="date" name="birthday"><br><br>
        					  	<label>Gender &nbsp;</label>
        					  	<input type="text" name="gender" value="Male or Female"><br><br>
                      <label>E-mail &nbsp;</label>
        					  	<input type="email" name="email" value="Enter E-mail..."><br><br>
        					  	<label>Password &nbsp;</label>
        					  	<input type="password" name="password" value="MyPassword"><br><br>
        					  	<label>Confirm Password &nbsp;</label>
        					  	<input type="password" name="password_confirmation" value="MyPassword"><br><br>
        					  	<?php echo e(csrf_field()); ?>

                    </b></p>  
                    <p align="center">
                    	<button type="submit"><b>Sign Up</b></button>
                    </p>
              </form>

            </td>
          </tr>
        </tbody>
      </table>
    </center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>