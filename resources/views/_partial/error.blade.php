@if(session()->has('Error'))
<div class="alert alert-danger" role="alert">
  <strong>{{session()->get('Error')}}</strong>
</div>
@endif