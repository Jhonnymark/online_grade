<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>
    <h1>Edit Course</h1>
    <form method="post" action="<?php echo site_url('courses/update/' . $course->id); ?>">
        <input type="text" name="name" value="<?php echo $course->name; ?>" placeholder="Course Name">
        <button type="submit">Update</button>
    </form>
</body>
</html>
