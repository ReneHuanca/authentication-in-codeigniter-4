<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<h2>Login in</h2>

<?php if (null !== session()->getFlashdata('msg')) : ?>
    <div><?= session()->getFlashdata('msg') ?></div>
<?php endif; ?>

<p>If you ran the migrations. Email: <strong>admin@gmail.com</strong>, password: <strong>admin123</strong> </p>

<?= form_open(route_to('login.store')) ?>
<input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>"> <br>
<?php if (isset($errors)) : ?>
    <div><?= $errors->hasError('email') ? $errors->getError('email') : '' ?></div>
<?php endif; ?>
<br>
<input type="password" name="password" placeholder="Password"> <br>
<?php if (isset($errors)) : ?>
    <div><?= $errors->hasError('password') ? $errors->getError('password') : '' ?></div>
<?php endif; ?>
<br>
<button type="submit" class="btn btn-success">Sign in</button>
<?= form_open() ?>

<?= $this->endSection() ?>