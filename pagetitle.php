<?
ob_start (); // Buffer output
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<title><!--TITLE--></title>
</head>

<body>
<?
$pageTitle = 'Title of Page'; // Call this in your pages' files to define the page title
?>
</body>
</html>
<?
$pageContents = ob_get_contents (); // Get all the page's HTML into a string
ob_end_clean (); // Wipe the buffer

// Replace <!--TITLE--> with $pageTitle variable contents, and print the HTML
echo str_replace ('<!--TITLE-->', $pageTitle, $pageContents);
?>