<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Daftar Buku</h2>
<?php if(session('sukses')):?>
<div class="mb3">
    <div class="alert alert-success">
        <strong>Berhasil</strong> <?php session('sukses');?>
    </div>
</div>
<?php endif;?>

<?php if(session('error')):?>
<div class="mb3">
    <div class="alert alert-success">
        <strong>Gagal!</strong> <?php session('error');?>
    </div>
</div>
<?php endif;?>


<div class="">
    <a href="<?= base_url('admin/daftar-buku/tambah')?>" class="btn 
    btn-primary">Tambah Buku</a>
</div>
<div class="mb-5">
    <table class="table table-stripped">
        <head>
            <tr>
                <th scope="col">#</th>
                <th scope="col">judul buku</th>
                <th scope="col">pengarang</th>
                <th scope="col">penerbit</th>
                <th scope="col">tahun</th>
                <th scope="col">cover</th>
                <th scope="col">harga</th>
                <th scope="col">aksi</th>
            </tr>
            <thead>
                <tbody>
                    <?php foreach($books as $buku): ?>
                    <tr>
                        <th scope="row"><?= $buku['id_buku']?></th>
                        <td><?= $buku['judul']?></td>
                        <td><?= $buku['pengarang']?></td>
                        <td><?= $buku['penerbit']?></td>
                        <td><?= $buku['tahun']?></td>
                        <td>
                            <img src="<?= base_url('file-image/') . $buku['cover']?>" alt="" style="width: 150px
                            ; height:auto;">
                        </td>
                        <td>
                             <?= $buku['harga']?>
                        </td>
                        <td>
                            <a href="<?= base_url('admin/daftar-buku/edit') .  $buku['id_buku']?>" class="btn
                            btn-success">Edit</a>
                            <a href="<?= base_url('admin/daftar-buku/hapus') .  $buku['id_buku']?>" class="btn
                            btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </thead>
        </head>
    </table>
</div>
<footer class="bg-success text text-white py-3 text text-center mt-5">
      <div class="container">
        Copyright 2024. Toko Buku Online Kelas 3B EKA_SAPUTRA. All Rights Reserved
      </div>
    </footer>
<?= $this->endSection();?>