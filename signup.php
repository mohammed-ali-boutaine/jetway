<?php include "inc/header.php"; ?>

<?php include "db/db.php"; ?>
<?php 

$success = false;



if( isset($_POST['fullname']) && $_POST['fullname'] !== ''){
    $fullname=$_POST["fullname"] ;
    $birthday = $_POST["birthday"];
    
    $email = $_POST["email"];
    $password=$_POST["password"];

    $stmt = $conn -> prepare("INSERT INTO signup (fullname, birthday, email, password)
    VALUES (?,?,?,?);");


if ($stmt->execute([$fullname, $birthday, $email, $password])) {
    $success = true; }

}

?>

<section class="center">
    <div class="login container">

    <?php if ($success) : ?>
        <div class="alert alert-success" role="alert">
            Data added successfully!
        </div>
        <?php endif; ?>


        <form method="post" action="signup.php">
            <div class="form-group">
                <label for="fullname">Prenom et Nom</label>
                <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Prenom et Nom" required>
            </div>

            <div class="form-group">
                <label for="date">Date de Naissance</label>
                <input type="date" name="birthday" class="form-control" id="date" placeholder="Password" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="password2">Mot de Passe</label>
                <input type="password" name="password" class="form-control" id="password2" placeholder="Password" required>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Répéter le Mot de Passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
            </div>

            <button type="submit" class="btn">Submit</button>
            <button type="reset" class="btn">Reset</button>
        </form>
    </div>
</section>
<script>

</script>

<?php include "inc/footer.php"; ?>
