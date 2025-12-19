@extends('template.default')
@section('header' , 'ตารางเเม่สูตรคูณ')
@section('content')
<form action="/calculate" method="post">
    @csrf
    <?php //echo isset($_Get['mynumber']) ? $_GET['mynumber'] : ""; ?>
    <input class="form-control" name="mynumber" type="number">
    <br>
    <button class="btn btn-success">บันทึก</button>
</form>
@endsection
