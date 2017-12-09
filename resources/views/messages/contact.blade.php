@extends('layouts.default')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
            <h2>Get In Touch</h2>

            <p><span class="text-muted">If you having trouble with this service, please <a href="mailto:{{config('laracarte.mail')}}" data-helpful="laracarte" data-helpful-modal="on">ask for help</a>.</span></p>

            <form method="POST" action="{{route('store')}}">
                
                {{csrf_field()}}

                <div class="form-group has-error {{$errors->has('name') ? 'has-error': ''}} ">
                    <label class="control-label" for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required="name">
                    {!!  $errors->first('name', '<span class="help-block ">:message</span>') !!}

                </div>

                <div class="form-group has-error {{$errors->has('email') ? 'has-error': ''}}">
                    <label class="control-label" for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required="email">
                    {!!  $errors->first('email', '<span class="help-block ">:message</span>') !!}


                </div>


                <div class="form-group has-error {{$errors->has('message') ? 'has-error': ''}}">
                    <textarea class="form-control control-label" name="message" rows="10" cols="10" >{{ old('message') }}</textarea>
                   

                    {!!  $errors->first('message', '<span class="help-block ">:message</span>') !!}

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop