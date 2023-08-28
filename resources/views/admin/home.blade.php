
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!----------------- sidebar--------------------->
        @include('admin.sidebar')

      <!---------- NAVIGATION BAR--------------------->

        @include('admin.navbar')

        <!-------------- body part-- ------------------->

        @include('admin.body')

    
        <!-- script part -->
        @include('admin.scripts')
  </body>
</html>