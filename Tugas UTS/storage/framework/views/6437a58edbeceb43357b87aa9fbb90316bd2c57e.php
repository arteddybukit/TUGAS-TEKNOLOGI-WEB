<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;6
00;700&display=swap">
    <!-- Scripts -->
    
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/twelements/dist/css/index.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <?php echo $__env->make('layouts.navigationhome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Page Content -->
        <main>
            <?php echo e($slot); ?>

        </main>
    </div>
</body>

</html><?php /**PATH D:\kecak\resources\views/layouts/home-layout.blade.php ENDPATH**/ ?>