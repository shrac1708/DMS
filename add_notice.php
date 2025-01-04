<!DOCTYPE html>
<html>
<head>
	<title>Devise & Sight Notices-Add Notice</title>
</head>
<body>
<h2>Add Notices
</h2>
<form action="add_notice_script.php" method="post" enctype="multipart/form-data">
	<input type="text" name="title" placeholder="Title of Notice" required><br>
<input type="file" name="file">
<button type="submit" name="submit">Upload Notice</button><br>
	<input type="submit" name="submit" value="Add">
	<input type="reset" name="reset" value="Reset">
	
</form>
</body>
<!-- </html -->
<!-- <!DOCTYPE html> -->
<html>
<head>
    <title>Notices from Text File</title>
</head>
<body>
    <h1>Notices from Text File</h1>

    <?php
    // Define the file path
    $filePath = 'C:\xampp\htdocs\NoticB_Exam\notices.txt';

    // Open the file
    if (file_exists($filePath)) {
        $file = fopen($filePath, 'r');

        // Read the file contents
        $notices = array();
        while (!feof($file)) {
            $line = fgets($file);
            $line = trim($line);

            // Skip empty lines
            if ($line == '') {
                continue;
            }

            // Split the line into title and content
            $parts = explode(':', $line, 2);
            $title = $parts[0];
            $content = $parts[1];

            // Add the notice to the array
            $notices[] = array(
                'title' => $title,
                'content' => $content
            );
        }

        // Close the file
        fclose($file);

        // Display the notices
        if (!empty($notices)) {
            echo '<ul>';
            foreach ($notices as $notice) {
                echo '<li>';
                echo '<h2>' . htmlspecialchars($notice['title']) . '</h2>';
                echo '<p>' . htmlspecialchars($notice['content']) . '</p>';
                echo '</li>';
            }
            echo '</ul>';
        } else {
            echo '<p>No notices to display.</p>';
        }
    } else {
        echo '<p>The file does not exist.</p>';
    }
    ?>
</body>
</html>
