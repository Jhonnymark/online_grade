<!DOCTYPE html>
<html>
<head>
    <title>Edit Grade</title>
</head>
<body>
    <h1>Edit Grade</h1>
    <form method="post" action="<?php echo site_url('grades/update/' . $grade->id); ?>">
        <input type="hidden" name="enrollment_id" value="<?php echo $grade->enrollment_id; ?>">
        <input type="text" name="prelim" value="<?php echo $grade->prelim; ?>" placeholder="Prelim">
        <input type="text" name="midterm" value="<?php echo $grade->midterm; ?>" placeholder="Midterm">
        <input type="text" name="final" value="<?php echo $grade->final; ?>" placeholder="Final">
        <input type="date" name="viewable_date" value="<?php echo $grade->viewable_date; ?>" placeholder="Viewable Date">
        <button type="submit">Update</button>
    </form>
</body>
</html>
