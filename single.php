<?php
include('./components/head.php')
?>
<?php
include('./components/headDash.php')
?>

<body>
    <?php
    include('./sections/navigation.php')
    ?>

    <div class="bg-white">
        <div class="max-w-2xl mx-auto py-24 px-4 grid items-center grid-cols-1 gap-y-16 gap-x-8 sm:px-6 sm:py-32 lg:max-w-7xl lg:px-8 lg:grid-cols-2">
            <div>
                <div class="flex items-center justify-between">
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Technical Specifications </h2>
                    <i class="ri-heart-line text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl"></i>
                </div>

                <p class="mt-4 text-gray-500">The walnut wood card tray is precision milled to perfectly fit a stack of Focus cards. The powder coated steel divider separates active cards from new ones, or can be used to archive important task lists.</p>

                <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Origin</dt>
                        <dd class="mt-2 text-sm text-gray-500">Designed by Good Goods, Inc.</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Material</dt>
                        <dd class="mt-2 text-sm text-gray-500">Solid walnut base with rare earth magnets and powder coated steel card cover</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Dimensions</dt>
                        <dd class="mt-2 text-sm text-gray-500">6.25&quot; x 3.55&quot; x 1.15&quot;</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Finish</dt>
                        <dd class="mt-2 text-sm text-gray-500">Hand sanded and finished with natural oil</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Includes</dt>
                        <dd class="mt-2 text-sm text-gray-500">Wood card tray and 3 refill packs</dd>
                    </div>

                    <div class="border-t border-gray-200 pt-4">
                        <dt class="font-medium text-gray-900">Considerations</dt>
                        <dd class="mt-2 text-sm text-gray-500">Made from natural materials. Grain and color vary with each item.</dd>
                    </div>
                </dl>
            </div>
            <div class="grid grid-cols-1 grid-rows-1 sm:gap-6 lg:gap-8">
                <img src="https://tailwindui.com/img/ecommerce-images/product-feature-03-detail-01.jpg" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="bg-gray-100 rounded-lg">
            </div>
        </div>
    </div>

</body>

<?php
include('./sections/Footer.php')
?>