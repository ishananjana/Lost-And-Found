<?php
    if (!function_exists('showFooter')) {
        function showFooter() {
            echo '
                <footer class="bg-dark text-white text-center py-3">
                <p>&copy; ' . date("Y") . ' Findr. All Rights Reserved.</p>
                <p>
                <a href="privacy-policy.php" class="text-light text-decoration-none mx-2">Privacy Policy</a> | 
                <a href="terms-of-service.php" class="text-light text-decoration-none mx-2">Terms of Service</a>
                </p>
            </footer>';
        }
    }
?>