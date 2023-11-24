
<div class= container>
    <div class="login-card">
        <div class="login-title">Inscription élève</div>
            <form action="/controllers/register-controller.php" method="post" enctype="multipart/form-data">
                <div class="login-display">
                    <div class="login-int-display"><label for="name" class="login-label">Name</label>
                    <input type="text" placeholder="Enter name" name="name" class="login-input"></div>
                    <div class="login-int-display"><label for="firstname" class="login-label">Last name</label>
                    <input type="text" placeholder="Enter firstname" name="firstname" class="login-input"></div>
                    <div class="login-int-display"><label for="email" class="login-label">Email</label>
                    <input type="email" name="email" placeholder="Enter email" class="login-input"></div>
                    <div class="login-int-display"><label for="password" class="login-label">Password</label>
                    <input type="password" name="password" placeholder="Enter password" class="login-input"></div>
                    <div class="login-int-display"><label for="avatar" class="login-label">Photo de profil</label>
                    <input type="file" name="avatar" id="" class="login-input"></div>
                    <input type="submit" class="login-submit" value ="S'enregistrer">
                </div>
            </form>
        </div>
    </div>
</div>
