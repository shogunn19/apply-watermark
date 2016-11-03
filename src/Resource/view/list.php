<?php
    include 'top.php';
?>
    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Group</th>
                <th>email</th>
                <th>github</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $student) { ?>
            <tr>
                <th><?= $student->firstname ?></th>
                <th><?= $student->lastname ?></th>
                <th><?= $student->group ?></th>
                <th><?= $student->email ?></th>
                <th><?= $student->github ?></th>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php
    include 'bottom.php';

