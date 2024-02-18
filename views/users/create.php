<?php include 'views/partials/header.php' ?>

<form action="/admin/users" method="POST">
    <div class="my-3 col-9" >
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="email" name="email">
    </div>
    <div class="my-3 col-9">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="password" name="password" >
    </div>
    <input type="submit" class="btn btn-primary" value="Create">
</form>

<?php include 'views/partials/footer.php' ?>