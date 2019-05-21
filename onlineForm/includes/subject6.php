    <?php 
include 'config.php';
    if(!empty($_POST['subject6']))
{
    $subject_id = $_POST['subject6'];
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
        <option value="<?php echo htmlentities($row['sub_name']); ?>"> <?php echo htmlentities($row['sub_name']);?></option>
        <?php
    }
     ?>
