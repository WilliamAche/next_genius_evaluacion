    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-center"><h4>Cambiar contraseña</h4></div>
   
                <div class="card-body">
                    <form method="POST" action="{{ route('change.password') }}">
                        @csrf 
   
                         @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña actual</label>
  
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Nueva contraseña</label>
  
                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Confirmar Nueva Contraseña</label>
    
                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                            </div>
                        </div>
   
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-outline-primary">
                                Actualiza contraseña
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>