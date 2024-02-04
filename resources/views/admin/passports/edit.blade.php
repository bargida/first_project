
@extends('admin.layouts.layout')

@section('content')

<div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Add groups</h3>
                <a href="{{ route('admin.passports.index')}}"><button>back</button><a>
            </div>
        <h1>Edit groups</h1>

            <div class="form">
                <form action="{{route('admin.passports.update', $group->id)}}" method="post" enctype="multipart/form-data>">
                @csrf
                @method('PUT')

                    <p style="margin-bottom: 10px;">Seriya:</p>
                    <input type="text" name="seriya" placeholder="Passport seriya"><br>

                    <p>Number<p>
                    <input type="text" name="number" placeholder="Number" ><br><br>

                    <p>Expire_date<p>
                    <input type="text" name="expire_date" placeholder="Expire_date" ><br><br>

                    
                   

                    <input type="submit" name="submit" value="SEND"><br>

                </form>
            </div>
        </div>
    </div>
@endsection
