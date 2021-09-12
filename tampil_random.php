<?php
require_once(__DIR__ . "/name_list.php");

$count_names = count($names);

$refresh_setiap_x_detik = 5; //!

$banyak = 10; //!

if (isset($_GET['banyak'])) {
    $banyak = $_GET['banyak'];
}
for ($i = 0; $i < $banyak; $i++) {
    $rand = rand(0, $count_names - 1);
    echo $names[$rand] . "<br />";
}
?>
<meta http-equiv="refresh" content="<?php echo $refresh_setiap_x_detik; ?>">