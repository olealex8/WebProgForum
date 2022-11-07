@include('navbar')

@extends('template')

@section('EventMaker')
    <h1>Event Maker</h1>
@endsection

@section('EventNameSection')
    <label>Event name: </label>
    <input type="text" name="eventName">
@endsection

@section('CheckboxSection')
    <label for="Checkbox">
        <input type="checkbox" name="days[]" value="Monday"> Mon
        <input type="checkbox" name="days[]" value="Tuesday"> Tue
        <input type="checkbox" name="days[]" value="Wednesday"> Wed
        <input type="checkbox" name="days[]" value="Thursday"> Thu
        <input type="checkbox" name="days[]" value="Friday"> Fri
        <input type="checkbox" name="days[]" value="Saturday"> Sat
        <input type="checkbox" name="days[]" value="Sunday"> Sun
    </label>
@endsection

@section('SubmitButton')
    <button class="btn btn-light">Submit</button>
@endsection

