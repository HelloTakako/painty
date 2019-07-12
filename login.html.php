<div class="container top">
    <h1 class="display-1 text-white">Painty</h1>
    <p class="lead text-white">
        Where you can expand your creativity.
    </p>
    <div class="login-box">
        <div class="row">
            <!-- Sign In Form -->
            <div class="col-md-6 sign-in">
                <h2>Sign In</h2>
                <form action="./includes/signin.php" method="post">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="signin-submit">Sign In</button>
                </form>
            </div>
            <!-- Sign Up Form -->
            <div class="col-md-6 sign-up">
                <h2>Sign Up</h2>
                <form action="./includes/signup.php" method="post">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="signup-submit">Sign Up</button>
                </form>
            </div>
        </div>
    </div>


</div>