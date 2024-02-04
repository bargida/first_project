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
                <a href="{{ route('admin.groups.index')}}"><button>back</button><a>
            </div>
            <div class="form">
                <form action="{{ route('admin.groups.store')}}" method="POST" >
                    
                    @csrf
                    <p style="margin-bottom: 10px;">Name:</p>
                    <input type="text" name="name" placeholder="John Doe"><br><br>

                    <p>Level</p>
                        <select name="level" placeholder="Your level">
                            <option value="1">Senior</option>
                            <option value="0">Junior</option>
                        </select><br><br>

                    <input type="submit" value="SEND"><br>

                </form>
            </div>
        </div>
    </div>
@endsection

