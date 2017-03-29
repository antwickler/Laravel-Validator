<?php $__env->startSection('title','Calculated | Antwickler'); ?>

<?php $__env->startSection('content'); ?>
    <h1 align="center">
        Pythagorean Calculated <br />
    </h1>
    <h2 align="center">Pythagorean equation: &nbsp;a<sup>2</sup> + b<sup>2</sup> = c<sup>2</sup></h2>

    <center>
      <table width="500" border="0" align="center">
        <tbody>
          <tr>
            <td><form method="post" action="/solve">
              <fieldset>
                  <p align="center">
                    <br><br>
                    Enter value a: &nbsp;<input type="text" name="valueA"><br><br>
                    Enter value b: &nbsp;<input type="text" name="valueB"><br><br>
                    <p align="center"><input type="submit" value=" Calculated " style="width:200px;height:40px"></p>
                  </p>  
              </fieldset>
            </form></td>
          </tr>
        </tbody>
      </table>
    </center>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>