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
                    <article class="block pulse2">
                        <div class="block-inner">
                            <div class="block-component">
                                <div class="pulse2-badge"><i class="ri-heart-line"></i></div>
                            </div>
                        </div>
                        <style>
                            .block.pulse2 {
                                background: transparent;
                            }

                            @keyframes pulse2 {
                                0% {
                                    box-shadow: 0 0 0 0 rgba(241, 73, 100, 0.5);
                                }

                                100% {
                                    box-shadow: 0 0 0 28px rgba(241, 73, 100, 0);
                                }
                            }

                            .pulse2-badge {
                                position: relative;
                                display: grid;
                                place-items: center;
                                width: 2rem;
                                height: 2rem;
                                border-radius: 50%;
                                background: #f14964;
                                color: rgba(255, 255, 255, 0.96);
                                animation: pulse2 2s infinite;
                                transition: all 0.5s ease-out;
                            }

                            .pulse2-badge:hover {
                                border: 1px solid #f14964;
                                color: #f14964;
                                background: white;

                            }
                        </style>
                    </article>
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
                    <button type="button" class="bg-blue-500 text-white px-6 py-2 rounded font-medium mx-3 hover:bg-blue-600 transition duration-200 each-in-out">Write to the Owner</button>
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