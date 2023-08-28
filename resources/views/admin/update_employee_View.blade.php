<!DOCTYPE html>
<html lang="en">

    <head>
        <base href="/public">

        <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
        </style>

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
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{session()->get('message')}}


                </div>
                @endif



                <form action="{{ route('update_employee_data',$data->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    <label class="form-label">Employee Name :</label>
                    <input type="text" style="color:black;" name="name" placeholder="Name ..."
                        class="col-6 form-control mb-4 text-black" value="{{ $data->name }}">



                    <label class="form-label">Phone :</label>
                    <input type="text" style="color:black;" name="phone" placeholder="Phone ..."
                        class="col-6 form-control mb-4 text-black" value="{{ $data->phone }}">



                    <label class="form-label">Gender :</label>
                    <select name="gender" style="color:black;" class="form-select mb-4 col-6"
                        value="{{ $data->speciality }}">
                        <option value="" class="text-muted">--select Gender--</option>
                        <option value="1">Female</option>
                        <option value="2">Male</option>
                    </select>

                    <br>



                    <label class="form-label">Address :</label>
                    <input type="text" style="color:black;" name="address" placeholder="Address ..."
                        class="col-6 form-control mb-4 text-black" value="{{ $data->address }}">



                    <label class="form-label">Email :</label>
                    <input type="text" style="color:black;" name="email" placeholder="Phone ..."
                        class="col-6 form-control mb-4 text-black" value="{{ $data->email }}">



                    <label class="form-label">Job position :</label>
                    <input type="text" style="color:black;" name="job" placeholder="position ..."
                        class="col-6 form-control mb-4 text-black" value="{{ $data->job }}">



                    <label class="form-label">Employee status:</label>
                    <select name="status" style="color:black;" class="form-select mb-4 col-6"
                        value="{{ $data->status }}">
                        <option value="" class="text-muted">--select status--</option>
                        <option value="1">Active</option>
                        <option value="2">inactive</option>
                    </select>


                    <br>

                    <button class="btn btn-primary" name="button">Update Nurse</button>
                </form>



            </div>
        </div>


        <!-- script part -->
        @include('admin.scripts')
    </body>

</html>