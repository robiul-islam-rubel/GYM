<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Online Admission</title>
        <link href="https://erp.uttarauniversity.edu.bd/temp/assets/img/favicon.png" rel="icon">
        <link href="https://erp.uttarauniversity.edu.bd/temp/assets/img/apple-touch-icon.svg" rel="apple-touch-icon">
        <link href="https://erp.uttarauniversity.edu.bd/temp/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://erp.uttarauniversity.edu.bd/temp/assets/css/bootstrap-icons.css" rel="stylesheet">
        <link href="https://erp.uttarauniversity.edu.bd/temp/assets/css/style.css" rel="stylesheet">
        <link href="https://erp.uttarauniversity.edu.bd/temp/assets/css/custom.css" rel="stylesheet">
        <link href="https://erp.uttarauniversity.edu.bd/temp/assets/css/toastr.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://erp.uttarauniversity.edu.bd/temp/assets/css/select2.min.css"/>
        <meta name="csrf-token" content="kIa7aXAtHgfbPVVa121KXCmQGdpXn6cbeVJh9RTH">
        <style>
            .blink {
                animation: blinker 3.5s linear infinite;
                color: maroon;
                font-family: sans-serif;
            }

            @keyframes blinker {
                50% {
                    opacity: 0;
                }
            }
        </style>
    </head>
    <body>
        <main>
            <div class="container">
                <section class="min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="d-flex flex-column align-items-center justify-content-center">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="mt-4 mb-4">
                                            <div class="d-flex justify-content-center mb-2" style="font-size: 2em">
                                                <a href="{{url('welcome')}}" class="logo">Training Studio</a>
                                            </div>
                                        </div>
                                        <h4 class="font-weight-bold text-center text-uppercase mb-2">New member registration Form</h4>
                                        <form id="online_admission_frm" class="row mt-2 g-3 form-prevent" method="POST" action="" enctype="multipart/form-data">
                                            @csrf 
                                            <div class="card">
                                                <div class="card-header">Basic Information</div>
                                                <div class="card-body">
                                                    <div class="row mt-3">
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-2">
                                                                <label class="form-label">
                                                                    Admission Year <span class="required-mask">*</span>
                                                                </label>
                                                                <select class="form-select" id="admission_year" name="admission_year" required>
                                                                    <option value="">-- Select --</option>
                                                                    <option value="2024">2024</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                     
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-2">
                                                                <label class="form-label">
                                                                    Time <span class="required-mask">*</span>
                                                                </label>
                                                                <select class="form-select" name="session_name" id="department_option" onchange="javascript:get_admission_program(this.value)" required>
                                                                    <option value="">-- Select --</option>
                                                                    <option value="1">Morning Session ( 7:00 AM - 10:00 AM )</option>
                                                                    <option value="2">Noon Session ( 12:00 PM - 2:00 PM )</option>
                                                                    <option value="3">Evening Session ( 5:00 PM - 7:30 PM )</option>
                                                                    <option value="4">Night Session ( 9:00 PM - 10:30 PM )</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-2">
                                                                <label class="form-label">
                                                                    Package <span class="required-mask">*</span>
                                                                </label>
                                                                <select class="form-select" name="package_id" id="program_option" required>
                                                                    <option value="">-- Select --</option>
                                                                    <option value="1">Weekly ( 500 BDT )</option>
                                                                    <option value="2">Monthly ( 1500 BDT )</option>
                                                                    <option value="3">Yearly ( 10000 BDT )</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-2">
                                                                <label class="form-label">
                                                                    Full Name <span class="required-mask">*</span>
                                                                </label>
                                                                <input type="text" maxlength="255" class="form-control uppercase" id="name" name="name" value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-2">
                                                                <label class="form-label">
                                                                    Phone Number <span class="required-mask">*</span>
                                                                </label>
                                                                <input type="text" maxlength="11" class="form-control" id="phone" name="phone" value="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-2">
                                                                <label class="form-label">
                                                                    Email <span class="required-mask">*</span>
                                                                </label>
                                                                <input type="email" maxlength="255" class="form-control" id="email" name="email" value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group mb-2">
                                                                <label class="form-label">
                                                                    How did you hear about us? <span class="required-mask">*</span>
                                                                </label>
                                                                <select class="form-select" id="source_id" name="source_id" required>
                                                                    <option value="">-- Select --</option>
                                                                    <option value="1">Alumni</option>
                                                                    <option value="2">Social Media</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                      
                                                    </div>
                                                </div>
                                            </div>

                                            <button class="btn btn-success">Submit</button>
                                        </form>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <script src="https://erp.uttarauniversity.edu.bd/temp/assets/js/jquery.min.js"></script>
        <script src="https://erp.uttarauniversity.edu.bd/temp/assets/js/bootstrap.bundle.min.js"></script>
        <script src="https://erp.uttarauniversity.edu.bd/temp/assets/js/main.js"></script>
        <script src="https://erp.uttarauniversity.edu.bd/temp/assets/js/toastr.min.js"></script>
        <script src="https://erp.uttarauniversity.edu.bd/temp/assets/js/select2.min.js"></script>
        <script src="https://erp.uttarauniversity.edu.bd/temp/assets/js/custom.js"></script>
        <script type="text/javascript">
            $('.form-select').each(function() {
                $(this).select2({
                    dropdownParent: $(this).parent()
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.modal').appendTo("body");
            });
        </script>
        <script type="text/javascript">
            (function() {
                $('.form-prevent').on('submit', function() {
                    $('.form-prevent-multiple-submit').attr('disabled', 'true');
                    $('.form-prevent-multiple-submit').html('Processing...');
                });
            }
            )();
        </script>
        <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>
        <script></script>
        <script>
            function get_admission_program(did) {
                var did = did;
                if (did !== "") {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'GET',
                        url: '/load/admission-program',
                        dataType: 'json',
                        data: {
                            'did': did
                        },
                        success: function(response) {
                            var obj = response;
                            if (obj.output === "success") {
                                console.log(obj.program_list);
                                $('#program_option').html('');
                                $('#program_option').html('<option value="">-- Select --</option>');
                                $.each(obj.program_list, function(key, Event) {
                                    $('#program_option').append($('<option>', {
                                        value: Event.id,
                                        text: Event.name
                                    }));
                                });
                            } else {
                                toastr.options = {
                                    "closeButton": true,
                                    "progressBar": true
                                },
                                toastr.error(obj.msg);
                            }
                        }
                    });
                } else {
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true
                    },
                    toastr.error("Invalid parameter");
                }
            }
        </script>
        <script>
            $("#preview").click(function() {
                var admy = $("#admission_year").val();
                var adms = $("#semester_id").val();
                var dept = $("#department_option").val();
                var prog = $("#program_option").val();
                var name = $("#name").val().toUpperCase();
                var phone = $("#phone").val();
                var email = $("#email").val();
                var srid = $("#source_id").val();
                var ssc = $("#ssc").val();
                var hsc = $("#hsc").val();
                var honors = $("#honors").val();
                var assisted_by = $("#assisted_by").val().toUpperCase();
                if (admy === "") {
                    $("#admission_year_value").html('--');
                } else {
                    $("#admission_year_value").html($("#admission_year option:selected").text());
                }
                if (adms === "") {
                    $("#semester_value").html('--');
                } else {
                    $("#semester_value").html($("#semester_id option:selected").text());
                }
                if (dept === "") {
                    $("#department_value").html('--');
                } else {
                    $("#department_value").html($("#department_option option:selected").text());
                }
                if (prog === "") {
                    $("#program_value").html('--');
                } else {
                    $("#program_value").html($("#program_option option:selected").text());
                }
                if (name === "") {
                    $("#name_value").html('--');
                } else {
                    $("#name_value").html($("#name").val().toUpperCase());
                }
                if (phone === "") {
                    $("#phone_value").html('--');
                } else {
                    $("#phone_value").html($("#phone").val());
                }
                if (email === "") {
                    $("#email_value").html('--');
                } else {
                    $("#email_value").html($("#email").val());
                }
                if (srid === "") {
                    $("#source_value").html('--');
                } else {
                    $("#source_value").html($("#source_id option:selected").text());
                }
                if (ssc === "") {
                    $("#ssc_value").html('--');
                } else {
                    $("#ssc_value").html($("#ssc ").val());
                }
                if (hsc === "") {
                    $("#hsc_value").html('--');
                } else {
                    $("#hsc_value").html($("#hsc ").val());
                }
                if (honors === "") {
                    $("#hons_value").html('--');
                } else {
                    $("#hons_value").html($("#honors ").val());
                }
                if (assisted_by === "") {
                    $("#assisted_by_value").html('--');
                } else {
                    $("#assisted_by_value").html($("#assisted_by ").val().toUpperCase());
                }
            });
        </script>
        <script>
            $("#frm_submit").click(function() {
                $("#online_admission_frm").submit();
            });
        </script>
    </body>
</html>
