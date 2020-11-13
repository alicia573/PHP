<body>
<form name="form1" method="POST" action="test.php">
    <select name="select" onChange="document.form1.submit()">
        <option selected>Select an Industry</option>
        <option value="members">members</option>
        <option value="Female">Female Members</option>
    </select>
</form>

<?php

$file = $_POST['select'];
echo $file;


$path_file = $_SERVER['DOCUMENT_ROOT']/$file.php;
if (isset($_POST['select']) && $_POST['select'])
{
if ($_POST['select'] == 'something')
 include 'something.php';
if ($_POST['select'] == 'somethingelse')
 include 'another.php';
} else {
  include 'default.php';
}
?>
</body>