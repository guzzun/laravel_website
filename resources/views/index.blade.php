  @extends('layouts.master')

    @section('content')

      @foreach ($articles as $article)

        <div class="col-md-4">
            <h2> {{$article->title}} </h2>
            <p> {!!$article->description!!}  </p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>

      @endforeach

    @endsection