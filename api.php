<?php

header("Content-Type: application/json");

include('database.php');

$query = "SELECT firstname, lastname, career_goals FROM SoccerPlayers";
$result = mysqli_query($con, $query);

if ($result) {
    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);
} else {
    echo json_encode(["error" => "Failed to fetch data from the database."]);
}

mysqli_close($con);

?>
