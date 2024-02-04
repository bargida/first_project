@extends('admin.layouts.layout')

@section('groups')
active
@endsection

@section('content')

<!-- MAIN -->
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Show product</h3>
                <button><a class="create__btn" href="{{ route('admin.passports.index')}}"><i class='bx bx-arrow-back'></i>Qaytish</a></button>
             
               
            </div>
            <table>
                <tr>
                    <th>Name:</th>
                    <td><b>{{$passport->seriya}}</b></td>
                    <td><b>{{$passport->number}}</b></td>
                    <td><b>{{$passport->expire_date}}</b></td>
                </tr>
                
               

            </table>
        </div>

    </div>
</main>

<!-- MAIN -->
@endsection