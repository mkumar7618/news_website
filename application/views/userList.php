<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

<table>
    <?php foreach ($users as $user) : ?>
    <tr>
        <td><?php echo $user->id ?></td>
        <td><?php echo $user->firstName ?></td>
        <td><?php echo $user->lastName ?></td>
    </tr>
<?php endforeach; ?>
</table>

</body>
</html>
