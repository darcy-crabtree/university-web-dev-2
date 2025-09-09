<!-- (https://www.youtube.com/watch?v=R58XZ8pAXoE&t=449s) used to create the search facility. Accessed 13/11/24
<form action="{{ route('medications.search') }}" method="GET">
        <input type="text" name="search" placeholder="Search Medications">
        <button type="submit">Search</button>
</form>

{{ $medications->links() }} -->

<form method="GET" action="/search">
        {{$medication->id}}
        <a href="/medications/{{$medication->id}}"></a>
</form>