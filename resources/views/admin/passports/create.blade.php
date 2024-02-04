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
                <h3 style="margin: 20px 20px;">Add passports</h3>
                <a href="{{ route('admin.passports.index')}}"><button>back</button><a>
            </div>
            <div class="form">
                <form action="{{ route('admin.passports.store')}}" method="POST" >
                    
                    @csrf
                    <p style="margin-bottom: 10px;">Seriya:</p>
                    <input type="text" name="seriya" placeholder="Passport seriya"><br><br>

                    <p>Number<p>
                    <input type="text" name="number" placeholder="Number" ><br><br>

                    <p>Expire_date<p>
                    <input type="text" name="expire_date" placeholder="Expire_date" ><br><br>

                    

                    <input type="submit" value="SEND"><br>

                </form>
            </div>
        </div>
    </div>
@endsection

