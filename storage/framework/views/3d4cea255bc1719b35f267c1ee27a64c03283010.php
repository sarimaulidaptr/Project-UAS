<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">Manajemen Data Pelanggan</h3>
                            </div>
                            <div class="col-md-6">
                                <a href="<?php echo e(url('/customer/new')); ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
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
                                    <th>Nama Lengkap</th>
                                    <th>No Telp</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th colspan="2">Aksi</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($customer->name); ?></td>
                                    <td><?php echo e($customer->phone); ?></td>
                                    <td><?php echo e(str_limit($customer->address, 50)); ?></td>
                                    <td><a href="mailto:<?php echo e($customer->email); ?>"><?php echo e($customer->email); ?></a></td>
                                    <td>
                                        <form action="<?php echo e(url('/customer/' . $customer->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE" class="form-control">
                                            <a href="<?php echo e(url('/customer/' . $customer->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="<?php echo e(route('invoice.store')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="customer_id" value="<?php echo e($customer->id); ?>" class="form-control">
                                            <button class="btn btn-primary btn-sm">Buat Invoice</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td class="text-center" colspan="5">Tidak ada data</td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <div class="float-right">
                            <?php echo e($customers->links()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\latihan_laravel\resources\views/customer/index.blade.php */ ?>