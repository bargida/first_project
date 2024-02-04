
@extends('admin.layouts.layout')

@section('content')

<link rel="stylesheet" href="stylef.css">
<!-- MAIN -->

<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Regions</h3>
                <button><a href="{{ route('admin.regions.create')}}">Create</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                @if(count($regions) == 0 )

                @endif
                @foreach ($regions as $item)
                    <tr>
                        <td><p>{{++$loop->index}}</p></td>
                        <td><p>{{$item->name}}</p></td>
                        
                        <!-- <td><p>{{$item->photo}}</p></td> -->


                        <td style="display: flex">

                            <a class="btn btn-primary" href="{{ route('admin.regions.show', $item->id) }}"> <ion-icon name = "eye-outline"></ion-icon></a>
                                            
                            <a class="btn btn-primary" href="{{ route('admin.regions.edit', $item->id) }}"> <ion-icon name = "create-outline"></ion-icon></a>

                            <form action="{{ route('admin.regions.destroy', $item->id) }}" method="POST">
                               
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" style="background-color: #DA0C81;"><a class="btn btn-danger" href="{{route('admin.regions.destroy',$item->id)}}"onclick="return confirm ('O`chirmoqchimisiz? ')"> <ion-icon name = "trash-outline"></ion-icon></a></button>
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