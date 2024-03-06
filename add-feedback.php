

<?php include "inc/header.php"; ?>

<?php include "db/db.php"; ?>
<?php 

$success = false;
$go = false;



if( isset($_POST['email']) && $_POST['email'] !== ''){
$go=true;
    $name=$_POST["name"] ;
    $email = $_POST["email"];
    $message = $_POST["message"];


    $stmt = $conn -> prepare("INSERT INTO feedback (name,email,message)
    VALUES (?,?,?);");


if ($stmt->execute([$name, $email, $message])) {
    $success = true; }

}

?>


<div class="login container">
<?php if ($success) : ?>
        <div class="alert alert-success" role="alert">
            Data added successfully!
        </div>
        <?php endif; ?>
        <?php if (!$success && $go) : ?>
        <div class="alert alert-danger" role="alert">
            Eroor
        </div>
        <?php endif; ?>
    <form action="add-feedback.php" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Prenom" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
        </div>

        <div class="form-outline">
            <label class="form-label" for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="8" placeholder="Message" required></textarea>
        </div>

        <button type="submit" class="btn">Submit</button>
        <button type="reset" class="btn">Reset</button>
    </form>
</div>

<?php include "inc/footer.php"; ?>
