<?php

header('Content-type: text/html; charset=utf-8');
session_start();
if (isset($_SESSION["inputEmail"]) && $_SESSION["start"] === true) {
    $Memberid = $_SESSION["Member_ID"];
} else {
    session_unset();
    session_destroy();
    header("location:index.php");
}
try {

     $whatever = $_POST['whatever'];

    include 'connectdB.php';
    $db = new PDO($dsn, $db_user, $db_password);
    $sql = "SELECT G.North_Delivery_Case_ID,G.Train,G.`Starts`,G.Tos,G.Publish_Time,G.North_Delivery_Case_Status "
            . "FROM( "
            . "SELECT A.Member_ID,A.North_Delivery_Case_ID,A.Train,A.`Starts`,A.Tos,A.Publish_Time,A.North_Delivery_Case_Status "
            . "FROM north_delivery_case AS A,member AS B "
            . "WHERE A.Member_ID=B.Member_ID "
            . ")AS G "
            . "WHERE G.Member_ID='" . $Memberid . "'";
    $stmt = $db->query($sql);

    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $data [] = array(
            'North_Delivery_Case_ID' => $row ['North_Delivery_Case_ID'],
            'Train' => $row ['Train'],
            'Starts' => urlencode($row ['Starts']),
            'Tos' => urlencode($row ['Tos']),
            'North_Delivery_Case_Status' => urlencode($row ['North_Delivery_Case_Status']),
            'Publish_Time' => $row ['Publish_Time']
        );
    }
    if (empty($data)) {
        $output = array(
            'data' => 'No',
            'message' => 'Access',
            'success' => true,
            'count' => 0
        );
        $json = urldecode(json_encode($output));
        echo $json;
    } else {
        $output = array(
            'data' => $data,
            'message' => 'Access',
            'success' => true,
            'count' => count($data)
        );
        $json = urldecode(json_encode($output));
        echo $json;
    }
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
?>