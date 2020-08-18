<?php require_once "views/partials/header.php"; ?>


<div class="container-fluid table">
    <div class="tableTitle">
        <a href="/cargos/create" class="btn btn-info">Add new Post</a>
    </div>
    <div class="row wrapperTable">
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <?php foreach ($cargos as $cargo): ?>
                    <tr>
                        <td><?= $cargo->id ?></td>
                        <td><?= $cargo->type ?></td>
                        <td><a href="/cargos/show?id=<?= $cargo->id ?>" class="btn btn-info">Show</a> <a href="/cargo/edit?id=<?=
                            $cargo->id ?>" class="btn btn-warning">Edit</a> <a href="/cargos/destroy?id=<?=
                            $cargo->id ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<?php require_once "views/partials/user.php";?>
<?php require_once "views/partials/footer.php"; ?>