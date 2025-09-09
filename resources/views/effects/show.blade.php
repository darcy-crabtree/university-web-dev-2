<x-layout title="Show the details for a effects">
    <h1 class="text-6xl text-center underline mb-2">
    {{$effect->name}}
    
    </h1>
    <p class="text-center">
        Description: {{$effect->description}}
    </p>
    
    <div class="text-center">
    Medication Interaction:
        <a href='{{$effect->url}}' class="text-center text-blue-link underline">
            {{$effect->url}}
        </a> 
    <div>

    @can('edit')
    <div class="text-center">
    <a href='/effects/{{$effect->id}}/edit'>
        <button class="text-white bg-grey rounded mt-2 py-1 px-2">
            Edit
        </button>
    </a>
    </div>
    
    <div class="text-center text-white"
    <form method='POST' action='/effects'>
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{$effect->id}}">
        <button type='submit' class="bg-grey rounded mt-2 py-1 px-2">
            Delete
        </button>
    </form>
    @endcan
</x-layout>