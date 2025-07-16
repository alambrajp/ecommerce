<?php $__env->startSection('title', 'EliteShop - Premium Electronics Store'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Welcome to EliteShop</h1>
                    <p class="hero-subtitle">Discover premium electronics and cutting-edge technology. From the latest gadgets to essential accessories, we bring you the future today.</p>
                    <a href="#products" class="btn btn-light btn-lg me-3">
                        <i class="fas fa-shopping-bag me-2"></i>Shop Now
                    </a>
                    <a href="#about" class="btn btn-outline-light btn-lg">
                        Learn More
                    </a>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="hero-image">
                        <i class="fas fa-laptop" style="font-size: 200px; opacity: 0.3;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section id="products" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-title">Featured Products</h2>
                    <p class="lead mb-5">Explore our handpicked selection of premium electronics</p>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $featuredProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card product-card h-100 shadow-sm">
                        <img src="<?php echo e($product['image']); ?>" class="card-img-top product-image" alt="<?php echo e($product['name']); ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?php echo e($product['name']); ?></h5>
                            <p class="card-text flex-grow-1"><?php echo e($product['description']); ?></p>
                            <div class="d-flex justify-content-between align-items-center mt-auto">
                                <span class="price">$<?php echo e(number_format($product['price'], 2)); ?></span>
                                <button class="btn btn-primary btn-sm">
                                    <i class="fas fa-cart-plus me-1"></i>Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-title">Why Choose EliteShop?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center mb-4">
                    <div class="feature-item">
                        <i class="fas fa-shipping-fast fa-3x text-primary mb-3"></i>
                        <h4>Fast Shipping</h4>
                        <p>Free shipping on orders over $100. Fast delivery to your doorstep.</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center mb-4">
                    <div class="feature-item">
                        <i class="fas fa-award fa-3x text-primary mb-3"></i>
                        <h4>Premium Quality</h4>
                        <p>Only the best brands and highest quality products make it to our store.</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center mb-4">
                    <div class="feature-item">
                        <i class="fas fa-headset fa-3x text-primary mb-3"></i>
                        <h4>24/7 Support</h4>
                        <p>Our expert support team is here to help you around the clock.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-title">Ready to Upgrade Your Tech?</h2>
                    <p class="lead mb-4">Join thousands of satisfied customers who trust EliteShop for their technology needs. Discover the latest innovations and exclusive deals.</p>
                    <a href="#products" class="btn btn-cta btn-lg text-white">
                        <i class="fas fa-bolt me-2"></i>Shop Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto text-center">
                    <h3>Stay Updated</h3>
                    <p class="mb-4">Get the latest product updates, exclusive offers, and tech news delivered to your inbox.</p>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email address">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-paper-plane me-1"></i>Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/runner/work/ecommerce/ecommerce/resources/views/landing.blade.php ENDPATH**/ ?>