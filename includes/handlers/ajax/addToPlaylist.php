<?php
include("../../config.php");

if (isset($_POST['playlistId']) && isset($_POST['songId'])) {
    $playlistId = $_POST['playlistId'];
    $songId = $_POST['songId'];

    $orderIdQuery = mysqli_query($con, "SELECT MAX(playlistOrder) + 1 as playlistOrder FROM playlistSongs WHERE playlistId='$playlistId'");
    $row = mysqli_fetch_array($orderIdQuery);
    $order = (int)$row['playlistOrder']; // Convert the value to an integer

    if (!is_int($order)) {
        // In case MAX(playlistOrder) returns NULL (no rows found), set default value as 1.
        $order = 1;
    }

    $query = mysqli_query($con, "INSERT INTO playlistSongs (songId, playlistId, playlistOrder) VALUES ('$songId', '$playlistId', '$order')");
} else {
    echo "PlaylistId or songId was not passed into addToPlaylist.php";
}
?>
