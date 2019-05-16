

@foreach ($ngo as $item)
    <p>{{$item->name}}</p>
@endforeach

<script type="text/javascript">
    var ngo = {!! json_encode($ngo->toArray()) !!};
    console.log(ngo);
</script>

