<!--begin::Global Config(global config for global JS scripts)-->
<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1400
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };

</script>
<!--end::Global Config-->
<script src="/js/vendor-mix.js"></script>

{{-- <script src="assets/plugins/global/plugins.bundle.js"></script> --}}

{{-- <script src="assets/js/scripts.bundle.js"></script> --}}

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<!--end::Global Theme Bundle-->

<!--end::Page Scripts-->
{{-- <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script> --}}
<script src="assets/js/pages/crud/datatables/basic/scrollable.js"></script>
<script src="assets/js/pages/crud/datatables/basic/paginations.js"></script>
<script type="text/javascript"  src="assets/plugins/fullcalendar/lib/moment.min.js"></script>
<script type="text/javascript"  src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript"  src="assets/plugins/fullcalendar/lang-all.js"></script>
<script type="text/javascript">
;(function($, window, document) {
    $(document).ready(function() {
        $('#ei-slider').eislideshow({
            animation           : 'center',
            autoplay            : true,
            slideshow_interval  : 5000,
        });

        // show the ajax functional button when the page loaded completely and
        // Disable mouse right click on modal button
        $('.ajax-modal-btn').bind('contextmenu', function(e) {
            return false;
        }).show();

        // Initialise all plugins
        // initDatatables();
        // initAppPlugins();
        // initMassActions();

        // Support for AJAX loaded modal window.
        $('body').on('click', '.ajax-modal-btn', function(e) {
            e.preventDefault();
            // apply_busy_filter();

            var url = $(this).data('link');
            // var url = $(this).attr('href');
            if (url.indexOf('#') == 0) {
                $(url).modal('open');
            } else {
                // alert(url.indexOf('#'))
                $.get(url, function(data) {
                        // remove_busy_filter();
                        //Load modal data
                        $('#myDynamicModal').modal().html(data);
                        // $("#myDynamicModal").modal("toggle")
                        //Initialize application plugins after ajax load the content
                        if (typeof initAppPlugins == 'function') {
                            initAppPlugins();
                        }
                    })
                    .done(function() {
                        $('.modal-body input:text:visible:first').focus();
                    })
                    .fail(function(response) {
                        if (401 === response.status) {
                            window.location = "{{ route('login') }}";
                        } else {
                            console.log("{{ trans('responses.error') }}");
                        }
                    });
            }
        });

        // Confirmation for actions
        $('body').on('click', '.confirm', function(e) {
            e.preventDefault();

            var form = this.closest("form");
            var url = $(this).attr("href");

            $.confirm({
                title: "{{ trans('Confirmer') }}",
                content: "{{ trans('Êtes vous sûre de vouloir supprimer ?') }}",
                type: 'red',
                icon: 'fa fa-question-circle',
                animation: 'scale',
                closeAnimation: 'scale',
                opacity: 0.5,
                buttons: {
                    'confirm': {
                        text: '{{ trans('ok') }}',
                        keys: ['enter'],
                        btnClass: 'btn-red',
                        action: function() {
                            // apply_busy_filter();

                            if (typeof url != 'undefined') {
                                location.href = url;
                            } else if (form != null) {
                                form.submit();
                                // notie.alert(4, "{{ trans('Suppression Effectuée') }}", 3);
                            }
                            return true;
                        }
                    },
                    'cancel': {
                        text: '{{ trans('Annuler') }}',
                        action: function() {
                            // notie.alert(2, "{{ trans('Suppression Annulée') }}", 3);
                        }
                    },
                }
            });
        });


        $(document).on('click', '#modalButton', function(event) {
            event.preventDefault();
            let href = $(this).attr('data-attr');
            $.ajax({
                url: href,
                beforeSend: function() {
                    $('#loader').show();
                },
                // return the result
                success: function(result) {
                    $('#myOfferModal').modal("show");
                    $('#mediumBody').html(result).show();
                },
                complete: function() {
                    $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    $('#loader').hide();
                },
                timeout: 8000
            })
        })
        // Mark all Notifications As Read.


        // Update announcement read timestamp.


        $('body').on('click', '#modalClose', function(e) {
            $('#myDynamicModal').modal().hide();
        })


        function remove_busy_filter(dom = 'body') {
            //Enable mouse pointer events and remove the busy filter
            jQuery(dom).css("pointer-events", "auto");
            jQuery(".wrapper").removeClass('blur-filter');
            jQuery('.loader').hide();
        }
    });
}(window.jQuery, window, document));
</script>
