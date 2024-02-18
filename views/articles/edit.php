<?php include 'views/partials/header.php' ?>

<form action="/admin/articles/edit?id=<?=$article->id?>" method="POST">
    <div class="my-3 col-9" >
        <label for="title" class="form-label">Title</label>
        <input type="text" value="<?=$article->title?>" class="form-control" id="title" placeholder="Title" name="title">
    </div>
    <div class="my-3 col-9">
        <label for="body" class="form-label">Content</label>
        <textarea class="form-control" id="body" rows="5" placeholder="Write something awesome..." name="body" ><?=$article->body?></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Update">
</form>

<?php include 'views/partials/footer.php' ?>