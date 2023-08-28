
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">
        label
        {
        display: inline-block;
        width: 200px;
        }
    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!----------------- sidebar--------------------->
        @include('admin.sidebar')

      <!---------- NAVIGATION BAR--------------------->

        @include('admin.navbar')

        <!-------------- body part-- ------------------->
    <div class="container-fluid page-body-wrapper">

         <div class="container" align="center" style="padding-top: 100px;">

<!-------------- displaying sucessful upload-- ------------------->

          @if(session()->has('message'))

              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{session()->get('message')}}
                

              </div>
          @endif

                    <form action="{{url('upload_nurse_data')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                    <div style="padding:15px;">
                        <label>Nurse Name</label>
                        <input type="text" style="color:black;" name="name" placeholder="Enter your name" required>
                    </div>

                    <div style="padding:15px;">
                        <label>phone number</label>
                        <input type="text" style="color:black;" name="phone" placeholder="Enter your phone number" required>
                    </div>

                    <div style="padding:15px;">
                    <label>Gender</label>
                        <select name="gender" width:100px; style="color:black;"  >
                            <option value="" class="text-muted">--select Gender--</option>
                            <option value="1">Female</option>
                            <option value="2">Male</option> 
                    </select>
                     </div>

                    <div style="padding:15px;">
                            <label>Address</label>
                            <input type="text" style="color:black;" name="address" placeholder="Enter your address" required>
                    </div>

                    <div style="padding:15px;">
                        <label>Email</label>
                        <input type="text" style="color:black;" name="email" placeholder="Enter your email.." required>
                    </div>

                    <div style="padding:15px;">
                        <label>Qualification</label>
                        <input type="text" style="color:black;" name="qualification" placeholder="Enter your qualification.." required>
                    </div>

                    <div style="padding:15px;">
                    <label>Registration</label>
                        <select name="registered" width:100px; style="color:black;"  >
                            <option value="" class="text-muted">--select registration status--</option>
                            <option value="1">Registered</option>
                            <option value="2">UnRegistered</option> 
                    </select>
                     </div>

                 <div style="padding:15px;">
                    <label>Position</label>
                        <select name="position" width:100px; style="color:black;"  >
                            <option value="" class="text-muted">--select Nurse Position--</option>
                            <option value="Entrylevel">Entry level</option>
                            <option value="Midlevel">Mid-level </option>
                            <option value="Supervisorlevel">Supervisor-level </option>
                            
                    </select>
                </div>
          <!--<div style="padding:15px;">
                <label>Image</label>
                   <input type="file" name="file">
          <div>-->

                    <div style="padding:15px;">
                    <input type="submit" class="btn btn-success">
                    </div>


                    </form>
                    
                </div>

        </div>
        

    
        <!-- script part -->
        @include('admin.scripts')
  </body>
</html>
