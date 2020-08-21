<?php require_once "views/partials/header.php"; ?>

<div class="container-fluid">
    <form action="/ports" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

<?php require_once "views/partials/footer.php"; ?>