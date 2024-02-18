<?php include 'views/partials/header.php' ?>
    <h1>Articles</h1> 
    <a href="/admin/articles/new" class="btn btn-primary">New Article</a>
    <table class="table table-striped table-hover">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th class="text-end">Actions</th>
        </thead>
        <tbody>
            <?php foreach($articles as $article): ?>
            <tr>
                <td><?=$article->id?></td>
                <td><?=$article->title?></td>
                <td class="text-end">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-info" href="/admin/articles/show?id=<?=$article->id?>">View</a>
                    <a class="btn btn-warning"href="/admin/articles/edit?id=<?=$article->id?>">Edit</a>
                    <a class="btn btn-danger"href="/admin/articles/delete?id=<?=$article->id?>">Delete</a>
                </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php include 'views/partials/footer.php' ?>