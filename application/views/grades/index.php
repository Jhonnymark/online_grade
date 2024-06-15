<!DOCTYPE html>
<html>
<head>
    <title>Grades</title>
</head>
<body>
    <h1>Grades</h1>
    <a href="<?php echo site_url('grades/add'); ?>">Add Grade</a>
    <ul>
        <?php foreach ($grades as $grade): ?>
            <li>
                Enrollment ID: <?php echo $grade->enrollment_id; ?> - Prelim: <?php echo $grade->prelim; ?> - Midterm: <?php echo $grade->midterm; ?> - Final: <?php echo $grade->final; ?>
                <a href="<?php echo site_url('grades/edit/' . $grade->id); ?>">Edit</a>
                <a href="<?php echo site_url('grades/delete/' . $grade->id); ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
