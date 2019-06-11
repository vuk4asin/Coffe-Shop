@if ($errors->any())
    <div id='error' class="alert alert-danger">
        <a class=" btn btn-sm float-right" style="cursor:pointer" id="close">X</a>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@push('after-scripts')
<script>
    var btn = document.getElementById('close');
    if(btn)
    {
        btn.addEventListener('click', hideDiv);
    }

    function hideDiv() {
        var err = document.getElementById('error');
        err.style.display="none";
    }

</script>
@endpush