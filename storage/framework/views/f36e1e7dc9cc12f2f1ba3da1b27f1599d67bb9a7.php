<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">Manajemen Produk</h3>
                            </div>
                            <div class="col-md-6">
                                <a href="<?php echo e(url('product/new')); ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
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
                                    <th>Nama Produk</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($product->title); ?></td>
                                    <td><?php echo e(str_limit($product->description, 50)); ?></td>
                                    <td>Rp <?php echo e(number_format($product->price)); ?></td>
                                    <td><?php echo e($product->stock); ?></td>
                                    <td><?php echo e($product->created_at->format('d-m-y')); ?></td>
                                    <td>
            <form action="<?php echo e(url('/product/' . $product->id)); ?>" method="POST">

                <?php echo csrf_field(); ?> 

                <input type="hidden" name="_method" value="DELETE" class="form-control">

                <a href="<?php echo e(url('/product/' . $product->id)); ?>" class="btn btn-warning btn-sm">Edit</a>

                <button class="btn btn-danger btn-sm">Hapus</button>

            </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td class="text-center" colspan="6">Tidak ada data</td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\latihan_laravel\resources\views/products/index.blade.php */ ?>