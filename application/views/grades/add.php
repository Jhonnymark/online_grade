<!DOCTYPE html>
<html>
<head>
    <title>Add Grade</title>
</head>
<body>
    <h1>Add Grade</h1>
    <form method="post" action="<?php echo site_url('grades/store'); ?>">
        <input type="hidden" name="enrollment_id" value="<?php echo $enrollment_id; ?>">
        <input type="text" name="prelim" placeholder="Prelim">
        <input type="text" name="midterm" placeholder="Midterm">
        <input type="text" name="final" placeholder="Final">
        <input type="date" name="viewable_date" placeholder="Viewable Date">
        <button type="submit">Add</button>
    </form>
</body>
</html>
