
        <!--=== Footer ===-->
        <footer class="container">
            <p class="pull-right">
                <a class="footer-terms bottom-r back-2-top" href="#top">Back to top</a>
            </p>
            <p>
                <a class="footer-terms bottom-l" data-tee-test="google-link" href="http://google.com/" target="_blank">
                <img class="ewwCalculus" alt="google" src="img/7f17e5babe2700090666c91d955a6c58_logo-google-sm.png"></a>
                <a class="footer-terms pp" data-tee-test="privacy-policy-link" href="http://www.google.com/intl/en/policies/privacy/" target="_blank ">Privacy policy</a>
                <a class="footer-terms hp" data-tee-test="helpouts-policy-link" href="https://support.google.com/helpouts/topic/3482817?hl=en&ref_topic=3269999" target="_blank"> Helpouts policies</a>
                <a class="footer-terms hc" data-tee-test="helpouts-support-link" href="http://support.google.com/helpouts?hl=en" target="_blank">Help Center</a>
                <a class="footer-terms pp" href="<?php echo $volunteer_form; ?>" target="_blank ">Volunteer Signup</a>
            </p>
        </footer>
    <!-- /.container -->

    <!-- Load JS here for Faster site load =============================-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min(1).js "></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <script>
        // <!-- Carousel -->
        ! function($) {
            $(function() {
                // carousel demo
                $('#myCarousel').carousel()
            })
        }(window.jQuery)

        // <!-- Pie Chart -->
            var data = [
                {
                    value : 3,
                    color: '#F38630' // orange
                },
                {
                    value : 3,
                    color: '#C72E5C' // red
                },
                {
                    value : 5,
                    color: '#53A93F' // green
                },
                {
                    value : 4,
                    color: '#EDE245' // yellow
                },
                {
                    value : 1,
                    color: '#4662BD' // blue
                },
            ];

            var options = {
                segmentShowStroke : true,
                segmentStrokeWidth : 1,
                segmentStrokeColor : '#E2E2E2',
                percentageInnerCutout : 60,
                animation : true,
                animationSteps : 100,
                animateRotate : true,
                animateScale : false,
                animationEasing: 'easeOutQuart',
            }
            var ctx = $("#cs_doughnut_chart").get(0).getContext("2d");
            var myDoughnut = new Chart(ctx).Doughnut(data,options);


    </script>

</body>
</html>
