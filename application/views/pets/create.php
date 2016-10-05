<h2 class="text-center"><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>
<!--renders the form element & adds CSRF prevention (report errors)-->
<div class="col-md-4"></div>
<div class="col-md-4">
<?php echo form_open('pets/create', array('class' => 'form-group', )); ?>

    <label for="title">Title:</label>
    <input type="input" class="form-control" name="title" /><br />

    <label for="text">Text:</label>
    <textarea class="form-control" name="text"></textarea><br />
    
    <label for="title">Image Url:</label>
    <input type="input" class="form-control" name="image" /><br />
    
    <input type="submit" class="btn btn-primary" name="submit" value="Add your pet" />

</form>
</div>