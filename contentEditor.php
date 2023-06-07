<?php
include('serverConn.php');

$sql = "SELECT * FROM content WHERE cont_id = '1'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<form action="contentEditor.php" method="POST">
  <textarea name="contentText" id="contentText" rows="10" style="height: 300px; width: 1000px"><?php echo isset($row['cont_text']) ? $row['cont_text'] : ''; ?></textarea>
  <input type="submit" value="Update">
</form>

<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $content = $_POST['contentText'] ?? '';

    $updateContent = "UPDATE content SET cont_text = '$content' WHERE cont_id ='1'";
    $updateResult = $conn->query($updateContent);

    $conn->close();
}
?>

<button type="button" onclick="location.href='prehistoricPeriod.html'"> Back </button>
