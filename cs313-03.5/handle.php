<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CS 313 03.5</title>
</head>
<body>
    <h1>CS 313 03.5 - Team Readiness Activity</h1>
    
    <p class="name">
        <strong>Name:</strong> <?php echo $_POST['name']; ?>
    </p>
    
    <p class="email">
        <strong>Email:</strong> <?php echo '<a href="mailto:' . $_POST['email'] . '">' . $_POST['email'] . '</a>'; ?>
    </p>
    
    <p class="major">
        <strong>Major:</strong> <?php echo $_POST['major']; ?>
    </p>
    
    <p class="placesVisited">
        <strong>Places Visited:</strong> <br>
        <?php
            $placesVisited = $_POST['placesVisited'];
            foreach ($placesVisited as $place) {
                echo "$place<br>";
            }
        ?>
    </p>
    
    <p class="comments">
        <strong>Comments:</strong> <?php echo $_POST['comments']; ?>
    </p>
    
</body>
</html>
