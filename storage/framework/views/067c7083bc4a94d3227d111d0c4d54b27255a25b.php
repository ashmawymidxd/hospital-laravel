<?php $__env->startSection('css'); ?>

    <style>
        .panel {display: none;}
    </style>


    <!-- Sidemenu-respoansive-tabs css -->
    <link href="<?php echo e(URL::asset('Dashboard/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex" style="background-color: #fcfcfc">
                <div class="row wd-100p mx-auto text-center">
                    <div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
                        <img src="<?php echo e(URL::asset('Dashboard/img/media/login.png')); ?>" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
                    </div>
                </div>
            </div>
            <!-- The content half -->
            <div class="col-md-6 col-lg-6 col-xl-5 bg-white">
                <div class="login d-flex align-items-center py-2">
                    <!-- Demo content-->
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                                <div class="card-sigin">
                                    <div class="mb-5 d-flex"> <a href="<?php echo e(url('/' . $page='index')); ?>"><img src="<?php echo e(URL::asset('Dashboard/img/brand/favicon.png')); ?>" class="sign-favicon ht-40" alt="logo"></a><h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">Va<span>le</span>x</h1></div>
                                    <div class="card-sigin">
                                        <div class="main-signup-header">
                                            <h2><?php echo e(trans('Dashboard/login_trans.Welcome')); ?></h2>
                                            <?php if($errors->any()): ?>
                                                <div class="alert alert-primary">
                                                    <div class="p-2 rounded-5">
                                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div><?php echo e($error); ?></div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>

                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1"><?php echo e(trans('Dashboard/login_trans.Select_Enter')); ?></label>
                                                <select class="form-control" id="sectionChooser">
                                                    <option value="" selected disabled><?php echo e(trans('Dashboard/login_trans.Choose_list')); ?></option>
                                                    <option value="user"><?php echo e(trans('Dashboard/login_trans.user')); ?></option>
                                                    <option value="admin"><?php echo e(trans('Dashboard/login_trans.admin')); ?></option>
                                                    <option value="doctor"><?php echo e(trans('Dashboard/login_trans.doctor')); ?></option>
                                                    <option value="ray_employee"><?php echo e(trans('Dashboard/login_trans.xray')); ?></option>
                                                    <option value="laboratorie_employee"><?php echo e(trans('Dashboard/login_trans.lab')); ?></option>
                                                </select>
                                            </div>

                                            
                                            <div class="panel" id="user">
                                                <h2><?php echo e(trans('Dashboard/login_trans.user')); ?></h2>
                                                <form method="POST" action="<?php echo e(route('login.user')); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label><?php echo e(trans('Dashboard/login_trans.email')); ?></label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><?php echo e(trans('Dashboard/login_trans.password')); ?></label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-main-primary btn-block"><?php echo e(trans('Dashboard/login_trans.login')); ?></button>
                                                    <div class="row row-xs">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-block"><i class="fab fa-facebook-f"></i> <?php echo e(trans('Dashboard/login_trans.login_with_facebook')); ?></button>
                                                        </div>
                                                        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                                            <button class="btn btn-info btn-block"><i class="fab fa-twitter"></i> <?php echo e(trans('Dashboard/login_trans.login_with_twitter')); ?></button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="main-signin-footer mt-5">
                                                    <p><a href=""><?php echo e(trans('Dashboard/login_trans.forget')); ?></a></p>
                                                    <p><?php echo e(trans('Dashboard/login_trans.have_account')); ?><a href="<?php echo e(url('/' . $page='signup')); ?>"><?php echo e(trans('Dashboard/login_trans.create_account')); ?></a></p>
                                                </div>
                                            </div>

                                            
                                            <div class="panel" id="admin">
                                                <h2><?php echo e(trans('Dashboard/login_trans.admin')); ?></h2>
                                                <form method="POST" action="<?php echo e(route('login.admin')); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label><?php echo e(trans('Dashboard/login_trans.email')); ?></label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><?php echo e(trans('Dashboard/login_trans.password')); ?></label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-main-primary btn-block"><?php echo e(trans('Dashboard/login_trans.login')); ?></button>
                                                    <div class="row row-xs">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-block"><i class="fab fa-facebook-f"></i> <?php echo e(trans('Dashboard/login_trans.login_with_facebook')); ?></button>
                                                        </div>
                                                        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                                            <button class="btn btn-info btn-block"><i class="fab fa-twitter"></i> <?php echo e(trans('Dashboard/login_trans.login_with_twitter')); ?></button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="main-signin-footer mt-5">
                                                    <p><a href=""><?php echo e(trans('Dashboard/login_trans.forget')); ?></a></p>
                                                    <p><?php echo e(trans('Dashboard/login_trans.have_account')); ?><a href="<?php echo e(url('/' . $page='signup')); ?>"><?php echo e(trans('Dashboard/login_trans.create_account')); ?></a></p>
                                                </div>
                                            </div>

                                            
                                            <div class="panel" id="doctor">
                                                <h2><?php echo e(trans('Dashboard/login_trans.doctor')); ?></h2>
                                                <form method="POST" action="">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label><?php echo e(trans('Dashboard/login_trans.email')); ?></label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><?php echo e(trans('Dashboard/login_trans.password')); ?></label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-main-primary btn-block"><?php echo e(trans('Dashboard/login_trans.login')); ?></button>
                                                    <div class="row row-xs">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-block"><i class="fab fa-facebook-f"></i> <?php echo e(trans('Dashboard/login_trans.login_with_facebook')); ?></button>
                                                        </div>
                                                        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                                            <button class="btn btn-info btn-block"><i class="fab fa-twitter"></i> <?php echo e(trans('Dashboard/login_trans.login_with_twitter')); ?></button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="main-signin-footer mt-5">
                                                    <p><a href=""><?php echo e(trans('Dashboard/login_trans.forget')); ?></a></p>
                                                    <p><?php echo e(trans('Dashboard/login_trans.have_account')); ?><a href="<?php echo e(url('/' . $page='signup')); ?>"><?php echo e(trans('Dashboard/login_trans.create_account')); ?></a></p>
                                                </div>
                                            </div>

                                            
                                            <div class="panel" id="ray_employee">
                                                <h2><?php echo e(trans('Dashboard/login_trans.xray')); ?></h2>
                                                <form method="POST" action="">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label><?php echo e(trans('Dashboard/login_trans.email')); ?></label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><?php echo e(trans('Dashboard/login_trans.password')); ?></label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-main-primary btn-block"><?php echo e(trans('Dashboard/login_trans.login')); ?></button>
                                                    <div class="row row-xs">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-block"><i class="fab fa-facebook-f"></i> <?php echo e(trans('Dashboard/login_trans.login_with_facebook')); ?></button>
                                                        </div>
                                                        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                                            <button class="btn btn-info btn-block"><i class="fab fa-twitter"></i> <?php echo e(trans('Dashboard/login_trans.login_with_twitter')); ?></button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="main-signin-footer mt-5">
                                                    <p><a href=""><?php echo e(trans('Dashboard/login_trans.forget')); ?></a></p>
                                                    <p><?php echo e(trans('Dashboard/login_trans.have_account')); ?><a href="<?php echo e(url('/' . $page='signup')); ?>"><?php echo e(trans('Dashboard/login_trans.create_account')); ?></a></p>
                                                </div>
                                            </div>

                                            
                                            <div class="panel" id="laboratorie_employee">
                                                <h2><?php echo e(trans('Dashboard/login_trans.lab')); ?></h2>
                                                <form method="POST" action="">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="form-group">
                                                        <label><?php echo e(trans('Dashboard/login_trans.email')); ?></label> <input  class="form-control" placeholder="Enter your email" type="email" name="email" :value="old('email')" required autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <label><?php echo e(trans('Dashboard/login_trans.password')); ?></label> <input class="form-control" placeholder="Enter your password"   type="password"name="password" required autocomplete="current-password" >
                                                    </div><button type="submit" class="btn btn-main-primary btn-block"><?php echo e(trans('Dashboard/login_trans.login')); ?></button>
                                                    <div class="row row-xs">
                                                        <div class="col-sm-6">
                                                            <button class="btn btn-block"><i class="fab fa-facebook-f"></i> <?php echo e(trans('Dashboard/login_trans.login_with_facebook')); ?></button>
                                                        </div>
                                                        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                                            <button class="btn btn-info btn-block"><i class="fab fa-twitter"></i> <?php echo e(trans('Dashboard/login_trans.login_with_twitter')); ?></button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="main-signin-footer mt-5">
                                                    <p><a href=""><?php echo e(trans('Dashboard/login_trans.forget')); ?></a></p>
                                                    <p><?php echo e(trans('Dashboard/login_trans.have_account')); ?><a href="<?php echo e(url('/' . $page='signup')); ?>"><?php echo e(trans('Dashboard/login_trans.create_account')); ?></a></p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>


    <script>
        $('#sectionChooser').change(function(){
            var myID = $(this).val();
            $('.panel').each(function(){
                myID === $(this).attr('id') ? $(this).show() : $(this).hide();
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Dashboard.layouts.master2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hospital\resources\views/Dashboard/User/auth/login.blade.php ENDPATH**/ ?>