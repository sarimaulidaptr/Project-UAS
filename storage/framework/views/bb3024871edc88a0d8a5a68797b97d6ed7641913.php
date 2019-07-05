<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Pelanggan</h3>
                    </div>
                    <div class="card-body">
                        <?php if(session('error')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(session('error')); ?>

                            </div>
                        <?php endif; ?>
                        <form action="<?php echo e(url('/customer/' . $customer->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="_method" value="PUT" class="form-control">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="name" class="form-control <?php echo e($errors->has('name') ? 'is-invalid':''); ?>" value="<?php echo e($customer->name); ?>" placeholder="Masukkan nama lengkap">
                                <p class="text-danger"><?php echo e($errors->first('name')); ?></p>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="address" cols="5" rows="5" class="form-control <?php echo e($errors->has('address') ? 'is-invalid':''); ?>"><?php echo e($customer->address); ?></textarea>
                                <p class="text-danger"><?php echo e($errors->first('address')); ?></p>
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="number" name="phone" class="form-control <?php echo e($errors->has('phone') ? 'is-invalid':''); ?>" value="<?php echo e($customer->phone); ?>">
                                <p class="text-danger"><?php echo e($errors->first('phone')); ?></p>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control <?php echo e($errors->has('email') ? 'is-invalid':''); ?>" value="<?php echo e($customer->email); ?>" readonly>
                                <p class="text-danger"><?php echo e($errors->first('email')); ?></p>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger btn-sm">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\latihan_laravel\resources\views/customer/edit.blade.php */ ?>