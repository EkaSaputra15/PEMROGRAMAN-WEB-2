<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Tambah Buku</h2>

<div class="w-50">
    <form action="<?= base_url('admin/daftar-buku/tambah')?>" method="POST" 
    enctype="multipart/form-data">
        <div class="mb-3">
            <label for="Judul">Judul Buku</label>
            <input type="text" class="form-control" name="judul" id="judul">
        </div>
        <div class="mb-3">
            <label for="pengarang">Pengarang</label>
            <input type="text" class="form-control" name="pengarang" id="pengarang">
        </div>
        <div class="mb-3">
            <label for="penerbit">Penerbit</label>
            <input type="text" class="form-control" name="penerbit" id="penerbit">
        </div>
        <div class="mb-3">
            <label for="tahun">Tahun</label>
            <input type="text" class="form-control" name="tahun" id="tahun">
        </div>
        <div class="mb-3">
            <label for="cover">Cover</label>
            <input type="file" class="form-control" name="cover" id="cover" class="form-control">
        </div>
        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga">
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/daftar-buku')?>" class="btn
                    btn-success">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
<footer class="bg-success text text-white py-3 text text-center mt-5">
      <div class="container">
        Copyright 2024. Toko Buku Online Kelas 3B EKA_SAPUTRA. All Rights Reserved
      </div>
    </footer>
<?= $this->endSection();?>