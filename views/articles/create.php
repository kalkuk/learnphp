<?php include 'views/partials/header.php' ?>

<form action="/admin/articles" method="POST">
    <div class="my-3 col-9" >
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Title" name="title">
    </div>
    <div class="my-3 col-9">
        <label for="body" class="form-label">Content</label>
        <textarea class="form-control" id="body" rows="5" placeholder="Write something awesome..." name="body" ></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Create">
</form>

<?php include 'views/partials/footer.php' ?>