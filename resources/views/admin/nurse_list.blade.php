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
                    <a class="btn btn-success" href="{{url('add_nurse_View')}}"> Add New nurse</a>
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
                <th>Nurse Name</th>
                <th>phone number</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Email</th>
                <th>Qualification</th>
                <th>Status</th>
                <th>Position</th>
                <th>Action</th>
                
    
            </thead>
            @foreach ($data as $nurs)
              <tr class="text-center p-2 " style="background-color:skyblue";>
                <td>{{ $nurs->id }}</td>
                  <td>{{ $nurs->name }}</td>
                  <td>{{ $nurs->phone }}</td>
                  <td>{{ $nurs->gender }}</td>
                  <td>{{ $nurs->address }}</td>
                  <td>{{ $nurs->email }}</td>
                  <td>{{ $nurs->qualification }}</td>
                  <td>{{ $nurs->registered }}</td>
                  <td>{{ $nurs->position }}</td>
                   <td>
                      <a href="{{ route('update_nurse_View',$nurs->id) }}" class="btn btn-primary">Update</a>
                  </td>
                  <td>
                    <form action="{{ route('delete_Nurse_data',$nurs->id) }}" method="POST" onclick="return confirm('are you sure to delete this')">
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
