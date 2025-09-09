<x-layout title="List the effects">
    @auth
    <h1 class="font-bold text-center underline py-2 mb-4
    phone:text-2xl
    tablet:text-4xl
    laptop:text-6xl
    desktop:text-7xl
    ">
        List of effects
    </h1>

    @foreach ($effects as $effect)
    
        <div class="text-center text-white p-4 m-4
        phone:text-xl phone:p-4
        tablet:
        laptop:text-4xl
        desktop:text-6xl desktop:p-8">
            <a href="/effects/{{$effect->id}}" class="bg-grey rounded p-4 desktop:p-6">
                {{$effect->name}}
            </a>
        </div>
    
    @endforeach @endauth @guest
    <p class="pt-4">
        You need to be logged in to view the content of this website. @endguest
    </p>

    {{ $effects->links() }}
</x-layout>