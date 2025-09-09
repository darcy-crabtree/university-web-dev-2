<x-layout title="Show the details for a medication">
    <h1 class="text-6xl text-center underline mb-2">
    {{$medication->name}}
    
    </h1>
    <p class="text-center">
        Contraindications: {{$medication->contraindication}}
    </p>
    <p class="text-center">
        Medication Interaction: {{$medication->medication_interaction}}
    </p>
    
    <p class="text-center">
        Medication side-effects can include: 
        @foreach ($medication->effects as $effect)
            <a href='/effects/{{$effect->id}}' class="text-blue-link">
                {{$effect->name}},
            </a> 
            
        @endforeach
    </p>
    

    @can('edit')
    <div class="text-center">
    <a href='/medications/{{$medication->id}}/edit'>
        <button class="text-white bg-grey rounded mt-2 py-1 px-2">
            Edit
        </button>
    </a>
    </div>
    <div class="text-center text-white"
    <form method='POST' action='/medications'>
        @csrf
        @method('DELETE')
        <input type="hidden" name="id" value="{{$medication->id}}">
        <button type='submit' class="bg-grey rounded mt-2 py-1 px-2">
            Delete
        </button>
    </form>
    @endcan

</x-layout>