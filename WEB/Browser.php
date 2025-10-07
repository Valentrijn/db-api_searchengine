<?php

include "Connectie.php";
include "index.html";

echo '<div id="boxtext">';
function printFormatted($array)
{
    echo '<pre>';
    print_r( $array);
    echo '</pre>';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Balk"];
    $source = $_POST["source"];
}
 $output = "";
//  $source = "";

if ($source === "database") {

    $stmt = $pdo->query("SELECT * FROM customers");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['Balk'])) {
            $name = $_POST['Balk'];
            $stmt = $pdo->prepare("SELECT * FROM customers WHERE customerName LIKE ?");
            $stmt->execute(["%$name%"]);
        }
    }
    $countdatabase = 1;
    echo "<br>Database :". "&nbsp" . $_POST["Balk"];
    while ($row = $stmt->fetch()) {
        printFormatted($countdatabase . "&nbsp" . $row['customerName']);
        $countdatabase++;
    }
}
echo '</div>';


//  elseif ($source === "api") {
//      $pod = $_POST['Balk'];
//      if ($_SERVER["REQUEST_METHOD"] == "POST") {
//          if (!empty($_POST['Balk'])) {
//              $apiURL =
//                  "https://api.apyhub.com/search/text/fuzzy"
//                 ;
//              $response = file_get_contents($apiURL);
//              $info = json_decode($response, true);
//  }
//     } else {
//          $apiURL = "&utf8=&format=json";
//          $response = file_get_contents($apiURL);
//              $info = json_decode($response, true);
//      }

//      $countapi = 1;
//      echo "<br>API:"."&nbsp" . $_POST["Balk"];;

//      if (!empty($response['query']['search'])) {
//          foreach ($response['query']['search'] as $response) {

//              printFormatted($countapi . "&nbsp" . $response['title']);
//              $countapi++;
//          }
//      }
//  }

//$apiURL = "https://boardgamegeek.com/Browser.php?action=search&objecttype=boardgame&q=m". urlencode($name) . "&utf8=&format=json";
//             $response = file_get_contents($apiURL);
//             $info = json_decode($response, true);

//         $apiUrl = "&utf8=&format=json";
//         $response = file_get_contents($apiUrl);
//         $info = json_decode($response, true);

//$ch = curl_init();
//$url = "https://boardgamegeek.com/Browser.php?action=search&objecttype=boardgame&q=". urlencode($name) . "&utf8=&format=json";
//curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//$output = curl_exec($ch);
//             https://boardgamegeek.com/Browser.php?action=search&objecttype=boardgame&q=m
//             https://boardgamegeek.com/xmlapi2/search?parameters/Browser.php?action=query=SEARCH_QUERY=



