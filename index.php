<?php
require_once "database/_dbconnect.php";
if (isset($_POST['add_project'])) {
	$project_name = $_POST['project_name'];
	// $project_logo = $_POST['project_logo'];
	if (isset($_FILES['project_logo'])) {
		// echo "<pre>";
		// print_r($_FILES);
		// echo "<pre>";
		$file_name = $_FILES['project_logo']['name'];
		$file_size = $_FILES['project_logo']['size'];
		$file_tmp = $_FILES['project_logo']['tmp_name'];
		$file_type = $_FILES['project_logo']['type'];
		move_uploaded_file($file_tmp, "upload-images/" . $file_name);
	}
	$investors = $_POST['investors'];
	$investors = implode(',', $investors);
	$description = $_POST['description'];
	$highlight  = $_POST['highlight'];
	$highlight = implode(',', $highlight);
	$amenities = $_POST['amenities'];
	$amenities = implode(',', $amenities);



	if (isset($_FILES['brochure'])) {
		// echo "<pre>";
		// print_r($_FILES);
		// echo "<pre>";
		$file_name = $_FILES['brochure']['name'];
		$file_size = $_FILES['brochure']['size'];
		$file_tmp = $_FILES['brochure']['tmp_name'];
		$file_type = $_FILES['brochure']['type'];
		move_uploaded_file($file_tmp, "upload-images/" . $file_name);
	}
	$bhk_room = $_POST['bhk_room'];
	$bhk_room = implode(',', $bhk_room);
	$total_floor  = $_POST['total_floor'];
	$facing  = $_POST['facing'];
	$address_line_1  = $_POST['address_line_1'];
	$address_line_2  = $_POST['address_line_2'];
	$country  = $_POST['country'];
	$state  = $_POST['state'];
	$city  = $_POST['city'];
	$city_location  = $_POST['city_location'];
	$pin_code  = $_POST['pin_code'];
	$latitude  = $_POST['latitude'];
	$longitude  = $_POST['longitude'];
	$possession_by  = $_POST['possession_by'];
	$launch_date  = $_POST['launch_date'];
	$rera_number  = $_POST['rera_number'];
	$minimum_price  = $_POST['minimum_price'];
	$maximum_price  = $_POST['maximum_price'];
	$timestamp = time();
	$sql = "INSERT INTO `project`( `project_name`, `project_logo`, `investor`, `description`, `highlight`, `amenities`, `brochure`, `bhk_room`, `total_floor`, `facing`, `address_line_1`, `address_line_2`, `country`, `state`, `city`, `city_location`, `pin_code`, `latitude`, `longitude`, `possession_by`, `launch_date`, `rera_number`, `minimum_price`, `maximum_price`, `timestamp`) VALUES ('$project_name','$file_name','$investors','$description','$highlight','$amenities','$file_name','$bhk_room','$total_floor','$facing','$address_line_1','$address_line_2','$country','$state','$city','$city_location','$pin_code','$latitude','$longitude','$possession_by','$launch_date','$rera_number','$minimum_price','$maximum_price','$timestamp')";
	$result = mysqli_query($conn, $sql);
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
	<title>Add Project - Propage</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="/assets/media/logos/favicon.png" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used for this page only)-->
	<link href="assets/plugins/custom/index.php/style.bundle.css" rel="stylesheet" type="text/css" />
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
	<!--begin::App-->
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!--begin::Page-->
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
			<!--begin::Header-->
			<div id="kt_app_header" class="app-header">
				<!--begin::Header container-->
				<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
					<!--begin::sidebar mobile toggle-->
					<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
						<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
							<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
									<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
					</div>
					<!--end::sidebar mobile toggle-->
					<!--begin::Mobile logo-->
					<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
						<a href="http://localhost/000work143-propagerealty-development4545/admin/" class="d-lg-none">
							<img alt="Logo" src="assets/media/logos/logo.png" class="h-30px" />
						</a>
					</div>
					<!--end::Mobile logo-->
					<!--begin::Header wrapper-->
					<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
						<!--begin::Menu wrapper-->
						<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
						</div>
						<!--end::Menu wrapper-->
						<!--begin::Navbar-->
						<div class="app-navbar flex-shrink-0">
							<!--begin::Theme mode-->
							<div class="app-navbar-item ms-1 ms-lg-3">
								<!--begin::Menu toggle-->
								<a href="#" class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
									<span class="svg-icon theme-light-show svg-icon-2">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor" />
											<path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor" />
											<path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor" />
											<path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor" />
											<path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor" />
											<path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor" />
											<path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor" />
											<path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor" />
											<path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
									<span class="svg-icon theme-dark-show svg-icon-2">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor" />
											<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor" />
											<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor" />
											<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
								<!--begin::Menu toggle-->
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-color fw-semibold py-4 fs-base w-175px" data-kt-menu="true" data-kt-element="theme-mode-menu">
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
											<span class="menu-icon" data-kt-element="icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
												<span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor" />
														<path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor" />
														<path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor" />
														<path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor" />
														<path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor" />
														<path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor" />
														<path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor" />
														<path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor" />
														<path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Light</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
											<span class="menu-icon" data-kt-element="icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
												<span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor" />
														<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor" />
														<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor" />
														<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Dark</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
											<span class="menu-icon" data-kt-element="icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen062.svg-->
												<span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">System</span>
										</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Theme mode-->
							<!--begin::User menu-->
							<div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
								<!--begin::Menu wrapper-->
								<div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
									<span class='symbol-label bg-light-primary text-primary fw-bolder fs-3'>A</span>
								</div>
								<!--begin::User account menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content d-flex align-items-center px-3">
											<!--begin::Avatar-->
											<div class="symbol symbol-50px me-5">
												<span class='symbol-label bg-light-primary text-primary fw-bolder fs-3'>A</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Username-->
											<div class="d-flex flex-column">
												<div class="fw-bold d-flex align-items-center fs-5">Admin 1 <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">admin</span>
												</div>
												<a class="fw-semibold text-muted text-hover-primary fs-7 text-wrap" style="word-wrap: break-word;">admin@admin.com</a>
											</div>
											<!--end::Username-->
										</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<!-- <div class="menu-item px-5">
							<a href="../profile/my-profile.php" class="menu-link px-5">My Profile</a>
						</div> -->
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="http://localhost/000work143-propagerealty-development4545/admin/auth/sign-out.php" class="menu-link px-5">Sign Out</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::User account menu-->
								<!--end::Menu wrapper-->
							</div>
							<!--end::User menu-->
							<!--begin::Header menu toggle-->
							<div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
								<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
									<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
									<span class="svg-icon svg-icon-1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor" />
											<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Header menu toggle-->
						</div>
						<!--end::Navbar-->
					</div>
					<!--end::Header wrapper-->
				</div>
				<!--end::Header container-->
			</div> <!--end::Header-->
			<!--begin::Wrapper-->
			<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
				<!--begin::Sidebar-->
				<!--end::Sidebar-->
				<!--begin::Main-->
				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
					<!--begin::Content wrapper-->
					<div class="d-flex flex-column flex-column-fluid">
						<!--begin::Toolbar-->
						<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
							<!--begin::Toolbar container-->
							<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
								<!--begin::Page title-->
								<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
									<!--begin::Title-->
									<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
										Add Project</h1>
									<!--end::Title-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="http://localhost/000work143-propagerealty-development4545/admin/" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-400 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Real Estate</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-400 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Add Project</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
							</div>
							<!--end::Toolbar container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Content-->
						<div id="kt_app_content" class="app-content flex-column-fluid">
							<!--begin::Content container-->
							<div id="kt_app_content_container" class="app-container container-xxl">
								<!--begin::Card-->
								<form method="post" enctype="multipart/form-data" action="">
									<div class="row ">
										<div class="col-md-8">
											<div class="card mb-5">
												<!--begin::Card body-->
												<div class="card-body">
													<div class="mb-13 text-center">
														<!--begin::Title-->
														<h1 class="fs-2x fw-bold mb-0 mb-3">Add New Project</h1>
														<!--end::Title-->
														<!--begin::Description-->
														<div class="text-muted fw-semibold fs-5">Add new Project for in the system</div>
														<a href="http://localhost/000work143-propagerealty-development4545/admin/real-estate-project/project-list.php" class="fw-bold link-primary">Project List</a>
													</div>
													<!--end::Description-->
													<div class="row">
														<!-- start faculty title -->
														<div class="col-md-12">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="required">Project Name</span>
																</label>
																<!--end::Label-->
																<input type="text" class="form-control form-control-solid" placeholder="Enter Project Name" name="project_name" required />
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<!-- project logo -->
														<div class="col-md-6">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="required">Project Logo</span>
																</label>
																<!--end::Label-->
																<input type="file" class="form-control form-control-solid" placeholder="Select Project Logo" name="project_logo" enctype="multipart/form-data" required />
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="required">Investor(s)</span>
																</label>
																<!--end::Label-->
																<select class="form-select form-select-solid" data-control="select2" data-placeholder="Select a Investor" name="investors[]" required multiple>
																	
																<option value="0">Select Investor</option>
																	<option value='1'>dummy</option>
																	<option value='2'>Fallon Ayers</option>
																	<option value='3'>Victor Odom</option>
																	<option value='5'>Noelle Washington</option>
																</select>
															</div>
														</div>
														<div class="col-md-12">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="required">Description</span>
																</label>
																<!--end::Label-->
																<textarea class="form-control form-control-solid" placeholder="Enter Project Description" name="description"></textarea>
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card my-5">
												<div class="card-body">
													<div class="row">
														<div class="col-md-6">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="required">Highlight</span>
																</label>
																<!--end::Label-->
																<select class="form-select form-select-solid" data-control="select2" data-placeholder="Select Highlight" name="highlight[]" required multiple>
																	<option value="">Select Highlight</option>
																	<option value='2'>near metro station</option>
																	<option value='3'>low cost</option>
																	<option value='4'>as asdd ddd</option>
																</select>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="required">Amenities</span>
																</label>
																<!--end::Label-->
																<select class="form-select form-select-solid" data-control="select2" data-placeholder="Select a Amenities" name="amenities[]" required multiple>
																	<option value="">Select Amenities</option>
																	<option value='1'>Wifi</option>
																	<option value='2'>Parking </option>
																	<option value='3'>Swimming pool</option>
																	<option value='4'>Balcony</option>
																	<option value='5'>Garden</option>
																	<option value='6'>Security</option>
																	<option value='7'>Fitness center </option>
																	<option value='8'>Air Conditioning</option>
																	<option value='9'>Central Heating</option>
																	<option value='10'>Laundry Room </option>
																	<option value='11'>Pets Allow </option>
																	<option value='12'>Spa & Massage </option>
																</select>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="required">Brochure</span>
																</label>
																<!--end::Label-->
																<input type="file" class="form-control form-control-solid" name="brochure" enctype="multipart/form-data" required />
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="required">BHK</span>
																</label>
																<!--end::Label-->
																<select class="form-select form-select-solid" data-control="select2" data-placeholder="Select a BHK" name="bhk_room[]" required multiple>
																	<option value="">Select BHK</option>
																	<option value="1">1 BHK</option>
																	<option value="2">2 BHK</option>
																	<option value="3">3 BHK</option>
																	<option value="4">4 BHK</option>
																	<option value="5">5 BHK</option>
																	<option value="6">6 BHK</option>
																	<option value="7">7 BHK</option>
																</select>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="required">Total Floor</span>
																</label>
																<!--end::Label-->
																<input type="number" class="form-control form-control-solid" placeholder="No. of Total Floor" name="total_floor" required value="<br />
