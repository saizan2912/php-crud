<?php
require_once "database/_dbconnect.php";
if(isset($_POST['add_investor'])){
 $name = $_POST['name'];
//  $logo = $_POST["logo"];
if (isset($_FILES['logo'])) {
    // echo "<pre>";
    // print_r($_FILES);
    // echo "<pre>";
    $file_name = $_FILES['logo']['name'];
    $file_size = $_FILES['logo']['size'];
    $file_tmp = $_FILES['logo']['tmp_name'];
    $file_type = $_FILES['logo']['type'];
    move_uploaded_file($file_tmp, "upload-images/" . $file_name);
}
 $phone_1 = $_POST['phone_1'];
 $phone_2 = $_POST['phone_2'];
 $email = $_POST['email'];
 $website = $_POST['website'];
 $youtube_link = $_POST['youtube_link'];
 $instagram_link = $_POST['instagram_link'];
 $linkedin_link = $_POST['linkedin_link'];
 $twitter_link = $_POST['twitter_link'];
 $description = $_POST['description'];
 $dt = time();
//  $phone_1 = $_POST["phone_1"];
 $sql = "INSERT INTO `investor`( `name`, `logo`, `phone_1`, `phone_2`, `email`, `website`, `youtube_link`, `instagram_link`, `linkedin_link`, `twitter_link`, `description`, `dt`) VALUES ('$name','$file_name','$phone_1','$phone_2','$email','$website','$youtube_link','$instagram_link','$linkedin_link','$twitter_link','$description','$dt')";
 $result = mysqli_query($conn,$sql);
 if ($result) {
    // echo "The record has been inserted successfully done";
} else {
    echo "The record has been inserted not successfully because of this error ===>" . mysqli_error($conn);
}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Investor MS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="../assets/media/logos/favicon.png" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <!-- tagify cdn-->
    <link rel="stylesheet" href="https://unpkg.com/@yaireo/tagify/dist/tagify.css">
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
                        <!--end::Toolbar-->
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-xxl">
                                <!--begin::Card-->
                                <div class="card">
                                    <form method="post" enctype="multipart/form-data" action="">
                                        <!--begin::Card body-->
                                        <div class="card-body pb-20 pt-15">
                                            <div class="mb-13 text-center">
                                                <!--begin::Title-->
                                                <h1 class="fs-2x fw-bold mb-0 mb-3">Add New Investor</h1>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-muted fw-semibold fs-5">Add new investor for in the system</div>
                                                <a href="investors-list.php" class="fw-bold link-primary">Investor List</a>
                                            </div>
                                            <!--end::Description-->
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <!-- start faculty title -->
                                                        <div class="col-md-12">
                                                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                                <!--begin::Label-->
                                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                    <span class="required">Investor Name</span>
                                                                </label>
                                                                <!--end::Label-->
                                                                <input type="text" class="form-control form-control-solid" placeholder="Enter Investor Name" name="name" required />
                                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                                <!--begin::Label-->
                                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                    <span class="required">Logo</span>
                                                                </label>
                                                                <!--end::Label-->
                                                                <input type="file" class="form-control form-control-solid" name="logo" required />
                                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                                <!--begin::Label-->
                                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                    <span class="required">Phone 1</span>
                                                                </label>
                                                                <!--end::Label-->
                                                                <input type="text" class="form-control form-control-solid" placeholder="Enter phone 1" name="phone_1" required />
                                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                                <!--begin::Label-->
                                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                    <span>Phone 2</span>
                                                                </label>
                                                                <!--end::Label-->
                                                                <input type="text" class="form-control form-control-solid" placeholder="Enter phone 2" name="phone_2" />
                                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                                <!--begin::Label-->
                                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                    <span class="required">Email</span>
                                                                </label>
                                                                <!--end::Label-->
                                                                <input type="email" class="form-control form-control-solid" placeholder="Enter Email" name="email" required />
                                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                                <!--begin::Label-->
                                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                    <span class="">Website</span>
                                                                </label>
                                                                <!--end::Label-->
                                                                <input type="url" class="form-control form-control-solid" placeholder="Enter Website" name="website" />
                                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                                <!--begin::Label-->
                                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                    <span class="">YouTube Link</span>
                                                                </label>
                                                                <!--end::Label-->
                                                                <input type="url" class="form-control form-control-solid" placeholder="Enter YouTube Link" name="youtube_link" />
                                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                                <!--begin::Label-->
                                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                    <span class="">Instagram Link</span>
                                                                </label>
                                                                <!--end::Label-->
                                                                <input type="url" class="form-control form-control-solid" placeholder="Enter Instagram Link" name="instagram_link" />
                                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                                <!--begin::Label-->
                                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                    <span class="">Linkedin Link</span>
                                                                </label>
                                                                <!--end::Label-->
                                                                <input type="url" class="form-control form-control-solid" placeholder="Enter Linkedin Link" name="linkedin_link" />
                                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                                <!--begin::Label-->
                                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                    <span class="">Twitter Link</span>
                                                                </label>
                                                                <!--end::Label-->
                                                                <input type="url" class="form-control form-control-solid" placeholder="Enter Twitter Link" name="twitter_link" />
                                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                                                <!--begin::Label-->
                                                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                                                    <span class="required">Description</span>
                                                                </label>
                                                                <!--end::Label-->
                                                                <textarea class="form-control form-control-solid" placeholder="Enter Investor Description" name="description"></textarea>
                                                                <div class="fv-plugins-message-container invalid-feedback"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 text-center">
                                                            <button id="add_faculty_submit_button" type="submit" class="btn btn-primary" name="add_investor">Add Investor</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
                <!--begin::Footer-->
                <div id="kt_app_footer" class="app-footer">
                    <!--begin::Footer container-->
                    <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2023 &copy;</span>
                            <a href="http://localhost/000work143-propagerealty-development4545/project/" target="_blank" class="text-gray-800 text-hover-primary">Propage Realty</a>
                        </div>
                        <!--end::Copyright-->
                    </div>
                    <!--end::Footer container-->
                </div> <!--end::Footer-->
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
    </div>
    <!--end::App-->
    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/index.html";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- tagify cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.3.0/tagify.min.js"></script>
    <script>
        var input = document.querySelector('input[name=keywords]');
        // initialize Tagify on the above input node reference
        new Tagify(input)
    </script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    <!-- begin::Controllers -->
    <script>
        //add class hover and show in #admin_sidebar_menu_faculty
        document.getElementById('admin_sidebar_menu_2').classList.add('hover');
        document.getElementById('admin_sidebar_menu_2').classList.add('show');
        // add class active to menu_subject
        $('#admin_sidebar_menu_3').addClass('active');
    </script>
</body>
<!--end::Body-->

</html>