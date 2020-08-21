<?php

$total = '';
if (!empty($rawData)) {
    $totalViews = 0;

    if (empty($filter)) {
        for ($index = 0; $index < count($rawData); $index++) {
            $totalViews += (int) $rawData[$index]['clicks'];
        }
    } else {
        for ($index = 0; $index < count($rawData); $index++) {
            $totalViews += (int) $rawData[$index]['sum'];
        }
    }

    $total = "<span class='ajaxTotalViews hidden'>{$totalViews}</span>";
}


$sort = $dataProvider->getSort();

switch ($filter) {
    case 'state':
        $headers = "<th>" . Utils::getOrderLink($sort, 'state', 'State') . "</th>";
        $headers.= "<th>" . Utils::getOrderLink($sort, 'sum', 'Views') . "</th>";
        break;
    case 'city':
        $headers = "<th>" . Utils::getOrderLink($sort, 'city', 'City') . "</th>";
        $headers.= "<th>" . Utils::getOrderLink($sort, 'state', 'State') . "</th>";
        $headers.= "<th>" . Utils::getOrderLink($sort, 'sum', 'Views') . "</th>";
        break;
    case 'publisher':
        $headers = "<th>" . Utils::getOrderLink($sort, 'publisher', 'Publisher') . "</th>";
        $headers.= "<th>" . Utils::getOrderLink($sort, 'sum', 'Views') . "</th>";
        break;
    default:
        $headers = "<th>" . Utils::getOrderLink($sort, 'publisher', 'Publisher') . "</th>";
        $headers.= "<th>" . Utils::getOrderLink($sort, 'state', 'State') . "</th>";
        $headers.= "<th>" . Utils::getOrderLink($sort, 'city', 'City') . "</th>";
        $headers.= "<th>" . Utils::getOrderLink($sort, 'type', 'Type') . "</th>";
        $headers.= "<th>" . Utils::getOrderLink($sort, 'path', 'Path') . "</th>";
        $headers.= "<th>" . Utils::getOrderLink($sort, 'clicks', 'Views') . "</th>";
        break;
}
$calendarBar = $this->renderPartial('_filterDropdown', array(), true);
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_viewRow',
    'id' => 'ajaxListView',
    'template' => '<div>' . $total . '<div class="clearfix" style="min-height: 47px;"><div class="pull-left">{pager}</div>' . $calendarBar . '</div>{summary}</div><table class="table table-bordered table-striped viewsTbl">' . $headers . '{items}</table><br/>{pager}',
    'viewData' => array('filter' => $filter),
    'afterAjaxUpdate' => 'calculateViews'
));
