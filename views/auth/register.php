<?php include 'views/partials/header.php' ?>

<form action="/register" method="POST">
    <?php if(isset($_SESSION['error'])): ?>
    <div class="alert alert-danger" role="alert">
    <?=$_SESSION['error']?>
    </div>
    <?php endif ?>
    <div class="my-3 col-9" >
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="nimi@domeen.ee" name="email">
    </div>
    <div class="my-3 col-9" >
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="password" name="password">
    </div>
    <div class="my-3 col-9" >
        <label for="password_confirm" class="form-label">Password Confirm</label>
        <input type="password" class="form-control" id="password_confirm" placeholder="password" name="password_confirm">
    </div>
    <input type="submit" class="btn btn-primary" value="Register">
</form>

<?php include 'views/partials/footer.php' ?>