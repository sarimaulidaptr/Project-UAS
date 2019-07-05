<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Produk</h3>
                    </div>
                    <div class="card-body">
                        <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('error')); ?>

                            </div>
                        <?php endif; ?>
						
                        <form action="<?php echo e(url('/product/' . $product->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="_method" value="PUT" class="form-control">
                            <div class="form-group">
                                <label for="">Nama Produk</label>
                                <input type="text" name="title" class="form-control" value="<?php echo e($product->title); ?>" placeholder="Masukkan nama produk">
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <textarea name="description" cols="10" rows="10" class="form-control"><?php echo e($product->description); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="number" name="price" class="form-control" value="<?php echo e($product->price); ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Stok</label>
                                <input type="number" name="stock" class="form-control" value="<?php echo e($product->stock); ?>">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\latihan_laravel\resources\views/products/edit.blade.php */ ?>