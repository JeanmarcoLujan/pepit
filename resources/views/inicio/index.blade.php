@extends('layouts.app')

@section('contenido')
   <!-- Page content -->
    <section class="ContentPage full-width">
        <!-- Nav Info -->
        <div class="ContentPage-Nav full-width">  
        </div>
        <div class="row">
            <!-- Tiles -->
            <article class="col s12">
                <div class="full-width center-align" style="margin: 40px 0;">
                    <div class="tile" id="imagen1">
                        
                    </div>

                    <div class="tile" id="imagen2">
                       
                    </div>

                    <div class="tile" id="imagen3">
                        
                    </div>

                </div>   
            </article>
        </div>

        <div class="container">
            <!-- Timeline -->
            <article class="col s12">
                <h4> Información Institucional</h4>
                <hr>
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge bg-info"><i class="zmdi zmdi-dot-circle"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h5 class="timeline-title"> Misión </h5>
                                <p><small class="text-muted"><i class="zmdi zmdi-time"></i> </small></p>
                            </div>
                            <div class="timeline-body">
                                <p align="justify">Somos una institución estatal que busca fortalecer la competitividad y el aumento de la productividad de las empresas existentes en el Parque Industrial de Trujillo, facilitando sus procesos de formalización de la posesión de las áreas de terreno que ocupan, con arreglo a las leyes y normas vigentes, darles estabilidad jurídica para que impulsen y consoliden su desarrollo.

                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge bg-primary"><i class="zmdi zmdi-dot-circle"></i></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h5 class="timeline-title">Visión</h5>
                                <p><small class="text-muted"><i class="zmdi zmdi-time"></i> </small></p>
                            </div>
                            <div class="timeline-body">
                                <p align="justify">Ser un Parque Industrial de Trujillo consolidado, reconocido por la calidad de sus productos, servicios, por ser eficiente y atractivo con una infraestructura eficaz y funcional condiciones que permiten fortalecer la competitividad y productividad de las micro, pequeñas, medianas y grandes empresas industriales formalmente establecidas, en un ambiente de cooperación, mentalidad abierta al cambio promoviendo su desarrollo sostenible con responsabilidad social empresarial y que sus procesos han evolucionado hacia tecnologías limpias y sustentables con conciencia ecológica y social, constituido como un polo de desarrollo, contribuyendo al crecimiento económico regional y nacional.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </article>
        </div>

    </section>
@endsection