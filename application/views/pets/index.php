<div class="row">
    <div class="container pet-header">
        <h1 class="text-center"><?php echo $title; ?></h1>
        <br>
        <br>
    </div>
</div>
<div class="row">
    <div class="container">
        <?php foreach ($pets as $pets_item): ?>
        <div class="pet-box col-md-4">
            <img class="img img-thumbnail img-responsive center-block" src="<?php echo $pets_item['image']; ?>" width="250" height="250" />
            <h3 class="text-center"><?php echo $pets_item['title']; ?></h3>
            <p class="text-center"><?php echo $pets_item['text']; ?></p>
            <p class='text-center'>
                <a href="<?php echo site_url('pets/'.$pets_item['slug'].'/edit'); ?>">Edit Pet -</a>
                <a href="<?php echo site_url('pets/'.$pets_item['slug']); ?>">See Pet Page </a>
            </p>
        </div>
        <?php endforeach; ?>
    </div>
</div>
