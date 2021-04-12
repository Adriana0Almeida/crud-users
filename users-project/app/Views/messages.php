<?php echo $this->extend('layout/layout'); ?>
<?php echo $this->section('content'); ?>

<div class="container mt-5">
    <div class="alert alert-info">
        <?= $message; ?>
        <p class="mt-3"><?= anchor(base_url(), 'Página Inicial', ['class' => 'btn btn-secondary'])?></p>
    </div>
</div>

<?php echo $this->endSection(); ?>
