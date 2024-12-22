<?= $this->extend('template') ?>

<?= $this->section('main') ?>

<div class="container">
    <div class="py-5">
        <div class="alert alert-success">
            <strong>Berhasil</strong> Order Anda Akan Segera Di Proses
        </div>
        <div class="mt-5">
            <a href="<?= base_url() ?>" class="btn
                    btn-success">Kembali Berbelanja</a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>