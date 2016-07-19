@extends($master)
@section('title', trans('ticketit::lang.create-ticket-title'))

@section('content')
@include('ticketit::shared.header')
    <div class="well bs-component">
        {!! CollectiveForm::open([
                        'route'=>$setting->grab('main_route').'.store',
                        'method' => 'POST',
                        'class' => 'form-horizontal'
                        ]) !!}
            <legend>{!! trans('ticketit::lang.create-new-ticket') !!}</legend>
            <div class="form-group">
                {!! CollectiveForm::label('subject', trans('ticketit::lang.subject') . trans('ticketit::lang.colon'), ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! CollectiveForm::text('subject', null, ['class' => 'form-control']) !!}
                    <span class="help-block">{!! trans('ticketit::lang.create-ticket-brief-issue') !!}</span>
                </div>
            </div>
            <div class="form-group">
                {!! CollectiveForm::label('content', trans('ticketit::lang.description') . trans('ticketit::lang.colon'), ['class' => 'col-lg-2 control-label']) !!}
                <div class="col-lg-10">
                    {!! CollectiveForm::textarea('content', null, ['class' => 'form-control summernote-editor', 'rows' => '10']) !!}
                    <span class="help-block">{!! trans('ticketit::lang.create-ticket-describe-issue') !!}</span>
                </div>
            </div>
            <div class="form-inline row">
                <div class="form-group col-lg-4">
                    {!! CollectiveForm::label('priority', trans('ticketit::lang.priority') . trans('ticketit::lang.colon'), ['class' => 'col-lg-6 control-label']) !!}
                    <div class="col-lg-6">
                        {!! CollectiveForm::select('priority_id', $priorities, null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    {!! CollectiveForm::label('category', trans('ticketit::lang.category') . trans('ticketit::lang.colon'), ['class' => 'col-lg-6 control-label']) !!}
                    <div class="col-lg-6">

                        {!! CollectiveForm::select('category_id', $categories, null, ['class' => 'form-control','id'=>'category_id']) !!}
                    </div>
                </div>
                <div class="form-group col-lg-4">
                    {!! CollectiveForm::label('agent_id', trans('ticketit::lang.agent') . trans('ticketit::lang.colon'), [
                        'class' => 'col-lg-6 control-label'
                    ]) !!}
                    <div class="col-lg-4">
                        {!! CollectiveForm::select(
                            'agent_id',
                            $agent_lists,
                            null,
                            ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    {!! link_to_route($setting->grab('main_route').'.index', trans('ticketit::lang.btn-back'), null, ['class' => 'btn btn-default']) !!}
                    {!! CollectiveForm::submit(trans('ticketit::lang.btn-submit'), ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
        {!! CollectiveForm::close() !!}
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {

        $('#category_id').on('change',function(){
            var loadpage = "{!! route($setting->grab('main_route').'agentselectlistcreate') !!}/" + $(this).val();
            $('#agent_id').load(loadpage);

        });
    });
</script>
    @include('ticketit::tickets.partials.summernote')
@endpush