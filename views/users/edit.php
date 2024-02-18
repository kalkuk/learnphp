<?php include 'views/partials/header.php' ?>

<form action="/admin/users/edit?id=<?=$user->id?>" method="POST">
    <div class="my-3 col-9" >
        <label for="email" class="form-label">Email</label>
        <input type="email" value="<?=$user->email?>" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="my-3 col-9">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    </div>
    <input type="submit" class="btn btn-primary" value="Update">
</form>

<?php include 'views/partials/footer.php' ?>