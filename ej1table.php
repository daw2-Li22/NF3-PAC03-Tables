<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysql_error($db));

//insert new data into the reviews table
$query = <<<ENDSQL
INSERT INTO reviews
    (review_movie_id, review_date, reviewer_name, review_comment,
        review_rating)
VALUES 
    (2, "2021-10-25", "El pepe", "Me he dormido viendo la pelicula", 1),
    (2, "2028-04-12", "Juan Paquito", "Fua de locos", 5),
    (2, "2020-08-03", "Peter Parker", "Ni fu ni fa.", 3)
ENDSQL;
mysqli_query($db, $query) or die(mysqli_error($db));

echo 'Movie database successfully updated!';
?>