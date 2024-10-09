<?php
require('partials/head.php');


?>

<div class="register_background">
    <div class="register_section">
        <div class="nav">
            <div class="logo">
                <img src="../images/logo.svg" alt="logo">
            </div>
            <div class="login">
                <p>Already have an account? <a href="/login">Login</a></p>
            </div>
        </div>

        <h2 class="title">Register New Account</h2>
       <div class="register_box">
            <div class="register">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username">Username <span class="red">*</span></label>
                        <input class="input" type="text" name="username" id="username" 
                        
                        >
                         <div class="text-danger"><?= $errors['username'] ?? '' ?></div>
                    </div>

                     <div class="form-group">
                        <label for="email">Email <span class="red">*</span></label>
                        <input class="input" type="email" name="email" id="email" 
                        
                        >
                         <div class="text-danger"><?= $errors['email'] ?? '' ?></div>

                    </div>

                    <div class="form-group">
                        <label for="password">Password <span class="red">*</span></label>
                        <input class="input" type="password" name="password" id="password" 
                        
                        >
                         <div class="text-danger"><?= $errors['password'] ?? '' ?></div>

                    </div>

                    <div class="form-group">
                        <label for="password_confirm">Password Confirm <span class="red">*</span></label>
                        <input class="input" type="password" name="password_confirm" id="password_confirm" 
                        
                        >
                         <div class="text-danger"><?= $errors['confirm'] ?? '' ?></div>

                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Register" class="button" >
                    </div>
                </form>
                <hr>
                <div class="login">
                   <p>Already have an account? <a href="/login">Login</a></p> 
                </div>
                
            </div>
       </div>
       <p class="text-center">Regulated activities are carried out on behalf of the Capital International Group by its licensed member companies. Full details can be viewed <span class="gold">here</span>.</p>
    </div>

</div>

<?php require('partials/foot.php') ?>