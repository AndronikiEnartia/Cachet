@extends('layout.master')

@section('content')
    <div class="pull-right">
        <p><a class="btn btn-success btn-outline" href="/"><i class="ion ion-home"></i></a></p>
    </div>

    <div class="clearfix"></div>

    @include('dashboard.partials.errors')

    <div class="row">
        <div class="col-xs-12 col-lg-offset-2 col-lg-8">
            <div class="panel panel-meassage">
                <div class="panel-heading">
                    {{--<h2>{{ trans('cachet.subscriber.subscribe') }}</h2>--}}
                    <h2>{{ trans('cachet.subscriber.subscribe_myTophost') }}</h2>
                </div>
                <div class="panel-body">
                    {{ trans('cachet.subscriber.subscribe_myTophost_info') }}
                    <br/> <br/>
                    <ol>
                        <li>{{ trans('cachet.subscriber.subscribe_myTophost_txt1') }}</li>
                        <li>{{ trans('cachet.subscriber.subscribe_myTophost_txt2') }}</li>
                        <li>{{ trans('cachet.subscriber.subscribe_myTophost_txt3') }}</li>
                    </ol>
                    <br/> <br/>

                    <div style="text-align: center">
                        <a href="https://top.host/myTophost"> <button type="submit" class="btn btn-success myTophost_subscribe">{{ trans('cachet.subscriber.subscribe_myTophost_btn') }}</button></a>
                    </div>


                    {{--<form action="{{ route('subscribe.subscribe', [], false) }}" method="post" class="form">--}}
                    {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                    {{--<div class="form-group">--}}
                    {{--<input class="form-control" type="email" name="email">--}}
                    {{--</div>--}}
                    {{--<button type="submit" class="btn btn-success">{{ trans('cachet.subscriber.button') }}</button>--}}
                    {{--</form>--}}


                </div>
            </div>
        </div>
    </div>


@stop
