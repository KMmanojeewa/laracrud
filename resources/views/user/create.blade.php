@extends('layouts.default')
@section('content')
    <section class="user-list">
        <h1>Create user</h1>

        <form method="POST" action="/users/save-new-user" >
            @csrf

            <label for="name">Name</label>

            <input id="name"
                   type="text"
                   name="name"
                   class="@error('name') is-invalid @enderror">

            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <label for="email">Email</label>

            <input id="email"
                   type="text"
                   name="email"
                   class="@error('email') is-invalid @enderror">

            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    </section>
@stop

