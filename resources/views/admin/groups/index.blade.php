
@extends('admin.layouts.layout')

@section('content')

<link rel="stylesheet" href="stylef.css">
<!-- MAIN -->

<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Groups</h3>
                <button><a href="{{ route('admin.groups.create')}}">Create</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Level</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                @if(count($groups)==0)

                @endif
                @foreach ($groups as $item)
                    <tr>
                        <td><p>{{++$loop->index}}</p></td>
                        <td><p>{{$item->name}}</p></td>
                        
                        <td><p>{{ $item->level == 1 ? 'Senior' : 'Junior' }}</p></td>
                        <!-- <td><p>{{$item->photo}}</p></td> -->


                        <td style="display: flex">

                            <a class="btn btn-primary" href="{{ route('admin.groups.show', $item->id) }}"> <ion-icon name = "eye-outline"></ion-icon></a>
                                            
                            <a class="btn btn-primary" href="{{ route('admin.groups.edit', $item->id) }}"> <ion-icon name = "create-outline"></ion-icon></a>

                            <form action="{{ route('admin.groups.destroy', $item->id) }}" method="POST">
                               
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