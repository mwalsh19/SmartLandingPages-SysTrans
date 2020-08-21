<?php
Yii::app()->clientScript->registerPackage('dataTables');

Yii::app()->clientScript->registerScript('dataTableInit', '
         $("#distributors").dataTable({
         });
        ');
?>
<section class="content-header">
    <h1>
        Users
        <small>manager</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Manager</a></li>
        <li><a href="#">Users</a></li>
        <li class="active">List view</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Users</h3>
                    <div class="pull-right" style="margin: 10px 10px 0 0; overflow: hidden;">
                        <a href="<?php echo $this->createUrl('manager/users', array('command' => 'create')); ?>" class="btn btn-info btn-sm" style="color: #fff;">
                            <i class="glyphicon glyphicon-plus"></i> Add new
                        </a>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="distributors" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>State</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($data)) {
                                foreach ($data as $user) {
                                    ?>
                                    <tr>
                                        <td><?php echo $user->first_name ?></td>
                                        <td><?php echo $user->last_name ?></td>
                                        <td><?php echo $user->email ?></td>
                                        <td><?php echo $user->state ?></td>
                                        <td><?php echo $user->role ?></td>
                                        <td style="width: 25%;">
                                            <a href="<?php echo $this->createUrl('manager/users', array('command' => 'update', 'id' => $user->id_user)); ?>" class="btn btn-primary btn-sm">
                                                <i class="glyphicon glyphicon-edit"></i> Edit
                                            </a>
                                            <a href="<?php echo $this->createUrl('manager/users', array('command' => 'reset', 'id' => $user->id_user)); ?>" class="btn btn-success btn-sm">
                                                <i class="glyphicon glyphicon-edit"></i> Reset Password
                                            </a>
                                            <?php
                                            echo CHtml::link('<i class="glyphicon glyphicon-trash"></i> Delete', array('manager/users', 'command' => 'delete', 'id' => $user->id_user), array(
                                                'class' => 'btn btn-danger btn-sm',
                                                'confirm' => 'Are you sure you want to delete this record?',
//                                                'params' => $params,
                                            ));
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section><!-- /.content -->
