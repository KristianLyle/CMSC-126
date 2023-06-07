<?php
include('serverConn.php');

$id = $_POST['cont_id'] ?? '';

echo $id;

$sql = "SELECT * FROM content WHERE cont_id = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<html>
  <head>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  </head>
  <body>
    <form action="contentEditor.php" method="POST" id="contentEditor">
      <input type="hidden" id ="cont_id" name="cont_id" value="<?php echo $id ?>">
      <textarea name="contentText" id="contentText" rows="10" style="height: 300px; width: 1000px"><?php echo isset($row['cont_text']) ? $row['cont_text'] : ''; ?></textarea>
      <input type="submit" name="update" id="editorButton" value="Update">
    </form>
    <button type="button" onclick="goBack()" id="editorButton">Back</button>
  </body>
</html>

<script>
   function goBack() {
        let referrer = document.referrer;
        if (referrer.endsWith(".html")) {
            window.location.href = referrer;
        } else {
            window.history.go(-2);
    }
  }
</script>

<?php

$id = $_POST['cont_id'] ?? '';

echo $id;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['update'])) {
      $content = $_POST['contentText'] ?? '';
      $escapedContent = mysqli_real_escape_string($conn, $content);
  
      $updateContent = "UPDATE content SET cont_text = '$escapedContent' WHERE cont_id ='$id'";
      $updateResult = $conn->query($updateContent);
  
      $conn->close();
    }
  }

?>


