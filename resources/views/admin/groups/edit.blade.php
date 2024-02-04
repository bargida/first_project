
@extends('admin.layouts.layout')

@section('content')

<div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Add groups</h3>
                <a href="{{ route('admin.groups.index')}}"><button>back</button><a>
            </div>
        <h1>Edit groups</h1>

            <div class="form">
                <form action="{{route('admin.groups.update', $group->id)}}" method="post" enctype="multipart/form-data>">
                @csrf
                @method('PUT')

                    <p>Name:</p>
                    <input type="text" name="name" 
                    value="{{ $group->name }}" placeholder="John Doe"><br>

                    <p>Level</p>
                        <select name="level" value="{{ $group->level }}"  placeholder="Your level">
                            <option value="1">Senior</option>
                            <option value="0">Junior</option>
                        </select>

                    <input type="submit" name="submit" value="SEND"><br>

                </form>
            </div>
        </div>
    </div>
@endsection
