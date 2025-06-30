
<div class="card p-0 d-flex flex-column justify-content-between">
    <div class="text">
        <h3>{{$movie['title']}}</h3>
        <h5>{{$movie['original_title']}}</h5>
        <h5>{{$movie['nationality']}}</h5>
        <h5>{{$movie['date']}}</h5>
    </div>
    <div class="bg-primary-subtle text-primary rounded-bottom-1 p-2 d-flex justify-content-between">
        <div>
            @for ($i = 0; $i < 10; $i++)
                @if ($i < floor($movie['vote']))
                    <i class="bi bi-star-fill"></i>
                    @elseif($i < ceil($movie['vote']))
                    <i class="bi bi-star-half"></i>
                    @else
                    <i class="bi bi-star"></i>

                @endif
            @endfor
        </div>
        <span>{{$movie['vote']}}</span>
    </div>
</div>
