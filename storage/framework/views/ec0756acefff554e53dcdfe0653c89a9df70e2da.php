<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="appointment-form">

       <h3><span>+</span> Book Appointment</h3>
       <div class="form">
          <form wire:submit.prevent="store_requested_appointment()">
             <fieldset>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="row">
                      <div class="form-group">
                         <input type="text" wire:model.lazy="name" name="name" placeholder="Your Name" class="form-control" />
                         <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-danger text-xs"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                   </div>
                </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="row">
                            <div class="form-group">
                                <input type="email" placeholder="Email Address " wire:model.lazy="email" class="form-control" />
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-danger text-xs"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                     </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="row">
                      <div class="form-group">
                         <input type="number" wire:model.lazy="phone" placeholder="Phone Number" max="10000000000" class="form-control"  />
                         <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-danger text-xs"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                   </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                       <div class="form-group">
                          <input type="text" wire:model.lazy="address" name="address" placeholder="Your Address" class="form-control" />
                          <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-danger text-xs"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                       </div>
                    </div>
                 </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                   <div class="row">
                       <div class="form-group">
                           <input type="datetime-local" name="stime" placeholder="Set Time Of Appointment" wire:model.lazy="stime" class="form-control" />
                           <?php $__errorArgs = ['stime'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-danger text-xs"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                       </div>
                   </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="row">
                      <div class="form-group">
                         <select wire:model.lazy="doctor" name="doctor"  class="form-control">
                          <?php $__empty_1 = true; $__currentLoopData = \App\Models\doctor::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($doctor->name); ?>"><?php echo e($doctor->name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                           <option>No Doctor Found!</option>
                          <?php endif; ?>
                         </select>

                         <?php $__errorArgs = ['doctor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-danger text-xs"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                   </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="row">
                      <div class="form-group">
                         <textarea wire:model.lazy="message" rows="4" id="textarea_message" class="form-control" placeholder="Your Message..."></textarea>
                         <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-danger text-xs"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                       </div>
                   </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <div class="row">
                      <div class="form-group">
                         <div class="center"><button type="submit">Submit</button></div>
                      </div>
                      <?php if(session()->has('message')): ?>
                      <script> alert(' <?php echo e(session('message')); ?>') </script>

                      <?php endif; ?>
                   </div>
                </div>
             </fieldset>
          </form>
       </div>
    </div>
 </div>
<?php /**PATH C:\Users\manoj\Downloads\HMS\resources\views/livewire/appointmentform.blade.php ENDPATH**/ ?>