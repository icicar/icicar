{{-- {{dd($selectedVehiculo)}} --}}
@if($selectedVehiculo[1]->totalelements > 0)
    <section class="car-details page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h3>Hyundai Santa Fe </h3>
                    <p> Temporibus possimus quasi beatae, Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        aspernatur nemo maiores.</p>
                </div>
                <div class="col-md-3">
                    <div class="car-price text-md-right">
                        <strong>69.995 €</strong>
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
                                                <h4 class="modal-title" id="exampleModalLabel">Request More Info</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="rmi_notice" class="form-notice" style="display:none;"></div>
                                                <p class="sub-title">Please fill out the information below and one of our
                                                    representatives will contact you regarding your more information
                                                    request. </p>
                                                <form class="gray-form reset_css" id="rmi_form" action="post">
                                                    <input type="hidden" name="action" value="request_more_info" />
                                                    <div class="alrt">
                                                        <span class="alrt"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Name*</label>
                                                        <input type="text" class="form-control" name="rmi_name"
                                                            id="rmi_name" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email address*</label>
                                                        <input type="text" class="form-control" name="rmi_email"
                                                            id="rmi_email" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone*</label>
                                                        <input type="text" class="form-control" id="rmi_phone"
                                                            name="rmi_phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Message</label>
                                                        <textarea class="form-control" name="rmi_message"
                                                            id="rmi_message"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Preferred Contact*</label>
                                                        <div class="radio">
                                                            <label><input type="radio" name="rmi_radio" value="Email"
                                                                    checked="checked" />Email</label>
                                                        </div>
                                                        <div class="radio">
                                                            <label><input type="radio" name="rmi_radio"
                                                                    value="Phone" />Phone</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div id="recaptcha1"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <a class="button red" id="request_more_info_submit">Submit <i
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
                                                <h4 class="modal-title" id="exampleModalLabel">Schedule Test Drive</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="std_notice" class="form-notice" style="display:none;"></div>
                                                <p class="sub-title">Complete this form to request a test drive of your
                                                    favorite car. Our Sales Advisor will contact you promptly to confirm
                                                    your appointment. </p>
                                                <form class="gray-form reset_css" id="std_form" action="post">
                                                    <input type="hidden" name="action" value="schedule_test_drive" />
                                                    <div class="form-group">
                                                        <label>Name*</label>
                                                        <input type="text" class="form-control" id="std_firstname"
                                                            name="std_firstname" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email address*</label>
                                                        <input type="text" class="form-control" id="std_email"
                                                            name="std_email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone*</label>
                                                        <input type="text" class="form-control" id="std_phone"
                                                            name="std_phone">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Preferred Day*</label>
                                                        <input type="text" class="form-control" id="std_day" name="std_day">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Preferred Time*</label>
                                                        <input type="text" class="form-control" id="std_time"
                                                            name="std_time">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Preferred Contact*</label>
                                                        <div class="radio">
                                                            <label><input type="radio" id="std_optradio" name="std_optradio"
                                                                    value="email" checked>Email</label>
                                                        </div>
                                                        <div class="radio">
                                                            <label><input type="radio" id="std_optradio" name="std_optradio"
                                                                    value="phone">Phone</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div id="recaptcha2"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <a class="button red" id="schedule_test_drive_submit">Schedule Now
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
                                                <h4 class="modal-title" id="exampleModalLabel">Make an Offer</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="mao_notice" class="form-notice" style="display:none;"></div>
                                                <form class="gray-form reset_css" action="post" id="mao_form">
                                                    <input type="hidden" name="action" value="make_an_offer" />
                                                    <div class="form-group">
                                                        <label>Name*</label>
                                                        <input type="text" id="mao_name" name="mao_name"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email address*</label>
                                                        <input type="text" id="mao_email" name="mao_email"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone*</label>
                                                        <input type="text" id="mao_phone" name="mao_phone"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Offered Price*</label>
                                                        <input type="text" id="mao_price" name="mao_price"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Financing Required*</label>
                                                        <div class="selected-box">
                                                            <select class="selectpicker" id="mao_financing"
                                                                name="mao_financing">
                                                                <option value="Yes">Yes </option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>additional Comments/Conditions*</label>
                                                        <textarea class="form-control input-message" rows="4"
                                                            id="mao_comments" name="mao_comments"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Preferred Contact*</label>
                                                        <div class="radio">
                                                            <label><input type="radio" id="mao_radio" name="mao_radio"
                                                                    value="email" checked>Email</label>
                                                        </div>
                                                        <div class="radio">
                                                            <label><input type="radio" id="mao_radio" name="mao_radio"
                                                                    value="phone">Phone</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div id="recaptcha3"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <a class="button red" id="make_an_offer_submit">Submit <i
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
                                                <form class="gray-form reset_css" action="post" id="etf_form">
                                                    <input type="hidden" name="action" value="email_to_friend" />
                                                    <div>
                                                        <span style="color: red;" class="sp"></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Name*</label>
                                                        <input name="etf_name" type="text" id="etf_name"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email address*</label>
                                                        <input type="text" class="form-control" id="etf_email"
                                                            name="etf_email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Friends Email*</label>
                                                        <input type="Email" class="form-control" id="etf_fmail"
                                                            name="etf_fmail">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Message to friend*</label>
                                                        <textarea class="form-control input-message" id="etf_fmessage"
                                                            name="etf_fmessage" rows="4"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div id="recaptcha4"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <a class="button red" id="email_to_friend_submit">Submit <i
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
                                <a data-toggle="modal" data-target="#exampleModal5" data-whatever="@mdo" href="#"
                                    class="css_btn"><i class="far fa-arrow-alt-circle-down"></i>Solicita tasación</a>
                                <div class="modal fade bd-example-modal-lg" id="exampleModal5" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="exampleModalLabel">Trade-In Appraisal</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="tia_notice" class="form-notice" style="display:none;"></div>
                                                <form class="gray-form reset_css" action="post" id="tia_form">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="hidden" name="action" value="trade_in_appraisal" />
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h6>Contact Information </h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>First Name*</label>
                                                                        <input type="text" class="form-control"
                                                                            name="tia_firstname" id="tia_firstname">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Last Name *</label>
                                                                        <input type="text" class="form-control"
                                                                            name="tia_lastname" id="tia_lastname">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Work Phone*</label>
                                                                        <input type="Phone" class="form-control"
                                                                            name="tia_workphone" id="tia_workphone">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Phone*</label>
                                                                        <input type="Phone" class="form-control"
                                                                            name="tia_phone" id="tia_phone">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Email*</label>
                                                                        <input type="Email" class="form-control"
                                                                            name="tia_email" id="tia_email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Preferred Contact*</label>
                                                                        <div class="radio">
                                                                            <label><input type="radio" name="tia_optradio"
                                                                                    id="tia_optradio" value="email"
                                                                                    checked>Email</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <label><input type="radio" name="tia_optradio"
                                                                                    id="tia_optradio"
                                                                                    value="phone">Phone</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label>Comments*</label>
                                                                        <textarea class="form-control input-message"
                                                                            rows="4" name="tia_comments"
                                                                            id="tia_comments"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h6>Options</h6>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        name="tia_options[]"
                                                                                        value="Navigation">Navigation</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        name="tia_options[]"
                                                                                        value="Sunroof">Sunroof</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        name="tia_options[]"
                                                                                        value="Leather">Leather</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        name="tia_options[]"
                                                                                        value="Air conditioning">Air
                                                                                    conditioning</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        name="tia_options[]"
                                                                                        value="Air conditioning"> Power
                                                                                    Windows</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        name="tia_options[]"
                                                                                        value="Air conditioning"> Power
                                                                                    Locks</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        name="tia_options[]"
                                                                                        value="Air conditioning"> Power
                                                                                    Seats</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        name="tia_options[]"
                                                                                        value="Air conditioning"> Cruise
                                                                                    Control</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        name="tia_options[]"
                                                                                        value="Air conditioning">
                                                                                    Cassette</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        name="tia_options[]"
                                                                                        value="Air conditioning"> DVD
                                                                                    Player</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        name="tia_options[]"
                                                                                        value="Air conditioning"> Alloy
                                                                                    Wheels</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        name="tia_options[]"
                                                                                        value="Air conditioning"> Satellite
                                                                                    Radio</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        name="tia_options[]"
                                                                                        value="Air conditioning"> CD Player
                                                                                    / Changer</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="checkbox">
                                                                                <label><input type="checkbox"
                                                                                        name="tia_options[]"
                                                                                        value="Air conditioning"> AM/FM
                                                                                    Stereo</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h6>Vehicle Information </h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Year*</label>
                                                                        <input type="text" class="form-control"
                                                                            name="tia_year" id="tia_year">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Make*</label>
                                                                        <input type="text" class="form-control"
                                                                            name="tia_make" id="tia_make">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Model*</label>
                                                                        <input type="text" class="form-control"
                                                                            name="tia_model" id="tia_model">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Exterior Colour*</label>
                                                                        <input type="text" class="form-control"
                                                                            name="tia_colour" id="tia_colour">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>VIN*</label>
                                                                        <input type="text" class="form-control"
                                                                            name="tia_vin" id="tia_vin">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Kilometres *</label>
                                                                        <input type="text" class="form-control"
                                                                            name="tia_kilometers" id="tia_kilometers">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Engine *</label>
                                                                        <input type="text" class="form-control"
                                                                            name="tia_engine" id="tia_engine">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Doors </label>
                                                                        <div class="selected-box">
                                                                            <select class="selectpicker" name="tia_doors"
                                                                                id="tia_doors">
                                                                                <option value="2">2 </option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Transmission </label>
                                                                        <div class="selected-box">
                                                                            <select class="selectpicker"
                                                                                name="tia_transmission"
                                                                                id="tia_transmission">
                                                                                <option value="Automatic">Automatic</option>
                                                                                <option value="Manual">Manual</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Drivetrain </label>
                                                                        <div class="selected-box">
                                                                            <select class="selectpicker"
                                                                                name="tia_drivetrain" id="tia_drivetrain">
                                                                                <option value="AWD">AWD</option>
                                                                                <option value="2WD">2WD</option>
                                                                                <option value="4WD">4WD</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">

                                                                <div class="col-md-12">
                                                                    <h6>Vehicle Rating </h6>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Body (dents, dings, rust, rot, damage)
                                                                        </label>
                                                                        <div class="selected-box">
                                                                            <select class="selectpicker"
                                                                                name="tia_vehicle_rating_body"
                                                                                id="tia_vehicle_rating_body">
                                                                                <option value="1">1 </option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10 best</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Tires (tread wear, mismatched) </label>
                                                                        <div class="selected-box">
                                                                            <select class="selectpicker"
                                                                                name="tia_vehicle_rating_tires"
                                                                                id="tia_vehicle_rating_tires">
                                                                                <option value="1">1 </option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10 best</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Engine (running condition, burns oil,
                                                                            knocking) </label>
                                                                        <div class="selected-box">
                                                                            <select class="selectpicker"
                                                                                name="tia_vehicle_rating_engine"
                                                                                id="tia_vehicle_rating_engine">
                                                                                <option value="1">1 </option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10 best</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Transmission / Clutch (slipping, hard shift,
                                                                            grinds) </label>
                                                                        <div class="selected-box">
                                                                            <select class="selectpicker"
                                                                                name="tia_vehicle_rating_clutch"
                                                                                id="tia_vehicle_rating_clutch">
                                                                                <option value="1">1 </option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10 best</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Glass (chips, cracks, pitted) </label>
                                                                        <div class="selected-box">
                                                                            <select class="selectpicker"
                                                                                name="tia_vehicle_rating_glass"
                                                                                id="tia_vehicle_rating_glass">
                                                                                <option value="1">1 </option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10 best</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Interior (rips, tears, burns, faded/worn)
                                                                        </label>
                                                                        <div class="selected-box">
                                                                            <select class="selectpicker"
                                                                                name="tia_vehicle_rating_interior"
                                                                                id="tia_vehicle_rating_interior">
                                                                                <option value="1">1 </option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10 best</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Exhaust (rusted, leaking, noisy) </label>
                                                                        <div class="selected-box">
                                                                            <select class="selectpicker"
                                                                                name="tia_vehicle_rating_exhaust"
                                                                                id="tia_vehicle_rating_exhaust">
                                                                                <option value="1">1 </option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                                <option value="6">6</option>
                                                                                <option value="7">7</option>
                                                                                <option value="8">8</option>
                                                                                <option value="9">9</option>
                                                                                <option value="10">10 best</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h6>VEHICLE HISTORY </h6>
                                                                    <div class="form-group">
                                                                        <label>Was it ever a lease or rental return?
                                                                        </label>
                                                                        <div class="selected-box">
                                                                            <select class="selectpicker"
                                                                                name="tia_vehical_info_1"
                                                                                id="tia_vehical_info_1">
                                                                                <option value="yes">yes </option>
                                                                                <option value="no">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Is the odometer operational and accurate?
                                                                        </label>
                                                                        <div class="selected-box">
                                                                            <select class="selectpicker"
                                                                                name="tia_vehical_info_2"
                                                                                id="tia_vehical_info_2">
                                                                                <option value="yes">yes </option>
                                                                                <option value="no">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Detailed service records available? </label>
                                                                        <div class="selected-box">
                                                                            <select class="selectpicker"
                                                                                name="tia_vehical_info_3"
                                                                                id="tia_vehical_info_3">
                                                                                <option value="yes">yes </option>
                                                                                <option value="no">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h6>Title History </h6>
                                                                    <div class="form-group">
                                                                        <label>Is there a lienholder? </label>
                                                                        <input type="Email" class="form-control"
                                                                            name="tia_lineholder_email"
                                                                            id="tia_lineholder_email">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Who holds this title? </label>
                                                                        <input type="Email" class="form-control"
                                                                            name="tia_titleholder_email"
                                                                            id="tia_titleholder_email">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-md-12 vehicle-assessment">
                                                            <h6>Vehicle Assessment </h6>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Does all equipment and accessories work
                                                                    correctly?</label>
                                                                <textarea class="form-control input-message" rows="4"
                                                                    name="tia_textarea_1" id="tia_textarea1"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Did you buy the vehicle new? </label>
                                                                <textarea class="form-control input-message" rows="4"
                                                                    name="tia_textarea_2" id="tia_textarea2"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Has the vehicle ever been in any accidents? </label>
                                                                <textarea class="form-control input-message" rows="4"
                                                                    name="tia_textarea_3" id="tia_textarea3"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Is there existing damage on the vehicle? Where?
                                                                </label>
                                                                <textarea class="form-control input-message" rows="4"
                                                                    name="tia_textarea_4" id="tia_textarea4"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Has the vehicle ever had paint work performed?
                                                                </label>
                                                                <textarea class="form-control input-message" rows="4"
                                                                    name="tia_textarea_5" id="tia_textarea5"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Is the title designated 'Salvage' or 'Reconstructed'?
                                                                </label>
                                                                <textarea class="form-control input-message" rows="4"
                                                                    name="tia_textarea_6" id="tia_textarea6"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group captcha">
                                                                <div id="recaptcha5"></div>
                                                            </div>
                                                            <div class="form-group">
                                                                <a class="button red" id="trade_in_appraisal_submit">Submit
                                                                    <i class="fa fa-spinner fa-spin fa-fw btn-loader"
                                                                        style="display: none;"></i></a>
                                                            </div>
                                                        </div>
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
                            <img class="img-fluid" src="images/detail/big/01.jpg" alt="">
                            <img class="img-fluid" src="images/detail/big/02.jpg" alt="">
                            <img class="img-fluid" src="images/detail/big/03.jpg" alt="">
                            <img class="img-fluid" src="images/detail/big/04.jpg" alt="">
                            <img class="img-fluid" src="images/detail/big/05.jpg" alt="">
                            <img class="img-fluid" src="images/detail/big/06.jpg" alt="">
                            <img class="img-fluid" src="images/detail/big/07.jpg" alt="">
                            <img class="img-fluid" src="images/detail/big/08.jpg" alt="">
                        </div>
                        <div class="slider slider-nav">
                            <img class="img-fluid" src="images/detail/thum/01.jpg" alt="">
                            <img class="img-fluid" src="images/detail/thum/02.jpg" alt="">
                            <img class="img-fluid" src="images/detail/thum/03.jpg" alt="">
                            <img class="img-fluid" src="images/detail/thum/04.jpg" alt="">
                            <img class="img-fluid" src="images/detail/thum/05.jpg" alt="">
                            <img class="img-fluid" src="images/detail/thum/06.jpg" alt="">
                            <img class="img-fluid" src="images/detail/thum/07.jpg" alt="">
                            <img class="img-fluid" src="images/detail/thum/08.jpg" alt="">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="car-details-sidebar">
                        <div class="details-block details-weight">
                            <h5>DESCRIPTION</h5>
                            <ul>
                                <li> <span>Make</span> <strong class="text-right">BMW</strong></li>
                                <li> <span>Model</span> <strong class="text-right">7-series</strong></li>
                                <li> <span>Registration date </span> <strong class="text-right">2017</strong></li>
                                <li> <span>Mileage</span> <strong class="text-right">25,000 mi</strong></li>
                                <li> <span>Condition</span> <strong class="text-right">New</strong></li>
                                <li> <span>Exterior Color</span> <strong class="text-right">Silver</strong></li>
                                <li> <span>Interior Color</span> <strong class="text-right">Brown (Leather)</strong></li>
                                <li> <span>Drivetrain</span> <strong class="text-right">FWD</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
