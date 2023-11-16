
<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
    <title>@yield('title')</title>
  </head>
  <body>
    <div class="container-scroller">
    @include('admin.navbar')
        <!-- main-panel ends -->   
        @yield('content')
    </div> 
    @include('admin.adminscript')
    <!-- End custom js for this page -->
  </body>
</html>