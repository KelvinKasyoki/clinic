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

<!-------------- <div class="container mt-2">-- ------------------->
        
        <br/>
       
        <div class="row">

        <div class="pull-right mb-2">
              <a class="btn btn-success" href="{{url('add_employee_View')}}"> Add New Employee</a>
          </div>
        </div>

        <br/>
        
    @if(session()->has('message'))

              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">close</button>
                {{session()->get('message')}}
                

              </div>
          @endif
    
        <table class="table table-responsive">
            <thead class="text-center p-2 thead-dark">
                <th>#</th>
                <th>Employee Name</th>
                <th>phone number</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Email</th>
                <th>Job position</th>
                <th>Status</th>
                <th>Action</th>
                
    
            </thead>
            @foreach ($data as $emp)
              <tr class="text-center p-2 " style="background-color:skyblue";>
                 <td>{{ $emp->id }}</td>
                  <td>{{ $emp->name }}</td>
                  <td>{{ $emp->phone }}</td>
                  <td>{{ $emp->gender }}</td>
                  <td>{{ $emp->address }}</td>
                  <td>{{ $emp->email }}</td>
                  <td>{{ $emp->job }}</td>
                  <td>{{ $emp->status }}</td>
                   <td>
                      <a href="{{ route('update_employee_View',$emp->id) }}" class="btn btn-primary">Update</a>
                  </td>
                  <td>
                    <form action="{{ route('delete_employee_data',$emp->id) }}" method="POST" onclick="return confirm('are you sure to delete this')">
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
