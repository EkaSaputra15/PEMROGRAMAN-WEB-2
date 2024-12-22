<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Dashboard</h2>
<div class="row mb-5">
    <div class="col-8">
        <div class="rounded bg-success-subtle p-5">
            <h5>Total Pendapatan</h5>
            <h3>Rp.620.000.000</h3>
        </div>
    </div>
    <div class="col-4">
        <div class="rounded bg-secondary-subtle p-5">
            <h5>Total Transaksi</h5>
            <h3>320</h3>
        </div>
    </div>
</div>
<footer class="bg-success text text-white py-3 text text-center mt-5">
      <div class="container">
        Copyright 2024. Toko Buku Online Kelas 3B EKA_SAPUTRA. All Rights Reserved
      </div>
    </footer>
<?= $this->endSection();?>