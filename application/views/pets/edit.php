<h2 class="text-center"><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>
<!--renders the form element & adds CSRF prevention (report errors)-->
<div class="col-md-4"></div>
<div class="col-md-4">
<?php echo form_open('pets/edit', array('class' => 'form-group', )); ?>
    <label for="title">Title:</label>
    <input type="input" class="form-control" name="title" value="<?php echo $pets_item['title']; ?>"/><br />

    <label for="text">Text:</label>
    <textarea name="text" class="form-control"><?php echo $pets_item['text']; ?></textarea><br />
    
    <label for="title">Image Url:</label>
    <input type="input" class="form-control" name="image" value="<?php echo $pets_item['image']; ?>" /><br />
    
    <input type="submit" class="btn btn-primary" name="submit" value="Edit Pet" />
</form>
</div>