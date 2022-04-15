<?php
include("./methods/db.php");
// $string = "Kenneth";
// $hashed = base64_encode(hash('md5', $string . $_SERVER['HTTP_USER_AGENT'] . time()));
// echo $hashed;
// echo hash('md5', 123);

// $sql = "INSERT INTO matches (
//     userid,
//     team1,
//     score, 
//     team2,
//     winner
// ) 
// VALUES (
//     '123', 
//     'zenovain', 
//     '21 - 0', 
//     'cyberprism', 
//     'zenovain'
// );";






// $sql = '';

// for ($x = 1; $x <= 100; $x++) {
//     $sql .= "INSERT INTO matches (
//         userid,
//         team1,
//         score, 
//         team2,
//         winner
//     ) 
//     VALUES (
//         '$x', 
//         'zenovain', 
//         '21 - 0', 
//         'cyberprism', 
//         'zenovain'
//     );";
// }
// $stmt = $db->prepare($sql);
// $stmt->execute();




$string = '11-22';
$firstnum = (int)substr($string, 0, strpos($string, '-'));
$lastnum = (int)substr($string, strpos($string, "-")+1, strlen($string));

echo $firstnum;
echo $lastnum;

?>


<script>
</script>