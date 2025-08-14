<?php require_once "inc/header.php"; ?>
<body class="bg-gray-50 font-sans antialiased">
  <div class="min-h-screen flex">
 <?php require_once "inc/sidebar.php"; ?>

    <!-- Overlay for mobile when sidebar open -->
    <div id="overlay" class="fixed inset-0 bg-black/30 z-10 hidden md:hidden"></div>

    <!-- Main content area -->
    <div class="flex-1 flex flex-col ml-0 md:ml-64 overflow-hidden">
      <!-- top bar -->
      <?php require_once "inc/topbar.php"; ?>

      <?php
include '../inc/db.php';

// If id is passed and valid, use it
if (isset($_GET['id']) && intval($_GET['id']) > 0) {
    $courseId = intval($_GET['id']);
} else {
    // Fetch first available course id from table
    $result = $conn->query("SELECT id FROM courses ORDER BY id ASC LIMIT 1");
    if ($result && $row = $result->fetch_assoc()) {
        $courseId = intval($row['id']);
    } else {
        die("No courses found in database.");
    }
}

// Fetch course data
$sql = "SELECT * FROM courses WHERE id = $courseId";
$result = $conn->query($sql);

if ($result->num_rows === 0) {
    die("<p class='text-center text-red-500 mt-10'>Course not found.</p>");
}

$course = $result->fetch_assoc();
?>

<!-- scrollable content -->


 
</body>
</html>
