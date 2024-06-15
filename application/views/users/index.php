<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>
    <a href="<?php echo site_url('users/create'); ?>">Create User</a>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <?php echo $user->username; ?> (<?php echo $user->role; ?>)
                <a href="<?php echo site_url('users/edit/' . $user->id); ?>">Edit</a>
                <a href="<?php echo site_url('users/delete/' . $user->id); ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
