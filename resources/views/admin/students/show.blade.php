@extends('admin.layouts.layout')

@section('students')
active
@endsection

@section('content')

<!-- MAIN -->
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show product</h3>
                <button><a class="create__btn" href="{{ route('admin.students.index')}}"><i class='bx bx-arrow-back'></i>Qaytish</a></button>
             
               
            </div>
            <table>
                <tr>
                    <th>Regions_id:</th>
                    <td><b>{{$student->regions_id}}</b></td>
                </tr>
                <tr>
                    <th>Passports_id:</th>
                    <td><b>{{$student->passports_id}}</b></td>
                </tr>
                <tr>
                    <th>Groups_id:</th>
                    <td><b>{{$student->groups_id}}</b></td>
                </tr>
                <tr>
                    <th>fullName:</th>
                    <td><b>{{$student->fullName}}</b></td>
                </tr>
                <tr>
                    <th>year:</th>
                    <td><b>{{$student->year}}</b></td>
                </tr>

                <tr>
                    <th>Photo:</th>
                    <td><b>{{$student->photo}}</b></td>
                </tr>
                
                
            </table>
        </div>

    </div>
</main>

<!-- MAIN -->
@endsection