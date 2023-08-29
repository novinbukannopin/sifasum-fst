<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ url('') }}/" data-template="horizontal-menu-template-starter">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Sifasum | UINSBY</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('') }}/img/uin.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ url('') }}/fonts/materialdesignicons.css" />

    <link rel="stylesheet" href="{{ url('') }}/fonts/fontawesome.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ url('') }}/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('') }}/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ url('') }}/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ url('') }}/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ url('') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ url('') }}/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ url('') }}/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ url('') }}/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">
            <nav class="navbar navbar-expand-lg bg-primary">
                <div class="container-fluid">
                    <img src="{{ url('/img/uin.png') }}" style="height: 60px; margin-right: 15px;" alt="">
                    <a class="navbar-brand ml-3" href="javascript:void(0)">SIFASUM</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar-ex-7">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbar-ex-7">
                        {{-- <div class="navbar-nav me-auto">
                            <a class="nav-item nav-link active" href="javascript:void(0)">Bayaran</a>
                        </div> --}}
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/login') }}">
                                    <i class="tf-icons navbar-icon mdi mdi-lock-outline me-1"></i>Login
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="card">
                <!-- Help Center Header -->
                <div class="help-center-header d-flex flex-column justify-content-center align-items-center mt-5">
                    <h3 class="text-center text-primary fw-semibold">Hello, how can we help?</h3>
                    <p class="text-center px-3 mb-0">Eksplorasi dan Pinjam Ruangan Kampus Sesuai Kebutuhanmu!</p>
                    {{-- <div class="input-wrapper my-1 input-group input-group-lg input-group-merge px-5">
                        <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-magnify mdi-20px"></i></span>
                        <form action="{{ route('searchRoomAvail') }}" method="POST" id="searchRoomAvail">
                            @csrf
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                                aria-describedby="basic-addon1" name="name">
                            <button type="submit" style="display: none;"></button>
                        </form>
                    </div> --}}
                </div>
                {{-- <div class="help-center-knowledge-base bg-help-center py-5 mt-4">

                    <div class="container-xl">

                    </div>
                </div> --}}



                <!-- /Help Center Header -->

                <!-- Popular Articles -->
                <div class="help-center-popular-articles py-5">
                    <div class="container-xl">
                        <h4 class="text-center my-4">Popular Room</h4>
                        <div class="row mb-2">
                            <div class="col-lg-10 mx-auto">
                                <div class="row">
                                    <?php $i = 0; ?>
                                    @foreach ($rooms as $key => $room)
                                        <?php if ($i == 3) {
                                            break;
                                        } ?>
                                        <div class="col-md-4 mb-md-0 mb-4">
                                            <div class="card border shadow-none">
                                                <div class="carousel-item active d-inline">
                                                    <img class="d-block w-100"
                                                        src="{{ url('') }}/img/elements/18.jpg"
                                                        alt="Third slide">
                                                </div>
                                                <div class="card-body text-center">
                                                    {{-- <img class="mb-3"
                                                        src="{{ url('') }}/svg/icons/rocket.svg" height="60"
                                                        alt="Help center landing"> --}}

                                                    <h5>{{ $room->name }}</h5>
                                                    <p>{{ $room->description }}</p>
                                                    <p>Kapasitas : {{ $room->capacity }} orang</p>
                                                    <a class="btn btn-outline-primary waves-effect"
                                                        href="{{ url('/login') }}">Book</a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $i++; ?>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Popular Articles -->

                <!-- Knowledge Base -->

                <!-- /Knowledge Base -->

                <!-- Keep Learning -->

                <!-- /Keep Learning -->


                <!-- /Help Area -->
            </div>
        </div>
    </div>

    <footer class="footer bg-lighter">
        <div
            class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3">
            <div>
                <a href="https://demos.pixinvent.com/materialize-html-admin-template/landing/" target="_blank"
                    class="footer-text fw-bolder">SIFASUM</a>
                ©
            </div>
            <div>
                <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
                <a href="javascript:void(0)" class="footer-link me-4">Help</a>
                <a href="javascript:void(0)" class="footer-link me-4">Contact</a>
                <a href="javascript:void(0)" class="footer-link">Terms &amp; Conditions</a>
            </div>
        </div>
    </footer>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

    <!--/ Layout wrapper -->
    <script>
        $('#bookRoom').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var roomId = button.data('room-id');
            var modal = $(this);
            modal.find('#room_id').val(roomId);
            modal.find('.modal-title').text('Booking of a room ' + button.parents('tr').children('.room-name')
                .text());

            $('#submitBooking').click(() => {
                modal.find('button[type="submit"]').trigger('click');
            });
        });
    </script>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ url('') }}/libs/jquery/jquery.js"></script>
    <script src="{{ url('') }}/libs/popper/popper.js"></script>
    <script src="{{ url('') }}/js/bootstrap.js"></script>
    <script src="{{ url('') }}/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ url('') }}/libs/node-waves/node-waves.js"></script>

    <script src="{{ url('') }}/libs/hammer/hammer.js"></script>

    <script src="{{ url('') }}/js/menu.js"></script>
    <!-- endbuild -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
    <script src="https://unpkg.com/@coreui/coreui@3.2/dist/js/coreui.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(function() {
            let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
            let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
            let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
            let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
            let printButtonTrans = '{{ trans('global.datatables.print') }}'
            let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'
            let selectAllButtonTrans = '{{ trans('global.select_all') }}'
            let selectNoneButtonTrans = '{{ trans('global.deselect_all') }}'

            let languages = {
                'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json',
                'zh_TW': '../js/plugins/datatables/1.10.21/i18n/Chinese-traditional.json'
            };

            $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, {
                className: 'btn'
            })
            $.extend(true, $.fn.dataTable.defaults, {
                language: {
                    url: languages['{{ app()->getLocale() }}']
                },
                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }, {
                    orderable: false,
                    searchable: false,
                    targets: -1
                }],
                select: {
                    style: 'multi+shift',
                    selector: 'td:first-child'
                },
                order: [],
                scrollX: true,
                pageLength: 100,
                dom: 'lBfrtip<"actions">',
                buttons: [{
                        extend: 'selectAll',
                        className: 'btn-primary',
                        text: selectAllButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        },
                        action: function(e, dt) {
                            e.preventDefault()
                            dt.rows().deselect();
                            dt.rows({
                                search: 'applied'
                            }).select();
                        }
                    },
                    {
                        extend: 'selectNone',
                        className: 'btn-primary',
                        text: selectNoneButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'copy',
                        className: 'btn-default',
                        text: copyButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        className: 'btn-default',
                        text: csvButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excel',
                        className: 'btn-default',
                        text: excelButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn-default',
                        text: pdfButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'print',
                        className: 'btn-default',
                        text: printButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn-default',
                        text: colvisButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    }
                ]
            });

            $.fn.dataTable.ext.classes.sPageButton = '';
        });
    </script>
    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ url('') }}/js/main.js"></script>

    <!-- Page JS -->
</body>

</html>
