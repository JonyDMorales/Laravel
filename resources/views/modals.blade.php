<div class="modal fade" id="modalFail" tabindex="-1" role="dialog" aria-labelledby="tituloFail">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="text-right close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-md-offset-1 text-center text-danger">
                        <i class="fa fa-ban fa-4x fa-fw"></i>
                        <h3>
                            @foreach($errors->all() as $error)
                                {{ $error }}<br/>
                            @endforeach
                            <small id="errmess"></small>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="tituloOk">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="text-right close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-md-offset-1 text-center text-success">
                        <i class="fa fa-check fa-4x fa-fw"></i>
                        <h3>
                            Denuncia enviada.
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('bottom_java')
    <script language="javascript" type="text/javascript">
        $(document).ready(function() {
            @if (count($errors) > 0)
            $("#modalFail").modal('show');
            @endif
        });
    </script>
@endsection