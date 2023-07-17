<footer class="footer py-4  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    ©
                    <script data-cfasync="false"
                            src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    ,
                    made with <i class="fa fa-heart"></i> by
                    <a href="admin" class="font-weight-bold" target="_blank">Alfan Fauzan</a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="<?= BASEURL ?>assets/js/core/popper.min.js"></script>
<script src="<?= BASEURL ?>assets/js/core/bootstrap.min.js"></script>
<script src="<?= BASEURL ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= BASEURL ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="<?= BASEURL ?>assets/js/plugins/sweetalert.min.js"></script>
<script src="<?= BASEURL ?>assets/js/plugins/dragula/dragula.min.js"></script>
<script src="<?= BASEURL ?>assets/js/plugins/jkanban/jkanban.js"></script>
<script src="<?= BASEURL ?>assets/js/plugins/choices.min.js"></script>
<script src="<?= BASEURL ?>assets/js/plugins/dropzone.min.js"></script>
<script src="<?= BASEURL ?>assets/js/plugins/quill.min.js"></script>
<script src="<?= BASEURL ?>assets/js/plugins/multistep-form.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="<?= BASEURL ?>assets/js/material-dashboard.min.js?v=3.0.6"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
        integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
        data-cf-beacon='{"rayId":"7d6073e9dc48a03f","version":"2023.4.0","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}'
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="<?= BASEURL ?>assets/js/owl.carousel.min.js"></script>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        margin: 10,
        loop: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?= Flasher::flash() ?>

</body>
</html>