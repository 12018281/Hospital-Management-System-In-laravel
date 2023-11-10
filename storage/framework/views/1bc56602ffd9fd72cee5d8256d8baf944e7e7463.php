<!doctype html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" <?php echo e($app = App\Models\general_settings::latest()->first()); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo e($app ? config('app.url') . 'storage/' . $app->favicon_path : config("app.url").'images/fevicon.ico.png'); ?> " type="image/x-icon" />

    <link rel="apple-touch-icon"
        href="<?php echo e($app ? config('app.url') . 'storage/' . $app->favicon_path :  config("app.url").'images/favicon.png'); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/custom.css">
    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>
    <!-- [if lt IE 9] -->
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo \Livewire\Livewire::scripts(); ?>

</head>

<body class="clinic_version">

    <!-- LOADER -->
    <div id="preloader">
        <a href="<?php echo e(url('/')); ?>"><img class="preloader" src="<?php echo e(config('app.url')); ?>images/loaders/heart-loading2.gif" alt=""></a>
    </div>
    <!-- END LOADER -->
    <header>
        <div class="header-top wow fadeIn">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img
                        src="<?php echo e($app ? config('app.url') . 'storage/' . $app->logo_path :  config("app.url").'images/logo.png'); ?>"
                        alt="logo image "></a>
                <div class="right-header">
                    <div class="header-info">
                        <div class="info-inner">
                            <span class="icontop"><img src="<?php echo e(config('app.url')); ?>images/phone-icon.png" alt="#"></span>
                            <span class="iconcont"><a
                                    href="tel:<?php echo e($app ? $app->business_phone : '123 123 123'); ?>"><?php echo e($app ? $app->business_phone : '7579865430'); ?></a></span>
                        </div>
                        <div class="info-inner">
                            <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <span class="iconcont"><a data-scroll
                                    href="mailto:<?php echo e($app ? $app->business_email : 'tauseed@test.com'); ?>"><?php echo e($app ? $app->business_email : 'ram@test.com'); ?></a></span>
                        </div>
                        <div class="info-inner">
                            <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                            <span class="iconcont"><a data-scroll href="#">Daily:
                                    <?php echo e($app ? $app->working_horse : '7:00 AM - 8:00 PM'); ?></a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom wow fadeIn">
            <div class="container">
                <nav class="main-menu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars"
                                aria-hidden="true"></i></button>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li onclick="check_active('Home')"><a id="Home" href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li onclick="check_active('Services')"><a id="Services" data-scroll
                                    href="<?php echo e(url('/services')); ?>">Services</a></li>
                            <li onclick="check_active('Doctors')"><a id="Doctors" data-scroll
                                    href="<?php echo e(url('docters')); ?>">Doctors</a></li>
                            <li onclick="check_active('Departments')"><a id="Departments" data-scroll
                                    href="#departments">Departments</a></li>
                            <li onclick="check_active('About')"><a id="About" data-scroll
                                    href="<?php echo e(url('/about')); ?>">About us</a></li>
                            <li onclick="check_active('Contact')"><a id="Contact" data-scroll
                                    href="<?php echo e(url('contact')); ?>">Contact</a></li>
                            <?php if(auth()->guard()->check()): ?>
                                <?php if(auth()->user()->is_super_admin): ?>
                                    <li onclick="check_active('admin-area')"><a id="admin-area" data-scroll
                                            href="<?php echo e(route('admin_settings')); ?>">Admin Area</a></li>
                                <?php endif; ?>
                            <?php endif; ?>

                        </ul>
                    </div>
                </nav>
               <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search')->html();
} elseif ($_instance->childHasBeenRendered('uv9SYk7')) {
    $componentId = $_instance->getRenderedChildComponentId('uv9SYk7');
    $componentTag = $_instance->getRenderedChildComponentTagName('uv9SYk7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('uv9SYk7');
} else {
    $response = \Livewire\Livewire::mount('search');
    $html = $response->html();
    $_instance->logRenderedChild('uv9SYk7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    </header>
    <main class="py-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <footer id="footer" class="footer-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo padding">
                        <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(($app) ? 'storage/'.$app->logo_path :  config("app.url").'images/logo.png'); ?>"
                                alt=""></a>
                        <p><?php echo e($app ? $app->description : 'hi this isLocavore pork belly scen ester pine est chill wave microdosing pop uple itarian cliche artisan.'); ?>

                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-info padding">
                        <h3>CONTACT US</h3>
                        <p><i class="fa fa-map-marker"
                                aria-hidden="true"></i><?php echo e($app ? $app->address : 'distric Gorakhpur P/O xyz gorakhpur'); ?>

                        </p>
                        <p><i class="fa fa-paper-plane"
                                aria-hidden="true"></i><?php echo e($app ? $app->business_email : 'ram@test.com'); ?>

                        </p>
                        <p><i class="fa fa-phone"
                                aria-hidden="true"></i><?php echo e($app ? $app->business_phone : '7579865430'); ?></p>
                    </div>
                </div>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('subscribe')->html();
} elseif ($_instance->childHasBeenRendered('TdRIDy9')) {
    $componentId = $_instance->getRenderedChildComponentId('TdRIDy9');
    $componentTag = $_instance->getRenderedChildComponentTagName('TdRIDy9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TdRIDy9');
} else {
    $response = \Livewire\Livewire::mount('subscribe');
    $html = $response->html();
    $_instance->logRenderedChild('TdRIDy9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </div>
        </div>
    </footer>
    <div class="copyright-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="footer-text">
                        <p>© <?php echo e(date('Y')); ?> <a id="tw" href="<?php echo e(url('')); ?>"
                                target="_blank"><?php echo e(env('APP_NAME')); ?></a> , Inc</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="social">
                        <ul class="social-links">
                            <li><a href=""><i class="fa fa-rss"></i></a></li>
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-youtube"></i></a></li>
                            <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyrights -->

    <!-- all js files -->
    
    <script src="js/all-in-one.js"></script>
    <!-- all plugins -->
    <script src="js/custom.js"></script>
    <script>
        function check_active(d) {
            document.getElementById(d).addAttribute('class', 'active');
        }

    </script>
</body>

</html>
<?php /**PATH C:\Users\manoj\Downloads\HMS\resources\views/layouts/app.blade.php ENDPATH**/ ?>