<!-- Nav -->
<nav class="navbar">
    <div class="navbar-brandmmenu">
        <div class="brandmenu-logo"><a href="{{ route('home') }}"><img src="{{ asset('dist/images/DYF_Logo_large.svg') }}" alt="" class="img-fluid"></a></div>

        <div class="right-nav">

            <div class="select-ciudad">
                <form action="">
                    <select name="ciudad" id="selector-ciudad">
                        <option value="">Ciudad</option>
                        <option id="cartagena" value="cartagena">Cartagena</option>
                        <option id="turbaco" value="turbaco">Turbaco</option>
                        <option id="mompox" value="mompox">Mompox</option>
                        <option id="palenque" value="palenque">Palenque</option>
                        <option id="sanjacinto" value="sanjacinto">San Jacinto</option>
                    </select>
                </form>
                <span class="arrow"><span class="fa fa-chevron-down"></span></span>
            </div>

            <div class="carrito-nav">
                @if(isset($count) && $count>0)
                <a data-toggle="tooltip" title="Tienes {{ $count }} elementos en el carrito" class="carrito-menu" href="{{ route('shopping.cart') }}">
                    <img src="{{ asset('dist/images/carrito-item.svg') }}" alt="" class="img-fluid">
                </a>
                @endif

                @if(isset($count) && $count==0)
                <a data-toggle="tooltip" title="No tienes nada en el carrito todavía" class="carrito-menu" href="{{ route('shopping.cart') }}">
                    <img src="{{ asset('dist/images/carrito.svg') }}" alt="" class="img-fluid">
                </a>
                @endif
            </div>

            <div class="brandmenu-menu">

                <button id="el-button-menu-desktop" class="btn btn-default avbar-toggle collapsed button-menu-desktop">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- <img id="menu-bar" class="img-fluid" src="{{ asset('dist/images/menu-bar.svg') }}?v=3" alt=""> -->
            </div>
        </div>

    </div>
</nav>

<div class="fixed-menu-sidebar">
    <div class="fixed-menu-sidebar-block box">
        <h5>Nosotros.</h5>
        <ul class="list-unstyled">

            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('acerca-dyf') }}">Deal your Fun</a></li>

            @auth
                @role('superadmin')
                    <li><a href="{{ route('admin') }}">Dashboard</a></li>
                @endrole
                @role('finanzas')
                    <li><a href="{{ route('finanzas') }}">Dashboard</a></li>
                @endrole
                @role('moderador')
                    <li><a href="{{ route('moderador') }}">Dashboard</a></li>
                @endrole
                @role('operador')
                    <li><a href="{{ route('operador') }}">Dashboard</a></li>
                @endrole
                @role('cliente')
                    <li><a href="{{ route('cliente') }}">Dashboard</a></li>
                @endrole
                    <li><a href="{{ route('salir') }}">Cerrar sesión</a></li>
            @else
                    <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
            @endauth

        </ul>


        <hr>
        <h5>Explora</h5>
        <div class="select-ciudad">
            <form action="">
                <select name="ciudad" id="selector-ciudad-nav">
                   <option value="">Ciudad</option>
                   <option id="cartagena" value="cartagena">Cartagena</option>
                   <option id="turbaco" value="turbaco">Turbaco</option>
                   <option id="mompox" value="mompox">Mompox</option>
                   <option id="palenque" value="palenque">Palenque</option>
                   <option id="sanjacinto" value="sanjacinto">San Jacinto</option>
               </select>
           </form>
           <span class="arrow"><span class="fa fa-chevron-down"></span></span>
       </div>

   </div>

   <div class="fixed-menu-sidebar-block box">
    <div class="box">
        <h5>Ayuda</h5>
        <ul class="list-unstyled">
            <li><a href="{{ route('preguntas-frecuentes') }}">Preguntas frecuentes</a></li>
            <li><a href="{{ route('politicas-privacidad') }}">Políticas de privacidad</a></li>
            <li><a href="{{ route('terminos-condiciones') }}">Términos y condiciones</a></li>
            <li><a href="{{ route('contacto') }}">Contacto</a></li>
        </ul>
    </div>
    <div class="box">
        <ul class="list-unstyled social-media-sidebar">
            <li>
                <a target="_blank" href="https://www.facebook.com/Dealyourfun/"><span class="fa fa-facebook"></span></a>
            </li>
            <li>
                <a target="_blank" href="https://www.instagram.com/dealyourfun/"><span class="fa fa-instagram"></span></a>
            </li>
        </ul>
    </div>
</div>
</div>
