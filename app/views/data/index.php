<div class="jumbotron jumbotron-fluid">
  <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="text-center"> Data Siswa </h3>
                <br>
                
                <ul class="list-group">
                    <?php foreach ($data['sis'] as $sis) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $sis['nama']; ?>
                        <a href="<?= BASEURL; ?>data/detail/<?= $sis['id']; ?>" class="badge badge-info"> Detail Siswa </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
                

            </div>
        </div>
  </div>
</div>