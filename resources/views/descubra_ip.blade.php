@extends('template.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        @if(isset($ip))
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
