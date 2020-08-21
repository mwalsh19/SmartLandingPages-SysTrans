
<div class="pull-right">
    <strong>Filter by date: </strong>
    <select name="date" class="filterByDate">
        <option disabled selected> -- select an date -- </option>
        <?php
        $current_year = date('Y');
        $selected_time = !empty($_GET['date']) ? $_GET['date'] : '';
        $current_time = date('m-Y');
        foreach (Utils::getMonths() as $key => $value) {
            $option_selected = '';
            $current = '';
            if ($selected_time == $value) {
                $option_selected = 'selected';
            }
            if ($current_time == $value) {
                $current = '(current)';
                $value = '';
                if (empty($selected_time)) {
                    $option_selected = 'selected';
                }
            }
            echo "<option value='{$value}' {$option_selected}>{$key} {$current_year} {$current}</option>";
        }
        ?>
    </select>
</div>