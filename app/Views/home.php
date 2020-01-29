<?php view('layouts/header'); ?>
<div class="page-header text-uppercase d-flex justify-content-center">
    <h2>Your App</h2>
</div>
<div class="d-flex justify-content-center">
<?php if (auth()->check()): ?>
    <div class="p-2">Hello, <?php echo auth()->user()->name() ?>! Welcome to <?php echo config('app.name'); ?>.</div>
    <form action="/auth/logout" method="post">
        <button class='btn btn-info' type="submit">Logout</button>
    </form>
<?php else: ?>
    <div class="p-2">
        <a href="/auth/login" class='btn btn-success mx-1 my-2'>Sign In</a>
    </div>
    <div class="p-2">
    <a href="/register" class='btn btn-warning mx-1 my-2'>Register</a>
    </div>
<?php endif; ?>
</div>
<?php view('layouts/footer'); ?>
