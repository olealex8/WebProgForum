<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->startSection('EventMaker'); ?>
    <h1>Event Maker</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('EventNameSection'); ?>
    <label>Event name: </label>
    <input type="text" name="eventName">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('CheckboxSection'); ?>
    <label for="Checkbox">
        <input type="checkbox" name="days[]" value="Monday"> Mon
        <input type="checkbox" name="days[]" value="Tuesday"> Tue
        <input type="checkbox" name="days[]" value="Wednesday"> Wed
        <input type="checkbox" name="days[]" value="Thursday"> Thu
        <input type="checkbox" name="days[]" value="Friday"> Fri
        <input type="checkbox" name="days[]" value="Saturday"> Sat
        <input type="checkbox" name="days[]" value="Sunday"> Sun
    </label>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('SubmitButton'); ?>
    <button class="btn btn-light">Submit</button>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('BackButton'); ?>
    <button class="btn btn-light">Back</button>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\USER\WebProgForum\resources\views/index-main.blade.php ENDPATH**/ ?>