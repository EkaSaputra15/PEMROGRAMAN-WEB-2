<?= $this->extend('template') ?>

<?= $this->section('main') ?>

<div class="container">
    <h2>REVIEW ORDER</h2>
    <hr />
    <h5>BUMI MANUSIA</h5>
    <h5>Rp80,000</h5>

    <h2 class="mt-3">Alamat Pengiriman</h2>
    <hr />
    <h5>Jl. Muaro Jambi - Muaro Bulian Km 16, Sungai Duren.</h5>

    <h2 class="mt-3">METODE BAYAR</h2>
    <hr />
    <h5>Transfer Bank</h5>
    <h5>BRI Eka Saputra</h5>
    <h5>Rek. 01872176718817</h5>

    <div class="mt-4">
  <form action="<?= base_url('submit')?>" method="POST">
<button type="submit" class="badge text-bg-warning mb-5">Submit Order</button>
</form>
</div>

</div>
<?= $this->endSection()?>