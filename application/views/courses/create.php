<!DOCTYPE html>
<html>
<head>
    <title>Create Course</title>
</head>
<body>
    <h1>Create Course</h1>
    <form method="post" action="<?php echo site_url('courses/store'); ?>">
        <input type="text" name="name" placeholder="Course Name">
        <button type="submit">Create</button>
    </form>
</body>
</html>
