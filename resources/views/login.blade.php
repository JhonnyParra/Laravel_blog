@extends('Layouts.html')

@section('page_title', $title)

@section('content')
<div claas="form-wrapper">
  <form method="POST" action="/process/login">
    <label class="label-form-1">Id</label>
    <input type="text" name="user_id" id="user_id" required>
    <label class="label-form-1">Password</label>
    <input type="password" name="pass" id="pass" required>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Submit">
  </form>
</div>
@endsection