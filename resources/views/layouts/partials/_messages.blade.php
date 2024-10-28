@if(Session::has('exito'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>¡Éxito!</strong> {{ Session::get('exito') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(Session::has('info'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
    {{ Session::get('info') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(Session::has('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>¡Proceso Correcto!</strong> {{ Session::get('warning') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>¡Error!</strong> {{ Session::get('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(request('preference_id') != NULL && request('payment_id') == NULL)
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>¡Error!</strong> ¡Lo sentimos! El pago a través de MercadoPago no se pudo realizar. Inténtalo nuevamente o usa otro método de pago. Contacta con nosotros si tienes alguna pregunta.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (count($errors) > 0)
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong><span class="alert-icon-wrap"><i class="zmdi zmdi-bug"></i></span> Error </strong>
    
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif