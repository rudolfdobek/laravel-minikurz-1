<!DOCTYPE html>
<html lang="en">
<x-head />
<body>
    <div class="container">
        {{-- toto je komentar --}}
        {{-- takto se pouziva komponenta --}}
        <x-menu />

        <h1>Zoo</h1>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, odio minus fugiat iure ducimus et eos quas, cum laboriosam, perferendis sequi! Consequatur, perspiciatis debitis quos eligendi ab quisquam sapiente aperiam.</p>

        <p>Stav navstevnosti: {{ $stavNavstevnosti }} %</p>

        @if ($stavNavstevnosti > 80)
            <p>Mame plno.</p>
        @elseif($stavNavstevnosti > 60)
            <p>Mame malo mist.</p>
        @elseif($stavNavstevnosti > 40)
            <p>Je poloprazdno.</p>
        @elseif($stavNavstevnosti > 20)
            <p>Mame hodne mista.</p>
        @else
            <p>Je tu przadno.</p>
        @endif


        @if($jeOtevreno == true)
            <h3>Mame otevreno!</h3>
        @else
            <h3>Mame zavreno!</h3>
        @endif

        {{-- dump and die --}}
        {{-- dd(get_defined_vars()) --}}
        
        
        <h4>Casy verejneho krmeni</h4>
        <ul>
        @foreach($casyKrmeni AS $cas)
            <li>{{ $cas }}</li>
        @endforeach
        </ul>
        
        
    </div>
</body>
</html>