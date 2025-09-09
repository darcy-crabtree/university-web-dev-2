<x-layout title="Edit an effect">
    <h1 class="underline text-2xl pb-3">
        Edit the details for {{$effect->name}}
    </h1>

    <!-- (https://www.youtube.com/watch?v=cR10ZT1MJR4&t=338s) used as a guide to implement user input validation. Accessed 10/11/24. -->
    @if ($errors->any())
        <ul class="text-red">
            @foreach ($errors->all() as $error)
                <li class = "text-red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/effects" method="POST">
    @csrf
    @method('PATCH')
    <!--A hidden field contains the id number of the medication -->
    <input type="hidden" name="id" value="{{$effect->id}}">
    <div>
        <label for="name">Name: </label>
        <!-- The text boxes are populated with values from the database ready for the user to edit -->
        <input type="text" id="name" name="name" value="{{$effect->name}}" class="focus:outline-none border rounded mb-2">
    </div>
    <div>
        <label for="description">Description: </label>
        <input type="text" id="description" name="description" value="{{$effect->description}}" class="focus:outline-none border rounded mb-2 phone:w-full phone:h-full">
    </div>
    <div>
        <label for="url">URL: </label>
        <input type="text" id="url" name="url" value="{{$effect->url}}" class="focus:outline-none border rounded mb-2 phone:w-full phone:h-full">
    </div>
    <div>
        <button type="submit" class="bg-grey rounded text-white mt-2 py-1 px-2">
            Save Changes
        </button>
    </div>
    </form>
</x-layout>