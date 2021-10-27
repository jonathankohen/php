<?php
ini_set("auto_detect_line_endings", true);
$row = 1;

if (($handle = fopen("assets/csvs/c.csv", "r")) !== false) {
    while (($data = fgetcsv($handle, 1000, ",")) !== false) {

        if ($row == 1) {
            $row++;
            continue;
        }

        $num = count($data);
        ?>
        <h1><?php echo "Record " .
            ($row - 1) .
            ", (" .
            $num .
            " fields)" .
            "<br>"; ?></h1>

        <?php $row++; ?>

        <ul>
            <?php for ($c = 0; $c < $num; $c++) { ?>
                <li><?php echo $data[$c]; ?></li>
            <?php } ?>
        </ul>
<?php
    }
    fclose($handle);
}
