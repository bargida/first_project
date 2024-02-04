
@extends('admin.layouts.layout')

@section('content')

<div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Add groups</h3>
                <a href="{{ route('admin.students.index')}}"><button>back</button><a>
            </div>
        <h1>Edit groups</h1>

            <div class="form">
                <form action="{{route('admin.students.update', $student->id)}}" method="post" enctype="multipart/form-data>">
                @csrf
                @method('PUT')
                    <p>Passports_id</p>
                    <input type="number" name="passports_id" value="{{ $student->passports_id }} placeholder="Passports_id" ><br><br>

                    <p>Groups_id</p>
                    <input type="number" name="groups_id" value="{{ $student->groups_id }}"placeholder="Groups_id"><br><br>

                    <p>Passports_id</p>
                    <input type="number" name="passports_id" value="{{ $student->passports_id }} placeholder="Passports_id"><br><br>

                    <p>FullName<p>
                    <input type="text" name="fullName" value="{{ $student->fullName }} placeholder="fullName" ><br><br>

                    <p>Year<p>
                    <input type="date" name="year" value="{{ $student->year }} placeholder="year" ><br><br>

                    <p>Photo</p>
                    <input type="file" name="photo" value="{{ $student->photo }} placeholder="Your photo"><br><br>

                    
                    <input type="submit" name="submit" value="SEND"><br>

                </form>
            </div>
        </div>
    </div>
@endsection
