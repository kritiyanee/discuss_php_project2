<?php $__env->startSection('show'); ?>

    <div class="container">

        <form action="/search" method="get">
            <div class="form-group" style="margin-top: 50px;">
                <h2 style="font-size: 33px; font-weight: bold;"> Search any topic <br> you want to read. </h2>
                <br>
                <div class="md-form active-pink active-pink-2 col-sm-4" style="border-bottom: 1px solid #000000;">
                    <label> Search topic </label>
                    <input type="text" class="form-control" name="search" placeholder="eg. Travel To Hongkong" style="border: none; background: transparent;">
            
                </div>

                
                <div class="carousel slide" data-ride="carousel" style="margin-left:600px; margin-top: -180px;">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="width: 500px; width: 500px;">
                            <img class="d-block w-100" src="https://images.unsplash.com/photo-1544717297-fa95b6ee9643?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80">
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </form>
        <br>
        <br>
        <section class="text-center my-5">
            <h2 class="h1-responsive font-weight-bold my-3"> Most people visit </h2>
            <p class="my-4">Duis aute irure dolor in reprehenderit in voluptate velit
                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <div class="view overlay rounded z-depth-2 mb-4">
                        <img class="img-fluid" src="https://images.unsplash.com/photo-1551279880-03041531948f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80">
                    </div>
                    <a href="#!" class="tag-travel">
                        <h6 class="font-weight-bold mb-3"><i class="fas fa-map pr-2"></i> Travel </h6>
                    </a>
                    <h4 class="font-weight-bold mb-3"><strong> Why people in Mexico doing this? </strong></h4>
                    <!-- Post data -->
                    <p>by <a class="font-weight-bold"> tmon </a>, 14/02/2019 </p>
                    <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
                        quo minus id quod maxime placeat facere possimus voluptas.</p>
                    <button type="button" class="btn btn-outline-primary btn-rounded"> Read More </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
                    <div class="view overlay rounded z-depth-2 mb-4">
                        <img class="img-fluid" src="https://images.unsplash.com/photo-1554829992-bcade1b796de?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80">
                    </div>
                    <a href="#!" class="deep-orange-text">
                        <h6 class="font-weight-bold mb-3"><i class="fas fa-university"></i> Government </h6>
                    </a>
                    <h4 class="font-weight-bold mb-3"><strong> There are many cheaters in OECT</strong></h4>
                    <p>by <a class="font-weight-bold"> Prayuth </a>, 01/05/2019</p>
                    <p class="dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        voluptatum deleniti atque corrupti quos dolores.</p>
                    <button type="button" class="btn btn-outline-primary btn-rounded"> Read More </button>
                </div>
                <div class="col-lg-4 col-md-6 mb-0">
                    <div class="view overlay rounded z-depth-2 mb-4">
                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/13.jpg">
                    </div>
                    <a href="#!" class="blue-text">
                        <h6 class="font-weight-bold mb-3"><i class="fas fa-globe"></i> Culture </h6>
                    </a>
                    <h4 class="font-weight-bold mb-3"><strong> Attention To Global Warming  </strong></h4>
                    <p>by <a class="font-weight-bold">Billy Forester</a>, 11/07/2018</p>
                    <p class="dark-grey-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                        quia consequuntur magni dolores eos qui ratione.</p>
                    <button type="button" class="btn btn-outline-primary btn-rounded"> Read More </button>
                </div>
            </div>
        </section>
        <br>
    <div class="container">
            <div class="row" style="padding: 20px;" >
                <?php if(count($albums) > 0): ?>
                    <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


















                        <div class="card-group">
                            <div class="card-body">
                                <div class="view overlay rounded z-depth-2">
                                    <img src="uploads/album_covers/<?php echo e($album->dis_img); ?>" alt="" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <a href="" class="green-text">
                                        <h6 class="font-weight-bold mb-3"><i class="fas fa-globe"></i> <?php echo e($album->dis_type); ?> </h6>
                                    </a>
                                    <h4 class="font-weight-bold mb-3"><?php echo e($album->dis_name); ?></h4>
                                    <p><?php echo e($album->dis_body); ?></p>
                                    <a href="/show/<?php echo e($album->id); ?>" class="btn btn-outline-primary mr-1"><i class="fab fa-readme"></i></i> Read More </a>
                                </div>
                            </div>
                        </div>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>

                    <div class="text-center">
                        <h1 style="color: #adb5bd ;"> Exchange stories, <br>
                            Discussion with each other. </h1>
                    </div>
                <?php endif; ?>
            </div>
        <br>
        <!-- footer -->
        <footer class="page-footer font-small special-color-dark pt-4">
            <div class="container">
                <ul class="list-unstyled list-inline text-center">
                    <li class="list-inline-item">
                        <a class="btn-floating btn-fb mx-1">
                            <i class="fab fa-facebook-f"> </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-tw mx-1">
                            <i class="fab fa-twitter"> </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-gplus mx-1">
                            <i class="fab fa-google-plus-g"> </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-li mx-1">
                            <i class="fab fa-linkedin-in"> </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-dribbble mx-1">
                            <i class="fab fa-dribbble"> </i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
                 discuss.local </a>
            </div>
        </footer>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/discuss/resources/views/show/list.blade.php ENDPATH**/ ?>