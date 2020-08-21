
<tr>
    <?php
    switch ($filter) {
        case 'state':
            $state = !empty($data['state']) ? $data['state'] : 'N/A';
            echo "<td>$state</td>";
            break;
        case 'city':
            $city = !empty($data['city']) ? $data['city'] : 'N/A';
            $state = !empty($data['state']) ? $data['state'] : 'N/A';
            echo "<td>$city</td>";
            echo "<td>$state</td>";
            break;
        case 'publisher':
            $publisher = !empty($data['publisher']) ? $data['publisher'] : 'N/A';
            echo "<td>$publisher</td>";
            break;
        default:
            $publisher = !empty($data['publisher']) ? $data['publisher'] : 'N/A';
            $city = !empty($data['city']) ? $data['city'] : 'N/A';
            $state = !empty($data['state']) ? $data['state'] : 'N/A';
            $type = !empty($data['type']) ? $data['type'] : 'N/A';
            echo "<td>$publisher</td>";
            echo "<td>$state</td>";
            echo "<td>$city</td>";
            echo "<td>$type</td>";
            echo "<td><a href='http://joinswift.com/landing-pages/{$data['path']}' target='_blank'>{$data['path']}</a></td>";
            break;
    }
    if (empty($filter)) {
        $leads = $data['clicks'];
    } else {
        $leads = $data['sum'];
    }
    echo "<td class='viewsSum'>$leads</td>";
    ?>
</tr>