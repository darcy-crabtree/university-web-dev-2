<x-layout title="Add new medication">
  <h1 class="text-4xl underline">
    Add a new medication
  </h1>
  
  <!-- (https://www.youtube.com/watch?v=cR10ZT1MJR4&t=338s) used as a guide to implement user input validation. Accessed 10/11/24. -->
  <p>
    @if ($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
          <li class="err"> {{ $error }}</li>
        @endforeach
      </ul>
    @endif
  </p>

  <form method="POST" action="/medications">
    @csrf
    <div class="p-2">
      <label for="name">Name: </label>
      <input type="text" id="name" name="name" class="focus:outline-none border rounded"/>
    </div>
    <div class="p-2">
      <label for="contraindication">Contraindication: </label>
      <input type="text" id="contraindication" name="contraindication" class="focus:outline-none border rounded"/>
    </div>
    <div class="p-2">
      <label for="medication_interaction">Medication Interaction: </label>
      <input type="text" id="medication_interaction" name="medication_interaction" class="focus:outline-none border rounded"/>
    </div>
    <div class="">
      <button type="submit" class="bg-grey rounded text-white py-1 px-2">Save</button >
    </div>
  </form>
  
</x-layout>