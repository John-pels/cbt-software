<?php
include 'config.php';
if(!empty($_POST['classSubject']))
{
    $subject_id = $_POST['classSubject'];
    $select_subject = mysqli_query($con, "SELECT * FROM subject WHERE class_id = '$subject_id'  ORDER BY sub_name");
    $count_subject = mysqli_num_rows($select_subject);

}

?>
<option selected="selected">Select Subjects</option>

<?php
    for ($i = 1; $i <= $count_subject; $i++)
    {
        $row = mysqli_fetch_array($select_subject);
        ?>
        <option value="<?php echo htmlentities($row['sub_id']); ?>"> <?php echo htmlentities($row['sub_name']);?></option>
        <?php
    }
    ?>

<?php
if(!empty($_POST['subjectStatus']))
{
    $subject_id1 = $_POST['subjectStatus'];
    $select_subject1 = mysqli_query($con, "SELECT * FROM subject WHERE class_id = '$subject_id1'  ORDER BY sub_name");
    $count_subject1 = mysqli_num_rows($select_subject1);

}

?>
<option selected="selected">Select Subjects</option>

<?php
    for ($i = 1; $i <= $count_subject1; $i++)
    {
        $row1 = mysqli_fetch_array($select_subject1);
        ?>
        <option value="<?php echo htmlentities($row1['sub_id']); ?>"> <?php echo htmlentities($row1['sub_name']);?></option>
        <?php
    }
    ?>

    