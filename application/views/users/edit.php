<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>
    <form method="post" action="<?php echo site_url('users/update/' . $user->id); ?>">
        <input type="text" name="username" value="<?php echo $user->username; ?>" placeholder="Username">
        <input type="password" name="password" placeholder="Password (leave blank to keep current)">
        <select name="role">
            <option value="dean" <?php echo $user->role == 'dean' ? 'selected' : ''; ?>>Dean</option>
            <option value="teacher" <?php echo $user->role == 'teacher' ? 'selected' : ''; ?>>Teacher</option>
            <option value="student" <?php echo $user->role == 'student' ? 'selected' : ''; ?>>Student</option>
        </select>
        <button type="submit">Update</button>
    </form>
</body>
</html>
