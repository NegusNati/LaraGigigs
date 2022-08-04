<h1>{{ $header }}</h1>

@unless(count($listings) == 0)
    @foreach ($listings as $listing)
       <a href="/listing/{{$listing['id']}}"><h1>{{ $listing['title'] }}</h1>
        </a> 
        <p>{{ $listing['description'] }}</p>
    @endforeach
@else
    {{ 'There are No Listings ' }}

@endunless
