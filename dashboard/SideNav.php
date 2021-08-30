<?php
include('../components/head.php')
?>

<aside class="fixed-navbar">
    <header class="fixed-navbar-header">
        <span class="fixed-navbar-logo"><a href="../index.php"><img src="../images/logo.png" /></a></span>
    </header>
    <nav class="fixed-navbar-nav">
        <button class="fixed-navbar-button">
            <a href="MySpace.php"><span class="fixed-navbar-icon uil uil-home"></span></a>
        </button>
        <button class="fixed-navbar-button">
            <span class="fixed-navbar-icon uil uil-user"></span>
        </button>
        <button class="fixed-navbar-button">
            <span class="fixed-navbar-icon uil uil-envelope"></span>
        </button>
        <button class="fixed-navbar-button">
            <a href="Create.php"><span class="fixed-navbar-icon uil uil-plus"></span></a>
        </button>
    </nav>
    <footer class="fixed-navbar-footer">
        <button class="fixed-navbar-button">

            <article class="block pulse2">
                <div class="block-inner">
                    <div class="block-component">
                        <div class="pulse2-badge "><a href="../logout.php"><span class="fixed-navbar-icon uil uil-sign-out-alt text-white flex items-center justify-center"></span></a></div>
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
                </style>
            </article>
        </button>
    </footer>
</aside>