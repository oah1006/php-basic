<?php

require 'connect.php';
require 'security.php';

$records = array();

if(!empty($_POST)) {
    if(isset($_POST['first_name'], $_POST['last_name'], $_POST['bio'])) {
        $first_name = escape($_POST['first_name']);
        $last_name = escape($_POST['last_name']);
        $bio = escape($_POST['bio']);

        if (!empty($first_name) && !empty($last_name) && !empty($bio)) {
            $insert = $db->prepare("INSERT INTO people (first_name, last_name, bio, created) VALUES(?, ?, ?, NOW())");
            $insert->bind_param('sss', $first_name, $last_name, $bio);

            if($insert->execute()) {
                header('Location: index.php');
                die();
            }
        }
    }
}

if($result = $db->query("SELECT * FROM people")) {
    if ($result->num_rows) {
        while($rows = $result->fetch_object()) {
            // echo var_dump($rows);
            $records[] = $rows;
        }
        $result->free();
    }
}

    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Users</title>
    </head>
    <body>
        <h3>Users</h3>
        <?php
            if(!count($records)) {
                echo 'No records';
            } else {
        ?>
                <table>
                    <thead>
                        <tr>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Bio</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($records as $record) {
                        ?>
                            <tr>
                                <td><?php echo escape($record->first_name); ?></td>
                                <td><?php echo escape($record->last_name); ?></td>
                                <td><?php echo escape($record->bio); ?></td>
                                <td><?php echo escape($record->created); ?></td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
        <?php
            }
        ?>

        <hr>

        <form action="" method="post">
            <div>
                <label for="first_name">First name</label>
                <input type="text" name="first_name" id="first_name">
            </div>
            <div>
                <label for="last_name">last name</label>
                <input type="text" name="last_name" id="last_name">
            </div>
            <div>
                <label for="bio">Bio</label>
                <textarea name="bio" id="bio"></textarea>
            </div>
            <input type="submit" value="Submit"> 
        </form>
    </body>
</html>