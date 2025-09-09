<x-layout title="Edit a medication">
    <h1 class="underline text-2xl pb-3">
        Edit the details for {{$medication->name}}
    </h1>

    <!-- (https://www.youtube.com/watch?v=cR10ZT1MJR4&t=338s) used as a guide to implement user input validation. Accessed 10/11/24. -->
    @if ($errors->any())
        <ul class="text-red">
            @foreach ($errors->all() as $error)
                <li class = "err text-red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/medications" method="POST">
    @csrf
    @method('PATCH')
    <!--A hidden field contains the id number of the medication -->
    <input type="hidden" name="id" value="{{$medication->id}}">
    <div>
        <label for="name">Name: </label>
        <!-- The text boxes are populated with values from the database ready for the user to edit -->
        <input type="text" id="name" name="name" value="{{$medication->name}}" class="focus:outline-none border rounded mb-2">
    </div>
    <div>
        <label for="contraindication">Contraindication: </label>
        <input type="text" id="contraindication" name="contraindication" value="{{$medication->contraindication}}" class="focus:outline-none border rounded mb-2">
    </div>
    <div>
        <label for="medication_interaction">Medication Interaction: </label>
        <input type="text" id="medication_interaction" name="medication_interaction" value="{{$medication->medication_interaction}}" class="focus:outline-none border rounded mb-2">
    </div>
    <div>
        <button type="submit" class="bg-grey rounded text-white mt-2 py-1 px-2">
            Save Changes
        </button>
    </div>
    </form>
    
</x-layout>