<?php

$total = '';
if (!empty($rawData)) {
    $totalLeads = 0;

    if (empty($filter)) {
        for ($index = 0; $index < count($rawData); $index++) {
            $totalLeads += (int) $rawData[$index]['leads'];
        }
    } else {
        for ($index = 0; $index < count($rawData); $index++) {
            $totalLeads += (int) $rawData[$index]['sum'];
        }
    }

    $total = "<span class='ajaxTotalLeads hidden'>{$totalLeads}</span>";
}


$sort = $dataProvider->getSort();

switch ($filter) {
    case 'state':
        $headers = "<th>" . Utils::getOrderLink($sort, 'state', 'State') . "</th>";
        $headers.= "<th>" . Utils::getOrderLink($sort, 'sum', 'Leads') . "</th>";
        break;
    case 'city':
        $headers = "<th>" . Utils::getOrderLink($sort, 'city', 'City') . "</th>";
        $headers.= "<th>" . Utils::getOrderLink($sort, 'state', 'State') . "</th>";
        $headers.= "<th>" . Utils::getOrderLink($sort, 'sum', 'Leads') . "</th>";
        break;
    case 'referral_code':
        $headers = "<th>" . Utils::getOrderLink($sort, 'referral_code', 'Referral code') . "</th>";
        $headers.= "<th>" . Utils::getOrderLink($sort, 'sum', 'Leads') . "</th>";
        break;
    default:
        $headers = "<th>" . Utils::getOrderLink($sort, 'referral_code', 'Referral code') . "</th>";
        $headers.= "<th>" . Utils::getOrderLink($sort, 'state', 'State') . "</th>";
        $headers.= "<th>" . Utils::getOrderLink($sort, 'city', 'City') . "</th>";
        $headers.= "<th>" . Utils::getOrderLink($sort, 'leads', 'Leads') . "</th>";
        break;
}
$calendarBar = $this->renderPartial('_calendarBar', array(), true);

$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_leadRow',
    'id' => 'ajaxListView',
    'template' => '<div>' . $total . '<div class="clearfix"><div class="pull-left">{pager}</div>' . $calendarBar . '</div>{summary}</div><table class="table table-bordered table-striped leadsTbl">' . $headers . '{items}</table><br/>{pager}',
    'viewData' => array('filter' => $filter),
    'afterAjaxUpdate' => 'calculateLeads'
));
