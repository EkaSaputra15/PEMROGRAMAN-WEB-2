<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Transaksi</h2>

<div class="">
    <table class="table table-stripped">
        <thead>
            <tr>
                <th scope="cul">#</th>
                <th scope="cul">nama pelanggan</th>
                <th scope="cul">tanggal</th>
                <th scope="cul">total</th>
                <th scope="cul">status</th>
                <th scope="cul">aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Eka Saputra</td>
                <td>21 Desember 2024 15.41 WIB</td>
                <td>Rp.80.000</td>
                <td>
                    <span class="badge bg-warning">Pending</span>
                </td>
                <td>
                    <a href="<?= base_url('admin/transaksi/ubah-status')?>" class="btn
                    btn-success">Ubah Status</a>
                    <a href="<?= base_url('admin/transaksi/hapus')?>" class="btn
                    btn-danger">Hapus</a>
                </td>
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