@extends('layouts.practice')
@section('title','編集完了')
<head>
<link rel="stylesheet" type="text/css" href="css/staff_reg.css">
</head>
@include('header')

@section('content')
<h2 class="title">編集完了</h2>
<div class="complete_msg">
    <p>社員の編集を行いました。</p>
    <a href="attendanceList">戻る</a>
</div>
@endsection