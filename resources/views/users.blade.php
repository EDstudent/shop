@extends('layouts.app', ['title' => 'Users'])
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Users
        </div>
        <div class="card-body">
            <form action="{{url('/users/update')}}" class='form-horizontal'>
            <table class="table table-hover">
            <tr class="toprow">
                <th></th>
                <th>User</th>
                <th>Email</th>
                <th>Role<th>
            </tr>
            <?php $i=1; $roles=array('none','admin','creator');?>
             @foreach ($users as $user)<tr>
                <td>{{$i++}}</td>
             <td>{{$user->name}} </td> 
             <td>{{$user->email}} </td> 
             <td>
                <select name="role{{$user->id}}" class="form-control" id="role{{$user->id}}">
                        @foreach ($roles as $r)
                            <option value={{$r}} 
                            @if ($r==$roles[$user->role-1]) selected @endif
                            >{{$r}}</option>
                        @endforeach
                </select>
                             </td>
                </tr>@endforeach
            </table>
            @csrf
            <input class="btn right btn-a " type="submit" value="update">
            </form>
        </div>
    </div>
</div>
@endsection