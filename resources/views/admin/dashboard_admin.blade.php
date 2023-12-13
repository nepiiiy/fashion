@extends('layouts.admin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning elevation-1"><svg xmlns="http://www.w3.org/2000/svg" width="50"
                                height="50" viewBox="0 0 64 64">
                                <path fill="#000"
                                    d="m18.811 7.785l.124.194a165.79 165.79 0 0 0-5.368.801c-1.841.31-5.796 1.776-8.428 2.802l-.016-.189L2 12.408l.898 12.334l3.335.284l-.02-.236l8.688.672c.154 10.261-1.067 22.453-1.897 29.581l-.291-.067l-.228 4.485S20.842 61.83 31.992 62v-4.64l.006-43.565L22.438 2l-3.627 5.785M3.834 23.818l-.779-10.701l1.175-.383l.911 11.196l-1.307-.112m27.158 37.161c-8.498-.235-15.258-1.734-17.467-2.281l.126-2.489c2.708.575 9.74 1.914 17.341 2.131v2.639m-1.866-6.068c-1.294 0-2.346-.979-2.346-2.186s1.052-2.186 2.346-2.186c1.295 0 2.346.979 2.346 2.186s-1.051 2.186-2.346 2.186m0-7.973c-1.294 0-2.346-.979-2.346-2.187c0-1.206 1.052-2.185 2.346-2.185c1.295 0 2.346.979 2.346 2.185c0 1.208-1.051 2.187-2.346 2.187m0-7.972c-1.294 0-2.346-.979-2.346-2.186c0-1.207 1.052-2.187 2.346-2.187c1.295 0 2.346.979 2.346 2.187c0 1.206-1.051 2.186-2.346 2.186m0-7.974c-1.294 0-2.346-.978-2.346-2.185c0-1.208 1.052-2.187 2.346-2.187c1.295 0 2.346.979 2.346 2.187c0 1.208-1.051 2.185-2.346 2.185m2.346-10.158c0 1.207-1.051 2.186-2.346 2.186c-1.294 0-2.346-.979-2.346-2.186s1.052-2.186 2.346-2.186c1.295 0 2.346.979 2.346 2.186m-.898-7.207l-4.605 3.532l-5.976-9.378l2.549-4.064l8.032 9.91" />
                                <path fill="#000"
                                    d="m58.879 11.393l-.016.189c-2.632-1.024-6.588-2.492-8.428-2.802a168.624 168.624 0 0 0-5.368-.801l.124-.194L41.564 2H22.438l4.981 6.143h9.164l-4.585 5.652l1.091.836v47.34c10.603-.301 18.428-2.51 18.428-2.51l-.228-4.485l-.29.068c-.83-7.129-2.053-19.321-1.898-29.582l8.685-.672l-.02.236l3.336-.284L62 12.408l-3.121-1.015M41.46 3.716l2.549 4.065l-5.977 9.378l-4.61-3.533l8.038-9.91m8.891 52.496l.126 2.485c-2.114.521-8.395 1.913-16.388 2.238v-2.631c7.123-.268 13.668-1.533 16.262-2.092m9.815-32.394l-1.308.111l.914-11.194l1.173.382l-.779 10.701" />
                            </svg></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Baju</span>
                            <span class="info-box-number">
                                {{ $baju }}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><svg xmlns="http://www.w3.org/2000/svg"
                                width="48" height="48" viewBox="0 0 48 48">
                                <g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="4">
                                    <path d="M33 44H42L38 4H10L6 44H15L24 19L33 44Z" />
                                    <path d="M24 4V9.5" />
                                    <path d="M17.0004 4C17.0004 4 17.0004 10 15.0004 12C13.0004 14 8.90039 15 8.90039 15" />
                                    <path d="M31 4C31 4 31 10 33 12C35 14 39.1 15 39.1 15" />
                                </g>
                            </svg></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Celana</span>
                            <span class="info-box-number">{{ $celana }}</span>
                        </div>
                    </div>
                </div>

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><svg xmlns="http://www.w3.org/2000/svg"
                                width="45" height="45" viewBox="0 0 15 15">
                                <path fill="#000"
                                    d="M9.5 7a9.97 9.97 0 0 1-1.315-.948L6.01 3.221a.558.558 0 0 0-1 .279H5V5H3.209a.5.5 0 0 1-.357-.148S2.5 4 2 4h-.5a.5.5 0 0 0-.5.5V9h5.5c1.5 0 2 1 3.5 1h4v-.5C14 8 10.547 7.594 9.5 7Zm0 4a3.131 3.131 0 0 1-1.526-.447A4.1 4.1 0 0 0 6 10H1v1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5V11a3.134 3.134 0 0 1 1.526.447A4.1 4.1 0 0 0 9.5 12h4a.5.5 0 0 0 .5-.5V11Z" />
                            </svg></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Sepatu</span>
                            <span class="info-box-number">{{ $sepatu }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><svg xmlns="http://www.w3.org/2000/svg"
                                width="45" height="45" viewBox="0 0 15 15">
                                <path fill="#000"
                                    d="M5 3.5a2.5 2.5 0 0 1 5 0V4h1v-.5a3.5 3.5 0 1 0-7 0V4h1v-.5ZM1.904 6.334A1.5 1.5 0 0 1 3.395 5h8.21a1.5 1.5 0 0 1 1.49 1.334l.779 7A1.5 1.5 0 0 1 12.383 15H2.617a1.5 1.5 0 0 1-1.49-1.666l.777-7Z" />
                            </svg></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Tas</span>
                            <span class="info-box-number">{{ $tas }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><svg xmlns="http://www.w3.org/2000/svg"
                                width="50" height="50" viewBox="0 0 24 24">
                                <g fill="none" fill-rule="evenodd">
                                    <path
                                        d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
                                    <path fill="#000"
                                        d="M14.085 5H14a8 8 0 0 0-8 7.9l-3.614 2.81a1.01 1.01 0 0 0-.093 1.497a1.52 1.52 0 0 0 1.1.457c.22.001.436-.042.655-.066c.272-.03.717-.052 1.546.316c1.064.473 2.143 1.008 3.128 1.393c1.018.397 2.072.693 3.215.693c2.224 0 4.477-1.112 7.334-3.864a38.47 38.47 0 0 0 1.828-.141A1 1 0 0 0 22 15v-2a8.003 8.003 0 0 0-5-7.418V5.5a1.5 1.5 0 0 0-2.915-.5ZM5.563 15.774L7.5 14.266c3.087 1.155 5.845 1.743 8.73 1.882C14.415 17.573 13.08 18 11.936 18c-.793 0-1.584-.204-2.488-.557c-.936-.365-1.857-.83-3.043-1.357a6.671 6.671 0 0 0-.843-.312Z" />
                                </g>
                            </svg></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Topi</span>
                            <span class="info-box-number">{{ $topi }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>
@endsection
