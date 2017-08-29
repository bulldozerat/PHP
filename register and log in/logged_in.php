<?php
require 'connect.php';
?> <style><?php include 'styles.css'; ?></style>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="js.js"></script>
<?php
$query = 'SELECT * FROM `users`';
$num = 0;

if(isset($_POST['del-btn'])) {
    if(isset($_POST['sendVar'])) {
        $uid = $_POST['sendVar'];
        echo $uid;
    }
}

$query_run = mysqli_query($conn, $query);
?>
<form action="" method="post">
    <table class="registered-table">
        <tr>
            <th>Order</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Delete User</th>
        </tr>
    <?php
while ($row = mysqli_fetch_assoc($query_run)) {
    $num++;
    echo "<tr><td>${num}</td><td>${row['f_name']}</td><td>${row['l_name']}</td><td>${row['email']}</td>"
        ."<td><button type='submit' name='del-btn' class='dell' data-name = ${row['f_name']}>DELETE</button></td></tr>";
}?>
    </table>
</form>
