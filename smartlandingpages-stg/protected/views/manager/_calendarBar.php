
<div class="pull-right">
    <div class="input-group  pull-right" style="width: 300px; margin-left: 10px;">
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        <input type="text" class="form-control pull-right" id="datePicker" <?php echo!empty($_GET['date']) ? "value='" . $_GET['date'] . "'" : '' ?>/>
    </div><!-- /.input group -->

    <div class="pull-right">
        <strong>Filter by date</strong>
    </div>
</div>