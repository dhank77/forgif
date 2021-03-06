<?php $__env->startSection('title', 'Friends'); ?>

<?php $__env->startSection('content'); ?>
<section class="settings-page">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<div class="panel padding">
					<div class="panel-heading">
						<h4>Friends</h4>
					</div>
					<div class="panel-body">
	          <ul class="user-list">
	              <?php $__currentLoopData = $friends; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	              <li id="<?php echo e($user->has_follow_waiting ? 'confirm':'search'); ?>-list-<?php echo e($user->id); ?>">
	                  <figure>
	                      <a href="<?php echo e(route("users.detail", $user->username)); ?>">
	                          <img src="<?php echo avatar($user->picture.'_md'); ?>" alt="<?php echo e($user->name); ?>">
	                      </a>
	                  </figure>
	                  <div class="desc">
	                      <div class="name"><a href="<?php echo e(route('users.detail', $user->username)); ?>"><?php echo e($user->name); ?></a> <div class="post-count">(<?php echo e($user->post_count); ?> Posts)</div></div>
	                      <div class="action">
	                      <?php echo forgifButton($user); ?>

	                      </div>
	                  </div>
	              </li>
	              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	          </ul>
					</div>
					<div class="panel-footer text-center">
						<?php echo $friends->links(); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>