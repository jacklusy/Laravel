{{-- @include('navbar') --}}

    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <!-- Book Now Section Start -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">

<section></section>
<div class="container mt-5 border shadow-lg p-3 mb-5 bg-white rounded ">
    @if (count($events) > 0)
    <table class="table table-striped thead-dark">
      <thead class="table table-striped text-white thead-dark">
        <tr>
          <th scope="col" style="color: black">Name</th>
          <th scope="col" style="color: black">Description</th>
          <th scope="col" style="color: black">Price</th>
          <th scope="col" style="color: black">Image</th> 
          <th scope="col" style="color: black">See More</th>      
        </tr>
      </thead>    
      <tbody>
          @foreach ($events as $event)
        <tr>
          <td class="text-center pt-3 fs-5">{{$event->name}}</td>
          <td class="text-center pt-3 fs-5">{{$event->description}}</td>
          <td class="text-center pt-3 fs-5">{{$event->price}}</td>
          <td class="text-center mt-5">        
            <img src="{{asset('images/'.$event->image->url)}}" style="height: 100px;line-height: 100px; width:100px; 
            display:block">
          </td>
  
          <td >   
            <a  class="btn btn-danger text-center mt-3 " href="{{route('event.show',$event->id)}}">Show More</a>
          </td>
        {{-- </td> --}}
      </tr>
      @endforeach
      </tbody>
    </table>
    @else
    <h1 class="text-center text-danger fw-bold fs-3">No Event</h1>
    @endif
    
    </div>

</section>

{{-- @if ($results)
    @foeach($results as $item)
        {{$item->title}}
    @endforeach

@else
  <h1>no event</h1> 
@endif --}}




{{-- @include('footer') --}}



{{-- @if (count($events) > 0)
@foreach ($events as $event)
{{$event}}
@endforeach
@else
    <h1>no event</h1>
@endif --}}