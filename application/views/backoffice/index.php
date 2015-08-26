<!DOCTYPE html>
<html lang="en" ng-app="backofficeApp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <title>Backoffice</title>
  <!-- Bootstrap Core CSS -->
  <link href="/assets/backoffice/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="/assets/backoffice/css/modern-business.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="/assets/backoffice/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="/assets/backoffice/css/dataTables.bootstrap.css" rel="stylesheet">
  <link href="/assets/backoffice/css/dataTables.responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="/backoffice_app/app.css">
</head>
<body>
  <div my-header></div>
  <div class="container-fluid">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PropHike
                    <small>BackOffice</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#/locations" class="list-group-item">Locations</a>
                    <a href="#/properties" class="list-group-item">Properties</a>
                    <a href="#/builder" class="list-group-item">Builder</a>
                    <a href="#/specifications" class="list-group-item">Specifications</a>
                    <a href="#/comments" class="list-group-item">Comments</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
              <div ng-view></div>
            </div>
        </div>
        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; PropHike 2015</p>
                </div>
            </div>
        </footer>
    </div>
  
  <script src="assets/js/angular.min.js"></script>
  <script src="assets/js/angular-file-upload.min.js"></script>
  <script src="assets/js/angular-route.min.js"></script>
  <script src="/assets/backoffice/js/jquery.js"></script>
  <script src="/backoffice_app/app.js"></script>
  <script src="/backoffice_app/locations/locationsController.js"></script>
  <script src="/backoffice_app/locations/locationsService.js"></script>
    <script src="/backoffice_app/builder/builderController.js"></script>
  <script src="/backoffice_app/builder/builderService.js"></script>
   <script src="/backoffice_app/builder/create/createBuilderController.js"></script>
    <script src="/backoffice_app/specifications/specificationsController.js"></script>
  <script src="/backoffice_app/specifications/specificationsService.js"></script>
  <script src="/backoffice_app/specifications/create/createSpecificationController.js"></script>
  <script src="/backoffice_app/locations/create/createLocationController.js"></script>
  <script src="/backoffice_app/locations/edit/editLocationController.js"></script>
    <script src="/backoffice_app/builder/edit/editBuilderController.js"></script>
  <script src="/backoffice_app/properties/propertiesController.js"></script>
  <script src="/backoffice_app/properties/propertiesService.js"></script>
  <script src="/backoffice_app/properties/create/createPropertyController.js"></script>
  <script src="/backoffice_app/properties/view/propertiesViewController.js"></script>
  <script src="/backoffice_app/comments/commentsController.js"></script>
  <script src="/backoffice_app/components/header/header-directive.js"></script>
  <script src="/assets/backoffice/js/bootstrap.min.js"></script>
</body>
</html>
