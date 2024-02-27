

<div class="s-r-inner ScrollStyle2">
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="product-card p-col">
        <a class="product-thumb" href="<?php echo e(route('front.product',$item->slug)); ?>">
            <img class="lazy" alt="Product" src="<?php echo e(asset('assets/images/featuredimage/'.$item->thumbnail)); ?>" style=""></a>
        <div class="product-card-body">
            <h3 class="product-title"><a href="<?php echo e(route('front.product',$item->slug)); ?>">
                <?php echo e(strlen(strip_tags($item->name)) > 35 ? substr(strip_tags($item->name), 0, 35) : strip_tags($item->name)); ?>

            </a></h3>
            
            <h4 class="product-price">
                <?php echo e(PriceHelper::grandCurrencyPrice($item)); ?>

            </h4>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</div>
<div class="bottom-area">
    <a id="view_all_search_" href="javascript:;"><?php echo e(__('View all result')); ?></a>
</div><?php /**PATH /opt/lampp/htdocs/timesquartz/core/resources/views/includes/search_suggest.blade.php ENDPATH**/ ?>