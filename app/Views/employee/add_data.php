<?= $this->extend('layout/template.php'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Tambah Data Jamur</h2>
            <form class="form-signin" action="/jamur/save" method="post">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control <?= ($validation->hasError('date')) ? 'is-invalid' : ''; ?>" id="date" name="date" value="<?= old('date'); ?>" autofocus>
                        <div class="invalid-feedback"><?= $validation->getError('date'); ?></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="variance" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('variance')) ? 'is-invalid' : ''; ?>" id="variance" name="variance" value="<?= old('variance'); ?>">
                        <div class="invalid-feedback"><?= $validation->getError('variance'); ?></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="weight" class="col-sm-2 col-form-label">Berat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('weight')) ? 'is-invalid' : ''; ?>" id="weight" name="weight" value="<?= old('weight'); ?>">
                        <div class="invalid-feedback"><?= $validation->getError('weight'); ?></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="location" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('location')) ? 'is-invalid' : ''; ?>" id="location" name="location" value="<?= old('location'); ?>">
                        <div class="invalid-feedback"><?= $validation->getError('location'); ?></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>