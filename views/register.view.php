<?php require_once "views/partials/header.php"; ?>
  <div class="container-fluid">
    <div class="register" >
        <h3>Sign Up Katarina</h3>
            <form action="/register" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>


                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>

    </div>
  </div>

<?php require_once "views/partials/footer.php"; ?>