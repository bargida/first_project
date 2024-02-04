
@extends('admin.layouts.layout')

@section('content')

<link rel="stylesheet" href="stylef.css">
<!-- MAIN -->

<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Passports</h3>
                <button><a href="{{ route('admin.passports.create')}}">Create</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Seriya</th>
                        <th>Number</th>
                        <th>Expire_date</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                @if(count($passports)==0)

                @endif
                @foreach ($passports as $item)
                    <tr>
                        <td><p>{{++$loop->index}}</p></td>
                        <td><p>{{$item->seriya}}</p></td>
                        <td><p>{{$item->number}}</p></td>
                        <td><p>{{$item->expire_date}}</p></td>
                        
                       


                        <td style="display: flex">

                            <a class="btn btn-primary" href="{{ route('admin.passports.show', $item->id) }}"> <ion-icon name = "eye-outline"></ion-icon></a>
                                            
                            <a class="btn btn-primary" href="{{ route('admin.passports.edit', $item->id) }}"> <ion-icon name = "create-outline"></ion-icon></a>

                            <form action="{{ route('admin.passports.destroy', $item->id) }}" method="POST">
                               
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" style="background-color: #DA0C81;"><a class="btn btn-danger" href="{{route('admin.groups.destroy',$item->id)}}"onclick="return confirm ('O`chirmoqchimisiz? ')"> <ion-icon name = "trash-outline"></ion-icon></a></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
               
            </table>
        </div>

    </div>
</main>

<!-- MAIN -->

@endsection