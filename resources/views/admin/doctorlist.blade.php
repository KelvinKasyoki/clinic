

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
<div class="container m-3 p-5">

    @if(session()->has('message'))

              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">close</button>
                {{session()->get('message')}}
                

              </div>
          @endif
    
        <table class="table table-responsive">
            <thead class="text-center p-2 thead-dark">
                <th>Doctor Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>phone number</th>
                <th>Specialization</th>
                <th>Room Number</th>
                <th>Action</th>
                
    
            </thead>
            @foreach ($data as $doc)
              <tr class="text-center p-2 " style="background-color:skyblue";>
                  <td>{{ $doc->name }}</td>
                  <td>{{ $doc->email }}</td>
                  <td>{{ $doc->address }}</td>
                  <td>{{ $doc->phone }}</td>
                  <td>{{ $doc->speciality }}</td>
                  <td>{{ $doc->room }}</td>
                   <td>
                      <a href="{{ route('updateDoctorView',$doc->id) }}" class="btn btn-primary">Update</a>
                  </td>
                  <td>
                    <form action="{{ route('deletedocdata',$doc->id) }}" method="POST" onclick="return confirm('are you sure to delete this')">
                        @csrf
                        @method('delete')
                            <button class="btn btn-danger" >Delete</button>
                            
                      </form>
                  </td>
                  <td>
                    
              </tr>
            @endforeach
   
        </table>
</div>
        

    
        <!-- script part -->
        @include('admin.scripts')
  </body>
</html>
