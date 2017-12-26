@extends('template.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        @if(isset($information))
            <div >
            @foreach($information as $key => $info)
                <div style="border:0.5px solid; border-radius:5px;" class="panel-body"><p style="padding:0px;"><b>{{$key}}:</b> {{$info}}</p></div>
                <br/>
            @endforeach
            </div>
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
    </div>
</div>
@endsection
