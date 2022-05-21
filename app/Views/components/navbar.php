<header>
    <a href="<?= route_to('/') ?>">Home</a> |
    <?php if (!session()->get('isLoggedIn')): ?>
    <a href="<?= route_to('login.create') ?>">Login</a> | 
    <a href="<?= route_to('register.create') ?>">Register</a>  
    <?php else: ?>
    <a href="<?= route_to('dashboard') ?>">Dashboard</a>
    <?= form_open(route_to('logout'), ['style' => 'display: inline']) ?>
    <button type="submit">Logout</button>
    <?= form_close() ?> 
    <?php endif ?>
    <hr>
</header>