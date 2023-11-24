<?php 



$response=$bdd->prepare("SELECT * FROM students WHERE id=:id");
$response->execute([":id"=> $_GET['userId']]);
$user=$response->fetch();
var_dump($user);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthday = $_POST['birthday'];
    $avatar = $_POST['avatar'];



    $updateQuery = "UPDATE students SET name=:name, firstname=:firstname, email=:email, birthday=:birthday, password=:password  WHERE id=:id";
    $updateStatement = $bdd->prepare($updateQuery);
    $updateStatement->execute([
        'id' => $_GET['id'],
        'name' => $name,
        'firstname' => $firstname,
        'email' => $email,
        'birthday' => $birthday,
        'password' => $password,
    ]);
}
?>

    <form method="POST" action="profile-edit.php?userId=<?php echo $user['id']; ?>">
        <input type="hidden" name="userId" value="<?php echo $user['id']; ?>">
        
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" value="<?= $user['name'] ?>"<br>
        <button type="submit">Envoyer</button>
    </form>
