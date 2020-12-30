<!-- Modal -->
<div class="modal fade" id="modalWeb" tabindex="-1" role="dialog" aria-labelledby="modal-web" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content p-3">
            <div class="modal-header border-0 pb-0">
                {{-- <img class="pr-3" src="{{ asset('img/icons/icon-pregunta.svg') }}" alt="icono de cuestionario" height="40"> --}}
                <h5 class="modal-title text-primary" id="modal-web">Cómo podemos ayudarte?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form-email></form-email>
            {{-- <div class="modal-body pt-0">
                <span class="text-modal text-black-50 font-italic d-block">Nos encantaria ayudar a lograr tus Objetivos.</span>
                <span class="text-modal text-black-50 font-italic">Completa el formulario y te responderemos en la brevedad posible</span>
                <form method="POST" action="{{ route('enviar-consulta') }}" class="mt-3" novalidate>
                    @csrf

                    <div class="form-group">
                        <label for="Nombre">Nombre o Compañia</label>
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre">
                        @error('nombre')
                        <span class="text-danger">
                            <strong>Error: {{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                        @error('email')
                        <span class="text-danger">
                            <strong>Error: {{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="telefono">Celular</label>
                        <input type="text" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono">
                        @error('telefono')
                        <span class="text-danger">
                            <strong>Error: {{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="detalle">Detalle de su consulta</label>
                        <textarea class="form-control @error('mensaje') is-invalid @enderror" name="mensaje" rows="3" id="mensaje">{{ old('mensaje') }}</textarea>
                        @error('mensaje')
                            <span class="text-danger">
                                <strong>Error: {{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group pt-3">
                        <input type="submit" class="btn btn-primary btn-block" value="Enviar Consulta">
                    </div>

                </form>
            </div> --}}
        </div>
    </div>
</div>
