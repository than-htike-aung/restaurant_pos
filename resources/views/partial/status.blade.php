@if(Session()->has('status'))
<div class="alert alert-success">
    <button class="close float-end" type="button" data-dismiss="alert">x</button>
    {{Session()->get('status')}}
</div>
@endif