<b>Warning</b>:  Undefined variable $get_total_floor in <b>C:\xampp\htdocs\000work143-propagerealty-development4545\admin\real-estate-project\add-project.php</b> on line <b>668</b><br />
" />
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="">Facing</span>
																</label>
																<!--end::Label-->
																<select class="form-select form-select-solid" data-control="select2" data-placeholder="Select Facing" name="facing">
																	<option value="">Select Facing</option>
																	<option value="east">East</option>
																	<option value="north">North</option>
																	<option value="north_east">North-East</option>
																	<option value="north_west">North-West</option>
																	<option value="south">South</option>
																	<option value="south_east">South-East</option>
																	<option value="south_West">South-West</option>
																	<option value="west">West</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card my-5">
												<div class="card-body">
													<div class="row">
														<div class="col-md-12">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="required">Address Line 1</span>
																</label>
																<!--end::Label-->
																<input type="text" class="form-control form-control-solid" placeholder="Enter Address Line 1" name="address_line_1" required />
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<div class="col-md-12">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="">Address Line 2</span>
																</label>
																<!--end::Label-->
																<input type="text" class="form-control form-control-solid" placeholder="Enter Address Line 2" name="address_line_2" />
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="required">Country</span>
																</label>
																<!--end::Label-->
																<select class="form-select form-select-solid" data-control="select2" data-placeholder="Select Country" name="country" required>
																	<option value="">Select Country</option>
																	<option value='1'>Afghanistan</option>
																	<option value='2'>Aland Islands</option>
																	<option value='3'>Albania</option>
																	<option value='4'>Algeria</option>
																	<option value='5'>American Samoa</option>
																	<option value='6'>Andorra</option>
																	<option value='7'>Angola</option>
																	<option value='8'>Anguilla</option>
																	<option value='9'>Antarctica</option>
																	<option value='10'>Antigua And Barbuda</option>
																	<option value='11'>Argentina</option>
																	<option value='12'>Armenia</option>
																	<option value='13'>Aruba</option>
																	<option value='14'>Australia</option>
																	<option value='15'>Austria</option>
																	<option value='16'>Azerbaijan</option>
																	<option value='17'>Bahamas The</option>
																	<option value='18'>Bahrain</option>
																	<option value='19'>Bangladesh</option>
																	<option value='20'>Barbados</option>
																	<option value='21'>Belarus</option>
																	<option value='22'>Belgium</option>
																	<option value='23'>Belize</option>
																	<option value='24'>Benin</option>
																	<option value='25'>Bermuda</option>
																	<option value='26'>Bhutan</option>
																	<option value='27'>Bolivia</option>
																	<option value='28'>Bosnia and Herzegovina</option>
																	<option value='29'>Botswana</option>
																	<option value='30'>Bouvet Island</option>
																	<option value='31'>Brazil</option>
																	<option value='32'>British Indian Ocean Territory</option>
																	<option value='33'>Brunei</option>
																	<option value='34'>Bulgaria</option>
																	<option value='35'>Burkina Faso</option>
																	<option value='36'>Burundi</option>
																	<option value='37'>Cambodia</option>
																	<option value='38'>Cameroon</option>
																	<option value='39'>Canada</option>
																	<option value='40'>Cape Verde</option>
																	<option value='41'>Cayman Islands</option>
																	<option value='42'>Central African Republic</option>
																	<option value='43'>Chad</option>
																	<option value='44'>Chile</option>
																	<option value='45'>China</option>
																	<option value='46'>Christmas Island</option>
																	<option value='47'>Cocos (Keeling) Islands</option>
																	<option value='48'>Colombia</option>
																	<option value='49'>Comoros</option>
																	<option value='50'>Congo</option>
																	<option value='51'>Democratic Republic of the Congo</option>
																	<option value='52'>Cook Islands</option>
																	<option value='53'>Costa Rica</option>
																	<option value='54'>Cote D'Ivoire (Ivory Coast)</option>
																	<option value='55'>Croatia</option>
																	<option value='56'>Cuba</option>
																	<option value='57'>Cyprus</option>
																	<option value='58'>Czech Republic</option>
																	<option value='59'>Denmark</option>
																	<option value='60'>Djibouti</option>
																	<option value='61'>Dominica</option>
																	<option value='62'>Dominican Republic</option>
																	<option value='63'>East Timor</option>
																	<option value='64'>Ecuador</option>
																	<option value='65'>Egypt</option>
																	<option value='66'>El Salvador</option>
																	<option value='67'>Equatorial Guinea</option>
																	<option value='68'>Eritrea</option>
																	<option value='69'>Estonia</option>
																	<option value='70'>Ethiopia</option>
																	<option value='71'>Falkland Islands</option>
																	<option value='72'>Faroe Islands</option>
																	<option value='73'>Fiji Islands</option>
																	<option value='74'>Finland</option>
																	<option value='75'>France</option>
																	<option value='76'>French Guiana</option>
																	<option value='77'>French Polynesia</option>
																	<option value='78'>French Southern Territories</option>
																	<option value='79'>Gabon</option>
																	<option value='80'>Gambia The</option>
																	<option value='81'>Georgia</option>
																	<option value='82'>Germany</option>
																	<option value='83'>Ghana</option>
																	<option value='84'>Gibraltar</option>
																	<option value='85'>Greece</option>
																	<option value='86'>Greenland</option>
																	<option value='87'>Grenada</option>
																	<option value='88'>Guadeloupe</option>
																	<option value='89'>Guam</option>
																	<option value='90'>Guatemala</option>
																	<option value='91'>Guernsey and Alderney</option>
																	<option value='92'>Guinea</option>
																	<option value='93'>Guinea-Bissau</option>
																	<option value='94'>Guyana</option>
																	<option value='95'>Haiti</option>
																	<option value='96'>Heard Island and McDonald Islands</option>
																	<option value='97'>Honduras</option>
																	<option value='98'>Hong Kong S.A.R.</option>
																	<option value='99'>Hungary</option>
																	<option value='100'>Iceland</option>
																	<option value='101'>India</option>
																	<option value='102'>Indonesia</option>
																	<option value='103'>Iran</option>
																	<option value='104'>Iraq</option>
																	<option value='105'>Ireland</option>
																	<option value='106'>Israel</option>
																	<option value='107'>Italy</option>
																	<option value='108'>Jamaica</option>
																	<option value='109'>Japan</option>
																	<option value='110'>Jersey</option>
																	<option value='111'>Jordan</option>
																	<option value='112'>Kazakhstan</option>
																	<option value='113'>Kenya</option>
																	<option value='114'>Kiribati</option>
																	<option value='115'>North Korea</option>
																	<option value='116'>South Korea</option>
																	<option value='117'>Kuwait</option>
																	<option value='118'>Kyrgyzstan</option>
																	<option value='119'>Laos</option>
																	<option value='120'>Latvia</option>
																	<option value='121'>Lebanon</option>
																	<option value='122'>Lesotho</option>
																	<option value='123'>Liberia</option>
																	<option value='124'>Libya</option>
																	<option value='125'>Liechtenstein</option>
																	<option value='126'>Lithuania</option>
																	<option value='127'>Luxembourg</option>
																	<option value='128'>Macau S.A.R.</option>
																	<option value='129'>Macedonia</option>
																	<option value='130'>Madagascar</option>
																	<option value='131'>Malawi</option>
																	<option value='132'>Malaysia</option>
																	<option value='133'>Maldives</option>
																	<option value='134'>Mali</option>
																	<option value='135'>Malta</option>
																	<option value='136'>Man (Isle of)</option>
																	<option value='137'>Marshall Islands</option>
																	<option value='138'>Martinique</option>
																	<option value='139'>Mauritania</option>
																	<option value='140'>Mauritius</option>
																	<option value='141'>Mayotte</option>
																	<option value='142'>Mexico</option>
																	<option value='143'>Micronesia</option>
																	<option value='144'>Moldova</option>
																	<option value='145'>Monaco</option>
																	<option value='146'>Mongolia</option>
																	<option value='147'>Montenegro</option>
																	<option value='148'>Montserrat</option>
																	<option value='149'>Morocco</option>
																	<option value='150'>Mozambique</option>
																	<option value='151'>Myanmar</option>
																	<option value='152'>Namibia</option>
																	<option value='153'>Nauru</option>
																	<option value='154'>Nepal</option>
																	<option value='155'>Bonaire, Sint Eustatius and Saba</option>
																	<option value='156'>Netherlands</option>
																	<option value='157'>New Caledonia</option>
																	<option value='158'>New Zealand</option>
																	<option value='159'>Nicaragua</option>
																	<option value='160'>Niger</option>
																	<option value='161'>Nigeria</option>
																	<option value='162'>Niue</option>
																	<option value='163'>Norfolk Island</option>
																	<option value='164'>Northern Mariana Islands</option>
																	<option value='165'>Norway</option>
																	<option value='166'>Oman</option>
																	<option value='167'>Pakistan</option>
																	<option value='168'>Palau</option>
																	<option value='169'>Palestinian Territory Occupied</option>
																	<option value='170'>Panama</option>
																	<option value='171'>Papua new Guinea</option>
																	<option value='172'>Paraguay</option>
																	<option value='173'>Peru</option>
																	<option value='174'>Philippines</option>
																	<option value='175'>Pitcairn Island</option>
																	<option value='176'>Poland</option>
																	<option value='177'>Portugal</option>
																	<option value='178'>Puerto Rico</option>
																	<option value='179'>Qatar</option>
																	<option value='180'>Reunion</option>
																	<option value='181'>Romania</option>
																	<option value='182'>Russia</option>
																	<option value='183'>Rwanda</option>
																	<option value='184'>Saint Helena</option>
																	<option value='185'>Saint Kitts And Nevis</option>
																	<option value='186'>Saint Lucia</option>
																	<option value='187'>Saint Pierre and Miquelon</option>
																	<option value='188'>Saint Vincent And The Grenadines</option>
																	<option value='189'>Saint-Barthelemy</option>
																	<option value='190'>Saint-Martin (French part)</option>
																	<option value='191'>Samoa</option>
																	<option value='192'>San Marino</option>
																	<option value='193'>Sao Tome and Principe</option>
																	<option value='194'>Saudi Arabia</option>
																	<option value='195'>Senegal</option>
																	<option value='196'>Serbia</option>
																	<option value='197'>Seychelles</option>
																	<option value='198'>Sierra Leone</option>
																	<option value='199'>Singapore</option>
																	<option value='200'>Slovakia</option>
																	<option value='201'>Slovenia</option>
																	<option value='202'>Solomon Islands</option>
																	<option value='203'>Somalia</option>
																	<option value='204'>South Africa</option>
																	<option value='205'>South Georgia</option>
																	<option value='206'>South Sudan</option>
																	<option value='207'>Spain</option>
																	<option value='208'>Sri Lanka</option>
																	<option value='209'>Sudan</option>
																	<option value='210'>Suriname</option>
																	<option value='211'>Svalbard And Jan Mayen Islands</option>
																	<option value='212'>Swaziland</option>
																	<option value='213'>Sweden</option>
																	<option value='214'>Switzerland</option>
																	<option value='215'>Syria</option>
																	<option value='216'>Taiwan</option>
																	<option value='217'>Tajikistan</option>
																	<option value='218'>Tanzania</option>
																	<option value='219'>Thailand</option>
																	<option value='220'>Togo</option>
																	<option value='221'>Tokelau</option>
																	<option value='222'>Tonga</option>
																	<option value='223'>Trinidad And Tobago</option>
																	<option value='224'>Tunisia</option>
																	<option value='225'>Turkey</option>
																	<option value='226'>Turkmenistan</option>
																	<option value='227'>Turks And Caicos Islands</option>
																	<option value='228'>Tuvalu</option>
																	<option value='229'>Uganda</option>
																	<option value='230'>Ukraine</option>
																	<option value='231'>United Arab Emirates</option>
																	<option value='232'>United Kingdom</option>
																	<option value='233'>United States</option>
																	<option value='234'>United States Minor Outlying Islands</option>
																	<option value='235'>Uruguay</option>
																	<option value='236'>Uzbekistan</option>
																	<option value='237'>Vanuatu</option>
																	<option value='238'>Vatican City State (Holy See)</option>
																	<option value='239'>Venezuela</option>
																	<option value='240'>Vietnam</option>
																	<option value='241'>Virgin Islands (British)</option>
																	<option value='242'>Virgin Islands (US)</option>
																	<option value='243'>Wallis And Futuna Islands</option>
																	<option value='244'>Western Sahara</option>
																	<option value='245'>Yemen</option>
																	<option value='246'>Zambia</option>
																	<option value='247'>Zimbabwe</option>
																	<option value='248'>Kosovo</option>
																	<option value='249'>Curaçao</option>
																	<option value='250'>Sint Maarten (Dutch part)</option>
																</select>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="required">State</span>
																</label>
																<!--end::Label-->
																<select class="form-select form-select-solid" data-control="select2" data-placeholder="Select State" name="state" required>
																	<option value="">Select State</option>
																	<option value='1'>asdf</option>
																	<option value='2'>asdfasdf</option>
																	<option value='3'>Gujrat</option>
																</select>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="required">City</span>
																</label>
																<!--end::Label-->
																<select class="form-select form-select-solid" data-control="select2" data-placeholder="Select City" name="city" required>
																	<option value="">Select City</option>
																	<option value='1'>Agra</option>
																	<option value='2'>Ahmedabad</option>
																	<option value='3'>Aligarh</option>
																	<option value='4'>Amritsar</option>
																	<option value='5'>Asansol</option>
																	<option value='6'>Aurangabad</option>
																	<option value='7'>Bengaluru</option>
																	<option value='8'>Bhilai</option>
																	<option value='9'>Bhopal</option>
																	<option value='10'>Bhubaneswar</option>
																	<option value='11'>Bikaner</option>
																	<option value='12'>Chandigarh</option>
																	<option value='13'>Chennai</option>
																	<option value='14'>Coimbatore</option>
																	<option value='15'>Cuttack</option>
																	<option value='16'>Dehradun</option>
																	<option value='17'>Delhi-NCR</option>
																	<option value='18'>Goa</option>
																	<option value='19'>Guntur</option>
																	<option value='20'>Gurgaon</option>
																	<option value='21'>Guwahati</option>
																	<option value='22'>Gwalior</option>
																	<option value='23'>Hubli</option>
																	<option value='24'>Hyderabad</option>
																	<option value='25'>Indore</option>
																	<option value='26'>Jabalpur</option>
																	<option value='27'>Jaipur</option>
																	<option value='28'>Jalandhar</option>
																	<option value='29'>Jamshedpur</option>
																	<option value='30'>Jodhpur</option>
																	<option value='31'>Kannur</option>
																	<option value='32'>Kanpur</option>
																	<option value='33'>Kochi</option>
																	<option value='34'>Kolkata</option>
																	<option value='35'>Kota</option>
																	<option value='36'>Lucknow</option>
																	<option value='37'>Ludhiana</option>
																	<option value='38'>Madurai</option>
																	<option value='39'>Malappuram</option>
																	<option value='40'>Mangalore</option>
																	<option value='41'>Meerut</option>
																	<option value='42'>Mumbai</option>
																	<option value='43'>Mysuru</option>
																	<option value='44'>Nagpur</option>
																	<option value='45'>Nashik</option>
																	<option value='46'>Patna</option>
																	<option value='47'>Pune</option>
																	<option value='48'>Raipur</option>
																	<option value='49'>Rajkot</option>
																	<option value='50'>Ranchi</option>
																	<option value='51'>Salem</option>
																	<option value='52'>Solapur</option>
																	<option value='53'>Surat</option>
																	<option value='54'>Thiruvananthapuram</option>
																	<option value='55'>Vadodara</option>
																	<option value='56'>Varanasi</option>
																	<option value='57'>Vijayawada</option>
																	<option value='58'>Visakhapatnam</option>
																	<option value='59'>new city in the town </option>
																</select>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="required">City Location</span>
																</label>
																<!--end::Label-->
																<select class="form-select form-select-solid" data-control="select2" data-placeholder="Select City Location" name="city_location" required>
																	<option value="">Select City Location</option>
																	<option value='1'>Makarba</option>
																	<option value='2'>SG Highway</option>
																	<option value='3'>Location</option>
																	<option value='4'>Bopal</option>
																</select>
															</div>
														</div>
														<div class="col-md-12">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="required">Pin Code</span>
																</label>
																<!--end::Label-->
																<input type="text" class="form-control form-control-solid" placeholder="Enter Pin Code" name="pin_code" required />
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="required">Latitude</span>
																</label>
																<!--end::Label-->
																<input type="number" class="form-control form-control-solid" placeholder="Ex: 1.462278" name="latitude" step="any" required />
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																	<span class="required">Longitude</span>
																</label>
																<!--end::Label-->
																<input type="number" class="form-control form-control-solid" placeholder="Ex: 1.462278" name="longitude" step="any" required />
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12 text-center">
																<button id="add_faculty_submit_button" type="submit" class="btn btn-primary" name="add_project">Add Project</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="card mb-5 ">
												<div class="card-body">
													<div class="col-md-12">
														<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
															<!--begin::Label-->
															<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																<span class="required">Possession By</span>
															</label>
															<!--end::Label-->
															<input type="date" class="form-control form-control-solid" placeholder="Enter Possession By" name="possession_by" required />
															<div class="fv-plugins-message-container invalid-feedback"></div>
														</div>
													</div>
													<div class="col-md-12">
														<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
															<!--begin::Label-->
															<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																<span class="required">Launch Date</span>
															</label>
															<!--end::Label-->
															<input type="date" class="form-control form-control-solid" placeholder="Enter Launch Date" name="launch_date" required />
															<div class="fv-plugins-message-container invalid-feedback"></div>
														</div>
													</div>
													<div class="col-md-12">
														<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
															<!--begin::Label-->
															<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																<span class="required">Rera Approved</span>
															</label>
															<!--end::Label-->
															<select class="form-select form-select-solid" data-control="select2" data-placeholder="Select a Rera Approved" name="rera_approved" required>
																<option value="">Select Rera Approved</option>
																<option value="1">Yes</option>
																<option value="0">No</option>
															</select>
														</div>
													</div>
													<div class="col-md-12">
														<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
															<!--begin::Label-->
															<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																<span>Rera Number</span>
															</label>
															<!--end::Label-->
															<input type="text" class="form-control form-control-solid" placeholder="Enter Rera Number" name="rera_number" />
															<div class="fv-plugins-message-container invalid-feedback"></div>
														</div>
													</div>
													<div class="col-md-12">
														<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
															<!--begin::Label-->
															<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																<span class="required">Minimum Price</span>
															</label>
															<!--end::Label-->
															<input type="text" class="form-control form-control-solid" placeholder="Minimum Price" name="minimum_price" required />
															<div class="fv-plugins-message-container invalid-feedback"></div>
														</div>
													</div>
													<div class="col-md-12">
														<div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
															<!--begin::Label-->
															<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
																<span class="required">Maximum Price</span>
															</label>
															<!--end::Label-->
															<input type="text" class="form-control form-control-solid" placeholder="Maximum Price" name="maximum_price" required />
															<div class="fv-plugins-message-container invalid-feedback"></div>
														</div>
													</div>
												</div>
											</div>
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
	<script src="assets/plugins/custom/index.php.bundle.js"></script>
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
</body>
<!--end::Body-->

</html>