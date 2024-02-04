@extends('admin.layouts.layout')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>There is some problem with your input</strong><br><br>
        <ul>
            @foreach($errors-> all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3 style="margin: 20px 20px;">Add groups</h3>
                <a href="{{ route('admin.students.index')}}"><button>back</button><a>
            </div>
            <div class="form-control">
            
                <form action="{{ route('admin.students.store')}}" method="POST" >
                    
                    @csrf
                    <p>Passports_id</p>
                    <select name="regions_id" id=""  class="form-control">
                        @foreach ($regions as $item)
                            <option value="{{ item->id}}">{{ item->id }}</option>
                        @endforeach
                    </select>

                    <p style="margin-bottom: 10px;">Regions_id:</p>
                    <input type="number" name="regions_id" placeholder="John Doe"><br>

                    <p>Passports_id</p>
                    <input type="number" name="passports_id" placeholder="Passports_id" ><br><br>

                    <p>Groups_id</p>
                    <input type="number" name="groups_id" placeholder="Groups_id"><br><br>

                    <p>Passports_id</p>
                    <input type="number" name="passports_id" placeholder="Passports_id"><br><br>

                    <p>FullName<p>
                    <input type="text" name="fullName" placeholder="fullName" ><br><br>

                    <p>Year<p>
                    <input type="date" name="year" placeholder="year" ><br><br>

                    <p>Photo</p>
                    <input type="file" name="photo" placeholder="Your photo"><br><br>


                    <input type="submit" value="SEND"><br>

                </form>
            </div>
        </div>
    </div>
@endsection

