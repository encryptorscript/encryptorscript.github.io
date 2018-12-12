<div class="container mt-5">

    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $data['siswa']['nama']; ?> / <?= $data['siswa']['no']; ?> </h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $data['siswa']['nisn']; ?></h6>
        <p class="card-text"><?= $data['siswa']['tgl']; ?></p>
        <a href="<?= BASEURL; ?>data" class="card-link">Kembali</a>
    </div>
    </div>

</div>