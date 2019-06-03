<?php $__env->startSection('show'); ?>

    <div class="container">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <img src="/uploads/album_covers/<?php echo e($album->dis_img); ?>" class="card-img-top">
                </div>
            </div>
            <br>
            <div class="col-sm-12">
                <h2> <?php echo e($album->dis_name); ?> </h2>

                <a href="#!" class="blue-text">
                    <h6 class="font-weight-bold mb-3"><i class="fas fa-map pr-2"></i> <?php echo e($album->dis_type); ?> </h6>
                </a>
                <p><?php echo e($album->dis_body); ?></p>
                <p><?php echo e($album->created_at); ?></p>
            </div>

            <div class="button">
                <a href="/show/<?php echo e($album->id); ?>/edit" class="btn btn-outline-info mr-1"> <i class="fas fa-edit"></i> Edit</a>

            </div>

            <form method="POST" action="/show/<?php echo e($album->id); ?>">
                <?php echo e(csrf_field()); ?>

                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-outline-danger"> <i class="fas fa-trash"></i> Delete</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/discuss/resources/views/show/detail.blade.php ENDPATH**/ ?>