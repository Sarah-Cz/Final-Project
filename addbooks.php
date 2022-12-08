<?php
require './incl/header.php';
//includes
?>
    <form action="add.php" method="POST">
        <h2>Add to Your Library</h2>
        <label class="title" id="title">Book Title:</label>
        <input type="text" class="title" placeholder="Full Book Title">
        <label class="title">Author:</label>
        <input type="text" class="author" placeholder="Authors Full Name">

        <label class="status">Current Progress:</label>
        <select name="status" id="status">
            <option value="current-read">On Display</option>
            <option value="current-read">Currently Reading</option>
            <option value="started">Just Started</option>
            <option value="complete">Completed</option>
            <option value="reRead">Re-reading</option>
        </select>
        <button type="button" class="btn btn-info">Submit</button>
    </form>
<?php
require './incl/footer.php'
//includes
?>