<?php
//includes
require './incl/header.php';
?>
<section>
    <h2>Sign Up:</h2>
    <form ACTION="admin.php" method="POST">
        <label class="name">Name:</label>
        <input type="text" class="name" placeholder="Full Name Here" required>
        <label class="email">Email:</label>
        <input type="email" class="email" placeholder="Name@email.web" required>
        <label class="password">Password:</label>
        <input type="password" class="password" placeholder="Your Password Here" required>
        <label class="password">Confirm Password:</label>
        <input type="password" class="password" placeholder="Please Confirm Your Password Here" required>
        <button type="button" class="btn btn-primary">Signup</button>
    </form>
</section>
<section>
    <h3>Log In:</h3>
    <form>
        <label class="name">Name:</label>
        <input type="text" class="name" placeholder="Full Name Here" required>
        <label class="password">Password:</label>
        <input type="password" class="password" placeholder="Your Password Here" required>
        <button class="btn btn-success">Log In</button>
    </form>
</section>
<?php
//includes
require './incl/footer.php'
?>