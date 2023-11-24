
<div class= container>
    <div class="login-card">
        <div class="login-title">Inscription élève</div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="login-display">
                    <div class="login-int-display"><label for="name" class="login-label">Name</label>
                    <input type="text" placeholder="Enter name" name="firstname" class="login-input"></div>
                    <div class="login-int-display"><label for="firstname" class="login-label">first name</label>
                    <input type="text" placeholder="Enter lastname" name="name" class="login-input"></div>
                    <div class="login-int-display"><label for="email" class="login-label">Email</label>
                    <input type="email" name="email" placeholder="Enter email" class="login-input"></div>
                    <div class="login-int-display"><label for="password" class="login-label">Password</label>
                    <input type="password" name="password" placeholder="Enter password" class="login-input"></div>
                    <label for="date">anniversaire</label>
                    <input type="date" name="birthday" id="">
                    <label for="promotion">promo</label>
                    <input type="number" name="promotion_id" id="">
                    <label for="role">role</label>
                    <input type="text" name="role">
                    <label for="aime">aime</label>
                    <input type="text" name="aime" value='0'>
                     <div class="login-int-display"><label for="avatar" class="login-label">Photo de profil</label>
                    <input type="file" name="avatar" id="" class="login-input"></div>
                    <input type="submit" class="login-submit" value ="S'enregistrer">
                </div>
            </form>
        </div>
    </div>