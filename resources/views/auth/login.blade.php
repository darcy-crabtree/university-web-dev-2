<x-layout title="Sign In">
    <h1 class="underline text-4xl pb-3">
        Sign In
    </h1>
    
    @if ($errors->any())
        <ul class="text-red">
            @foreach ($errors->all() as $error)
                <li class = "text-red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="/login" class="focus:outline-none phone:text-xl">
        @csrf
        <div class="pb-2">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" class="border rounded focus:outline-none phone:w-80"/>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="border rounded focus:outline-none phone:w-80" />
        </div>
        <div class="pt-2">
            <button type="submit" class="text-white bg-grey rounded px-1">
                Sign in
            </button>
        </div>
    </form>

    
</x-layout>