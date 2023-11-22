@extends("layouts.main")

@section("berria")
<div class=" border-2 mt-14 w-1/3 m-auto">
    <form action="/zeregina" method="post">
        @csrf
        <p class=" bg-gray-200">New Task</p>
        <p class=" m-5">Task</p>
        <input type="text" name="izena" class=" m-5 border-2">
        <br>
        <input type="submit" value="+Add Task"  class=" border-2 w-1/3 m-5">
    </form>
    
    @foreach($zereginzerrenda as $zeregina)
        
        <form action="/zeregina/{{$zeregina->id}}" >
            @csrf
            {{$zeregina->izena}}
            <input type="submit" value="Ezabatu" class=" bg-red-700 text-white">
        </form>
        <br>
    @endforeach
    
</div>
@endsection
