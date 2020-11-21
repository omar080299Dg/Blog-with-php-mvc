<div class="container">
    <a href="<?= ROOT_URL ?>shares/add" class="btn btn-success">add </a>
    <?php foreach($viewmodel as $item) : ?>
    <div class="well">
        <h3><?= $item['title']?></h3>
    </div>
    <?php endforeach; ?>
    
</div>