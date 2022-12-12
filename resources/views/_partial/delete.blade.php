@if(session()->has('delete'))
<div class="alert alert-danger" role="alert">
  <strong>{{session()->get('delete')}}</strong>
</div>
@endif