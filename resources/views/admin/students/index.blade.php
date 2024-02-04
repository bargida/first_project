
@extends('admin.layouts.layout')

@section('content')

<link rel="stylesheet" href="stylef.css">
<!-- MAIN -->

<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Groups</h3>
                <button><a href="{{ route('admin.students.create')}}">Create</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>regions_id</th>
                        <th>passports_id</th>
                        <th>groups_id</th>
                        <th>fullName</th>
                        <th>year</th>
                        <th>photo</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                @if(count($students) == 0)

                @endif
                @foreach ($students as $item)
                    <tr>
                        <td><p>{{++$loop->index}}</p></td>
                        <td><p>{{$item->regions_id}}</p></td>

                        <td><p>{{$item->region->id}}</p></td>

                        <td><p>{{$item->passports_id}}</p></td>
                        <td><p>{{$item->groups_id}}</p></td>
                        <td><p>{{$item->fullName}}</p></td>
                        <td><p>{{$item->year}}</p></td>
                        <td><p><img src="/files/photos/{{$item->photo }}" alt="" width="100px"></p></td>
                        <td><p>{{$item->region->name}}</p></td>
                        

                        <td style="display: flex">

                            <a class="btn btn-primary" href="{{ route('admin.students.show', $item->id) }}"> <ion-icon name = "eye-outline"></ion-icon></a>
                                            
                            <a class="btn btn-primary" href="{{ route('admin.students.edit', $item->id) }}"> <ion-icon name = "create-outline"></ion-icon></a>

                            <form action="{{ route('admin.students.destroy', $item->id) }}" method="POST">
                               
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