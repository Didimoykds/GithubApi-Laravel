@extends('template.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        @if(isset($information))
            <p>
            @foreach($information as $key => $info)
            <strong>{{$key}}:</strong>  {{$info}}</br>
            @endforeach
            </p>
        @endif
        <div class="row">
            <div class="col-md-12" style="margin-bottom:20px">
                <form method="Post">
                    {{csrf_field()}}
                    <input class="btn btn-info" type="submit" value="Find my ip information">
                </form>
            </div>
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{route('home')}}">return</a>
            </div>
        </div>
        <br/>
        <p>Using a web service for retrieving ip information, thanks to <a href="ip-api.com">ip-api.com</a></p>
    </div>
</div>
@endsection
