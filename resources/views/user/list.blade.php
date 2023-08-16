@extends('layouts.default')
@section('content')
    <section class="user-list">
        <h1>User Details Listing</h1>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Email Verified At</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            @forelse ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->email_verified_at}}</td>
                    <td class="edit"><a href="user/{{$user->id}}">Edit</a></td>
                </tr>

            @empty

                <tr>
                    <td>No users</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endforelse


            </tbody>
        </table>
    </section>
@stop

