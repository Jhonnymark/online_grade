<!DOCTYPE html>
<html>
<head>
    <title>Sections</title>
</head>
<body>
    <h1>Sections</h1>
    <a href="<?php echo site_url('sections/create'); ?>">Create Section</a>
    <ul>
        <?php foreach ($sections as $section): ?>
            <li>
                <?php echo $section->course_id; ?> - <?php echo $section->teacher_id; ?> - <?php echo $section->schedule; ?>
                <a href="<?php echo site_url('sections/edit/' . $section->id); ?>">Edit</a>
                <a href="<?php echo site_url('sections/delete/' . $section->id); ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
