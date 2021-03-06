@if(!$comments->isEmpty())
    @foreach($comments as $comment)
        <div class="panel {!! $comment->user->tickets_role ? "panel-info" : "panel-default" !!}">
            <div class="panel-heading">
                <h5 class="panel-title">
                    {!! $comment->user->last_name.' '.$comment->user->first_name !!}
                    <span class="pull-right small" > {!! $comment->updated_at->diffForHumans() !!} </span>
                </h5>
            </div>
            <div class="panel-body">
                <div class="content">
                    <p> {!! $comment->html !!} </p>
                </div>
            </div>
        </div>
    @endforeach
@endif