<?php include 'views/partials/header.php' ?>
    <table class="table table-striped table-hover">
        <tr>
            <th>Id</th>
            <td><?=$user->id?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?=$user->email?></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><?=$user->password?></td>
        </tr>
    </table>
    <div class="d-grid gap-2 d-md-flex  justify-content-center">
    <a href="/admin/users" class="btn btn-primary my-2">Back</a>
    </div>
<?php include 'views/partials/footer.php' ?>

