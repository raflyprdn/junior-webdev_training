<?= $this->extends('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="col">
        <div class="row">
            <canvas id="lineChart" height="400" width="400"></canvas>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>