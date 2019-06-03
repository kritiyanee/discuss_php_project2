
<?php $__env->startSection('show'); ?>

    <div class="container">

        <form action="/search" method="get">
        <div class="form-group">
            <h2 style="font-size: 33px"> Search locations for <br> filming or advertisement. </h2>
            <br>

            <div class="form-group col-sm-4" >
                <label> Search locations </label>
                <input type="text" class="form-control" name="search" placeholder="any keyword">
            </div>

            <div class="carousel slide" data-ride="carousel" style="margin-left:600px; margin-top: -70px">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="width: 400px; height: 300px;">
                        <img src="https://images.unsplash.com/photo-1523217582562-09d0def993a6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1100&q=80" class="d-block w-100" >
                    </div>
                    <div class="carousel-item" style="width: 400px; height: 300px;">
                        <img src="https://images.unsplash.com/photo-1506126279646-a697353d3166?ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" class="d-block w-100" >
                    </div>
                    <div class="carousel-item" style="width: 400px; height: 300px;">
                        <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" class="d-block w-100" >
                    </div>
                </div>
            </div>

            <br>

        </div>
        </form>



        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title"> Create your location for rent.</h5>
                <p class="card-text"> Log-in or Register to create location. </p>
                <a href="/form/create" class="btn btn-primary"> create location </a>
            </div>
        </div>
        <br>
    <div class="container">
            <div class="row col-lg-4 " style="padding: 20px;" >
                <?php if(count($albums) > 0): ?>
                    <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="card" style="width: 18rem;">
                            <a href="/albums/<?php echo e($album->id); ?>">
                                <img src="uploads/album_covers/<?php echo e($album->lo_img); ?>" alt="" class="card-img-top">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"> <?php echo e($album->lo_name); ?>

                                    <i class="far fa-heart" style="margin-left: 150px"></i>
                                </h5>

                                <p class="card-text"> <?php echo e($album->lo_detail); ?> </p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"> <?php echo e($album->lo_type); ?> </li>
                                <li class="list-group-item"> <?php echo e($album->lo_price); ?>  </li>
                                <li class="list-group-item"> width: <?php echo e($album->lo_width); ?> </li>
                                <li class="list-group-item"> height: <?php echo e($album->lo_height); ?> </li>
                                <li class="list-group-item">  <?php echo e($album->lo_body); ?>  </li>
                            </ul>

                            <a href="#" class="btn btn-primary"> Reserve </a>

                        </div>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <div class="text-center">
                        <h1 style="color: #adb5bd ;"> Send me your location <br>
                            Let's focus on communication :-} </h1>
                    </div>
                <?php endif; ?>
            </div>

    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/loman/resources/views/show/list.blade.php ENDPATH**/ ?>