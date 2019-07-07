@if ($errors->any())
    <div id='error' class="alert alert-danger">
        <a onclick="hideError()" class=" btn btn-sm float-right" style="cursor:pointer" id="close">X</a>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@push('after-scripts')
<script type="text/javascript">
   function hideError()
   {
       document.getElementById('error').style.display = "none";
   }
</script>
@endpush