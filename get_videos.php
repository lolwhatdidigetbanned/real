<?php
// Retrieve videos from the database
$dbPath = 'sqlite:/home/runner/YoutubeRipOffs/database.sqlite';
$pdo = new PDO($dbPath);
$stmt = $pdo->query('SELECT * FROM videos ORDER BY created_at DESC');
$videos = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($videos);
?>
