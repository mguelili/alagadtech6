<!doctype html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Customers</title>
<style>body{font:16px Arial,sans-serif;margin:40px auto;max-width:900px;padding:0 18px;color:#222}nav{display:flex;gap:18px;margin-bottom:24px}a{color:#1457a6}table{border-collapse:collapse;width:100%}th,td{padding:12px;text-align:left;border-bottom:1px solid #ddd}th{background:#f2f4f7}</style></head>
<body><nav><a href="<?php echo e(route('customers.index')); ?>">Customers</a><a href="<?php echo e(route('users.index')); ?>">Users</a></nav>
<h1>Customers</h1><table><thead><tr><th>Full Name</th><th>Email</th><th>Phone</th></tr></thead><tbody>
<?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><tr><td><?php echo e($customer->full_name); ?></td><td><?php echo e($customer->email); ?></td><td><?php echo e($customer->phone); ?></td></tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><tr><td colspan="3">No customers found. Run the database seeder.</td></tr><?php endif; ?>
</tbody></table></body></html>
<?php /**PATH C:\sampp\htdocs\tfa6-laravel\resources\views/customers/index.blade.php ENDPATH**/ ?>