@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <!-- @foreach($data as $news)

                    <li><h1>{{$news['title']}}</h1></li>
                    <li><p>{{{$news['content']}}}</p></li>

                   @endforeach

               -->
              

               @forelse($data as $news)

                    <li><h1>{{$news['title']}}</h1></li>
                    <li><p>{{{$news['content']}}}</p></li>
                    <li><h1><a href="{{url('page/'.$news->id)}}">Read More</a></h1></li>

                    @empty

                    No Data
                    @endforelse


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
