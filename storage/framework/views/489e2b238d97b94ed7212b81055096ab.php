<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><?php echo e($appName); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('listings')); ?>">RENT</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('list')); ?>">LIST</a></li>
                <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\laragon\www\myproject\resources\views/livewire/navbar.blade.php ENDPATH**/ ?>