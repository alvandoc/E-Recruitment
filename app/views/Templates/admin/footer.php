<footer class="footer py-4  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    ©
                    <script data-cfasync="false"
                            src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    ,
                    Dibuat <i class="fa fa-heart"></i> Oleh
                    <a href="https://www.instagram.com/alfan.dot" class="font-weight-bold" target="_blank">Alfan
                        Fauzan</a>
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
<script src="<?= BASEURL ?>assets/js/plugins/datatables.js"></script>
<script>
    if (document.getElementById('products-list')) {
        const dataTableSearch = new simpleDatatables.DataTable("#products-list", {
            searchable: true,
            fixedHeight: false,
            perPage: 7
        });

        document.querySelectorAll(".export").forEach(function (el) {
            el.addEventListener("click", function (e) {
                var type = el.dataset.type;

                var data = {
                    type: type,
                    filename: "material-" + type,
                };

                if (type === "csv") {
                    data.columnDelimiter = "|";
                }

                dataTableSearch.export(data);
            });
        });
    }

</script>

<script src="<?= BASEURL ?>assets/js/plugins/choices.min.js"></script>
<script src="<?= BASEURL ?>assets/js/plugins/quill.min.js"></script>
<script src="<?= BASEURL ?>assets/js/plugins/flatpickr.min.js"></script>
<script src="<?= BASEURL ?>assets/js/plugins/dropzone.min.js"></script>
<script>
    if (document.getElementById('editor')) {
        var quill = new Quill('#editor', {
            theme: 'snow' // Specify theme in configuration
        });
    }

    if (document.getElementById('choices-multiple-remove-button')) {
        var element = document.getElementById('choices-multiple-remove-button');
        const example = new Choices(element, {
            removeItemButton: true
        });

        example.setChoices(
            [{
                value: 'One',
                label: 'Label One',
                disabled: true
            },
                {
                    value: 'Two',
                    label: 'Label Two',
                    selected: true
                },
                {
                    value: 'Three',
                    label: 'Label Three'
                },
            ],
            'value',
            'label',
            false,
        );
    }

    if (document.querySelector('.datetimepicker')) {
        flatpickr('.datetimepicker', {
            allowInput: true
        }); // flatpickr
    }

    Dropzone.autoDiscover = false;
    var drop = document.getElementById('dropzone')
    var myDropzone = new Dropzone(drop, {
        url: "<?=BASEURL?>lowongan/tambah",
        method: "POST",
        addRemoveLinks: true

    });
</script>

<script src="<?= BASEURL ?>assets/js/plugins/dragula/dragula.min.js"></script>
<script src="<?= BASEURL ?>assets/js/plugins/jkanban/jkanban.js"></script>
<script src="<?= BASEURL ?>assets/js/plugins/choices.min.js"></script>
<script src="<?= BASEURL ?>assets/js/plugins/dropzone.min.js"></script>
<script src="<?= BASEURL ?>assets/js/plugins/quill.min.js"></script>
<script src="<?= BASEURL ?>assets/js/plugins/multistep-form.js"></script>
<script>
    if (document.getElementById('edit-deschiption')) {
        var quill = new Quill('#edit-deschiption', {
            theme: 'snow' // Specify theme in configuration
        });
    }


    if (document.getElementById('choices-category')) {
        var element = document.getElementById('choices-category');
        const example = new Choices(element, {
            searchEnabled: false
        });
    }


    if (document.getElementById('choices-sizes')) {
        var element = document.getElementById('choices-sizes');
        const example = new Choices(element, {
            searchEnabled: false
        });
    }


    if (document.getElementById('choices-currency')) {
        var element = document.getElementById('choices-currency');
        const example = new Choices(element, {
            searchEnabled: false
        });
    }


    if (document.getElementById('choices-tags')) {
        var tags = document.getElementById('choices-tags');
        const examples = new Choices(tags, {
            removeItemButton: true
        });

        examples.setChoices(
            [{
                value: 'One',
                label: 'Expired',
                disabled: true
            },
                {
                    value: 'Two',
                    label: 'Out of Stock',
                    selected: true
                }
            ],
            'value',
            'label',
            false,
        );
    }
</script>

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

<!--menambahkan class aktif sesuai dengan url-->
<script>
    // Mendapatkan URL saat ini
    var url = window.location.href;

    // Daftar ID yang ingin Anda cocokkan dengan URL
    var idList = ["", "id2", "id3"]; // Ganti dengan ID yang sesuai dengan kebutuhan Anda

    // Mengecek setiap ID pada daftar
    for (var i = 0; i < idList.length; i++) {
        // Mengecek apakah URL mengandung ID yang cocok
        if (url.indexOf(idList[i]) !== -1) {
            // Menemukan kecocokan, menambahkan kelas pada elemen
            var element = document.getElementById(idList[i]);
            if (element) {
                element.classList.add("nama-kelas"); // Ganti "nama-kelas" dengan kelas yang ingin Anda tambahkan
            }
        }
    }

</script>
</body>
</html>