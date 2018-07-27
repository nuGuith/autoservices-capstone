<table class="<?php echo e(isset($class) ? $class : 'table'); ?>">
    <?php if(count($columns)): ?>
	<thead>
		<tr>
        <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <th <?php echo $c->getClasses() ? ' class="' . $c->getClassString() . '"' : ''; ?>>
                <?php if($c->isSortable()): ?>
                    <a href="<?php echo e($c->getSortURL()); ?>">
                        <?php echo $c->getLabel(); ?>

                        <?php if($c->isSorted()): ?>
                            <?php if($c->getDirection() == 'asc'): ?>
                                <span class="fa fa-sort-asc"></span>
                            <?php elseif($c->getDirection() == 'desc'): ?>
                                <span class="fa fa-sort-desc"></span>
                            <?php endif; ?>
                        <?php endif; ?>
                    </a>
                <?php else: ?>
                    <?php echo e($c->getLabel()); ?>

                <?php endif; ?>
            </th>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</tr>
	</thead>
    <?php endif; ?>
	<tbody>
        <?php if(count($rows)): ?>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td <?php echo $c->getClasses() ? ' class="' . $c->getClassString() . '"' : ''; ?>>
                 <?php if($c->hasRenderer()): ?>
                    
                    <?php echo $c->render($r); ?>

                    <?php else: ?>
                    
                        <?php echo isset($r->{'rendered_' . $c->getField()}) ? $r->{'rendered_' . $c->getField()} : $r->{$c->getField()}; ?>

                    <?php endif; ?>
                </td>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
	</tbody>
</table>

<?php if(is_object($rows) && class_basename(get_class($rows)) == 'LengthAwarePaginator'): ?>
    
    <?php echo $rows->render(); ?>

<?php endif; ?>
