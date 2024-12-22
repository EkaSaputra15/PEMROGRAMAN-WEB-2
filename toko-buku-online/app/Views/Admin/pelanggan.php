<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Pelanggan</h2>
<div class="mb-5">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nama</th>
                <th scope="col">no hp</th>
                <th scope="col">alamat</th>
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <th scope="row">Eka Saputra</th>
                <th scope="row">085341676260</th>
                <th scope="row">Simbur Naik</th>
                <th scope="row">
                    <a href="<?= base_url('admin/pelanggan/hapus')?>" class="btn 
                    btn-danger">Hapus</a>
                </th>
            </tr>
        </tbody>
    </table>
</div>
<footer class="bg-success text text-white py-3 text text-center mt-5">
      <div class="container">
        Copyright 2024. Toko Buku Online Kelas 3B EKA_SAPUTRA. All Rights Reserved
      </div>
    </footer>
<?= $this->endSection();?>