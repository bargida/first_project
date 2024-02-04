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
                <h3 style="margin: 20px 20px;">Add regions</h3>
                <a href="{{ route('admin.regions.index')}}"><button>back</button><a>
            </div>
            <div class="form">
                <form action="{{ route('admin.regions.store')}}" method="POST" >
                    
                    @csrf
                    <p style="margin-bottom: 10px;">Region_name:</p>
                    <input type="text" name="name" placeholder="Enter your region"><br><br>

                    <input type="submit" value="SEND"><br>

                </form>
            </div>
        </div>
    </div>
@endsection

