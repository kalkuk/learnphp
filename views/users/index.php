<?php include 'views/partials/header.php' ?>
   
    <a href="/admin/users/new" class="btn btn-primary my-2">New User</a>
    <table class="table table-striped table-hover">
        <thead>
            <th>Id</th>
            <th>Email</th>
            <th class="text-end">Actions</th>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?=$user->id?></td>
                <td><?=$user->email?></td>
                <td class="text-end">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-info" href="/admin/users/show?id=<?=$user->id?>">View</a>
                    <a class="btn btn-warning"href="/admin/users/edit?id=<?=$user->id?>">Edit</a>
                    <a class="btn btn-danger"href="/admin/users/delete?id=<?=$user->id?>">Delete</a>
                </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php include 'views/partials/footer.php' ?>