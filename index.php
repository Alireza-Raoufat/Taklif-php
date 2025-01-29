<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>\ثبت نام</title>
    <style>
        .eror {color: red;}
        .success {color: green;}
        table {width: 50%; border-collapse: collator; margin-top: 20px;}
        th, td {border: 1px solid black; padding: 10px; text-align: center;}
    </style>
</head>
<body>
    <form method="post">
        name book:<input thpe="text" name="book_name"> </br>
        author: <input thpe="text" name="author"> </br>
        score: <input thpe="number" name="rating" min="1" max="5"> </br>
        user comment: <textarea name="review"></textarea> </br>
        <input type="submit" name="submit" value="submit">
     </form>
     <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $book_name = trim($_POST["book_name"]);
        $author = trim($_POST["author"]);
        $rating = $_POST["rating"];
        $review = trim=($_POST["review"]);

        if (empty($book_name) || empty($author)) {
            echo "<p class='error'>نام کتاب و نویسنده رو پر کنید</p>";
        }elseif ($rating <1 || $rating > 5) {
            echo "<p class='error'>امتیاز فقط باید بین 1 تا 5 باشد</p>";
        }else{
            echo "<table>"
            echo "<tr><th>name book</th><th>author</th><th>score</th><th>user comment</th></th>";
            $row_color = ($rating >= 4) ? "success" : (($rating < 3) ? "error" : "");
            echo "<tr class='$row_color'><td>$book_name</td><td>$author</td><td>$rating</td><td>$review</td></tr>";
            echo "</table>";
        }
        
     }
     ?>
</body>
</html>