@extends('layouts.app')

@section('content')

       <!-- Header-->
       <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Spielregeln</h1>
                        <p class="fs-4">Alle Spielregeln des Das!WMTippspiel finden sie hier! </p>
                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                
                                <h2 class="fs-4 fw-bold">Punktevergabe</h2>
                                <p class="mb-0">Wenn ihr Tipp genau mit dem Ergebnis übereinstimmt bekommen sie drei Punkte. Sofern nur das Torverhältnis übereinstimmt bekomen sie zwei Punkte. Wenn sie nur den richtigen Gewinner bzw. zugleich den richtigen Verlierer getippt haben bekommen sie einen Punkt. Ist der Tipp falsch, dann werden keine Punkte verteilt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                
                                <h2 class="fs-4 fw-bold">Tippabgabe</h2>
                                <p class="mb-0">Die Tippabgabe kann nur online auf unserer Webseite www.Das!WMTippspiel.de oder in unserer App vorgenommen werden. Eine Tippabgabe per Mail, Telefon, Brieftaube usw. ist nicht möglich! Die Tipps können bis 1 Stunde vor Spielbeginn abgegeben werden. Bereits abgegebene Tipps können bis 1 Stunde vor Spielbeginn beliebig oft verändert werden.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                
                                <h2 class="fs-4 fw-bold">Sonstiges</h2>
                                <p class="mb-0">Das gesamte Tippspiel ist für alle mit Account kostenlos. Die Tipps der anderen Mitspieler können unmittelbar nach Spielbeginn eingesehen werden. Einsehbar sind alle Tipps für Spiele die schon begonnen haben.</p>
                            </div>
                        </div>
                    </div>
                                       
                </div>
            </div>
        </section>


@endsection
