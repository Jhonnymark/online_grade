<!DOCTYPE html>
<html>
<head>
    <title>Create Section</title>
</head>
<body>
    <h1>Create Section</h1>
    <form method="post" action="<?php echo site_url('sections/store'); ?>">
        <select name="course_id">
            <?php foreach ($courses as $course): ?>
                <option value="<?php echo $course->id; ?>"><?php echo $course->name; ?></option>
            <?php endforeach; ?>
        </select>
        <select name="teacher_id">
            <?php foreach ($teachers as $teacher): ?>
                <option value="<?php echo $teacher->id; ?>"><?php echo $teacher->username; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="text" name="schedule" placeholder="Schedule">
        <button type="submit">Create</button>
    </form>
</body>
</html>
