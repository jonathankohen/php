<table>
    <tr>
        <th>User #</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Full Name</th>
        <th>Upper Case</th>
        <th>Length</th>
    </tr>

    <?php foreach ($users as $key => $value) { ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value["first_name"]; ?></td>
            <td><?php echo $value["last_name"]; ?></td>
            <td><?php echo $value["first_name"] .
                " " .
                $value["last_name"]; ?></td>
            <td><?php echo strtoupper($value["first_name"]) .
                " " .
                strtoupper($value["last_name"]); ?></td>
            <td><?php echo strlen($value["first_name"]) +
                strlen($value["last_name"]); ?></td>
        </tr>
    <?php } ?>
</table>