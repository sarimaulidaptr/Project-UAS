<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Produk</h3>
                    </div>
                    <div class="card-body">
                        <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('error')); ?>

                            </div>
                        <?php endif; ?>

                        <form action="<?php echo e(url('/product')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="">Nama Produk</label>
                                <input type="text" name="title" class="form-control <?php echo e($errors->has('title') ? 'is-invalid':''); ?>" placeholder="Masukkan nama produk">
                                <p class="text-danger"><?php echo e($errors->first('title')); ?></p>
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <textarea name="description" cols="10" rows="10" class="form-control <?php echo e($errors->has('description') ? 'is-invalid':''); ?>"></textarea>
                                <p class="text-danger"><?php echo e($errors->first('description')); ?></p>
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="number" name="price" class="form-control <?php echo e($errors->has('price') ? 'is-invalid':''); ?>">
                                <p class="text-danger"><?php echo e($errors->first('price')); ?></p>
                            </div>
                            <div class="form-group">
                                <label for="">Stok</label>
                                <input type="number" name="stock" class="form-control <?php echo e($errors->has('stock') ? 'is-invalid':''); ?>">
                                <p class="text-danger"><?php echo e($errors->first('stock')); ?></p>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger btn-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\latihan_laravel\resources\views/products/create.blade.php */ ?>