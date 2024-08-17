@extends('layout.app')


@section('section')

    <button onclick="f()">Button</button>

@endsection


<script>
    function f(){
        alert('name')
    }
</script>