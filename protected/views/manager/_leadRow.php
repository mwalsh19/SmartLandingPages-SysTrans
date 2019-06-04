
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
        case 'referral_code':
            $referral = !empty($data['referral_code']) ? $data['referral_code'] : 'N/A';
            echo "<td>$referral</td>";
            break;
        default:
            $referral = !empty($data['referral_code']) ? $data['referral_code'] : 'N/A';
            $city = !empty($data['city']) ? $data['city'] : 'N/A';
            $state = !empty($data['state']) ? $data['state'] : 'N/A';
            echo "<td>$referral</td>";
            echo "<td>$state</td>";
            echo "<td>$city</td>";
            break;
    }
    if (empty($filter)) {
        $leads = $data['leads'];
    } else {
        $leads = $data['sum'];
    }
    echo "<td class='leadsSum'>$leads</td>";
    ?>
</tr>