<?php


require('partials/head.php');
   


?>

<div class="background">
    <div class="login_section">
        <div class="nav">
            <div class="logo">
                <img src="../images/logo.svg" alt="logo">
            </div>
            <div class="register">
                <p>Don't have an account? <a href="/register">Register</a></p>
            </div>
        </div>

        <h2 class="title">Welcome Back</h2>
       <div class="login_box">
            <div class="login">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username">Username <span class="red">*</span></label>
                        <input type="text" name="username" id="username">
                         <div class="text-danger"><?= $errors['user'] ?? '' ?></div>

                    </div>

                    <div class="form-group">
                        <label for="password">Password <span class="red">*</span></label>
                        <input type="password" name="password" id="password">
                         <div class="text-danger"><?= $errors['pass'] ?? '' ?></div>

                    </div>

                    <div class="form-group">
                        <button type="submit">Sign In </button>
                    </div>
                </form>
                <hr>
                <div class="register">
                   <p>Don't have an account? <a href="/register">Register</a></p> 
                </div>
                <div class="forgotten">
                    <a href="/forgot_password">Forgotten Password?</a>
                </div>
            </div>
       </div>
       <p class="text-center">Regulated activities are carried out on behalf of the Capital International Group by its licensed member companies. Full details can be viewed <span class="gold">here</span>.</p>
    </div>

</div>

<?php require('partials/foot.php') ?>