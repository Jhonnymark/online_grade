<!DOCTYPE html>
<html>
<head>
    <title>Edit Section</title>
</head>
<body>
    <h1>Edit Section</h1>
    <form method="post" action="<?php echo site_url('sections/update/' . $section->id); ?>">
        <select name="course_id">
            <?php foreach ($courses as $course): ?>
                <option value="<?php echo $course->id; ?>" <?php echo $section->course_id == $course->id ? 'selected' : ''; ?>><?php echo $course->name; ?></option>
            <?php endforeach; ?>
        </select>
        <select name="teacher_id">
            <?php foreach ($teachers as $teacher): ?>
                <option value="<?php echo $teacher->id; ?>" <?php echo $section->teacher_id == $teacher->id ? 'selected' : ''; ?>><?php echo $teacher->username; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="text" name="schedule" value="<?php echo $section->schedule; ?>" placeholder="Schedule">
        <button type="submit">Update</button>
    </form>
</body>
</html>
