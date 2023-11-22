@extends("layouts.main")
@section("berria")
    <form action="/bilatu">
        <input type="text" name="izena" class=" border-2 m-8">
        <input type="submit">
    </form>

    @if( $task != null)
        <p>{{$task->izena}}</p>
    @endif
    
@endsection