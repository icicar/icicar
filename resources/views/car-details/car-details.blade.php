@extends('layouts.template')

@section('content')
@if($vehiculo!=null)
    <section class="car-details page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3>{{ $vehiculo->marca }} {{ ucfirst($vehiculo->modelo) }} </h3>
                    <p>{{ ucfirst(strtolower($vehiculo->version)) }}</p>
                </div>
                <div class="col-md-3">
                    <div class="car-price text-md-right">
                        <strong>{{ round($vehiculo->precio) }} € </strong>
                        <span>IVA incluido</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="details-nav">
                        <ul>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fas fa-question-circle"></i>Solicita más info.
                                </a>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel">Solicita más info</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="rmi_notice" class="form-notice" style="display:none;"></div>
                                                <p class="sub-title">Por favor, rellena el siguiente formulario y le enviaremos más información. </p>
                                                <form class="gray-form reset_css" id="frm_solicita_info" method="POST" action="{{ route('solicita_info',$vehiculo->idvehiculoopera) }}">
                                                    @csrf
                                                    <div class="alrt">
                                                        <span class="alrt"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nombre*</label>
                                                        <input type="text" class="form-control" name="nombre"
                                                            id="nombre" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email*</label>
                                                        <input type="text" class="form-control" name="email"
                                                            id="email" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Teléfono*</label>
                                                        <input type="text" class="form-control" id="telefono"
                                                            name="telefono">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Mensaje</label>
                                                        <textarea rows="5" class="form-control" name="mensaje"
                                                            id="mensaje"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div id="recaptcha1"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <a class="button red" id="request_more_info_submit">Solicitar <i
                                                                class="fa fa-spinner fa-spin fa-fw btn-loader"
                                                                style="display: none;"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo" href="#"
                                    class="css_btn"><i class="fas fa-tachometer-alt"></i>Solicita una prueba</a>
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel">Solicita una prueba</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="std_notice" class="form-notice" style="display:none;"></div>
                                                <p class="sub-title">Rellena el siguiente formulario y solicita una prueba de este vehículo. Nuestros comerciales contactarán tan pronto como les sea posible para confirmar la cita. </p>
                                                <form class="gray-form reset_css" id="frm_solicita_prueba"  method="POST" action="{{ route('solicita_prueba',$vehiculo->idvehiculoopera) }}">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Nombre*</label>
                                                        <input type="text" class="form-control" id="nombre"
                                                            name="nombre" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email*</label>
                                                        <input type="text" class="form-control" id="email"
                                                            name="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Telefono*</label>
                                                        <input type="text" class="form-control" id="telefono"
                                                            name="telefono">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Dia de preferencia*</label>
                                                        <input type="text" class="form-control" id="diaPreferencia" name="diaPreferencia">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Hora de preferencia*</label>
                                                        <input type="text" class="form-control" id="horaPreferencia"
                                                            name="horaPreferencia">
                                                    </div>
                                                    <div class="form-group">
                                                        <div id="recaptcha2"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <a class="button red" id="schedule_test_drive_submit">Solicitar Prueba
                                                            <i class="fa fa-spinner fa-spin fa-fw btn-loader"
                                                                style="display: none;"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo" href="#"
                                    class="css_btn"><i class="fas fa-tag"></i>Haz una oferta</a>
                                <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel">Haz una oferta</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="mao_notice" class="form-notice" style="display:none;"></div>
                                                <form class="gray-form reset_css" id="frm_hacer_oferta"  method="POST" action="{{ route('hacer_oferta',$vehiculo->idvehiculoopera) }}">
                                                    <div class="form-group">
                                                        <label>Name*</label>
                                                        <input type="text" id="nombre" name="nombre"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email*</label>
                                                        <input type="text" id="email" name="email"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Telefono*</label>
                                                        <input type="text" id="telefono" name="telefono"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Precio oferta*</label>
                                                        <input type="text" id="precioOferta" name="precioOferta"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>¿Requiere Financiación?*</label>
                                                        <div class="selected-box">
                                                            <select class="selectpicker" id="requiere_financiacion"
                                                                name="requiere_financiacion">
                                                                <option value="Yes">Si </option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Comentarios / Condiciones*</label>
                                                        <textarea class="form-control input-message" rows="4"
                                                            id="comentarios_condiciones" name="comentarios_condiciones"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div id="recaptcha3"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <a class="button red" id="make_an_offer_submit">Enviar Oferta <i
                                                                class="fa fa-spinner fa-spin fa-fw btn-loader"
                                                                style="display: none;"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a data-toggle="modal" data-target="#exampleModal4" data-whatever="@mdo" href="#"
                                    class="css_btn"><i class="fas fa-envelope"></i>Envía a un amigo</a>
                                <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel">Email to a Friend</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="etf_notice" class="form-notice" style="display:none;"></div>
                                                <form class="gray-form reset_css" id="frm_enviar_amigo"  method="POST" action="{{ route('enviar_amigo',$vehiculo->idvehiculoopera) }}">
                                                    <div>
                                                        <span style="color: red;" class="sp"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nombre*</label>
                                                        <input name="etf_name" type="text" id="nombre"
                                                            class="nombre-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email*</label>
                                                        <input type="text" class="form-control" id="email"
                                                            name="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email de Amigo*</label>
                                                        <input type="Email" class="form-control" id="amigo_email"
                                                            name="amigo_email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Mensaje para amigo*</label>
                                                        <textarea class="form-control input-message" id="mensaje_amigo"
                                                            name="mensaje_amigo" rows="4"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div id="recaptcha4"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <a class="button red" id="email_to_friend_submit">Enviar Mensaje <i
                                                                class="fa fa-spinner fa-spin fa-fw btn-loader"
                                                                style="display: none;"></i></a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li><a href="javascript:window.print()"><i class="fas fa-print"></i>Imprimir página</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="slider-slick">
                        <div class="slider slider-for detail-big-car-gallery">

                            @if(isset($vehiculo->fotos))
                                @foreach($vehiculo->fotos as $foto)
                                    <img class="img-fluid" src="{{ $foto->foto }}" alt="">
                                @endforeach
                            @endif
                        </div>
                        <div class="slider slider-nav">
                            @if(isset($vehiculo->fotos))
                                @foreach($vehiculo->fotos as $foto)
                                    <img class="img-fluid" src="{{ $foto->foto }}" alt="">
                                @endforeach
                            @endif
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="car-details-sidebar">
                        <div class="details-block details-weight">
                            <h5>Ficha de Vehículo</h5>
                            <ul>
                                <li> <span>Marca</span> <strong class="text-right">{{ $vehiculo->marca }}</strong></li>
                                <li> <span>Modelo</span> <strong class="text-right">{{ ucfirst($vehiculo->modelo) }}</strong></li>
                                <li> <span>Versión</span> <strong class="text-right">{{ ucfirst(strtolower($vehiculo->version)) }}</strong></li>
                                <li> <span>Fecha Matriculación </span> <strong class="text-right">{{ substr($vehiculo->fechamatricula, -4) }}</strong></li>
                                <li> <span>Kilometros</span> <strong class="text-right">{{ number_format($vehiculo->kms, 0, '', '.') }} Km</strong></li>
                                <li> <span>Combustible</span> <strong class="text-right">{{ $vehiculo->carburante }}</strong></li>
                                <li> <span>Cambio</span> <strong class="text-right">{{ $vehiculo->tipocambio }}</strong></li>
                                <li> <span>Potencia</span> <strong class="text-right">{{ $vehiculo->potencia }}</strong></li>
                                <li> <span>Cilindrada</span> <strong class="text-right">{{ $vehiculo->cilindrada }}</strong></li>
                                <li> <span>Carrocería</span> <strong class="text-right">{{ $vehiculo->carroceria }}</strong></li>
                                <li> <span>Color</span> <strong class="text-right">{{ $vehiculo->color }}</strong></li>
                                <li> <span>Etiqueta</span> <strong class="text-right">{{ $vehiculo->etiqueta }}</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="details-location details-weight">
                        <h5>Ubicación</h5>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.3321790881787!2d-3.4653041846669943!3d40.44578427936178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd423747c78c53df%3A0xd0f37a7722509ba!2sICICAR%20AUTOMOCION%20S.L.!5e0!3m2!1ses!2ses!4v1642062850253!5m2!1ses!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="details-form contact-2 details-weight">
                        <form class="gray-form" action="post" id="send_enquiry_form">
                            <h5>ME INTERESA</h5>
                            <div id="send_enquiry_notice" class="form-notice" style="display:none;"></div>
                            <input type="hidden" name="action" value="send_enquiry" />
                            <div class="form-group">
                                <label>Nombre*</label>
                                <input type="text" class="form-control" placeholder="Nombre" name="send_enquiry_name"
                                    id="send_enquiry_name">
                            </div>
                            <div class="form-group">
                                <label>Email*</label>
                                <input type="text" class="form-control" placeholder="Email" name="send_enquiry_email"
                                    id="send_enquiry_email">
                            </div>
                            <div class="form-group">
                                <label>Telefono*</label>
                                <input type="text" class="form-control" placeholder="Telefono" name="send_enquiry_telefono"
                                    id="send_enquiry_telefono">
                            </div>
                            <div class="form-group">
                                <label>Mensaje* </label>
                                <textarea class="form-control" rows="4" placeholder="Mensaje"
                                    name="send_enquiry_message" id="send_enquiry_message"></textarea>
                            </div>
                            <div class="form-group">
                                <div id="recaptcha6"
                                    style="transform:scale(0.85);-webkit-transform:scale(0.85);transform-origin:0 0;-webkit-transform-origin:0 0;">
                                </div>
                            </div>
                            <div class="form-group">
                                <a class="button red" id="send_enquiry_submit" href="javascript:void(0)">Enviar <i
                                        class="fa fa-spinner fa-spin fa-fw btn-loader" style="display: none;"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--
            <div class="row">
                <div class="col-lg-9 col-md-9  col-sm-9">
                    <div id="tabs">
                        <ul class="tabs">
                            <li data-tabs="tab1" class="active"> <span aria-hidden="true" class="icon-diamond"></span>
                                General Information</li>
                            <li data-tabs="tab2"><span aria-hidden="true" class="icon-list"></span>Features & Options</li>
                            <li data-tabs="tab3"> <span aria-hidden="true" class="icon-equalizer"></span> Vehicle Overview
                            </li>
                        </ul>
                        <div id="tab1" class="tabcontent">
                            <h6>consectetur adipisicing elit</h6>
                            <p>Temporibus possimus quasi beatae, consectetur adipisicing elit. Obcaecati unde molestias sunt
                                officiis aliquid sapiente, numquam, porro perspiciatis neque voluptatem sint hic quam
                                eveniet ad adipisci laudantium corporis ipsam ea!
                                <br /><br />
                                Consectetur adipisicing elit. Dicta, amet quia ad debitis fugiat voluptatem neque dolores
                                tempora iste saepe cupiditate, molestiae iure voluptatibus est beatae? Culpa, illo a Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. Commodi, doloribus, earum modi
                                consectetur molestias asperiores sequi ipsam neque error itaque veniam culpa eligendi
                                similique ducimus nulla, blanditiis, perspiciatis atque saepe! veritatis.

                                <br /><br />
                                Adipisicing consectetur elit. Dicta, amet quia ad debitis fugiat voluptatem neque dolores
                                tempora iste saepe cupiditate, molestiae iure voluptatibus est beatae? Culpa, illo a Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. Commodi, doloribus, earum modi
                                consectetur molestias asperiores.
                                Adipisicing consectetur elit. Dicta, amet quia ad debitis fugiat voluptatem neque dolores
                                tempora iste saepe cupiditate, molestiae iure voluptatibus est beatae? Culpa, illo a Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. Commodi, doloribus, earum modi
                                consectetur molestias asperiores.

                                <br /><br />
                                Voluptatem adipisicing elit. Dicta, amet quia ad debitis fugiat neque dolores tempora iste
                                saepe cupiditate, molestiae iure voluptatibus est beatae? Culpa, illo a Lorem ipsum dolor
                                sit amet, consectetur adipisicing elit. Commodi, Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Laudantium nisi eaque maxime totam, iusto accusantium esse placeat rem at
                                temporibus minus architecto ipsum eveniet. Delectus cum sunt, ea cumque quas! doloribus,
                                earum modi consectetur molestias asperiores sequi ipsam neque error itaque veniam culpa
                                eligendi similique ducimus nulla, blanditiis, perspiciatis atque saepe! veritatis.
                            </p>
                        </div>
                        <div id="tab2" class="tabcontent">
                            <h6>consectetur adipisicing elit</h6>
                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <th scope="row"> Air conditioning</th>
                                        <td>Mark</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Alloy Wheels</th>
                                        <td>Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Anti-Lock Brakes (ABS)</th>
                                        <td>Larry</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Anti-Theft</th>
                                        <td>Larry</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Anti-Starter</th>
                                        <td>Larry</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alloy Wheels</th>
                                        <td>Larry</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="tab3" class="tabcontent">
                            <h6>consectetur adipisicing elit</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati unde molestias sunt
                                officiis aliquid sapiente, numquam, porro perspiciatis neque voluptatem sint hic quam
                                eveniet ad adipisci laudantium corporis ipsam ea!
                                <br /><br />
                                Adipisicing consectetur elit. Dicta, amet quia ad debitis fugiat voluptatem neque dolores
                                tempora iste saepe cupiditate, molestiae iure voluptatibus est beatae? Culpa, illo a Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. Commodi, doloribus, earum modi
                                consectetur molestias asperiores.

                                <br /><br />
                                Voluptatem adipisicing elit. Dicta, amet quia ad debitis fugiat neque dolores tempora iste
                                saepe cupiditate, molestiae iure voluptatibus est beatae? Culpa, illo a Lorem ipsum dolor
                                sit amet, consectetur adipisicing elit. Commodi, Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Laudantium nisi eaque maxime totam, iusto accusantium esse placeat rem at
                                temporibus minus architecto ipsum eveniet. Delectus cum sunt, ea cumque quas! doloribus,
                                earum modi consectetur molestias asperiores sequi ipsam neque error itaque veniam culpa
                                eligendi similique ducimus nulla, blanditiis, perspiciatis atque saepe! veritatis.
                            </p>
                        </div>
                    </div>
                    <div class="extra-feature">
                        <h6> extra feature</h6>
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="list-style-1">
                                    <li><i class="fas fa-check"></i> Security System</li>
                                    <li><i class="fas fa-check"></i> Air conditioning</li>
                                    <li><i class="fas fa-check"></i> Alloy Wheels</li>
                                    <li><i class="fas fa-check"></i> Anti-Lock Brakes (ABS)</li>
                                    <li><i class="fas fa-check"></i> Anti-Theft</li>
                                    <li><i class="fas fa-check"></i> Anti-Starter </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-style-1">
                                    <li><i class="fas fa-check"></i> Security System</li>
                                    <li><i class="fas fa-check"></i> Air conditioning</li>
                                    <li><i class="fas fa-check"></i> Alloy Wheels</li>
                                    <li><i class="fas fa-check"></i> Anti-Lock Brakes (ABS)</li>
                                    <li><i class="fas fa-check"></i> Anti-Theft</li>
                                    <li><i class="fas fa-check"></i> Anti-Starter </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-style-1">
                                    <li><i class="fas fa-check"></i> Security System</li>
                                    <li><i class="fas fa-check"></i> Air conditioning</li>
                                    <li><i class="fas fa-check"></i> Alloy Wheels</li>
                                    <li><i class="fas fa-check"></i> Anti-Lock Brakes (ABS)</li>
                                    <li><i class="fas fa-check"></i> Anti-Theft</li>
                                    <li><i class="fas fa-check"></i> Anti-Starter </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-details-sidebar">
                        <div class="details-form contact-2 details-weight">
                            <form class="gray-form" action="post" id="send_enquiry_form">
                                <h5>SEND ENQUIRY</h5>
                                <div id="send_enquiry_notice" class="form-notice" style="display:none;"></div>
                                <input type="hidden" name="action" value="send_enquiry" />
                                <div class="form-group">
                                    <label>Name*</label>
                                    <input type="text" class="form-control" placeholder="Name" name="send_enquiry_name"
                                        id="send_enquiry_name">
                                </div>
                                <div class="form-group">
                                    <label>Email address*</label>
                                    <input type="text" class="form-control" placeholder="Email" name="send_enquiry_email"
                                        id="send_enquiry_email">
                                </div>
                                <div class="form-group">
                                    <label>Meassge* </label>
                                    <textarea class="form-control" rows="4" placeholder="Message"
                                        name="send_enquiry_message" id="send_enquiry_message"></textarea>
                                </div>
                                <div class="form-group">
                                    <div id="recaptcha6"
                                        style="transform:scale(0.85);-webkit-transform:scale(0.85);transform-origin:0 0;-webkit-transform-origin:0 0;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a class="button red" id="send_enquiry_submit" href="javascript:void(0)">Submit <i
                                            class="fa fa-spinner fa-spin fa-fw btn-loader" style="display: none;"></i></a>
                                </div>
                            </form>
                        </div>
                        <div class="details-location details-weight">
                            <h5>Location</h5>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.017231421863!2d-79.43780268425046!3d36.09306798010035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88532bae09664ccb%3A0xaa6b8f98d3fb8135!2s220+E+Front+St%2C+Burlington%2C+NC+27215%2C+USA!5e0!3m2!1sen!2sin!4v1475045272926"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature-car">
                <h6>Recently Vehicle</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel" data-nav-arrow="true" data-nav-dots="true" data-items="4"
                            data-md-items="4" data-sm-items="2" data-xs-items="2" data-space="15">
                            <div class="item">
                                <div class="car-item gray-bg text-center">
                                    <div class="car-image">
                                        <img class="img-fluid" src="images/car/01.jpg" alt="">
                                        <div class="car-overlay-banner">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fa fa-registered"></i> 2016</li>
                                            <li><i class="fa fa-cog"></i> Manual </li>
                                            <li><i class="fa fa-dashboard"></i> 6,000 mi</li>
                                        </ul>
                                    </div>
                                    <div class="car-content">
                                        <div class="star">
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star-o orange-color"></i>
                                        </div>
                                        <a href="#"> Acura Rsx</a>
                                        <div class="separator"></div>
                                        <div class="price">
                                            <span class="old-price">$35,568</span>
                                            <span class="new-price">$32,698 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="car-item gray-bg text-center">
                                    <div class="car-image">
                                        <img class="img-fluid" src="images/car/02.jpg" alt="">
                                        <div class="car-overlay-banner">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fa fa-registered"></i> 2016</li>
                                            <li><i class="fa fa-cog"></i> Manual </li>
                                            <li><i class="fa fa-dashboard"></i> 6,000 mi</li>
                                        </ul>
                                    </div>
                                    <div class="car-content">
                                        <div class="star">
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star-o orange-color"></i>
                                        </div>
                                        <a href="#">Lexus GS 450h</a>
                                        <div class="separator"></div>
                                        <div class="price">
                                            <span class="old-price">$35,568</span>
                                            <span class="new-price">$32,698 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="car-item gray-bg text-center">
                                    <div class="car-image">
                                        <img class="img-fluid" src="images/car/03.jpg" alt="">
                                        <div class="car-overlay-banner">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fa fa-registered"></i> 2016</li>
                                            <li><i class="fa fa-cog"></i> Manual </li>
                                            <li><i class="fa fa-dashboard"></i> 6,000 mi</li>
                                        </ul>
                                    </div>
                                    <div class="car-content">
                                        <div class="star">
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star-o orange-color"></i>
                                        </div>
                                        <a href="#">GTA 5 Lowriders DLC</a>
                                        <div class="separator"></div>
                                        <div class="price">
                                            <span class="old-price">$35,568</span>
                                            <span class="new-price">$32,698 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="car-item gray-bg text-center">
                                    <div class="car-image">
                                        <img class="img-fluid" src="images/car/04.jpg" alt="">
                                        <div class="car-overlay-banner">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fa fa-registered"></i> 2016</li>
                                            <li><i class="fa fa-cog"></i> Manual </li>
                                            <li><i class="fa fa-dashboard"></i> 6,000 mi</li>
                                        </ul>
                                    </div>
                                    <div class="car-content">
                                        <div class="star">
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star-o orange-color"></i>
                                        </div>
                                        <a href="#">Toyota avalon hybrid </a>
                                        <div class="separator"></div>
                                        <div class="price">
                                            <span class="old-price">$35,568</span>
                                            <span class="new-price">$32,698 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="car-item gray-bg text-center">
                                    <div class="car-image">
                                        <img class="img-fluid" src="images/car/05.jpg" alt="">
                                        <div class="car-overlay-banner">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-link"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li><i class="fa fa-registered"></i> 2016</li>
                                            <li><i class="fa fa-cog"></i> Manual </li>
                                            <li><i class="fa fa-dashboard"></i> 6,000 mi</li>
                                        </ul>
                                    </div>
                                    <div class="car-content">
                                        <div class="star">
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star orange-color"></i>
                                            <i class="fa fa-star-o orange-color"></i>
                                        </div>
                                        <a href="#">Hyundai santa fe sport </a>
                                        <div class="separator"></div>
                                        <div class="price">
                                            <span class="old-price">$35,568</span>
                                            <span class="new-price">$32,698 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
        </div>
    </section>
@else
    <section class="car-details page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>Vehículo no encontrado</h2>
                </div>
            </div>
        </div>
    </section>
@endif

@endsection
