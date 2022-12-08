<?php
require './incl/header.php';
//includes
include './incl/database.php';
$userObj = new database();
//new database and delete functions
if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $userObj->deleteRecord($deleteId);
}
?>
<h1>Current users</h1>
<table class="table table-primary">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
<?php
$users = $usersObj->displayData();
foreach ($users as $users) {
//accessing users tables to add or delete data
?>
    <tr>
        <td><?php echo $users['id'] ?></td>
        <td><?php echo $users['name'] ?></td>
        <td><?php echo $users['email'] ?></td>
        <td>
            <button class="btn btn-danger"><a href="home.php?deleteId=<?php echo $users['id'] ?>" onclick="confirm('Are you sure want to delete this user?')">
                Delete User</a></button>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>

<?php
//includes
require './incl/footer.php'
?>