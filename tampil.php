<?php
require_once(__DIR__ . "/name_list.php");

$count_names = count($names);

$refresh_setiap_x_detik = 5; //!
$banyak = 10; //!

if (isset($_GET['banyak'])) {
    $banyak = $_GET['banyak'];
}

$start = 0;

if (isset($_GET['start'])) {
    $start = $_GET['start'];
}
?>
<style>
    .content {
        font-weight: bold;
        color: #0083B8;
    }
</style>
<?php
echo "<div class='content'>";
for ($i = 0; $i < $banyak; $i++) {
    if ($i != 0) {
        next_start();
    }
    echo $names[$start] . "<br />";
}
echo "</div>";

next_start();
?>
<?php
function next_start()
{
    global $start, $count_names;

    $start++;

    if ($start >= $count_names) {
        $start = $start - $count_names;
    }
}
?>
<meta http-equiv="refresh" content="<?php echo $refresh_setiap_x_detik; ?>; url=tampil.php?banyak=<?php echo $banyak; ?>&start=<?php echo $start; ?>">