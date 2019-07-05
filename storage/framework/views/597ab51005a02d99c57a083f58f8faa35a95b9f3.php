<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:18px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:35px;
            padding:40px;
            width:750px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:28px;
            margin-bottom:15px;
        }
        table{
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:740px;
        }
        td, tr, th{
            padding:12px;
            border:1px solid #333;
            width:185px;
        }
        th{
            background-color: #f0f0f0;
        }
        h4, p{
            margin:0px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <caption>
                Uti Fiore Invoice App
            </caption>
            <thead>
                <tr>
                    <th colspan="3">Invoice <strong>#<?php echo e($invoice->id); ?></strong></th>
                    <th><?php echo e($invoice->created_at->format('D, d M Y')); ?></th>
                </tr>
                <tr>
                    <td colspan="2">
                        <h4>Perusahaan: </h4>
                        <p>Uti Fiore.<br>
                            Cilendek Timur, Kota Bogor<br>
                            089528249621<br>
                            utifiore@gmail.com
                        </p>
                    </td>
                    <td colspan="2">
                        <h4>Pelanggan: </h4>
                        <p><?php echo e($invoice->customer->name); ?><br>
                        <?php echo e($invoice->customer->address); ?><br>
                        <?php echo e($invoice->customer->phone); ?> <br>
                        <?php echo e($invoice->customer->email); ?>

                        </p>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Subtotal</th>
                </tr>
                <?php $__currentLoopData = $invoice->detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($row->product->title); ?></td>
                    <td>Rp <?php echo e(number_format($row->price)); ?></td>
                    <td><?php echo e($row->qty); ?></td>
                    <td>Rp <?php echo e($row->subtotal); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th colspan="3">Subtotal</th>
                    <td>Rp <?php echo e(number_format($invoice->total)); ?></td>
                </tr>
                <tr>
                    <th>Pajak</th>
                    <td></td>
                    <td>2%</td>
                    <td>Rp <?php echo e(number_format($invoice->tax)); ?></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total</th>
                    <td>Rp <?php echo e(number_format($invoice->total_price)); ?></td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>

<?php /* C:\xampp\htdocs\latihan_laravel\resources\views/invoice/print.blade.php */ ?>