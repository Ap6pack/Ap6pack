<?php
/*
* This is the first file loaded by the web server.
* It asks the user what book they are looking for
*/

// Requests user's seach request
$looking = isset($_GET['title']) || isset($_GET['author']);
?>
// and then include the rest of html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Libary</title>

    <!-- style -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="wrapper">
        <!-- Navigation -->
        <nav class="main-nav">
            <ul>
                <li>
                    <a href="../../index.html">Home</a>
                </li>
                <li>
                    <a href="../../about.html">About</a>
                </li>
                <li>
                    <a href="../../projects.html">Projects</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </nav>
        <main role="main">
        <!-- /container -->
            <p><?php echo loginMessage(); ?></p>
        <?php
        $books = getBooks();
        if (isset($_GET['title'])) {
            echo '<p>Looking for <b>' . $_GET['title'] . '</b></p>';
            if (bookingBook($books, $_GET['title'])) {
                echo 'Booked!';
                updateBooks($books);
            } else {
                echo 'The book is not available...';
            }
        } else {
            echo '<p>You are not looking for a book?</p>';
        }
        ?>
            <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <a href="?title=<?php echo $book['title']; ?>">
                    <?php echo printableTitle($book); ?>
                </a>
            </li>
        <?php endforeach; ?>
            </ul>
        </main>

        <!-- Footer -->
        <footer>
            <p>Adam Rhys Heaton &copy; 2018</p>
        </footer>
    </div>
    <!-- Wrapper Ends -->

    <!-- JavaScript ================================================== -->

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JavaScript -->
    <script src="js/main.js"></script>
</body>

</html>