<?php $__env->startSection('forms'); ?>
    <div class="container">
        <h1> Discussion is a exchange <br> of knowledge. </h1>
        <br>
        <div class="card mt-2">
            <div class="card-body">
                <form action ="/form/store" method="POST" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>


                    <div class="form-group">
                        <label> Topic Type: </label>
                        <select class="form-control" name="dis_type">
                            <option value="0"> choose topic type </option>
                            <option value="travel"> travel </option>
                            <option value="education"> education </option>
                            <option value="culture"> culture </option>
                            <option value="government"> government </option>
                            <option value="government"> life </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label> Topic Name: </label>
                        <input type="text" class="form-control" name="dis_name"  placeholder="your topic name">
                    </div>

                    <div class="form-group">
                        <label> Detail of your topic: </label>
                        <br>
                        <a href="#" style="text-decoration: none; margin-left: 20px;">
                            <i class="fas fa-image" style="color: #202428;"></i>
                        </a>

                        <a href="#" style="text-decoration: none;">
                            <i class="fas fa-map-marker-alt" style="color: #202428; margin-left: 5px;"></i>
                        </a>

                        <a href="#" style="text-decoration: none;">
                            <i class="far fa-smile" style="color: #202428; margin-left: 5px;"></i>
                        </a>

                        <a href="#" style="text-decoration: none;">
                            <i class="fas fa-italic" style="color: #202428; margin-left: 5px;"></i>
                        </a>

                        <a href="#" style="text-decoration: none;">
                            <i class="fas fa-underline" style="color: #202428; margin-left: 5px;"></i>
                        </a>

                        <a href="#" style="text-decoration: none;">
                            <i class="fas fa-align-left" style="color: #202428; margin-left: 5px;"></i>
                        </a>

                        <a href="#" style="text-decoration: none;">
                            <i class="fas fa-align-right" style="color: #202428; margin-left: 5px;;"></i>
                        </a>

                        <a href="#" style="text-decoration: none;">
                            <i class="fas fa-align-justify" style="color: #202428; margin-left: 5px;"></i>
                        </a>

                        <textarea placeholder="describe your location" type="text" class="form-control" name="dis_body"  rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label> Photo Display:  </label>
                        <br>
                        <span class="btn btn-default btn-file" >
                    topic's photo <input type="file" name="dis_img">
                        </span>
                    </div>



                    <div>
                        <a href="/home" class="btn btn-outline-secondary">
                            <i class="fas fa-chevron-left"></i> back
                        </a>
                        <input class="btn btn-outline-success" type="submit" value="submit">
                    </div>


            </form>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/discuss/resources/views/form/create.blade.php ENDPATH**/ ?>