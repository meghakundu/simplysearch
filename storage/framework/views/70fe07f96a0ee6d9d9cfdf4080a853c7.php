<html>
    <head>      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>    </head>
<body>
<div class="container center_div">
    <div class="row">
    <div class="p-5">
<form action="<?php echo e(route('products.search')); ?>" method="GET" class="form-inline">
    <input type="text" name="search" class="p-2" placeholder="Search Products......" style="border-radius:5px">
    <button type="submit" class="btn btn-success">Search</button>
</form>
<?php if(isset($_GET['search'])): ?>
<?php if(count($results) > 0): ?>
    <p> <?php echo e(count($results)); ?> products found. </p>
    <ul>
        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($result->name); ?>:<?php echo e($result->brand); ?></li>
            <!-- <li><?php echo e($result->brand); ?>(<?php echo e($result->count()); ?>)</li> -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php else: ?>
    <p>No results found.</p>
<?php endif; ?>
<?php endif; ?>
    </div>
  </div>
</div>
</body>
</html><?php /**PATH E:\xampp\htdocs\searchbar\resources\views/index.blade.php ENDPATH**/ ?>