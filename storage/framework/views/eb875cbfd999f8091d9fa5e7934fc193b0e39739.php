
<?php $__env->startSection('forms'); ?>
    <div class="container">
        <h1> Create location </h1>
        <a href="/home" class="btn btn-info">
            <i class="fas fa-chevron-left"></i> back
        </a>
        <div class="card mt-2">
            <div class="card-body">
                <form action ="/form/store" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label> Photo </label>
                        <br>
                        <span class="btn btn-default btn-file" >
                    Location's photo <input type="file" name="lo_img" id="lo_img">
                </span>
                    </div>

                    <div class="form-group">
                        <label> Type </label>
                        <select class="form-control" name="lo_type" id="lo_type">
                            <option value="0"> choose location type </option>
                            <option value="1"> house </option>
                            <option value="2"> studio </option>
                            <option value="3"> cafe </option>
                            <option value="4"> office </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label> Location's name </label>
                        <input type="text" class="form-control" name="lo_name" id="lo_name" placeholder="your location name">
                    </div>

                    <div class="form-group">
                        <label> Price </label>
                        <select class="form-control" name="lo_price" id="lo_price">
                            <option value="0"> price </option>
                            <option value="1"> 1,000 </option>
                            <option value="2"> 2,000 </option>
                            <option value="3"> 3,000 </option>
                            <option value="4"> 4,000 </option>
                            <option value="5"> 5,000 </option>
                            <option value="6"> 6,000 </option>
                            <option value="7"> 7,000 </option>
                            <option value="8"> 8,000 </option>
                            <option value="9"> 9,000 </option>
                            <option value="10"> 10,000 </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label> About location </label>
                        <textarea placeholder="describe your location" type="text" class="form-control" name="lo_body" id="lo_body" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label> Location's size  </label>
                        <div class="row">
                            <div class="form-group ml-3">
                                <div class="form-group ml-2">
                                    <label class="ml-2 mr-2 mt-2"> height </label>
                                    <input type="text" placeholder=" meters " class="form-control text-center" name="lo_height" id="lo_height">
                                    <label class="ml-2"> width </label>
                                    <input type="text" placeholder="square meters " class="form-control text-center" name="lo_width" id="lo_width" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label> Suitability of location </label>
                        <textarea placeholder="such as wedding, photo shoot or workshop " type="text" class="form-control" name="lo_detail" id="lo_detail" rows="4"></textarea>
                    </div>

                    <button class="btn btn-primary" >
                        submit
                    </button>
            </div>
            </form>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/loman/resources/views/form/create.blade.php ENDPATH**/ ?>