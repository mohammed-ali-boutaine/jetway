<?php include "inc/header.php"; ?>

<?php include "db/db.php"; ?>
<?php 

$message = '';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = $conn->prepare("SELECT email, password FROM signup");
    $result->execute();
    $rows = $result->fetchAll();

    $emailExists = false;
    $passwordMatch = false;

    foreach ($rows as $row) {
        if ($email == $row['email']) {
            $emailExists = true;
            if ($password == $row['password']) {
                $passwordMatch = true;
                // Success: Email and password match
                $message = 'Login successful!';
                break;
            }
        }
    }

    if (!$emailExists) {
        // Email does not exist
        $message = 'Email does not exist';
    } elseif ($emailExists && !$passwordMatch) {
        // Incorrect password
        $message = 'Incorrect password';
    }
}

?>

<section class="center">
    <div class="login container">
        <?php if (!empty($message)) : ?>
            <div class="alert <?php echo ($message === 'Login successful!') ? 'alert-success' : 'alert-danger'; ?>" role="alert">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</section>

<?php include "inc/footer.php"; ?>
