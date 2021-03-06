<!DOCTYPE html>
<html lang="en" ng-app="backofficeApp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <title>Backoffice</title>
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/assets/backofficeApp.min.css">
  <script src="/assets/js/angular.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="/backoffice#/">PropHike</a>
          </div>
      </div>
  </nav>
  <div class="container-fluid">
        <aside class="row">
            <!-- Sidebar Column -->
            <div class="col-md-2">
                <div class="list-group" ng-init="app.state = 'locations'">
                    <a href="#/locations" class="list-group-item" ng-class="app.state == 'locations' ? 'active':''">Locations</a>
                    <a href="#/properties" class="list-group-item" ng-class="app.state == 'properties' ? 'active':''">Properties</a>
                    <a href="#/builder" class="list-group-item" ng-class="app.state == 'builders' ? 'active':''">Builders</a>
                    <a href="#/specifications" class="list-group-item" ng-class="app.state == 'specifications' ? 'active':''">Specifications</a>
                    <a href="#/comments" class="list-group-item" ng-class="app.state == 'comments' ? 'active':''">Comments</a>
                    <a href="#/user_queries" class="list-group-item" ng-class="app.state == 'userQueries'?'active':''">User Queries</a>
                    <a href="#/change_password" class="list-group-item" ng-class="app.state == 'change_password' ? 'active':''">Change Password</a>
                    <a href="/backoffice/logout" class="list-group-item">Sign Out</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-10">
              <div ng-view ng-cloak></div>
            </div>
      </aside>
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
  <script src="/assets/js/angular-file-upload.min.js"></script>
  <script src="/assets/js/angular-route.min.js"></script>
  <script src="/assets/js/angular-sanitize.min.js"></script>
  <script src="/assets/js/jquery-1.11.3.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/ckeditor/ckeditor.js"></script>
  <!-- <script src="/assets/backofficeApp.min.js"></script> -->
  <script src="/backoffice_app/app.js"></script>
  <script src="/backoffice_app/file_upload/fileUploadController.js"></script>
  <script src="/backoffice_app/file_upload/fileUploadService.js"></script>
  <script src="/backoffice_app/file_upload/components/previewDirective.js"></script>
  <script src="/backoffice_app/locations/locationsController.js"></script>
  <script src="/backoffice_app/locations/locationsService.js"></script>
  <script src="/backoffice_app/builder/builderController.js"></script>
  <script src="/backoffice_app/builder/builderService.js"></script>
  <script src="/backoffice_app/builder/media/builderMediaController.js"></script>
  <script src="/backoffice_app/builder/create/createBuilderController.js"></script>
  <script src="/backoffice_app/specifications/specificationsController.js"></script>
  <script src="/backoffice_app/specifications/specificationsService.js"></script>
  <script src="/backoffice_app/specifications/media/specificationMediaController.js"></script>
  <script src="/backoffice_app/specifications/create/createSpecificationController.js"></script>
  <script src="/backoffice_app/locations/create/createLocationController.js"></script>
  <script src="/backoffice_app/locations/edit/editLocationController.js"></script>
  <script src="/backoffice_app/builder/edit/editBuilderController.js"></script>
  <script src="/backoffice_app/properties/propertiesController.js?v=1"></script>
  <script src="/backoffice_app/properties/propertiesService.js"></script>
  <script src="/backoffice_app/properties/create/createPropertyController.js"></script>
  <script src="/backoffice_app/properties/edit/editPropertyController.js?v=1"></script>
  <script src="/backoffice_app/properties/view/propertiesViewController.js"></script>
  <script src="/backoffice_app/properties/units/unitsController.js"></script>
  <script src="/backoffice_app/properties/units/unitsService.js"></script>
  <script src="/backoffice_app/properties/units/create/createUnitController.js?v=1"></script>
  <script src="/backoffice_app/properties/units/edit/editUnitController.js"></script>
  <script src="/backoffice_app/properties/media/mediaController.js"></script>
  <script src="/backoffice_app/properties/units/media/mediaController.js"></script>
  <script src="/backoffice_app/components/ckeditor/ckEditorDirective.js"></script>
  <script src="/backoffice_app/comments/commentsController.js"></script>
  <script src="/backoffice_app/comments/commentsService.js"></script>
  <script src="/backoffice_app/change_password/changePsswdController.js"></script>
  <script src="/backoffice_app/user_queries/userQueriesController.js"></script>
  <script src="/backoffice_app/user_queries/userQueriesService.js"></script>
</body>
</html>
