<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all"  href= "<?php echo "Assignment2/CSS/sign.css"; ?>">
    <title>The Library - Home Page</title>
</head>
<?php 
include ("Assignment2/Server/header.php");

require_once('Assignment2/Server/db_credentials.php');
require_once('Assignment2/Server/database.php');

$db = db_connect();
// Initialize variables
$genre = 'all';
$searchInput = '';

// Handling form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['genreFilter'])) {
        $genre = $_POST['genreFilter'];
    }
    if (isset($_POST['searchInput'])) {
        $searchInput = $_POST['searchInput'];
    }
}

// SQL query to fetch books
$sql = "SELECT * FROM books WHERE 1 = 1";

// Add genre filter to SQL query
if ($genre != 'all') {
    $sql .= " AND genre = '" . mysqli_real_escape_string($db, $genre) . "'";
}

// Add search term to SQL query
if (!empty($searchInput)) {
    $sql .= " AND (title LIKE '%" . mysqli_real_escape_string($db, $searchInput) . "%'";
    $sql .= " OR author LIKE '%" . mysqli_real_escape_string($db, $searchInput) . "%')";
}

$result_set = mysqli_query($db, $sql);

?>
    <!--This is where you modify your code-->

    <main id="main-book">

<div id="bottomBox">
    <h2>Search</h2>

  <form id="searchForm" method="post">      
    <div class="search">
        <input type="text" id="searchInput" name="searchInput" placeholder="Search...">

        <select id="genreFilter" name=genreFilter>
            <option value="all" <?php echo $genre == 'all' ? 'selected' : ''; ?>>All Genres</option>
            <option value="SelfHelp"<?php echo $genre == 'SelfHelp' ? 'selected' : ''; ?>>SelfHelp</option>
            <option value="Mystery"<?php echo $genre == 'Mystery' ? 'selected' : ''; ?>>Mystery</option>
            <option value="Fantasy"<?php echo $genre == 'Fantasy' ? 'selected' : ''; ?>>Fantasy</option>
            <option value="Historical"<?php echo $genre == 'Historical' ? 'selected' : ''; ?>>Historical</option>
            <option value="ScienceFiction"<?php echo $genre == 'ScienceFiction' ? 'selected' : ''; ?>>ScienceFiction</option>
        </select>        
    </div>
    <button type="submit">Search</button>
</form>


    </div>

    <div class="allBooks">
        <?php while($results = mysqli_fetch_assoc($result_set)) { ?>
            <?php echo '<div class="books">'; ?>
            <?php echo '<img src="' . $results["image_path"] . '" class="BooksPhotos">'; ?>
            <?php echo '<h3>' . $results["title"] . '</h3>'; ?>
            <?php echo '<p>ID #: ' . $results["id"] . '</p>'; ?>
            <?php echo '<p>Author: ' . $results["author"] . '</p>'; ?>
            <?php echo '<p>Genre: ' . $results["genre"] . '</p>'; ?>
            <?php echo '</div>'; ?>
        <?php  } ?>

    </div>
</div>
        
</main>    

<?php 
include ("Assignment2/Server/footer.php");
?>     
