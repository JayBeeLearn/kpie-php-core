<?php 
require('partials/head.php');
require('partials/navbar.php')


?>
    <div class="reset">
        <h2 class="title text-center">Reset your password</h2>
        <div class="login_box">
            <div class="login">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">Email <span class="red">*</span></label>
                        <input type="text" name="email" id="email">
                         <div class="text-danger"><?= $errors['user'] ?? '' ?></div>

                    </div>
                    <div class="form-group">
                        <button type="submit">Reset </button>
                    </div>
                </form>
                <hr>
                <div class="register">
                   <p>Sign In instead? <a href="/login">Sign In</a></p> 
                </div>
            
            </div>
       </div>
    </div>
<?php 

require('partials/foot.php');
?>