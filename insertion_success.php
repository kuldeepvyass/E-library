<html>

<head>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            font-size: 40;
        }

        .container {
            position: relative;
        }

        .text {
            position: absolute;
            top: 8px;
            left: 120px;
            font-family: 'Poppins', sans-serif;
            font-weight: bold;
            font-size: 40;
        }

        img {
            width: 100%;
            height: 100%;
            opacity: 0.5;
        }

        .logout a {
            color: red;
            text-decoration: none;

        }

        p {
            color: black;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="book.jpeg" alt="book" width="100%" height="100%">
        <div class="text">
            <?php
            echo "<p>YOUR BOOK WAS SUCCESSFULLY INSERTED.<br><br>THANKS FOR VISITING.<br><p>";
            ?>
            <p class="logout">
                <?php
                echo "<a href='logout.php'>LOG OUT ?</a> OR <a href='add_book.php'>GO BACK </a> TO ADD MORE BOOKS ?";
                ?>
            </p>
        </div>
    </div>

</body>

</html>