<?php $__env->startSection('content'); ?>
<br><br><br>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('contactus')->html();
} elseif ($_instance->childHasBeenRendered('V5HUAxk')) {
    $componentId = $_instance->getRenderedChildComponentId('V5HUAxk');
    $componentTag = $_instance->getRenderedChildComponentTagName('V5HUAxk');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('V5HUAxk');
} else {
    $response = \Livewire\Livewire::mount('contactus');
    $html = $response->html();
    $_instance->logRenderedChild('V5HUAxk', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\manoj\Downloads\HMS\resources\views/contact.blade.php ENDPATH**/ ?>