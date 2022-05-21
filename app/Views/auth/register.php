<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<h2>Register</h2>

<?= form_open(route_to('register.store')) ?>
<input type="text" name="name" placeholder="Name" value="<?= set_value('name') ?>"> <br>
<?php if (isset($errors)) : ?>
    <div><?= $errors->hasError('name') ? $errors->getError('name') : '' ?></div>
<?php endif; ?>

<input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>"> <br>
<?php if (isset($errors)) : ?>
    <div><?= $errors->hasError('email') ? $errors->getError('email') : '' ?></div>
<?php endif; ?>

<input type="password" name="password" placeholder="Password"> <br>
<?php if (isset($errors)) : ?>
    <div><?= $errors->hasError('password') ? $errors->getError('password') : '' ?></div>
<?php endif; ?>

<input type="password" name="confirmpassword" placeholder="Confirm Password"> <br>
<?php if (isset($errors)) : ?>
    <div><?= $errors->hasError('confirmpassoword') ? $errors->getError('confirmpassword') : '' ?></div>
<?php endif; ?>

<button type="submit">Sign up</button>
<?= form_close() ?>

<?= $this->endSection() ?>