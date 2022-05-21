<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<h1>Dashboard</h1>
<h3>Id : <?= session('user')->id ?></h3>
<h3>Name : <?= session('user')->name ?></h3>
<h3>Email : <?= session('user')->email ?></h3>
<h3>Is logged in: <?= session()->get('isLoggedIn') ?></h3>
<?= $this->endSection() ?>