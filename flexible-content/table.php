<?php


$tableHeading = $args['table_subheading'];
$tableRows = $args['table_cells'];

?>


<table class="my-5">
<?php
// Display subheading




if($tableHeading): ?>
    <tr>
        <th colspan="2">
            <?php echo $tableHeading; ?>
        
        </th>
    </tr>
<?php endif; ?>


<?php
foreach ($tableRows as $tableRow) :  ?>





    <!-- Display acf repeater fields -->
    <tr>
        <td><?php echo $tableRow['table_col_one'] ?></td>
        <td><?php echo $tableRow['table_col_two'] ?></td>
        
    </tr>
        
    <?php
endforeach; ?>


</table>

