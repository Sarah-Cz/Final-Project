<?php
require './incl/header.php';

require './incl/database.php';
$booksObj = new database();
//new database for gateway
?>
<h2>My Library
    <a href="addbooks.php" style="float:right;"><button class="btn btn-primary">Add Book</button></a>
</h2>
<table class="table table-info">
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
<?php
$books = $booksObj->displayData();
foreach ($books as $books) {
//accessing books tables to add data
    ?>
    <tr>
        <td><?php echo $books['title'] ?></td>
        <td><?php echo $books['author'] ?></td>
        <td><?php echo $books['status'] ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>

<?php
require './incl/footer.php'
?>