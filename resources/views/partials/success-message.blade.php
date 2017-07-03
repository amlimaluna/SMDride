@if (session()->has('success'))
    <div class="alert alert-success alert-dismissable" style="margin-left:0">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        @lang(session()->get('success'))
    </div>
@endif