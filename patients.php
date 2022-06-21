<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/header.php'); ?>
    <link rel="stylesheet" type="text/css" href="css/datatable-css.css">
    <style>
    .inputError {
        border: solid 1px red;
    }
    </style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include('includes/sidebar.php'); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper">


            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('includes/top-nav.php'); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col text-center text-dark">
                            <h3>Manage Patient Records</h3>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                            <form id="inputForm">
                                <div class="row my-2">
                                    <div class="col">
                                        <input type="text" class='form-control firstname' placeholder="firstname"
                                            name="firstname">
                                    </div>
                                    <div class="col">
                                        <input type="text" class='form-control surname' placeholder="surname"
                                            name="surname">
                                    </div>
                                    <div class="col">
                                        <input type="email" class='form-control email' placeholder="email" name="email">
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col">
                                        <input type="number" class='form-control phone' placeholder="phone"
                                            name="phone">
                                    </div>
                                    <div class="col">
                                        <input type="date" class='form-control date' name="date">
                                    </div>
                                    <div class="col">
                                        <select class='form-control education' name='education'>
                                            <option value="none" selected>--Select Education--</option>
                                            <option value='Phd'>Phd</option>
                                            <option value='Master'>Master</option>
                                            <option value='Bachelor'>Bachelor</option>
                                            <option value='Baccalaureate'>Baccalaureate</option>
                                            <option value='Intermediate'>Intermediate</option>
                                            <option value='Basic'>Basic</option>
                                            <option value='Illiterate'>Illiterate</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-4">
                                        <select class='form-control status' name='status'>
                                            <option value="none" selected>--Select Martial
                                                Status--</option>
                                            <option value='Single'>Single</option>
                                            <option value='Married'>Married</option>
                                            <option value='Divorced'>Divorced</option>
                                            <option value='Widow'>Widow</option>
                                            <option value='Complecated'>Complecated</option>
                                        </select>
                                    </div>
                                    <div class="col-8">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload Image</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type='file' class='custom-file-input patientImage'
                                                    name='patientImage' id='patientImage'
                                                    accept="image/x-png,image/jpeg,image/jpg">
                                                <label for="patientImage" class="custom-file-label">Click to Choose
                                                    Image</label>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <input type='submit' class='btn btn-primary saveButton' value="Save">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>






                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; by Niayesh Mubarez</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php include('includes/footer.php'); ?>
    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class=".">
                        <input type="hidden" class="mobileid" name="mobileid">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control brand" placeholder="Brand" name="brand">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control series" placeholder="Series" name="series">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control model" placeholder="Model" name="model">
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-4">
                                <input type="text" class="form-control color" placeholder="Color" name="color">
                            </div>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> Mobile Image</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input mobileImage" name="mobileImage"
                                            id="inputGroupFile01" accept="image/x-png,image/gif,image/jpeg">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <input type="submit" class="btn btn-success updateButton" value="Update">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-ordinary" data-dismiss=' modal'>Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">Message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Are you Sure want to delete this Record?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger deleteConfirmButton">Confirm</button>
                </div>
            </div>
        </div>
    </div>


    <script src="js/datatable-js.js"></script>
    <script src="js/bs.custom-file.js"></script>
    <script>
    $(document).ready(function() {
        bsCustomFileInput.init();
        // save request for ajax
        $('#inputForm').on('submit', function(e) {
            e.preventDefault();
            var firstname, surname, dob, email, eduation, status, phone, image, imageLogo;
            firstname = $('#inputForm .firstname');
            surname = $('#inputForm .surname');
            phone = $('#inputForm .phone');
            education = $('#inputForm .education');
            dob = $('#inputForm .date');
            image = $('#inputForm .patientImage');
            imageLogo = $('#inputForm .custom-file-label');
            email = $('#inputForm .email');
            status = $('#inputForm .status');
            firstname.removeClass('inputError');
            dob.removeClass('inputError');
            surname.removeClass('inputError');
            phone.removeClass('inputError');
            education.removeClass('inputError');
            imageLogo.removeClass('inputError');
            status.removeClass('inputError');
            email.removeClass('inputError');
            if (firstname.val() == "")
                firstname.addClass('inputError');
            else if (surname.val() == "")
                surname.addClass('inputError');
            else if (phone.val() == "")
                phone.addClass('inputError');
            else if (education.val() == "none")
                education.addClass('inputError');
            else if (status.val() == "none")
                status.addClass('inputError');
            else if (email.val() == "")
                email.addClass('inputError');
            else if (dob.val() == "")
                dob.addClass('inputError');
            else if (image.val() == "")
                imageLogo.addClass('inputError');
            else {
                var Data = new FormData(this);
                Data.append('actionString', 'insertPatients');
                $.ajax({
                    url: 'includes/process.php',
                    type: 'post',
                    data: Data,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.trim() == 'true') {
                            $('#inputForm')[0].reset();
                            $('#messageModal').modal('show');
                            $('#messageModal .modal-body').text(
                                "Record Saved Successfully");
                        }
                    }

                });
            }
        })

    });
    </script>
</body>

</html>