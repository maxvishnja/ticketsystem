@extends($master)
@section('page', trans('ticketit::admin.administrator-create-title'))

@section('content')
    @include('ticketit::shared.header')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>{{ trans('ticketit::admin.administrator-create-title') }}</h2>
        </div>
        @if ($users->isEmpty())
            <h3 class="text-center">{{ trans('ticketit::admin.administrator-create-no-users') }}</h3>
        @else
            {!! CollectiveForm::open(['route'=> $setting->grab('admin_route').'.administrator.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            <div class="panel-body">
                {{ trans('ticketit::admin.administrator-create-select-user') }}
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
            <table class="table table-hover">
                <tfoot>
                    <tr>
                        <td class="text-center">
                            {!! link_to_route($setting->grab('admin_route').'.administrator.index', trans('ticketit::admin.btn-back'), null, ['class' => 'btn btn-default']) !!}
                            <br/>
                            <div class="col-md-offset-5  col-sm-offset-5 col-md-2 col-sm-2">
                            {!! CollectiveForm::submit(trans('ticketit::admin.btn-submit'), ['class' => 'btn btn-primary']) !!}
                            </div>
                        </td>
                    </tr>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            <div class="checkbox">
                                <label style="padding-left: 20px">
                                    <input name="administrators[]" type="checkbox" value="{{ $user->id }}" {!! $user->ticketit_admin ? "checked" : "" !!}> {{ $user->last_name." ".$user->first_name }}
                                </label>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
                </div>
            {!! CollectiveForm::close() !!}
        @endif
    </div>
    {!! $users->render() !!}
@stop
