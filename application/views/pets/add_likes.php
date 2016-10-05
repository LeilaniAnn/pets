<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>
<!--renders the form element & adds CSRF prevention (report errors)-->
<?php echo form_open('pets/add_likes'); ?>
    <input type="submit" name="submit" value="Thumbs Up" />
</form>