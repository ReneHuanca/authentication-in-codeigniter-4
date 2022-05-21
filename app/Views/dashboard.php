<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="card p-4">

<h1>Dashboard</h1>
<h3>Id : <?= session('user')->id ?></h3>
<h3>Name : <?= session('user')->name ?></h3>
<h3>Email : <?= session('user')->email ?></h3>
<h3>Is logged in: <?= session()->get('isLoggedIn') ?></h3>
<?= form_open(route_to('logout')) ?>
    <button type="submit" class="btn btn-secondary">Logout</button>
<?= form_close() ?>
</div>
<?= $this->endSection() ?>
