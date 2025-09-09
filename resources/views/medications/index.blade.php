<x-layout title="List the medications">
    @auth
    <h1 class="font-bold text-center underline py-2 mb-4
    phone:text-2xl
    tablet:text-4xl
    laptop:text-6xl
    desktop:text-7xl
    ">
        List of medications
    </h1>
    
    
    @foreach ($medications as $medication)
    
    
        <div class="text-center text-white p-4 m-4
        phone:text-xl phone:p-4
        tablet:
        laptop:text-4xl
        desktop:text-6xl desktop:p-8">
            <a href="/medications/{{$medication->id}}" class="bg-grey rounded p-4 desktop:p-6">
                {{$medication->name}}
            </a>
        </div>
    
    @endforeach @endauth @guest
    <p class="pt-4">
        You need to be logged in to view the content of this website. @endguest
    </p>
 
{{ $medications->links() }}

</x-layout>