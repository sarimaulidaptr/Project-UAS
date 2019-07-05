<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">Manajemen Invoice</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if(session('success')): ?>
                            <div class="alert alert-success">
                                <?php echo session('success'); ?>

                            </div>
                        <?php endif; ?>
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Invoice ID</th>
                                    <th>Nama Lengkap</th>
                                    <th>No Telp</th>
                                    <th>Total Item</th>
                                    <th>Subtotal</th>
                                    <th>Pajak</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $invoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><strong>#<?php echo e($row->id); ?></strong></td>
                                        <td><?php echo e($row->customer->name); ?></td>
                                        <td><?php echo e($row->customer->phone); ?></td>
                                        <td><span class="badge badge-success"><?php echo e($row->detail->count()); ?> Item</span></td>
                                        <td>Rp <?php echo e(number_format($row->total)); ?></td>
                                        <td>Rp <?php echo e(number_format($row->tax)); ?></td>
                                        <td>Rp <?php echo e(number_format($row->total_price)); ?></td>
                                        <td>
                                            <form action="<?php echo e(route('invoice.destroy', $row->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <a href="<?php echo e(route('invoice.print', $row->id)); ?>" class="btn btn-secondary btn-sm">Print</a>
                                                <a href="<?php echo e(route('invoice.edit', $row->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="8" class="text-center">Tidak ada data</td>
                                    </tr> 
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <div class="float-right">
                            <?php echo e($invoice->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\latihan_laravel\resources\views/invoice/index.blade.php */ ?>