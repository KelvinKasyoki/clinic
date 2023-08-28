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

                <form action="{{ route('updatedocdata',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    <label class="form-label">Doctor Name :</label>
                    <input type="text" style="color:black;" name="name" placeholder="Dr.Name ..."
                        class="col-6 form-control mb-4 text-black" value="{{ $data->name }}">

                    <label class="form-label">Email :</label>
                    <input type="text" style="color:black;" name="email" placeholder="Phone ..."
                        class="col-6 form-control mb-4 text-black" value="{{ $data->email }}">

                    <label class="form-label">Address :</label>
                    <input type="text" style="color:black;" name="address" placeholder="Address ..."
                        class="col-6 form-control mb-4 text-black" value="{{ $data->address }}">

                    <label class="form-label">Phone :</label>
                    <input type="text" style="color:black;" name="phone" placeholder="Phone ..."
                        class="col-6 form-control mb-4 text-black" value="{{ $data->phone }}">

                    <label class="form-label">Room No :</label>
                    <input type="number" style="color:black;" name="room" class="col-6 form-control mb-4 text-black"
                        value="{{ $data->room }}">

                    <label class="form-label">Speciality :</label>
                    <select name="speciality" style="color:black;" class="form-select mb-4 col-6"
                        value="{{ $data->speciality }}">
                        <option value="" class="text-muted">--speciality--</option>
                        <option value="Nose">Nose</option>
                        <option value="eye">eye</option>
                        <option value="leg">leg</option>
                        <option value="hand">hand</option>
                    </select>

                    <br>

                    <button class="btn btn-primary" name="button">Update Doctor</button>
                </form>



            </div>
        </div>


        <!-- script part -->
        @include('admin.scripts')
    </body>

</html>