<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
</head>
<body>
    <h1>Courses</h1>
    <a href="<?php echo site_url('courses/create'); ?>">Create Course</a>
    <ul>
        <?php foreach ($courses as $course): ?>
            <li>
                <?php echo $course->name; ?>
                <a href="<?php echo site_url('courses/edit/' . $course->id); ?>">Edit</a>
                <a href="<?php echo site_url('courses/delete/' . $course->id); ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
